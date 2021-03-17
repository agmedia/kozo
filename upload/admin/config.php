<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8888/kozo/upload/admin/');
define('HTTP_CATALOG', 'http://localhost:8888/kozo/upload/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:8888/kozo/upload/admin/');
define('HTTPS_CATALOG', 'http://localhost:8888/kozo/upload/');

// DIR
define('DIR_APPLICATION', '/Applications/MAMP/htdocs/kozo/upload/admin/');
define('DIR_SYSTEM', '/Applications/MAMP/htdocs/kozo/upload/system/');
define('DIR_IMAGE', '/Applications/MAMP/htdocs/kozo/upload/image/');
define('DIR_STORAGE', '/Applications/MAMP/htdocs/kozo/storage/');
define('DIR_CATALOG', '/Applications/MAMP/htdocs/kozo/upload/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'bakanal');
define('DB_DATABASE', 'kozo');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');

// AGmedia Custom
define('AG_CONFIG', [
    'erp' => [
        'base_url' => 'http://balidd.dyndns.org:8080//kipos.web.api/?route=',
        'image_url' => 'http://balidd.dyndns.org:8080/slike/',
        'url_sufix' => '&webshop=1',
        'uuid' => 'd825ca78-9c5a-4de6-b403-37e2508c8353',
        'price_tag' => 'CIJENA_MPC',
        'order_prefix' => 'KHR',
        'order_valuta' => '191', // HR-191, EUR-978
        'import_category_id' => 89,
        'default_language_id' => 2,
        'additional_languages' => [],
        'size_option_id' => 13,
        'update' => [
            'quantity_overwrite' => [
            'P0011', 
                  'P0012', 
                  'P0013', 
                  'P0014', 
                  'P0015', 
                  'P0016', 
                  'P0017', 
                  'P0018', 
                  'P0019', 
                  'P0020', 
                  'P0021', 
                  'M5009', 
                  'M5009L',
                  'M5010', 
                  'M5010L', 
                  'M5011',
                  'M5011L'
            ]
        ]
    ],
    'intereuropa_currency' => 'HRK'
]);