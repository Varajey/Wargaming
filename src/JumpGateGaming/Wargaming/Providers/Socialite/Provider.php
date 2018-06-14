<?php

namespace JumpGateGaming\Wargaming\Providers\Socialite;

use Laravel\Socialite\Two\ProviderInterface;
use SocialiteProviders\Manager\OAuth2\AbstractProvider;
use SocialiteProviders\Manager\OAuth2\User;

class Provider extends AbstractProvider implements ProviderInterface
{
    /**
     * Unique Provider Identifier.
     */
    const IDENTIFIER = 'WARGAMING';

    protected $stateless = true;

    /**
     * {@inheritdoc}
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase('https://api.worldoftanks.com/wot/auth/login/', $state);
    }

    /**
     * {@inheritdoc}
     */
    protected function getTokenUrl()
    {
        return 'https://www.bungie.net/Platform/App/OAuth/Token/';
    }

    /**
     * Get the GET parameters for the code request.
     *
     * @param  string|null $state
     *
     * @return array
     */
    protected function getCodeFields($state = null)
    {
        $fields = [
            'application_id' => $this->clientSecret,
            'redirect_uri'   => $this->redirectUrl,
        ];

        if ($this->usesState()) {
            $fields['state'] = $state;
        }

        return array_merge($fields, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessTokenResponse($code)
    {
        // Wargaming sends the data back in the initial response.
        return request()->all();
    }

    /**
     * @return \SocialiteProviders\Manager\OAuth2\User
     */
    public function user()
    {
        if ($this->hasInvalidState()) {
            throw new InvalidStateException();
        }

        $response = $this->getAccessTokenResponse($this->getCode());
        $token    = $this->parseAccessToken($response);

        $user = $this->mapUserToObject($this->getUserByToken($response));

        $this->credentialsResponseBody = $response;

        if ($user instanceof User) {
            $user->setAccessTokenResponseBody($this->credentialsResponseBody);
        }

        return $user->setToken($token)
            ->setRefreshToken($this->parseRefreshToken($response))
            ->setExpiresIn($this->parseExpiresIn($response));
    }

    /**
     * {@inheritdoc}
     */
    protected function getUserByToken($response)
    {
        return $response;
    }

    /**
     * {@inheritdoc}
     */
    protected function mapUserToObject(array $user)
    {
        return (new User())->setRaw($user)->map([
            'id'       => $user['account_id'],
            'nickname' => $user['nickname'],
            'name'     => $user['nickname'],
            'email'    => null,
            'avatar'   => null,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function getTokenFields($code)
    {
        return array_merge(parent::getTokenFields($code), [
            'grant_type' => 'authorization_code',
        ]);
    }
}
