<?php
include_once($staticvars['local_root'].'general/return_module_id.php');
$help_news=return_id('email_alert_help.php');
$create_news=return_id('email_alert.php');
?>
<table width="100%" border="0">
  <tr>
    <td class="header_text_1">Alerts</td>
  </tr>
  <tr>
    <td class="body_text">Want the leatest resources? create a notification alert and be the first to know...</td>
  </tr>
  <tr>
    <td class="body_text"><img src="<?=$staticvars['site_path'];?>/modules/email_alerts/images/salert.gif" alt="Criar notifica&ccedil;&otilde;es" width="16" height="16">
	<a class="body_text" href="<?=session($staticvars,'index.php?id='.$create_news);?>">Create</a></td>
  </tr>
  <tr>
    <td class="body_text"><img src="<?=$staticvars['site_path'];?>/modules/email_alerts/images/shelp.gif" alt="Ajuda notifica&ccedil;&otilde;es" width="16" height="16">
	<a class="body_text" href="<?=session($staticvars,'index.php?id='.$help_news);?>">What's this?</a></td>
  </tr>
</table>



