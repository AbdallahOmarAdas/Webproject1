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
    <title>Main Page</title>
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
                <li><a class="logout" href="loginCust.php">Logout</a></li>
            </ul>
        </div>

    </header>
    <aside>
        <div id="sidebar" class="nav-collapse ">
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
                else{?>
                    <li class="sub-menu">
                    <li>
                        <a href="javascript:;class="aSi"">
                        <form action="empOrder.php">
                            <input class="kind4" type="submit" value="Customer's orders" >
                        </form>
                        </a>
                    </li>
                    </li>
                <?php
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
                <li>
                            <a href="javascript:;">
                                <form action="pageInfo.php" method="post">
                                    <input class="kind4" type="submit" value="Edit Page info." name="" id="">
                                </form>
                            </a>
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

        </div>
    </aside>

    <section id="main-content">
        <section class="wrapper"style=" background: url('images/light-wood-texture-wood-background-natural-materials-wood-texture.jpg')no-repeat  fixed">
            <div class="" >
                <div class="" >
                    <div class="row" >
                        <div class="col">
                            <br>
                            <span><img src="images/gor-removebg-preview.png" alt=""></span>

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
                <form action="" method="">
                </form>
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

                                    <form action="products2.php" method="post">
                                        <input type="hidden" name="action2" value="submit2" id="submit2" />
                                        <a class="kind" href="javascript:void(0);">
                                            <button class="kind2" name="submit2" type="submit" value="gour" id="gour">Gourmet</button>
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
                                    <form action="products2.php" method="post">
                                        <input type="hidden" name="action2" value="submit2" id="submit2" />
                                        <a class="kind" href="javascript:void(0);">
                                            <button class="kind2" name="submit2" type="submit" value="dr" id="dr">Dragee</button>
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
                                    <form action="products2.php" method="post">
                                        <input type="hidden" name="action2" value="submit2" id="submit2" />
                                        <a class="kind" href="javascript:void(0);">
                                            <button class="kind2" name="submit2" type="submit" value="gmd" id="gmd">chocoMedjool</button>
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
                                    <form action="products2.php" method="post">
                                        <input type="hidden" name="action2" value="submit2" id="submit2" />
                                        <a class="kind" href="javascript:void(0);">
                                            <button class="kind2" name="submit2" type="submit" value="gocc" id="gocc">Occasions</button>
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
                                <form action="products2.php" method="post">
                                    <input type="hidden" name="action2" value="submit2" id="submit2" />
                                    <a class="kind" href="javascript:void(0);">
                                        <button class="kind2" name="submit2" type="submit" value="bn" id="bn">Best Nuts</button>
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
                                <form action="products2.php" method="post">
                                    <input type="hidden" name="action2" value="submit2" id="submit2" />
                                    <a class="kind" href="javascript:void(0);">
                                        <button class="kind2" name="submit2" type="submit" value="bf" id="bf">Best Fill</button>
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
                                <form action="products2.php" method="post">
                                    <input type="hidden" name="action2" value="submit2" id="submit2" />
                                    <a class="kind" href="javascript:void(0);">
                                        <button class="kind2" name="submit2" type="submit" value="bocc" id="bocc">Occasions</button>
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
                                    <form action="products2.php" method="post">
                                        <input type="hidden" name="action2" value="submit2" id="submit2" />
                                        <a class="kind" href="javascript:void(0);">
                                            <button class="kind2" name="submit2" type="submit" value="Lorka" id="Lorka">Lorka</button>
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
                                    <form action="products2.php" method="post">
                                        <input type="hidden" name="action2" value="submit2" id="submit2" />
                                        <a class="kind" href="javascript:void(0);">
                                            <button class="kind2" name="submit2" type="submit" value="Revera" id="Revera">Revera</button>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </form>
        </section>
    </section>
    <footer class="site-footer" id="contactUs">
        <div class="text-center">
            <p class="copy">
                All Rights Reserved  &copy; Copyrights <strong>Alhijaz chocolate LTD</strong>.
            </p>
            <div class="container" >
                <p style="background-color: #22242A; text-align: left;padding-left: 400px">
                <?php
                @$con = new mysqli('localhost', 'root', '', 'web project');
                $qsLogin1="SELECT * FROM `info`;";
                $res=$con->query($qsLogin1);
                $row=$res->fetch_row();
                $row=$res->fetch_row();
                $row=$res->fetch_row();
                $row=$res->fetch_row();
                for($j=0;$j<4;$j++){
                    $row=$res->fetch_row();?>
                <h5><?php echo $row[1];?></h5>

                <?php
                }?>
                <a href="mailto:<?php  echo $row[1];?>"><img src="images/envelope-solid%20(1)-svg.png" alt=""></a>
                <a  href="<?php $row=$res->fetch_row(); echo $row[1];?>"><img src="images/facebook-brands-svg.png" alt=""></a>
                <a  href="<?php $row=$res->fetch_row(); echo $row[1];?>"><img src="images/instagram-brands-svg.png" alt=""></a>
                <a href="<?php $row=$res->fetch_row(); echo $row[1];?>"><img src="images/youtube-brands-svg.png" alt=""></a>

                <?php


                ?>
                </p>

            </div>
        </div>

    </footer>
</section>

<script src="lib/jquery/jquery.min.js"></script>

<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="lib/jquery.sparkline.js"></script>
<script src="lib/common-scripts.js"></script>
<script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="lib/gritter-conf.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
