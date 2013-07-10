*[CMS]: Content Management System
*[DB]: DataBase

Libra CMS
=======================
ZF2 based CMS that allows easily create your own web-site with necessary tools like article menagment.  
It make easy add articles, editing use WYSIWYG editor, upload images in article with build-in zooming
  (For this just set for image class="zoom" and specify different size from original).  
Libra provide administration aware application. To use it use:
-   for router: create children inside __admiin__ route, and application make it accessible by _/admin/route_ url.
-   layout: create your new layout in any module under folder _view/layout/admin-layout-name_, wher defalut layout-name is _default_.
  

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