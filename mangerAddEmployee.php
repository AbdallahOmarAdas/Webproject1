<?php
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']!='M'){
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
    <link rel="stylesheet" href="css/addEmp.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cartCss.css">
</head>

<body style="background-color: #2c3034">
<section id="container" style="background-color: #d6d5d5">
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <a href="index.html" class="logo" style="margin: 0px;text-transform: none"><img src="images/logo.png" alt="" style="width: 60px;height: 60px">Alhijaz chocolate LTD
        </a>
        <div class="top-menu " style="padding-top:19px ">
            <ul class="nav top-menu justify-content-end">
                <li><a class="logout" href="login.html">Logout</a></li>
            </ul>
        </div>

    </header>
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
                    <a href="javascript:;"> <span class="main_menu">Employees</span></a>

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

    <form action="mangerAddEmployee.php" method="post">
        <section id="main-content"style="background-color: #2c3034;">
            <section class="wrapper">
                <div class="container-xxl">
                    <input type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="Add Employee">
                    <input type="submit" class="btn btn-info" value="Edit information">
                    <input type="submit"  class="btn btn-danger" value="Delete Employee">

                    <table class="table table-striped table-dark" style="color: #fc8804;font-size: 15px">
                        <thead>
                        <tr>
                            <th class="" scope="col">ID</th>
                            <th class="text-center" scope="col">Full Name</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Gender</th>
                            <th class="text-center" scope="col">Phone Number</th>
                            <th class="text-center" scope="col">To Edit</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">11924996</th>
                            <td>abdallah adas</td>
                            <td><input type="email" value="abdallah@hotmail.com"></td>
                            <td>Male</td>
                            <td><input type="tel"></td>
                            <td><input type="checkbox" id="e1" name="e1"></td>
                        </tr>
                        <tr>
                            <th scope="row">11924996</th>
                            <td>abdallah adas</td>
                            <td><input type="email" value="abdallah@hotmail.com"></td>
                            <td>Male</td>
                            <td><input type="tel"></td>
                            <td><input type="checkbox" id="e2" name="e2"></td>
                        </tr>
                        <tr>
                            <th scope="row">11924996</th>
                            <td>abdallah adas</td>
                            <td><input type="email" value="abdallah@hotmail.com"></td>
                            <td>Male</td>
                            <td><input type="tel"></td>
                            <td><input type="checkbox" id="e3" name="e3"></td>
                        </tr>
                        <tr>
                            <th scope="row">11924996</th>
                            <td>abdallah adas</td>
                            <td><input type="email" value="abdallah@hotmail.com"></td>
                            <td>Male</td>
                            <td><input type="tel"></td>
                            <td><input type="checkbox" id="e4" name="e4"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Modal -->


                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
                    <div class="modal-dialog modal-dialog-scrollable" id="div_reg2">
                        <div class="modal-content" style="border-radius: 30px;padding-bottom: 15px">
                            <div class="modal-header " style="    background-color:#fc8804 ;">
                                <h5 class="modal-title" id="staticBackdropLabel">Add New Employee</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">

                                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                        <span class="label-input100"><img class="icon" src="images/envelope-solid-svg.png" alt="">  Email</span>
                                        <input class="input100" type="email" name="reg_Email" placeholder="Type Email">
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                        <span class="label-input100"><img class="icon" src="images/keyboard-solid-svg.png" alt=""> Full name</span>
                                        <input class="input100" type="text" name="reg_FullName" placeholder="Type Full name">
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                        <span class="label-input100"><img class="icon" src="images/phone-solid-svg.png" alt=""> Phone number</span>
                                        <input class="input100" type="tel" name="reg_phone" placeholder="Type Phone number">
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                        <span class="label-input100"><img class="icon" src="images/user-solid-svg.png" alt=""> User Name</span>
                                        <input class="input100" type="text" name="reg_username" placeholder="chose username">
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                        <span class="label-input100"><img class="icon" src="images/lock-solid-svg.png" alt=""> Password</span>
                                        <input class="input100" type="password" name="reg_password" placeholder="Type Password">
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="wrap-login100-form-btn">
                                        <input class="login100-form-btn " type="submit" value="Save">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>




    </form>

    <footer class="site-footer fixed-bottom">
        <div class="text-center">
            <p class="copy">
                &copy; Copyrights <strong>Alhijaz chocolate LTD</strong>. All Rights Reserved
            </p>
        </div>
    </footer>

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
