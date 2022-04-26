<?php
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']!='C'){
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
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!--    <script src="node_modules/@fortawesome/fontawesome-free/js/brands.js"></script>-->
    <!--    <script src="node_modules/@fortawesome/fontawesome-free/js/solid.js"></script>-->
    <!--    <script src="node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>-->
    <!--    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />-->
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/cartCss.css">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/css_item.css">
    <link rel="stylesheet" href="css/mainPage.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <!--    <script src="lib/chart-master/Chart.js"></script>-->
</head>

<body style="background-color: rgb(34, 36, 42);">
<section id="container" style="background-color: #22242a">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
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
                <li><img src="images/Untitled.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 34px;height: 30px;margin-right: 30px;margin-top: -4px;" alt=""></a></li>
                <!--                <li><img src="images/Untitled.png"style="margin-right: 30px;margin-top: -8px;" alt=""></li>-->
                <li><a class="logout" href="login.html">Logout</a></li>
            </ul>
        </div>

    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="mt">
                    <a class="" href="javascript:;">
                        <form action="manger3.html">
                            <input class="kind4" type="submit" value="Home" name="home" id="home">
                        </form>
                    </a>
                </li>
                <li class="sub-menu">
                <li>
                    <a href="javascript:;">
                        <form action="manger3.html">
                            <input class="kind4" type="submit" value="My orders" name="cus_Order" id="cus_Order">
                        </form>
                    </a>
                </li>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">

                        <span class="main_menu">Gourmet</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="javascript:;">
                                <form action="manger3.html">
                                    <input class="kind4" type="submit" value="Gourmet" name="gmedit" id="gmedit">
                                </form>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <form action="manger3.html">
                                    <input class="kind4" type="submit" value="Dragee" name="gde" id="gde">
                                </form>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:;">
                                <form action="manger3.html">
                                    <input class="kind4" type="submit" value="chocoMedjool"name="gchme" id="gchme">
                                </form>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:;">
                                <form action="manger3.html">
                                    <input class="kind4" type="submit" value="Occasions" name="gocce" id="gocce">
                                </form>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">

                        <span class="main_menu">Best</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="javascript:;">
                                <form action="manger3.html">
                                    <input class="kind4" type="submit" value="Best Nuts" name="bne" id="bne">
                                </form>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <form action="manger3.html">
                                    <input class="kind4" type="submit" value="Best Fill" name="bfe" id="bfe">
                                </form>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <form action="manger3.html">
                                    <input class="kind4" type="submit" value="Occasions" name="bocce" id="bocce">
                                </form>
                            </a>

                        </li>
                    </ul>
                </li>
                <li class="sub-menu">

                    <a href="javascript:;">
                        <form action="manger3.html">
                            <input class="kind4" type="submit" value="Lorka" name="lorkae" id="lorkae">
                        </form>
                    </a>

                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <form action="manger3.html">
                            <input class="kind4" type="submit" value="Revera" name="reverae" id="reverae">
                        </form>
                    </a>
                </li>
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
        <section class="wrapper">
            <table class="table table-striped table-dark" style="color: #fc8804;font-size: 15px">
                <thead>
                <tr>
                    <th class="text-center" scope="col">#of Order</th>
                    <th class="text-center" scope="col">created Date</th>
                    <th class="text-center" scope="col">View Order deters </th>
                    <th class="text-center" scope="col">Deliver Date</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>10/5/2020</td>
                    <td><a href="javaScript:;"><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 34px;height: 30px" alt=""></a></td>
                    <!--                        <td><input type="submit" value=""><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 20px;height: 20px" alt=""></td>-->
                    <td>15/5/2020</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>10/5/2020</td>
                    <td><input type="submit" value="Get Data"> <a href="javaScript:;"><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 34px;height: 30px" alt=""></a></td>
                    <!--                        <td><input type="submit" value=""><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 20px;height: 20px" alt=""></td>-->
                    <td>15/5/2020</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>10/5/2020</td>
                    <td><input type="submit" value="Get Data"> <a href="javaScript:;"><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 34px;height: 30px" alt=""></a></td>
                    <!--                        <td><input type="submit" value=""><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 20px;height: 20px" alt=""></td>-->
                    <td>15/5/2020</td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td>10/5/2020</td>
                    <td><input type="submit" value="Get Data"> <a href="javaScript:;"><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 34px;height: 30px" alt=""></a></td>
                    <!--                        <td><input type="submit" value=""><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 20px;height: 20px" alt=""></td>-->
                    <td>15/5/2020</td>
                </tr>
                </tbody>
            </table>
            <form action="myOrder.php" method="post">
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" style="max-width: 650px;">
                    <div class="modal-content">
                        <div class="modal-header cart_hed" style="background-color: #fc8804;">
                            <h5 class="modal-title" id="staticBackdropLabel">Shopping cart</h5>

                            <input class="refresh_sub kind2 " type="submit" value="Refresh" style="background-color:#22242a;border-radius: 20px">
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
                                                <label for="del1"><i class="fa fa-trash mb-1 text-danger"> Delete </i> </label>
                                                <input type="checkbox" id="del1">
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
            </form>
        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p class="copy">
                &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
            </p>
            <div class="container" >
                <p style="background-color: #22242A; text-align: left;padding-left: 400px">
                    Alhijaz Chocolate LTD <br>
                    Anabta P.O. Box 78 <br>
                    Tel: 972 (0) 9 2673077 <br>
                    Fax: 972 (0) 9 2680303 <br>
                    E-mail: info@alhijaz.ps <br>
                    Palestine <br>
                </p>
                <div class="container align-content-start">
                    <a  href="https://www.facebook.com/alhijazchocolate"><i class="fa-brands fa-facebook-square fa-2x font_images"></i></a>
                    <a href="https://www.youtube.com/channel/UC01d6ix0kxbZcMv2jT4mzrQ"><i class="fa-brands fa-youtube fa-2x font_images" style="color:red"></i></a>
                    <a href="mailto://info@alhijaz.ps"><i class="fa-solid fa-envelope fa-2x" style=""></i></a>
                </div>

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
