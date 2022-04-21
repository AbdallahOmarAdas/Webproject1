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
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/css_item.css">
    <link rel="stylesheet" href="css/mainPage.css">

    <link rel="stylesheet" href="css/productBorder.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <!--    <script src="lib/chart-master/Chart.js"></script>-->

</head>

<body style="background-color: #2c3034">
<section id="container" style="background-color: #d6d5d5">
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

                <li><a class="void_a" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img src="images/Untitled.png"style="margin-right: 30px;margin-top: -8px;" alt=""></a></li>
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
    <form action="employee.php" method="post">
        <section id="main-content"style="background-color: #c8d9d1;">
            <section class="wrapper">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-3">

                            <div style="position: fixed">
                                <form action="">
                                    <table>
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
                                                <br>
                                                <div class="wrap-input100 validate-input">
                                                    <p class="please_type label-input100 "><i class="fa-solid fa-magnifying-glass-arrow-right fs-5"></i> Search by name:</p>
                                                    <input class="input100" type="text" name="login_username" placeholder="Type product name">
                                                    <span class="focus-input100"></span>

                                                </div>
                                                <input type="submit" class="productBuy" value="search"style="width: 100px">

                                            </td>
                                        <tr>
                                            <td colspan="2">

                                            </td>
                                        </tr>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>

                        <div class="col-9">
                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div01">
                                    <div class="item_div1">

                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <form action="products.php" method="post">

                                        <input class="productBuy" type="submit" value="choco" id="bocc" name="bocc" onmouseout="document.getElementById('bocc').setAttribute('value','choco')" onmouseenter="document.getElementById('bocc').setAttribute('value','Add to cart')">

                                    </form>
                                </div>
                            </div>

                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">

                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <form action="products.php" method="post">

                                        <input class="productBuy" type="submit" value="choco" id="bocc" name="bocc" onmouseout="document.getElementById('bocc').setAttribute('value','choco')" onmouseenter="document.getElementById('bocc').setAttribute('value','Add to cart')">

                                    </form>
                                </div>
                            </div>

                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>


                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>


                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>

                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>


                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>


                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>


                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>

                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>

                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>
                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>
                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>
                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>
                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>
                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>
                            <div class="frame">
                                <div class="lines"></div>
                                <div class="angles"></div>
                                <div class="item_div0">
                                    <div class="item_div">
                                        <div class="buy1"> <input class="but-buy"  type="button" value="Buy"></div>
                                        <img id="hg6" class="item_img" src="images/too.png" alt="الصورة الاولى">
                                    </div>
                                    <p>image 1</p>
                                </div>
                            </div>




                        </div>

                    </div>
                </div>
            </section>
        </section>

    </form>

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer fixed-bottom">
        <div class="text-center">
            <p class="copy">
                &copy; Copyrights <strong>Alhijaz chocolate LTD</strong>. All Rights Reserved
            </p>
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

</body>

</html>
