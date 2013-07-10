*[CMS]: Content Management System
*[DB]: DataBase

Libra CMS
=======================

Concepts
------------
It should be easy to use.
It should be easy to add new module


Installation
------------

###Using Composer (recommended, updated)

1. Download if necessary [composer.phar](http://getcomposer.org/download/) and 
   run `php composer.phar create-project libra/libra-cms libra-cms`
2. Go to installed dir __libra-cms__. Copy __config/autoload/local.php.dist__ files to __local.php__ and fit parameters
   to properly DB name and user name/password. Export SQL from __data/libra-cms.sql__ to DB.
3. Run `php -S localhost:8080 -t public` (assumed that you are inside installed folder).
4. Enjoy!

Default administration user: __admin__, pass: __libra-cms__.

Thin configuration:
-----------------
1. Add write permissions for running script user to:
   __public/images/stories__ for save images by editing article.
2. Change __pubic/robots.txt__ file to your demands.

*Thanks for trying Libra CMS.*