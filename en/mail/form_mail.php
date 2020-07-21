<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
<!--
body,td,th {
	font-family: Tahoma, Microsoft Sans Serif;
	font-size: 13px;
	color: #5e5e5e;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<form action="send_mail.php" method="post" enctype="multipart/form-data" name="checkForm" id="checkForm" onsubmit="return check()">
            <table width="691" border="0" cellspacing="0" cellpadding="4">
              <tr align="left" valign="middle">
                <td height="5" colspan="3"></td>
              </tr>
              <tr>
                <td width="32" align="left" valign="middle">&nbsp;</td>
                <td width="112" align="left" valign="middle">ชื่อ-นามสกุล<br />
                [Name]</td>
                <td width="523" align="left" valign="middle"><input name="name" type="text" id="name" size="40" /></td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">อีเมล์ของท่าน<br />
                [Email]</td>
                <td align="left" valign="middle"><input name="email" type="text" id="email" size="40" /></td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">หัวข้อ<br />
                  [Subject]</td>
                <td align="left" valign="middle"><input name="subject" type="text" id="subject" size="78" /></td>
              </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
                <td align="left" valign="top">ข้อความ<br />
                  [Message]</td>
                <td align="left" valign="middle"><textarea name="detail" cols="75" rows="5" id="detail"></textarea></td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle">&nbsp;</td>
                <td align="left" valign="middle"><input type="submit" name="Submit" value="ส่ง / SEND" /></td>
              </tr>
            </table>
          </form>
</body>
</html>
