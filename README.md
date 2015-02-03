*[CMS]: Content Management System
*[DB]: DataBase

Libra CMS
=======================
ZF2 based CMS that allows easy creation of your own website with necessary tools like article menagment.  
It's easy to add articles, edit using a WYSIWYG editor, and upload images into articles with built-in zooming
  (For this just set image class="zoom" and specify different size from original).  
Libra provides an administration aware application. To utilize this functionality:
-   router: create children inside __admin__ route, and make application accessible by _/admin/route_ url.
-   layout: create your new layout in any module under folder _view/layout/admin-layout-name_, where default layout name is _default_.
  

Concepts
------------
* It should be easy to use.
* It should be easy to add new modules.


Installation
------------

###Using Composer (recommended, updated)

1. Download if necessary [composer.phar](http://getcomposer.org/download/) and 
   run `php composer.phar create-project libra/libra-cms libra-cms dev-master`
2. Go to installed dir __libra-cms__. Copy __config/autoload/local.php.dist__ files to __local.php__ and update the  parameters with your specific DB name and user name/password. Export SQL from __data/libra-cms.sql__ to DB.
3. Run `php -S localhost:8080 -t public` (assuming that you are inside installed folder).
4. Enjoy!

Default administration user: __admin__, pass: __libra-cms__.

Configuration:
-----------------
1. Add write permissions for running script user to:
   __public/images/stories__ to save images during article editing.
2. Change __pubic/robots.txt__ file to fit your needs.

*Thanks for trying Libra CMS.*
