<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    // 알리고 SMS
    'aligo' => [
        'sms_url' => "https://apis.aligo.in/send/", // 전송요청 URL
        'user_id' => "carbon2050", // SMS 아이디
        'key' => "k15x33arhzitqvwzlobbyanvksgmur5y", //인증키
        'sender' => "1660-2378", // 발신자
        'msg_type' => 'SMS', //  SMS, LMS, MMS등 메세지 타입을 지정

        'testmode_yn' => env('SMS_TEST_MODE', true) == true ? 'Y' : '', // 테스트모드
    ],

];
