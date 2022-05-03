<?php error_reporting(E_ERROR | E_PARSE);
session_start();
$_SESSION['test'];
$_SESSION['orderId'];
$_SESSION['orderDate'];
$_SESSION['flag1'];
$_SESSION['sum'];
$_SESSION['radio']=$_POST['typeChoco'];
$chocoType='';
$qrrr='';
$fup=5;
$qtest="";
$orderNumber='';
$orderD='';
$flagSearch=0;
if(isset($_SESSION['type'])){
    if($_SESSION['type']!='C' && $_SESSION['type']!='E' && $_SESSION['type']!='M'){
        header('location:loginCust.php');
    }

}
else{
    header('location:loginCust.php');
}
?>
<?php
//if(isset($_POST['search'])){
//    $f=0;
//    $qsLogin='';
//    $con='';
//
//    @$con = new mysqli('localhost', 'root', '', 'web project');
//    $qsLogin="SELECT * FROM `chocolate`";
//    $res=$con->query($qsLogin);
//   for($i=0;$i<$res->num_rows;$i++) {
//       $row = $res->fetch_row();
//?>
<!---->
<!--              <img src="data:image/png;charset=utf8;base64,--><?php //echo base64_encode($row[3]) ; ?><!--" />-->
<?php
//   }
//
//}
//if(isset($_POST['search'])){
//    $qserch='';
//    $chocoType=$_SESSION['test'];
//    if($chocoType=='Revera'){
//        $qserch="SELECT * FROM `chocolate`,`revera` WHERE chocolate.nameP=''". $_POST['prodName']. "&& revera.SerealNumber=chocolate.SerealNumber";
//    }
//    elseif ($chocoType=='Lorka'){
//        $qserch="SELECT * FROM `chocolate`,`lorka` WHERE chocolate.nameP=''". $_POST['prodName']. "&& lorka.SerealNumber=chocolate.SerealNumber";
//    }
//    elseif ($chocoType=='bn'){
//        $qserch="SELECT * FROM `chocolate`,`best` WHERE chocolate.nameP=''". $_POST['prodName']. "&& best.SerealNumber=chocolate.SerealNumber && best.type='n'";
//    }
//    elseif ($chocoType=='bf'){
//        $qserch="SELECT * FROM `chocolate`,`best` WHERE chocolate.nameP=''". $_POST['prodName']. "&& best.SerealNumber=chocolate.SerealNumber && best.type='f'";
//    }
//    elseif ($chocoType=='bocc'){
//        $qserch="SELECT * FROM `chocolate`,`best` WHERE chocolate.nameP=''". $_POST['prodName']. "&& best.SerealNumber=chocolate.SerealNumber && best.type='occ'";
//    }
//    elseif ($chocoType=='gour'){
//        $qserch="SELECT * FROM `chocolate`,`gourmet` WHERE chocolate.nameP=''". $_POST['prodName']. "&& gourmet.SerealNumber=chocolate.SerealNumber && gourmet.type='gour'";
//
//    }
//    elseif ($chocoType=='dr'){
//        $qserch="SELECT * FROM `chocolate`,`gourmet` WHERE chocolate.nameP=''". $_POST['prodName']. "&& gourmet.SerealNumber=chocolate.SerealNumber && gourmet.type='dr'";
//    }
//    elseif ($chocoType=='gmd'){
//        $qserch="SELECT * FROM `chocolate`,`gourmet` WHERE chocolate.nameP=''". $_POST['prodName']. "&& gourmet.SerealNumber=chocolate.SerealNumber && gourmet.type='gmd'";
//    }
//    else{
//        $qserch="SELECT * FROM `chocolate`,`gourmet` WHERE chocolate.nameP=''". $_POST['prodName']. "&& gourmet.SerealNumber=chocolate.SerealNumber && gourmet.type='gocc'";
//    }
//
//    $flagSearch=1;
//
//}

if(isset($_POST['action2'])){
    $chocoType=$_POST['submit2'];
    $_SESSION['test']=$chocoType;
}


