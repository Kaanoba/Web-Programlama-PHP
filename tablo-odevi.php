<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/table.css">
    <title>Kişisel Bilgiler </title>
</head>
<body>
    
    <?php 
    echo "<h2>Kişisel Bilgiler</h2>";

    $isim="Kaan";
    $soyisim="Oba";
    $universite="Adnan Menderes Üniversitesi";
    $bolum="Aydın Meslek Yüksekokulu-Bilgisayar Programcılığı";
    $no="206001003";
    
    
    
    
    
    
    ?>


    <table cellspacing="0" cellpadding="0" class="table">
    <thead>
        <tr>
            <th>Üniversite</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>MYO</th>
            <th>No</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $universite; ?></td>
            <td><?php echo $isim; ?></td>
            <td><?php echo $soyisim; ?></td>
            <td><?php echo $bolum; ?></td>
            <td><?php echo $no; ?></td>
        </tr>     
    </tbody>






    </table>

    
    
    
    
   


    
</body>
</html>