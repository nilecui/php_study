<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>管理中心登陆 V1.0</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
<?php require_once 'common.php';?>
</HEAD>
<BODY onload=document.form1.name.focus();>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" bgColor=#002779 
border=0>
  <TR>
    <TD align=middle>
      <TABLE cellSpacing=0 cellPadding=0 width=468 border=0>
        <TR>
          <TD><IMG height=23 src="images/login_1.jpg" 
          width=468></TD></TR>
        <TR>
          <TD><IMG height=147 src="images/login_2.jpg" 
            width=468></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=468 bgColor=#ffffff border=0>
        <TR>
          <TD width=16><IMG height=179 src="images/login_3.jpg" 
            width=16></TD>
          <TD align=middle>
            <TABLE cellSpacing=0 cellPadding=0 width=230 border=0>
              <FORM name=form1 action="loginProcess.php" method=post>
              <TR height=5>
                <TD width=5></TD>
                <TD width=56></TD>
                <TD></TD></TR>
              <TR height=36>
                <TD></TD>
                <TD>ID</TD>
                <TD><INPUT 
                  style="BORDER-RIGHT: #000000 1px solid; BORDER-TOP: #000000 1px solid; BORDER-LEFT: #000000 1px solid; BORDER-BOTTOM: #000000 1px solid" 
                  maxLength=30 size=24 value="<?php echo getCookie("id");?>" name="id"></TD></TR>
              <TR height=36>
                <TD>&nbsp; </TD>
                <TD>密&nbsp;&nbsp;&nbsp;码</TD>
                <TD><INPUT 
                  style="BORDER-RIGHT: #000000 1px solid; BORDER-TOP: #000000 1px solid; BORDER-LEFT: #000000 1px solid; BORDER-BOTTOM: #000000 1px solid" 
                  type=password maxLength=30 size=24 value="" 
                name="password"></TD></TR>
              <TR height=36>
                  <TD>&nbsp; </TD>
                  <TD>验&nbsp;证&nbsp;码</TD>
                  <TD><INPUT
                          style="BORDER-RIGHT: #000000 1px solid; BORDER-TOP: #000000 1px solid; BORDER-LEFT: #000000 1px solid; BORDER-BOTTOM: #000000 1px solid"
                          maxLength=15 size=24 value=""
                          name="code">
                  </TD>
                  <TD>&nbsp;<img src="checkCode.php" onclick="this.src='checkCode.php?aa='+Math.random()"/></TD>
              </TR>
              <TR height=5>
              	<TD>&nbsp; </TD>
                <TD colSpan=2><input type="checkbox" name="keep" value="yes"></input><font>保存登录ID</font></TD></TR>
              <TR>
                <TD>&nbsp;</TD>
                <TD>&nbsp;</TD>
                <TD><INPUT type=image height=18 width=70 
                  src="images/bt_login.gif">
                <?php 
					//接收error
					if(isset($_GET["error"])){
						//if (empty($_GET['error'])){
							//接收错误编号
							//@$error=$_GET['error'];
							$err=$_GET['error'];
							if($err==1){
								echo "<br><font color='red' size='3'>你的用户名或密码错误!</font>";
							}
                            else if($err==2)
                            {
                                echo "<br><font color='red' size='3'>验证码错误!</font>";
                            }
						//}
					}
				?>
                  </TD></TR>
               </FORM>
               </TABLE>
             </TD>
          <TD width=16><IMG height=179 src="images/login_4.jpg" 
            width=16></TD></TR></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=468 border=0>
        <TR>
          <TD><IMG height=16 src="images/login_5.jpg" 
          width=468></TD></TR></TABLE>
	</TD>
  </TR>
</TABLE>
</BODY>
</HTML>
