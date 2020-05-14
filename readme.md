# Laravel Postmark Webhook

[![Latest Stable Version](https://poser.pugx.org/pkboom/laravel-postmark-webhook/v/stable)](https://packagist.org/packages/pkboom/laravel-postmark-webhook)
[![Total Downloads](https://poser.pugx.org/pkboom/laravel-postmark-webhook/downloads)](https://packagist.org/packages/pkboom/laravel-postmark-webhook)
[![Build Status](https://travis-ci.com/pkboom/laravel-postmark-webhook.svg?branch=master)](https://travis-ci.com/pkboom/laravel-postmark-webhook)

## Installation

You can install the package via composer:

```bash
composer require pkboom/laravel-postmark-webhook
```

Run the migration:

```bash
php artisan migrate
```

## Usage

You can see postmark messages such as bounce and spam with

```bash
php artisan postmark-message:show
```

<img src="/images/demo.png" width="800"  title="demo">

You can also use options such as `--bounce` and `--spam`.

You can optionally publish the config file with:

```bash
php artisan vendor:publish --provider="Pkboom\PostmarkWebhook\PostmarkWebhookServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
<?php

return [
    /**
     * You can set up postmark user and password here. They should be the same values as you set up
     * in postmark webhook page.
     */
    'user' => env('POSTMARK_USER', null),
    'password' => env('POSTMARK_PASSWORD', null),
];
```

If you want to use `Basic auth credentials`, go to `postmark webhook` page and set up credentials.

<img src="/images/demo2.png" width="800"  title="demo">

## License

The MIT License (MIT). Please see [MIT license](http://opensource.org/licenses/MIT) for more information.
