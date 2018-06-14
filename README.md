# Installation

`composer require jummpgategaming/wargaming`

# Set up

Update your `config/services.php` to include `wargaming`.

```php
'wargaming' => [
    'client_id'     => null,
    'client_secret' => env('WARGAMING_API_KEY'),
    'redirect'      => env('WARGAMING_REDIRECT_URI'),
],
```

Obviously you will need to add these keys to your `.env` file.  You can register an application at 
[their api dashboard](https://developers.wargaming.net/applications/).

# Authentication

This package comes with support for authorization built in using Laravel Socialite Providers. You will need to do some 
extra set up if you want to use it.

1. Remove `Laravel\Socialite\SocialiteServiceProvider` from your `providers[]` array in `config\app.php` if you have 
added it already.
1. Add `\SocialiteProviders\Manager\ServiceProvider::class` to your `providers[]` array in `config\app.php`.
1. Add `SocialiteProviders\Manager\SocialiteWasCalled` event to your `listen[]` array in 
`app/Providers/EventServiceProvider`.
1. Add your listeners (i.e. the ones from the providers) to the `SocialiteProviders\Manager\SocialiteWasCalled[]` that 
you just created.
1. The listener that you add for this provider is 
`'JumpGateGaming\\Wargaming\\Providers\\Socialite\\WargamingExtendSocialite@handle',`.

Example:
```php
/**
 * The event handler mappings for the application.
 *
 * @var array
 */
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // add your listeners (aka providers) here
        'JumpGateGaming\\Wargaming\\Providers\\Socialite\\WargamingExtendSocialite@handle',
    ],
];
```

Now to use it you would just call `return Socialite::with('wargaming')->redirect();`.
