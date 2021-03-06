<?php
/**
 * 后台渠道管理导航配置
 *
 *
 * 调用模板：无
 *
 * @category   jieqicms
 * @package    article
 * @copyright  Copyright (c) Hangzhou Jieqi Network Technology Co.,Ltd. (http://www.jieqi.com)
 * @author     $Author: juny $
 * @version    $Id: adminmenu.php 187 2008-11-24 09:30:03Z juny $
 */

/**
'layer'     - 菜单深度，默认 0
'caption'   - 菜单标题
'command'   - 链接的网址
'target'    - 点击链接是否打开新窗口(0-不新开；1-新开)
'publish'   - 是否显示（0-不显示；1-显示）
*/

$jieqiAdminmenu['wap'][] = array('layer' => 0, 'caption' => '参数设置', 'command'=>JIEQI_URL.'/web_admin/?controller=configs&mod=wap', 'target' => 0, 'publish' => 1);

$jieqiAdminmenu['wap'][] = array('layer' => 0, 'caption' => '权限管理', 'command'=>JIEQI_URL.'/web_admin/?controller=power&mod=wap', 'target' => 0, 'publish' => 1);

$jieqiAdminmenu['wap'][] = array('layer' => 0, 'caption' => 'URL路径管理', 'command'=>JIEQI_URL.'/web_admin/?controller=url&mod=wap', 'target' => 0, 'publish' => 1);

?>