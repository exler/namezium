<p align="center">
    <img src="docs/logo.png" width="256">
    <p align="center">👑 Web application for generating names using Markov chains with domain availability lookup </p>
</p>

## Installation

### Requirements

* PHP >= 7.2
* PostgreSQL >= 13
* Composer

**PHP extensions**
* php-bz2
* php-curl
* php-fileinfo
* php-gd
* php-mbstring
* php-pdo_pgsql
* php-pgsql
* php-openssl

## Usage

Install dependencies using Composer:

```bash
$ composer install
```

Create user with administrator privileges to access admin panel:

```bash
$ php artisan create:admin
```

Run tests:

```bash
$ php artisan test
```

## Importing data

You can import JSON data through the admin panel. The JSON structure should look like this:
```json
[
    {
        "category_title": "Category Title",
        "category_desc": "Category Description",
        "generators": [
            {
                "generator_title": "Generator Title",
                "names": ["name1", "name2"]
            }
        ]
    }
]

```

## License

Copyright (c) 2021 by ***Kamil Marut***

`Namezium` is under the terms of the [BSD 3-Clause License](https://tldrlegal.com/license/bsd-3-clause-license-(revised)), following all clarifications stated in the [license file](LICENSE).