if(isset($_POST['addProd'])) {

    $conn = new mysqli('localhost', 'root', '', 'web project');
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
        $chocoType=$_SESSION['test'];
        try {
            if($chocoType=='Revera'){
                $qrrr="INSERT INTO `revera` (`rowN`, `price`, `SerealNumber`) VALUES (NULL, '40', '" . $_POST['addProductSereal']. "');";
            }
            elseif ($chocoType=='Lorka'){
                $qrrr="INSERT INTO `lorka` (`rowN`, `price`, `SerealNumber`) VALUES (NULL, '55', '" . $_POST['addProductSereal']. "');";
            }
            elseif ($chocoType=='bn'){
                $qrrr="INSERT INTO `best` (`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'65','n','" . $_POST['addProductSereal']. "')";
            }
            elseif ($chocoType=='bf'){
                $qrrr="INSERT INTO `best`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'65','f','" . $_POST['addProductSereal']. "')";
            }
            elseif ($chocoType=='bocc'){
                $qrrr="INSERT INTO `best`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'80','occ','" . $_POST['addProductSereal']. "')";
            }
            elseif ($chocoType=='gour'){
                $qrrr="INSERT INTO `gourmet`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'80','gour','" . $_POST['addProductSereal']. "')";
            }
            elseif ($chocoType=='dr'){
                $qrrr="INSERT INTO `gourmet`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'80','dr','" . $_POST['addProductSereal']. "')";
            }
            elseif ($chocoType=='gmd'){
                $qrrr="INSERT INTO `gourmet`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'80','gmd','" . $_POST['addProductSereal']. "')";
            }
            else{
                $qrrr="INSERT INTO `gourmet`(`rowN`, `price`, `type`, `SerealNumber`) VALUES (NULL,'80','gocc','" . $_POST['addProductSereal']. "')";
            }

            $qrstr = "INSERT INTO `chocolate` (`SerealNumber`, `nameP`, `typeT`, `img`) VALUES ('" . $_POST['addProductSereal'] . "', '" . $_POST['addProductName'] . "', '" . $_POST['typeT'] . "', '" .$imgContent . "');";

            $res = $conn->query($qrstr);
            $conn->query($qrrr);
            $conn->close();
        } catch (Exception $ex) {

        }
    }
}


if(isset($_POST['cart'])){
    $val=$_POST['buyItem'];
    $_SESSION['orderId'];
    $f=0;
    $qsLogin='';
    $con='';
    $feq=0;
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $chocoType=$_SESSION['test'];
      $qrcheck="SELECT * FROM `bag` WHERE orderN='".$_SESSION['orderId']."'  && serialNumber='".$val."';";
    $res = $con->query($qrcheck);
    for($i=0;$i<$res->num_rows;$i++) {
        $feq=1;
    }
    if ($feq==0){
        $qrAddtoOrder="INSERT INTO `bag` (`itemN`, `orderN`, `serialNumber`, `amount`) VALUES (NULL, '".$_SESSION['orderId']."', '".$val."', '0');";
        $res=$con->query($qrAddtoOrder);
        $con->commit();}



    $con->close();
}


if(isset($_POST['action'])){
    $val=$_POST['submit'];

$f=0;
$qsLogin='';
$con='';
$qrdel='';
@$con = new mysqli('localhost', 'root', '', 'web project');
    $chocoType=$_SESSION['test'];
    if($chocoType=='Revera'){
        $qrdel="DELETE FROM `revera` WHERE `SerealNumber`='".$val."';";
    }
    elseif ($chocoType=='Lorka'){
        $qrdel="DELETE FROM `lorka` WHERE `SerealNumber`='".$val."';";
    }
    elseif ($chocoType=='bn'){
        $qrdel="DELETE FROM `best` WHERE `SerealNumber`='".$val."';";
    }
    elseif ($chocoType=='bf'){
        $qrdel="DELETE FROM `best` WHERE `SerealNumber`='".$val."';";
    }
    elseif ($chocoType=='bocc'){
        $qrdel="DELETE FROM `best` WHERE `SerealNumber`='".$val."';";
    }
    elseif ($chocoType=='gour'){
        $qrdel="DELETE FROM `gourmet` WHERE `SerealNumber`='".$val."';";
    }
    elseif ($chocoType=='dr'){
        $qrdel="DELETE FROM `gourmet` WHERE `SerealNumber`='".$val."';";
    }
    elseif ($chocoType=='gmd'){
        $qrdel="DELETE FROM `gourmet` WHERE `SerealNumber`='".$val."';";
    }
    else{
        $qrdel="DELETE FROM `gourmet` WHERE `SerealNumber`='".$val."';";
    }

$qsLogin="DELETE FROM `chocolate` WHERE `SerealNumber`='".$val."'";
 $con->query($qrdel);
    $con->commit();
$res=$con->query($qsLogin);
$con->commit();
$con->close();
}

