<?php error_reporting(E_ERROR | E_PARSE);
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']!='C'){
        header('location:loginCust.php');
    }
}
else{
    header('location:loginCust.php');
}
$_SESSION['test'];
$_SESSION['orderId'];
$_SESSION['orderDate'];
$_SESSION['radio']=$_POST['typeChoco'];
$chocoType='';
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

if(isset($_POST['delMyOrder'])){
    $val=$_POST['toDel'];
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $qsdelItem="DELETE FROM `cusorder` WHERE orderN ='".$val."' && emp is null";
    $res=$con->query($qsdelItem);
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
<body style="background-color: #212529">
<section id="container" style="background-color: #212529;">
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

<!--                --><?php
//                if($_SESSION['type']=='C'){
//                    echo '
//                <li><img src="images/Untitled.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 34px;height: 30px;margin-right: 30px;margin-top: -4px;" alt=""></a></li>
//                    ';
//
//                }
//                ?>
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

    <section id="main-content">
        <section class="wrapper">
            <table class="table table-striped table-dark" style="color: #fc8804;font-size: 15px">
                <thead>
                <tr>
                    <th class="text-center" scope="col">no.of Order</th>
                    <th class="text-center" scope="col">created Date</th>
                    <th class="text-center" scope="col">View Order details </th>
                    <th class="text-center" scope="col">Deliver Date</th>
                    <th class="text-center" scope="col">Cancel Order</th>
                </tr>
                </thead>
                <tbody>
                <?php
                @$con = new mysqli('localhost', 'root', '', 'web project');
                $qrListOrder="SELECT * FROM `cusorder` WHERE  customer='".$_SESSION['userName']."';";
                $res=$con->query($qrListOrder);
                for($i=0;$i<$res->num_rows;$i++) {
                    $row = $res->fetch_row();
                    ?>

                    <tr>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1];?></td>
                        <form action="cusOrder.php" method="post">
                            <input type="hidden" name="viewMyOrder" id="toView" value="toView">
                        <td><a href="javascript:;" style="background: transparent;border: 0px;font-size: 15px" name="toView" value="<?php echo $row[0].'v'; ?>" id="<?php echo $row[0].'v'; ?>"><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $row[0];?>" style="width: 34px;height: 30px" alt=""></a></td>
                        </form>
                        <td><?php echo $row[5];?></td>
                        <form action="cusOrder.php" method="post">
                            <input type="hidden" name="delMyOrder" id="toDel" value="toDel">
                            <?php
                            if($row[4]==''){
                            ?>
                                <td><button  name="toDel" id="<?php echo $row[0].'d'; ?>" value="<?php echo $row[0].'d'; ?>" style="background: transparent;border: 0px;font-size: 15px"> <i style="font-size: 25px" class="fa fa-trash mb-1 text-danger"></i></button></td>
                            <?php
                            }
                            else{
                                ?>
                                <td><button disabled data-toggle="tooltip" title="You Can't delete this order because we prepare it!" name="toDel" id="<?php echo $row[0].'d'; ?>" value="<?php echo $row[0].'d'; ?>" style="background: transparent;border: 0px;font-size: 15px">
                                        <img src="images/ban-solid-svg.png" alt="" style="width: 24px;height: 24px"></button></td>
                            <?php
                            }
                            ?>

                        </form>
                    </tr>
                <?php
                }$con->close();
                ?>

                </tbody>
            </table>
            <?php
            @$con2 = new mysqli('localhost', 'root', '', 'web project');
            $qrListOrder2="SELECT * FROM `cusorder` WHERE  customer='".$_SESSION['userName']."';";
            $res=$con2->query($qrListOrder2);
            for($i=0;$i<$res->num_rows;$i++) {
            $row = $res->fetch_row();
            ?>

                <div class="modal fade" id="staticBackdrop<?php echo $row[0];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" style="max-width: 650px;">
                        <div class="modal-content">
                            <div class="modal-header cart_hed" style="background-color: #fc8804;">
                                <h5 class="modal-title" id="staticBackdropLabel<?php echo $row[0];?>">Order details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding-right: 0px;padding-left: 0px;">
                                <div class="container">
                                    <div class="d-flex justify-content-center row">
                                        <div class="col">
                                            <?php
                                            @$con = new mysqli('localhost', 'root', '', 'web project');
                                            $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && bag.orderN='". $row[0]."';";
                                            $res1=$con->query($recartshow);
                                            for($j=0;$j<$res1->num_rows;$j++) {
                                                $row1 = $res1->fetch_row();?>


                                                <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                                                    <div class="mr-1"><img class="rounded" src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row1[14]) ; ?>" width="70"/></div>
                                                    <div class="d-flex flex-column align-items-center " style="">

                                                        <div class="size mr-1"><span class="text-grey"style="font-size:20px ;"><?php echo $row1[12];?></span></div>

                                                        <div class="color"><span class="text-grey"style="font-size:20px ;"><?php echo $row1[2];?></span></div>

                                                    </div>
                                                    <div class="d-flex flex-row align-items-center qty">
                                                        <h5 class="text-grey mt-1 mr-1 ml-1">Amount:<?php echo $row1[3];?> Kg</h5>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                            ?>
                                            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><h2>Total Order Price:<?php echo $row[3];?>₪</h2></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </section>
    </section>

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
