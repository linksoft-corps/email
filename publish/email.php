<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

return [
    'default' => [
        'driver' => LinkSoft\Email\Adapter\EmailSMTP::class,
        'host' => env('MAIL_SMTP_HOST', 'smtp.mailgun.org'),
        'port' => env('MAIL_SMTP_PORT', 587),
        'encryption' => env('MAIL_SMTP_ENCRYPTION', 'tls'),
        'username' => env('MAIL_SMTP_USER'),
        'password' => env('MAIL_SMTP_PASS'),
        'timeout' => env('MAIL_SMTP_TIMEOUT'),
        'auth_mode' => env('MAIL_SMTP_AUTH_MODE'),
    ],
    'stmp' => [
        'driver' => LinkSoft\Email\Adapter\EmailSMTP::class,
        'host' => env('MAIL_SMTP_HOST', 'smtp.mailgun.org'),
        'port' => env('MAIL_SMTP_PORT', 587),
        'encryption' => env('MAIL_SMTP_ENCRYPTION', 'tls'),
        'username' => env('MAIL_SMTP_USER'),
        'password' => env('MAIL_SMTP_PASS'),
        'timeout' => env('MAIL_SMTP_TIMEOUT'),
        'auth_mode' => env('MAIL_SMTP_AUTH_MODE'),
    ],
];
