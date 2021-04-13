<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Diziler</title>
</head>
<body>
        <h2>Diziler</h2>
        <h3>Dizilerin Özellikleri</h3>

        <ol>
            <li>Dizi oluşturmak için array fonksiyonu kullanılır.</li>
            <li>Dizilerin içerisinde birden çok değer bulunabilir ("Php","Java",15,20) </li>
            <li>echo $dizi_ismi şeklinde ekrana yazdırılamaz. Bu komutun sonucu sadece ekrana (Array to string conversion) ARRAY yazar.
                Diziyi ekrana yazdırır: print_r($dizi) 
            </li>
            <li>Dizi içerisindeki indisler tek olarak da çağırılabilir. Yani sadece 3. indisli dizi elemanına ulaşılabilir. Dizinin sadece istenilen elemanına erişmek için echo komutu kullanılır.
                Dizinini elemanını ekrana yazdırır: echo $dizi1[3];
            </li>
            <li>Dizi içerisinde metinsel ifadeler çift tırnak ile oluşturulur.</li>                      
            <li>Dizi içerisinde sayısal ifadeler herhangi bir parantez veya tırnak işaretine gerek kalmadan virgülle ayrılarak yazılabilir.</li>
            <li>Dizi içerisinde indisler varsayılan olarak 0 ile başlar</li>
            <li>Diziler içerisinde yeni diziler oluşturulabilir.</li>
        </ol>


        <?php
        
        $dizi1 = array("Html","CSS","Javascript",10,2,3);
        $dizi2 = ["PHP","Node JS","Bootstrap",1,2];

        echo "<pre>";
        print_r($dizi1);
        echo "</pre>";
        

        echo "<b>Dizinin 3. indisinin çıktısı: </b>" . $dizi1[3];

        echo "<pre>";
        print_r($dizi2);
        echo "</pre>";

        echo "Dizinin 0. indisi: <b> " . $dizi2[0] ."</b><br>";
        echo "Dizinin 1. indisi: <b> " . $dizi2[1] ."</b><br>";
        echo "Dizinin 2. indisi: <b> " . $dizi2[2] ."</b><br>";
        echo "Dizinin 3. indisi: <b> " . $dizi2[3] ."</b><br>";
        echo "Dizinin 4. indisi: <b> " . $dizi2[4] ."</b><br>";
        
        
        
        
        
        ?>



    
</body>
</html>