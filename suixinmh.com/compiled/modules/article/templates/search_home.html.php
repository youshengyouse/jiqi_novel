<?php
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset='.$this->_tpl_vars['jieqi_charset'].'" />
<title>����,��С˵,��С˵,С˵����-�麣������</title>
<meta name="keywords" content="С˵,С˵��,����С˵,��ԽС˵,����С˵,����С˵,����С˵">
<meta name="description" content="�麣С˵��Ϊ���Ӱ������ԭ��С˵�Ż�,Ҳ������Ǳ��������С˵��վ,�麣С˵��ÿ��ӵ�к���С˵����,��������С˵,��ԽС˵,����С˵,����С˵,����С˵,����С˵,�ֲ�С˵,����С˵,��ʷС˵�ȸ�������С˵�����Ķ�,���������ڻ㼯�˷�����,������ѧʢ��,����ÿ�������С˵��վ��">
<link href="'.$this->_tpl_vars['jieqi_themeurl'].'style/search.css" type="text/css" rel="stylesheet" />
<SCRIPT src="'.$this->_tpl_vars['jieqi_themeurl'].'js/ScrollPic.js" type=text/javascript></SCRIPT>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_local_url'].'/scripts/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_local_url'].'/scripts/page.js"></script>
</head>

<body>
<div class="se_top"><!--������ʼ-->
 <div class="topr_txt">';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '<a href="'.geturl('system','login').'">��¼</a>|<a href="'.geturl('system','register').'">ע��</a>|<a href="'.geturl('system','getpass').'">�һ�����</a>|';
}else{
echo '
                ��ӭ��<B>'.$this->_tpl_vars['jieqi_username'].'</B>&nbsp;<a href="'.geturl('system','userhub','SYS=method=usereditView').'" target="_top">�鿴����</a><a href="'.geturl('article','article','SYS=method=bcView').'" target="_top">�ҵ����</a>';
if($this->_tpl_vars['jieqi_newmessage'] == 0){
echo '<a href="'.geturl('system','userhub','SYS=method=inbox').'"  target="_top">�鿴����</a>';
}else{
echo ' | <a href="'.geturl('system','userhub','SYS=method=inbox').'" target="_top" class="mue1  hottext">���ж���</a>';
}
echo '<a href="'.geturl('system','userhub','SYS=method=logout').'" target="_self">�˳���½</a>';
}
echo '<a href="/help" target="_blank">��������</a></div>
</div><!--��������-->

<div class="se_content"><!--�м俪ʼ-->
 <div class="logo_mid"><span>logo</span></div>
 <div class="se_cont"><!--se_cont begin-->
  <ul class="se_list"><!--se_list begin-->
   <li class="se_nav">
    <a href="'.$this->_tpl_vars['jieqi_local_url'].'/" target="_blank" title="�麣��ҳ">�麣��ҳ</a>
    <a href="/shuku" target="_blank" title="���">���</a>
    <a href="'.geturl('article','top').'" target="_blank" title="���а�">���а�</a>
    <a href="/fuli/" target="_blank" title="���߸���">���߸���</a>
    <a href="'.$this->_tpl_vars['jieqi_local_url'].'/news/" target="_blank" title="��Ѷ">��Ѷ</a>
    <a href="'.geturl('pay','home').'" target="_blank" title="��ֵ">��ֵ</a>
   </li>
   <form name="articlesearch" method="get" action="/search" ajaxform="true" onsubmit="return false;">
   <li class="se_search">
    <input type="text" class="input_search"  id="J_search_suggest" data-placeholder="������������������ʼ����" name=\'searchkey\' /><input name="dosubmit" type="submit" class="btn_search" value="�������" />
   </li>
</form>

   <li class="sort_hotw">
    <div class="tt_l">С˵���ࣺ</div>
    <div class="word_r">
     <a href="'.geturl('article','channel','class=xuanhuan').'" target="_blank" class="font_green">����ħ��</a>
     <a href="'.geturl('article','channel','class=dushi').'" target="_blank" class="font_green">��������</a>
     <a href="'.geturl('article','channel','class=xiuzhen').'" target="_blank" class="font_green">��������</a>
     <a href="'.geturl('article','channel','class=wangyou').'" target="_blank" class="font_green">��������</a>
     <a href="'.geturl('article','channel','class=wuxia').'" target="_blank" class="font_green">��������</a>
     <a href="'.geturl('article','channel','class=lishi').'" target="_blank" class="font_green">��ʷ����</a>
     <a href="'.geturl('article','channel','class=kongbu').'" target="_blank" class="font_green">�ֲ�����</a>
     <a href="/shuku" target="_blank" class="font_green">����&gt;&gt;</a>
    </div>
   </li>
   <li class="sort_hotw">
    <div class="tt_l">һ���ȴʣ�</div>
    <div class="word_r">
     <a href="/book/24668.htm" target="_blank" class="font_green" title="��������">��������</a>
     <a href="/book/4033.htm" target="_blank" class="font_green" title="������������">������������</a>
     <a href="/book/12622.htm" target="_blank" class="font_green" title="��Ʒаҽ">��Ʒаҽ</a>
     <a href="/book/13689.htm" target="_blank" class="font_green" title="��Ʒаҽ">��ת����Ȧ</a>
     <a href="/book/15718.htm" target="_blank" class="font_green" title="��������">��������</a>
     <a href="/book/9531.htm" target="_blank" class="font_green" title="��ţ���б���">��ţ���б���</a>
    </div>
   </li>
  </ul><!--se_list end-->
