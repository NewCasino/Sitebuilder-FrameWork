<?php
/*
File revision date: 12-Abr-2008
*/
if ( !defined('ON_SiTe')):
echo 'not for direct access';
exit;
endif;
?>
<script language="JavaScript" type="text/javascript">
<!--
function checkform ( form )
{
  if (form.host.value == "") {
    document.getElementById('t_host').style.color="#FF0000";
	form.host.focus();
    return false;
  }
  if (form.user.value == "") {
    document.getElementById('t_user').style.color="#FF0000";
	form.user.focus();
    return false;
  }
  if (form.password2.value != form.password.value) {
    document.getElementById('t_pass').style.color="#FF0000";
    document.getElementById('t_pass2').style.color="#FF0000";
	form.password2.focus();
    return false;
  }

  // ** END **
  return true;
}

function cleanform ( form )
{
  if (form.host.value != "") {
    document.getElementById('t_host').style.color="#2b2b2b";
  }
  if (form.user.value != "") {
    document.getElementById('t_user').style.color="#2b2b2b";
  }
  if (form.password.value != "") {
    document.getElementById('t_pass').style.color="#2b2b2b";
  }
  if (form.password2.value != "") {
    document.getElementById('t_pass2').style.color="#2b2b2b";
  }
  if (form.password2.value == form.password.value) {
    document.getElementById('t_pass').style.color="#2b2b2b";
    document.getElementById('t_pass2').style.color="#2b2b2b";
    document.getElementById('img').innerHTML="<img src='<?=$globvars['site_path'];?>/images/check_mark.gif'>";
  }else{
    document.getElementById('t_pass').style.color="#FF0000";
    document.getElementById('t_pass2').style.color="#FF0000";
    document.getElementById('img').innerHTML="<img src='<?=$globvars['site_path'];?>/images/cross_mark.gif'>";
  }

  // ** END **
}
//-->
</script>

<h3><img src="<?=$globvars['site_path'];?>/images/set_email.gif" alt="Paths">&nbsp;SMTP</h3>
<form name="form_smtp" id="form_smtp" class="form" action="<?=strip_address("set",$_SERVER['REQUEST_URI']).'&set=7';?>"  onsubmit="return checkform(this)" enctype="multipart/form-data" method="post">
  <p><h4 id="t_host">SMTP Server</h4>
    <input name="host" type="text" class="text" id="host" onchange="cleanform(document.form_smtp)" value="<?=$_SESSION['smtp']['host'];?>" size="80" maxlength="100">
    <br>
    <h4 id="t_user">Username</h4>
    <input name="user" type="text" class="text" id="user" onchange="cleanform(document.form_smtp)" value="<?=$_SESSION['smtp']['username'];?>" size="30" maxlength="50">
    <br>
    <h4 id="t_pass">Password</h4>
    <input name="password" type="password" class="text" id="password" onchange="cleanform(document.form_smtp)" value="<?=$_SESSION['smtp']['password'];?>" size="30" maxlength="30">
    <br>
    <h4 id="t_pass2">Repeat password</h4>
    <input name="password2" type="password" class="text" id="password2" onchange="cleanform(document.form_smtp)" value="" size="30" maxlength="30">
    <br>
  <h4 id="t_admin">Administrator Email</h4>
    <input name="admin_mail" type="text" class="text" id="admin_mail" onchange="cleanform(document.form_smtp)" value="<?=$_SESSION['smtp']['admin_mail'];?>" size="50" maxlength="100">
    <br>
  <br>
  </p>
  <p align="right">
    <input class="button" type="submit" name="save_smtp" id="save_smtp" value="Save" tabindex="3">
    </p>
</form>
