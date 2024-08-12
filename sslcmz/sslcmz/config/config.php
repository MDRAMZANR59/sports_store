<?php

if (!defined('PROJECT_PATH')) {
    define('PROJECT_PATH', 'http://localhost/eticket'); // replace this value with your project path
}

if (!defined('IS_SANDBOX')) {
    define('IS_SANDBOX', true); // 'true' for sandbox, 'false' for live
}

if (!defined('STORE_ID')) {
    define('STORE_ID', 'wdpf5669616a421c11'); // your store id. For sandbox, register at https://developer.sslcommerz.com/registration/
}

if (!defined('STORE_PASSWORD')) {
    define('STORE_PASSWORD', 'wdpf5669616a421c11@ssl'); // your store password.
}

return [
    'success_url' => 'thankyou.php', // your success url
    'failed_url' => 'fail.php', // your fail url
    'cancel_url' => 'cancel.php', //your cancel url
    'ipn_url' => 'ipn.php', // your ipn url


    'projectPath' => PROJECT_PATH,
    'apiDomain' => IS_SANDBOX ? 'https://sandbox.sslcommerz.com' : 'https://securepay.sslcommerz.com',
    'apiCredentials' => [
        'store_id' => STORE_ID,
        'store_password' => STORE_PASSWORD,
    ],
    'apiUrl' => [
        'make_payment' => "/gwprocess/v4/api.php",
        'order_validate' => "/validator/api/validationserverAPI.php",
    ],
    'connect_from_localhost' => false,
    'verify_hash' => true,
];
