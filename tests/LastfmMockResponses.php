<?php

declare(strict_types=1);

namespace Tests;

class LastfmMockResponses
{
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

    public static function apiKeyMissingErrorMessage(): string
    {
        return '
        {
            "error": 6,
            "message": "Invalid parameters - Your request is missing a required parameter"
        }
        ';
    }

    public static function responseWithoutErrorMessage(): string
    {
        return '
        {
            "not_an_error_message": "foo"
        }
        ';
    }

    public static function undecodableJson(): string
    {
        return 'asdasdasd';
    }
}
