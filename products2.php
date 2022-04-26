<?php
session_start();
$chocoType='';
if(isset($_SESSION['type'])){
    if($_SESSION['type']!='C' && $_SESSION['type']!='E' && $_SESSION['type']!='M'){
        header('location:loginCust.php');
    }

}
else{
    header('location:loginCust.php');
}
?>
<?php error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['search'])){
    $f=0;
    $qsLogin='';
    $con='';

    @$con = new mysqli('localhost', 'root', '', 'web project');
    $qsLogin="SELECT * FROM `chocolate`";
    $res=$con->query($qsLogin);
   for($i=0;$i<$res->num_rows;$i++) {
       $row = $res->fetch_row();
?>

              <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row[3]) ; ?>" />
<?php
   }

}

if(isset($_POST['action2'])){
    $chocoType=$_POST['submit2'];
    echo $chocoType;
}
if(isset($_POST['action'])){
    $val=$_POST['submit'];

$f=0;
$qsLogin='';
$con='';

@$con = new mysqli('localhost', 'root', '', 'web project');
$qsLogin="DELETE FROM `chocolate` WHERE `SerealNumber`='".$val."'";
$res=$con->query($qsLogin);
$con->commit();
$con->close();
}
if(isset($_POST['addProd'])) {
    if ($_FILES['imageadd']['error'] > 0) {
        echo 'Problem: ';
        switch ($_FILES['imageadd']['error']) {
            case 1:
                echo 'File exceeded upload_max_filesize';
                break;
            case 2:
                echo 'File exceeded max_file_size';
                break;
            case 3:
                echo 'File only partially uploaded';
                break;
            case 4:
                echo 'No file uploaded';
                break;
            case 6:
                echo 'Cannot upload file: No temp directory specified';
                break;
            case 7:
                echo 'Upload failed: Cannot write to disk';
                break;
        }
        exit;
    }
    if ($_FILES['imageadd']['type'] != 'image/png') {

        echo '<script>alert("only images with extension .png is allowed") </script>';
//        header('location:products2.php');
        exit;
    }
    $upfile = 'C:\xampp\uploded_files/' . $_FILES['imageadd']['name'];
    if (is_uploaded_file($_FILES['imageadd']['tmp_name'])) {
        if (!move_uploaded_file($_FILES['imageadd']['tmp_name'], $upfile)) {
            echo 'Problem: Could not move file to destination directory';
            exit;
        }
    } else {
        echo 'Problem: Possible file upload attack. Filename: ';
        echo $_FILES['imageadd']['name'];
        exit;
    }
    $file1 = basename($upfile);
    $urlimg = 'C:\xampp/uploded_files/' . $file1;
    $image = $_FILES['imageadd']['name'];
    $imgContent = addslashes(file_get_contents($urlimg));
    if (isset($_POST['addProductName']) && isset($_POST['addProductSereal'])) {
        $qrstr2='';
        try {
            $conn = new mysqli('localhost', 'root', '', 'web project');
            $qrstr = "INSERT INTO `chocolate` (`SerealNumber`, `nameP`, `typeT`, `img`) VALUES ('" . $_POST['addProductSereal'] . "', '" . $_POST['addProductName'] . "', '" . $_POST['typeT'] . "', '" .$imgContent . "');";

            if($chocoType=='Revera'){
                $qrstr2="INSERT INTO `revera` (`rowN`, `price`, `SerealNumber`) VALUES (NULL, '40', '" . $_POST['addProductSereal']. "');";

            }
            elseif ($chocoType=='Lorka'){
                $qrstr2="INSERT INTO `lorka` (`rowN`, `price`, `SerealNumber`) VALUES (NULL, '55', '" . $_POST['addProductSereal']. "');";

            }
            elseif ($chocoType=='bnuts'){
                $qrstr2="INSERT INTO `best`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'65','n','" . $_POST['addProductSereal']. "')";
            }
            elseif ($chocoType=='bfill'){
                $qrstr2="INSERT INTO `best`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'65','f','" . $_POST['addProductSereal']. "')";
            }
            elseif ($chocoType=='bocc'){
                $qrstr2="INSERT INTO `best`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'65','occ','" . $_POST['addProductSereal']. "')";
            }
            elseif ($chocoType=='gour'){
                $qrstr2="INSERT INTO `best`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'80','gour','" . $_POST['addProductSereal']. "')";
            }
            elseif ($chocoType=='dr'){
                $qrstr2="INSERT INTO `best`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'80','dr','" . $_POST['addProductSereal']. "')";
            }
            elseif ($chocoType=='gmd'){
                $qrstr2="INSERT INTO `best`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'80','gmd','" . $_POST['addProductSereal']. "')";
            }
            else{
                $qrstr2="INSERT INTO `best`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'80','gocc','" . $_POST['addProductSereal']. "')";
            }

            $res = $conn->query($qrstr);
            $res2=$conn->query($qrstr2);
            if ($res == 1) {
                header('location:products2.php');
            } else {
                echo '<script>alert("some data entered is wrong") </script>';
            }
            $conn->commit();
            $conn->close();
        } catch (Exception $ex) {

        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/css_item.css">
    <link rel="stylesheet" href="css/productBorder.css">
    <link rel="stylesheet" href="css/mainPage.css">
    <link rel="stylesheet" href="css/loginDiv.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
</head>
<body style="background-color: #c8d9d1">
<section id="container" style="background-color: #d6d5d5">
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo" style="margin: 0px"><img src="images/logo.png" alt="" style="width: 60px;height: 60px">Alhijaz chocolate LTD
        </a>
        <!--logo end-->

        <div class="top-menu " style="padding-top:19px ">
            <ul class="nav top-menu justify-content-end">

                <?php
                if($_SESSION['type']=='C'){
                    echo '
                <li><img src="images/Untitled.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 34px;height: 30px;margin-right: 30px;margin-top: -4px;" alt=""></a></li>
                    ';

                }
                ?>
                <li><a class="logout" href="loginCust.php">Logout</a></li>
            </ul>
        </div>

    </header>
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="mt">
                    <a class="" href="javascript:;">
                        <form action="manePageCustomer.php">
                            <input class="kind4" type="submit" value="Home" name="home" id="home">
                        </form>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;"> <span class="main_menu">Orders</span></a>

                    <ul class="sub">
                        <li>
                            <a href="javascript:;">
                                <form action="manger3.html">
                                    <input class="kind4" type="submit" value="All Customers orders" name="allO" id="allO">
                                </form>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <form action="manger3.html">
                                    <input class="kind4" type="submit" value="My Customers orders" name="empO" id="empO">
                                </form>
                            </a>
                        </li>
                    </ul>
                </li>
                <form action="products2.php" method="post">
                    <input type="hidden" name="action2" value="submit2" id="submit2" />
                    <li class="sub-menu">
                        <a href="javascript:;" class="aSi">

                            <span class="main_menu">Gourmet</span>
                        </a>
                        <ul class="sub">
                            <li>
                                <a href="javascript:;">
                                    <button class="kind4" name="submit2" type="submit" value="gour" id="gour">Gourmet</button>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <button class="kind4" name="submit2" type="submit" value="dr" id="dr">Dragee</button>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:;">
                                    <button class="kind4" name="submit2" type="submit" value="gmd" id="gmd">chocoMedjool</button>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:;">
                                    <button class="kind4" name="submit2" type="submit" value="gocc" id="gocc">Occasions</button>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="aSi">

                            <span class="main_menu inpSi1">Best</span>
                        </a>
                        <ul class="sub">
                            <li>
                                <a href="javascript:;">
                                    <button class="kind4" name="submit2" type="submit" value="bn" id="bn">Best Nuts</button>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <button class="kind4" name="submit2" type="submit" value="bf" id="bf">Best Fill</button>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <button class="kind4" name="submit2" type="submit" value="bocc" id="bocc">Occasions</button>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">

                        <a href="javascript:;" class="aSi">
                            <button class="kind4" name="submit2" type="submit" value="Lorka" id="Lorka">Lorka</button>
                        </a>

                    </li>
                    <li class="sub-menu" >
                        <a href="javascript:;" class="aSi " >
                            <button class="kind4" name="submit2" type="submit" value="Revera" id="Revera">Revera</button>
                        </a>
                    </li>

                </form>
<!--                <form action="products2.php" method="post">-->
<!--                <li class="sub-menu">-->
<!--                    <a href="javascript:;">-->
<!---->
<!--                        <span class="main_menu">Gourmet</span>-->
<!--                    </a>-->
<!--                    <ul class="sub">-->
<!--                        <li>-->
<!--                            <a href="javascript:;">-->
<!---->
<!--                                    <input class="kind4" type="submit" value="Gourmet" name="gmedit" id="gmedit">-->
<!---->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="javascript:;">-->
<!---->
<!--                                    <input class="kind4" type="submit" value="Dragee" name="gde" id="gde">-->
<!---->
<!--                            </a>-->
<!--                        </li>-->
<!---->
<!--                        <li>-->
<!--                            <a href="javascript:;">-->
<!---->
<!--                                    <input class="kind4" type="submit" value="chocoMedjool"name="gchme" id="gchme">-->
<!---->
<!--                            </a>-->
<!--                        </li>-->
<!---->
<!--                        <li>-->
<!--                            <a href="javascript:;">-->
<!---->
<!--                                    <input class="kind4" type="submit" value="Occasions" name="gocce" id="gocce">-->
<!---->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="sub-menu">-->
<!--                    <a href="javascript:;">-->
<!---->
<!--                        <span class="main_menu">Best</span>-->
<!--                    </a>-->
<!--                    <ul class="sub">-->
<!--                        <li>-->
<!--                            <a href="javascript:;">-->
<!---->
<!--                                    <input class="kind4" type="submit" value="Best Nuts" name="bne" id="bne">-->
<!---->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="javascript:;">-->
<!---->
<!--                                    <input class="kind4" type="submit" value="Best Fill" name="bfe" id="bfe">-->
<!---->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="javascript:;">-->
<!---->
<!--                                    <input class="kind4" type="submit" value="Occasions" name="bocce" id="bocce">-->
<!---->
<!--                            </a>-->
<!---->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="sub-menu">-->
<!---->
<!--                    <a href="javascript:;">-->
<!---->
<!--                            <input class="kind4" type="submit" value="Lorka" name="lorkae" id="lorkae">-->
<!---->
<!--                    </a>-->
<!---->
<!--                </li>-->
<!--                <li class="sub-menu">-->
<!--                    <a href="javascript:;">-->
<!---->
<!--                            <input class="kind4" type="submit" value="Revera" name="reverae" id="reverae">-->
<!---->
<!--                    </a>-->
<!--                </li>-->
<!--                </form>-->
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <form action="products2.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="submit" id="submit" />
        <section id="main-content"style="background-color: #c8d9d1;">
            <section class="wrapper">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-3" >

                            <div style="">

                                    <table>
                                        <tr>
                                            <td colspan="2">

                                                <input type="button" class="productBuy" name="uploadImg" value="Add item" data-bs-toggle="modal" data-bs-target="#staticBackdrop123">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <p class="please_type">Select the type of the chocolate:</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input  type="radio" id="all" value="All" name="typeChoco" style="">

                                            </td>
                                            <td class="TR_typeLabel">
                                                <label class="label_css1" for="all">All Types</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="radio" id="dark" value="Dark" name="typeChoco">

                                            </td>
                                            <td class="TR_typeLabel">
                                                <label  class="label_css1"for="dark">Dark</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="radio" id="milk" value="Milk" name="typeChoco">

                                            </td>
                                            <td class="TR_typeLabel">
                                                <label class="label_css1" for="milk">Milk</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="radio" id="white" value="White" name="typeChoco">

                                            </td>
                                            <td class="TR_typeLabel">
                                                <label class="label_css1" for="white">White</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">

                                                <div class="wrap-input100 validate-input"  style="border-color: #2f323a;margin-bottom: 0px;">
<!--                                                    <p class="please_type label-input100 "><i class="fa-solid fa-magnifying-glass-arrow-right fs-5"></i> Search by name:</p>-->
                                                    <input class="input100" type="text" name="prodName" placeholder="Type product name" style="color: #2f323a">
                                                    <span class="focus-input100" ></span>

                                                </div>
                                                <input type="submit" name="search" class="productBuy" value="search" style="width: 100px">
                                            </td>

                                        </tr>
                                    </table>

                            </div>
                        </div>

                        <div class="col-9">

                            <?php
                            $qsLogin='';
                            $con='';

                            @$con = new mysqli('localhost', 'root', '', 'web project');
                            if($chocoType=='Revera'){
                                $qsLogin="SELECT * FROM `chocolate`,`revera` WHERE chocolate.SerealNumber=revera.SerealNumber;";
//
                            }
                            elseif ($chocoType=='Lorka'){
                                $qsLogin="SELECT * FROM `chocolate`,`lorka` WHERE chocolate.SerealNumber=lorka.SerealNumber;";
//
                            }
                            elseif ($chocoType=='bnuts'){
                                $qsLogin="SELECT * FROM `chocolate`,`best` WHERE (chocolate.SerealNumber=best.SerealNumber)&& type='n';";
                            }
                            elseif ($chocoType=='bfill'){
                                $qsLogin="SELECT * FROM `chocolate`,`best` WHERE (chocolate.SerealNumber=best.SerealNumber)&& type='f';";
                            }
                            elseif ($chocoType=='bocc'){
                                $qsLogin="SELECT * FROM `chocolate`,`best` WHERE (chocolate.SerealNumber=best.SerealNumber)&& type='occ';";
                            }
                            elseif ($chocoType=='gour'){
                                $qsLogin="SELECT * FROM `chocolate`,`gourmet` WHERE (chocolate.SerealNumber=gourmet.SerealNumber)&& type='gour';";
                            }
                            elseif ($chocoType=='dr'){
                                $qsLogin="SELECT * FROM `chocolate`,`gourmet` WHERE (chocolate.SerealNumber=gourmet.SerealNumber)&& type='dr';";
                            }
                            elseif ($chocoType=='gmd'){
                                $qsLogin="SELECT * FROM `chocolate`,`gourmet` WHERE (chocolate.SerealNumber=gourmet.SerealNumber)&& type='gmd';";
                            }
                            else{
                                $qsLogin="SELECT * FROM `chocolate`,`gourmet` WHERE (chocolate.SerealNumber=gourmet.SerealNumber)&& type='gocc';";
                            }
                            $res=$con->query($qsLogin);
                            for($i=0;$i<$res->num_rows;$i++) {
                                $row = $res->fetch_row();?>
                                <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div01">
                                    <div class="item_div1">


                                <img class="item_img" src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row[3]) ; ?>" />
                        </div>

                        <div>
                   <button class="del" name="submit" type="submit" value="<?php echo $row[0];?>" id="<?php echo $row[0];?>" onmouseenter="document.getElementById('<?php echo $row[0];?>').innerText='Delete Product'" onmouseout="document.getElementById('<?php echo $row[0];?>').innerText='<?php echo $row[1];?>' "><?php echo $row[1];?></button>
                    </div>

                    </div>
                </div>
                                <?php

                            }
                            ?>

                        </div>

                    </div>
                </div>

                <div class="modal fade" id="staticBackdrop123" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel12" aria-hidden="true">
                    <div class="modal-dialog" style="margin-top: 4rem;">
                        <div class="modal-content" style="border-radius: 30px;background-color: #2f323a;">
                            <div class="modal-header" style="    background-color:#fc8804 ;border-radius: 28px 28px 0px 0px;border-color: #2f323a;">
                                <h5 class="modal-title" id="staticBackdropLabel1">Add New Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <p style="font-size: 18px;padding-left: 20px;background-color: #2f323a;">choose image (file extension allowed: .png) </p>
                            <div class="modal-body" style="background-color: #2f323a;">
                                <input type="file" accept="image/png" class="productBuy" name="imageadd" id="imageadd"  style="width: 100%;border-top-left-radius: 6px;border-bottom-left-radius: 6px;font-size: 20px">
                                <br>
                                <br>
                                <div class="wrap-input100 validate-input m-b-23" >
                                    <span class="label-input100"><img class="icon" src="images/circle-plus-solid-svg.png" alt="">  Serial Number</span>
                                    <input class="input100" type="text" name="addProductSereal" placeholder="Enter Product Serial Number" style="color: #aeb2b7">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-23" >
                                    <span class="label-input100"><img class="icon" src="images/circle-plus-solid-svg.png" alt=""> Item name </span>
                                    <input class="input100" type="text" name="addProductName" placeholder="Enter Product Name" maxlength="18" style="color: #aeb2b7">
                                    <span class="focus-input100"></span>
                                </div>
                                <table class="d-flex justify-content-center">
                                    <tr >
                                        <td>
                                            <input type="radio" id="Dark" value="Dark" name="typeT" checked>
                                            <label for="Dark" class="label2">Dark</label>
                                        </td>

                                        <td>
                                            <input type="radio" id="Milk" value="Milk" name="typeT">
                                            <label for="Milk" class="label2">Milk</label>
                                        </td>

                                        <td>
                                            <input type="radio" id="White" value="White" name="typeT">
                                            <label for="White" class="label2">White</label>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                            <div class="modal-footer" style="border-color:#2f323a;">

                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                                <input type="submit" name="addProd" value="Add Product" class="btn btn-success" style="height:38px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" style="max-width: 650px;">
                        <div class="modal-content">
                            <div class="modal-header cart_hed" style="background-color: #fc8804;">
                                <h5 class="modal-title" id="staticBackdropLabel">Shopping cart</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding-right: 0px;padding-left: 0px;">
                                <div class="container">
                                    <div class="d-flex justify-content-center row">
                                        <div class="col">
                                            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                                                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                                                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                                                    <div class="d-flex flex-row product-desc">
                                                        <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                                                        <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center qty">
                                                    <h5 class="text-grey mt-1 mr-1 ml-1"><input class="in_num" type="number" min="0"></h5>
                                                </div>
                                                <div>
                                                    <h5 class="text-grey">$20.00</h5>
                                                </div>
                                                <div class="d-flex align-items-center">

                                                    <label for="del1"><i class="fa fa-trash mb-1 text-danger"><input type="checkbox" id="del1"> Delete </i> </label>

                                                </div>
                                            </div>
                                            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                                                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                                                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                                                    <div class="d-flex flex-row product-desc">
                                                        <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                                                        <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                                                    <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i>
                                                </div>
                                                <div>
                                                    <h5 class="text-grey">$20.00</h5>
                                                </div>
                                                <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
                                            </div>
                                            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                                                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                                                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                                                    <div class="d-flex flex-row product-desc">
                                                        <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                                                        <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                                                    <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i>
                                                </div>
                                                <div>
                                                    <h5 class="text-grey">$20.00</h5>
                                                </div>
                                                <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
                                            </div>
                                            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                                                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                                                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                                                    <div class="d-flex flex-row product-desc">
                                                        <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                                                        <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                                                    <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i>
                                                </div>
                                                <div>
                                                    <h5 class="text-grey">$20.00</h5>
                                                </div>
                                                <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><h2>Total Price: </h2></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn saveCart" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </form>

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" id="contactUs">
        <div class="text-center">
            <p class="copy">
                &copy; Copyrights <strong>Alhijaz chocolate LTD</strong>. All Rights Reserved
            </p>
            <div class="container" >
                <p style="background-color: #22242A; text-align: left;padding-left: 400px">
                    Alhijaz Chocolate LTD <br>
                    Anabta P.O. Box 78 <br>
                    Tel: 972 (0) 9 2673077 <br>
                    Fax: 972 (0) 9 2680303 <br>
                    E-mail: info@alhijaz.ps <br>
                    Palestine <br>


                    <a  href="https://www.facebook.com/alhijazchocolate"><img src="images/facebook-brands-svg.png" alt=""></a>
                    <a  href="https://www.instagram.com/alhijaz_chocolate/"><img src="images/instagram-brands-svg.png" alt=""></a>
                    <a href="https://www.youtube.com/channel/UC01d6ix0kxbZcMv2jT4mzrQ"><img src="images/youtube-brands-svg.png" alt=""></a>
                    <a href="mailto:info@alhijaz.ps"><img src="images/envelope-solid%20(1)-svg.png" alt=""></a>
                </p>

            </div>
        </div>

    </footer>
    <!--footer end-->
</section>

<script src="lib/jquery/jquery.min.js"></script>

<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="lib/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="lib/gritter-conf.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
