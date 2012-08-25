-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: pma
-- Generation Time: Jul 31, 2012 at 11:32 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.5-0.dotdeb.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `libra-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `addresses`
--


-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` varchar(10) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `uid` varchar(64) NOT NULL,
  `created` datetime NOT NULL,
  `createdBy` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modifiedBy` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `params` longtext NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`locale`,`alias`),
  UNIQUE KEY `uid` (`uid`,`locale`),
  KEY `state` (`state`),
  KEY `locale` (`locale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `locale`, `headline`, `alias`, `uid`, `created`, `createdBy`, `modified`, `modifiedBy`, `ordering`, `state`, `content`, `params`) VALUES
(5, 'ru_RU', 'Главная', 'homepage', '1', '2012-03-20 02:21:51', 0, '2012-04-21 11:29:14', 0, -1, 'published', '<p>\r\n	Добро пожаловать на сайт Либра ЦМС.</p>\r\n<p>\r\n	<a href="/en/index/download">Здесь</a> можно скачать исходный код</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(16, 'en_GB', 'Home', 'homepage', '1', '2012-04-02 16:42:40', 0, '2012-04-24 12:57:35', 0, -1, 'published', '<h2>\r\n	Desctiption</h2>\r\n<p>\r\n	<strong>Libra CMS</strong> -&nbsp; is simple Content Management System (CMS) written at <strong>Zend Framework 2</strong> and existing modules from <a href="http://modules.zendframework.com/">http://modules.zendframework.com/</a> .</p>\r\n<p>\r\n	Base concepts:</p>\r\n<p>\r\n	It show functionality of new ZF2 framework and I hope It will be a good guid for novices to utilize feateures of ZF 2.</p>\r\n<p>\r\n	Features:</p>\r\n<ul>\r\n	<li>\r\n		It has SEO freindly URL and meta kewrods/description fields.</li>\r\n	<li>\r\n		It has <a href="http://demo.libra-cms.ejoom.com/admin/">administration</a> and article managment. (login admin, password: demo12 ). By stability reasons of this site It was closed. Demo accessible at <a href="http://demo.libra-cms.ejoom.com" target="_blank">demo.libra-cms.ejoom.com</a>, as well as you can view <a href="/en/images">images</a> of administration.</li>\r\n	<li>\r\n		It created with supporting multilanguage. Now site done for 2 languages Russian and Eanglish.</li>\r\n	<li>\r\n		It has login and registraion of new users system by ZfcUsers module and custom redirect page after sign in.</li>\r\n	<li>\r\n		It has user managment.</li>\r\n	<li>\r\n		It has autogenerating menu.</li>\r\n	<li>\r\n		It has simple article editing by FCKEditor,</li>\r\n	<li>\r\n		It has simple Acl and temporary added access by IP. I just not removed it</li>\r\n	<li>\r\n		It use twitter bootstrap for form and design. So you can serfe site at mobile.</li>\r\n	<li>\r\n		It will be based at jQuery.</li>\r\n</ul>\r\n<p>\r\n	You can download code <a href="/en/index/download">this</a>&nbsp;&nbsp;&nbsp; (for administration: password: 111111, user: admin).</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	With any questions, suggestions or&nbsp; comments write me at <a href="mailto:duke@ejoom.com">duke@ejoom.com</a></p>\r\n<p>\r\n	I&#39;m also available via&nbsp; <a href="irc://irc.freenode.net/zftalk.2">#zftalk.2 on Freenode</a>. Use free to ask.</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":166:{x:i:2;a:2:{s:8:"metaKeys";s:30:"Zend Frame work CMS, Libra CMS";s:8:"metaDesc";s:69:"Free open source content management system based at Zend Framework 2.";};m:a:0:{}}'),
(17, '', 'Privacy, Disclaimer, Terms & Conditions, and Copyright Info', 'disclaimer', '4f79d91fdef8c', '2012-04-02 19:51:43', 0, '2012-04-21 10:11:38', 0, -10, 'unpublished', '<p>\r\n	Copyright (c) 2008-2012 eJoom Software<br />\r\n	All rights reserved.<br />\r\n	<br />\r\n	Redistribution and use in source and binary forms, with or without<br />\r\n	modification, are permitted provided that the following conditions are met:<br />\r\n	<br />\r\n	1. Redistributions of source code must retain the above copyright<br />\r\n	&nbsp;&nbsp; notice, this list of conditions and the following disclaimer.<br />\r\n	<br />\r\n	2. Redistributions in binary form must reproduce the above copyright<br />\r\n	&nbsp;&nbsp; notice, this list of conditions and the following disclaimer in the<br />\r\n	&nbsp;&nbsp; documentation and/or other materials provided with the distribution.<br />\r\n	<br />\r\n	3. Neither the name of the eJoom Software nor the names of its contributors<br />\r\n	&nbsp;&nbsp; may be used to endorse or promote products derived from this software<br />\r\n	&nbsp;&nbsp; without specific prior written permission.<br />\r\n	<br />\r\n	THIS SOFTWARE IS PROVIDED BY EJOOM SOFTWARE ``AS IS`` AND ANY<br />\r\n	EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED<br />\r\n	WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE<br />\r\n	DISCLAIMED. IN NO EVENT SHALL &lt;COPYRIGHT HOLDER&gt; BE LIABLE FOR ANY<br />\r\n	DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES<br />\r\n	(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;<br />\r\n	LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND<br />\r\n	ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT<br />\r\n	(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS<br />\r\n	SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.<br />\r\n	<br />\r\n	&nbsp;</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(39, 'en_GB', 'English menu item', 'en-page', '4f8c3c0aeb35d', '2012-04-16 18:34:34', 0, '2012-04-18 10:42:54', 0, 0, 'published', '<p>\r\n	This mneu item will not be visible at another language.</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(40, 'ru_RU', 'Русский пункт меню', 'ru-page', '4f8c3c4339394', '2012-04-16 18:35:31', 0, '2012-04-18 10:42:24', 0, 0, 'published', '<p>\r\n	Пункт меню в русской локали. Этот пункт меню не будет отображаться на других языках.</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(42, '', 'Multilanguage page', 'multilanguage', '4f8c4324f2cc4', '2012-04-16 19:04:52', 0, '2012-04-16 19:04:52', 0, 0, 'unpublished', '<p>\r\n	This article at all languages</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(43, 'en_GB', 'Multilanguage page', 'multilanguage', '4f8c3cd321141', '2012-04-16 19:05:48', 0, '2012-04-18 11:06:55', 0, 0, 'published', '<p>\r\n	Page at Eanglish.</p>\r\n<p>\r\n	Та же страница но на английском</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(44, 'ru_RU', 'Мултиязыковая страница', 'multilanguage', '4f8c3cd321141', '2012-04-16 19:06:29', 0, '2012-04-18 11:06:40', 0, 0, 'published', '<p>\r\n	Страница на русском.</p>\r\n<p>\r\n	Same english page in russian locale.</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(45, '', 'FAQ', 'faq', '4f8d427a14891', '2012-04-17 13:14:18', 0, '2012-04-17 13:15:53', 0, 5, 'published', '<p>\r\n	Why this source not in github or bitbucket:</p>\r\n<p>\r\n	Because I did&#39;n wish put in repo hevy sized vendors like FCKEditor. When I separate it and prepare all configs I&#39;ll put it to public repo.</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(46, '', 'Images', 'images', '4f8e6e6a9dd05', '2012-04-18 10:34:02', 0, '2012-04-18 11:04:23', 0, 3, 'published', '<p>\r\n	<a href="/images/stories/images/Selection_010.jpg"><img alt="" src="/images/stories/images/Selection_010.jpg" style="width: 200px; height: 128px;" /></a>&nbsp; &nbsp; <a href="/images/stories/images/Selection_007.jpg"><img alt="" src="/images/stories/images/Selection_007.jpg" style="width: 199px; height: 129px;" /></a><a href="/images/stories/images/Selection_007.jpg"> </a></p>\r\n<p>\r\n	<a href="/images/stories/images/Selection_008.jpg"><img alt="" src="/images/stories/images/Selection_008.jpg" style="width: 200px; height: 131px;" /></a> &nbsp; &nbsp;&nbsp; <a href="/images/stories/images/Selection_009.jpg"><img alt="" src="/images/stories/images/Selection_009.jpg" style="width: 200px; height: 131px;" /></a></p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(47, '', 'Authors', 'authors', '4f8e7560f31c3', '2012-04-18 11:03:44', 0, '2012-04-21 14:55:47', 0, 7, 'published', '<p>\r\n	This CMS was created by duke. Inspired by Zend Framework and Joomla CMS.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/images/stories/images/me.jpg" style="width: 100px; height: 133px;" /></p>\r\n<p>\r\n	Vitalii</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(48, '', 'Roadmap', 'roadmap', '4fb633ba93df5', '2012-05-18 14:34:18', 0, '2012-05-18 14:38:36', 0, 2, 'published', '<p>\r\n	The developing of&nbsp; Libra CMS postponed on the time of release zf2 beta4.&nbsp; When will be published convinient routing, view paths, and new Zend\\Form concepts.</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":85:{x:i:2;a:2:{s:8:"metaKeys";s:19:"zf2, libra cms, cms";s:8:"metaDesc";s:0:"";};m:a:0:{}}');

-- --------------------------------------------------------

--
-- Table structure for table `article_bak`
--

CREATE TABLE IF NOT EXISTS `article_bak` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` char(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `uid` varchar(64) NOT NULL COMMENT 'unique id for group locale',
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `state` enum('published','unpublished','trashed') NOT NULL DEFAULT 'unpublished',
  `content` text NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY (`article_id`),
  UNIQUE KEY `alias` (`locale`,`alias`),
  UNIQUE KEY `uid` (`uid`,`locale`),
  KEY `locale` (`locale`),
  KEY `status` (`state`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `article_bak`
--

INSERT INTO `article_bak` (`article_id`, `locale`, `title`, `alias`, `uid`, `created`, `created_by`, `modified`, `modified_by`, `ordering`, `state`, `content`, `params`) VALUES
(5, 'ru_RU', 'Главная', 'homepage', '1', '2012-03-20 02:21:51', 0, '2012-04-16 18:36:15', 0, -1, 'published', '<p>\r\n	Добро пожаловать на сайт Либра ЦМС.</p>\r\n<p>\r\n	<a href="/images/stories/images/Untitled1.jpg">Здесь</a> можно скачать исходный код</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(42, '', 'Multilanguage page', 'multilanguage', '4f8c4324f2cc4', '2012-04-16 19:04:52', 0, '2012-04-16 19:04:52', 0, 0, 'unpublished', '<p>\r\n	This article at all languages</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(43, 'en_GB', 'Multilanguage page', 'multilanguage', '4f8c3cd321141', '2012-04-16 19:05:48', 0, '2012-04-16 19:05:48', 0, 0, 'published', '<p>\r\n	Page at Eanglish.</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(44, 'ru_RU', 'Мултиязыковая страница', 'multilanguage', '4f8c3cd321141', '2012-04-16 19:06:29', 0, '2012-04-16 19:06:29', 0, 0, 'published', '<p>\r\n	Страница на русском</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(16, 'en_GB', 'Home', 'homepage', '1', '2012-04-02 16:42:40', 0, '2012-04-24 12:45:44', 0, -1, 'published', '<h2>\r\n	Desctiption</h2>\r\n<p>\r\n	This is simple CMS written at Zend Framework 2 and existing modules from <a href="http://modules.zendframework.com/">http://modules.zendframework.com/</a> .</p>\r\n<p>\r\n	Base concepts:</p>\r\n<p>\r\n	It show functionaliti of new ZF2 framework and .</p>\r\n<p>\r\n	Features:</p>\r\n<ul>\r\n	<li>\r\n		It has <a href="/admin/">administration</a> and article managment. (login admin, password: 111111 ).</li>\r\n	<li>\r\n		It created with supporting multilanguage. Now site done for 2 languages Russian and Eanglish.</li>\r\n	<li>\r\n		It has login and registraion of new users system by ZfcUsers module and custom redirect page after sign in.</li>\r\n	<li>\r\n		It has autogenerating menu</li>\r\n	<li>\r\n		It has simple Acl and temporary add access by IP. I just not removed it</li>\r\n	<li>\r\n		It use twitter bootstrap for form and design. So you can serfe site at mobile.</li>\r\n</ul>\r\n<p>\r\n	With all suggestion and comments write me at <a href="mailto:duke@ejoom.com">duke@ejoom.com</a></p>\r\n<p>\r\n	&nbsp;</p>', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(41, '', 'About', 'about', '4f8c3cd321141', '2012-04-16 18:37:55', 0, '2012-04-16 18:37:55', 0, 0, 'published', '<p>\r\n	This CMS was created by duke. Inspired by Zend Framework&nbsp; and Joomla CMS.</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(17, '', 'Privacy, Disclaimer, Terms & Conditions, and Copyright Info', 'disclaimer', '4f79d91fdef8c', '2012-04-02 19:51:43', 0, '2012-04-16 20:08:40', 0, -10, 'unpublished', '<pre style="overflow:auto; width:auto;">\r\nCopyright (c) 2008-2012 Ejoom Software\r\nAll rights reserved.\r\n\r\nRedistribution and use in source and binary forms, with or without\r\nmodification, are permitted provided that the following conditions are met:\r\n1. Redistributions of source code must retain the above copyright\r\n   notice, this list of conditions and the following disclaimer.\r\n2. Redistributions in binary form must reproduce the above copyright\r\n   notice, this list of conditions and the following disclaimer in the\r\n   documentation and/or other materials provided with the distribution.\r\n\r\nTHIS SOFTWARE IS PROVIDED BY EJOOM SOFTWARE &quot;AS IS&quot; AND ANY\r\nEXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED\r\nWARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE\r\nDISCLAIMED. IN NO EVENT SHALL &lt;COPYRIGHT HOLDER&gt; BE LIABLE FOR ANY\r\nDIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES\r\n(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;\r\nLOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND\r\nON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT\r\n(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS\r\nSOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.\r\n</pre>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(39, 'en_GB', 'En menu point', 'en-page', '4f8c3c0aeb35d', '2012-04-16 18:34:34', 0, '2012-04-16 19:07:12', 0, 0, 'published', '<p>\r\n	Dummy page for English language</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}'),
(40, 'ru_RU', 'Русский пункт меню', 'ru-page', '4f8c3c4339394', '2012-04-16 18:35:31', 0, '2012-04-16 19:07:52', 0, 0, 'published', '<p>\r\n	Пункт меню в русской локали</p>\r\n', 'C:22:"Zend\\Stdlib\\Parameters":65:{x:i:2;a:2:{s:8:"metaKeys";s:0:"";s:8:"metaDesc";s:0:"";};m:a:0:{}}');

-- --------------------------------------------------------

--
-- Table structure for table `locale`
--

CREATE TABLE IF NOT EXISTS `locale` (
  `locale_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `locale` char(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `title_native` varchar(50) NOT NULL,
  `sef` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `published` int(11) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`locale_id`),
  UNIQUE KEY `idx_sef` (`sef`),
  UNIQUE KEY `locale` (`locale`),
  KEY `idx_ordering` (`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `locale`
--

INSERT INTO `locale` (`locale_id`, `locale`, `title`, `title_native`, `sef`, `image`, `published`, `ordering`) VALUES
(1, 'en_GB', 'English (UK)', 'English (UK)', 'en', 'en', 1, 1),
(2, 'ru_RU', 'Russian (RU)', 'Русский (RU)', 'ru', 'ru', 1, 2),
(3, '', 'All', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(256) NOT NULL,
  `locale` char(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `uid` varchar(64) NOT NULL COMMENT 'unique id locale group',
  `ordering` int(11) NOT NULL,
  `published` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `created` datetime NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY (`menu_id`),
  UNIQUE KEY `alias` (`locale`,`alias`),
  KEY `ordering` (`ordering`),
  KEY `created` (`created`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `module`, `locale`, `title`, `alias`, `uid`, `ordering`, `published`, `created`, `params`) VALUES
(1, 'LibraArticle', '', 'Home', 'homepage', 'ujiuhjkiu', 1, 'Yes', '2012-03-14 00:00:00', ''),
(2, 'LibraArticle', '', 'About', 'about', 'fdr', 10, 'Yes', '2012-03-14 19:25:08', ''),
(3, 'LibraArticle', 'ru_RU', 'Про журнал', 'page1', '1', 2, 'Yes', '2012-03-14 19:25:27', ''),
(4, 'LibraArticle', 'en_GB', 'another', 'another', 'dfg', 3, 'Yes', '0000-00-00 00:00:00', ''),
(5, 'LibraArticle', '', 'Page 2', 'page2', '2', 3, 'Yes', '0000-00-00 00:00:00', ''),
(6, 'LibraArticle', '', 'The editors of the journal', 'the-editors-of-journal', '4', 4, 'Yes', '0000-00-00 00:00:00', ''),
(7, 'LibraArticle', 'ru_RU', 'Главная', 'homepage', 'ujiuhjkiu', 1, 'Yes', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `display_name` varchar(512) DEFAULT NULL,
  `password` varchar(128) NOT NULL,
  `group_id` int(11) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_ip` bigint(11) DEFAULT NULL,
  `register_time` datetime NOT NULL,
  `register_ip` bigint(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `location` varchar(128) NOT NULL,
  `ip_from` bigint(11) DEFAULT NULL,
  `ip_to` bigint(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `display_name`, `password`, `group_id`, `last_login`, `last_ip`, `register_time`, `register_ip`, `active`, `enabled`, `location`, `ip_from`, `ip_to`) VALUES
(1, 'admin', 'duke@ejoom.com', 'Vitalii', '$2a$10$MC1s8WcedVuNUkMohcXMqu7w7T0rGt7yKJ67VOcoI.pv4IMxt/Z4m', 1, '2012-05-18 12:11:01', 1270, '2012-04-13 21:03:39', 0, 1, 1, 'Europe/Kiev', 0, 0),
(2, NULL, 'test@gmail.com', 'Test Name', '$2a$10$425MVLPEgYNRyk5FCcj7cO.FEiasdf.GAgubbNkkCWU/7UWdjt1y2', 2, '2012-02-24 10:25:49', 1270, '2012-02-24 10:25:48', 0, 1, 1, 'America/Toronto', NULL, NULL),
(3, NULL, 'some@mail.com', 'Some Name', '$2a$10$oLUweOnw.mXn3Uz5hYI44uP5bF61qHDLcIUa.JxHPhr.LWB6a5x7i', 3, '2012-03-07 20:11:21', 1270, '2012-03-07 20:11:21', 0, 1, 1, '', NULL, NULL),
(4, NULL, 'test2@gmail.com', 'Test2 name', '', 3, '2012-03-07 20:15:18', 1270, '2012-04-16 17:39:26', 0, 1, 1, '', 0, 0),
(5, NULL, 'director@phys.asm.md', 'director', '$2a$10$prrJBQ.UB1qslDhbsmvlBu0nQhiFM81/YiK6.4lyduKJfArmJ90L.', 1, '2012-04-02 11:21:49', 81180, '2012-04-02 11:20:49', 0, 1, 1, '', NULL, NULL),
(6, NULL, 'sdf@fd2.com', 'sdf@fd2.com', '$2a$10$QNtbUu0wSumPyNN2k0ABC.2bDOG6y7RRd9NWn1hu7OW4fyxuMhTwC', 0, NULL, 0, '2012-04-05 13:01:43', 0, 0, 1, '', 0, 0),
(13, NULL, '', 'sdsdfsdf', '', 3, NULL, 0, '2012-04-05 14:57:23', 0, 1, 1, '', 2937659397, 2937659397),
(21, NULL, 'test3@gmail.com', 'test3', '$2a$10$hSPHbrB8AqxvpuzYbRF5uOefO5J4odoYns2eiNjnPitobhTRELUwu', 3, NULL, NULL, '2012-04-05 14:58:04', 0, 1, 1, '', 0, 0),
(23, NULL, 'test4@gmail.com', 'test4', '$2a$10$CWR2cOC4/jrxqK00Sn.9Ve4BHN3w0xmfHDtMjRxTZDz7IorJEPQwu', 3, '2012-04-05 15:02:47', 1270, '2012-04-05 14:58:54', 0, 1, 1, '', 0, 0),
(24, NULL, NULL, 'Test Ip Localhost', '', 3, NULL, NULL, '2012-04-13 20:41:14', 0, 1, 1, '', 2130706434, 2130706433);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E9F5B7AF75` (`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE IF NOT EXISTS `user_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`group_id`, `name`) VALUES
(1, 'admin'),
(2, 'member'),
(3, 'subscriber');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_1483A5E9F5B7AF75` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`);
