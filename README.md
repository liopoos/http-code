# HTTP Code

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-7.3%2B%20%7C%208.0%2B-blue.svg)](https://www.php.net/)

A simple, lightweight PHP library for handling HTTP status codes in a more readable and maintainable way. This library provides all standard HTTP status codes as easy-to-use constants and methods.

## Features

- ✅ **Complete Coverage**: All standard HTTP status codes (1xx, 2xx, 3xx, 4xx, 5xx)
- ✅ **Dual Access**: Use as constants or static methods
- ✅ **Type Safe**: Fully documented with PHPDoc
- ✅ **Helper Methods**: Built-in utilities like `isSuccessful()`
- ✅ **Zero Dependencies**: Lightweight and standalone
- ✅ **PSR-4 Autoloading**: Modern PHP standards

## Requirements

- PHP 7.3 or higher
- Composer

## Installation

Install via Composer:

```bash
composer require liopoos/http-code
```

## Usage

### Basic Usage

```php
<?php

use Liopoos\HttpCode\Http;

// Access as constants
echo Http::HTTP_OK; // 200
echo Http::HTTP_NOT_FOUND; // 404
echo Http::HTTP_INTERNAL_SERVER_ERROR; // 500

// Or use as static methods
echo Http::HTTP_OK(); // 200
echo Http::HTTP_NOT_FOUND(); // 404
echo Http::HTTP_INTERNAL_SERVER_ERROR(); // 500
```

### Checking Success Status

```php
<?php

use Liopoos\HttpCode\Http;

$statusCode = Http::HTTP_OK;

if (Http::isSuccessful($statusCode)) {
    echo "Request was successful!";
}

// Works with any 2xx status code
Http::isSuccessful(Http::HTTP_CREATED); // true
Http::isSuccessful(Http::HTTP_ACCEPTED); // true
Http::isSuccessful(Http::HTTP_NOT_FOUND); // false
```

### Practical Example

```php
<?php

use Liopoos\HttpCode\Http;

function handleApiResponse($response)
{
    $statusCode = $response->getStatusCode();
    
    if (Http::isSuccessful($statusCode)) {
        return $response->getData();
    }
    
    switch ($statusCode) {
        case Http::HTTP_NOT_FOUND:
            throw new NotFoundException("Resource not found");
        case Http::HTTP_UNAUTHORIZED:
            throw new AuthException("Unauthorized access");
        case Http::HTTP_INTERNAL_SERVER_ERROR:
            throw new ServerException("Server error occurred");
        default:
            throw new Exception("Unexpected status: " . $statusCode);
    }
}
```

## Available Status Codes

### Informational (1xx)
- `HTTP_CONTINUE` (100)
- `HTTP_SWITCHING_PROTOCOLS` (101)
- `HTTP_PROCESSING` (102)
- `HTTP_EARLY_HINTS` (103)

### Success (2xx)
- `HTTP_OK` (200)
- `HTTP_CREATED` (201)
- `HTTP_ACCEPTED` (202)
- `HTTP_NON_AUTHORITATIVE_INFORMATION` (203)
- `HTTP_NO_CONTENT` (204)
- `HTTP_RESET_CONTENT` (205)
- `HTTP_PARTIAL_CONTENT` (206)
- `HTTP_MULTI_STATUS` (207)
- `HTTP_ALREADY_REPORTED` (208)
- `HTTP_IM_USED` (226)

### Redirection (3xx)
- `HTTP_MULTIPLE_CHOICES` (300)
- `HTTP_MOVED_PERMANENTLY` (301)
- `HTTP_FOUND` (302)
- `HTTP_SEE_OTHER` (303)
- `HTTP_NOT_MODIFIED` (304)
- `HTTP_USE_PROXY` (305)
- `HTTP_SWITCH_PROXY` (306)
- `HTTP_TEMPORARY_REDIRECT` (307)
- `HTTP_PERMANENT_REDIRECT` (308)

### Client Error (4xx)
- `HTTP_BAD_REQUEST` (400)
- `HTTP_UNAUTHORIZED` (401)
- `HTTP_PAYMENT_REQUIRED` (402)
- `HTTP_FORBIDDEN` (403)
- `HTTP_NOT_FOUND` (404)
- `HTTP_METHOD_NOT_ALLOWED` (405)
- `HTTP_NOT_ACCEPTABLE` (406)
- `HTTP_PROXY_AUTHENTICATION_REQUIRED` (407)
- `HTTP_REQUEST_TIMEOUT` (408)
- `HTTP_CONFLICT` (409)
- `HTTP_GONE` (410)
- `HTTP_LENGTH_REQUIRED` (411)
- `HTTP_PRECONDITION_FAILED` (412)
- `HTTP_PAYLOAD_TOO_LARGE` (413)
- `HTTP_URI_TOO_LONG` (414)
- `HTTP_UNSUPPORTED_MEDIA_TYPE` (415)
- `HTTP_RANGE_NOT_SATISFIABLE` (416)
- `HTTP_EXPECTATION_FAILED` (417)
- `HTTP_I_AM_A_TEAPOT` (418)
- `HTTP_MISDIRECTED_REQUEST` (421)
- `HTTP_UNPROCESSABLE_ENTITY` (422)
- `HTTP_LOCKED` (423)
- `HTTP_FAILED_DEPENDENCY` (424)
- `HTTP_TOO_EARLY` (425)
- `HTTP_UPGRADE_REQUIRED` (426)
- `HTTP_PRECONDITION_REQUIRED` (428)
- `HTTP_TOO_MANY_REQUESTS` (429)
- `HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE` (431)
- `HTTP_UNAVAILABLE_FOR_LEGAL_REASONS` (451)

### Server Error (5xx)
- `HTTP_INTERNAL_SERVER_ERROR` (500)
- `HTTP_NOT_IMPLEMENTED` (501)
- `HTTP_BAD_GATEWAY` (502)
- `HTTP_SERVICE_UNAVAILABLE` (503)
- `HTTP_GATEWAY_TIMEOUT` (504)
- `HTTP_HTTP_VERSION_NOT_SUPPORTED` (505)
- `HTTP_VARIANT_ALSO_NEGOTIATES` (506)
- `HTTP_INSUFFICIENT_STORAGE` (507)
- `HTTP_LOOP_DETECTED` (508)
- `HTTP_NOT_EXTENDED` (510)
- `HTTP_NETWORK_AUTHENTICATION_REQUIRED` (511)

## Testing

Run the test suite:

```bash
composer install
vendor/bin/phpunit
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Reference

For more information about HTTP status codes, visit the [List of HTTP status codes](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes) on Wikipedia.
