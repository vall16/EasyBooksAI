<?php
// WILLY

// return [
//     'base' => [
//         'name' => 'Base',
//         'description' => "5 chapters,\n500 words per chapter",
//         'price' => 9.99,
//         'chapters' => 5,
//         'words_per_chapter' => 500,
//     ],
//     'plus' => [
//         'name' => 'Plus',
//         'description' => "10 chapters,\n1500 words per chapter",
//         'price' => 24.99,
//         'chapters' => 10,
//         'words_per_chapter' => 1500,
//     ],
//     'premium' => [
//         'name' => 'Premium',
//         'description' => "15 chapters,\n2500 words per chapter",
//         'price' => 59.99,
//         'chapters' => 15,
//         'words_per_chapter' => 2500,
//     ],
// ];
// return [
//     'base' => [
//         'name' => 'Base',
//         'description_lines' => [
//             '5 chapters',
//             '500 words per chapter',
//         ],
//         'price' => 9.99,
//         'chapters' => 5,
//         'words_per_chapter' => 500,
//     ],
//     'plus' => [
//         'name' => 'Plus',
//         'description_lines' => [
//             '10 chapters',
//             '1500 words per chapter',
//         ],
//         'price' => 24.99,
//         'chapters' => 10,
//         'words_per_chapter' => 1500,
//     ],
//     'premium' => [
//         'name' => 'Premium',
//         'description_lines' => [
//             '15 chapters',
//             '2500 words per chapter',
//         ],
//         'price' => 59.99,
//         'chapters' => 15,
//         'words_per_chapter' => 2500,
//     ],
// ];

return [
    'base' => [
        'name' => 'Base',
        'description_lines' => [
            '5 chapters',
            '500 words per chapter',
        ],
        'price' => 9.99,
        'chapters' => 5,
        'words_per_chapter' => 500,
        'color_from' => 'pink-500',
        'color_to' => 'rose-500',
        'text_color' => 'text-secondary',
    ],
    'plus' => [
        'name' => 'Plus',
        'price' => 24.99,
        'description_lines' => [
            '10 chapters',
            '1500 words per chapter',
        ],
        'chapters' => 10,
        'words_per_chapter' => 1500,
        'color_from' => 'purple-500',
        'color_to' => 'indigo-600',
        'text_color' => 'text-primary',
        'recommended' => true,
    ],
    'premium' => [
        'name' => 'Premium',
        'price' => 59.99,
        'description_lines' => [
            '15 chapters',
            '2500 words per chapter',
        ],
        'chapters' => 15,
        'words_per_chapter' => 2500,
        'color_from' => 'amber-400',
        'color_to' => 'orange-600',
        'text_color' => 'text-warning',
    ],
];



 

