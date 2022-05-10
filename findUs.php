<?php
session_start();

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
                    <a href="findUs.php" style="font-size: 17px;color: #aeb2b7">
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
        <section class="wrapper"style="">
            <div class="container-xxl">
            <div class="row" >
               <div class="col d-flex justify-content-center">
                   <img src="images/map_finfus.png" alt="">
               </div>
            </div>

                <div class="row" >
                    <div class="col ">
                        <p style="text-align:center; padding:10px 0">
                            <iframe style="width: 100%;height: 600px"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?t=h&amp;msa=0&amp;msid=205488116237136669827.0005029e67e189ff03c92&amp;source=embed&amp;ie=UTF8&amp;ll=32.305996,35.128999&amp;spn=0.017411,0.027466&amp;z=15&amp;iwloc=0005029e6b50295be609b&amp;output=embed"></iframe><br><small>View <a href="https://maps.google.com/maps/ms?t=h&amp;msa=0&amp;msid=205488116237136669827.0005029e67e189ff03c92&amp;source=embed&amp;ie=UTF8&amp;ll=32.305996,35.128999&amp;spn=0.017411,0.027466&amp;z=15&amp;iwloc=0005029e6b50295be609b" style="color:#0000FF;text-align:left">Al Hijaz Chocolate</a> in a larger map</small>
                        </p>
                    </div>
                </div>
            </div>
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
