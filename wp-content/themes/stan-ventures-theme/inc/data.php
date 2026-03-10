<?php

/**
 * Central data source for dynamic homepage sections.
 * Replace or extend these arrays as needed, or swap to JSON loading.
 */

$stan_services = [
    [
        'title'       => 'SEO Strategy & Consulting',
        'description' => 'Data-driven SEO roadmaps tailored to your business goals and search intent.',
        'icon'        => 'assets/images/icon-seo-strategy.svg',
    ],
    [
        'title'       => 'Content Marketing',
        'description' => 'High-quality, search-optimized content that drives authority and conversions.',
        'icon'        => 'assets/images/icon-content.svg',
    ],
    [
        'title'       => 'Technical SEO',
        'description' => 'Site architecture, performance, and crawlability improvements for sustainable growth.',
        'icon'        => 'assets/images/icon-technical.svg',
    ],
    [
        'title'       => 'Link Building',
        'description' => 'White-hat link acquisition from relevant, high-authority domains.',
        'icon'        => 'assets/images/icon-link-building.svg',
    ],
];

$stan_case_studies = [
    [
        'client'        => 'SaaS Platform',
        'badge'         => 'B2B',
        'title'         => '300% Organic Traffic Growth in 9 Months',
        'description'   => 'Rebuilt keyword strategy and technical foundation to unlock long-tail demand.',
        'stat_label'    => 'Organic sessions',
        'stat_value'    => '+300%',
        'image'         => 'assets/images/case-saas.png',
    ],
    [
        'client'        => 'E‑commerce Brand',
        'badge'         => 'DTC',
        'title'         => '2.4x Revenue from Organic Search',
        'description'   => 'Optimized high-intent landing pages and collection architecture.',
        'stat_label'    => 'Organic revenue',
        'stat_value'    => '2.4×',
        'image'         => 'assets/images/case-ecom.png',
    ],
];

$stan_testimonials = [
    [
        'quote'      => '“The Stan Ventures team feels like an extension of our in‑house marketing org. They own outcomes, not just tasks.”',
        'name'       => 'Alex Johnson',
        'role'       => 'VP Marketing, GrowthSaaS',
        'avatar'     => 'assets/images/avatar-alex.png',
        'companyLogo'=> 'assets/images/logo-growthsaas.svg',
    ],
    [
        'quote'      => '“They brought clarity to our SEO strategy and turned underperforming content into a reliable acquisition channel.”',
        'name'       => 'Priya Desai',
        'role'       => 'CMO, DTC Collective',
        'avatar'     => 'assets/images/avatar-priya.png',
        'companyLogo'=> 'assets/images/logo-dtc.svg',
    ],
];

$stan_comparison = [
    'columns' => ['In‑House SEO', 'Generic Agency', 'Stan Ventures'],
    'rows'    => [
        [
            'label'   => 'Ownership of outcomes',
            'values'  => ['Medium', 'Low', 'Very high'],
            'highlightIndex' => 2,
        ],
        [
            'label'   => 'Strategy + execution alignment',
            'values'  => ['Inconsistent', 'Fragmented', 'Tightly aligned'],
            'highlightIndex' => 2,
        ],
        [
            'label'   => 'Communication & reporting',
            'values'  => ['Limited bandwidth', 'Surface-level', 'Proactive, insight-led'],
            'highlightIndex' => 2,
        ],
        [
            'label'   => 'Time to impact',
            'values'  => ['Slow', 'Unclear', 'Structured 30/60/90‑day plan'],
            'highlightIndex' => 2,
        ],
    ],
];

$stan_stats = [
    [
        'value' => '250+',
        'label' => 'Active SEO engagements',
    ],
    [
        'value' => '30%',
        'label' => 'Avg. MoM organic growth',
    ],
    [
        'value' => '15',
        'label' => 'Countries served',
    ],
];

