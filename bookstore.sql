-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2021 年 06 月 10 日 16:02
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bookstore`
--

-- --------------------------------------------------------

--
-- 表的结构 `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(16) NOT NULL COMMENT '用户名',
  `password` varchar(12) NOT NULL COMMENT '密码',
  `cname` varchar(20) DEFAULT NULL COMMENT '姓名',
  `city` varchar(40) DEFAULT NULL COMMENT '城市',
  `address` varchar(80) DEFAULT NULL COMMENT '地址',
  `zip` varchar(20) DEFAULT NULL COMMENT '邮政编码',
  `phone` varchar(15) DEFAULT NULL COMMENT '电话号码',
  `email` varchar(50) NOT NULL COMMENT '邮箱地址',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` varchar(50) NOT NULL COMMENT '书籍分类ID',
  `type` varchar(20) NOT NULL COMMENT '书籍类型',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `descn` varchar(255) DEFAULT NULL COMMENT '分类描述',
  `image` varchar(50) NOT NULL COMMENT '描述图片文件路径',
  `price` decimal(10,2) NOT NULL COMMENT '价格',
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`categoryID`, `type`, `name`, `descn`, `image`, `price`) VALUES
('1', '文学类', '轻声说再见', '《轻声说再见》是《100个基本》作者、日本生活美学家松浦弥太郎先生初次袒露私密情感的散文集。他以温润的笔触，书写那些在他生命中留下美好印记、给自己某项人生启示的人。', 'Images/qsszj.jpg', '34.60'),
('2', '文学类', '奇迹集', '《奇迹集》系黄灿然近年来关乎生活、信仰、灵魂的秘密之作，共分五个部分：一、世界的光彩；二、现在让我们去爱街上任何一样东西；三、消逝；四、改变你自己；五、颂歌。', 'Images/qjj.jpg', '38.30'),
('3', '文学类', '纳博科夫短篇小说全集', '《纳博科夫短篇小说全集》是文学大师纳博科夫短篇小说作品在国内首次完整结篇。68则风格各异的短篇小说，由纳博科夫之子德米特里按照年代顺序编辑而成。', 'Images/nbkf.jpg', '49.00'),
('4', '文学类', '灵魂只能独行', '哲学家、散文家周国平亲自编选，收录历年散文中最有价值的精华篇目，影响数代中国年轻人的人生智慧，尽在其中。', 'Images/lhzndx.jpg', '22.50'),
('5', '文学类', '寺山修司少女诗集', '《寺山修司少女诗集》是寺山修司的经典诗作集。全书分为九个篇章，分别是《海》《我作的童谣》《猫》《我是男孩时》《恶魔的童谣》《人偶游戏》《爱》《花诗集》《时而如没有母亲的孩子》。', 'Images/ssxssnsj.jpg', '39.90'),
('6', '文学类', '恋物物语', '《恋物物语》是日本生活美学家松浦弥太郎的作品，如果物品会说话，它会讲述怎样的故事？恋物，恋的其实是物品中每一份珍重而独特的记忆。', 'Images/wwys.jpg', '37.60'),
('7', '文学类', '万物有时', '本书完备地收录了汪曾祺写草木虫鱼鸟兽的系列散文。汪曾祺一生喜爱花鸟虫鱼，童年时代家里的小花园更是他一生的精神故园，一朵花开的姿态、一只蟋蟀或者蜻蜓……常常使他惊奇感动。', 'Images/wwys.jpg', '24.90'),
('8', '文学类', '千只鹤', '《千只鹤》是日本作家川端康成的中篇小说，作品发表于1952年，主要讲述的是一段涉及两代人的畸恋故事，表现了爱与道德的冲突，同时对日式风物与心理的刻画也十分细腻。', 'Images/qzh.jpg', '22.10'),
('9', '文学类', '正直', '《正直》是2015年12月北京联合出版公司出版的图书，[日]松浦弥太郎 著，陶芸 译。本书作者分享自己半生心得，28条人生感悟探讨如何过好这一生', 'Images/zz.jpg', '19.90'),
('10', '文学类', '自在的旅行', '《自在的旅行》是松浦弥太郎对其生活哲学的亲身诠释。不事先规划旅程，不上网查找信息，而是背起背包随性漫步，享受走路、观看、聆听、感受、邂逅、观察的轻松心态。', 'Images/zzdlx.jpg', '35.90');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
