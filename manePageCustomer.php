<?php
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']!='C' && $_SESSION['type']!='E' && $_SESSION['type']!='M'){
        header('location:loginCust.php');

    }

}
else{
    header('location:loginCust.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/cartCss.css">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/css_item.css">
    <link rel="stylesheet" href="css/mainPage.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
<section id="container" style="background-color: #d6d5d5">
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <a href="manePageCustomer.php" class="logo" style="margin: 0px;"><img src="images/logo.png" alt="" style="width: 60px;height: 60px">Alhijaz chocolate LTD
        </a>
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
                    <a class="" href="javascript:;"class="aSi">
                        <form action="manePageCustomer.php">
                            <input class="kind4" type="submit" value="Home" name="home" id="home">
                        </form>
                    </a>
                </li>

                <?php
                if($_SESSION['type']=='C'){
                    echo '
                  <li class="sub-menu">
                        <li>
                            <a href="javascript:;class="aSi"">
                                <form action="cusOrder.php">
                                    <input class="kind4" type="submit" value="My orders" name="cus_Order" id="cus_Order">
                                </form>
                            </a>
                        </li>
                </li>

                    ';
                }
                ?>
                <?php
                if($_SESSION['type']=='E'||$_SESSION['type']=='M'){
                    echo '
                        <li class="sub-menu">
                    <a href="javascript:;"> <span class="main_menu">Orders</span></a>

                    <ul class="sub">
                        <li>
                            <a href="javascript:;"class="aSi">
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
                    ';
                }
                ?>

                <?php
                if($_SESSION['type']=='M'){
                    echo '
                   <li class="sub-menu">
                    <a href="javascript:;" class="aSi"> <span class="main_menu">Employees</span></a>

                    <ul class="sub">
                        <li>
                            <a href="javascript:;">
                                <form action="mangerView.php" method="post">
                                    <input class="kind4" type="submit" value="View Information" name="manView" id="manView">
                                </form>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <form action="mangerAddEmployee.php" method="post">
                                    <input class="kind4" type="submit" value="Management" name="manEdit" id="empO">
                                </form>
                            </a>
                        </li>
                    </ul>
                </li>
                    ';

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
                <?php
                if($_SESSION['type']=='C'){
                    echo '
                    <li class="sub-menu">
                    <a href="#contactUs" style="font-size: 17px;color: #aeb2b7">
                            Connect Us
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="find_us.html" style="font-size: 17px;color: #aeb2b7">
                        Find Us
                    </a>
                </li>
                    ';

                }
                ?>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper"style=" background: url('images/light-wood-texture-wood-background-natural-materials-wood-texture.jpg')no-repeat  fixed">
            <div class="" >
                <div class="" >
                    <div class="row" >
                        <div class="col">
                            <br>
                            <span><img src="images/gor-removebg-preview.png" alt=""></span>
                            <!--            <span style="color: #804919;font-size: 50px;font-family:'MV Boli'">Gourmet®</span>-->
                            <p class="descriptionPara">

                                Gourmet chocolates are rich chocolates of the highest quality, made using best beans and using best methods to deliver rich aroma, smooth texture and an even, velvety taste. Gourmet chocolates have a higher percentage of cocoa, a shiny appearance and are more expensive than regular chocolates.
                            </p>
                        </div>
                        <div class="col" style="padding-right:0px">
                            <img src="images/slider/overBach-removebg-preview.png" alt="" style="margin-left: 55px">
                        </div>
                    </div>

                </div>
                <br>
                <div class="container-xxl">
                    <div class="container-xxl" style="padding-left: 0px">
                        <span class="nameBrand">Gourmet®</span>

                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <div class="d-grid">
                                    <div class="item_div0">
                                        <div class="item_div item_divG20 ">
                                            <img id="G20" class="item_img" src="images/gourmet/G20-removebg-preview.png">
                                        </div>
                                    </div>
                                    <!--            <a class="kind" href="#">Gourmet</a>-->
                                    <form action="products.php" method="post">
                                        <a class="kind" href="javascript:void(0);">
                                            <input class="kind2" type="submit" value="Gourmet" id="gm" name="gm">
                                        </a>
                                    </form>

                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="d-grid">


                                    <div class="item_div0">
                                        <div class="item_div item_div2">
                                            <img id="GA13" class="item_img" src="images/gourmet/gmDrag-removebg-preview.png">
                                        </div>
                                    </div>
                                    <form action="products.php" method="post">
                                        <a class="kind" href="javascript:void(0);">
                                            <input class="kind2" type="submit" value="Dragée Gourmet" id="gd" name="gd">
                                        </a>
                                    </form>
                                </div>
                            </div>

                            <div class="col d-flex justify-content-center">
                                <div class="d-grid">
                                    <div class="item_div0">
                                        <div class="item_div item_divG20">

                                            <img id="CK4" class="item_img" src="images/gourmet/CM1.png">
                                        </div>
                                    </div>
                                    <!--            <a class="kind" href="#">ChocoMedjool</a>-->
                                    <form action="products.php" method="post">
                                        <a class="kind" href="javascript:void(0);">
                                            <input class="kind2" type="submit" value="ChocoMedjool" id="gme" name="gme">
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div class="d-grid">
                                    <div class="item_div0">
                                        <div class="item_div">

                                            <img id="Occasions" class="item_img" src="images/gourmet/oc-removebg-preview.png">
                                        </div>
                                    </div>
                                    <!--            <a class="kind" href="#">Occasions</a>-->
                                    <form action="products.php" method="post">
                                        <a class="kind" href="javascript:void(0);">
                                            <input class="kind2" type="submit" value="Occasions" id="gocc" name="gocc">
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <br>
                <div class="container-xxl">
                    <span class="nameBrand">Best®</span>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <div class="d-grid">
                                <div class="item_div0 ">
                                    <div class="item_div item_div2">
                                        <img id="B12" class="item_img" src="images/best/B12-removebg-preview.png">
                                    </div>
                                </div>
                                <!--        <a class="kind" href="#">Best nuts</a>-->
                                <form action="products.php" method="post">
                                    <a class="kind" href="javascript:void(0);">
                                        <input class="kind2" type="submit" value="Best nuts" id="bn" name="bn">
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="d-grid">
                                <div class="item_div0">
                                    <div class="item_div item_div2">

                                        <img id="hg6" class="item_img" src="images/best/BestFill-removebg-preview.png">
                                    </div>
                                </div>
                                <!--        <a class="kind" href="#">Best fills</a>-->
                                <form action="products.php" method="post">
                                    <a class="kind" href="javascript:void(0);">
                                        <input class="kind2" type="submit" value="Best fills" id="bf" name="bf">
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="d-grid">
                                <div class="item_div0">
                                    <div class="item_div item_div2">

                                        <img id="ocBEST" class="item_img" src="images/best/34__4_-removebg-preview.png">
                                    </div>
                                </div>
                                <form action="products.php" method="post">
                                    <a class="kind" href="javascript:void(0);">
                                        <input class="kind2" type="submit" value="Occasions" id="bocc" name="bocc">
                                    </a>
                                </form>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <div>  <span class="nameBrand">Lorka®</span>
                                <div class="d-grid">
                                    <div class="item_div0">
                                        <div class="item_div item_div">

                                            <img id="lorka" class="item_img" src="images/lorka/lorkaNoga-removebg-preview.png">
                                        </div>
                                    </div>
                                    <form action="products.php" method="post">
                                        <a class="kind" href="javascript:void(0);">
                                            <input class="kind2" type="submit" value="Lorka" id="lo" name="lo">
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col d-flex justify-content-center">

                            <div>  <span class="nameBrand">Revera®</span>
                                <div class="d-grid">
                                    <div class="item_div0">
                                        <div class="item_div item_div3">

                                            <img id="rev" class="item_img" src="images/revera/reveraKaramelLoze-removebg-preview%20(1).png">
                                        </div>
                                    </div>
                                    <form action="products.php" method="post">
                                        <a class="kind" href="javascript:void(0);">
                                            <input class="kind2" type="submit" value="Revera" id="re" name="re">
                                        </a>
                                    </form>
                                </div>
                            </div>
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
<!--<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>-->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
