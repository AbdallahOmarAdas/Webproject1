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
        <!--logo start-->
        <a href="manePageCustomer.php" class="logo" style="margin: 0px;text-transform: none"><img src="images/logo.png" alt="" style="width: 60px;height: 60px">Alhijaz chocolate LTD
        </a>
        <!--logo end-->

        <div class="top-menu " style="padding-top:19px ">
            <ul class="nav top-menu justify-content-end">
                <!--                <li><img src="images/Untitled.png"style="margin-right: 30px;margin-top: -8px;" alt=""></li>-->
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
        </div>
    </aside>
    <form action="mangerAddEmployee.php" method="post">
        <section id="main-content"style="background-color: #2c3034;">
            <section class="wrapper">
                <div class="container-xxl">
                    <table class="table table-striped table-dark" style="color: #fc8804;font-size: 15px">
                        <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Full Name</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Gender</th>
                            <th class="text-center" scope="col">Phone Number</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        @$con = new mysqli('localhost', 'root', '', 'web project');
                        $qsLogin="SELECT * FROM `employee`";
                        $res=$con->query($qsLogin);
                        if($res-> num_rows > 0){
                            while($row=$res -> fetch_assoc()){
                                echo "<tr><td>".$row["id"]."</td><td>".$row["FullName"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td><td>".$row["phoneNumber"]."</td></tr>";

                            }
                            echo "</tbody>";
                        }
                        else{
                            echo "0 result";
                        }

                        $con->close();

                        ?>



                    </table>
                </div>
                <!-- Modal -->


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