<!--����ͼƬ start-->
<div class=combook><!--combook begin-->
 <div class=blk_29>
  <div class=LeftBotton id=LeftArr></div>
  <div class=Cont id=ISL_Cont_1><!-- ͼƬ�б� begin -->
   <div class=box>
    <a href="/book/24655.htm" target="_blank"><img alt="�������" title="�������" src="http://www.shuhai.com/files/article/image/24/24655/24655s.jpg" border=0></a>
    <p><a href="/book/24655.htm" target="_blank" title="�������">�������</a></p>
   </div>
   <div class=box>
    <a href="/book/1162.htm" target="_blank"><img alt="�ڵ�ѧ��6:��������" title="�ڵ�ѧ��6:��������" src="http://www.shuhai.com/files/article/image/1/1162/1162s.jpg" border=0></a>
    <p><a href="/book/1162.htm" target="_blank" title="�ڵ�ѧ��6:��������">�ڵ�ѧ��6:������</a></p>
   </div>
   <div class=box>
    <a href="/book/9815.htm" target="_blank"><img alt="��������" title="��������" src="http://www.shuhai.com/files/article/image/9/9815/9815s.jpg" border=0></a> 
    <p><a href="/book/9815.htm" target="_blank" title="��������">��������</a></p>
   </div>
   <div class=box>
    <a href="/book/1361.htm" target="_blank"><img alt="������ү�ľ�ɫ����" title="������ү�ľ�ɫ����" src="http://www.shuhai.com/files/article/image/1/1361/1361s.jpg" border=0></a>
    <p><a href="/book/1361.htm" target="_blank" title="������ү�ľ�ɫ����">������ү�ľ�ɫ��</a></p>
   </div>
   <div class=box>
    <a  href="/book/24660.htm" target="_blank"><img alt="ɼɼ����" title="ɼɼ����" src="http://www.shuhai.com/files/article/image/24/24660/24660s.jpg" border=0></a> 
    <p><a href="/book/24660.htm" target="_blank" title="ɼɼ����">ɼɼ����</a></p>
   </div>
   <div class=box>
    <a  href="/book/2120.htm" target="_blank"><img alt="Ů��ҽ:��ͷ�ղؼ�" title="Ů��ҽ:��ͷ�ղؼ�" src="http://www.shuhai.com/files/article/image/2/2120/2120s.jpg" border=0></a> 
    <p><a href="/book/2120.htm" target="_blank" title="Ů��ҽ:��ͷ�ղؼ�">Ů��ҽ:��ͷ�ղ�</a></p>
   </div>
   <div class=box>
    <a  href="/book/8690.htm" target="_blank"><img alt="����������ҽʥ" title="����������ҽʥ" src="http://www.shuhai.com/files/article/image/8/8690/8690s.jpg" border=0></a> 
    <p><a href="/book/8690.htm" target="_blank" title="����������ҽʥ">����������ҽʥ</a></p>
   </div>
   <div class=box>
    <a  href="/book/24597.htm" target="_blank"><img alt="�������:��褻ʺ�" title="�������:��褻ʺ�" src="http://www.shuhai.com/files/article/image/24/24597/24597s.jpg" border=0></a> 
    <p><a href="/book/24597.htm" target="_blank" title="�������:��褻ʺ�">�������:��褻�</a></p>
   </div>
  </div><!-- ͼƬ�б� end -->
  
  <div class=RightBotton id=RightArr></div>
 </div>


<SCRIPT language=javascript type=text/javascript>
		<!--//--><![CDATA[//><!--
		var scrollPic_02 = new ScrollPic();
		scrollPic_02.scrollContId   = "ISL_Cont_1"; //��������ID
		scrollPic_02.arrLeftId      = "LeftArr";//���ͷID
		scrollPic_02.arrRightId     = "RightArr"; //�Ҽ�ͷID

		scrollPic_02.frameWidth     = 730;//��ʾ�����
		scrollPic_02.pageWidth      = 152; //��ҳ����

		scrollPic_02.speed          = 10; //�ƶ��ٶ�(��λ���룬ԽСԽ��)
		scrollPic_02.space          = 10; //ÿ���ƶ�����(��λpx��Խ��Խ��)
		scrollPic_02.autoPlay       = false; //�Զ�����
		scrollPic_02.autoPlayTime   = 3; //�Զ����ż��ʱ��(��)

		scrollPic_02.initialize(); //��ʼ��
							
		//--><!]]>
</SCRIPT>
  </div><!--combook end--><!--����ͼƬ end-->
 </div><!--se_cont end-->
</div><!--�м����-->

<div class="se_footer"><!--se_foot begin-->
 <div class="sefoot_nav">
  <a href="'.geturl('system','about','SYS=method=index').'" target="_blank">��������</a>|<a href="'.geturl('system','about','SYS=method=business').'" target="_blank">��������</a>|<a href="'.geturl('system','about','SYS=method=partner').'" target="_blank">��Ȩ����</a>|<a href="'.geturl('system','userhub','SYS=method=uservip').'" target="_blank" class="f_red3">VIP��Ա����</a>|<a href="'.geturl('system','userhub').'" target="_blank" class="f_red3">����Ͷ��</a>|<a href="'.geturl('pay','home').'" target="_blank" class="f_red3">֧������</a>|<a href="'.geturl('system','about','SYS=method=accession').'" target="_blank">�����麣</a>|<a href="'.geturl('system','about','SYS=method=contact').'" target="_blank">��ϵ����</a>|<a href="'.geturl('system','about','SYS=method=friendly').'" target="_blank">��������</a>
 </div>
 <p class="footer_info">�麣С˵��Ϊ�������Ǳ��������ԭ��С˵���������ڹ���ȫ�����ԭ��������ѧƽ̨<br />
All Right Reserved Copryright 2011 @ www.shuhai.com �麣С˵����Ȩ���� ��ICP��10012047��-1</p>
</div><!--se_foot end-->

</body>
</html>
';
?>