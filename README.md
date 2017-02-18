# Last.fm API client for PHP 7+

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This package provides an intuitive fluid interface to retrieve data from the last.fm API. At the moment only 
user-related methods are supported, like retrieving the most played artists for last year. Adding more methods would 
be easy, so let me know if you could use those. 

## Install

Via Composer

``` bash
$ composer require barryvanveen/lastfm
```

## API keys
You can create a last.fm API account at [http://www.last.fm/api/account/create](http://www.last.fm/api/account/create). 

You cannot view existing accounts after their creation, so store your credentials save.

## Usage

**Basic Example**
```php
use Barryvanveen\Lastfm\Lastfm;

public function index()
{
    $albums = Lastfm::userTopAlbums('YourUserName')->get();
    
    return view('home', compact('albums'));
}
```

**All available methods**
```php
    // Get top albums for user
    $albums = Lastfm::userTopAlbums('YourUserName', 'ApiKey')->get();
    
    // Get top artists for user
    $artists = Lastfm::userTopArtists('YourUserName', 'ApiKey')->get();
    
    // Get recent tracks for user
    $tracks = Lastfm::userRecentTracks('YourUserName', 'ApiKey')->get();
    
    // Get user info
    $info = Lastfm::userInfo('YourUserName', 'ApiKey')->get();
    
    // Get track that user is now listening to
    $trackOrFalse = Lastfm::nowListening('YourUserName', 'ApiKey');
                           
    // Define time period for results
    $albums = Lastfm::userTopAlbums('YourUserName', 'ApiKey')
                    ->period(Barryvanveen\Lastfm\Constants::PERIOD_WEEK);
                    ->get();
                     
    // Limit number of results
    $albums = Lastfm::userTopAlbums('YourUserName', 'ApiKey')
                    ->limit(5);
                    ->get();                            
```

**Valid time periods**
```php
    const PERIOD_WEEK     = '7day';
    const PERIOD_MONTH    = '1month';
    const PERIOD_3_MONTHS = '3month';
    const PERIOD_6_MONTHS = '6month';
    const PERIOD_YEAR     = '12month';
    const PERIOD_OVERALL  = 'overall';
```

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
