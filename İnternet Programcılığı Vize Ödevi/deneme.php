<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Yemek Listesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="yemek.css">
</head>

<body>
<form name="kisisel" method="post" action="formbilgileri4.php">
    <table>
        <tr>
            <td colspan="2" class="td1">Yemek Tarifini Girin</td>
        </tr>
        <tr>
            <td align="right" class="td2">Yemek Ad:</td>
            <td ><input type="text" name="YemekAdi" class="input1"></td>
        </tr>
        <tr>
            <td align="right" class="td2">Yemek Malzemeleri:</td>
            <td><input type="text" name="yemekMalzeme" class="input1"></td>
        </tr>
        <tr>
            <td align="right" class="td2"><input type="submit" name="gonder" value="Gönder" class="buton"></td>
            <td class="td2"><input type="reset" name="temizle" value="Temizle" class="buton"></td>
        </tr>
    </table>
</form>

</body>
</html>