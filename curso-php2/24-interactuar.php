<?php
    $zorro =[
    "https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1",
    "https://i.pinimg.com/736x/12/87/1b/12871b6e8385373148359ec16391f60f.jpg",
    "https://i0.wp.com/imagenesparapeques.com/wp-content/uploads/2022/03/Flork-14.png?resize=498%2C322&ssl=1",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1IeYBN05o8IgBtr0rdj4MgMeo6HW3g1FmKA&usqp=CAU",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgJlOm0uArEiT-JbEhwDTfRKc7zWmMf8rVew&usqp=CAU"
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Hola! Esto es HTML</H1>
    <br>
    <?php echo "Y esto PHP dentro del HTML"?>
    <hr>
    <?php foreach ($zorro as $zorro) {    ?>
    <img src=" <?php echo $zorro  ?>">
    <?php } ?>
</body>
</html>
