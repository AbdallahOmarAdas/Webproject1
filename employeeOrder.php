<?php
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']!='E'){
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
    <link rel="stylesheet" href="css/cartCss.css">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/css_item.css">
    <link rel="stylesheet" href="css/mainPage.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cartCss.css">
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
        <a href="index.html" class="logo" style="margin: 0px;text-transform: none"><img src="images/logo.png" alt="" style="width: 60px;height: 60px">Alhijaz chocolate LTD
        </a>
        <!--logo end-->

        <div class="top-menu " style="padding-top:19px ">
            <ul class="nav top-menu justify-content-end">
<!--                <li><img src="images/Untitled.png"style="margin-right: 30px;margin-top: -8px;" alt=""></li>-->
                <li><a class="logout" href="loginCust.php">Logout</a></li>
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
    <form action="employeeOrder.php" method="post">
    <section id="main-content"style="background-color: #2c3034;">
        <section class="wrapper">
            <div class="container-xxl">
                <table class="table table-striped table-dark" style="color: #fc8804;font-size: 15px">
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">#of Order</th>
                        <th class="text-center" scope="col">Customer Name</th>
                        <th class="text-center" scope="col">created Date</th>
                        <th class="text-center" scope="col">View Order deters </th>
                        <th class="text-center" scope="col">To Employee</th>
                        <th class="text-center" scope="col">Accept order</th>
                        <th class="text-center" scope="col">Deliver Date</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>the Bird</td>
                        <td><input type="submit" value="Get Data"> <a href="javaScript:;"><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 34px;height: 30px" alt=""></a></td>
<!--                        <td><input type="submit" value=""><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 20px;height: 20px" alt=""></td>-->
                        <td>@twitter</td>
                        <td><input type="submit" value="add to my order"></td>
                        <td><input type="date" ></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Otto</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>Otto</td>
                        <td>@twitter</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>the Bird</td>
                        <td>Otto</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" style="max-width: 650px;">
                    <div class="modal-content">
                        <div class="cart_hed modal-header">
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
                                                <h5 class="text-grey mt-1 mr-1 ml-1">5</h5>
                                            </div>
                                            <div>
                                                <h5 class="text-grey">$20.00</h5>
                                            </div>
<!--                                            <div class="d-flex align-items-center">-->
<!--                                                <label for="del1"><i class="fa fa-trash mb-1 text-danger"> Delete </i> </label>-->
<!--                                                <input type="checkbox" id="del1">-->
<!--                                            </div>-->
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
<!--<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>-->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
