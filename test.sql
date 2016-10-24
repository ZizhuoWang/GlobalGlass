-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 23 日 10:08
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `dateline`) VALUES
(6, '1', '1', 1467964530),
(9, '2', 'veuifiquefhg', 1476709323),
(10, '123', '<h1 style="margin: 0px 0px 20px; padding: 0px 4px 0px 0px; text-align: center; font-size: 32px; font-weight: bold; border-bottom-color: rgb(204, 204, 204); border-bottom-width: 2px; border-bottom-style: solid;"><span style="text-decoration: underline;"><em><strong>初始化内</strong></em></span></h1><h1 style="margin: 0px 0px 10px; padding: 0px 4px 0px 0px; text-align: left; font-size: 32px; font-weight: bold; border-bottom-color: rgb(204, 204, 204); border-bottom-width: 2px; border-bottom-style: solid;"><span style="text-decoration: underline;"></span><em><strong><span style="text-decoration: none;"></span></strong></em><strong><span style="text-decoration: none;"></span></strong><span style="text-decoration: none;">fe</span><span style="border: 1px solid rgb(0, 0, 0); border-image: none; text-decoration: none;">ht<span style="color: rgb(255, 0, 0);">sgge</span></span></h1>', 1477140124),
(11, '123', '<p><img width="1440" height="899" title="1477142711216621.jpg" alt="7.jpg" src="/ueditor/php/upload/image/20161022/1477142711216621.jpg"/>初始化内容</p>', 1477142879),
(12, '1', '<p>初始化内容</p>', 1477147587),
(13, '1', '<p>初始化内容</p>', 1477147591),
(14, '1', '<p>初始化内容</p>', 1477147593),
(15, '1', '<p>初始化内容</p>', 1477147596),
(16, '1', '<p>初始化内容</p>', 1477147599),
(17, '1', '<p>初始化内容</p>', 1477147601),
(18, '1', '<p>初始化内容</p>', 1477147604),
(19, '1', '<p>初始化内容</p>', 1477147606),
(20, '23', '<p>初始化内容</p>', 1477147680),
(21, '1', '<p>初始化内容</p>', 1477187731),
(22, '1', '<p>初始化内容</p>', 1477187734),
(23, '1', '<p>初始化内容</p>', 1477187736),
(24, '1', '<p>初始化内容</p>', 1477187739),
(25, '1', '<p>初始化内容</p>', 1477187741),
(26, '1', '<p>初始化内容</p>', 1477187744),
(27, '1', '<p>初始化内容</p>', 1477187746),
(28, '1', '<p>初始化内容</p>', 1477187749),
(29, '1', '<p>初始化内容</p>', 1477187751),
(30, '1', '<p>初始化内容</p>', 1477187753),
(31, '1', '<p>初始化内容</p>', 1477187756);

-- --------------------------------------------------------

--
-- 表的结构 `introduce`
--

CREATE TABLE IF NOT EXISTS `introduce` (
  `contact` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `introduce`
--

INSERT INTO `introduce` (`contact`, `about`) VALUES
('QQ:934289741', 'momenshi\r\ndwih');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
