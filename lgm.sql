/*
Navicat MySQL Data Transfer

Source Server         : Roger
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : lgm

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-11-16 22:40:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `sex` tinyint(1) NOT NULL COMMENT '0为女 1为男',
  `phone` bigint(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `delete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '默认0    1为已删',
  `notes` varchar(300) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('7', 'maming', '1', '15851936580', '123123@qq.com', '123123', '0', '0', null, '2016-11-17 22:18:49');
INSERT INTO `admin` VALUES ('9', 'dachuan', '1', '10102030200', '123@qq.com', '123123', '0', '0', null, '2016-11-15 14:21:18');
INSERT INTO `admin` VALUES ('5', 'ldcsb', '1', '12312312', '123123@qq.com', '123123', '0', '0', null, '2016-11-15 14:23:26');
INSERT INTO `admin` VALUES ('6', '11111', '1', '12312312', '123123@qq.com', '123123', '0', '0', null, '2016-11-15 14:24:06');
INSERT INTO `admin` VALUES ('16', 'dachuan12', '1', '15821571235', '1187747458@qq.com', '123123', '0', '0', null, '2016-11-16 10:05:30');
INSERT INTO `admin` VALUES ('17', '富商大贾', '1', '15821571235', '1187747458@qq.com', '111111', '0', '0', null, '2016-11-16 10:07:24');
INSERT INTO `admin` VALUES ('18', '阿萨达安静', '1', '15821571235', '1187747458@qq.com', '111111', '0', '0', null, '2016-11-16 10:18:07');
INSERT INTO `admin` VALUES ('19', '合法化股份', '1', '158215712351', '1187747458@qq.com', '111111', '0', '0', null, '2016-11-16 10:30:02');
INSERT INTO `admin` VALUES ('20', '热文身断发', '1', '15821571235', '1187747458@qq.com', '111111', '0', '0', null, '2016-11-16 10:37:42');
INSERT INTO `admin` VALUES ('21', '666666', '1', '15821571235', '1187747458@qq.com', '111111', '1', '0', null, '2016-11-16 15:35:58');
INSERT INTO `admin` VALUES ('22', 'SADAF ', '1', '15821571235', '1187747458@qq.com', '111111', '1', '0', null, '2016-11-16 15:38:18');
INSERT INTO `admin` VALUES ('23', '你他妈猜啊', '1', '15821571235', '1187747458@qq.com', '111111', '0', '0', null, '2016-11-16 15:42:44');

-- ----------------------------
-- Table structure for admin_role
-- ----------------------------
DROP TABLE IF EXISTS `admin_role`;
CREATE TABLE `admin_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` int(11) DEFAULT NULL,
  `roleid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_role
-- ----------------------------

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `bgpic` varchar(255) DEFAULT NULL,
  `state` tinyint(4) DEFAULT '1',
  `description` varchar(255) DEFAULT NULL,
  `ctime` datetime DEFAULT NULL,
  `glance` bigint(20) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `like` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '数码控专属', '&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; background-color: rgb(255, 255, 255);&quot;&gt;随着购买的数码设备越来越多，一对一的充电方式已经不能满足当今的需求，出门在外的时候，单一充电器的效率低下，想要提高充电效率只能多带几个充电器同时为设备充电。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; background-color: rgb(255, 255, 255);&quot;&gt;即使在家使用多个充电器同时为多个设备充电，也要占用不少排插的位置，造型各异的充电器更是影响排插的美观。顺应 USB 充电接口的流行，具备 USB 充电接口和传统两/三脚的混合型排插便应运而生。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;/p&gt;&lt;hr class=&quot;l&quot; style=&quot;word-wrap: break-word; clear: both; margin: 0px 10px; height: 0px; border-style: dotted none none; border-top-color: rgb(193, 199, 207); border-right-width: initial; border-right-color: initial; border-bottom-width: initial; border-bottom-color: initial; border-left-width: initial; border-left-color: initial; border-image: initial; background: none rgb(255, 255, 255); color: rgb(205, 205, 205); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal;&quot;/&gt;&lt;p&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; background-color: rgb(255, 255, 255);&quot;&gt;罗马仕 FH 系列插线板的包装盒与产品本身采用了相同的白绿色搭配设计，整体采用了简约的设计风格，对于那些桌面摆设偏「性冷淡」风的人士来说更易配搭。FH50U 和 FH60U 两款产品同属于 FH 系列插线板，区别在于国标插头和 USB 接口的数量，FH50U 为两个国标插头 + 三个 USB 接口；FH60U 为三个国标插头 + 四个 USB 接口，售价分别为 39 元和 49 元&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479119405.jpg&quot; style=&quot;&quot; title=&quot;1479119405.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; background-color: rgb(255, 255, 255);&quot;&gt;材质方面，罗马仕 FH 系列插线板采用了 750 度耐高温的 V0 级高阻燃 PC 材料以及一次性注塑成型工艺，相比普通塑料的插排，能够有效提高使用过程中的安全系数。用最简单原始的手指用力按压方式测试，外壳没有出现明显的形变，从外观上来看这两款插线板的做工扎实，对于 39-49 元定位的插线板来说算是较上乘的水准。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479119405.jpg&quot; style=&quot;&quot; title=&quot;1479119405.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; background-color: rgb(255, 255, 255);&quot;&gt;插线板自身的插头达到 3C 认证标准，6.8mm 直径的电源线；插头经过 5000 次插拔质量认证，内部采用一体铜片设计，基本符合目前主流插线板的标准。每个国标插头可以承受最大 75 牛阻力的安全保护门，只有当插头的两极金属片同时均衡插入保护门才会打开，可以降低家中熊孩子乱玩插线板的危险&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479119405.jpg&quot; style=&quot;&quot; title=&quot;1479119405.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; background-color: rgb(255, 255, 255);&quot;&gt;整个插线板共有一个总开关，采用较为传统的按键式开关，键程较长阻尼稍大，不过可以有效防止误触开关。比较可惜的是，或许由于采用物理式按键开关的原因，插线板并没有配备开关指示灯。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479119405.jpg&quot; style=&quot;&quot; title=&quot;1479119405.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479119405.jpg&quot; style=&quot;&quot; title=&quot;1479119405.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; background-color: rgb(255, 255, 255);&quot;&gt;FH50U 和 FH60U 除了国标插头和 USB 数量上的差别之外，实际上 USB 接口的电气参数略有不同，FH50U 的三个 USB 接口均可以支持最大 5V/2.4A 的输出；而 FH60U 的四个 USB 接口除了均支持最大 5V/2.4A 输出之外，单口输出时最大可支持 5V/3.6A，能够满足有更快充电需求的设备，插线板内置的 IQ 芯片会自动适配每个接口的输出。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'Uploads/article/2016-11-14/58299279b99a5.png', '0', '罗马仕 FH系列 快冲插线板', '2016-11-14 18:36:42', '0', '0', '0');
INSERT INTO `article` VALUES ('2', '小米note2', '&lt;p&gt;&lt;span style=&quot;color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; background-color: rgb(245, 245, 245);&quot;&gt;一年零九个月的磨砺，小米科技为我们带来了这样一款双曲面旗舰。尽管在颜值和科技感上稍逊色于一起诞生的小米 MIX，但这丝毫不妨碍它继小米 Note 之后成为的新旗舰。梁朝伟在发布会上用「一面像《一代宗师》，一面像《花样年华》」来形容小米 Note 2 的双曲面，那么到底它是否真的那么美呢？这一次借着开箱，我们先聊一聊小米 Note 2 的花样年华 —— 颜值，至于小米 Note 2 能不能称得上「一代宗师」，我会在稍后的深度体验中为尾巴们解答。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;word-wrap: break-word; line-height: 2em; font-size: 30px;&quot;&gt;这是个「以貌取人」的时代&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;span style=&quot;color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; background-color: rgb(245, 245, 245);&quot;&gt;定位旗舰的小米 Note 2 在包装盒上显得不太够意思，或者太普通 —— 至少与小米 MIX 是有一定的区别的。纯白的包装盒在左右印有小米 Note 2 的字样，背部贴有手机的配置信息等。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479121510.jpg&quot; title=&quot;1479121510.jpg&quot; alt=&quot;161738g60hdhgd8izd7j2j (1).jpg&quot;/&gt;&lt;span style=&quot;color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; background-color: rgb(245, 245, 245);&quot;&gt;我们拿到的不是高配全球版（6 模 37 频）、不是高配全网通版（6GB + 128GB），而是最基础的、售价为 2799 元的标准版小米 Note 2，颜色为冰川银。另外小米 Note 2 还有亮黑配色&lt;/span&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479121557.jpg&quot; title=&quot;1479121557.jpg&quot; alt=&quot;161740gwejqpekpwjexcwx.jpg&quot;/&gt;&lt;/p&gt;', 'Uploads/article/2016-11-14/58299a999016c.jpg', '0', '这是个「以貌取人」的时代', '2016-11-14 07:06:01', '0', '0', '0');
INSERT INTO `article` VALUES ('3', 'PlayStation', '&lt;p&gt;&lt;span style=&quot;color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; background-color: rgb(245, 245, 245);&quot;&gt;当 VR 概念进入到消费领域，虽然大大小小科技公司都希望抢占 VR 这个势头正劲的话题而推出形形色色的 VR 产品，但纵观整个 VR 产品市场，最具备关注度的莫过于 Oculus Rift、HTC Vive 和 Playstation VR 这三款，而这三款之中又仅有 PlayStation VR 是依靠家用游戏主机平台。作为拥有 4000 万 PlayStation 4 玩家作为坚强后盾的 PlayStation VR，加之较低的购机成本，它似乎有着许多与生俱来的优势。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;span style=&quot;color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; background-color: rgb(245, 245, 245);&quot;&gt;回忆一下自己当初入手 PlayStation 4 的原因，无非就是不愿意花费更高成本组装一台性能不错的台式机电脑，同时不愿意捣鼓 Windows 平台下可能出现的各类插件和兼容问题，于是 2000 元购买一台游戏主机外加 1000 元正版游戏支出（一般买光盘版为主，闲置的可以出售再购入新游戏），便能享受到不少游戏大作。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;span style=&quot;color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; background-color: rgb(245, 245, 245);&quot;&gt;那么 PlayStation VR 亦是如此，如果你想要享受到目前 VR 最高水准的体验，同时又不希望像 Oculus Rift、HTC Vive 一样投入巨大的成本，以最简单的方法来搭建一个 VR 环境，PlayStation VR 无疑是最佳的选择。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;span style=&quot;color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; background-color: rgb(245, 245, 245);&quot;&gt;究竟 PlayStation VR 玩游戏体验如何？看电影体验如何？对于游戏资源方面的支持如何？与 HTC Vive 相比差距有多大？相信大家还不是非常了解，籍此试玩机会，接下来将和大家聊聊索尼这款为 PlayStation 4 量身打造的 PlayStation VR。&amp;nbsp;&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;word-wrap: break-word; line-height: 2em; font-size: 30px;&quot;&gt;外观独特，佩戴舒适&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; white-space: normal; background-color: rgb(245, 245, 245);&quot;/&gt;&lt;span style=&quot;color: rgb(64, 64, 64); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; font-size: 18px; background-color: rgb(245, 245, 245);&quot;&gt;索尼官方推出的 PlayStation VR 共分有三个销售套装，主要区别于是否搭配 PlayStation Camera、PlayStation Move，考虑到此前有不少玩家配备这些附件，因此提供了不同套装供用户选择。虽然并非所有游戏支持 PlayStation Move，但如果想要完整的体验到整个 PlayStation VR，当然还是必买不可的。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479121939.jpg&quot; style=&quot;&quot; title=&quot;1479121939.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479121939.jpg&quot; style=&quot;&quot; title=&quot;1479121939.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479121939.jpg&quot; style=&quot;&quot; title=&quot;1479121939.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479121939.jpg&quot; style=&quot;&quot; title=&quot;1479121939.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'Uploads/article/2016-11-14/58299c2f306f4.png', '0', '外观独特，佩戴舒适', '2016-11-14 07:12:47', '0', '0', '0');
INSERT INTO `article` VALUES ('4', '卷盖单肩邮差包', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479124738.jpg&quot; style=&quot;&quot; title=&quot;1479124738.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;双 11 真的来啦！离 11 月 11 日还有一周，良品君的手已经剁掉一半了（摊手），尾巴们的手还好吗？千万要留一只来尾巴良品剁哦&amp;gt;&amp;lt;~这次双11，良品君准备了 3 款限定版新品，它们分别是“数字尾巴限定版卷盖单肩邮差包”、“数字尾巴限定版「N」系列移动电源”以及“数字尾巴限定版「N」系列抱枕”，下面我来一一介绍一下。&lt;/p&gt;&lt;p&gt;文末送尾巴大礼包~&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479124738.jpg&quot; style=&quot;&quot; title=&quot;1479124738.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479124738.jpg&quot; style=&quot;&quot; title=&quot;1479124738.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479124738.jpg&quot; style=&quot;&quot; title=&quot;1479124738.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161114/1479124738.jpg&quot; style=&quot;&quot; title=&quot;1479124738.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size:24px;word-wrap: break-word; line-height: 2em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;数字尾巴限定版卷盖单肩邮差包&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;/p&gt;&lt;p&gt;双11券后价：174元&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;/p&gt;&lt;p&gt;11 月 11 日当天下单即送数字尾巴徽章 1 个，抢先加购物车，双11当天购买更优惠！&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;https://item.taobao.com/item.htm?spm=a1z10.1-c.w5003-15421651774.1.vZPrrg&amp;id=540801977188&quot; target=&quot;_blank&quot; sl-processed=&quot;1&quot; style=&quot;word-wrap: break-word; color: rgb(51, 102, 153); text-decoration: none;&quot;&gt;抢先加购传送门&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &amp;quot;PingFang SC&amp;quot;, &amp;quot;Microsoft YaHei&amp;quot;, &amp;quot;WenQuanYi Micro Hei&amp;quot;, &amp;quot;tohoma,sans-serif&amp;quot;; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;/p&gt;&lt;p&gt;数字尾巴再次联合 COMBACK 推出一款全新的单肩包，邮差包的铭牌上同样会有 COMBACK x DGTLE 的刺绣 Logo，给简约的包身带来了一些小变化。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'Uploads/article/2016-11-14/5829a729a9393.png', '1', '数字尾巴限定版卷盖单肩邮差包', '2016-11-14 07:59:37', '0', '0', '0');
INSERT INTO `article` VALUES ('19', 'aaa', '&amp;nbsp;SADSADAWSDFJHGFDS&amp;nbsp;&lt;p&gt;\r\n\r\n			&lt;/p&gt;', '/Uploads/article/2016-11-16/582c6c9d88395.jpg', '1', '按时发生大甩卖', '2016-11-16 10:26:37', '0', '0', '0');

-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `bgpic` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pnum` int(11) DEFAULT '0' COMMENT '小组人数\r\n',
  `tnum` int(11) DEFAULT '0' COMMENT '帖子人数\r\n',
  `ctime` datetime DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `cid` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('1', '手机研究所', '/Uploads/group/2016-11-16/582c4090a220a.jpg', ' 现在二十四小时不离身的不是女朋友，也不是男朋友，是手机！手机测评、手机推荐、以及怎么玩手机？ 这里手机控的天堂。', '0', '0', '2016-11-16 10:34:57', '/Uploads/group/2016-11-16/582c40c8b6ee2.png', '0');
INSERT INTO `group` VALUES ('2', '苹果迷', '/Uploads/group/2016-11-16/582bba9daadb6.jpg', '在我心里你永远最美！乔布斯是永远的男神！别的还需要多说吗？', '0', '0', '2016-11-16 09:47:09', '/Uploads/group/2016-11-16/582bba9dab96e.jpg', '0');
INSERT INTO `group` VALUES ('3', '外设发烧友', '/Uploads/group/2016-11-16/582bcd4d93edc.jpg', '雷蛇、罗技、赛睿、技嘉……电脑桌上有了越来越多的外设产品，现在拥有的外设，想要拥有的外设，没钱买的外设。其实，对于外设，只要你喜欢，它就是一份纪念。', '0', '0', '2016-11-16 11:06:53', '/Uploads/group/2016-11-16/582bcd4d94e7d.jpg', '0');
INSERT INTO `group` VALUES ('4', '机械键盘玩5', '/Uploads/group/2016-11-16/582bcd9b2b070.jpg', '最爱“啪啪啪”的声音…… 官方机械键盘群：543594192', '0', '0', '2016-11-16 10:35:06', '/Uploads/group/2016-11-16/582bcd9b2c010.jpg', '3');
INSERT INTO `group` VALUES ('5', '智能生活家', '/Uploads/group/2016-11-16/582c1695b9590.jpg', '善发现，爱生活。净化器、机器人、电动牙刷……酷炫潮流电器，逼格数码生活，来这儿找就对了！', '0', '0', '2016-11-16 04:19:33', '/Uploads/group/2016-11-16/582c1695be799.jpg', '3');
INSERT INTO `group` VALUES ('6', '影音发烧友', '/Uploads/group/2016-11-16/582c422e707c6.jpg', '人对于美好的感知首先来自“看”和“听”，这就是影音设备存在的价值，它们就是放大镜，放大最立体的真实。', '0', '0', '2016-11-16 07:25:34', '/Uploads/group/2016-11-16/582c422e71766.jpg', '2');
INSERT INTO `group` VALUES ('14', '用桌面定义自己', '/Uploads/group/2016-11-16/582c44e56243a.jpg', '小桌面，大世界，就算是在方寸之间也有不一样的风景画面，DIY自定义最独特的桌面，可以极简风也可以处女座，因为，桌面就是你的个性签名。\r\n全部 精华', '0', '0', '2016-11-16 07:37:09', '/Uploads/group/2016-11-16/582c44e5637c2.png', '1');

-- ----------------------------
-- Table structure for perm
-- ----------------------------
DROP TABLE IF EXISTS `perm`;
CREATE TABLE `perm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perm` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perm
-- ----------------------------
INSERT INTO `perm` VALUES ('1', '管理员添加', '只对最高权限ROOT开放，谨慎使用！');
INSERT INTO `perm` VALUES ('2', '管理员删除', '只对最高权限ROOT开放，谨慎使用！');
INSERT INTO `perm` VALUES ('3', '管理员修改', '只对最高权限ROOT开放，谨慎使用！');
INSERT INTO `perm` VALUES ('6', '管理员查看', '只对最高权限ROOT开放，谨慎使用！');

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `like` int(11) NOT NULL DEFAULT '0' COMMENT '点赞数',
  `glance` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `state` tinyint(4) NOT NULL DEFAULT '0' COMMENT '显示状态,默认为0,禁用为1',
  `del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '默认为0，为1时放如回收站，且列表显示',
  `ctime` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `user` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post
-- ----------------------------

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  `desription` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------

-- ----------------------------
-- Table structure for role_perm
-- ----------------------------
DROP TABLE IF EXISTS `role_perm`;
CREATE TABLE `role_perm` (
  `id` int(11) NOT NULL,
  `roleid` int(11) DEFAULT NULL,
  `permid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_perm
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(36) DEFAULT NULL COMMENT '用户名',
  `sex` tinyint(4) DEFAULT '0',
  `password` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '0',
  `pic` varchar(255) DEFAULT NULL COMMENT '头像',
  `date` date DEFAULT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
