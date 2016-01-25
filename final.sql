/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : final

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-21 19:30:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fin_aboutus
-- ----------------------------
DROP TABLE IF EXISTS `fin_aboutus`;
CREATE TABLE `fin_aboutus` (
  `abouts_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `abouts_title` varchar(10) NOT NULL COMMENT '标题名称',
  `abouts_desc` text NOT NULL COMMENT '内容介绍',
  `is_show` tinyint(4) NOT NULL COMMENT '是否显示',
  `addtime` int(11) NOT NULL COMMENT '创建时间',
  `abouts_sort` tinyint(4) NOT NULL COMMENT '排序',
  PRIMARY KEY (`abouts_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='关于我们';

-- ----------------------------
-- Records of fin_aboutus
-- ----------------------------

-- ----------------------------
-- Table structure for fin_audit
-- ----------------------------
DROP TABLE IF EXISTS `fin_audit`;
CREATE TABLE `fin_audit` (
  `audit_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '审核id',
  `user_id` int(11) NOT NULL COMMENT '审核人id',
  `audit_text` varchar(255) NOT NULL COMMENT '审核内容',
  `audit_status` tinyint(4) NOT NULL COMMENT '审核金钱状态 默认0 1审核中 2通过 3未通过',
  `audit_content` varchar(255) NOT NULL COMMENT '商家理由（未通过）',
  `audit_addtime` int(11) NOT NULL COMMENT '审核时间',
  PRIMARY KEY (`audit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='审核表';

-- ----------------------------
-- Records of fin_audit
-- ----------------------------

-- ----------------------------
-- Table structure for fin_banner
-- ----------------------------
DROP TABLE IF EXISTS `fin_banner`;
CREATE TABLE `fin_banner` (
  `banner_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `banner_url` varchar(100) NOT NULL COMMENT '图片所在地址',
  `banner_link` varchar(100) NOT NULL COMMENT '事件链接地址',
  `banner_sort` tinyint(4) NOT NULL COMMENT '排序',
  `is_show` tinyint(4) NOT NULL COMMENT '是否显示',
  `addtime` int(11) NOT NULL COMMENT '创建时间',
  `group_id` tinyint(4) NOT NULL COMMENT '所属组id 分组显示|更换',
  `banner_title` varchar(30) NOT NULL COMMENT '图片文字提示，未加载图片显示',
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='首页轮播图片';

-- ----------------------------
-- Records of fin_banner
-- ----------------------------

-- ----------------------------
-- Table structure for fin_circles
-- ----------------------------
DROP TABLE IF EXISTS `fin_circles`;
CREATE TABLE `fin_circles` (
  `cir_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '商圈自增id',
  `cir_name` varchar(100) DEFAULT NULL COMMENT '商圈名称',
  `cir_sort` smallint(6) DEFAULT NULL COMMENT '排序',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `is_show` tinyint(4) DEFAULT '1' COMMENT '状态  默认1    1为开启  0为禁用',
  PRIMARY KEY (`cir_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商圈表';

-- ----------------------------
-- Records of fin_circles
-- ----------------------------

-- ----------------------------
-- Table structure for fin_comment
-- ----------------------------
DROP TABLE IF EXISTS `fin_comment`;
CREATE TABLE `fin_comment` (
  `comment_id` int(11) NOT NULL COMMENT '自增ID',
  `comment_type` tinyint(4) DEFAULT NULL COMMENT '1商家  2兼职',
  `comment_level` tinyint(4) DEFAULT NULL COMMENT '默认0 1一星  2二星 3三星 4四星 5五星',
  `comment_price` decimal(10,2) DEFAULT NULL COMMENT '人均消费',
  `model_id` int(11) DEFAULT NULL COMMENT '被评论实体id',
  `comment_addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `user_id` smallint(6) DEFAULT NULL COMMENT '用户id',
  `user_name` varchar(30) DEFAULT NULL COMMENT '用户姓名',
  `comment_content` text COMMENT '评论内容',
  `comment_status` tinyint(4) DEFAULT '0' COMMENT '审核状态 默认为0',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论表';

-- ----------------------------
-- Records of fin_comment
-- ----------------------------

-- ----------------------------
-- Table structure for fin_friendslink
-- ----------------------------
DROP TABLE IF EXISTS `fin_friendslink`;
CREATE TABLE `fin_friendslink` (
  `link_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `link_img` varchar(100) NOT NULL COMMENT '图片所在地址',
  `link_url` varchar(100) NOT NULL COMMENT '事件链接地址 (待定)',
  `link_sort` tinyint(4) NOT NULL COMMENT '排序',
  `is_show` tinyint(4) NOT NULL COMMENT '是否显示',
  `addtime` int(11) NOT NULL COMMENT '创建时间',
  `link_title` varchar(30) NOT NULL COMMENT '图片文字提示，未加载图片显示',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='友情链接';

-- ----------------------------
-- Records of fin_friendslink
-- ----------------------------

-- ----------------------------
-- Table structure for fin_goods_order
-- ----------------------------
DROP TABLE IF EXISTS `fin_goods_order`;
CREATE TABLE `fin_goods_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `order_sn` int(11) DEFAULT NULL COMMENT '订单号',
  `user_id` smallint(6) DEFAULT NULL COMMENT '用户ID',
  `user_name` varchar(30) DEFAULT NULL COMMENT '用户名',
  `user_phone` char(11) DEFAULT NULL COMMENT '用户手机',
  `audit_addtime` int(11) DEFAULT NULL COMMENT '审核时间',
  `merchant_id` smallint(6) DEFAULT NULL COMMENT '商家id',
  `merchant_name` varchar(30) DEFAULT NULL COMMENT '商家名称',
  `order_amount` decimal(10,2) DEFAULT NULL COMMENT '订单实付款',
  `order_price` decimal(10,2) DEFAULT NULL COMMENT '总价格',
  `order_pay_time` int(11) DEFAULT NULL COMMENT '支付时间',
  `order_addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `order_status` tinyint(4) DEFAULT NULL COMMENT '订单状态  0：未支付 1：已付款  2：订单关闭 3：退款 4：成功',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品订单表';

-- ----------------------------
-- Records of fin_goods_order
-- ----------------------------

-- ----------------------------
-- Table structure for fin_helpcontent
-- ----------------------------
DROP TABLE IF EXISTS `fin_helpcontent`;
CREATE TABLE `fin_helpcontent` (
  `helpcontent_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `helptitle_id` smallint(6) NOT NULL COMMENT '标题id',
  `helpcontent` text NOT NULL COMMENT '标题对应的内容',
  `addtime` int(11) NOT NULL COMMENT '创建时间',
  `updtime` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`helpcontent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='帮助内容';

-- ----------------------------
-- Records of fin_helpcontent
-- ----------------------------

-- ----------------------------
-- Table structure for fin_helptitle
-- ----------------------------
DROP TABLE IF EXISTS `fin_helptitle`;
CREATE TABLE `fin_helptitle` (
  `helptitle_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `helptitle_name` varchar(20) NOT NULL COMMENT '标题名称',
  `is_show` tinyint(4) NOT NULL COMMENT '是否显示',
  `addtime` int(11) NOT NULL COMMENT '创建时间',
  `helptitle_sort` tinyint(4) NOT NULL COMMENT '排序',
  `helptitle_pid` smallint(6) NOT NULL COMMENT '父级id',
  PRIMARY KEY (`helptitle_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='帮助标题';

-- ----------------------------
-- Records of fin_helptitle
-- ----------------------------

-- ----------------------------
-- Table structure for fin_hotline
-- ----------------------------
DROP TABLE IF EXISTS `fin_hotline`;
CREATE TABLE `fin_hotline` (
  `hot_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `hot_desc` varchar(50) NOT NULL COMMENT '服务电话|邮箱|描述、等信息',
  `hot_sort` tinyint(4) NOT NULL COMMENT '排序',
  `is_show` tinyint(4) NOT NULL COMMENT '是否显示',
  `addtime` int(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`hot_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='首页服务热线';

-- ----------------------------
-- Records of fin_hotline
-- ----------------------------

-- ----------------------------
-- Table structure for fin_industry
-- ----------------------------
DROP TABLE IF EXISTS `fin_industry`;
CREATE TABLE `fin_industry` (
  `ind_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `ind_type` varchar(30) DEFAULT NULL COMMENT '行业名称',
  `parent_id` smallint(6) DEFAULT NULL COMMENT '父Id',
  `ind_addtime` int(11) DEFAULT NULL COMMENT '添加之间',
  PRIMARY KEY (`ind_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='行业表';

-- ----------------------------
-- Records of fin_industry
-- ----------------------------

-- ----------------------------
-- Table structure for fin_job_details
-- ----------------------------
DROP TABLE IF EXISTS `fin_job_details`;
CREATE TABLE `fin_job_details` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `merchants_id` int(11) NOT NULL COMMENT '商家ID',
  `job_name` varchar(60) NOT NULL COMMENT '兼职名称',
  `job_type` tinyint(4) NOT NULL COMMENT '兼职类别（与兼职类型表关联）',
  `job_people` int(11) NOT NULL COMMENT '招聘人数',
  `job_img` varchar(60) NOT NULL COMMENT '上传图片',
  `job_money` decimal(10,2) NOT NULL COMMENT '工资待遇',
  `job_treatment` varchar(100) NOT NULL COMMENT '元/天  元/周',
  `pay_method` tinyint(4) NOT NULL COMMENT '结算方式（与结算方式表关联）',
  `end_data` int(11) NOT NULL COMMENT '截止日期',
  `job_start` int(11) NOT NULL COMMENT '开始日期',
  `job_end` int(11) NOT NULL COMMENT '结束日期',
  `work_start` int(11) NOT NULL COMMENT '工作开始时间',
  `work_end` int(11) NOT NULL COMMENT '工作结束时间',
  `commission` tinyint(4) NOT NULL COMMENT '提成方式 （1、有提成 2、无提成）',
  `cut_way` varchar(60) NOT NULL COMMENT '描述',
  `sex` tinyint(4) NOT NULL COMMENT '性别要求（1、男 2、女）',
  `height` smallint(6) NOT NULL COMMENT '身高要求（单位为CM）',
  `job_content` varchar(300) NOT NULL COMMENT '工作内容',
  `job_require` varchar(300) NOT NULL COMMENT '工作要求',
  `contact` varchar(15) NOT NULL COMMENT '联系人',
  `contact_phone` varchar(11) NOT NULL COMMENT '联系电话',
  `working_place` varchar(300) NOT NULL COMMENT '工作地点',
  `job_status` int(11) NOT NULL COMMENT '发布兼职状态（1、通过 2、未通过）',
  `lng` double(18,14) NOT NULL COMMENT '经度',
  `lat` double(18,14) NOT NULL COMMENT '纬度',
  `add_time` int(11) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='兼职详情表';

-- ----------------------------
-- Records of fin_job_details
-- ----------------------------

-- ----------------------------
-- Table structure for fin_merchant_base
-- ----------------------------
DROP TABLE IF EXISTS `fin_merchant_base`;
CREATE TABLE `fin_merchant_base` (
  `mer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `mer_name` varchar(30) DEFAULT NULL COMMENT '商家名称',
  `mer_phone` char(11) DEFAULT NULL COMMENT '商家手机',
  `mer_paypassword` char(32) DEFAULT NULL COMMENT '支付密码',
  `mer_contact` varchar(30) DEFAULT NULL COMMENT '联系人',
  `mer_conphone` char(11) DEFAULT NULL COMMENT '联系人电话',
  `mer_position` varchar(30) DEFAULT NULL COMMENT '职位',
  `mer_level` tinyint(4) DEFAULT NULL COMMENT '默认0 1一星  2二星 3三星 4四星 5五星',
  `mer_province` smallint(6) DEFAULT NULL COMMENT '省',
  `mer_city` smallint(6) DEFAULT NULL COMMENT '市',
  `mer_area` smallint(6) DEFAULT NULL COMMENT '县',
  `mer_address` varchar(90) DEFAULT NULL COMMENT '地址',
  `mer_money` decimal(10,2) DEFAULT NULL COMMENT '用户余额',
  `mer_limimoney` decimal(10,2) DEFAULT NULL COMMENT '用户限额',
  `ind_type` smallint(6) DEFAULT NULL COMMENT '行业类型',
  `ind_type_child` smallint(6) DEFAULT NULL COMMENT '行业子类型',
  `mer_logo` varchar(255) DEFAULT NULL COMMENT '商家logo',
  `mer_license` varchar(255) DEFAULT NULL COMMENT '商家营业执照',
  `mer_registration` varchar(255) DEFAULT NULL COMMENT '税务登记',
  `mer_ allow` varchar(255) DEFAULT NULL COMMENT '许可证',
  `mer_positive` varchar(255) DEFAULT NULL COMMENT '身份证正面',
  `mer_reverse` varchar(255) DEFAULT NULL COMMENT '身份证反面',
  `mer_image1` varchar(255) DEFAULT NULL COMMENT '商家图片1',
  `mer_image2` varchar(255) DEFAULT NULL COMMENT '商家图片2',
  `mer_image3` varchar(255) DEFAULT NULL COMMENT '商家图片3',
  `mer_start` time DEFAULT NULL COMMENT '商家开始营业时间',
  `mer_end` time DEFAULT NULL COMMENT '商家结束营业时间',
  `mer_isshow` tinyint(4) DEFAULT NULL COMMENT '是否显示',
  `mer_introduce` text COMMENT '公司介绍',
  `register_time` int(11) DEFAULT NULL COMMENT '注册时间',
  PRIMARY KEY (`mer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商家基本信息';

-- ----------------------------
-- Records of fin_merchant_base
-- ----------------------------

-- ----------------------------
-- Table structure for fin_mer_type
-- ----------------------------
DROP TABLE IF EXISTS `fin_mer_type`;
CREATE TABLE `fin_mer_type` (
  `type_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `type_name` varchar(10) DEFAULT NULL COMMENT '分类名称',
  `type_sort` smallint(6) DEFAULT NULL COMMENT '排序',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `is_show` tinyint(4) DEFAULT '1' COMMENT '状态  默认1    1为开启  0为禁用',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of fin_mer_type
-- ----------------------------

-- ----------------------------
-- Table structure for fin_navigation
-- ----------------------------
DROP TABLE IF EXISTS `fin_navigation`;
CREATE TABLE `fin_navigation` (
  `nav_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `nav_name` varchar(20) NOT NULL COMMENT '导航名称',
  `nav_sort` tinyint(4) NOT NULL COMMENT '排序',
  `is_show` varchar(255) NOT NULL COMMENT '是否显示',
  `addtime` int(11) NOT NULL COMMENT '创建时间',
  `nav_type` tinyint(4) NOT NULL COMMENT '1顶部2中部 3底部 4子导航',
  `nav_pid` tinyint(4) NOT NULL COMMENT '父级id',
  `nav_url` varchar(100) NOT NULL COMMENT 'url链接',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='首页导航';

-- ----------------------------
-- Records of fin_navigation
-- ----------------------------

-- ----------------------------
-- Table structure for fin_parttime_order
-- ----------------------------
DROP TABLE IF EXISTS `fin_parttime_order`;
CREATE TABLE `fin_parttime_order` (
  `order_id` int(11) NOT NULL COMMENT '订单ID',
  `order_sn` int(11) DEFAULT NULL COMMENT '订单号',
  `user_id` smallint(6) DEFAULT NULL COMMENT '用户id',
  `position_id` smallint(6) DEFAULT NULL COMMENT '兼职id',
  `order_addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `order_status` tinyint(4) DEFAULT NULL COMMENT '订单状态  0：审核中 1：已通过 2 未通过',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='兼职订单表';

-- ----------------------------
-- Records of fin_parttime_order
-- ----------------------------

-- ----------------------------
-- Table structure for fin_part_list
-- ----------------------------
DROP TABLE IF EXISTS `fin_part_list`;
CREATE TABLE `fin_part_list` (
  `part_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `user_id` int(11) NOT NULL COMMENT '兼职人员ID',
  `job_id` int(11) NOT NULL COMMENT '兼职名称ID',
  `part_status` int(11) NOT NULL COMMENT '人员状态（1、审核通过 2、审核未通过 3、未审核）',
  `add_time` int(11) NOT NULL COMMENT '申请时间',
  PRIMARY KEY (`part_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='兼职人员表';

-- ----------------------------
-- Records of fin_part_list
-- ----------------------------

-- ----------------------------
-- Table structure for fin_part_type
-- ----------------------------
DROP TABLE IF EXISTS `fin_part_type`;
CREATE TABLE `fin_part_type` (
  `part_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '兼职分类自增id',
  `part_name` varchar(100) DEFAULT NULL COMMENT '兼职分类名称',
  `part_sort` smallint(6) DEFAULT NULL COMMENT '排序',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `is_show` tinyint(4) DEFAULT NULL COMMENT '状态 1为开启  0为禁用 默认1',
  PRIMARY KEY (`part_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='兼职分类表';

-- ----------------------------
-- Records of fin_part_type
-- ----------------------------

-- ----------------------------
-- Table structure for fin_payment
-- ----------------------------
DROP TABLE IF EXISTS `fin_payment`;
CREATE TABLE `fin_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '支付id',
  `user_id` smallint(6) NOT NULL COMMENT '用户ID',
  `payment_type` tinyint(4) NOT NULL COMMENT '支付类型 1支出  2支入',
  `payment_addtime` int(11) NOT NULL COMMENT '支付时间',
  `payment_money` decimal(10,2) NOT NULL COMMENT '支付金钱',
  `payment_note` varchar(255) NOT NULL COMMENT '支付备注',
  `payment_way` tinyint(4) NOT NULL COMMENT '支付方式 1趣币  2支付宝',
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='支付记录表';

-- ----------------------------
-- Records of fin_payment
-- ----------------------------

-- ----------------------------
-- Table structure for fin_preferential
-- ----------------------------
DROP TABLE IF EXISTS `fin_preferential`;
CREATE TABLE `fin_preferential` (
  `preferential_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `merchant_id` smallint(6) NOT NULL COMMENT '商家ID',
  `preferential_type` tinyint(4) NOT NULL COMMENT '活动类型(1满减2折扣)',
  `preferential_content` varchar(20) NOT NULL COMMENT '活动内容',
  `preferential_start` int(11) NOT NULL COMMENT '活动开始时间',
  `preferential_end` int(11) NOT NULL COMMENT '活动结束时间',
  `addtime` int(11) NOT NULL COMMENT '添加之间',
  PRIMARY KEY (`preferential_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='优惠表';

-- ----------------------------
-- Records of fin_preferential
-- ----------------------------

-- ----------------------------
-- Table structure for fin_region
-- ----------------------------
DROP TABLE IF EXISTS `fin_region`;
CREATE TABLE `fin_region` (
  `region_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '地区id',
  `parent_id` smallint(6) NOT NULL COMMENT '父级id',
  `region_name` varchar(10) NOT NULL COMMENT '地区名称',
  `region_type` tinyint(4) NOT NULL COMMENT '1省/直辖市  2市/区 3县',
  PRIMARY KEY (`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='地区表';

-- ----------------------------
-- Records of fin_region
-- ----------------------------

-- ----------------------------
-- Table structure for fin_settlement
-- ----------------------------
DROP TABLE IF EXISTS `fin_settlement`;
CREATE TABLE `fin_settlement` (
  `settlement_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `part_id` int(11) NOT NULL COMMENT '兼职人员ID',
  `part_status` int(11) NOT NULL COMMENT '兼职状态（1、兼职结算 2、未结算）',
  `part_comments` varchar(300) NOT NULL COMMENT '对兼职人员的评价',
  `settlement_time` int(11) NOT NULL COMMENT '结算时间',
  PRIMARY KEY (`settlement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='兼职人员结算状态表';

-- ----------------------------
-- Records of fin_settlement
-- ----------------------------

-- ----------------------------
-- Table structure for fin_shop_comment
-- ----------------------------
DROP TABLE IF EXISTS `fin_shop_comment`;
CREATE TABLE `fin_shop_comment` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `is_comment` tinyint(4) DEFAULT NULL COMMENT '是否评论 0否 1已评论',
  `content` varchar(300) DEFAULT NULL COMMENT '评论内容',
  `comment_time` int(11) DEFAULT NULL COMMENT '评论时间',
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商家评论表';

-- ----------------------------
-- Records of fin_shop_comment
-- ----------------------------

-- ----------------------------
-- Table structure for fin_shop_limit_apply
-- ----------------------------
DROP TABLE IF EXISTS `fin_shop_limit_apply`;
CREATE TABLE `fin_shop_limit_apply` (
  `mer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商家id',
  `apply_limit` decimal(10,2) DEFAULT NULL COMMENT '申请额度',
  `apply_reason` varchar(255) DEFAULT NULL COMMENT '申请理由',
  `is_pass` tinyint(4) DEFAULT NULL COMMENT '是否通过  0未审核 1 通过  2未通过',
  `apply_time` int(11) DEFAULT NULL COMMENT '申请时间',
  PRIMARY KEY (`mer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商家额度申请';

-- ----------------------------
-- Records of fin_shop_limit_apply
-- ----------------------------

-- ----------------------------
-- Table structure for fin_skills
-- ----------------------------
DROP TABLE IF EXISTS `fin_skills`;
CREATE TABLE `fin_skills` (
  `skills_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `skills_name` varchar(100) NOT NULL COMMENT '技能名称',
  `skills_sort` tinyint(4) NOT NULL COMMENT '排序',
  `skills_addtime` int(11) NOT NULL COMMENT '添加时间',
  `skills_status` tinyint(4) NOT NULL COMMENT '状态默认1  1为开启  0为禁用',
  PRIMARY KEY (`skills_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='技能表';

-- ----------------------------
-- Records of fin_skills
-- ----------------------------

-- ----------------------------
-- Table structure for fin_students
-- ----------------------------
DROP TABLE IF EXISTS `fin_students`;
CREATE TABLE `fin_students` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `stu_name` varchar(30) NOT NULL COMMENT '学生真实名称',
  `stu_nickname` varchar(30) NOT NULL COMMENT '学生昵称',
  `stu_card` varchar(30) NOT NULL COMMENT '学生身份证号码',
  `card_positive` varchar(255) NOT NULL COMMENT '学生身份证正面',
  `card_reverse` varchar(255) NOT NULL COMMENT '学生身份证反面',
  `stu_sex` tinyint(4) NOT NULL COMMENT '0保密默认  1男  2女',
  `stu_height` smallint(6) NOT NULL COMMENT '身高',
  `stu_school` varchar(30) NOT NULL COMMENT '学校',
  `stu_professional` varchar(30) NOT NULL COMMENT '专业',
  `stu_code` varchar(30) NOT NULL COMMENT '学号',
  `stu_start` int(11) NOT NULL COMMENT '入学时间',
  `stu_end` int(11) NOT NULL COMMENT '毕业时间',
  `province_id` smallint(6) NOT NULL COMMENT '省',
  `city_id` smallint(6) NOT NULL COMMENT '市',
  `area_id` smallint(6) NOT NULL COMMENT '县(区)',
  `stu_addr` varchar(100) NOT NULL COMMENT '宿舍楼（详细地址）',
  `skills_id` varchar(100) NOT NULL COMMENT '技能id(1,2,3,4)',
  `stu_parttime` tinyint(4) NOT NULL COMMENT '是否兼职 1默认  1是  2否',
  `stu_introduction` varchar(255) NOT NULL COMMENT '个人介绍',
  `stu_experience` varchar(255) NOT NULL COMMENT '工作经验',
  `stu_pwd` varchar(50) NOT NULL COMMENT '支付密码',
  `stu_avatar` varchar(255) NOT NULL COMMENT '学生头像',
  `stu_money` decimal(10,2) NOT NULL COMMENT '金钱',
  `stu_limit_money` decimal(10,2) NOT NULL COMMENT '限额金钱',
  `stu_addtime` int(11) NOT NULL COMMENT '添加时间',
  `stu_updtime` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='学生详情表';

-- ----------------------------
-- Records of fin_students
-- ----------------------------

-- ----------------------------
-- Table structure for fin_user
-- ----------------------------
DROP TABLE IF EXISTS `fin_user`;
CREATE TABLE `fin_user` (
  `user_id` smallint(6) NOT NULL COMMENT '自增ID',
  `user_phone` char(11) NOT NULL COMMENT '后台用户手机',
  `user_password` char(32) NOT NULL COMMENT '密码',
  `user_type` tinyint(4) NOT NULL COMMENT '用户类型 （1,学生，2,企业商家，3企业兼职）',
  `user_addtime` int(11) NOT NULL COMMENT '添加时间',
  `user_lastlogin` int(11) NOT NULL COMMENT '上一次登录时间',
  `user_lastip` varchar(15) NOT NULL COMMENT '上一次登录ip',
  `user_status` tinyint(4) NOT NULL COMMENT '是否禁用 0禁用 1开启默认'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of fin_user
-- ----------------------------

-- ----------------------------
-- Table structure for fin_voucher
-- ----------------------------
DROP TABLE IF EXISTS `fin_voucher`;
CREATE TABLE `fin_voucher` (
  `voucher_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `voucher_name` varchar(20) NOT NULL COMMENT '凭证名称',
  `voucher_img` varchar(100) NOT NULL COMMENT '图片所在地址',
  `voucher_url` varchar(100) NOT NULL COMMENT '事件链接地址 (待定)',
  `voucher_sort` tinyint(4) NOT NULL COMMENT '排序',
  `is_show` tinyint(4) NOT NULL COMMENT '是否显示',
  `addtime` int(11) NOT NULL COMMENT '创建时间',
  `voucher_title` varchar(30) NOT NULL COMMENT '图片文字提示，未加载图片显示',
  `voucher_desc` varchar(50) NOT NULL COMMENT '简单描述',
  PRIMARY KEY (`voucher_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='网站凭证';

-- ----------------------------
-- Records of fin_voucher
-- ----------------------------
