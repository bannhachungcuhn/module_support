<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Thu, 31 Jul 2014 05:38:51 GMT
 */

if ( ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support`";

$sql_drop_module[] = "DROP TABLE IF EXISTS `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support_group`";


$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT 'Tên nhân viên ',
  `idgroup` varchar(255) NOT NULL DEFAULT '' COMMENT 'Nhóm nhân viên',
  `phone` varchar(255) NOT NULL DEFAULT '' COMMENT 'Điện thoại',
  `email` varchar(255) NOT NULL DEFAULT '' COMMENT 'Email',
  `skype_item` varchar(100) NOT NULL COMMENT 'Skype',
  `skype_type` varchar(100) NOT NULL COMMENT 'Kiểu icons skype',
  `yahoo_item` varchar(100) NOT NULL COMMENT 'Yahoo',
  `yahoo_type` varchar(2) NOT NULL COMMENT 'Kiểu icons yahoo',
  `weight` smallint(4) NOT NULL DEFAULT '0' COMMENT 'STT',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_support_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT 'Nhóm nhân viên',
  `weight` smallint(4) NOT NULL DEFAULT '0' COMMENT 'Số TT',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;";