
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

<?php
if(isset($_POST['edit'])){
    if(!empty($_POST['submitedit'])) {

        foreach($_POST['submitedit'] as $value){
            $emile='';
            $phonee=0;
            @$con = new mysqli('localhost', 'root', '', 'web project');
            $emile=$_POST[$value.'m'];

            $phonee=$_POST[$value.'t'];
            echo $emile;
            $sqql="UPDATE `employee` SET `email`='".$emile. "',`phoneNumber`='".$phonee. "' WHERE `id`='".$value."';";
            $con->query($sqql);

            $con->commit();
            $con->close();



        }}}

?>






<?php
if(isset($_POST['delete'])){

    if(!empty($_POST['submitedit'])) {

        foreach($_POST['submitedit'] as $value){
            //  echo "Chosen colour : ".$value.'<br/>';

            $f=0;
            $qsLogin='';
            $con='';

            @$con = new mysqli('localhost', 'root', '', 'web project');
            $qsLogin="DELETE FROM `employee` WHERE `id`='".$value."'";
            $toget="SELECT `username` FROM `employee` where `id`='".$value."';";

            $res=$con->query($toget);
            $userName='';
            for($i=0;$i<$res->num_rows;$i++){
                $row=$res->fetch_row();

                $userName=$row[0];


                $todel="DELETE FROM `login` WHERE `username` = '".$userName."';";
                $con->query($todel);
                $con->query($qsLogin);

            }

            $con->commit();
            $con->close();
        }









    }}
?>








<?php
if(isset($_POST['save'])) {
    $id='';
    $emil='';
    $fullName='';
    $phone=0;
    $userName='';
    $password='';
    $con='';

    if(isset($_POST['reg_Email']) && isset($_POST['reg_FullName']) && isset($_POST['reg_phone'])&&isset($_POST['reg_username']) &&isset($_POST['reg_password'])&&isset($_POST['reg_ID'])){
        $emil=$_POST['reg_Email'];
        $id=$_POST['reg_ID'];
        $fullName=$_POST['reg_FullName'];
        $phone=$_POST['reg_phone'];
        $userName=$_POST['reg_username'];
        $password=$_POST['reg_password'];
        @$con= new mysqli('localhost','root','','web project');
        $qsLogin="INSERT INTO `login` (`username`, `password`, `type`) VALUES ('".$userName."', SHA1('".$password."'),'E');";
        // $qsCustomer="INSERT INTO `employee` (`id`, `FullName`, `email`, `gender`, `phoneNumber`, `username`) ('".$id."','".$fullName."','".$emil."','Male','".$phone."','".$userName."');";
        $qse="INSERT INTO `employee` (`id`, `FullName`, `email`, `gender`, `phoneNumber`, `username`) VALUES ('".$id."', '".$fullName."','".$emil."', 'Male','".$phone."','".$userName."');";
        $con->query($qsLogin);
        $con->query($qse);
        $con->commit();
        $con->close();

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
            <!-- sidebar menu end-->
        </div>
    </aside>


    <section id="main-content"style="background-color: #2c3034;">
        <section class="wrapper">
            <form action="mangerAddEmployee.php" method="post">
                <form action="mangerAddEmployee.php" method="post">

                    <input type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" value="Add Employee">
                    <input type="submit" class="btn btn-info" name="edit" value="Edit information">
                    <input type="submit"  class="btn btn-danger" name="delete" value="Delete Employee">

                    <table class="table table-striped table-dark" style="color: #fc8804;font-size: 15px">
                        <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Full Name</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Gender</th>
                            <th class="text-center" scope="col">Phone Number</th>
                            <th class="text-center" scope="col">Select</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        @$con = new mysqli('localhost', 'root', '', 'web project');
                        $qsLogin="SELECT * FROM `employee`";
                        $res=$con->query($qsLogin);
                        if($res-> num_rows > 0){
                            while($row=$res -> fetch_assoc()){
                                echo "<tr><td>".$row["id"]."</td><td>".$row["FullName"]."</td><td>"."<input type='email' name='".$row['id']."m' id='".$row['id']."m' value='".$row["email"]."'</td><td>".$row["gender"]."</td><td>"."<input type='tel' name='".$row['id']."t' id='".$row['id']."t' value='".$row["phoneNumber"]."'</td><td>"."<input type='checkbox' name='submitedit[]' value='".$row["id"]."'</td></tr>";

                            }
                            echo "</tbody>";
                        }
                        else{
                            echo "0 result";
                        }

                        $con->close();

                        ?>    </tbody>
                    </table>
                    </div>
                </form>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
                    <div class="modal-dialog modal-dialog-scrollable" id="div_reg2">
                        <div class="modal-content" style="border-radius: 30px;padding-bottom: 15px">
                            <div class="modal-header " style="    background-color:#fc8804 ;">
                                <h5 class="modal-title" id="staticBackdropLabel">Add New Employee</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="mangerAddEmployee.php" method="post">
                                    <div class="wrap-input100 validate-input m-b-23">
                                        <span class="label-input100"><img class="icon" src="images/id-card-solid-svg.png" alt="">  ID</span>
                                        <input class="input100" type="text" name="reg_ID" placeholder="Type your ID" required>
                                        <span class="focus-input100"></span>
                                    </div>

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
                                    <div class="" style="padding-bottom: 15px">
                                        <span class="label-input100"><img class="icon" src="images/genderIcon.png" alt=""> Gender</span>
                                        <table style="margin-left: 23px;margin-top: 5px">
                                            <tr>
                                                <td>
                                                    <input class="" type="radio" value="Male" name="gender" id="m">
                                                    <label class="label-input100" for="m">Male</label>

                                                </td>
                                                <td style="padding-left: 50px;">
                                                    <input class="" type="radio" value="Female" name="gender" id="f">
                                                    <label class="label-input100" for="f">Male</label>

                                                </td>
                                            </tr>
                                        </table>
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
                                        <input class="login100-form-btn " type="submit" value="Save" name="save">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </section>






    <footer class="site-footer">
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
