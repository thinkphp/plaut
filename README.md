## Plaut

Lightweight Model-View-Controller Micro PHP Framwork built for newbies who use a LAMP stack.

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
