<?php
echo '<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li>
            <a href="/">
                <i class="icon-home"></i>
                <span class="title">首页</span>
            </a>
        </li>
        <li>
            <a href="index.php?controller=qdpay">
                <i class="icon-basket"></i>
                <span class="title">渠道充值明细</span>
                <!--<span class="arrow"></span>-->
            </a>
        </li>
        ';
if($this->_tpl_vars['groupid']==2){
echo '
        <li>
            <a href="index.php?controller=article&method=booktotal">
                <i class="icon-settings"></i>
                <span class="title">小说充值统计</span>
            </a>
        </li>
        <li>
            <a href="index.php?controller=article">
                <i class="icon-basket"></i>
                <span class="title">小说阅读统计</span>
                <!--<span class="arrow"></span>-->
            </a>
        </li>
        <li>
            <a href="index.php?controller=qdpay&method=qdtotal">
                <i class="icon-rocket"></i>
                <span class="title">子账号数据统计</span>
                <!--<span class="arrow"></span>-->
            </a>
        </li>
        ';
}
echo '
        <li>
            <a href="index.php?controller=qdpay&method=paylist">
                <i class="icon-docs"></i>
                <span class="title">订单明细</span>
            </a>
        </li>
        <li>
            <a href="index.php?controller=qdpay&method=paytotal">
                <i class="icon-bar-chart"></i>
                <span class="title">收入统计</span>
            </a>
        </li>
        ';
if($this->_tpl_vars['groupid']==2){
echo '
        <li>
            <a href="index.php?controller=userlist">
                <i class="icon-paper-plane"></i>
                <span class="title">子账号维护</span>
            </a>
        </li>
        ';
}
echo '
        ';
if($this->_tpl_vars['groupid']==5){
echo '
        <li>
            <a href="index.php?controller=profile">
                <i class="icon-basket"></i>
                <span class="title">个人资料</span>
            </a>
        </li>
        ';
}
echo '
        <li>
            <a href="index.php?controller=qd">
                <i class="icon-settings"></i>
                <span class="title">渠道数据维护</span>
            </a>
        </li>
        ';
if($this->_tpl_vars['groupid']==2){
echo '
        <li>
            <a href="index.php?controller=article&method=blocklist">
                <i class="icon-paper-plane"></i>
                <span class="title">强制关注卡点设置</span>
            </a>
        </li>
        ';
}
echo '
        <li>
            <a href="index.php?controller=login&method=logout">
                <i class="icon-user"></i>
                <span class="title">退出登录</span>
            </a>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>
';
?>