if(isset($_POST['newOrder'])) {
    $orderD = date('Y-m-d');
    $con = '';
    $qrNewOrd = '';
    $user=$_SESSION['userName'];
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $qrNewOrd = "INSERT INTO `cusorder` (`orderN`, `createDate`,`customer`, `orderprice`, `emp`, `deleverDate`, `coverIMG`) VALUES (NULL, '" . $orderD . "','".$user."', '0', NULL, '0', NULL);";
    $con->query($qrNewOrd);
    $query23 = "SHOW TABLE STATUS LIKE 'cusorder';";
    $res = $con->query($query23);
for($i=0;$i<$res->num_rows;$i++) {
    $row = $res->fetch_row();
    $orderNumber = $row[10]-1;
    $_SESSION['orderId']=$orderNumber;
    $_SESSION['orderDate']=$orderD;
    $con->commit();
}

}

if(isset($_POST['delFromCart'])){
    $val=$_POST['delFromCart'];
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $qsdelItem="DELETE FROM `bag` WHERE serialNumber ='".$val."'";
    $res=$con->query($qsdelItem);
    $con->commit();
    $con->close();
}

if(isset($_POST['orderList'])) {
    if (!empty($_POST['select'])) {
        foreach ($_POST['select'] as $selected) {
            $_SESSION['orderId']=$selected;
            @$con = new mysqli('localhost', 'root', '', 'web project');
            $qsdate="SELECT * FROM `cusorder` WHERE customer='".$_SESSION['userName']."'&& orderN='".$selected."';";
            $res=$con->query($qsdate);
            for($i=0;$i<$res->num_rows;$i++) {
                $row = $res->fetch_row();
                $_SESSION['orderDate']=$row[1];
            }

        }
    }
}
$fft=0;
if(isset($_POST['editOrder'])){
    $pr=0;
    $pl=0;
    $pb=0;
    $pg=0;
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $qsdate="SELECT * FROM `bag`,`cusorder` WHERE cusorder.orderN=bag.orderN && customer='".$_SESSION['userName']."' && bag.orderN='".$_SESSION['orderId']."';";
    $res=$con->query($qsdate);
    $fft=1;
    for($i=0;$i<$res->num_rows;$i++) {

        $row = $res->fetch_row();
        if(isset($_POST[$row[2]])){
            $qrUpDate="UPDATE `bag`,`cusorder` SET `amount`='".$_POST[$row[2]]."' WHERE serialNumber='".$row[2]."' && cusorder.orderN=bag.orderN && customer='".$_SESSION['userName']."' && bag.orderN='".$_SESSION['orderId']."';";
            $con->query($qrUpDate);
            $con->commit();
        }


    }

   $qrR="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`revera` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && revera.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
    $res=$con->query($qrR);
for($i=0;$i<$res->num_rows;$i++) {
    $row = $res->fetch_row();
    $pr= $row['0'];
}
    $qrL="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`lorka` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && lorka.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
    $res=$con->query($qrL);
    for($i=0;$i<$res->num_rows;$i++) {
        $row = $res->fetch_row();
        $pl= $row['0'];
    }
    $qrG="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`gourmet` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && gourmet.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
    $res=$con->query($qrG);
    for($i=0;$i<$res->num_rows;$i++) {
        $row = $res->fetch_row();
        $pG= $row['0'];
    }
    $qrB="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`best` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && best.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
    $res=$con->query($qrB);
    for($i=0;$i<$res->num_rows;$i++) {
        $row = $res->fetch_row();
        $pb= $row['0'];
    }
    $con->commit();

    $pupPrice="UPDATE `cusorder`SET `orderprice`='".$pb+$pg+$pl+$pr."' WHERE orderN='".$_SESSION['orderId']."';";
    $con->query($pupPrice);
    $con->commit();
   $con->close();

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
        <a href="manePageCustomer.php" class="logo" style="margin: 0px"><img src="images/logo.png" alt="" style="width: 60px;height: 60px">Alhijaz chocolate LTD
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
                <?php
                if($_SESSION['type']=='E'||$_SESSION['type']=='M'){?>
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
                <?php
                }
                else{
                    ?>
                    <li class="sub-menu" >
                        <a href="javascript:;" class="aSi " >
                            <form action="cusOrder.php" method="post">
                            <button class="kind4" name="myorder" type="submit" value="My Orders" id="myorder">My Orders</button>
                            </form>
                        </a>
                    </li>
                <?php
                }
                ?>
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
                                                <h4 >
                                                    <?php
                                                    if($chocoType=='Revera'){
                                                        echo 'Revera';
                                                    }
                                                    elseif ($chocoType=='Lorka'){
                                                        echo 'Lorka';
                                                    }
                                                    elseif ($chocoType=='bn'){
                                                        echo 'Best Nuts';
                                                    }
                                                    elseif ($chocoType=='bf'){
                                                        echo 'Best Fill';
                                                    }
                                                    elseif ($chocoType=='bocc'){
                                                        echo 'Best Occasions';
                                                    }
                                                    elseif ($chocoType=='gour'){
                                                        echo 'Gourmet';
                                                    }
                                                    elseif ($chocoType=='dr'){
                                                        echo 'Gourmet Dragee';
                                                    }
                                                    elseif ($chocoType=='gmd'){
                                                        echo 'Gourmet ChocoMedjool';
                                                    }
                                                    else{
                                                        echo 'Gourmet Occasions';

                                                    }
                                                    ?>
                                                </td>
                                        </tr>
                                        <?php
                                        if($_SESSION['type']=='C'){?>
                                        <tr>
                                            <td colspan="2">
                                                <h5 style="">Select Order#</h5>

                                            <form action="products2.php" method="post">

                                                    <select name="select[]" id="select[]" style="background-color: #fc8804;border: 1px;padding: 4px">
                                                        <?php
                                                        @$con = new mysqli('localhost', 'root', '', 'web project');
                                                        $qrSelectOrder = "SELECT * FROM `cusorder` WHERE customer='".$_SESSION['userName']."'&& emp is null;;";
                                                        $res = $con->query($qrSelectOrder);
                                                        for($i=0;$i<$res->num_rows;$i++) {
                                                            $row = $res->fetch_row();
                                                            ?>
                                                            <option value="<?php echo $row[0]?>">no.<?php echo $row[0]?>  -Date:<?php echo $row[1]?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>

                                                </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button  class="del2" name="orderList" id="orderList">Edit this Order</button>
                                                <p style="text-align: center">Or</p>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        <tr>

                                            <td colspan="2">


                                                </h4><?php
                                                if($_SESSION['type']=='E' || $_SESSION['type']=='M'){?>
                                                <input type="button" class="productBuy" name="uploadImg" value="Add item" data-bs-toggle="modal" data-bs-target="#staticBackdrop123">
                                                    <?php
                                                }
                                                else{?>
                                                    <form action="products2.php" method="post">
                                                <button type="submit" class="del2" name="newOrder" id="newOrder">Create new Order </button></form>
                                                    <p style="text-align: left">Order Number:<?php echo  $_SESSION['orderId']?> <br>Create Date: <?php echo $_SESSION['orderDate']?> </p>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>


                                       </form>
                                        <form action="products2.php"method="post">
                                        <tr>
                                            <td colspan="2">
                                                <p class="please_type">Select the type of the chocolate:</p>
                                            </td>
                                        </tr>
                                        </form>
                                        <tr>
                                            <td>

                                                <form action="products2.php"method="post">
                                                    <?php
                                                    if($_SESSION['radio']==''){
                                                        ?>
                                                        <input type="radio" id="all" value="" name="typeChoco" onchange="this.form.submit();" checked  >
                                                    <?php
                                                    }
                                                    else{

                                                        ?>
                                                        <input type="radio" id="all" value="" name="typeChoco" onchange="this.form.submit();"  >
                                                    <?php
                                                    }
                                                    ?>
                                                </form>
                                            </td>
                                            <td class="TR_typeLabel">
                                                <label class="label_css1" for="all">All Types</label>
                                            </td>
                                        </tr>
                                            <td>
                                                <form action="products2.php"method="post">
                                                    <?php
                                                    if($_SESSION['radio']==" && chocolate.typeT='D'"){
                                                        ?>
                                                        <input type="radio" id="dark" value=" && chocolate.typeT='D'" name="typeChoco"  onchange="this.form.submit();"  checked >
                                                        <?php
                                                    }
                                                    else{

                                                        ?>
                                                        <input type="radio" id="dark" value=" && chocolate.typeT='D'" name="typeChoco"  onchange="this.form.submit();"  >
                                                        <?php
                                                    }
                                                    ?>

                                                </form>
                                            </td>
                                            <td class="TR_typeLabel">
                                                <label  class="label_css1"for="dark">Dark</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <form action="products2.php"method="post">
                                                    <?php
                                                    if($_SESSION['radio']==" && chocolate.typeT='M'"){
                                                        ?>
                                                        <input type="radio" id="milk" value=" && chocolate.typeT='M'" name="typeChoco" onchange="this.form.submit(); " checked >
                                                        <?php
                                                    }
                                                    else{

                                                        ?>
                                                        <input type="radio" id="milk" value=" && chocolate.typeT='M'" name="typeChoco" onchange="this.form.submit(); " >
                                                        <?php
                                                    }
                                                    ?>

                                                </form>
                                            </td>
                                            <td class="TR_typeLabel">
                                                <label class="label_css1" for="milk">Milk</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <form action="products2.php"method="post">
                                                    <?php
                                                    if($_SESSION['radio']==" && chocolate.typeT='W'"){
                                                        ?>
                                                        <input type="radio" id="white" value=" && chocolate.typeT='W'" name="typeChoco"  onchange="this.form.submit();" checked >
                                                        <?php
                                                    }
                                                    else{

                                                        ?>
                                                        <input type="radio" id="white" value=" && chocolate.typeT='W'" name="typeChoco"  onchange="this.form.submit();"  >
                                                        <?php
                                                    }
                                                    ?>

                                                </form>
                                            </td>
                                            <td class="TR_typeLabel">
                                                <label class="label_css1" for="white">White</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">

                                                <div class="wrap-input100 validate-input"  style="border-color: #2f323a;margin-bottom: 0px;">
                                                    <input class="input100" type="text" name="prodName" placeholder="Type product name" style="color: #2f323a">
                                                    <span class="focus-input100" ></span>

                                                </div>
                                                <input type="submit" name="search" class="productBuy" value="search" style="width: 100px">
                                            </td>

                                        </tr>
                                    </table>

                            </div>
                        </div>
                        <?php
                        if(isset($_POST['search'])){


                        ?>
                        <div class="col-9" style="padding-left: 0px;padding-right: 0px">

                            <?php
                            $qsLogin='';
                            $typeRadio='';
                            $typeRadio=$_POST['typeChoco'];
                            $con='';
                            $sqlSearch='';
                            $textProd='';
                            $chocoType=$_SESSION['test'];
                            @$con = new mysqli('localhost', 'root', '', 'web project');
                            $qserch='';
                            if($chocoType=='Revera'){
                                $qserch="SELECT * FROM `chocolate`,`revera` WHERE chocolate.nameP='". $_POST['prodName']. "'&& revera.SerealNumber=chocolate.SerealNumber";
                            }
                            elseif ($chocoType=='Lorka'){
                                $qserch="SELECT * FROM `chocolate`,`lorka` WHERE chocolate.nameP='". $_POST['prodName']. "'&& lorka.SerealNumber=chocolate.SerealNumber";
                            }
                            elseif ($chocoType=='bn'){
                                $qserch="SELECT * FROM `chocolate`,`best` WHERE chocolate.nameP='". $_POST['prodName']. "'&& best.SerealNumber=chocolate.SerealNumber && best.type='n'";
                            }
                            elseif ($chocoType=='bf'){
                                $qserch="SELECT * FROM `chocolate`,`best` WHERE chocolate.nameP='". $_POST['prodName']. "'&& best.SerealNumber=chocolate.SerealNumber && best.type='f'";
                            }
                            elseif ($chocoType=='bocc'){
                                $qserch="SELECT * FROM `chocolate`,`best` WHERE chocolate.nameP='". $_POST['prodName']. "'&& best.SerealNumber=chocolate.SerealNumber && best.type='occ'";
                            }
                            elseif ($chocoType=='gour'){
                                $qserch="SELECT * FROM `chocolate`,`gourmet` WHERE chocolate.nameP='". $_POST['prodName']. "'&& gourmet.SerealNumber=chocolate.SerealNumber && gourmet.type='gour'";

                            }
                            elseif ($chocoType=='dr'){
                                $qserch="SELECT * FROM `chocolate`,`gourmet` WHERE chocolate.nameP='". $_POST['prodName']. "'&& gourmet.SerealNumber=chocolate.SerealNumber && gourmet.type='dr'";
                            }
                            elseif ($chocoType=='gmd'){
                                $qserch="SELECT * FROM `chocolate`,`gourmet` WHERE chocolate.nameP='". $_POST['prodName']. "'&& gourmet.SerealNumber=chocolate.SerealNumber && gourmet.type='gmd'";
                            }
                            else{
                                $qserch="SELECT * FROM `chocolate`,`gourmet` WHERE chocolate.nameP='". $_POST['prodName']. "'&& gourmet.SerealNumber=chocolate.SerealNumber && gourmet.type='gocc'";
                            }
                            $res=$con->query($qserch);
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
                                        <?php
                                        if($_SESSION['type']=='C'){?>
                                            <form action="products2.php" method="post">
                                                <input type="hidden" name="cart" value="buyItem">

                                                <button class="del2" name="buyItem" type="submit" value="<?php echo $row[0];?>" id="<?php echo $row[0];?>" onmouseenter="document.getElementById('<?php echo $row[0];?>').innerText='Add to order'" onmouseout="document.getElementById('<?php echo $row[0];?>').innerText='<?php echo $row[1];?>' "><?php echo $row[1];?></button>
                                            </form>
                                            <?php

                                        }
                                        else{
                                            ?>
                                            <button class="del" name="submit" type="submit" value="<?php echo $row[0];?>" id="<?php echo $row[0];?>" onmouseenter="document.getElementById('<?php echo $row[0];?>').innerText='Delete Product'" onmouseout="document.getElementById('<?php echo $row[0];?>').innerText='<?php echo $row[1];?>' "><?php echo $row[1];?></button>
                                            <?php

                                        }
                                        ?>


    </form>

    </div>

    </div>
    </div>
    <?php

    }

    ?>

    </div>

    <?php
    }
                        else{


    ?>




                        <div class="col-9" style="padding-left: 0px;padding-right: 0px">

                            <?php
                            $qsLogin='';
                            $typeRadio='';
                            $typeRadio=$_POST['typeChoco'];
                            $con='';
                            $sqlSearch='';
                            $textProd='';
                            $chocoType=$_SESSION['test'];
                            @$con = new mysqli('localhost', 'root', '', 'web project');
                            if($chocoType=='Revera'){
                                $qsLogin="SELECT * FROM `chocolate`,`revera` WHERE chocolate.SerealNumber=revera.SerealNumber".$typeRadio.";";
                            }
                            elseif ($chocoType=='Lorka'){
                                $qsLogin="SELECT * FROM `chocolate`,`lorka` WHERE chocolate.SerealNumber=lorka.SerealNumber".$typeRadio.";";
                            }
                            elseif ($chocoType=='bn'){
                                $qsLogin="SELECT * FROM `chocolate`,`best` WHERE (chocolate.SerealNumber=best.SerealNumber) && type='n' ".$typeRadio.";";
                            }
                            elseif ($chocoType=='bf'){
                                $qsLogin="SELECT * FROM `chocolate`,`best` WHERE (chocolate.SerealNumber=best.SerealNumber) && type='f'  ".$typeRadio.";";
                            }
                            elseif ($chocoType=='bocc'){
                                $qsLogin="SELECT * FROM `chocolate`,`best` WHERE (chocolate.SerealNumber=best.SerealNumber) && type='occ'  ".$typeRadio.";";
                            }
                            elseif ($chocoType=='gour'){
                                $qsLogin="SELECT * FROM `chocolate`,`gourmet` WHERE (chocolate.SerealNumber=gourmet.SerealNumber) && type='gour'  ".$typeRadio.";";
                            }
                            elseif ($chocoType=='dr'){
                                $qsLogin="SELECT * FROM `chocolate`,`gourmet` WHERE (chocolate.SerealNumber=gourmet.SerealNumber) && type='dr' ".$typeRadio.";";
                            }
                            elseif ($chocoType=='gmd'){
                                $qsLogin="SELECT * FROM `chocolate`,`gourmet` WHERE (chocolate.SerealNumber=gourmet.SerealNumber) && type='gmd' ".$typeRadio.";";
                            }
                            else{
                                $qsLogin="SELECT * FROM `chocolate`,`gourmet` WHERE (chocolate.SerealNumber=gourmet.SerealNumber) && type='gocc'  ".$typeRadio.";";
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
                            <?php
                            if($_SESSION['type']=='C'){?>
                                <form action="products2.php" method="post">
                                    <input type="hidden" name="cart" value="buyItem">

                <button class="del2" name="buyItem" type="submit" value="<?php echo $row[0];?>" id="<?php echo $row[0];?>" onmouseenter="document.getElementById('<?php echo $row[0];?>').innerText='Add to order'" onmouseout="document.getElementById('<?php echo $row[0];?>').innerText='<?php echo $row[1];?>' "><?php echo $row[1];?></button>
                                </form>
                    <?php

                            }
                            else{
                                ?>
                                <button class="del" name="submit" type="submit" value="<?php echo $row[0];?>" id="<?php echo $row[0];?>" onmouseenter="document.getElementById('<?php echo $row[0];?>').innerText='Delete Product'" onmouseout="document.getElementById('<?php echo $row[0];?>').innerText='<?php echo $row[1];?>' "><?php echo $row[1];?></button>
                            <?php

                            }
                            ?>


</form>

                    </div>

                    </div>
                </div>
                                <?php

                            }

                            ?>

                        </div>
    <?php
                        }
    ?>

                    </div>
                </div>
                <form action="products2.php" method="post" enctype="multipart/form-data">
                <div class="modal fade" id="staticBackdrop123" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel12" aria-hidden="true">
                    <div class="modal-dialog" style="margin-top: 4rem;">
                        <div class="modal-content" style="border-radius: 30px;background-color: #2f323a;">
                            <div class="modal-header" style="    background-color:#fc8804 ;border-radius: 28px 28px 0px 0px;border-color: #2f323a;">
                                <h5 class="modal-title" id="staticBackdropLabel1">Add New Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <p style="font-size: 18px;padding-left: 20px;background-color: #2f323a;">choose image (file extension allowed: .png) </p>
                            <div class="modal-body" style="background-color: #2f323a;">
                                <input type="file" accept="image/png" required class="productBuy" name="imageadd" id="imageadd"  style="width: 100%;border-top-left-radius: 6px;border-bottom-left-radius: 6px;font-size: 20px">
                                <br>
                                <br>
                                <div class="wrap-input100 validate-input m-b-23" >
                                    <span class="label-input100"><img class="icon" src="images/circle-plus-solid-svg.png" alt="">  Serial Number</span>
                                    <input class="input100" required type="text" name="addProductSereal" placeholder="Enter Product Serial Number" style="color: #aeb2b7">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input m-b-23" >
                                    <span class="label-input100"><img class="icon" src="images/circle-plus-solid-svg.png" alt=""> Item name </span>
                                    <input class="input100" required type="text" name="addProductName" placeholder="Enter Product Name" maxlength="18" style="color: #aeb2b7">
                                    <span class="focus-input100"></span>
                                </div>
                                <table class="d-flex justify-content-center">
                                    <tr >
                                        <td>
                                            <input type="radio" id="Dark" value="Dark" name="typeT" >
                                            <label for="Dark" class="label2">Dark</label>
                                        </td>

                                        <td>
                                            <input type="radio" id="Milk" value="Milk" name="typeT" checked>
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
                </form>
    <form action="products2.php" method="post">
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" style="max-width: 650px;margin-left: 0px;">
                        <div class="modal-content">
                            <div class="modal-header cart_hed" style="background-color: #fc8804;">
                                <h5 class="modal-title" id="staticBackdropLabel">Shopping cart</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding-right: 0px;padding-left: 0px;">
                                <div class="container">
                                    <div class="d-flex justify-content-center row">
                                        <div class="col">
                                            <?php
                                            $nameBr='';
                                            $pr1=0;
                                            @$con = new mysqli('localhost', 'root', '', 'web project');
                                            $chocoType=$_SESSION['test'];
                                            if($chocoType=='Revera'){
                                                $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate`,`revera` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && revera.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $qrR="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`revera` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && revera.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $res=$con->query($qrR);
                                                for($i=0;$i<$res->num_rows;$i++) {
                                                    $row = $res->fetch_row();
                                                    $pr1= $row['0'];
                                                }
                                                $nameBr='Revera';
                                            }
                                            elseif ($chocoType=='Lorka'){
                                                $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate`,`lorka` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && lorka.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $qrL="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`lorka` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && lorka.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $res=$con->query($qrL);
                                                for($i=0;$i<$res->num_rows;$i++) {
                                                    $row = $res->fetch_row();
                                                    $pr1= $row['0'];
                                                }
                                                $nameBr='Lorka';
                                            }
                                            elseif ($chocoType=='bn'){
                                                $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate`,`best` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && best.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $qrB="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`best` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && best.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $res=$con->query($qrB);
                                                for($i=0;$i<$res->num_rows;$i++) {
                                                    $row = $res->fetch_row();
                                                    $pr1= $row['0'];
                                                }
                                                $nameBr='Best';
                                            }
                                            elseif ($chocoType=='bf'){
                                                $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate`,`best` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && best.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $qrB="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`best` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && best.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $res=$con->query($qrB);
                                                for($i=0;$i<$res->num_rows;$i++) {
                                                    $row = $res->fetch_row();
                                                    $pr1= $row['0'];
                                                }
                                                $nameBr='Best';
                                            }
                                            elseif ($chocoType=='bocc'){
                                                $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate`,`best` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && best.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $qrB="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`best` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && best.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $res=$con->query($qrB);
                                                for($i=0;$i<$res->num_rows;$i++) {
                                                    $row = $res->fetch_row();

                                                    $pr1= $row['0'];

                                                }
                                                $nameBr='Best';
                                            }
                                            elseif ($chocoType=='gour'){
                                                $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate`,`gourmet` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && gourmet.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $qrG2="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`gourmet` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && gourmet.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $res1=$con->query($qrG2);
                                                for($i=0;$i<$res1->num_rows;$i++) {
                                                    $row = $res1->fetch_row();
                                                    $pr1= $row['0'];
                                                }
                                                $nameBr='Gourmet';
                                            }
                                            elseif ($chocoType=='dr'){
                                                $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate`,`gourmet` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && gourmet.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $qrG2="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`gourmet` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && gourmet.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $res1=$con->query($qrG2);
                                                for($i=0;$i<$res1->num_rows;$i++) {
                                                    $row = $res1->fetch_row();
                                                    $pr1= $row['0'];
                                                }
                                                $nameBr='Gourmet';
                                            }
                                            elseif ($chocoType=='gmd'){
                                                $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate`,`gourmet` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && gourmet.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $qrG2="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`gourmet` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && gourmet.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $res1=$con->query($qrG2);
                                                for($i=0;$i<$res1->num_rows;$i++) {
                                                    $row = $res1->fetch_row();
                                                    $pr1= $row['0'];
                                                }
                                                $nameBr='Gourmet';
                                            }
                                            else{
                                                $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate`,`gourmet` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && gourmet.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $qrG2="SELECT sum(price*amount) total FROM `bag`,`cusorder`,`chocolate`,`gourmet` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && cusorder.customer='".$_SESSION['userName']."' && gourmet.SerealNumber=chocolate.SerealNumber && bag.orderN='".$_SESSION['orderId']."';";
                                                $res1=$con->query($qrG2);
                                                for($i=0;$i<$res1->num_rows;$i++) {
                                                    $row = $res1->fetch_row();
                                                    $pr1= $row['0'];
                                                }
                                                $nameBr='Gourmet';
                                            }

                                            $res1=$con->query($recartshow);
                                            for($i=0;$i<$res1->num_rows;$i++) {
                                            $row = $res1->fetch_row();?>


                                            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                                                <div class="mr-1"><img class="rounded" src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row[14]) ; ?>" width="70"/></div>
                                                <div class="d-flex flex-column align-items-center " style="width: 170px">

                                                        <div class="size mr-1"><span class="text-grey"style="font-size:20px ;"><?php echo $row[12];?></span></div>

                                                        <div class="color"><span class="text-grey" style="font-size:20px ;"><?php echo $row[2];?></span></div>

                                                </div>
                                                <div class="d-flex flex-row align-items-center qty">
                                                    <h5 class="text-grey mt-1 mr-1 ml-1">
                                                        <input name="<?php echo $row[2];?>" id="<?php echo $row[2];?>" style="background-color: #f0f0f0;width: 70px" value="<?php echo $row[3];?>" type="number" min="0"
                                                               onchange="document.getElementById('price<?php echo $row[2];?>').innerText=(this.value*<?php echo $row[16];?>)+'₪';"
                                                        ></h5>
                                                </div>
                                                <div>
                                                    <h5  id="price<?php echo $row[2];?>" class="text-grey"><?php
                                                        $pr=$row[16];
                                                        $sum=$pr * $row[3];
                                                        $_SESSION['sum']=$sum;
                                                        echo $sum;
                                                        ?>₪</h5>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                   <h5> <button  name="delFromCart" value="<?php echo $row[2];?>" style="background: transparent;border: 0px;font-size: 15px"> <i class="fa fa-trash mb-1 text-danger"></i>  Delete</button></h5>
                                                </div>
                                            </div>

                                            <?php
                                            }
                                            ?>
                                            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><h2><?php echo $nameBr;?> total Price: <?php echo $pr1;?>₪</h2></div>
                                            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><h3>Total Order Price: <?php echo $row[7];?>₪</h3></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input name="editOrder" type="submit" class="btn btn-success" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </div>
    </form>
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
