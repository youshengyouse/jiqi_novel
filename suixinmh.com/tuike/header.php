<?php
$etagcheck = isset($_SESSION['jieqiUserId']) ? intval($_SESSION['jieqiUserId']) : '';
if (!empty($_SERVER['HTTP_IF_NONE_MATCH'])){
    $etagary = explode('|', $_SERVER['HTTP_IF_NONE_MATCH']);
    if (count($etagary) > 1 && is_numeric($etagary[0]) && $etagcheck == $etagary[1]){
        if (JIEQI_NOW_TIME - $etagary[0] < 3 || (defined('JIEQI_LAST_MODIFYED') && JIEQI_LAST_MODIFYED < $etagary[0])){
            header("ETag:" . JIEQI_NOW_TIME . '|' . $etagcheck, true, 304);
            jieqi_freeresource();
            exit;
        }
    }
}
@header("ETag:" . JIEQI_NOW_TIME . '|' . $etagcheck);
if (!function_exists('cal_days_in_month')){
    function cal_days_in_month($calendar, $month, $year) 
    {
        return date('t', mktime(0, 0, 0, $month, 1, $year));
    }
}


include_once (JIEQI_ROOT_PATH . '/lib/template/template.php');
$jieqiTpl = & JieqiTpl::getInstance();
$jieqiTpl->assign('jieqi_thisurl', jieqi_addurlvars(array(), true, false));
global $jieqiUsersStatus;
global $jieqiUsersGroup;

if ($jieqiUsersStatus == JIEQI_GROUP_GUEST){
    $jieqiTpl->assign('jieqi_newmessage', 0);
    $jieqiTpl->assign('jieqi_userid', 0);
    $jieqiTpl->assign('jieqi_username', '');
    $jieqiTpl->assign('jieqi_useruname', '');
    $jieqiTpl->assign('jieqi_group', JIEQI_GROUP_GUEST);
    $jieqiTpl->assign('jieqi_groupname', $jieqiGroups[JIEQI_GROUP_GUEST]);
    $jieqiTpl->assign('jieqi_score', 0);
    $jieqiTpl->assign('jieqi_experience', 0);
    $jieqiTpl->assign('jieqi_honor', '');
    $jieqiTpl->assign('jieqi_vip', 0);
    $jieqiTpl->assign('jieqi_vipgrade', 'VIP0');
    $jieqiTpl->assign('jieqi_vipphoto', 'v0');
    $jieqiTpl->assign('jieqi_egold', 0);
    $jieqiTpl->assign('jieqi_avatar', 0);
}else{
    $jieqiTpl->assign('jieqi_userid', $_SESSION['jieqiUserId']);
    $jieqiTpl->assign('jieqi_username', jieqi_htmlstr($_SESSION['jieqiUserName']));
    $jieqiTpl->assign('jieqi_useruname', jieqi_htmlstr($_SESSION['jieqiUserUname']));
    $jieqiTpl->assign('jieqi_realname', jieqi_htmlstr($_SESSION['jieqiRealName']));
    $jieqiTpl->assign('jieqi_group', $_SESSION['jieqiUserGroup']);
    $jieqiTpl->assign('jieqi_groupname', $jieqiGroups[$_SESSION['jieqiUserGroup']]);
    $jieqiTpl->assign('jieqi_score', $_SESSION['jieqiUserScore']);
    $jieqiTpl->assign('jieqi_experience', $_SESSION['jieqiUserExperience']);
    $jieqiTpl->assign('jieqi_honor', $_SESSION['jieqiUserHonor']);
    $jieqiTpl->assign('jieqi_vip', $_SESSION['jieqiUserVip']);
    $jieqiTpl->assign('jieqi_vipgrade', addslashes_array($_SESSION['jieqiUserVipgrade']));
    $jieqiTpl->assign('jieqi_vipphoto', $_SESSION['jieqiUserVipgradePhoto']);
    $jieqiTpl->assign('jieqi_egold', $_SESSION['jieqiUserEgold']);
    $jieqiTpl->assign('jieqi_egolds', $_SESSION['jieqiUserEgolds']);
    $jieqiTpl->assign('jieqi_avatar', $_SESSION['jieqiUserAvatar']);
    if (isset($_SESSION['jieqiNewMessage']) && $_SESSION['jieqiNewMessage'] > 0) $jieqiTpl->assign('jieqi_newmessage', $_SESSION['jieqiNewMessage']);
    else
    {
        $jieqiTpl->assign('jieqi_newmessage', 0);
    }
}
$jieqiTpl->assign('jieqi_userstatus', $jieqiUsersStatus);
$langurl = jieqi_addurlvars(array('charset' => ''));
$jieqiTpl->assign('url_big5', $langurl . 'big5');
$jieqiTpl->assign('url_gb2312', $langurl . 'gbk');
$jieqiTpl->assign('url_gbk', $langurl . 'gbk');
$jieqiTpl->assign('url_utf8', $langurl . 'utf8');
unset($langurl);
if (empty($jieqi_pagetitle)) $jieqi_pagetitle = JIEQI_SITE_NAME;
$jieqiTpl->assign('jieqi_pagetitle', $jieqi_pagetitle);
$jieqiTpl->assign('jieqi_banner', JIEQI_BANNER);
if (!empty($jieqi_pagehead)) $jieqiTpl->assign('jieqi_head', $jieqi_pagehead);
else
{
    $jieqiTpl->assign('jieqi_head', '');
}
$jieqiTpl->assign('jieqi_top_bar', JIEQI_TOP_BAR);
$jieqiTpl->assign('jieqi_bottom_bar', JIEQI_BOTTOM_BAR);


