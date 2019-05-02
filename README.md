# Last.fm API client for PHP 7

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

* [API keys](#api-keys)
* [Installation](#installation)
* [Laravel installation](#laravel-installation)
* [Usage](#usage)
    * [Basic example](#basic-example)
    * [Laravel example](#laravel-example)
    * [All available methods](#all-available-methods)
    * [Filtering results](#filtering-results)
    * [Valid time periods](#valid-time-periods)
* [Official API docs](#official-api-docs)

## API keys
You can create a last.fm API account at [http://www.last.fm/api/account/create](http://www.last.fm/api/account/create). 

## Installation

Via Composer

``` bash
$ composer require barryvanveen/lastfm
```

## Laravel installation

Add a LASTFM_API_KEY variable to your .env configuration. You could also publish the default configuration and alter it
 yourself:

```php
php  artisan vendor:publish --provider="Barryvanveen\Lastfm\LastfmServiceProvider"
```

Update `config/app.php` by adding the LastfmServiceProvider:
```php
'providers' => [
    ...
    Barryvanveen\Lastfm\LastfmServiceProvider::class,
];
```

If you are using Laravel 5.5 the service provider will be used automagically by Laravel's [package discovery](https://laravel.com/docs/5.5/packages#package-discovery).

Tested against Laravel 5.* but probably works in most versions because it is so simple. Please create an issue if it 
doesn't work for you. 

## Usage

### Basic example
```php
use Barryvanveen\Lastfm\Lastfm;
use GuzzleHttp\Client;
 
$lastfm = new Lastfm(new Client(), 'YourApiKey');
    
$albums = $lastfm->userTopAlbums('AnyUsername')->get();
```

### Laravel example
```php
use Barryvanveen\Lastfm\Lastfm;
 
public function index(Lastfm $lastfm)
{
    $albums = $lastfm->userTopAlbums('AnyUsername')->get();
    
    return view('home', compact('albums'));
}
```

### All available methods
```php
// Get top albums for user
$albums = $lastfm->userTopAlbums('AnyUsername')->get();
 
// Get top artists for user
$artists = $lastfm->userTopArtists('AnyUsername')->get();
 
// Get recent tracks for user
$tracks = $lastfm->userRecentTracks('AnyUsername')->get();
 
// Get user info
$info = $lastfm->userInfo('AnyUsername')->get();
 
// Get track that user is now listening to, or FALSE
$trackOrFalse = $lastfm->nowListening('AnyUsername'); 
 
// Get the weekly top albums given a starting day 
$albums = $lastfm->userWeeklyTopAlbums('AnyUsername', new \DateTime('2017-01-01'));                      
 
// Get the weekly top artists given a starting day 
$artists = $lastfm->userWeeklyTopArtists('AnyUsername', new \DateTime('2017-01-01'));
 
// Get the weekly top tracks given a starting day 
$tracks = $lastfm->userWeeklyTopTracks('AnyUsername', new \DateTime('2017-01-01'));
```

### Filtering results
```php
// Define time period for results
$lastfm->userTopAlbums('AnyUsername')
       ->period(Barryvanveen\Lastfm\Constants::PERIOD_WEEK)
       ->get();
                  
// Limit number of results
$lastfm->userTopAlbums('AnyUsername')
       ->limit(5)
       ->get();     
                 
// Retrieve paginated results
$lastfm->userTopAlbums('AnyUsername')
       ->limit(5)
       ->page(2)
       ->get();     
```

### Valid time periods
```php
// use these constants as an argument to ->period()
Barryvanveen\Lastfm\Constants::PERIOD_WEEK     = '7day';
Barryvanveen\Lastfm\Constants::PERIOD_MONTH    = '1month';
Barryvanveen\Lastfm\Constants::PERIOD_3_MONTHS = '3month';
Barryvanveen\Lastfm\Constants::PERIOD_6_MONTHS = '6month';
Barryvanveen\Lastfm\Constants::PERIOD_YEAR     = '12month';
Barryvanveen\Lastfm\Constants::PERIOD_OVERALL  = 'overall';
```

## Official API docs
Read the official API documentation at [http://www.last.fm/api](http://www.last.fm/api).

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing
Copy `phpunit.xml.dist` to `phpunit.xml` and fill in your own LASTFM_API_KEY. Then run the tests using:  

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email barryvanveen@gmail.com instead of using the issue tracker.

## Credits

- [Barry van Veen][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/barryvanveen/lastfm.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/barryvanveen/lastfm/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/barryvanveen/lastfm.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/barryvanveen/lastfm.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/barryvanveen/lastfm.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/barryvanveen/lastfm
[link-travis]: https://travis-ci.org/barryvanveen/lastfm
[link-scrutinizer]: https://scrutinizer-ci.com/g/barryvanveen/lastfm/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/barryvanveen/lastfm
[link-downloads]: https://packagist.org/packages/barryvanveen/lastfm
[link-author]: https://github.com/barryvanveen
[link-contributors]: ../../contributors
