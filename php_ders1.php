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
    <?php
    echo "<h3>Matematiksel İşlemler</h3> ";

    echo "<h4>Toplama İşlemi</h4> ";
    
    $sayi1=15;
    $sayi2=5;
    echo "İşlem sonucu: $sayi1+$sayi2=";
    echo $sayi1+$sayi2;

    echo "<br> ";

    $sonuc=$sayi1+$sayi2;
    echo "<br> ";
    echo "$sayi1+$sayi2=$sonuc";


    echo "<h4>Çıkarma İşlemi</h4> ";
    
    $sayi1=15;
    $sayi2=5;
    echo "İşlem sonucu: $sayi1-$sayi2=";
    echo $sayi1-$sayi2;

    echo "<br> ";

    $sonuc=$sayi1-$sayi2;
    echo "<br> ";
    echo "$sayi1-$sayi2=$sonuc";


    echo "<h4>Çarpma İşlemi</h4> ";
    
    $sayi1=15;
    $sayi2=5;
    echo "İşlem sonucu: $sayi1*$sayi2=";
    echo $sayi1*$sayi2;

    echo "<br> ";

    $sonuc=$sayi1*$sayi2;
    echo "<br> ";
    echo "$sayi1*$sayi2=$sonuc";


    echo "<h4>Bölme İşlemi</h4> ";
    
    $sayi1=15;
    $sayi2=5;
    echo "İşlem sonucu: $sayi1/$sayi2=";
    echo $sayi1/$sayi2;

    echo "<br> ";

    $sonuc=$sayi1/$sayi2;
    echo "<br> ";
    echo "$sayi1/$sayi2=$sonuc";



    // Çift tırnak ve tek tırnak farkı 
    echo "<h3>Tırnaklar arasındaki fark</h3> ";
    $oyun="The Witcher 3";
    echo "$oyun ile Geralt a Rivia."; // Çift tırnak ile değişken içeriği okunur.
    echo "<br>";
    echo '$oyun \'u bu sene bitireceğim'; // tek tırnak değişkenin kendisini yazar.


    echo "<h3>Atama Operatörleri.</h3> ";

    $sayi=300;
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

    $sayi += 150; // $sayi= $sayi + 150
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";
    
    $sayi -= 50; 
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";
    
    $sayi /= 5; // $sayi = $sayi / 5
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";
   
    $sayi *= 15; 
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";
    
    $sayi++ ;  // $sayi= $sayi + 1
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

    $sayi-- ;  
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";
   
    ++$sayi ;  
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";

    --$sayi;  
    echo "\$sayi değişkeni içerisindeki değer: $sayi <br>";



    echo "<h3>Hazır Fonksiyonlar</h3> ";

    echo "<h5> Rand </h5> "; // Rasgele sayı üretir.

    $sayi= rand(0,100);
    echo "\$sayi içerisindeki rasgele üretilen değer: $sayi <br>";

    // Örnek; rasgele 0-100 arasında üretilen değer 50 den küçükse kaldı, değilse geçti yazsın

    if ($sayi >= 50) {
        echo "geçti- notunuz : $sayi";
    } else {
        echo "Kaldı- notunuz: $sayi";
    }



    ?>






<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>








    
</body>
</html>