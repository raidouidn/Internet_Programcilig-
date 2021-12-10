<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Yemek Tarifi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="yemek.css">
</head>
<body>
<?php
$yemekadi=$_POST['YemekAdi'];
$yemekMalzeme=$_POST['yemekMalzeme'];


?>
<table border="1" cellspacing="0">
    <tr>
        <td colspan="2" class="td1">Yemek Tarifi</td>
    </tr>
    <tr>
        <td class="td1">Yemek Adı:</td>
        <td class="td3"><?php echo $yemekadi; ?></td>
    </tr>
    <tr>
        <td class="td1">Yemek Malzeme:</td>
        <td class="td3"><?php echo $yemekMalzeme; ?></td>
    </tr>
</table>

<A HREF="javascript:javascript:history.go(-1)" class="link">Geri dön</A>

</body>
</html>