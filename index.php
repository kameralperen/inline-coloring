<?php
require_once("baglan.php");
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <table width="500" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr height="30" bgcolor="#000000">
            <td align="left" style="color:white;">&nbsp;Ürün Adı</td>
            <td align="right" style="color:white;">Ürün Fiyatı&nbsp;</td>
        </tr>
        <?php
        $Sorgu  =   $db->prepare("SELECT * FROM products");
        $Sorgu->execute();
        $KayitSayisi    =   $Sorgu->rowCount();
        $Kayitlar       =   $Sorgu->fetchAll(PDO::FETCH_ASSOC);

        $BirinciRenk    =   "#dfdfdf";
        $IkinciRenk     =   "#FFFFFF";
        $RenkIcinSayi   =   0;

        foreach($Kayitlar as $Degerler){
            if($RenkIcinSayi%2==0){
                $ArkaPlanRengi  =   $BirinciRenk;
            }else{
                $ArkaPlanRengi  =   $IkinciRenk;
            }
        ?>
        <tr height="30" bgcolor="<?php echo $ArkaPlanRengi; ?>" onMouseOver="this.bgColor='#c2cedb';" onMouseOut="this.bgColor='<?php echo $ArkaPlanRengi; ?>';">
            <td align="left">&nbsp;<?php echo $Degerler["productName"]; ?></td>
            <td align="right"><?php echo $Degerler["buyPrice"]; ?>&nbsp;</td>
        </tr>
        <?php
        $RenkIcinSayi++;
        }
        ?>
    </table>
</body>
</html>
<?php
$db = null;
?>
