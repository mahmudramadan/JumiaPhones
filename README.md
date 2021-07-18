# Jumia phones showing with check phone validation

Create a single page application that uses the database provided (SQLite 3) to list and
categorize country phone numbers.
Phone numbers should be categorized by country, state (valid or not valid), country code and
number.
The page should render a list of all phone numbers available in the DB. It should be possible to
filter by country and state. Pagination is an extra.

## Regular expressions to validate the numbers:

1. Cameroon | Country code = +237 | regex = \(237\)\ ?[2368]\d{7,8}$
2. Ethiopia | Country code = +251 | regex = \(251\)\ ?[1-59]\d{8}$
3. Morocco | Country code = +212 | regex = \(212\)\ ?[5-9]\d{8}$
4. Mozambique | Country code = +258 | regex = \(258\)\ ?[28]\d{7,8}$
5. Uganda | Country code = +256 | regex = \(256\)\ ?\d{9}$

## Requirements

PHP 7.2+
Composer
SQLite 3

## Installation

Run in main project folder

```
composer install
```

## Run Script

in browser you can access the project by this link

```
http://localhost/JumiaPhones/
```

## Run Test Cases

```
vendor/bin/phpunit tests
```
