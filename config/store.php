<?php

return [
    "links" => [
        'Characters',
        'Comics',
        'Movies',
        'Tv',
        'Games',
        'Collectible',
        'Videos',
        'Fans',
        'News',
        'Shop'
    ],
    "footerCols"=> [
        [
            [
                "heading"=> 'Dc Comics',
                "links"=> ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News']
            ],
            [
                "heading"=> 'Shop',
                "links"=> ['Shop DC', 'Shop DC Collectibles']
            ]
        ],
        [
            [
                "heading"=> 'Dc',
                "links"=> ['Terms Of Use', 'Privacy Policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', ' CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us']
            ]
        ],
        [
            [
                "heading"=> 'Sites',
                "links"=> ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa']
            ]
        ]
    ],
    "footerSocialMedias"=> [
        [
            "media"=> 'Facebook',
            "path"=> 'footer-facebook.png'
        ],
        [
            "media"=> 'Twitter',
            "path"=> 'footer-twitter.png'
        ],
        [
            "media"=> 'Youtube',
            "path"=> 'footer-youtube.png'
        ],
        [
            "media"=> 'Pinterest',
            "path"=> 'footer-pinterest.png'
        ],
        [
            "media"=> 'Periscope',
            "path"=> 'footer-periscope.png'
        ]
    ],
    'someLinks' => [
        [
            "href" => "/",
            "text" => "Home Page",
        ],
        [
            "href" => "/otherpage",
            "text" => "Other Page",
        ],
        [
            "href" => "https://laravel.com/docs/9.x",
            "text" => "Documentation",
        ]
    ],
    'someOtherData' => [ 42, 37, 73],
];
