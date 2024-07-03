<?php

return [
    'export' => [
        'chunk_size'             => 1000,
        'pre_calculate_formulas' => false,
        'csv'                    => [
            'delimiter'              => ',',
            'enclosure'              => '"',
            'line_ending'            => "\n",
            'use_bom'                => false,
            'include_separator_line' => false,
            'excel_compatibility'    => false,
        ],
        'properties'             => [
            'creator'        => '',
            'last_modified_by' => '',
            'title'          => '',
            'description'    => '',
            'subject'        => '',
            'keywords'       => '',
            'category'       => '',
            'manager'        => '',
            'company'        => '',
        ],
    ],
    'import' => [
        'read_only' => true,
        'heading'   => 'slugged',
        'chunk_size' => 1000,
        'csv'       => [
            'delimiter'        => ',',
            'enclosure'        => '"',
            'escape_character' => '\\',
            'contiguous'       => false,
            'input_encoding'   => 'UTF-8',
        ],
        'properties' => [
            'creator'        => '',
            'last_modified_by' => '',
            'title'          => '',
            'description'    => '',
            'subject'        => '',
            'keywords'       => '',
            'category'       => '',
            'manager'        => '',
            'company'        => '',
        ],
    ],
];
