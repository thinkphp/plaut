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

## MOD_REWRITE Apache2

In order for Apache to understand rewrite rules, we first need to activate mod_rewrite. It’s already installed, but it’s disabled on a default Apache installation. Use the a2enmod command to enable the module.

```
sudo a2enmod rewrite
```

```
sudo nano /etc/apache2/sites-available/000-default.conf
```

```
<Directory /var/www/html>
Options Indexes FollowSymLinks
AllowOverride All
Require all granted
</Directory>
```

```
sudo systemctl restart apache2
```

```
sudo nano /var/www/html/.htaccess
```

## .htaccess
```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . index.php [L]
Options -Indexes
```

## Demo:

* https://plaut.thinkphp.repl.co/
* http://thinkphp.ch/apps/basement/plaut/
