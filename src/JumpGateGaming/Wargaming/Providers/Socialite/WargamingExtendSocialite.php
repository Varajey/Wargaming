<?php

namespace JumpGateGaming\Wargaming\Providers\Socialite;

use SocialiteProviders\Manager\SocialiteWasCalled;

class WargamingExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'wargaming', __NAMESPACE__.'\Provider'
        );
    }
}
