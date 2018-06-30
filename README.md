- [Installation](#installation)
- [Set up](#set-up)
    - [API Details](#api-details)
    - [Service Provider](#service-provider)
- [Authentication](#authentication)
- [Available Methods](#available-methods)
    - [World of Tanks](#world-of-tanks)
    - [World of Warships](#world-of-warships)
    - [World of Warplanes](#world-of-warplanes)

# Installation

`composer require jummpgategaming/wargaming`

# Set up
## API details
Update your `config/services.php` to include `wargaming`.

```php
'wargaming' => [
    'client_id'     => null,
    'client_secret' => env('WARGAMING_API_KEY'),
    'redirect'      => env('WARGAMING_REDIRECT_URI'),
],
```

## Service provider
You should add the provider to your `providers[]` array in `config/app.php`.

```php
'providers' => [
    ...
    JumpGateGaming\Wargaming\Providers\WargamingServiceProvider::class,
    ...
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

# Available methods
To call anything at all you will need to begin with calling `app('wargaming')`.  This is the entry point for everything 
else.  From there you call to the API you want to interact with.  That would be one of `tanks()`, `warships()` or 
`warplanes()`.  Next you call the overall section you want then the method.

Here's an example call:
```php
$wargaming = app('wargaming');
$tanks = $wargaming->tanks()->encyclopedia()->vehicles();
```

> The below lists represent all working methods.  Anything not listed here has not been added yet.

## World of Tanks
Group | Method | API Reference
----- | ------ | --------------
encyclopedia | vehicles | [List of Vehicles](https://developers.wargaming.net/reference/all/wot/encyclopedia/vehicles/)
&nbsp; | modules | [List of Modules](https://developers.wargaming.net/reference/all/wot/encyclopedia/modules/)

## World of Warships
Group | Method | API Reference
----- | ------ | --------------
encyclopedia | ships | [List of Ships](https://developers.wargaming.net/reference/all/wows/encyclopedia/ships)
ships | stats | [Player Ship Statistics](https://developers.wargaming.net/reference/all/wows/ships/stats/)

## World of Warplanes
Group | Method | API Reference
----- | ------ | --------------
encyclopedia | planes | [List of Aircraft](https://developers.wargaming.net/reference/all/wowp/encyclopedia/planes)
