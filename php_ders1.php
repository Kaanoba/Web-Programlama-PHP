<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PHP temelleri</title>


</head>
<body>
    <h4>Php Programlama</h4>
    <?php
    /* php açıklama satırı */
    // Tek satır açıklama

    echo "Hello World";
    echo "<h3> Adü -Aymes</h3> <hr> "."Bilgisayar Programcılığı";
    // echo "<h3> Adü -Aymes</h3> <hr> Bilgisayar Programcılığı";

    echo "<h4>Değişken tanımlamada dikkat edilecek hususlar..</h4> ";

    echo " <ol>
                <li> Php de değişken isimleri $ işareti ile başlar </li>
                <li> Php de değişken isimleri sayısal ifadelerler başlayamaz.</li>
                <li> Php de değişken isimleri iki kelimeden oluşuyorsa - veya _ kullanılır.</li>
                <li> Php de değişken isimlerinde Türkçe karakter kullanılmamalıdır.</li>
                <li> Php de değişken isimlerinde büyük-küçük harf duyarlılığı vardır.</li>
                <li> Php de değişken içeriğinde eğer metinsel ifade varsa \" veya ' kullanılır.</li>
                <li> Php de değişken içeriğinde eğer sayısal ifade varsa tırnak kullanmadan direk yazılır</li>
                
            </ol>
    ";
     
    echo "<h3>Değişken tanımlama </h3> ";

    $isim="Kaan";
    $soyisim="Oba";
    echo "$isim $soyisim";               // echo $isim .""  $soyisim; nokta operatörü birleştirme yapar

    
    ?>







<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>








    
</body>
</html>