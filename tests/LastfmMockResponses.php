<?php

declare(strict_types=1);

namespace Tests;

class LastfmMockResponses
{
    public static function apiKeyMissingErrorMessage(): string
    {
        return '
        {
            "error": 6,
            "message": "Invalid parameters - Your request is missing a required parameter"
        }
        ';
    }

    public static function empty(): string
    {
        return '{}';
    }

    public static function notNowListening(): string
    {
        return '
        {
            "recenttracks": {
                "track": [
                    {
                        "artist": {
                            "#text": "Simon & Garfunkel",
                            "mbid": "5d02f264-e225-41ff-83f7-d9b1f0b1874a"
                        },
                        "name": "Still Crazy After All These Years - Live",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "The Concert In Central Park (Live)",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Simon+&+Garfunkel/_/Still+Crazy+After+All+These+Years+-+Live",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/bdaef1abba99152cfef3c718c998d8c0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/bdaef1abba99152cfef3c718c998d8c0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/bdaef1abba99152cfef3c718c998d8c0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/bdaef1abba99152cfef3c718c998d8c0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1488908387",
                            "#text": "07 Mar 2017, 17:39"
                        }
                    }
                ],
                "@attr": {
                    "user": "RJ",
                    "page": "1",
                    "perPage": "1",
                    "totalPages": "128127",
                    "total": "128127"
                }
            }
        }
        ';
    }

    public static function nowListening(): string
    {
        return '
        {
            "recenttracks": {
                "track": [
                    {
                        "artist": {
                            "#text": "Dawn of Midi",
                            "mbid": "273dee46-43b8-4385-bdd2-d98bbad3c13e"
                        },
                        "name": "Moon",
                        "streamable": "0",
                        "mbid": "9df9d865-0d60-423f-8617-8292640e0269",
                        "album": {
                            "#text": "Dysnomia",
                            "mbid": "dded3732-2e55-4b18-a915-4f1e5de28d15"
                        },
                        "url": "https://www.last.fm/music/Dawn+of+Midi/_/Moon",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "nowplaying": "true"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Dawn of Midi",
                            "mbid": "273dee46-43b8-4385-bdd2-d98bbad3c13e"
                        },
                        "name": "Nix",
                        "streamable": "0",
                        "mbid": "d914eb2c-0708-4aeb-9d69-d7675b6f2de4",
                        "album": {
                            "#text": "Dysnomia",
                            "mbid": "dded3732-2e55-4b18-a915-4f1e5de28d15"
                        },
                        "url": "https://www.last.fm/music/Dawn+of+Midi/_/Nix",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489264926",
                            "#text": "11 Mar 2017, 20:42"
                        }
                    }
                ],
                "@attr": {
                    "user": "Barryvanveen",
                    "page": "1",
                    "perPage": "1",
                    "totalPages": "40007",
                    "total": "40007"
                }
            }
        }
        ';
    }

    public static function undecodableJson(): string
    {
        return 'asdasdasd';
    }

    public static function userInfo(): string
    {
        return '
        {
            "user": {
                "name": "Barryvanveen",
                "realname": "Barry",
                "image": [
                    {
                        "#text": "",
                        "size": "small"
                    },
                    {
                        "#text": "",
                        "size": "medium"
                    },
                    {
                        "#text": "",
                        "size": "large"
                    },
                    {
                        "#text": "",
                        "size": "extralarge"
                    }
                ],
                "url": "https://www.last.fm/user/Barryvanveen",
                "country": "Netherlands",
                "age": "0",
                "gender": "n",
                "subscriber": "0",
                "playcount": "40018",
                "playlists": "0",
                "bootstrap": "0",
                "registered": {
                    "#text": 1153760786,
                    "unixtime": "1153760786"
                },
                "type": "user"
            }
        }
        ';
    }

    public static function userRecentTracks(): string
    {
        return '
        {
            "recenttracks": {
                "track": [
                    {
                        "artist": {
                            "#text": "Dawn of Midi",
                            "mbid": "273dee46-43b8-4385-bdd2-d98bbad3c13e"
                        },
                        "name": "Algol",
                        "streamable": "0",
                        "mbid": "c4a5d0f5-9d09-4dfe-af31-f06df163da85",
                        "album": {
                            "#text": "Dysnomia",
                            "mbid": "dded3732-2e55-4b18-a915-4f1e5de28d15"
                        },
                        "url": "https://www.last.fm/music/Dawn+of+Midi/_/Algol",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "nowplaying": "true"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Dawn of Midi",
                            "mbid": "273dee46-43b8-4385-bdd2-d98bbad3c13e"
                        },
                        "name": "Ijiraq",
                        "streamable": "0",
                        "mbid": "caa264df-90e9-4d5e-b541-b6a61b9165b9",
                        "album": {
                            "#text": "Dysnomia",
                            "mbid": "dded3732-2e55-4b18-a915-4f1e5de28d15"
                        },
                        "url": "https://www.last.fm/music/Dawn+of+Midi/_/Ijiraq",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489265716",
                            "#text": "11 Mar 2017, 20:55"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Dawn of Midi",
                            "mbid": "273dee46-43b8-4385-bdd2-d98bbad3c13e"
                        },
                        "name": "Ymir",
                        "streamable": "0",
                        "mbid": "0706aa7b-dda4-4e62-9468-e3e0b4b71516",
                        "album": {
                            "#text": "Dysnomia",
                            "mbid": "dded3732-2e55-4b18-a915-4f1e5de28d15"
                        },
                        "url": "https://www.last.fm/music/Dawn+of+Midi/_/Ymir",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489265449",
                            "#text": "11 Mar 2017, 20:50"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Dawn of Midi",
                            "mbid": "273dee46-43b8-4385-bdd2-d98bbad3c13e"
                        },
                        "name": "Moon",
                        "streamable": "0",
                        "mbid": "9df9d865-0d60-423f-8617-8292640e0269",
                        "album": {
                            "#text": "Dysnomia",
                            "mbid": "dded3732-2e55-4b18-a915-4f1e5de28d15"
                        },
                        "url": "https://www.last.fm/music/Dawn+of+Midi/_/Moon",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489265145",
                            "#text": "11 Mar 2017, 20:45"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Dawn of Midi",
                            "mbid": "273dee46-43b8-4385-bdd2-d98bbad3c13e"
                        },
                        "name": "Nix",
                        "streamable": "0",
                        "mbid": "d914eb2c-0708-4aeb-9d69-d7675b6f2de4",
                        "album": {
                            "#text": "Dysnomia",
                            "mbid": "dded3732-2e55-4b18-a915-4f1e5de28d15"
                        },
                        "url": "https://www.last.fm/music/Dawn+of+Midi/_/Nix",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489264926",
                            "#text": "11 Mar 2017, 20:42"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Dawn of Midi",
                            "mbid": "273dee46-43b8-4385-bdd2-d98bbad3c13e"
                        },
                        "name": "Atlas",
                        "streamable": "0",
                        "mbid": "4cee2007-8a90-4ca8-b075-1d6a3ffe2ef5",
                        "album": {
                            "#text": "Dysnomia",
                            "mbid": "dded3732-2e55-4b18-a915-4f1e5de28d15"
                        },
                        "url": "https://www.last.fm/music/Dawn+of+Midi/_/Atlas",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489264528",
                            "#text": "11 Mar 2017, 20:35"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Dawn of Midi",
                            "mbid": "273dee46-43b8-4385-bdd2-d98bbad3c13e"
                        },
                        "name": "Sinope",
                        "streamable": "0",
                        "mbid": "e2f86dbd-ad09-4aae-bc67-0cc17e9b314f",
                        "album": {
                            "#text": "Dysnomia",
                            "mbid": "dded3732-2e55-4b18-a915-4f1e5de28d15"
                        },
                        "url": "https://www.last.fm/music/Dawn+of+Midi/_/Sinope",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489264116",
                            "#text": "11 Mar 2017, 20:28"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Dawn of Midi",
                            "mbid": "273dee46-43b8-4385-bdd2-d98bbad3c13e"
                        },
                        "name": "Io",
                        "streamable": "0",
                        "mbid": "5a1929c4-cb88-4758-8347-8210e47c3e97",
                        "album": {
                            "#text": "Dysnomia",
                            "mbid": "dded3732-2e55-4b18-a915-4f1e5de28d15"
                        },
                        "url": "https://www.last.fm/music/Dawn+of+Midi/_/Io",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/33d79fdf33d14cc59df1148eb61e636a.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489263753",
                            "#text": "11 Mar 2017, 20:22"
                        }
                    },
                    {
                        "artist": {
                            "#text": "IZAH",
                            "mbid": "5850f3cb-1c7c-4e93-967f-99ce1d0ccffd"
                        },
                        "name": "Sistere",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Sistere",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/IZAH/_/Sistere",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489263025",
                            "#text": "11 Mar 2017, 20:10"
                        }
                    },
                    {
                        "artist": {
                            "#text": "IZAH",
                            "mbid": "5850f3cb-1c7c-4e93-967f-99ce1d0ccffd"
                        },
                        "name": "Finite Horizon",
                        "streamable": "0",
                        "mbid": "07b04df3-5964-4a0d-af79-841033bee3cd",
                        "album": {
                            "#text": "Sistere",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/IZAH/_/Finite+Horizon",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489262329",
                            "#text": "11 Mar 2017, 19:58"
                        }
                    },
                    {
                        "artist": {
                            "#text": "IZAH",
                            "mbid": "5850f3cb-1c7c-4e93-967f-99ce1d0ccffd"
                        },
                        "name": "Duality",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Sistere",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/IZAH/_/Duality",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489257497",
                            "#text": "11 Mar 2017, 18:38"
                        }
                    },
                    {
                        "artist": {
                            "#text": "IZAH",
                            "mbid": "5850f3cb-1c7c-4e93-967f-99ce1d0ccffd"
                        },
                        "name": "indefinite instinct",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Sistere",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/IZAH/_/indefinite+instinct",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/caff3f5f4b6749f8c9e2d05d5df34240.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489256687",
                            "#text": "11 Mar 2017, 18:24"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Darkher",
                            "mbid": "b7019aaf-cfb7-4b6a-9747-a6c8f0b66ada"
                        },
                        "name": "Lament",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Realms",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Darkher/_/Lament",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489256186",
                            "#text": "11 Mar 2017, 18:16"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Darkher",
                            "mbid": "b7019aaf-cfb7-4b6a-9747-a6c8f0b66ada"
                        },
                        "name": "Foregone",
                        "streamable": "0",
                        "mbid": "b63ec35a-2165-4cee-9ae4-dff526ab4f7d",
                        "album": {
                            "#text": "Realms",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Darkher/_/Foregone",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489255739",
                            "#text": "11 Mar 2017, 18:08"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Darkher",
                            "mbid": "b7019aaf-cfb7-4b6a-9747-a6c8f0b66ada"
                        },
                        "name": "Buried, Pt. II",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Realms",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Darkher/_/Buried,+Pt.+II",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489255390",
                            "#text": "11 Mar 2017, 18:03"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Darkher",
                            "mbid": "b7019aaf-cfb7-4b6a-9747-a6c8f0b66ada"
                        },
                        "name": "Buried, Pt. I",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Realms",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Darkher/_/Buried,+Pt.+I",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489255260",
                            "#text": "11 Mar 2017, 18:01"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Darkher",
                            "mbid": "b7019aaf-cfb7-4b6a-9747-a6c8f0b66ada"
                        },
                        "name": "The Dawn Brings A Saviour",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Realms",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Darkher/_/The+Dawn+Brings+A+Saviour",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489255026",
                            "#text": "11 Mar 2017, 17:57"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Darkher",
                            "mbid": "b7019aaf-cfb7-4b6a-9747-a6c8f0b66ada"
                        },
                        "name": "Wars",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Realms",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Darkher/_/Wars",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489254642",
                            "#text": "11 Mar 2017, 17:50"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Darkher",
                            "mbid": "b7019aaf-cfb7-4b6a-9747-a6c8f0b66ada"
                        },
                        "name": "Moths",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Realms",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Darkher/_/Moths",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489254332",
                            "#text": "11 Mar 2017, 17:45"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Darkher",
                            "mbid": "b7019aaf-cfb7-4b6a-9747-a6c8f0b66ada"
                        },
                        "name": "Hollow Veil",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Realms",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Darkher/_/Hollow+Veil",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489254004",
                            "#text": "11 Mar 2017, 17:40"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Darkher",
                            "mbid": "b7019aaf-cfb7-4b6a-9747-a6c8f0b66ada"
                        },
                        "name": "Spirit Waker",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Realms",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Darkher/_/Spirit+Waker",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2cc299ba1abac8ff5fec272dd7e8a4d0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489253882",
                            "#text": "11 Mar 2017, 17:38"
                        }
                    },
                    {
                        "artist": {
                            "#text": "King Buffalo",
                            "mbid": "17216b16-e706-4082-b0ba-e409a3097844"
                        },
                        "name": "Kerosene",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Orion",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/King+Buffalo/_/Kerosene",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489253466",
                            "#text": "11 Mar 2017, 17:31"
                        }
                    },
                    {
                        "artist": {
                            "#text": "King Buffalo",
                            "mbid": "17216b16-e706-4082-b0ba-e409a3097844"
                        },
                        "name": "Sleeps on a Vine",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Orion",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/King+Buffalo/_/Sleeps+on+a+Vine",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489253015",
                            "#text": "11 Mar 2017, 17:23"
                        }
                    },
                    {
                        "artist": {
                            "#text": "King Buffalo",
                            "mbid": "17216b16-e706-4082-b0ba-e409a3097844"
                        },
                        "name": "Monolith",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Orion",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/King+Buffalo/_/Monolith",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489252789",
                            "#text": "11 Mar 2017, 17:19"
                        }
                    },
                    {
                        "artist": {
                            "#text": "King Buffalo",
                            "mbid": "17216b16-e706-4082-b0ba-e409a3097844"
                        },
                        "name": "Orion",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Orion",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/King+Buffalo/_/Orion",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/e6be01ed02938ca134f5793bbdceddd0.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489252396",
                            "#text": "11 Mar 2017, 17:13"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Edvard Grieg",
                            "mbid": "013c8e5b-d72a-4cd3-8dee-6c64d6125823"
                        },
                        "name": "Peer Gynt Suite No. 1, Op. 46: I. Morning Mood",
                        "streamable": "0",
                        "mbid": "24b57085-5e00-4dfa-9412-39e8cd523e1f",
                        "album": {
                            "#text": "Peer Gynt",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Edvard+Grieg/_/Peer+Gynt+Suite+No.+1,+Op.+46:+I.+Morning+Mood",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/f5ce2ff97386425986a500ee6128d843.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/f5ce2ff97386425986a500ee6128d843.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/f5ce2ff97386425986a500ee6128d843.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/f5ce2ff97386425986a500ee6128d843.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489252090",
                            "#text": "11 Mar 2017, 17:08"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "Vinni Butterfly",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/Vinni+Butterfly",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489251342",
                            "#text": "11 Mar 2017, 16:55"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "Aspen Hellweek",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/Aspen+Hellweek",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489251239",
                            "#text": "11 Mar 2017, 16:53"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "The Flesh Prince With Swell Hair",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/The+Flesh+Prince+With+Swell+Hair",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489251146",
                            "#text": "11 Mar 2017, 16:52"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "Nazi Slippers",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/Nazi+Slippers",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489251036",
                            "#text": "11 Mar 2017, 16:50"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "Obliteration Of Nekromantheon",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/Obliteration+Of+Nekromantheon",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489250918",
                            "#text": "11 Mar 2017, 16:48"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "Døv, Døvere, Død",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/D%C3%B8v,+D%C3%B8vere,+D%C3%B8d",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489250636",
                            "#text": "11 Mar 2017, 16:43"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "Dødsfest!",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/D%C3%B8dsfest%21",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489250472",
                            "#text": "11 Mar 2017, 16:41"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "True Norwegian Internet Metal Warrior",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/True+Norwegian+Internet+Metal+Warrior",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489250385",
                            "#text": "11 Mar 2017, 16:39"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "Krepsekamp",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/Krepsekamp",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489250306",
                            "#text": "11 Mar 2017, 16:38"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "The Egg Thrower",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/The+Egg+Thrower",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489250196",
                            "#text": "11 Mar 2017, 16:36"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Beaten to Death",
                            "mbid": ""
                        },
                        "name": "Vulpes Vulpes, Mustela Lutreola, Praedium",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Dødsfest!",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Beaten+to+Death/_/Vulpes+Vulpes,+Mustela+Lutreola,+Praedium",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78a5605cf914665c69f9ae9adf60e48.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489250079",
                            "#text": "11 Mar 2017, 16:34"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Cult of Luna",
                            "mbid": "d347406f-839d-4423-9a28-188939282afa"
                        },
                        "name": "The Wreck of S.S. Needle",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Mariner",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Cult+of+Luna/_/The+Wreck+of+S.S.+Needle",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/622fdd61bc7b1c83196d5f4fd171e984.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/622fdd61bc7b1c83196d5f4fd171e984.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/622fdd61bc7b1c83196d5f4fd171e984.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/622fdd61bc7b1c83196d5f4fd171e984.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489175740",
                            "#text": "10 Mar 2017, 19:55"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Cult of Luna",
                            "mbid": "d347406f-839d-4423-9a28-188939282afa"
                        },
                        "name": "A Greater Call",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Mariner",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Cult+of+Luna/_/A+Greater+Call",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/622fdd61bc7b1c83196d5f4fd171e984.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/622fdd61bc7b1c83196d5f4fd171e984.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/622fdd61bc7b1c83196d5f4fd171e984.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/622fdd61bc7b1c83196d5f4fd171e984.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489163750",
                            "#text": "10 Mar 2017, 16:35"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Zoroaster",
                            "mbid": "44f53ec7-57d3-46f2-a45a-8fc3e5908ed7"
                        },
                        "name": "Old World",
                        "streamable": "0",
                        "mbid": "c8dcec47-0d20-4d62-968c-57c316ab97ec",
                        "album": {
                            "#text": "Matador",
                            "mbid": "4d281022-3dab-46d4-ba71-ed63c70b03dd"
                        },
                        "url": "https://www.last.fm/music/Zoroaster/_/Old+World",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a38fbeba198a4cd498fdfef8eb23bb8d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a38fbeba198a4cd498fdfef8eb23bb8d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a38fbeba198a4cd498fdfef8eb23bb8d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a38fbeba198a4cd498fdfef8eb23bb8d.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489159776",
                            "#text": "10 Mar 2017, 15:29"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Weedeater",
                            "mbid": "700f0813-e644-4d2a-873d-62fb113d1e5d"
                        },
                        "name": "The Great Unfurling",
                        "streamable": "0",
                        "mbid": "15956caf-10d9-4cb4-88e8-edd947a0b22a",
                        "album": {
                            "#text": "Jason... the Dragon",
                            "mbid": "5c538ac1-13dd-4c65-be45-12011a35e7f6"
                        },
                        "url": "https://www.last.fm/music/Weedeater/_/The+Great+Unfurling",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a90a83dadd104d7e8f32d6ee0cd99e86.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a90a83dadd104d7e8f32d6ee0cd99e86.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a90a83dadd104d7e8f32d6ee0cd99e86.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a90a83dadd104d7e8f32d6ee0cd99e86.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489159710",
                            "#text": "10 Mar 2017, 15:28"
                        }
                    },
                    {
                        "artist": {
                            "#text": "40 Watt Sun",
                            "mbid": "24c841f0-d058-439a-8afb-766e2b7d0e7a"
                        },
                        "name": "Beyond You",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Wider Than The Sky",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/40+Watt+Sun/_/Beyond+You",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489159130",
                            "#text": "10 Mar 2017, 15:18"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Opeth",
                            "mbid": "c14b4180-dc87-481e-b17a-64e4150f90f6"
                        },
                        "name": "The Wilde Flowers",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Sorceress",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/Opeth/_/The+Wilde+Flowers",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/e327bdf2ea7cc946e03bdd3a7e7e0663.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/e327bdf2ea7cc946e03bdd3a7e7e0663.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/e327bdf2ea7cc946e03bdd3a7e7e0663.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/e327bdf2ea7cc946e03bdd3a7e7e0663.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489156808",
                            "#text": "10 Mar 2017, 14:40"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Opeth",
                            "mbid": "c14b4180-dc87-481e-b17a-64e4150f90f6"
                        },
                        "name": "By the Pain I See in Others",
                        "streamable": "0",
                        "mbid": "1730f0fa-9ae3-4e0a-958a-397e6244f4f6",
                        "album": {
                            "#text": "Deliverance",
                            "mbid": "ace96210-f0a1-3c72-a497-d75c7b8080eb"
                        },
                        "url": "https://www.last.fm/music/Opeth/_/By+the+Pain+I+See+in+Others",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489153125",
                            "#text": "10 Mar 2017, 13:38"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Opeth",
                            "mbid": "c14b4180-dc87-481e-b17a-64e4150f90f6"
                        },
                        "name": "Master\'s Apprentices",
                        "streamable": "0",
                        "mbid": "d913f5f8-163a-4d28-9391-009c0f4d9453",
                        "album": {
                            "#text": "Deliverance",
                            "mbid": "ace96210-f0a1-3c72-a497-d75c7b8080eb"
                        },
                        "url": "https://www.last.fm/music/Opeth/_/Master%27s+Apprentices",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489152494",
                            "#text": "10 Mar 2017, 13:28"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Opeth",
                            "mbid": "c14b4180-dc87-481e-b17a-64e4150f90f6"
                        },
                        "name": "For Absent Friends",
                        "streamable": "0",
                        "mbid": "f22d012e-9dfe-4a56-b0f2-a8a2431b5391",
                        "album": {
                            "#text": "Deliverance",
                            "mbid": "ace96210-f0a1-3c72-a497-d75c7b8080eb"
                        },
                        "url": "https://www.last.fm/music/Opeth/_/For+Absent+Friends",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489152357",
                            "#text": "10 Mar 2017, 13:25"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Opeth",
                            "mbid": "c14b4180-dc87-481e-b17a-64e4150f90f6"
                        },
                        "name": "A Fair Judgement",
                        "streamable": "0",
                        "mbid": "4ad51d32-5579-4906-be1c-83fbbe725011",
                        "album": {
                            "#text": "Deliverance",
                            "mbid": "ace96210-f0a1-3c72-a497-d75c7b8080eb"
                        },
                        "url": "https://www.last.fm/music/Opeth/_/A+Fair+Judgement",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489137666",
                            "#text": "10 Mar 2017, 09:21"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Opeth",
                            "mbid": "c14b4180-dc87-481e-b17a-64e4150f90f6"
                        },
                        "name": "Deliverance",
                        "streamable": "0",
                        "mbid": "25ee7b2f-b330-40aa-9c19-b63a6da7de7a",
                        "album": {
                            "#text": "Deliverance",
                            "mbid": "ace96210-f0a1-3c72-a497-d75c7b8080eb"
                        },
                        "url": "https://www.last.fm/music/Opeth/_/Deliverance",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489133659",
                            "#text": "10 Mar 2017, 08:14"
                        }
                    },
                    {
                        "artist": {
                            "#text": "Opeth",
                            "mbid": "c14b4180-dc87-481e-b17a-64e4150f90f6"
                        },
                        "name": "Wreath",
                        "streamable": "0",
                        "mbid": "6013cc59-3ff5-46db-8b12-8113bb429143",
                        "album": {
                            "#text": "Deliverance",
                            "mbid": "ace96210-f0a1-3c72-a497-d75c7b8080eb"
                        },
                        "url": "https://www.last.fm/music/Opeth/_/Wreath",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2799d1899f3147ff8e706827b47776ab.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489131789",
                            "#text": "10 Mar 2017, 07:43"
                        }
                    },
                    {
                        "artist": {
                            "#text": "40 Watt Sun",
                            "mbid": "24c841f0-d058-439a-8afb-766e2b7d0e7a"
                        },
                        "name": "Another Room",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Wider Than The Sky",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/40+Watt+Sun/_/Another+Room",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489075663",
                            "#text": "09 Mar 2017, 16:07"
                        }
                    },
                    {
                        "artist": {
                            "#text": "40 Watt Sun",
                            "mbid": "24c841f0-d058-439a-8afb-766e2b7d0e7a"
                        },
                        "name": "Beyond You",
                        "streamable": "0",
                        "mbid": "",
                        "album": {
                            "#text": "Wider Than The Sky",
                            "mbid": ""
                        },
                        "url": "https://www.last.fm/music/40+Watt+Sun/_/Beyond+You",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/456507a8f6c82b6a74e0792dc696f948.png",
                                "size": "extralarge"
                            }
                        ],
                        "date": {
                            "uts": "1489075082",
                            "#text": "09 Mar 2017, 15:58"
                        }
                    }
                ],
                "@attr": {
                    "user": "Barryvanveen",
                    "page": "1",
                    "perPage": "50",
                    "totalPages": "801",
                    "total": "40010"
                }
            }
        }
        ';
    }

    public static function userTopAlbums(): string
    {
        return '
        {
            "topalbums": {
                "album": [
                    {
                        "name": "The Gates of Gnomeria",
                        "playcount": "583",
                        "mbid": "6b3dee56-1353-4967-8d2f-4277d2ce9224",
                        "url": "https://www.last.fm/music/Andy+McKee/The+Gates+of+Gnomeria",
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/bd17057ae0834ce481394edcd471485d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/bd17057ae0834ce481394edcd471485d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/bd17057ae0834ce481394edcd471485d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/bd17057ae0834ce481394edcd471485d.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "1"
                        }
                    },
                    {
                        "name": "The Game Of Life",
                        "playcount": "538",
                        "mbid": "1066b8f2-237c-4461-9dbb-540a5aecc540",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls/The+Game+Of+Life",
                        "artist": {
                            "name": "Arsonists Get All The Girls",
                            "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                            "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/c20b290655ea4ba9b10a51a5ccdf9293.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/c20b290655ea4ba9b10a51a5ccdf9293.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/c20b290655ea4ba9b10a51a5ccdf9293.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/c20b290655ea4ba9b10a51a5ccdf9293.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "2"
                        }
                    },
                    {
                        "name": "The Thing That Came From Somewhere",
                        "playcount": "502",
                        "mbid": "01fe072c-101c-4962-b790-f82daa13a94f",
                        "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee/The+Thing+That+Came+From+Somewhere",
                        "artist": {
                            "name": "Don Ross & Andy McKee",
                            "mbid": "e55ad39a-47d2-46fc-afd4-92d59883acd1",
                            "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/c23337ac2cf64636a65e5efbf49ccabc.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/c23337ac2cf64636a65e5efbf49ccabc.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/c23337ac2cf64636a65e5efbf49ccabc.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/c23337ac2cf64636a65e5efbf49ccabc.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "3"
                        }
                    },
                    {
                        "name": "Art of Motion",
                        "playcount": "457",
                        "mbid": "27a0c006-98f3-428a-a945-56a2ab39f070",
                        "url": "https://www.last.fm/music/Andy+McKee/Art+of+Motion",
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4e8cf9afd2844313973e00b9a1ea335b.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4e8cf9afd2844313973e00b9a1ea335b.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4e8cf9afd2844313973e00b9a1ea335b.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4e8cf9afd2844313973e00b9a1ea335b.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "4"
                        }
                    },
                    {
                        "name": "Our Endless Numbered Days",
                        "playcount": "450",
                        "mbid": "309f3d10-3807-4ed0-a105-ba7fdc89ae43",
                        "url": "https://www.last.fm/music/Iron+&+Wine/Our+Endless+Numbered+Days",
                        "artist": {
                            "name": "Iron & Wine",
                            "mbid": "c3f28da8-662d-4f09-bdc7-3084bf685930",
                            "url": "https://www.last.fm/music/Iron+&+Wine"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/d4b0ff8971f04844c8f226ffee33c1ba.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/d4b0ff8971f04844c8f226ffee33c1ba.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/d4b0ff8971f04844c8f226ffee33c1ba.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/d4b0ff8971f04844c8f226ffee33c1ba.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "5"
                        }
                    },
                    {
                        "name": "Limbo Messiah",
                        "playcount": "415",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Beatsteaks/Limbo+Messiah",
                        "artist": {
                            "name": "Beatsteaks",
                            "mbid": "a9b88ebb-83aa-4ef7-b674-fabeb572c14e",
                            "url": "https://www.last.fm/music/Beatsteaks"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/338b9b8e1c3d4a0ecad4e74a5e06696a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/338b9b8e1c3d4a0ecad4e74a5e06696a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/338b9b8e1c3d4a0ecad4e74a5e06696a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/338b9b8e1c3d4a0ecad4e74a5e06696a.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "6"
                        }
                    },
                    {
                        "name": "The Collective",
                        "playcount": "414",
                        "mbid": "6d1b74ed-08cf-463b-b6df-6a8b8a7d2ab5",
                        "url": "https://www.last.fm/music/Scale+the+Summit/The+Collective",
                        "artist": {
                            "name": "Scale the Summit",
                            "mbid": "37221dd7-41b1-49fa-ac32-08f8277f72cf",
                            "url": "https://www.last.fm/music/Scale+the+Summit"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/983d0e99373447a397e4a0ecb657a7d8.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/983d0e99373447a397e4a0ecb657a7d8.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/983d0e99373447a397e4a0ecb657a7d8.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/983d0e99373447a397e4a0ecb657a7d8.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "7"
                        }
                    },
                    {
                        "name": "Smacksmash",
                        "playcount": "369",
                        "mbid": "6742bb45-710b-443d-b904-7f542f6d8ac6",
                        "url": "https://www.last.fm/music/Beatsteaks/Smacksmash",
                        "artist": {
                            "name": "Beatsteaks",
                            "mbid": "a9b88ebb-83aa-4ef7-b674-fabeb572c14e",
                            "url": "https://www.last.fm/music/Beatsteaks"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/afc872fadd6145b2c50094f70b281a16.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/afc872fadd6145b2c50094f70b281a16.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/afc872fadd6145b2c50094f70b281a16.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/afc872fadd6145b2c50094f70b281a16.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "8"
                        }
                    },
                    {
                        "name": "Finally We Are No One",
                        "playcount": "357",
                        "mbid": "cb906057-d72d-45a3-aaf6-54569ced782e",
                        "url": "https://www.last.fm/music/m%C3%BAm/Finally+We+Are+No+One",
                        "artist": {
                            "name": "múm",
                            "mbid": "2b64e811-cbcd-45f7-b29d-296444cad4f1",
                            "url": "https://www.last.fm/music/m%C3%BAm"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/6d1d86c0fb5549fda59c3bec447933db.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/6d1d86c0fb5549fda59c3bec447933db.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/6d1d86c0fb5549fda59c3bec447933db.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/6d1d86c0fb5549fda59c3bec447933db.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "9"
                        }
                    },
                    {
                        "name": "Go Go Smear the Poison Ivy",
                        "playcount": "351",
                        "mbid": "8198f78f-14d1-3439-a613-37dbf004b497",
                        "url": "https://www.last.fm/music/m%C3%BAm/Go+Go+Smear+the+Poison+Ivy",
                        "artist": {
                            "name": "múm",
                            "mbid": "2b64e811-cbcd-45f7-b29d-296444cad4f1",
                            "url": "https://www.last.fm/music/m%C3%BAm"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/509897735a5049a6879c7cee21955d50.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/509897735a5049a6879c7cee21955d50.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/509897735a5049a6879c7cee21955d50.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/509897735a5049a6879c7cee21955d50.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "10"
                        }
                    },
                    {
                        "name": "Rareform",
                        "playcount": "349",
                        "mbid": "d1d0d8be-d7a5-4ed4-88f8-300bcc71d6cd",
                        "url": "https://www.last.fm/music/After+the+Burial/Rareform",
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/498fda6e5373467dc6690d87d2dd68ed.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/498fda6e5373467dc6690d87d2dd68ed.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/498fda6e5373467dc6690d87d2dd68ed.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/498fda6e5373467dc6690d87d2dd68ed.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "11"
                        }
                    },
                    {
                        "name": "Weightless",
                        "playcount": "301",
                        "mbid": "9219e5ac-f44e-4c62-bfe5-ac281e3eca5e",
                        "url": "https://www.last.fm/music/Animals+as+Leaders/Weightless",
                        "artist": {
                            "name": "Animals as Leaders",
                            "mbid": "5c2d2520-950b-4c78-84fc-78a9328172a3",
                            "url": "https://www.last.fm/music/Animals+as+Leaders"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/38f4863af7924c7b8ea49317e60c621c.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/38f4863af7924c7b8ea49317e60c621c.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/38f4863af7924c7b8ea49317e60c621c.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/38f4863af7924c7b8ea49317e60c621c.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "12"
                        }
                    },
                    {
                        "name": "The Parallax II: Future Sequence",
                        "playcount": "292",
                        "mbid": "5adc3099-6a1b-4624-ba9b-b9238bebce7d",
                        "url": "https://www.last.fm/music/Between+the+Buried+and+Me/The+Parallax+II:+Future+Sequence",
                        "artist": {
                            "name": "Between the Buried and Me",
                            "mbid": "1870fb43-50f1-4660-a879-bb596d1519b6",
                            "url": "https://www.last.fm/music/Between+the+Buried+and+Me"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/7c2337311e3948cd9b9ed35852ba6242.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/7c2337311e3948cd9b9ed35852ba6242.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/7c2337311e3948cd9b9ed35852ba6242.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/7c2337311e3948cd9b9ed35852ba6242.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "13"
                        }
                    },
                    {
                        "name": "An Awesome Wave",
                        "playcount": "290",
                        "mbid": "9421c67a-9e28-4e75-bc20-c1424c7510ea",
                        "url": "https://www.last.fm/music/alt-J/An+Awesome+Wave",
                        "artist": {
                            "name": "alt-J",
                            "mbid": "fc7bbf00-fbaa-4736-986b-b3ac0266ca9b",
                            "url": "https://www.last.fm/music/alt-J"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4bbd6ca7059b413c80d6a31a818b835b.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4bbd6ca7059b413c80d6a31a818b835b.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4bbd6ca7059b413c80d6a31a818b835b.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4bbd6ca7059b413c80d6a31a818b835b.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "14"
                        }
                    },
                    {
                        "name": "Scurrilous",
                        "playcount": "279",
                        "mbid": "de388edc-5af5-3b19-aca1-e044ae59ddf4",
                        "url": "https://www.last.fm/music/Protest+the+Hero/Scurrilous",
                        "artist": {
                            "name": "Protest the Hero",
                            "mbid": "6318e724-7e6b-4e41-a35b-080065077c80",
                            "url": "https://www.last.fm/music/Protest+the+Hero"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/b4f2049325374116c19bc2baccc50c11.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/b4f2049325374116c19bc2baccc50c11.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/b4f2049325374116c19bc2baccc50c11.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/b4f2049325374116c19bc2baccc50c11.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "15"
                        }
                    },
                    {
                        "name": "Vulgar Display of Power",
                        "playcount": "275",
                        "mbid": "7c5be5b8-9f31-4d3f-9ec3-d503069e0fba",
                        "url": "https://www.last.fm/music/Pantera/Vulgar+Display+of+Power",
                        "artist": {
                            "name": "Pantera",
                            "mbid": "541f16f5-ad7a-428e-af89-9fa1b16d3c9c",
                            "url": "https://www.last.fm/music/Pantera"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/cef42591ca14216432000cb6fc3da689.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/cef42591ca14216432000cb6fc3da689.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/cef42591ca14216432000cb6fc3da689.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/cef42591ca14216432000cb6fc3da689.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "16"
                        }
                    },
                    {
                        "name": "Volition",
                        "playcount": "271",
                        "mbid": "66dbb6a7-dd95-4219-ab55-8cafb0380182",
                        "url": "https://www.last.fm/music/Protest+the+Hero/Volition",
                        "artist": {
                            "name": "Protest the Hero",
                            "mbid": "6318e724-7e6b-4e41-a35b-080065077c80",
                            "url": "https://www.last.fm/music/Protest+the+Hero"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/6884f4f3f7594f70cff674909ce304a0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/6884f4f3f7594f70cff674909ce304a0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/6884f4f3f7594f70cff674909ce304a0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/6884f4f3f7594f70cff674909ce304a0.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "17"
                        }
                    },
                    {
                        "name": "Gold Dust",
                        "playcount": "257",
                        "mbid": "5fc23952-670a-4120-aac8-4b7e429d60f7",
                        "url": "https://www.last.fm/music/Jonathan+Jeremiah/Gold+Dust",
                        "artist": {
                            "name": "Jonathan Jeremiah",
                            "mbid": "ca9ced31-4a6f-47ed-8032-fa3bad53fcd0",
                            "url": "https://www.last.fm/music/Jonathan+Jeremiah"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/116c56e831b341c2a57d9cacd9a4b8ec.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/116c56e831b341c2a57d9cacd9a4b8ec.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/116c56e831b341c2a57d9cacd9a4b8ec.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/116c56e831b341c2a57d9cacd9a4b8ec.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "18"
                        }
                    },
                    {
                        "name": "The Creek Drank the Cradle",
                        "playcount": "255",
                        "mbid": "e270a453-a6c5-4bbc-91d7-5e4378e7d08c",
                        "url": "https://www.last.fm/music/Iron+&+Wine/The+Creek+Drank+the+Cradle",
                        "artist": {
                            "name": "Iron & Wine",
                            "mbid": "c3f28da8-662d-4f09-bdc7-3084bf685930",
                            "url": "https://www.last.fm/music/Iron+&+Wine"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/54b4efde59344bc6ba2ec8d1aee1eb72.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/54b4efde59344bc6ba2ec8d1aee1eb72.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/54b4efde59344bc6ba2ec8d1aee1eb72.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/54b4efde59344bc6ba2ec8d1aee1eb72.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "19"
                        }
                    },
                    {
                        "name": "In Dreams",
                        "playcount": "251",
                        "mbid": "97b4437d-6781-424f-b410-a2c532383630",
                        "url": "https://www.last.fm/music/After+the+Burial/In+Dreams",
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4a3e78618c154f94b3df4d7be546d906.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4a3e78618c154f94b3df4d7be546d906.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4a3e78618c154f94b3df4d7be546d906.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4a3e78618c154f94b3df4d7be546d906.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "20"
                        }
                    },
                    {
                        "name": "Oceanic",
                        "playcount": "249",
                        "mbid": "e41d013a-b455-4359-84c5-c14b6112bba8",
                        "url": "https://www.last.fm/music/Isis/Oceanic",
                        "artist": {
                            "name": "Isis",
                            "mbid": "a892235b-2acc-446f-9f2e-0370c920310c",
                            "url": "https://www.last.fm/music/Isis"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/d8bdef0985564561ad5df13ed487f65f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/d8bdef0985564561ad5df13ed487f65f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/d8bdef0985564561ad5df13ed487f65f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/d8bdef0985564561ad5df13ed487f65f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "21"
                        }
                    },
                    {
                        "name": "Transmetropolitan",
                        "playcount": "246",
                        "mbid": "513a2561-5c04-481a-83ab-50819f85b709",
                        "url": "https://www.last.fm/music/War+from+a+Harlots+Mouth/Transmetropolitan",
                        "artist": {
                            "name": "War from a Harlots Mouth",
                            "mbid": "0c0d9d09-792f-43f2-8bcb-05b9dc990d58",
                            "url": "https://www.last.fm/music/War+from+a+Harlots+Mouth"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/970849e479344020b2dd8b133292c34f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/970849e479344020b2dd8b133292c34f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/970849e479344020b2dd8b133292c34f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/970849e479344020b2dd8b133292c34f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "22"
                        }
                    },
                    {
                        "name": "Forgiving A Future Self",
                        "playcount": "230",
                        "mbid": "",
                        "url": "https://www.last.fm/music/After+the+Burial/Forgiving+A+Future+Self",
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/1aa9857b4c4f4026b4dd2fbd729c5448.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/1aa9857b4c4f4026b4dd2fbd729c5448.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/1aa9857b4c4f4026b4dd2fbd729c5448.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/1aa9857b4c4f4026b4dd2fbd729c5448.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "23"
                        }
                    },
                    {
                        "name": "NOLA",
                        "playcount": "230",
                        "mbid": "807ef4d8-c726-437e-b054-79e5706801df",
                        "url": "https://www.last.fm/music/Down/NOLA",
                        "artist": {
                            "name": "Down",
                            "mbid": "4c01333f-e8e8-43bd-9923-8de83ef6f63d",
                            "url": "https://www.last.fm/music/Down"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/76f95fdd529d4bf39595465a71ba065a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/76f95fdd529d4bf39595465a71ba065a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/76f95fdd529d4bf39595465a71ba065a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/76f95fdd529d4bf39595465a71ba065a.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "24"
                        }
                    },
                    {
                        "name": "Live at the Fillmore",
                        "playcount": "229",
                        "mbid": "5a5836a6-8038-4c64-a040-43e91fe7db37",
                        "url": "https://www.last.fm/music/Testament/Live+at+the+Fillmore",
                        "artist": {
                            "name": "Testament",
                            "mbid": "6b335658-22c8-485d-93de-0bc29a1d0349",
                            "url": "https://www.last.fm/music/Testament"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/1c1b252f2a364aedca790ff6018e0804.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/1c1b252f2a364aedca790ff6018e0804.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/1c1b252f2a364aedca790ff6018e0804.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/1c1b252f2a364aedca790ff6018e0804.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "25"
                        }
                    },
                    {
                        "name": "Burn My Eyes",
                        "playcount": "221",
                        "mbid": "b47df6d1-b641-31e5-9efb-8b3eb4694f2c",
                        "url": "https://www.last.fm/music/Machine+Head/Burn+My+Eyes",
                        "artist": {
                            "name": "Machine Head",
                            "mbid": "ccd57217-fe4b-406d-8e20-567d25120338",
                            "url": "https://www.last.fm/music/Machine+Head"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/c62807d4a1b64f7e93c0156ad41ea9f9.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/c62807d4a1b64f7e93c0156ad41ea9f9.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/c62807d4a1b64f7e93c0156ad41ea9f9.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/c62807d4a1b64f7e93c0156ad41ea9f9.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "26"
                        }
                    },
                    {
                        "name": "Last Rudy Standing",
                        "playcount": "218",
                        "mbid": "879247b8-11c6-4ab4-ac55-ab328d4187a2",
                        "url": "https://www.last.fm/music/Beef/Last+Rudy+Standing",
                        "artist": {
                            "name": "Beef",
                            "mbid": "efebd1dd-55c3-412c-aab3-f4377c096af9",
                            "url": "https://www.last.fm/music/Beef"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/67e7095571184ba2a8cfad35473c5f94.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/67e7095571184ba2a8cfad35473c5f94.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/67e7095571184ba2a8cfad35473c5f94.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/67e7095571184ba2a8cfad35473c5f94.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "27"
                        }
                    },
                    {
                        "name": "The Joy Of Motion",
                        "playcount": "212",
                        "mbid": "c3549f65-4cab-4381-a382-61e1d033dd2c",
                        "url": "https://www.last.fm/music/Animals+as+Leaders/The+Joy+Of+Motion",
                        "artist": {
                            "name": "Animals as Leaders",
                            "mbid": "5c2d2520-950b-4c78-84fc-78a9328172a3",
                            "url": "https://www.last.fm/music/Animals+as+Leaders"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/419579a7f5314d95cd864b946bb31772.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/419579a7f5314d95cd864b946bb31772.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/419579a7f5314d95cd864b946bb31772.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/419579a7f5314d95cd864b946bb31772.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "28"
                        }
                    },
                    {
                        "name": "Those Who Tell the Truth Shall Die, Those Who Tell the Truth Shall Live Forever",
                        "playcount": "212",
                        "mbid": "6d34fe86-5e12-373e-b02b-7f4777543724",
                        "url": "https://www.last.fm/music/Explosions+in+the+Sky/Those+Who+Tell+the+Truth+Shall+Die,+Those+Who+Tell+the+Truth+Shall+Live+Forever",
                        "artist": {
                            "name": "Explosions in the Sky",
                            "mbid": "4236acde-2ce2-441c-a3d4-38d55f1b5474",
                            "url": "https://www.last.fm/music/Explosions+in+the+Sky"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/90f5adb433c94ed1ce84982cc5907ae9.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/90f5adb433c94ed1ce84982cc5907ae9.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/90f5adb433c94ed1ce84982cc5907ae9.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/90f5adb433c94ed1ce84982cc5907ae9.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "29"
                        }
                    },
                    {
                        "name": "Fortress",
                        "playcount": "211",
                        "mbid": "1bdae9a8-1c33-310b-9f7a-a03bf9b24f66",
                        "url": "https://www.last.fm/music/Protest+the+Hero/Fortress",
                        "artist": {
                            "name": "Protest the Hero",
                            "mbid": "6318e724-7e6b-4e41-a35b-080065077c80",
                            "url": "https://www.last.fm/music/Protest+the+Hero"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/418d372973f9418eb49bdb0b0a4045ca.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/418d372973f9418eb49bdb0b0a4045ca.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/418d372973f9418eb49bdb0b0a4045ca.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/418d372973f9418eb49bdb0b0a4045ca.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "30"
                        }
                    },
                    {
                        "name": "The Cautionary Tales of Mark Oliver Everett (Deluxe Version)",
                        "playcount": "210",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Eels/The+Cautionary+Tales+of+Mark+Oliver+Everett+(Deluxe+Version)",
                        "artist": {
                            "name": "Eels",
                            "mbid": "14387b0f-765c-4852-852f-135335790466",
                            "url": "https://www.last.fm/music/Eels"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/719b0c7840da44edc49bc94fbbf75b9f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/719b0c7840da44edc49bc94fbbf75b9f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/719b0c7840da44edc49bc94fbbf75b9f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/719b0c7840da44edc49bc94fbbf75b9f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "31"
                        }
                    },
                    {
                        "name": "I",
                        "playcount": "203",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Gnadab/I",
                        "artist": {
                            "name": "Gnadab",
                            "mbid": "",
                            "url": "https://www.last.fm/music/Gnadab"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/d3654f69cd8b4333b4ff26b9fe8c52bb.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/d3654f69cd8b4333b4ff26b9fe8c52bb.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/d3654f69cd8b4333b4ff26b9fe8c52bb.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/d3654f69cd8b4333b4ff26b9fe8c52bb.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "32"
                        }
                    },
                    {
                        "name": "California",
                        "playcount": "202",
                        "mbid": "b88610de-7612-4005-91ea-768e3d0cbff9",
                        "url": "https://www.last.fm/music/Mr.+Bungle/California",
                        "artist": {
                            "name": "Mr. Bungle",
                            "mbid": "277e21a9-2d64-452d-96c4-2d23a7af5891",
                            "url": "https://www.last.fm/music/Mr.+Bungle"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/816c50e7a551418f8978d9b29e9ce9d1.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/816c50e7a551418f8978d9b29e9ce9d1.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/816c50e7a551418f8978d9b29e9ce9d1.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/816c50e7a551418f8978d9b29e9ce9d1.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "33"
                        }
                    },
                    {
                        "name": "Climax",
                        "playcount": "201",
                        "mbid": "b39da806-5b66-4606-8f3a-c0e3fad565c3",
                        "url": "https://www.last.fm/music/Beastmilk/Climax",
                        "artist": {
                            "name": "Beastmilk",
                            "mbid": "0c71f174-5240-426b-8d43-66a3459c2f71",
                            "url": "https://www.last.fm/music/Beastmilk"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/1e43713b292d42fec24ed09de497e0d3.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/1e43713b292d42fec24ed09de497e0d3.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/1e43713b292d42fec24ed09de497e0d3.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/1e43713b292d42fec24ed09de497e0d3.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "34"
                        }
                    },
                    {
                        "name": "Living Targets",
                        "playcount": "201",
                        "mbid": "5c4d2df5-dc76-329a-a7f4-e106d5361244",
                        "url": "https://www.last.fm/music/Beatsteaks/Living+Targets",
                        "artist": {
                            "name": "Beatsteaks",
                            "mbid": "a9b88ebb-83aa-4ef7-b674-fabeb572c14e",
                            "url": "https://www.last.fm/music/Beatsteaks"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/551a9dee063441319200413be02d5438.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/551a9dee063441319200413be02d5438.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/551a9dee063441319200413be02d5438.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/551a9dee063441319200413be02d5438.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "35"
                        }
                    },
                    {
                        "name": "Hombre Lobo",
                        "playcount": "199",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Eels/Hombre+Lobo",
                        "artist": {
                            "name": "Eels",
                            "mbid": "14387b0f-765c-4852-852f-135335790466",
                            "url": "https://www.last.fm/music/Eels"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/3412c2bb60814ad5951b89a2f9d58a1a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/3412c2bb60814ad5951b89a2f9d58a1a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/3412c2bb60814ad5951b89a2f9d58a1a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/3412c2bb60814ad5951b89a2f9d58a1a.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "36"
                        }
                    },
                    {
                        "name": "The Blackening",
                        "playcount": "196",
                        "mbid": "51e81438-901b-4d0d-bd84-58ec18ae9d0f",
                        "url": "https://www.last.fm/music/Machine+Head/The+Blackening",
                        "artist": {
                            "name": "Machine Head",
                            "mbid": "ccd57217-fe4b-406d-8e20-567d25120338",
                            "url": "https://www.last.fm/music/Machine+Head"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/6b3cbf95869a47c7844f02f9c49914d9.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/6b3cbf95869a47c7844f02f9c49914d9.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/6b3cbf95869a47c7844f02f9c49914d9.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/6b3cbf95869a47c7844f02f9c49914d9.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "37"
                        }
                    },
                    {
                        "name": "The Gathering",
                        "playcount": "193",
                        "mbid": "b227babb-2fdf-4c86-bccf-e18061627746",
                        "url": "https://www.last.fm/music/Testament/The+Gathering",
                        "artist": {
                            "name": "Testament",
                            "mbid": "6b335658-22c8-485d-93de-0bc29a1d0349",
                            "url": "https://www.last.fm/music/Testament"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/cbee56fe2a88442bb3baf9a861b8983a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/cbee56fe2a88442bb3baf9a861b8983a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/cbee56fe2a88442bb3baf9a861b8983a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/cbee56fe2a88442bb3baf9a861b8983a.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "38"
                        }
                    },
                    {
                        "name": "Irish Tour",
                        "playcount": "186",
                        "mbid": "dabfaf41-675f-4d3c-8cab-75f5b90edb0a",
                        "url": "https://www.last.fm/music/Rory+Gallagher/Irish+Tour",
                        "artist": {
                            "name": "Rory Gallagher",
                            "mbid": "933fdeae-ec68-48e9-a752-8bcfd44bc429",
                            "url": "https://www.last.fm/music/Rory+Gallagher"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a2f7d2a9a88f4254bcd3b00127f80eb3.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a2f7d2a9a88f4254bcd3b00127f80eb3.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a2f7d2a9a88f4254bcd3b00127f80eb3.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a2f7d2a9a88f4254bcd3b00127f80eb3.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "39"
                        }
                    },
                    {
                        "name": "Shootenanny!",
                        "playcount": "183",
                        "mbid": "2a15446f-a6b7-4e9c-82b9-a4685ef6b269",
                        "url": "https://www.last.fm/music/Eels/Shootenanny%21",
                        "artist": {
                            "name": "Eels",
                            "mbid": "14387b0f-765c-4852-852f-135335790466",
                            "url": "https://www.last.fm/music/Eels"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/213b7a4fe58f4a97ca187b815d1dde6c.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/213b7a4fe58f4a97ca187b815d1dde6c.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/213b7a4fe58f4a97ca187b815d1dde6c.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/213b7a4fe58f4a97ca187b815d1dde6c.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "40"
                        }
                    },
                    {
                        "name": "Still Got the Blues",
                        "playcount": "182",
                        "mbid": "b96e7620-18b1-494b-a7c7-19faae798099",
                        "url": "https://www.last.fm/music/Gary+Moore/Still+Got+the+Blues",
                        "artist": {
                            "name": "Gary Moore",
                            "mbid": "a8806b5c-3ee0-4277-94d3-1a5427a7707c",
                            "url": "https://www.last.fm/music/Gary+Moore"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/0a00376b39654cd3cc4ddbffa7c140a0.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/0a00376b39654cd3cc4ddbffa7c140a0.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/0a00376b39654cd3cc4ddbffa7c140a0.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/0a00376b39654cd3cc4ddbffa7c140a0.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "41"
                        }
                    },
                    {
                        "name": "Dreams",
                        "playcount": "179",
                        "mbid": "991663bf-fc45-422f-bf7f-7e713c22b591",
                        "url": "https://www.last.fm/music/The+Whitest+Boy+Alive/Dreams",
                        "artist": {
                            "name": "The Whitest Boy Alive",
                            "mbid": "f83781c8-64f9-4657-85bd-51f74d195cfd",
                            "url": "https://www.last.fm/music/The+Whitest+Boy+Alive"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/82bae0fbcc1c43eda1a4261502887fff.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/82bae0fbcc1c43eda1a4261502887fff.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/82bae0fbcc1c43eda1a4261502887fff.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/82bae0fbcc1c43eda1a4261502887fff.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "42"
                        }
                    },
                    {
                        "name": "Stage Struck",
                        "playcount": "179",
                        "mbid": "c3a847db-579d-44f9-9e04-05bfb430945c",
                        "url": "https://www.last.fm/music/Rory+Gallagher/Stage+Struck",
                        "artist": {
                            "name": "Rory Gallagher",
                            "mbid": "933fdeae-ec68-48e9-a752-8bcfd44bc429",
                            "url": "https://www.last.fm/music/Rory+Gallagher"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/b138cdccc5c04f4aac323269ab94a85a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/b138cdccc5c04f4aac323269ab94a85a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/b138cdccc5c04f4aac323269ab94a85a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/b138cdccc5c04f4aac323269ab94a85a.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "43"
                        }
                    },
                    {
                        "name": "Ashes Against the Grain",
                        "playcount": "174",
                        "mbid": "b943e89a-2ae7-4cce-940a-c434c4f068cf",
                        "url": "https://www.last.fm/music/Agalloch/Ashes+Against+the+Grain",
                        "artist": {
                            "name": "Agalloch",
                            "mbid": "3d46727d-9367-47b8-8b8b-f7b6767f7d57",
                            "url": "https://www.last.fm/music/Agalloch"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/805d0cabf7ad437da11e1d24b0540766.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/805d0cabf7ad437da11e1d24b0540766.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/805d0cabf7ad437da11e1d24b0540766.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/805d0cabf7ad437da11e1d24b0540766.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "44"
                        }
                    },
                    {
                        "name": "How Strange, Innocence",
                        "playcount": "174",
                        "mbid": "3cf540c3-fed6-3e22-9b9c-404927874050",
                        "url": "https://www.last.fm/music/Explosions+in+the+Sky/How+Strange,+Innocence",
                        "artist": {
                            "name": "Explosions in the Sky",
                            "mbid": "4236acde-2ce2-441c-a3d4-38d55f1b5474",
                            "url": "https://www.last.fm/music/Explosions+in+the+Sky"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/0a3c7d7c98c84413880d8b1086831eb1.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/0a3c7d7c98c84413880d8b1086831eb1.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/0a3c7d7c98c84413880d8b1086831eb1.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/0a3c7d7c98c84413880d8b1086831eb1.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "45"
                        }
                    },
                    {
                        "name": "Shwayze",
                        "playcount": "173",
                        "mbid": "f35cde40-667b-4174-b734-d1a50ca0d2e7",
                        "url": "https://www.last.fm/music/Shwayze/Shwayze",
                        "artist": {
                            "name": "Shwayze",
                            "mbid": "e84a64f9-cf28-477d-a31a-f43514011918",
                            "url": "https://www.last.fm/music/Shwayze"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/37214e30c5d744648cbcaf71d27facd4.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/37214e30c5d744648cbcaf71d27facd4.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/37214e30c5d744648cbcaf71d27facd4.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/37214e30c5d744648cbcaf71d27facd4.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "46"
                        }
                    },
                    {
                        "name": "Declaration of Dependence",
                        "playcount": "172",
                        "mbid": "14b6ef82-a25f-3698-b1d1-4c2a53133685",
                        "url": "https://www.last.fm/music/Kings+of+Convenience/Declaration+of+Dependence",
                        "artist": {
                            "name": "Kings of Convenience",
                            "mbid": "cf0f4547-ffbd-4011-98ad-0bec9ba022db",
                            "url": "https://www.last.fm/music/Kings+of+Convenience"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/9c90203a4f424063c07dd2adb960c4a4.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/9c90203a4f424063c07dd2adb960c4a4.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/9c90203a4f424063c07dd2adb960c4a4.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/9c90203a4f424063c07dd2adb960c4a4.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "47"
                        }
                    },
                    {
                        "name": "God Shuffled His Feet",
                        "playcount": "172",
                        "mbid": "a78e7e65-bacd-34e3-a696-0756e5428896",
                        "url": "https://www.last.fm/music/Crash+Test+Dummies/God+Shuffled+His+Feet",
                        "artist": {
                            "name": "Crash Test Dummies",
                            "mbid": "afb8f901-d846-4c70-a898-59bc183d1da7",
                            "url": "https://www.last.fm/music/Crash+Test+Dummies"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/d2fee8f7c5c044de9bf8b91493e83fad.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/d2fee8f7c5c044de9bf8b91493e83fad.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/d2fee8f7c5c044de9bf8b91493e83fad.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/d2fee8f7c5c044de9bf8b91493e83fad.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "48"
                        }
                    },
                    {
                        "name": "Niks Is Zoas \'t Lek",
                        "playcount": "170",
                        "mbid": "79d7b2a6-3a18-479c-ab56-d8260561c347",
                        "url": "https://www.last.fm/music/Skik/Niks+Is+Zoas+%27t+Lek",
                        "artist": {
                            "name": "Skik",
                            "mbid": "38b80de1-77f7-466c-8adb-1f79bb572177",
                            "url": "https://www.last.fm/music/Skik"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/f882103884a847108634450cc917979c.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/f882103884a847108634450cc917979c.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/f882103884a847108634450cc917979c.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/f882103884a847108634450cc917979c.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "49"
                        }
                    },
                    {
                        "name": "The Road To Escondido",
                        "playcount": "168",
                        "mbid": "e4c940dc-f7d4-4331-89ed-ebfce90c0e0b",
                        "url": "https://www.last.fm/music/J.J.+Cale+&+Eric+Clapton/The+Road+To+Escondido",
                        "artist": {
                            "name": "J.J. Cale & Eric Clapton",
                            "mbid": "4b0be624-6b87-47e8-bbf0-588a2c6c0439",
                            "url": "https://www.last.fm/music/J.J.+Cale+&+Eric+Clapton"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/c58e1f77d049c988461d5fbe226ac6cc.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/c58e1f77d049c988461d5fbe226ac6cc.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/c58e1f77d049c988461d5fbe226ac6cc.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/c58e1f77d049c988461d5fbe226ac6cc.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "50"
                        }
                    }
                ],
                "@attr": {
                    "user": "Barryvanveen",
                    "page": "1",
                    "perPage": "50",
                    "totalPages": "54",
                    "total": "2697"
                }
            }
        }
        ';
    }

    public static function userTopArtists(): string
    {
        return '
        {
            "topartists": {
                "artist": [
                    {
                        "name": "Andy McKee",
                        "playcount": "1375",
                        "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                        "url": "https://www.last.fm/music/Andy+McKee",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "1"
                        }
                    },
                    {
                        "name": "Iron & Wine",
                        "playcount": "1272",
                        "mbid": "c3f28da8-662d-4f09-bdc7-3084bf685930",
                        "url": "https://www.last.fm/music/Iron+&+Wine",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a4142bcba3244ccdb0ca60143bb22abb.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a4142bcba3244ccdb0ca60143bb22abb.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a4142bcba3244ccdb0ca60143bb22abb.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a4142bcba3244ccdb0ca60143bb22abb.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/a4142bcba3244ccdb0ca60143bb22abb.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "2"
                        }
                    },
                    {
                        "name": "Beatsteaks",
                        "playcount": "1040",
                        "mbid": "a9b88ebb-83aa-4ef7-b674-fabeb572c14e",
                        "url": "https://www.last.fm/music/Beatsteaks",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "3"
                        }
                    },
                    {
                        "name": "múm",
                        "playcount": "964",
                        "mbid": "2b64e811-cbcd-45f7-b29d-296444cad4f1",
                        "url": "https://www.last.fm/music/m%C3%BAm",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/1a8efb8c3a6f410d99eed5d5b851870b.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/1a8efb8c3a6f410d99eed5d5b851870b.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/1a8efb8c3a6f410d99eed5d5b851870b.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/1a8efb8c3a6f410d99eed5d5b851870b.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/1a8efb8c3a6f410d99eed5d5b851870b.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "4"
                        }
                    },
                    {
                        "name": "Eels",
                        "playcount": "957",
                        "mbid": "14387b0f-765c-4852-852f-135335790466",
                        "url": "https://www.last.fm/music/Eels",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/81bf542fb4ec487b863b42423ed48458.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/81bf542fb4ec487b863b42423ed48458.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/81bf542fb4ec487b863b42423ed48458.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/81bf542fb4ec487b863b42423ed48458.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/81bf542fb4ec487b863b42423ed48458.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "5"
                        }
                    },
                    {
                        "name": "After the Burial",
                        "playcount": "954",
                        "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                        "url": "https://www.last.fm/music/After+the+Burial",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "6"
                        }
                    },
                    {
                        "name": "Protest the Hero",
                        "playcount": "850",
                        "mbid": "6318e724-7e6b-4e41-a35b-080065077c80",
                        "url": "https://www.last.fm/music/Protest+the+Hero",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/72a15b8c16f140f8882df99bfb20ee3c.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/72a15b8c16f140f8882df99bfb20ee3c.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/72a15b8c16f140f8882df99bfb20ee3c.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/72a15b8c16f140f8882df99bfb20ee3c.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/72a15b8c16f140f8882df99bfb20ee3c.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "7"
                        }
                    },
                    {
                        "name": "Machine Head",
                        "playcount": "778",
                        "mbid": "ccd57217-fe4b-406d-8e20-567d25120338",
                        "url": "https://www.last.fm/music/Machine+Head",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/ea617c2f495d45acc5d69f06fbfec823.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/ea617c2f495d45acc5d69f06fbfec823.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/ea617c2f495d45acc5d69f06fbfec823.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/ea617c2f495d45acc5d69f06fbfec823.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/ea617c2f495d45acc5d69f06fbfec823.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "8"
                        }
                    },
                    {
                        "name": "Explosions in the Sky",
                        "playcount": "732",
                        "mbid": "4236acde-2ce2-441c-a3d4-38d55f1b5474",
                        "url": "https://www.last.fm/music/Explosions+in+the+Sky",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "9"
                        }
                    },
                    {
                        "name": "Testament",
                        "playcount": "706",
                        "mbid": "6b335658-22c8-485d-93de-0bc29a1d0349",
                        "url": "https://www.last.fm/music/Testament",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/ad2a37400fcc4098b6b8f7437f7eea84.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/ad2a37400fcc4098b6b8f7437f7eea84.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/ad2a37400fcc4098b6b8f7437f7eea84.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/ad2a37400fcc4098b6b8f7437f7eea84.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/ad2a37400fcc4098b6b8f7437f7eea84.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "10"
                        }
                    },
                    {
                        "name": "Between the Buried and Me",
                        "playcount": "703",
                        "mbid": "1870fb43-50f1-4660-a879-bb596d1519b6",
                        "url": "https://www.last.fm/music/Between+the+Buried+and+Me",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/1f1dae3685dbecb47468fb5629cfbd4f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/1f1dae3685dbecb47468fb5629cfbd4f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/1f1dae3685dbecb47468fb5629cfbd4f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/1f1dae3685dbecb47468fb5629cfbd4f.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/1f1dae3685dbecb47468fb5629cfbd4f.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "11"
                        }
                    },
                    {
                        "name": "Animals as Leaders",
                        "playcount": "673",
                        "mbid": "5c2d2520-950b-4c78-84fc-78a9328172a3",
                        "url": "https://www.last.fm/music/Animals+as+Leaders",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/f9a1af68f2b954594581761d4b1e8d46.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/f9a1af68f2b954594581761d4b1e8d46.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/f9a1af68f2b954594581761d4b1e8d46.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/f9a1af68f2b954594581761d4b1e8d46.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/f9a1af68f2b954594581761d4b1e8d46.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "12"
                        }
                    },
                    {
                        "name": "Arsonists Get All The Girls",
                        "playcount": "611",
                        "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "13"
                        }
                    },
                    {
                        "name": "Pantera",
                        "playcount": "530",
                        "mbid": "541f16f5-ad7a-428e-af89-9fa1b16d3c9c",
                        "url": "https://www.last.fm/music/Pantera",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cc1aa99696b49a288412760013fbd0a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cc1aa99696b49a288412760013fbd0a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cc1aa99696b49a288412760013fbd0a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cc1aa99696b49a288412760013fbd0a.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/4cc1aa99696b49a288412760013fbd0a.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "14"
                        }
                    },
                    {
                        "name": "Scale the Summit",
                        "playcount": "517",
                        "mbid": "37221dd7-41b1-49fa-ac32-08f8277f72cf",
                        "url": "https://www.last.fm/music/Scale+the+Summit",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "15"
                        }
                    },
                    {
                        "name": "Snarky Puppy",
                        "playcount": "508",
                        "mbid": "fe85367e-4036-43c1-874b-b91af81cb4f3",
                        "url": "https://www.last.fm/music/Snarky+Puppy",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/8eea3a667e204a86b47ee2bc52421269.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/8eea3a667e204a86b47ee2bc52421269.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/8eea3a667e204a86b47ee2bc52421269.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/8eea3a667e204a86b47ee2bc52421269.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/8eea3a667e204a86b47ee2bc52421269.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "16"
                        }
                    },
                    {
                        "name": "Don Ross & Andy McKee",
                        "playcount": "485",
                        "mbid": "e55ad39a-47d2-46fc-afd4-92d59883acd1",
                        "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "17"
                        }
                    },
                    {
                        "name": "Jonathan Jeremiah",
                        "playcount": "471",
                        "mbid": "ca9ced31-4a6f-47ed-8032-fa3bad53fcd0",
                        "url": "https://www.last.fm/music/Jonathan+Jeremiah",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/ac25d379388c4807b25bfaddbd7f261a.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/ac25d379388c4807b25bfaddbd7f261a.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/ac25d379388c4807b25bfaddbd7f261a.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/ac25d379388c4807b25bfaddbd7f261a.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/ac25d379388c4807b25bfaddbd7f261a.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "18"
                        }
                    },
                    {
                        "name": "Beef",
                        "playcount": "465",
                        "mbid": "efebd1dd-55c3-412c-aab3-f4377c096af9",
                        "url": "https://www.last.fm/music/Beef",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/955d8909f20a42a58c20762342dc825c.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/955d8909f20a42a58c20762342dc825c.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/955d8909f20a42a58c20762342dc825c.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/955d8909f20a42a58c20762342dc825c.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/955d8909f20a42a58c20762342dc825c.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "19"
                        }
                    },
                    {
                        "name": "Rory Gallagher",
                        "playcount": "430",
                        "mbid": "933fdeae-ec68-48e9-a752-8bcfd44bc429",
                        "url": "https://www.last.fm/music/Rory+Gallagher",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/7655a3367818483387e404526ab4d279.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/7655a3367818483387e404526ab4d279.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/7655a3367818483387e404526ab4d279.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/7655a3367818483387e404526ab4d279.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/7655a3367818483387e404526ab4d279.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "20"
                        }
                    },
                    {
                        "name": "alt-J",
                        "playcount": "388",
                        "mbid": "fc7bbf00-fbaa-4736-986b-b3ac0266ca9b",
                        "url": "https://www.last.fm/music/alt-J",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/bf2571ed95b92afd6d5ee5c49ac97b06.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/bf2571ed95b92afd6d5ee5c49ac97b06.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/bf2571ed95b92afd6d5ee5c49ac97b06.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/bf2571ed95b92afd6d5ee5c49ac97b06.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/bf2571ed95b92afd6d5ee5c49ac97b06.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "21"
                        }
                    },
                    {
                        "name": "Gary Moore",
                        "playcount": "368",
                        "mbid": "a8806b5c-3ee0-4277-94d3-1a5427a7707c",
                        "url": "https://www.last.fm/music/Gary+Moore",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/9c7325847f354946a108ecba73399e7e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/9c7325847f354946a108ecba73399e7e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/9c7325847f354946a108ecba73399e7e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/9c7325847f354946a108ecba73399e7e.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/9c7325847f354946a108ecba73399e7e.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "22"
                        }
                    },
                    {
                        "name": "Agalloch",
                        "playcount": "359",
                        "mbid": "3d46727d-9367-47b8-8b8b-f7b6767f7d57",
                        "url": "https://www.last.fm/music/Agalloch",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/ca2356913377483da117ebba7ef9c427.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/ca2356913377483da117ebba7ef9c427.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/ca2356913377483da117ebba7ef9c427.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/ca2356913377483da117ebba7ef9c427.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/ca2356913377483da117ebba7ef9c427.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "23"
                        }
                    },
                    {
                        "name": "Crippled Black Phoenix",
                        "playcount": "354",
                        "mbid": "055b6082-b9cc-4688-85c4-8153c0ef2d70",
                        "url": "https://www.last.fm/music/Crippled+Black+Phoenix",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/187adfb579f34944970a9353fd1b9639.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/187adfb579f34944970a9353fd1b9639.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/187adfb579f34944970a9353fd1b9639.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/187adfb579f34944970a9353fd1b9639.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/187adfb579f34944970a9353fd1b9639.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "24"
                        }
                    },
                    {
                        "name": "Mr. Bungle",
                        "playcount": "346",
                        "mbid": "277e21a9-2d64-452d-96c4-2d23a7af5891",
                        "url": "https://www.last.fm/music/Mr.+Bungle",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/319a09822be0445ea03674f0083fe5ff.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/319a09822be0445ea03674f0083fe5ff.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/319a09822be0445ea03674f0083fe5ff.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/319a09822be0445ea03674f0083fe5ff.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/319a09822be0445ea03674f0083fe5ff.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "25"
                        }
                    },
                    {
                        "name": "Down",
                        "playcount": "335",
                        "mbid": "4c01333f-e8e8-43bd-9923-8de83ef6f63d",
                        "url": "https://www.last.fm/music/Down",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/509e61aba45045e3a0b48dd01bcb0852.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/509e61aba45045e3a0b48dd01bcb0852.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/509e61aba45045e3a0b48dd01bcb0852.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/509e61aba45045e3a0b48dd01bcb0852.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/509e61aba45045e3a0b48dd01bcb0852.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "26"
                        }
                    },
                    {
                        "name": "Isis",
                        "playcount": "321",
                        "mbid": "a892235b-2acc-446f-9f2e-0370c920310c",
                        "url": "https://www.last.fm/music/Isis",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/bbc6c101d7ad440cbe59777585176eb6.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/bbc6c101d7ad440cbe59777585176eb6.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/bbc6c101d7ad440cbe59777585176eb6.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/bbc6c101d7ad440cbe59777585176eb6.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/bbc6c101d7ad440cbe59777585176eb6.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "27"
                        }
                    },
                    {
                        "name": "Baroness",
                        "playcount": "310",
                        "mbid": "eeb41a1e-4326-4d04-8c47-0f564ceecd68",
                        "url": "https://www.last.fm/music/Baroness",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/b717b67acd3f40ea98563ec0040f9043.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/b717b67acd3f40ea98563ec0040f9043.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/b717b67acd3f40ea98563ec0040f9043.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/b717b67acd3f40ea98563ec0040f9043.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/b717b67acd3f40ea98563ec0040f9043.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "28"
                        }
                    },
                    {
                        "name": "Kings of Convenience",
                        "playcount": "307",
                        "mbid": "cf0f4547-ffbd-4011-98ad-0bec9ba022db",
                        "url": "https://www.last.fm/music/Kings+of+Convenience",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/307d657e0e04451aaa28286aad2e446c.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/307d657e0e04451aaa28286aad2e446c.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/307d657e0e04451aaa28286aad2e446c.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/307d657e0e04451aaa28286aad2e446c.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/307d657e0e04451aaa28286aad2e446c.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "29"
                        }
                    },
                    {
                        "name": "Pink Floyd",
                        "playcount": "302",
                        "mbid": "83d91898-7763-47d7-b03b-b92132375c47",
                        "url": "https://www.last.fm/music/Pink+Floyd",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/7cc889044fef4e85ce46657d2eb562b3.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/7cc889044fef4e85ce46657d2eb562b3.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/7cc889044fef4e85ce46657d2eb562b3.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/7cc889044fef4e85ce46657d2eb562b3.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/7cc889044fef4e85ce46657d2eb562b3.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "30"
                        }
                    },
                    {
                        "name": "War from a Harlots Mouth",
                        "playcount": "282",
                        "mbid": "0c0d9d09-792f-43f2-8bcb-05b9dc990d58",
                        "url": "https://www.last.fm/music/War+from+a+Harlots+Mouth",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/308ff22abf754e1f82dc02e31095717e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/308ff22abf754e1f82dc02e31095717e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/308ff22abf754e1f82dc02e31095717e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/308ff22abf754e1f82dc02e31095717e.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/308ff22abf754e1f82dc02e31095717e.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "31"
                        }
                    },
                    {
                        "name": "Ghost",
                        "playcount": "269",
                        "mbid": "ed81302a-c095-4f0d-a243-ec362956fee7",
                        "url": "https://www.last.fm/music/Ghost",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a78cbb5f1a1a42ef9755cb80b91191a8.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a78cbb5f1a1a42ef9755cb80b91191a8.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a78cbb5f1a1a42ef9755cb80b91191a8.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a78cbb5f1a1a42ef9755cb80b91191a8.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/a78cbb5f1a1a42ef9755cb80b91191a8.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "32"
                        }
                    },
                    {
                        "name": "The Black Crowes",
                        "playcount": "261",
                        "mbid": "02ceff75-7363-493e-a78d-912dc86c7460",
                        "url": "https://www.last.fm/music/The+Black+Crowes",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/baeba91b1c0e429c96e1f6e59ddc06f2.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/baeba91b1c0e429c96e1f6e59ddc06f2.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/baeba91b1c0e429c96e1f6e59ddc06f2.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/baeba91b1c0e429c96e1f6e59ddc06f2.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/baeba91b1c0e429c96e1f6e59ddc06f2.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "33"
                        }
                    },
                    {
                        "name": "Pallbearer",
                        "playcount": "257",
                        "mbid": "4d263664-5418-4f6c-b46a-36f413044e73",
                        "url": "https://www.last.fm/music/Pallbearer",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/62f5b5fcc56749e98577616ca3b5a187.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/62f5b5fcc56749e98577616ca3b5a187.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/62f5b5fcc56749e98577616ca3b5a187.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/62f5b5fcc56749e98577616ca3b5a187.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/62f5b5fcc56749e98577616ca3b5a187.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "34"
                        }
                    },
                    {
                        "name": "My Morning Jacket",
                        "playcount": "255",
                        "mbid": "ea5883b7-68ce-48b3-b115-61746ea53b8c",
                        "url": "https://www.last.fm/music/My+Morning+Jacket",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/7b5be76d8fca49f3ba2d4ca88cf6bcb6.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/7b5be76d8fca49f3ba2d4ca88cf6bcb6.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/7b5be76d8fca49f3ba2d4ca88cf6bcb6.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/7b5be76d8fca49f3ba2d4ca88cf6bcb6.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/7b5be76d8fca49f3ba2d4ca88cf6bcb6.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "35"
                        }
                    },
                    {
                        "name": "Brainbox",
                        "playcount": "240",
                        "mbid": "1ad29893-7ecc-462b-99e5-70577a682970",
                        "url": "https://www.last.fm/music/Brainbox",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/78fadda2c698477bbc9efc6725ddb2c6.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/78fadda2c698477bbc9efc6725ddb2c6.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/78fadda2c698477bbc9efc6725ddb2c6.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/78fadda2c698477bbc9efc6725ddb2c6.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/78fadda2c698477bbc9efc6725ddb2c6.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "36"
                        }
                    },
                    {
                        "name": "Oceansize",
                        "playcount": "239",
                        "mbid": "c147b96e-3428-4604-9b6c-d931f980f684",
                        "url": "https://www.last.fm/music/Oceansize",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/9a3bfea7341044b8a71c7e8d4a39d277.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/9a3bfea7341044b8a71c7e8d4a39d277.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/9a3bfea7341044b8a71c7e8d4a39d277.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/9a3bfea7341044b8a71c7e8d4a39d277.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/9a3bfea7341044b8a71c7e8d4a39d277.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "37"
                        }
                    },
                    {
                        "name": "Air",
                        "playcount": "237",
                        "mbid": "ef3f5cea-b32e-4325-b8d4-96ae70a9fc2e",
                        "url": "https://www.last.fm/music/Air",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/3c1673a000124a69b6975522c901ec56.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/3c1673a000124a69b6975522c901ec56.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/3c1673a000124a69b6975522c901ec56.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/3c1673a000124a69b6975522c901ec56.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/3c1673a000124a69b6975522c901ec56.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "38"
                        }
                    },
                    {
                        "name": "And So I Watch You From Afar",
                        "playcount": "237",
                        "mbid": "0fb7d725-4dfd-45d2-944c-6ffa375a142d",
                        "url": "https://www.last.fm/music/And+So+I+Watch+You+From+Afar",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/e7b78d3be37049b9a5f5cbd374d74c33.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/e7b78d3be37049b9a5f5cbd374d74c33.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/e7b78d3be37049b9a5f5cbd374d74c33.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/e7b78d3be37049b9a5f5cbd374d74c33.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/e7b78d3be37049b9a5f5cbd374d74c33.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "39"
                        }
                    },
                    {
                        "name": "Jamiroquai",
                        "playcount": "221",
                        "mbid": "f4857fb9-e255-4dc6-bd01-e4ca7cc68544",
                        "url": "https://www.last.fm/music/Jamiroquai",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/ef42fa9ce7791b1aab22ae8661151f5b.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/ef42fa9ce7791b1aab22ae8661151f5b.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/ef42fa9ce7791b1aab22ae8661151f5b.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/ef42fa9ce7791b1aab22ae8661151f5b.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/ef42fa9ce7791b1aab22ae8661151f5b.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "40"
                        }
                    },
                    {
                        "name": "The Whitest Boy Alive",
                        "playcount": "220",
                        "mbid": "f83781c8-64f9-4657-85bd-51f74d195cfd",
                        "url": "https://www.last.fm/music/The+Whitest+Boy+Alive",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/104ff04b61d040ae92474913cdc7f83b.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/104ff04b61d040ae92474913cdc7f83b.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/104ff04b61d040ae92474913cdc7f83b.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/104ff04b61d040ae92474913cdc7f83b.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/104ff04b61d040ae92474913cdc7f83b.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "41"
                        }
                    },
                    {
                        "name": "J.J. Cale & Eric Clapton",
                        "playcount": "217",
                        "mbid": "4b0be624-6b87-47e8-bbf0-588a2c6c0439",
                        "url": "https://www.last.fm/music/J.J.+Cale+&+Eric+Clapton",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/af221627a8a84cc0b193ae39ced8815b.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/af221627a8a84cc0b193ae39ced8815b.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/af221627a8a84cc0b193ae39ced8815b.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/af221627a8a84cc0b193ae39ced8815b.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/af221627a8a84cc0b193ae39ced8815b.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "42"
                        }
                    },
                    {
                        "name": "Spinvis",
                        "playcount": "217",
                        "mbid": "5a87d06c-2123-450a-9388-cf121eeb8729",
                        "url": "https://www.last.fm/music/Spinvis",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/2740b65508ab4d799d77d308245f295e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/2740b65508ab4d799d77d308245f295e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/2740b65508ab4d799d77d308245f295e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/2740b65508ab4d799d77d308245f295e.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/2740b65508ab4d799d77d308245f295e.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "43"
                        }
                    },
                    {
                        "name": "Gnadab",
                        "playcount": "204",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Gnadab",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/828c82c481ed4617a1dfa4e2f0880a9e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/828c82c481ed4617a1dfa4e2f0880a9e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/828c82c481ed4617a1dfa4e2f0880a9e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/828c82c481ed4617a1dfa4e2f0880a9e.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/828c82c481ed4617a1dfa4e2f0880a9e.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "44"
                        }
                    },
                    {
                        "name": "Iron Maiden",
                        "playcount": "204",
                        "mbid": "ca891d65-d9b0-4258-89f7-e6ba29d83767",
                        "url": "https://www.last.fm/music/Iron+Maiden",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/3232796779fd4f4184e7bb4505657afd.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/3232796779fd4f4184e7bb4505657afd.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/3232796779fd4f4184e7bb4505657afd.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/3232796779fd4f4184e7bb4505657afd.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/3232796779fd4f4184e7bb4505657afd.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "45"
                        }
                    },
                    {
                        "name": "Beastmilk",
                        "playcount": "202",
                        "mbid": "0c71f174-5240-426b-8d43-66a3459c2f71",
                        "url": "https://www.last.fm/music/Beastmilk",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/bc6498848a9540d8b0560b62592fb5dc.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/bc6498848a9540d8b0560b62592fb5dc.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/bc6498848a9540d8b0560b62592fb5dc.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/bc6498848a9540d8b0560b62592fb5dc.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/bc6498848a9540d8b0560b62592fb5dc.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "46"
                        }
                    },
                    {
                        "name": "Mastodon",
                        "playcount": "202",
                        "mbid": "bc5e2ad6-0a4a-4d90-b911-e9a7e6861727",
                        "url": "https://www.last.fm/music/Mastodon",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/7e5c9f017a5742c8975d548a5b780bb2.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/7e5c9f017a5742c8975d548a5b780bb2.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/7e5c9f017a5742c8975d548a5b780bb2.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/7e5c9f017a5742c8975d548a5b780bb2.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/7e5c9f017a5742c8975d548a5b780bb2.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "47"
                        }
                    },
                    {
                        "name": "The New Pornographers",
                        "playcount": "202",
                        "mbid": "25b75a66-ce83-4db3-b136-395a3c3784c4",
                        "url": "https://www.last.fm/music/The+New+Pornographers",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/f0514832a1b4413f8ed907beaf0e9135.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/f0514832a1b4413f8ed907beaf0e9135.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/f0514832a1b4413f8ed907beaf0e9135.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/f0514832a1b4413f8ed907beaf0e9135.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/f0514832a1b4413f8ed907beaf0e9135.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "48"
                        }
                    },
                    {
                        "name": "CQ",
                        "playcount": "198",
                        "mbid": "",
                        "url": "https://www.last.fm/music/CQ",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/bcd698bbcbb34d18cd9100884fe3c4cb.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/bcd698bbcbb34d18cd9100884fe3c4cb.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/bcd698bbcbb34d18cd9100884fe3c4cb.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/bcd698bbcbb34d18cd9100884fe3c4cb.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/bcd698bbcbb34d18cd9100884fe3c4cb.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "49"
                        }
                    },
                    {
                        "name": "Crash Test Dummies",
                        "playcount": "192",
                        "mbid": "afb8f901-d846-4c70-a898-59bc183d1da7",
                        "url": "https://www.last.fm/music/Crash+Test+Dummies",
                        "streamable": "0",
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/1337516ba6834f16b473d7820dcabc30.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/1337516ba6834f16b473d7820dcabc30.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/1337516ba6834f16b473d7820dcabc30.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/1337516ba6834f16b473d7820dcabc30.png",
                                "size": "extralarge"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/1337516ba6834f16b473d7820dcabc30.png",
                                "size": "mega"
                            }
                        ],
                        "@attr": {
                            "rank": "50"
                        }
                    }
                ],
                "@attr": {
                    "user": "Barryvanveen",
                    "page": "1",
                    "perPage": "50",
                    "totalPages": "34",
                    "total": "1684"
                }
            }
        }
        ';
    }

    public static function userTopTracks(): string
    {
        return '
        {
            "toptracks": {
                "track": [
                    {
                        "name": "Ouray",
                        "duration": "143",
                        "playcount": "65",
                        "mbid": "1f41a227-d6b9-4ea0-b69d-8bf1ec0a6e13",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Ouray",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "1"
                        }
                    },
                    {
                        "name": "All Laid Back and Stuff",
                        "duration": "167",
                        "playcount": "60",
                        "mbid": "a051e8a7-f918-4f58-ae26-3aa249f42b59",
                        "url": "https://www.last.fm/music/Andy+McKee/_/All+Laid+Back+and+Stuff",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "2"
                        }
                    },
                    {
                        "name": "Ebon Coast",
                        "duration": "306",
                        "playcount": "56",
                        "mbid": "7d77588d-755b-49b1-a7b6-7d46130ed01f",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Ebon+Coast",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "3"
                        }
                    },
                    {
                        "name": "Nakagawa-san",
                        "duration": "276",
                        "playcount": "56",
                        "mbid": "e41aa69a-b2a1-4de0-a96e-122cde15a21d",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Nakagawa-san",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "4"
                        }
                    },
                    {
                        "name": "Venus as a Girl",
                        "duration": "268",
                        "playcount": "56",
                        "mbid": "4da8e2ae-b238-49c9-b7ce-d4272dfaaf2c",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Venus+as+a+Girl",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "5"
                        }
                    },
                    {
                        "name": "7-14",
                        "duration": "242",
                        "playcount": "55",
                        "mbid": "8447c1e6-60f8-4280-849b-56168afaea31",
                        "url": "https://www.last.fm/music/Andy+McKee/_/7-14",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "6"
                        }
                    },
                    {
                        "name": "Berzerker",
                        "duration": "338",
                        "playcount": "55",
                        "mbid": "985f3c85-ab2c-4617-92b1-e726c1a43cc2",
                        "url": "https://www.last.fm/music/After+the+Burial/_/Berzerker",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "7"
                        }
                    },
                    {
                        "name": "Dependant Arising",
                        "duration": "288",
                        "playcount": "55",
                        "mbid": "69a470af-01b2-46cc-b31e-e01d18b81995",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Dependant+Arising",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "8"
                        }
                    },
                    {
                        "name": "When She Cries",
                        "duration": "223",
                        "playcount": "55",
                        "mbid": "1cc2a845-9f4a-4946-828e-bdf15548ac10",
                        "url": "https://www.last.fm/music/Andy+McKee/_/When+She+Cries",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "9"
                        }
                    },
                    {
                        "name": "A Sphere",
                        "duration": "204",
                        "playcount": "54",
                        "mbid": "bd28d508-7f28-4115-a462-66af72182c50",
                        "url": "https://www.last.fm/music/Andy+McKee/_/A+Sphere",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "10"
                        }
                    },
                    {
                        "name": "Gates of Gnomeria",
                        "duration": "341",
                        "playcount": "54",
                        "mbid": "1b0a0a82-4678-4453-acf9-2f5e4aaa858f",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Gates+of+Gnomeria",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "11"
                        }
                    },
                    {
                        "name": "I\'ll Be Over You",
                        "duration": "206",
                        "playcount": "54",
                        "mbid": "a66f4fcb-b6dc-49b0-82b4-35de348bd528",
                        "url": "https://www.last.fm/music/Andy+McKee/_/I%27ll+Be+Over+You",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "12"
                        }
                    },
                    {
                        "name": "Art of Motion",
                        "duration": "207",
                        "playcount": "53",
                        "mbid": "e3c46818-1056-4d35-a482-bd15f9b6463f",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Art+of+Motion",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "13"
                        }
                    },
                    {
                        "name": "Shoeshine For Neptune",
                        "duration": "174",
                        "playcount": "53",
                        "mbid": "fba3b9f9-4464-4426-882c-7a41051716a8",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls/_/Shoeshine+For+Neptune",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Arsonists Get All The Girls",
                            "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                            "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "14"
                        }
                    },
                    {
                        "name": "The Fractal Effect",
                        "duration": "230",
                        "playcount": "52",
                        "mbid": "09482a29-7d9f-4858-82a1-4bcccc272096",
                        "url": "https://www.last.fm/music/After+the+Burial/_/The+Fractal+Effect",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "15"
                        }
                    },
                    {
                        "name": "To Get Eaten By The Rats",
                        "duration": "48",
                        "playcount": "52",
                        "mbid": "430ba3ca-876f-4ef7-bb5f-a9b415499294",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls/_/To+Get+Eaten+By+The+Rats",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Arsonists Get All The Girls",
                            "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                            "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "16"
                        }
                    },
                    {
                        "name": "Dolphins",
                        "duration": "0",
                        "playcount": "51",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee/_/Dolphins",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Don Ross & Andy McKee",
                            "mbid": "e55ad39a-47d2-46fc-afd4-92d59883acd1",
                            "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "17"
                        }
                    },
                    {
                        "name": "Drifts",
                        "duration": "249",
                        "playcount": "51",
                        "mbid": "de80a859-28a9-414a-8e82-4efa950c758e",
                        "url": "https://www.last.fm/music/After+the+Burial/_/Drifts",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "18"
                        }
                    },
                    {
                        "name": "Aspiration",
                        "duration": "278",
                        "playcount": "50",
                        "mbid": "cdc0b74c-23d7-4f65-8dfc-2b59fa9ec739",
                        "url": "https://www.last.fm/music/After+the+Burial/_/Aspiration",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "19"
                        }
                    },
                    {
                        "name": "Rareform",
                        "duration": "181",
                        "playcount": "50",
                        "mbid": "d8bf1806-9b96-4dbc-b02d-5804239cbc13",
                        "url": "https://www.last.fm/music/After+the+Burial/_/Rareform",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "20"
                        }
                    },
                    {
                        "name": "Tourtasia",
                        "duration": "228",
                        "playcount": "50",
                        "mbid": "31c5e0d6-23d6-4767-b490-c691095c10e8",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls/_/Tourtasia",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Arsonists Get All The Girls",
                            "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                            "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "21"
                        }
                    },
                    {
                        "name": "Green Grass of Tunnel",
                        "duration": "296",
                        "playcount": "48",
                        "mbid": "74fa9d38-398c-4209-816c-073ebe395d67",
                        "url": "https://www.last.fm/music/m%C3%BAm/_/Green+Grass+of+Tunnel",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "múm",
                            "mbid": "2b64e811-cbcd-45f7-b29d-296444cad4f1",
                            "url": "https://www.last.fm/music/m%C3%BAm"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/1a8efb8c3a6f410d99eed5d5b851870b.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/1a8efb8c3a6f410d99eed5d5b851870b.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/1a8efb8c3a6f410d99eed5d5b851870b.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/1a8efb8c3a6f410d99eed5d5b851870b.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "22"
                        }
                    },
                    {
                        "name": "Heather\'s Song",
                        "duration": "208",
                        "playcount": "48",
                        "mbid": "efffc05c-b1f0-4b62-bfbe-26d59af88695",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Heather%27s+Song",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "23"
                        }
                    },
                    {
                        "name": "Into the Ocean",
                        "duration": "236",
                        "playcount": "48",
                        "mbid": "df8ae769-f846-456e-bee6-7c14c41fdf5d",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Into+the+Ocean",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "24"
                        }
                    },
                    {
                        "name": "She",
                        "duration": "181",
                        "playcount": "48",
                        "mbid": "72d9cdef-f071-4ba5-82b2-bc7786cb61a3",
                        "url": "https://www.last.fm/music/Andy+McKee/_/She",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "25"
                        }
                    },
                    {
                        "name": "Claiming Middle Age A Decade Early",
                        "duration": "186",
                        "playcount": "47",
                        "mbid": "dca55048-3857-4fdb-b1a5-85e3efab405e",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls/_/Claiming+Middle+Age+A+Decade+Early",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Arsonists Get All The Girls",
                            "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                            "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "26"
                        }
                    },
                    {
                        "name": "Cursing Akhenaten",
                        "duration": "0",
                        "playcount": "47",
                        "mbid": "",
                        "url": "https://www.last.fm/music/After+the+Burial/_/Cursing+Akhenaten",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "27"
                        }
                    },
                    {
                        "name": "Samus\' Stardrive",
                        "duration": "161",
                        "playcount": "47",
                        "mbid": "2bab3646-e76c-4944-b1e2-7cc9c693e904",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Samus%27+Stardrive",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "28"
                        }
                    },
                    {
                        "name": "Spirit of the West",
                        "duration": "0",
                        "playcount": "47",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee/_/Spirit+of+the+West",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Don Ross & Andy McKee",
                            "mbid": "e55ad39a-47d2-46fc-afd4-92d59883acd1",
                            "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "29"
                        }
                    },
                    {
                        "name": "Yasmin the Light",
                        "duration": "425",
                        "playcount": "47",
                        "mbid": "5fdaf4e1-9ab0-45a6-9c66-6d57fd23f743",
                        "url": "https://www.last.fm/music/Explosions+in+the+Sky/_/Yasmin+the+Light",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Explosions in the Sky",
                            "mbid": "4236acde-2ce2-441c-a3d4-38d55f1b5474",
                            "url": "https://www.last.fm/music/Explosions+in+the+Sky"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "30"
                        }
                    },
                    {
                        "name": "Greet Death",
                        "duration": "439",
                        "playcount": "46",
                        "mbid": "1b27f1b3-65de-42d0-8d6e-1e728fc38d1d",
                        "url": "https://www.last.fm/music/Explosions+in+the+Sky/_/Greet+Death",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Explosions in the Sky",
                            "mbid": "4236acde-2ce2-441c-a3d4-38d55f1b5474",
                            "url": "https://www.last.fm/music/Explosions+in+the+Sky"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/cb01388ae623434ea9abeb2b77ccf788.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "31"
                        }
                    },
                    {
                        "name": "Ometh",
                        "duration": "251",
                        "playcount": "46",
                        "mbid": "48e2800a-6f32-4b5c-9452-f5f95d261f08",
                        "url": "https://www.last.fm/music/After+the+Burial/_/Ometh",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "32"
                        }
                    },
                    {
                        "name": "Ouray",
                        "duration": "0",
                        "playcount": "45",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee/_/Ouray",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Don Ross & Andy McKee",
                            "mbid": "e55ad39a-47d2-46fc-afd4-92d59883acd1",
                            "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "33"
                        }
                    },
                    {
                        "name": "Taiwanese Troft Trouble",
                        "duration": "210",
                        "playcount": "45",
                        "mbid": "7296f93a-8291-4bb5-ae7c-85c3af20de70",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls/_/Taiwanese+Troft+Trouble",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Arsonists Get All The Girls",
                            "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                            "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "34"
                        }
                    },
                    {
                        "name": "Tight Trite Night",
                        "duration": "0",
                        "playcount": "45",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee/_/Tight+Trite+Night",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Don Ross & Andy McKee",
                            "mbid": "e55ad39a-47d2-46fc-afd4-92d59883acd1",
                            "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "35"
                        }
                    },
                    {
                        "name": "Business In The Front",
                        "duration": "74",
                        "playcount": "44",
                        "mbid": "00de28b2-bb8a-4542-8356-70e4c62b2c79",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls/_/Business+In+The+Front",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Arsonists Get All The Girls",
                            "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                            "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "36"
                        }
                    },
                    {
                        "name": "Cuffed To Your Ankles",
                        "duration": "259",
                        "playcount": "44",
                        "mbid": "3b276d47-c173-4add-be86-176f0a5e57d3",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls/_/Cuffed+To+Your+Ankles",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Arsonists Get All The Girls",
                            "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                            "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "37"
                        }
                    },
                    {
                        "name": "Cut Off The Top",
                        "duration": "182",
                        "playcount": "44",
                        "mbid": "d1239e1a-6b47-468f-902d-bf7fcefa0c3c",
                        "url": "https://www.last.fm/music/Beatsteaks/_/Cut+Off+The+Top",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Beatsteaks",
                            "mbid": "a9b88ebb-83aa-4ef7-b674-fabeb572c14e",
                            "url": "https://www.last.fm/music/Beatsteaks"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "38"
                        }
                    },
                    {
                        "name": "Mantipede",
                        "duration": "78",
                        "playcount": "44",
                        "mbid": "c7b3fe80-8090-404d-bae2-bbd02828d0c1",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls/_/Mantipede",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Arsonists Get All The Girls",
                            "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                            "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "39"
                        }
                    },
                    {
                        "name": "Meantime",
                        "duration": "148",
                        "playcount": "44",
                        "mbid": "aab7980a-68a3-4c2d-838e-aaa68efc7be8",
                        "url": "https://www.last.fm/music/Beatsteaks/_/Meantime",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Beatsteaks",
                            "mbid": "a9b88ebb-83aa-4ef7-b674-fabeb572c14e",
                            "url": "https://www.last.fm/music/Beatsteaks"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/60a1f90c9a25414e88f65a76d54f7c46.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "40"
                        }
                    },
                    {
                        "name": "Naked As We Came",
                        "duration": "175",
                        "playcount": "44",
                        "mbid": "3fca465c-7505-4cb8-ae91-33d7df5c13fe",
                        "url": "https://www.last.fm/music/Iron+&+Wine/_/Naked+As+We+Came",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Iron & Wine",
                            "mbid": "c3f28da8-662d-4f09-bdc7-3084bf685930",
                            "url": "https://www.last.fm/music/Iron+&+Wine"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/a4142bcba3244ccdb0ca60143bb22abb.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/a4142bcba3244ccdb0ca60143bb22abb.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/a4142bcba3244ccdb0ca60143bb22abb.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/a4142bcba3244ccdb0ca60143bb22abb.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "41"
                        }
                    },
                    {
                        "name": "Rylynn",
                        "duration": "354",
                        "playcount": "44",
                        "mbid": "33286f6c-4778-415a-a986-ed3447485baa",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Rylynn",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "42"
                        }
                    },
                    {
                        "name": "Rylynn",
                        "duration": "0",
                        "playcount": "44",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee/_/Rylynn",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Don Ross & Andy McKee",
                            "mbid": "e55ad39a-47d2-46fc-afd4-92d59883acd1",
                            "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "43"
                        }
                    },
                    {
                        "name": "The Thing That Came From Somewhere",
                        "duration": "0",
                        "playcount": "44",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee/_/The+Thing+That+Came+From+Somewhere",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Don Ross & Andy McKee",
                            "mbid": "e55ad39a-47d2-46fc-afd4-92d59883acd1",
                            "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "44"
                        }
                    },
                    {
                        "name": "A Vicious Reforming Of Features",
                        "duration": "349",
                        "playcount": "43",
                        "mbid": "5e38e9be-f236-478e-95f7-f512c26e4e3b",
                        "url": "https://www.last.fm/music/After+the+Burial/_/A+Vicious+Reforming+Of+Features",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "After the Burial",
                            "mbid": "6dd9b71e-2e2f-4a66-bfce-5e820589b390",
                            "url": "https://www.last.fm/music/After+the+Burial"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/30e764e8171f4d36cd8ec819dd3694fd.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "45"
                        }
                    },
                    {
                        "name": "Dreamcatcher",
                        "duration": "0",
                        "playcount": "43",
                        "mbid": "",
                        "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee/_/Dreamcatcher",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Don Ross & Andy McKee",
                            "mbid": "e55ad39a-47d2-46fc-afd4-92d59883acd1",
                            "url": "https://www.last.fm/music/Don+Ross+&+Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/292eeafdcce54dd49921e9ec1006479e.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "46"
                        }
                    },
                    {
                        "name": "Drifting",
                        "duration": "191",
                        "playcount": "43",
                        "mbid": "8310c7d7-3531-490d-8c49-35c979e8a963",
                        "url": "https://www.last.fm/music/Andy+McKee/_/Drifting",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Andy McKee",
                            "mbid": "ace6f877-f619-4c6d-b32e-f7b8ba8b2043",
                            "url": "https://www.last.fm/music/Andy+McKee"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/972e2a506d034eceaaf636ec6de8831f.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "47"
                        }
                    },
                    {
                        "name": "Save The Castle, Screw The Princess",
                        "duration": "312",
                        "playcount": "43",
                        "mbid": "768d1242-8144-40e9-a7b0-ad58fc43ad08",
                        "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls/_/Save+The+Castle,+Screw+The+Princess",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Arsonists Get All The Girls",
                            "mbid": "99d6cff5-7cd7-4980-b40f-3e34aac44171",
                            "url": "https://www.last.fm/music/Arsonists+Get+All+The+Girls"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/4cdb7745174a47e693cbdb104ad3030d.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "48"
                        }
                    },
                    {
                        "name": "The Levitated",
                        "duration": "182",
                        "playcount": "43",
                        "mbid": "2e25ede1-69ea-4505-b2e2-5d392930b050",
                        "url": "https://www.last.fm/music/Scale+the+Summit/_/The+Levitated",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Scale the Summit",
                            "mbid": "37221dd7-41b1-49fa-ac32-08f8277f72cf",
                            "url": "https://www.last.fm/music/Scale+the+Summit"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "49"
                        }
                    },
                    {
                        "name": "Whales",
                        "duration": "388",
                        "playcount": "43",
                        "mbid": "b56f0bbd-ab2c-45a3-8010-c74592f8df3a",
                        "url": "https://www.last.fm/music/Scale+the+Summit/_/Whales",
                        "streamable": {
                            "#text": "0",
                            "fulltrack": "0"
                        },
                        "artist": {
                            "name": "Scale the Summit",
                            "mbid": "37221dd7-41b1-49fa-ac32-08f8277f72cf",
                            "url": "https://www.last.fm/music/Scale+the+Summit"
                        },
                        "image": [
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/34s/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "small"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/64s/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "medium"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/174s/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "large"
                            },
                            {
                                "#text": "https://lastfm-img2.akamaized.net/i/u/300x300/9a2b4cc99a3b4185bad340fe42b6d2cf.png",
                                "size": "extralarge"
                            }
                        ],
                        "@attr": {
                            "rank": "50"
                        }
                    }
                ],
                "@attr": {
                    "user": "Barryvanveen",
                    "page": "1",
                    "perPage": "50",
                    "totalPages": "201",
                    "total": "10022"
                }
            }
        }
        ';
    }
}
