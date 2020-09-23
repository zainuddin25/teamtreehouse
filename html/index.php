
<?php
    $name = "RamezZ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Treehouse</title>
<link rel="stylesheet" href="asset/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/css/all.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-light">
                <div class="d-flex flex-column mt-5">
                    <img class="d-flex align-self-center" src="asset/images/logo.jpg" alt="ini logo" width="75px" height="100">
                </div>
                <div class="d-flex flex-column m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-muted">   <?php echo $name; ?>   </p>
                    </div>
                </div>
            </div>
            <div class="content col-lg-8 p-0 vh-100">
                <div class="d-flex flex-column">
                    <p class="h2 pt-4 pl-5">My Firts Pratice PHP</p>

                    <section class="pl-5">
                        <p class="h2">Unit</p>
                        <?php include "inc\units.php";?>
                        <p class="lead"><?php echo celciusToFarenhaite(100);?></p>
                    </section>

                    <div class="d-flex flex-column">
                        <p class="h2">String</p>
                        <?php include "inc\string.php" ?>
                    <p class="lead"><?php echo askName("Muhammad Zainuddin Basyar");?></p>
                    </div>

                    <div class="d-flex flex-column border position-absolute fixed-bottom">
                        <p class="font-weight-normal mx-auto flex-self-center">&copy; <?php echo $name; echo " Last Modifed : "
                        .date("F d Y H:i:s.", getlastmod());?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="asset/css/js/jquery-3.5.1.slim.min.js"></script>
    <script src="asset/css/js/popper.min.js"></script>
    <script src="asset/css/js/bootstrap.min.js"></script>
</body>
</html>