function jieqi_get_block($blockconfig, $retflag = 0) 
{
    global $jieqiUsersStatus;
    global $jieqi_blockside;
    global $jieqi_showlblock;
    global $jieqi_showcblock;
    global $jieqi_showrblock;
    global $jieqi_showtblock;
    global $jieqi_showbblock;
    global $jieqiModules;
    global $jieqiTpl;
    global $jieqiCache;
    $blockret = array();
    if ((($jieqiUsersStatus == JIEQI_GROUP_GUEST && ($blockconfig['publish'] & 1) > 0) || ($jieqiUsersStatus != JIEQI_GROUP_GUEST && ($blockconfig['publish'] & 2) > 0))){
        $jieqi_blockside = '';
        switch ($blockconfig['side']) 
        {
        case JIEQI_SIDEBLOCK_LEFT:
            $jieqi_blockside = 'jieqi_lblocks';
            $jieqi_showlblock = true;
            break;
        case JIEQI_CENTERBLOCK_LEFT:
            $jieqi_blockside = 'jieqi_clblocks';
            $jieqi_showcblock = true;
            break;
        case JIEQI_CENTERBLOCK_RIGHT:
            $jieqi_blockside = 'jieqi_crblocks';
            $jieqi_showcblock = true;
            break;
        case JIEQI_CENTERBLOCK_TOP:
            $jieqi_blockside = 'jieqi_ctblocks';
            $jieqi_showcblock = true;
            break;
        case JIEQI_CENTERBLOCK_MIDDLE:
            $jieqi_blockside = 'jieqi_cmblocks';
            $jieqi_showcblock = true;
            break;
        case JIEQI_CENTERBLOCK_BOTTOM:
            $jieqi_blockside = 'jieqi_cbblocks';
            $jieqi_showcblock = true;
            break;
        case JIEQI_SIDEBLOCK_RIGHT:
            $jieqi_blockside = 'jieqi_rblocks'; //
            $jieqi_showrblock = true;
            break;
        case JIEQI_TOPBLOCK_ALL:
            $jieqi_blockside = 'jieqi_tblocks';
            $jieqi_showtblock = true;
            break;
        case JIEQI_BOTTOMBLOCK_ALL:
            $jieqi_blockside = 'jieqi_bblocks';
            $jieqi_showbblock = true;
            break;
        default:
            $jieqi_blockside = 'jieqi_oblocks';
            break;
        }
        if (!empty($jieqi_blockside)){
            $blockpath = ($blockconfig['module'] == 'system') ? JIEQI_ROOT_PATH : $jieqiModules[$blockconfig['module']]['path'];
            if ($blockconfig['custom'] > 0){
                $blockfile = JIEQI_ROOT_PATH . '/blocks/block_custom.php';
            }else{
                $blockfile = $blockpath . '/blocks/' . trim($blockconfig['filename']) . '.php';
            }

            $usecache = false;
            if ($blockconfig['contenttype'] != JIEQI_CONTENT_PHP && empty($blockconfig['hasvars'])){
                if ($blockconfig['custom'] > 0) $templatefile = empty($blockconfig['bid']) ? $blockconfig['filename'] . '.html' : 'block_custom' . $blockconfig['bid'] . '.html';
                else
                {
                    $templatefile = empty($blockconfig['template']) ? $blockconfig['filename'] . '.html' : $blockconfig['template'];
                }
                $templatefile = $blockpath . '/templates/blocks/' . $templatefile;
                $cachefile = str_replace(JIEQI_ROOT_PATH, JIEQI_CACHE_PATH, $templatefile);
                if ($jieqiCache->iscached($cachefile)){
                    $usecache = true;
                }
            }
            if ($usecache){
                $blockret = array('title' => $blockconfig['title'], 'content' => $jieqiCache->get($cachefile));
            }else{
                $blockfile = @realpath($blockfile);

                if(is_file($blockfile) && preg_match('/blocks[\Q\/\E]block_\w+\.php$/i',$blockfile)){

                    $tpl_bak_vars = $jieqiTpl->get_all_assign();
                    $tpl_bak_caching = $jieqiTpl->getCaching();
                    $tpl_bak_cachetime  = $jieqiTpl->getCacheTime();
                    $tpl_bak_overtime  = $jieqiTpl->getOverTime();
                    include_once($blockfile);

                    $jieqiBlock=new $blockconfig['classname']($blockconfig);
                    $blockret=array('title'=>$jieqiBlock->getTitle(),'content'=>$jieqiBlock->getContent());
                    $jieqiTpl->set_all_assign($tpl_bak_vars);
                    $jieqiTpl->setCaching($tpl_bak_caching);
                    $jieqiTpl->setCacheTime($tpl_bak_cachetime);
                    $jieqiTpl->setOverTime($tpl_bak_overtime);
                }else{
                    return false;
                }
            }
        }
    }
    if($retflag == 1){
        return $blockret['content'];
    }elseif($retflag == 2){
        return $blockret['title'];
    }else{
        return $blockret;
    }
}

