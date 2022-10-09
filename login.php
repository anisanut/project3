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
    <div class="container col-md-6">

        <h1 class="text-center"> Login </h1>
        <form action="login.php" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-2">
                    Email
                </div>
                <div class="col-md-10">
                    <input type="text" name="email" class="form-control" />
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    Password
                </div>
                <div class="col-md-10">
                    <input type="text" name="password" class="form-control" />
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    submit
                </div>
                <div class="col-md-10">
                    <input type="text" name="เข้าสู่ระบบ" class="form-control" />
                </div>
            </div>

        </form>
    </div>
</body>

</html>