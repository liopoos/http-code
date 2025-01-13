## Http Code

A simple library to handle HTTP status codes in a more readable way.

### Installation

```bash
composer require liopoos/http-code
```

### Usage

```php
<?php

use Liopoos\HttpCode\Http;

echo Http::HTTP_OK; // 200
echo Http::HTTP_OK(); // 200
```

All the HTTP status codes are available as constants in the [List of HTTP status codes](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes).

### License
MIT
