<?php

declare(strict_types=1);

namespace Barryvanveen\Lastfm;

use Barryvanveen\Lastfm\Exceptions\InvalidPeriodException;

class Lastfm
{
    /** @var array */
    protected $query;

    /** @var null|string */
    protected $pluck = null;

    /** @var null|array */
    protected $data = null;

    /**
     * Protected Lastfm constructor. Use any of the named constructors (eg. userInfo, userTopAlbums, etc) to
     * instantiate a Lastfm object.
     *
     * @param array $query
     * @param null  $pluck
     */
    protected function __construct(array $query, $pluck = null)
    {
        $this->query = $query;

        $this->pluck = $pluck;
    }

    /**
     * @param string $username
     * @param string $api_key
     *
     * @return Lastfm
     */
    public static function userInfo(string $username, string $api_key): Lastfm
    {
        $query = [
            'method' => 'user.getInfo',
            'format' => 'json',
            'user' => $username,
            'api_key' => $api_key,
        ];

        $pluck = 'user';

        return new self($query, $pluck);
    }

    /**
     * @param string $username
     * @param string $api_key
     *
     * @return Lastfm
     */
    public static function userTopAlbums(string $username, string $api_key): Lastfm
    {
        $query = [
            'method' => 'user.getTopAlbums',
            'format' => 'json',
            'user' => $username,
            'api_key' => $api_key,
        ];

        $pluck = 'topalbums.album';

        return new self($query, $pluck);
    }

    /**
     * @param string $username
     * @param string $api_key
     *
     * @return Lastfm
     */
    public static function userTopArtists(string $username, string $api_key): Lastfm
    {
        $query = [
            'method' => 'user.getTopArtists',
            'format' => 'json',
            'user' => $username,
            'api_key' => $api_key,
        ];

        $pluck = 'topartists.artist';

        return new self($query, $pluck);
    }

    /**
     * @param string $username
     * @param string $api_key
     *
     * @return Lastfm
     */
    public static function userTopTracks(string $username, string $api_key): Lastfm
    {
        $query = [
            'method' => 'user.getTopTracks',
            'format' => 'json',
            'user' => $username,
            'api_key' => $api_key,
        ];

        $pluck = 'toptracks.track';

        return new self($query, $pluck);
    }

    /**
     * @param string $username
     * @param string $api_key
     *
     * @return Lastfm
     */
    public static function userRecentTracks(string $username, string $api_key): Lastfm
    {
        $query = [
            'method' => 'user.getRecentTracks',
            'format' => 'json',
            'user' => $username,
            'api_key' => $api_key,
        ];

        $pluck = 'recenttracks.track';

        return new self($query, $pluck);
    }

    /**
     * Set or overwrite the period requested from the Last.fm API.
     *
     * @param string $period
     *
     * @throws InvalidPeriodException
     *
     * @return $this
     */
    public function period(string $period)
    {
        if (!in_array($period, Constants::PERIODS)) {
            throw new InvalidPeriodException('Request period is not valid. Valid values are defined in \Barryvanveen\Lastfm\Constants::PERIODS.');
        }

        $this->query = array_merge($this->query, ['period' => $period]);

        return $this;
    }

    /**
     * Set or overwrite the number of items that is requested from the Last.fm API.
     *
     * @param int $limit
     *
     * @return $this
     */
    public function limit(int $limit)
    {
        $this->query = array_merge($this->query, ['limit' => $limit]);

        return $this;
    }

    /**
     * Set or overwrite the page of items that is requested from the Last.fm API.
     *
     * @param int $page
     *
     * @return $this
     */
    public function page(int $page)
    {
        $this->query = array_merge($this->query, ['page' => $page]);

        return $this;
    }

    /**
     * Retrieve results from the Last.fm API.
     *
     * @return array
     */
    public function get(): array
    {
        $dataFetcher = new DataFetcher();

        $this->data = $dataFetcher->get($this->query, $this->pluck);

        return $this->data;
    }

    public static function nowListening(string $username, string $api_key)
    {
        $query = [
            'method' => 'user.getRecentTracks',
            'format' => 'json',
            'user' => $username,
            'api_key' => $api_key,
        ];

        $pluck = 'recenttracks.track.0';

        $lastfm = new self($query, $pluck);
        $most_recent_track = $lastfm->limit(1)->get();

        if (!isset($most_recent_track['@attr']['nowplaying'])) {
            return false;
        }

        return $most_recent_track;
    }
}
