<?php
$is_men=1;
session_start();
$_SESSION['type']='u';
if (isset($_POST['login'])) {
    $userName=$_POST['login_username'];
    $password=$_POST['login_pass'];
    $f=0;
    $qsLogin='';
    $con='';
if(isset($_POST['login_username']) && isset($_POST['login_pass'])) {
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $qsLogin="SELECT * FROM `login`";
    $f=1;
}
    if($f==1){
        $is_men=0;
        $res=$con->query($qsLogin);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_row();
            if($userName==$row[0] and sha1($password)==$row[1] && 'C'==$row[2]){
                $is_men=1;
                $_SESSION['type']='C';
                header('location:manePageCustomer.php');
            }
            elseif($userName==$row[0] and sha1($password)==$row[1] && 'M'==$row[2]){
                $is_men=1;
                $_SESSION['type']='M';
                //change it when you finish the main page of the manger
                header('location:manePageCustomer.php');
            }
            elseif($userName==$row[0] and sha1($password)==$row[1] && 'E'==$row[2]){
                $is_men=1;
                $_SESSION['type']='E';
                //change it when you finish the main page of the employee
                header('location:manePageCustomer.php');
            }
        }


    }

}
elseif(isset($_POST['reg'])) {
    $id='';
    $emil='';
    $fullName='';
    $phone=0;
    $userName='';
    $password='';
    $con='';

    if(isset($_POST['reg_Email']) && isset($_POST['reg_fullName']) && isset($_POST['reg_phone'])&&isset($_POST['reg_userName']) &&isset($_POST['reg_password'])&&isset($_POST['reg_ID'])){
        $emil=$_POST['reg_Email'];
        $id=$_POST['reg_ID'];
        $fullName=$_POST['reg_fullName'];
        $phone=$_POST['reg_phone'];
        $userName=$_POST['reg_userName'];
        $password=$_POST['reg_password'];
        @$con= new mysqli('localhost','root','','web project');
        $qsLogin="INSERT INTO `login` (`username`, `password`, `type`) VALUES ('".$userName."', SHA1('".$password."'), 'C');";
        $qsCustomer="INSERT INTO `customer` (`id`, `FullName`, `email`, `phoneNumber`, `username`) VALUES ('".$id."','".$fullName."','".$emil."','".$phone."','".$userName."');";
        $con->query($qsLogin);
        $res=$con->query($qsCustomer);
        if($res){

        }
        else{
            echo 'error fgnofdkgnonfoj';
        }
        $con->close();
        header('location:loginCust.php');

    }
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
    <link rel="stylesheet" href="css/mainPage.css">
    <link rel="stylesheet" href="css/loginDiv.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
<section id="container" style="background-color: #d6d5d5">
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <a href="index.html" class="logo" style="margin: 0px"><img src="images/logo.png" alt="" style="width: 60px;height: 60px">Alhijaz chocolate LTD
        </a>


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
                <li class="sub-menu">
                    <a href="#contact_us" style="font-size: 17px;color: #aeb2b7">
                        Connect Us
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="find_us.html" style="font-size: 17px;color: #aeb2b7">
                        Find Us
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
        <section class=""style=" background: url('images/light-wood-texture-wood-background-natural-materials-wood-texture.jpg')no-repeat  fixed">
            <div class="row" style="padding-top: 60px;margin: 0px">

                <div class="col" style=" padding: 0px;">

                    <div id="carouselExampleDark" class="carousel carousel-dark slide w-100" data-bs-ride="carousel" style="">
                        <div class="carousel-indicators" style="height: 0px">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>

                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="images/slider/s1.jpg" class="d-block w-100 ipp">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/slider/s2.jpg" class="d-block w-100 ipp" alt="..." >
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/slider/s4.jpg" class="d-block w-100 ipp" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/slider/s5.jpg" class="d-block w-100 ipp" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/slider/s6.jpg" class="d-block w-100 ipp" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

                <div class="col d-flex justify-content-center " style="background-color: #2f323a;padding-top: 30px;padding-bottom: 20px">
                    <div id="div_login">
                        <form action="loginCust.php" method="post">
                    <span class="login_span p-b-49" style="font-style: italic;font-family: Bold">
						Log in
					</span>

                            <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <span class="label-input100"><img src="images/user-solid-svg.png" alt=""> Username</span>
                                <input class="input100" type="text" name="login_username" placeholder="Type your username">
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <span class="label-input100"><img src="images/lock-solid-svg.png" alt=""> Password</span>
                                <input class="input100" type="password" name="login_pass" placeholder="Type your password">
                                <span class="focus-input100" ></span>
                            </div>
                            <?php

                            if($is_men==0){
                            echo '<p class="login_a" style="color: #ac2925">invalid userName or Password</p>';
                            }
                            ?>

                            <div class="text-right p-t-8 p-b-31">

                                <a href="#" class="login_a" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                    Forgot password?
                                </a>
                            </div>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <input class="login100-form-btn c12 hoFont" type="submit" name="login" value="Log in">
                                </div>

                                <div>
                                    <p style="text-align: center">Don't have an account?<br>
                                        <a class="void_a" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Create Account Now!</a>
                                    </p>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
                        <div class="modal-dialog modal-dialog-scrollable" id="div_reg2">
                            <div class="modal-content" style="border-radius: 30px;padding-bottom: 15px">
                                <div class="modal-header" style="    background-color:#fc8804 ;">
                                    <h5 class="modal-title" id="staticBackdropLabel">Create Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="loginCust.php" method="post">
                                        <div class="wrap-input100 validate-input m-b-23">
                                            <span class="label-input100"><img class="icon" src="images/id-card-solid-svg.png" alt="">  ID</span>
                                            <input class="input100" type="text" name="reg_ID" placeholder="Type your ID" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input m-b-23">
                                            <span class="label-input100"><img class="icon" src="images/envelope-solid-svg.png" alt="">  Email</span>
                                            <input class="input100" type="email" name="reg_Email" placeholder="Type Email" required>
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input m-b-23" >
                                            <span class="label-input100"><img class="icon" src="images/keyboard-solid-svg.png" alt=""> Full name</span>
                                            <input class="input100" type="text" name="reg_fullName" placeholder="Type Full name" required>
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input m-b-23" >
                                            <span class="label-input100"><img class="icon" src="images/phone-solid-svg.png" alt=""> Phone number</span>
                                            <input class="input100" type="tel" name="reg_phone" placeholder="Type Phone number" required>
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input m-b-23" >
                                            <span class="label-input100"><img class="icon" src="images/user-solid-svg.png" alt=""> User Name</span>
                                            <input class="input100" type="text" name="reg_userName" placeholder="chose username" required>
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input m-b-23">
                                            <span class="label-input100"><img class="icon" src="images/lock-solid-svg.png" alt=""> Password</span>
                                            <input class="input100" type="password" name="reg_password" placeholder="Type Password" required>
                                            <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-login100-form-btn">
                                            <div class="login100-form-bgbtn"></div>
                                            <input class="login100-form-btn c12" type="submit" value="sign up" name="reg" >
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                        <div class="modal-dialog" style="margin-top: 7rem;">
                            <div class="modal-content" style="border-radius: 30px;background-color: #2f323a;">
                                <div class="modal-header" style="    background-color:#fc8804 ;border-radius: 28px 28px 0px 0px;border-color: #2f323a;">
                                    <h5 class="modal-title" id="staticBackdropLabel1">Reset your password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <p style="font-size: 18px;padding-left: 20px">Please enter your email to get the code to reset your password.</p>
                                <div class="modal-body" style="background-color: #2f323a;">
                                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                        <span class="label-input100"><img class="icon" src="images/envelope-solid-svg.png" alt=""> Email</span>
                                        <input class="input100" type="email" name="Res_Email" placeholder="Enter your Email">
                                        <span class="focus-input100"></span>
                                    </div>
                                </div>
                                <div class="modal-footer" style="border-color:#2f323a;">

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                                    <input type="submit" value="Send code" class="btn btn-primary" style="height:38px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer" id="contact_us">
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
<!---->
<!--<script type="application/javascript">-->
<!--    $(document).ready(function() {-->
<!--        $("#date-popover").popover({-->
<!--            html: true,-->
<!--            trigger: "manual"-->
<!--        });-->
<!--        $("#date-popover").hide();-->
<!--        $("#date-popover").click(function(e) {-->
<!--            $(this).hide();-->
<!--        });-->
<!---->
<!--        $("#my-calendar").zabuto_calendar({-->
<!--            action: function() {-->
<!--                return myDateFunction(this.id, false);-->
<!--            },-->
<!--            action_nav: function() {-->
<!--                return myNavFunction(this.id);-->
<!--            },-->
<!--            ajax: {-->
<!--                url: "show_data.php?action=1",-->
<!--                modal: true-->
<!--            },-->
<!--            legend: [{-->
<!--                type: "text",-->
<!--                label: "Special event",-->
<!--                badge: "00"-->
<!--            },-->
<!--                {-->
<!--                    type: "block",-->
<!--                    label: "Regular event",-->
<!--                }-->
<!--            ]-->
<!--        });-->
<!--    });-->
<!---->
<!--    function myNavFunction(id) {-->
<!--        $("#date-popover").hide();-->
<!--        var nav = $("#" + id).data("navigation");-->
<!--        var to = $("#" + id).data("to");-->
<!--        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);-->
<!--    }-->
<!--</script>-->
</body>

</html>
