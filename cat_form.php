<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./script/style.css" />
</head>
<body>
    <?php
      include "navbar.php";
    ?>

    <div class="container">

    

    <form action="cat_insert.php" method="post"  enctype="multipart/form-data">
       ประเภทสินค้า <input type="text" name="catname" /> <br/>
       แทรกรูป 
       <input type="file" name="photo" />
       <input type="submit" value="บึกทึกข้อมูล" />
    </form>

    </div>
</body>
</html>
