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
-->
</style></head>

<body>
<center>
<?

$emailto='bigbeeclinic@hotmail.com'; //อีเมล์ผู้รับ 

$subject=$_POST[subject];//รับค่าหัวข้อจากหน้าแบบฟอร์ม
$messages=$_POST[detail];//รับค่าข้อความจากหน้าแบบฟอร์ม
$sender=$_POST[email];//รับค่าอีเมล์ผู้ส่งจากหน้าแบบฟอร์ม
$name=$_POST[name];//รับค่าชื่อผู้ส่งจากหน้าแบบฟอร์ม
$header.= "Content-type: text/html; charset=UTF-8\n"; //รูปแบบอักษร
$header.="from:$sender "; //ชื่อและอีเมลผู้ส่ง 
$messages.= "</br><hr>"; //ข้อความ 
$messages.= "From : $name<br>Email : $sender";//ข้อความ 
//ตรวจสอบว่ากรอกข้อมูลในแบบฟอร์มครบทุกช่องหรือไม่
//ถ้าไม่ครบให้กลับไปกรอกข้อมูลใหม่
if ($subject=="" or $messages=="" or $sender=="" or $name=="")
{
	echo"<font color='#ff0000'>กรุณากรอกข้อมูลให้ครบทุกช่อง : Please fill in all boxes</font>";
	$time_delay = 2;
	print "<meta http-equiv='refresh' content='$time_delay; url=form_mail.php'>";
	exit();
}
//ถ้าครบแล้วให้ส่งอีเมล์ทันที
elseif(mail($emailto,$subject,$messages,$header))
{
//หากส่งอีัเมล์สำเร็จให้แสดงข้อความ
echo "<font color='#0099ff'>ข้อความของท่านส่งถึง บิ๊กบี คลีนิก เรียบร้อยแล้ว กรุณารอการติดต่อกลับจากเรา <br> Thank You, Your Contact Online has been sent to BigBee Clinic. Please wait for our response.</font>";
$time_delay = 8;
	print "<meta http-equiv='refresh' content='$time_delay; url=form_mail.php'>";
}
else
{
//หากส่งไม่สำเร็จให้แสดงข้อมูล
echo "<font color='#ff9933'>ไม่สามารถส่งข้อความของท่านได้ในขณะนี้ กรุณาติดต่อเราอีกครั้งในภายหลัง <br> Sorry, Your Contact Online cannot be send to BigBee Clinic. Please Contact online again.</font>";
$time_delay = 8;
	print "<meta http-equiv='refresh' content='$time_delay; url=form_mail.php'>";
}
?>
</center>
</body>
</html>
