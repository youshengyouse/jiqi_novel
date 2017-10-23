<?php
if(!defined('IN_JQNEWS')) exit('Access Denied');
$_SGLOBAL['model_1_field']=Array
	(
	'contentid' => Array
		(
		'fieldid' => 1,
		'modelid' => 1,
		'field' => 'contentid',
		'name' => 'ID',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'number',
		'setting' => '',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => 1,
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => '0',
		'isselect' => 1,
		'isorder' => 1,
		'islist' => 1,
		'isshow' => 1,
		'isadd' => 1,
		'isfulltext' => '0',
		'listorder' => '0',
		'disabled' => '0'
		),
	'catid' => Array
		(
		'fieldid' => 2,
		'modelid' => 1,
		'field' => 'catid',
		'name' => '��Ŀ',
		'tips' => '',
		'css' => '',
		'minlength' => 1,
		'maxlength' => 6,
		'pattern' => '/^[0-9]{1,6}$/',
		'errortips' => '��ѡ����Ŀ',
		'formtype' => 'catid',
		'setting' => 'Array
	(
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => 1,
		'isselect' => '0',
		'isorder' => '0',
		'islist' => 1,
		'isshow' => 1,
		'isadd' => 1,
		'isfulltext' => '0',
		'listorder' => 1,
		'disabled' => '0'
		),
	'typeid' => Array
		(
		'fieldid' => 3,
		'modelid' => 1,
		'field' => 'typeid',
		'name' => '���',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'typeid',
		'setting' => 'Array
	(
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => 1,
		'isselect' => '0',
		'isorder' => '0',
		'islist' => 1,
		'isshow' => 1,
		'isadd' => 1,
		'isfulltext' => '0',
		'listorder' => 2,
		'disabled' => 1
		),
	'areaid' => Array
		(
		'fieldid' => 4,
		'modelid' => 1,
		'field' => 'areaid',
		'name' => '����',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'areaid',
		'setting' => 'Array
	(
	\'items\' => \'ѡ��ֵ1|ѡ������1\',
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => 1,
		'isselect' => '0',
		'isorder' => '0',
		'islist' => 1,
		'isshow' => 1,
		'isadd' => 1,
		'isfulltext' => '0',
		'listorder' => 3,
		'disabled' => 1
		),
	'title' => Array
		(
		'fieldid' => 5,
		'modelid' => 1,
		'field' => 'title',
		'name' => '����',
		'tips' => '',
		'css' => 'inputtitle',
		'minlength' => 1,
		'maxlength' => 80,
		'pattern' => '',
		'errortips' => '�����ַ����ȱ���Ϊ1��80λ��',
		'formtype' => 'text',
		'setting' => 'Array
	(
	\'size\' => \'\',
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => ' onBlur="$.post(\'/modules/news/admin/?ac=content&ajax_request=1\', { op : \'dict_word\',data:$(\'#title\').val()}, function(data){if(data && $(\'#keywords\').val()==\'\') $(\'#keywords\').val(data); })" ',
		'forminfo' => '  <input type="button" value="�������Ƿ��Ѵ���" onclick="$.post(\'/modules/news/admin/?ac=content&ajax_request=1\', { op : \'check_title\', title:$(\'#title\').val(),catid:$(\'#catid\').val()}, function(data){ $(\'#t_msg\').html(data); })">&nbsp;<span style="color:\'#ff0000\'" id=\'t_msg\'></span>',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => 1,
		'isselect' => 1,
		'isorder' => '0',
		'islist' => 1,
		'isshow' => 1,
		'isadd' => 1,
		'isfulltext' => 1,
		'listorder' => 4,
		'disabled' => '0'
		),
	'titleintact' => Array
		(
		'fieldid' => 6,
		'modelid' => 1,
		'field' => 'titleintact',
		'name' => '��������',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => 200,
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'text',
		'setting' => 'array (
  \'size\' => \'80\',
  \'defaultvalue\' => \'\',
)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => -99,
		'iscore' => '0',
		'issystem' => '0',
		'isunique' => '0',
		'isbase' => '0',
		'issearch' => 1,
		'isselect' => '0',
		'isorder' => '0',
		'islist' => '0',
		'isshow' => '0',
		'isadd' => 1,
		'isfulltext' => 1,
		'listorder' => 4,
		'disabled' => 1
		),
	'style' => Array
		(
		'fieldid' => 7,
		'modelid' => 1,
		'field' => 'style',
		'name' => '��ɫ������',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'hidden',
		'setting' => 'Array
	(
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => '',
		'forminfo' => ' <select name="style_color1" id="style_color1" onchange="document.all.style.value=document.all.style_color1.value;if(document.all.style_strong1.checked)document.all.style.value +=  \' \'+document.all.style_strong1.value;"><option value="">��ɫ</option><option value="c1"  class="bg1"></option><option value="c2"  class="bg2"></option><option value="c3"  class="bg3"></option><option value="c4"  class="bg4"></option><option value="c5"  class="bg5"></option><option value="c6"  class="bg6"></option><option value="c7"  class="bg7"></option><option value="c8"  class="bg8"></option><option value="c9"  class="bg9"></option><option value="c10"  class="bg10"></option><option value="c11"  class="bg11"></option><option value="c12"  class="bg12"></option><option value="c13"  class="bg13"></option><option value="c14"  class="bg14"></option><option value="c15"  class="bg15"></option></select><label><input type="checkbox" name="style_strong1" id="style_strong1" value="b" onclick="document.all.style.value=document.all.style_color1.value;if(document.all.style_strong1.checked)document.all.style.value += \' \'+document.all.style_strong1.value;"> �Ӵ�</label><script>if(document.all.style.value!=\'\'){var temp=document.all.style.value;if(temp.indexOf("b")!=-1){document.all.style_strong1.checked=true;}var sint=temp.replace(/[^\\d]*/ig,"");if(sint!=\'\'){document.all.style_color1.selectedIndex = sint;}}</script>',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => '0',
		'islist' => '0',
		'isshow' => '0',
		'isadd' => '0',
		'isfulltext' => '0',
		'listorder' => 5,
		'disabled' => '0'
		),
	'thumb' => Array
		(
		'fieldid' => 8,
		'modelid' => 1,
		'field' => 'thumb',
		'name' => '����ͼ',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => 100,
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'image',
		'setting' => 'Array
	(

	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => '0',
		'isselect' => 1,
		'isorder' => '0',
		'islist' => 1,
		'isshow' => 1,
		'isadd' => 1,
		'isfulltext' => '0',
		'listorder' => 6,
		'disabled' => '0'
		),
	'keywords' => Array
		(
		'fieldid' => 9,
		'modelid' => 1,
		'field' => 'keywords',
		'name' => '�ؼ���',
		'tips' => '��ؼ���֮���ÿո����',
		'css' => '',
		'minlength' => '0',
		'maxlength' => 100,
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'keyword',
		'setting' => 'Array
	(
	\'size\' => 120,
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => 1,
		'isselect' => 1,
		'isorder' => '0',
		'islist' => '0',
		'isshow' => 1,
		'isadd' => 1,
		'isfulltext' => 1,
		'listorder' => 7,
		'disabled' => '0'
		),
	'author' => Array
		(
		'fieldid' => 10,
		'modelid' => 1,
		'field' => 'author',
		'name' => '����',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => 30,
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'text',
		'setting' => 'Array
	(
	\'size\' => 30,
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => '',
		'forminfo' => '<select name="" onchange="$(\'#author\').val(this.value)" style="width:85px"><option>��������</option><option value=91wan��������Ĺ�ǡ�>91wan��������Ĺ�ǡ�</option>select>',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => '0',
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => 1,
		'isselect' => 1,
		'isorder' => '0',
		'islist' => 1,
		'isshow' => 1,
		'isadd' => 1,
		'isfulltext' => 1,
		'listorder' => 8,
		'disabled' => '0'
		),
	'copyfrom' => Array
		(
		'fieldid' => 11,
		'modelid' => 1,
		'field' => 'copyfrom',
		'name' => '��Դ',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'text',
		'setting' => 'Array
	(
	\'size\' => 30,
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => '',
		'forminfo' => '<select name="select_copyfrom" onchange="$(\'#copyfrom\').val(this.value)" style="width:85px"><option>������Դ</option><option value=17173��Ϸ��>17173��Ϸ��</option><option value=ʢ����Ϸ>ʢ����Ϸ</option></select>',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => '0',
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => '0',
		'isselect' => 1,
		'isorder' => '0',
		'islist' => '0',
		'isshow' => 1,
		'isadd' => 1,
		'isfulltext' => 1,
		'listorder' => 9,
		'disabled' => '0'
		),
	'description' => Array
		(
		'fieldid' => 12,
		'modelid' => 1,
		'field' => 'description',
		'name' => 'ժҪ',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => 255,
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'textarea',
		'setting' => 'Array
	(
	\'rows\' => 4,
	\'cols\' => 50,
	\'defaultvalue\' => \'\',
	\'enablehtml\' => 1
	)',
		'formattribute' => 'style="width:80%" onkeyup="checkLength(this, \'description\', \'255\');"',
		'forminfo' => ' <br /><img src="/modules/news/images/icon.gif" width="12"> ���������� <font id="ls_description" color="#ff0000;">255</font> ���ַ���',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => '0',
		'isselect' => 1,
		'isorder' => '0',
		'islist' => 1,
		'isshow' => 1,
		'isadd' => 1,
		'isfulltext' => 1,
		'listorder' => 10,
		'disabled' => '0'
		),
	'userid' => Array
		(
		'fieldid' => 13,
		'modelid' => 1,
		'field' => 'userid',
		'name' => '������',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'userid',
		'setting' => '',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => 1,
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => '0',
		'isselect' => 1,
		'isorder' => '0',
		'islist' => '0',
		'isshow' => '0',
		'isadd' => 1,
		'isfulltext' => '0',
		'listorder' => 11,
		'disabled' => '0'
		),
	'updatetime' => Array
		(
		'fieldid' => 14,
		'modelid' => 1,
		'field' => 'updatetime',
		'name' => '����ʱ��',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'datetime',
		'setting' => 'array (
  \'dateformat\' => \'int\',
  \'format\' => \'Y-m-d H:i:s\',
  \'defaulttype\' => \'1\',
  \'defaultvalue\' => \'\',
)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => 1,
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => '0',
		'isselect' => 1,
		'isorder' => 1,
		'islist' => '0',
		'isshow' => '0',
		'isadd' => 1,
		'isfulltext' => '0',
		'listorder' => 12,
		'disabled' => '0'
		),
	'content' => Array
		(
		'fieldid' => 15,
		'modelid' => 1,
		'field' => 'content',
		'name' => '����',
		'tips' => '<label><input name="add_introduce" type="checkbox"  value="1" checked>�Ƿ��ȡ����</label><br><input type="text" name="introcude_length" value="200" size="3">�ַ�������ժҪ
<br/><br/>
<label><input type=\'checkbox\' name=\'auto_thumb\' value="1" checked>�Ƿ��ȡ���ݵ�</label><br><input type="text" name="auto_thumb_no" value="1" size="2" class="">��ͼƬ��Ϊ����ͼƬ',
		'css' => '',
		'minlength' => 1,
		'maxlength' => 999999,
		'pattern' => '',
		'errortips' => '����д�������ݣ�',
		'formtype' => 'editor',
		'setting' => 'Array
	(
	\'toolbar\' => \'standard\',
	\'width\' => \'100%\',
	\'height\' => 350,
	\'defaultvalue\' => \'\',
	\'openpagetag\' => \'0\',
	\'storage\' => \'database\',
	\'thumb_enable\' => 1,
	\'thumb_width\' => 600,
	\'thumb_height\' => 600,
	\'attachwater\' => -1,
	\'attachwimage\' => \'\',
	\'enablereplaceurls\' => \'0\',
	\'enablesaveimage\' => 1,
	\'enablesaveflash\' => \'0\',
	\'enablesavefile\' => 1,
	\'savefileext\' => \'mp3|rar|zip\',
	\'forbidwords\' => \'script|div|iframe\'
	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => '0',
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => 1,
		'isselect' => 1,
		'isorder' => '0',
		'islist' => '0',
		'isshow' => '0',
		'isadd' => 1,
		'isfulltext' => 1,
		'listorder' => 13,
		'disabled' => '0'
		),
	'url' => Array
		(
		'fieldid' => 16,
		'modelid' => 1,
		'field' => 'url',
		'name' => 'ת������',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'text',
		'setting' => 'Array
	(
	\'size\' => 50,
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => 'readonly',
		'forminfo' => '  <font color="#FF0000"><label><input type="checkbox" id="linkurl" value="1" onclick="javascript:if(this.checked==true) $(\'#url\').attr(\'readonly\',\'\');else $(\'#url\').attr(\'readonly\',\'true\');" > ת������</label></font><br/><font color="#FF0000">���ʹ��ת���������������ֱ����ת������������Ч</font>',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => '0',
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => '0',
		'islist' => 1,
		'isshow' => 1,
		'isadd' => '0',
		'isfulltext' => '0',
		'listorder' => 14,
		'disabled' => '0'
		),
	'inputtime' => Array
		(
		'fieldid' => 17,
		'modelid' => 1,
		'field' => 'inputtime',
		'name' => '����ʱ��',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'datetime',
		'setting' => 'Array
	(
	\'format\' => \'Y-m-d H:i:s\',
	\'defaulttype\' => 1,
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => '0',
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => 1,
		'islist' => '0',
		'isshow' => '0',
		'isadd' => '0',
		'isfulltext' => '0',
		'listorder' => 15,
		'disabled' => '0'
		),
	'posids' => Array
		(
		'fieldid' => 18,
		'modelid' => 1,
		'field' => 'posids',
		'name' => '�Ƽ�λ',
		'tips' => 'ȫѡ<input boxid=\'posids\' type=\'checkbox\' onclick="checkall(\'posids\')" >',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'posid',
		'setting' => 'Array
	(

	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => '0',
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => '0',
		'islist' => '0',
		'isshow' => '0',
		'isadd' => '0',
		'isfulltext' => '0',
		'listorder' => 16,
		'disabled' => '0'
		),
	'groupids_view' => Array
		(
		'fieldid' => 19,
		'modelid' => 1,
		'field' => 'groupids_view',
		'name' => '�Ķ�Ȩ��',
		'tips' => 'ȫѡ<input boxid=\'groupids_view\' type=\'checkbox\' onclick="checkall(\'groupids_view\')" ><br>�������ʾ�����Ķ�',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'groupid',
		'setting' => 'Array
	(
	\'rolepriv\' => \'view\',
	\'defaultvalue\' => Array
		(
		0 => 3
		),
	\'fieldtype\' => \'CHAR\'
	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => '0',
		'isunique' => '0',
		'isbase' => '0',
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => '0',
		'islist' => '0',
		'isshow' => '0',
		'isadd' => '0',
		'isfulltext' => '0',
		'listorder' => 17,
		'disabled' => '0'
		),
	'readpoint' => Array
		(
		'fieldid' => 20,
		'modelid' => 1,
		'field' => 'readpoint',
		'name' => '�Ķ��������',
		'tips' => '',
		'css' => '',
		'minlength' => 1,
		'maxlength' => 5,
		'pattern' => '/^[0-9.-]+$/',
		'errortips' => '�Ķ���������Ϊ1��5λ��������',
		'formtype' => 'number',
		'setting' => 'Array
	(
	\'minnumber\' => \'0\',
	\'maxnumber\' => 99999,
	\'decimaldigits\' => \'0\',
	\'defaultvalue\' => \'0\'
	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => '0',
		'isunique' => '0',
		'isbase' => '0',
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => '0',
		'islist' => 1,
		'isshow' => 1,
		'isadd' => '0',
		'isfulltext' => '0',
		'listorder' => 18,
		'disabled' => '0'
		),
	'prefix' => Array
		(
		'fieldid' => 21,
		'modelid' => 1,
		'field' => 'prefix',
		'name' => 'html�ļ���',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => 20,
		'pattern' => '',
		'errortips' => '�ַ����ȱ���Ϊ0��20λ',
		'formtype' => 'text',
		'setting' => 'Array
	(
	\'size\' => 20,
	\'defaultvalue\' => \'\'
	)',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => '0',
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => '0',
		'islist' => '0',
		'isshow' => '0',
		'isadd' => '0',
		'isfulltext' => '0',
		'listorder' => 19,
		'disabled' => '0'
		),
	'pages' => Array
		(
		'fieldid' => 26,
		'modelid' => 1,
		'field' => 'pages',
		'name' => '��ҳ��ʽ',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => '0',
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'pages',
		'setting' => '',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => -99,
		'iscore' => '0',
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => '0',
		'islist' => '0',
		'isshow' => '0',
		'isadd' => 1,
		'isfulltext' => 1,
		'listorder' => 20,
		'disabled' => '0'
		),
	'listorder' => Array
		(
		'fieldid' => 23,
		'modelid' => 1,
		'field' => 'listorder',
		'name' => '����',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => 6,
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'number',
		'setting' => '',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => 1,
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => 1,
		'islist' => '0',
		'isshow' => '0',
		'isadd' => 1,
		'isfulltext' => '0',
		'listorder' => 97,
		'disabled' => '0'
		),
	'status' => Array
		(
		'fieldid' => 24,
		'modelid' => 1,
		'field' => 'status',
		'name' => '״̬',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => 2,
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'number',
		'setting' => '',
		'formattribute' => '',
		'forminfo' => '',
		'unsetgroupids' => '',
		'iscore' => 1,
		'issystem' => 1,
		'isunique' => '0',
		'isbase' => 1,
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => '0',
		'islist' => '0',
		'isshow' => '0',
		'isadd' => 1,
		'isfulltext' => '0',
		'listorder' => 98,
		'disabled' => '0'
		),
	'template' => Array
		(
		'fieldid' => 25,
		'modelid' => 1,
		'field' => 'template',
		'name' => '����ҳģ��',
		'tips' => '',
		'css' => '',
		'minlength' => '0',
		'maxlength' => 30,
		'pattern' => '',
		'errortips' => '',
		'formtype' => 'template',
		'setting' => 'array (
  \'size\' => \'\',
  \'defaultvalue\' => \'\',
)',
		'formattribute' => '',
		'forminfo' => '<font color="#FF0000">ֱ����ģ���ļ��������磺show</font>',
		'unsetgroupids' => -99,
		'iscore' => '0',
		'issystem' => '0',
		'isunique' => '0',
		'isbase' => '0',
		'issearch' => '0',
		'isselect' => '0',
		'isorder' => '0',
		'islist' => '0',
		'isshow' => '0',
		'isadd' => '0',
		'isfulltext' => '0',
		'listorder' => 99,
		'disabled' => '0'
		)
	)
?>