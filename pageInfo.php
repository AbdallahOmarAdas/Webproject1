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
if(isset($_POST['info12'])){
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $q1="SELECT * FROM `info`;";
    $res=$con->query($q1);
    for($j=0;$j<4;$j++){
        $row=$res->fetch_row();
        $n=$_POST[$row[0]];
        $qsLogin="UPDATE `info` SET `value`='".$n."' WHERE `name`='".$row[0]."';";
        $con->query($qsLogin);
        $con->commit();
    }
$con->close();
}

if(isset($_POST['info2'])){
    @$con1 = new mysqli('localhost', 'root', '', 'web project');
    $q1="SELECT * FROM `info`;";
    $res=$con1->query($q1);
    $row=$res->fetch_row();
    $row=$res->fetch_row();
    $row=$res->fetch_row();
    $row=$res->fetch_row();
    for($j=0;$j<7;$j++){
        $row=$res->fetch_row();
        $n=$_POST[$row[0]];
        $qsLogin="UPDATE `info` SET `value`='".$n."' WHERE `name`='".$row[0]."';";
        $con1->query($qsLogin);
        $con1->commit();
    }
    $con1->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Page Info. Edit</title>
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
        <a href="manePageCustomer.php" class="logo" style="margin: 0px;text-transform: none"><img src="images/logo.png" alt="" style="width: 60px;height: 60px">Alhijaz chocolate LTD
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
                    <a class="" href="javascript:;">
                        <form action="manePageCustomer.php">
                            <input class="kind4" type="submit" value="Home" name="home" id="home">
                        </form>
                    </a>
                </li>
                <li class="sub-menu">
                <li>
                    <a href="javascript:;class="aSi"">
                    <form action="empOrder.php">
                        <input class="kind4" type="submit" value="Customer's orders" >
                    </form>
                    </a>
                </li>
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
                <li>
                    <a href="javascript:;">
                        <form action="pageInfo.php" method="post">
                            <input class="kind4" type="submit" value="Edit Page info." name="" id="">
                        </form>
                    </a>
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
                                    <button class="kind4" name="submit2" type="" value="gocc" id="gocc">Occasions</button>
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

        <section id="main-content"style="background-color: #2c3034;">
            <section class="wrapper">
                <div class="container-xxl">
                    <div class="row">

                        <div class="col border-end">
                            <form action="pageInfo.php" method="post">
                            <h2 style="text-align: center;color: #fc8804">Brand price change</h2>
                            <table class="table table-striped table-dark" style="color: #fc8804;font-size: 15px">
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">Brand Name</th>
                                    <th class="text-center" scope="col">Brand Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                @$con = new mysqli('localhost', 'root', '', 'web project');
                                $qsLogin="SELECT * FROM `info`;";
                                $res=$con->query($qsLogin);
                                for($j=0;$j<4;$j++) {
                                $row = $res->fetch_row();?>
                                <tr>
                                    <td>
                                        <?php echo $row[0]?>
                                    </td>
                                    <td>
                                        <input type="text" name="<?php echo $row[0]?>" id="<?php echo $row[0]?>" value="<?php echo $row[1]?>" required style="width: 60px"> ₪
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                <button class="kind2" type="submit" name="info12" style="background-color: #fc8804;border-radius: 7px">Save Changes</button>
                            </div>
                        </form>
                        </div>



                        <div class="col">
                            <form action="pageInfo.php" method="post">
                            <h2 style="text-align: center;color: #fc8804">Change contact information</h2>
                            <table class="table table-striped table-dark" style="color: #fc8804;font-size: 15px">
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">Brand Name</th>
                                    <th class="text-center" scope="col">Brand Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                @$con = new mysqli('localhost', 'root', '', 'web project');
                                $qsLogin1="SELECT * FROM `info`;";
                                $res=$con->query($qsLogin1);
                                $row = $res->fetch_row();
                                $row = $res->fetch_row();
                                $row = $res->fetch_row();
                                $row = $res->fetch_row();
                                ?>
                                <tr>
                                    <td>
                                        Box
                                    </td>
                                    <td>
                                        <input type="text" name="<?php $row = $res->fetch_row(); echo $row[0];?>" id="" value="<?php  echo $row[1];?>" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Tel
                                    </td>
                                    <td>
                                        <input type="text" name="<?php $row = $res->fetch_row(); echo $row[0];?>" id="" value="<?php  echo $row[1];?>" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Fax
                                    </td>
                                    <td>
                                        <input type="text" name="<?php $row = $res->fetch_row(); echo $row[0];?>" id="" value="<?php  echo $row[1];?>" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        E-mail
                                    </td>
                                    <td>
                                        <input type="text" name="<?php $row = $res->fetch_row(); echo $row[0];?>" id="" value="<?php  echo $row[1];?>" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Facebook Page
                                    </td>
                                    <td>
                                        <input type="text" name="<?php $row = $res->fetch_row(); echo $row[0];?>" id="" value="<?php  echo $row[1];?>" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Instagram Page
                                    </td>
                                    <td>
                                        <input type="text" name="<?php $row = $res->fetch_row(); echo $row[0];?>" id="" value="<?php  echo $row[1];?>" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Youtube chanel
                                    </td>
                                    <td>
                                        <input type="text"  name="<?php $row = $res->fetch_row(); echo $row[0];?>" id="" value="<?php  echo $row[1];?>" required>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                <button type="submit" name="info2" class="kind2" style="background-color: #fc8804;border-radius: 7px">Save Changes</button>
                            </div>
                        </form>
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
