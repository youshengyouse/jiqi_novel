<?php
$this->_tpl_vars['jieqi_pagetitle'] = "�һ�����-{$this->_tpl_vars['jieqi_sitename']}";
echo '<link rel="stylesheet" rev="stylesheet" href="'.$this->_tpl_vars['jieqi_themeurl'].'style/login.css" type="text/css" media="all" />
<link rel="stylesheet" href="'.$this->_tpl_vars['jieqi_url'].'/scripts/validator-0.7.0/jquery.validator.css" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/scripts/validator-0.7.0/jquery.validator.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/scripts/validator-0.7.0/local/zh_CN.js"></script>
<!--box_mid begin-->
<div class="box_mid fix">
  <div class="regist fix">
    <h4>�һ�����</h4>
    <div class="step_sn1"></div>
    <div class="box_form">
     <form id="signup_form"  action="'.geturl('system','getpass').'" method="post" class="signup" data-validator-option="{theme:\'simple_right\'}" autocomplete="off">
<fieldset>
    <div class="form-item">
        <div class="field-name">�û���</div>
        <div class="field-input">
          <input type="text" name="uname" maxlength="20" data-rule="�û���: required;username" autocomplete="off">
        </div>
    </div>
    <div class="form-item">
        <div class="field-name">���䣺</div>
        <div class="field-input">
          <input type="text" name="email" maxlength="20" autocomplete="off"  data-rule="����: required;email;" >
        </div>
    </div>
    <div class="form-item">
        <div class="field-name">��֤�룺</div>
        <div class="field-input">
          <input type="text" name="checkcode" autocomplete="off" class="yzm">
          <img src="'.$this->_tpl_vars['jieqi_local_url'].'/checkcode.php" width="90" height="35" class="pic" id="checkcodeimg" /><a id="recode" class="f_org2 pl10" href="javascript:;" onclick="$(\'#checkcodeimg\').attr(\'src\',\''.$this->_tpl_vars['jieqi_local_url'].'/checkcode.php?rand=\'+Math.random());">��һ��</a>
        </div>
    </div>
</fieldset><input type="hidden" name="formhash" value="';
echo form_hash(); 
echo '">
    <button id="btn-submit" class="btn-sn" type="submit">�������뵽����</button><a href="javascript:history.back(-1);" class="back pl10">����</a>
</form>
    </div>
    <p class="remind">��ܰ��ʾ��ϵͳ�ᷢ��һ�����������ʼ������ṩ�������ַ���밴���ʼ��ṩ�Ĳ�����������������롣</p>
  </div>
  <div class="remark">   
    <div class="t">����'.$this->_tpl_vars['jieqi_sitename'].'�ʺţ� <a href="'.geturl('system','login').'" class="dl">�� ¼</a></div>
    <dl>
     <dt>ע���Ϊ'.$this->_tpl_vars['jieqi_sitename'].'��Ա����ӵ�У�</dt>
     <dd>&middot;ӵ�к�������ղظ��ͼ��</dd>
     <dd>&middot;Ͷ�Ƽ�Ʊ��ϲ����С˵,֧�����ߴ���</dd>
     <dd>&middot;��ΪVIP,�½ڶ������Ż�</dd>
     <dd>&middot;�����Ա,��õ��ϼ���Ʒ��㿴</dd>
    </dl>
    <dl>
     <dt class="tt">�ͷ�����</dt>
     <dd>����ʱ�䣺9:00-17:30</dd>
     <dd>����Q Q ��724171887</dd>
     <dd>����Q Q ��724171887</dd>
     <dd>�ͷ��绰��029-89685328</dd>
     <dd>�ͷ����䣺shkf@shuhai.com</dd>
     <dd>�������䣺swkf@shuhai.com</dd>
    </dl>
  </div>
</div><!--box_mid end-->
<script type="text/javascript">

</script>';
?>