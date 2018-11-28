<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8" />
 <link href="http://www.cs.nott.ac.uk/~pszpxb/gumby.css" rel="stylesheet"
 type="text/css" />
 <style>
 table, th, td {
 border: 1px solid black;
 }
 table.MsoTableGrid {
 border: solid windowtext 1.0pt;
 font-size: 11.0pt;
 font-family: "Calibri",sans-serif;
 }
 p.MsoNormal {
 margin-top: 0cm;
 margin-right: 0cm;
 margin-bottom: 8.0pt;
 margin-left: 0cm;
 line-height: 107%;
 font-size: 11.0pt;
 font-family: "Calibri",sans-serif;
 }
 .auto-style1 {
 width: 406px;
 }
 </style>
 <title>Display What You Sent</title>
<?php
$cn = $_POST['coursename'];
$cid = $_POST['courseid'];
$pid = $_POST['number1id'];
$pname = $_POST['name1'];
?>
</head>
<body>
<table>
 <thead>Did Your Data Arrive?</thead>
 <tr>
 <td>
 <form action="MyBBDDinterface.html" method="post">
 <table>
 <tr>
 <th colspan="4">First Row of Inner Table</th>
 </tr>
<tr>
 <th>Name</th>
 <th>ID</th>
 <th>Course ID</th>
<th>Course Title</th>
 </tr>
 <tr>
 <td><p><?php echo $pname; ?></p></td>
 <td><p><?php echo $pid; ?></p></td>
 <td><p><?php echo $cid; ?></p></td>
<td><p><?php echo $cn; ?></p></td>
 </tr>
<tr>
 <td colspan="4"><input type="submit" value= "Return To Page"
/></td>
 </tr>
 </table>
 </form>
 </td>
 </tr>
</table>
</body>
</html>
