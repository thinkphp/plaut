## Plaut

Lightweight Model-View-Controller Micro PHP Framwork built for newbies who use a LAMP stack.

## Install

* composer create-project --prefer-dist statescua/plaut php-mvc
* cd php-mvc
* php -S 0.0.0.0:8080
* Then go to browser: http://localhost:8080

## Requirements

* PHP 7.0 or greater
* MySQL 4.1.2 or greater
* The mod_rewrite Apache module

## .htaccess
* RewriteEngine On
* RewriteCond %{REQUEST_FILENAME} !-f
* RewriteCond %{REQUEST_FILENAME} !-d
* RewriteRule . index.php [L]
* Options -Indexes

## Demo:

* https://plaut.thinkphp.repl.co/
