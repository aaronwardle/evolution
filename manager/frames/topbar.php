<?php 
if(IN_MANAGER_MODE!="true") die("<b>INCLUDE_ORDERING_ERROR</b><br /><br />Please use the MODx Content Manager instead of accessing this file directly.");
	
	$enable_debug=false;

	// close the session as it is not used here
	// this should speed up frame loading, does it?
	session_write_close();
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Top bar</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $etomite_charset; ?>">
<style>
body {
	margin : 0px 0px 0px 0px;
	background: #4791C5;
}

SPAN, TD {
	font-family:Verdana, Arial, Helvetica, sans-serif; 
	color: White;
}
TD {
	padding-top: 4px;
	font-size:11px;
}
SPAN {
	font-size:10px;
}
a, a:hover, a:visited, a:active {
	font-family:Verdana, Arial, Helvetica, sans-serif; 
	font-size:10px;
	color: White;
	text-decoration:none;
}
</style>
</head>
<body>
<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="height:20px;">
  <tr>
    <td width="10">&nbsp;</td>
    <td valign="middle">
		<span id=tocText></span>
		<span id=buildText>&nbsp;&nbsp;<img src='media/images/icons/b02.gif' align='absmiddle' width='16' height='16'>&nbsp;<b><?php echo $_lang['loading_doc_tree']; ?></b></span>
		<span id=workText>&nbsp;<img src='media/images/icons/delete.gif' align='absmiddle' width='16' height='16'>&nbsp;<b><?php echo $_lang['working']; ?></b></span>
	</td>
    <td>&nbsp;</td>
    <td align='right' nowrap="nowrap">
    	<b><?php echo $site_name ;?></b> - <b><?php echo $full_appname; ?> | <img src="media/images/icons/user.gif" align='absmiddle' width='16' height='16' />&nbsp;<?php echo $modx->getLoginUserName();?></b>
    	<?php if($modx->hasPermission('messages')) {?>
    		<span id="newMail" style="display:none;font-size:11px;"> <b>|</b> <a href="index.php?a=10" title="<?php echo $_lang["you_got_mail"]; ?>" target="main"><img src="media/images/icons/mailalert.gif" align='absmiddle' border="0" width='16' height='16' /></a></span>
    	<?php } ?>
    </td>
    <td width="20">&nbsp;</td>
  </tr>
</table>


</body>
</html>