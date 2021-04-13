<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Diziler ve Hazır Fonksiyonlar</title>
</head>
<body>
    <h2>Php Programlama</h2>
    <h3>Sık kullanılan String Fonksiyonlar</h3>

    <?php
    
    $yazi="Kaan Oba - Front-end Developer";
    echo "$yazi <br><br>";

    // $yazi değişkenin içerisindeki değerlerin büyük harfe dönüştürülerek, $byazi değişkeninin içerisine aktarıp ekrana yazdırma işlemi:

    echo "<b> \$yazi değişkeninin içeriği: </b>" . $byazi= strtoupper($yazi);
    echo "<br><br> ";
    echo "<b> \$yazi değişkeninin içeriği: </b>" . $byazi= mb_strtoupper($yazi);
    echo "<br><br> ";
    
    // $byazi değişkeninin içindeki değer küçük harfe dönüştürülerek, $kyazi değişkeninin içerisine aktarıp ekrana yazdırma işlemi:

    echo "<b> \$yazi değişkeninin içeriği: </b>" . $kyazi= strtolower($byazi);
    echo "<br><br> ";
    echo "<b> \$yazi değişkeninin içeriği: </b>" . $kyazi= mb_strtolower($byazi);
    echo "<br><br> ";
    
    
    // $kyazi değişkenin içindeki değerin sadece ilk kelimenin ilk harfini büyüğe dönüştürerek $ilkyazi değişkenine aktarıp ekrana yazdırma işlemi :

    echo "<b> \$kyazi değişkeninin ilk harfinin büyütülmesi: </b>" . $ilkyazi= ucfirst($kyazi);
    echo "<br><br> ";

    // $kyazi değişkenini içerisindeki kelimelerin ilk harflerini büyütme işlemi:

    echo "<b> \$kyazi değişkeninin kelimelerinin ilk harflerinin büyütülmesi: </b>" . ucwords($kyazi);
    echo "<br><br> ";

    // $yazi değişkeninin içerisinde kullanılan karakter sayısını ekrana yazdırma:

    echo "<b> \$yazi değişkeninin içerisindeki karakter sayısı: </b>" . strlen($yazi);
    echo "<br><br> ";

    // $yazi değişkeninin içerisindeki ilk 21 karakterini ekrana yazdırma:

    echo "<b> \$yazi değişkeninin içerisindeki ilk 21 karakter: </b>" . substr($yazi,0,21);
    echo "<br><br> ";

    ?>


    


    
</body>
</html>