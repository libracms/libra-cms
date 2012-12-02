*[CMS]: Content Management System
*[DB]: DataBase

Libra CMS
=======================

Introduction
------------
This project

Concepts
------------
It should be easy to use.
It should be easy to add new module


Installation
------------
Using Composer (recommended)
----------------------------
1.  Create virtual hosting and Mysql DB with user and privileges.
2.  Clone or donwload [repo](https://bitbucket.org/libracms/libra-cms) in virtual host directory.
3.  Download if necessary [composer.phar](http://getcomposer.org/download/) and run `php composer.phar update`.
May be you need to have a [Mercurial](http://mercurial.selenic.com/downloads/)
4.  Copy *config/autoload/*.dist* files to php configs and set properly DB name and access. Export SQL from data/libra-cms.sql
5. Add write permissions to:
    *public/images/stories*
6. Test and enjoy of your just installed site :).

Default administration user: *admin*, pass: *libra-cms*.

Change __pubic/robots.txt__ file to your demands.

*Thanks for using this CMS.*