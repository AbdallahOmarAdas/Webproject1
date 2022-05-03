
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']!='M' && $_SESSION['type']!='E'){
        header('location:loginCust.php');
    }
}
else{
    header('location:loginCust.php');
}

if(isset($_POST['acceptOrder'])){
$ordN=$_POST['toAccept'];
$dateA=$_POST[$ordN.'ad'];
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $qrAccept="UPDATE `cusorder` SET `emp`='".$_SESSION['userName']."',`deleverDate`='".$dateA."' WHERE `orderN`='".$ordN."';";
    $con->query($qrAccept);
    $con->commit();
    $con->close();
}

if(isset($_POST['editDate'])){
    $ordN1=$_POST['toEdate'];
    $dateA1=$_POST[$ordN1.'ed'];
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $qrAccept="UPDATE `cusorder` SET `deleverDate`='".$dateA1."' WHERE `orderN`='".$ordN1."';";
    $con->query($qrAccept);
    $con->commit();
    $con->close();
}



if(isset($_POST['cancelOrder'])){
    $ordN21=$_POST['toCancel'];
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $qrCancel="UPDATE `cusorder` SET `emp` = null WHERE `cusorder`.`orderN` = ".$ordN21.";";
    $con->query($qrCancel);
    $con->commit();
    $con->close();
}
if(isset($_POST['delFromOrders']))
{
    @$con = new mysqli('localhost', 'root', '', 'web project');
    $qrdelOrder="DELETE FROM `cusorder` WHERE `orderN` ='".$_POST['delFromOrders']."';";
    $con->query($qrdelOrder);
    $con->close();
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
                <li class="sub-menu" >
                    <a href="javascript:;" class="aSi " >
                        <form action="empOrder.php" method="post">
                        <button class="kind4" name="corder" type="submit" value="corder" id="corder">Customer's orders</button>
                        </form>
                    </a>
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

                <form action="empOrder.php" method="post">

                    <form action="empOrder.php" method="post">
                    <input type="submit" name="myAccepted" id="myAccepted" class="btn" style="background-color:#fc8804;color: #aeb2b7 ; font-size: 18px;font-family: Bold" value="Show my Accepted Orders">
                    </form>
                        <?php
                   if(isset($_POST['myAccepted'])){
                       ?>
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
                               <th class="text-center" scope="col">Delete Order</th>
                           </tr>
                           </thead>
                           <tbody>
                           <?php
                           @$con2 = new mysqli('localhost', 'root', '', 'web project');
                           $qrListOrder2="SELECT * FROM `cusorder`,`customer` WHERE cusorder.customer=customer.username && emp='".$_SESSION['userName']."';";
                           $res=$con2->query($qrListOrder2);
                           for($i=0;$i<$res->num_rows;$i++) {
                               $row = $res->fetch_row();
                               ?>
                               <tr>

                                   <td><?php echo $row[0];?></th>
                                   <td><?php echo $row[8];?></td>
                                   <td><?php echo $row[1];?></td>
                                   <td><a href="javaScript:;"><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $row[0];?>" style="width: 34px;height: 30px" alt=""></a></td>
                                   <td><?php echo $row[4];?></td>
                                   <?php
                                   if($_SESSION['userName']==$row[4]){?>
                                       <form action="empOrder.php" method="post">
                                           <input type="hidden" name="cancelOrder" id="toCancel" value="toCancel">


                                       <td><button type="submit" name="toCancel" id="<?php echo $row[0];?>c" value="<?php echo $row[0];?>" class="kind4" style="color:red;" ><img src="images/x-solid-svg.png" style="height: 23px;" alt=""> Cancel Accept</button></td>
                                       </form>
                                       <form action="empOrder.php" method="post">
                                           <input type="hidden" name="editDate" id="toEdate" value="toEdate">
                                           <td><input type="date"  name="<?php echo $row[0];?>ed" value="<?php echo $row[5];?>"  min="<?php echo date('Y-m-d') ;?>"> <button  name="toEdate" value="<?php echo $row[0];?>" class="kind4"><img src="images/check-solid-svg.png" alt=""></button></td>
                                       </form>
                                       <?php
                                   }
                                   elseif($row[4]==null){?>
                                       <form action="empOrder.php" method="post">
                                           <input type="hidden" name="acceptOrder" id="toAccept" value="toAccept">
                                           <td><button  name="toAccept" id="<?php echo $row[0];?>a" value="<?php echo $row[0];?>" class="kind4" style="color: #fc8804" ><img src="images/check-solid-svg.png" alt=""> Accept the Order</button></td>
                                           <td><input  type="date" value="<?php echo $row[5];?>" id="<?php echo $row[0];?>ad" name="<?php echo $row[0];?>ad"  min="<?php echo date('Y-m-d') ;?>"><button class="kind4" style="height: 23px;width:20px;cursor: default; "></button></td>
                                       </form>
                                       <?php
                                   }
                                   else{?>
                                       <td><button disabled  name="" id="" value="" class="kind4" style="color: #fc8804" >Already Accepted</button></td>
                                       <td><input disabled type="date" value="<?php echo $row[5];?>" id="<?php echo $row[0];?>ad" name="<?php echo $row[0];?>ad"><button class="kind4" style="height: 23px;width:20px; cursor: default;"></button></td>
                                       <?php

                                   }
                                   ?>
                                   <form action="empOrder.php" method="post">
                                       <?php
                                       if($row[5]<date('Y-m-d')){
                                           ?>
                                           <td><button  name="delFromOrders" value="<?php echo $row[0];?>" style="background: transparent;border: 0px;font-size: 15px;color: #ac2925"> <i class="fa fa-trash mb-1 text-danger" ></i>  Delete</button></td>
                                      <?php
                                       }
                                       else{?>
                                           <td><button disabled  name="delFromOrders" value="<?php echo $row[0];?>" style="background: transparent;border: 0px;font-size: 15px;color: #ac2925" disabled data-toggle="tooltip" title="You Can't delete this order because this order has not yet been delivered!"> <i class="fa fa-trash mb-1 text-danger" ></i>  Delete</button></td>
                                       <?php

                                       }
                                       ?>

                                   </form>
                               </tr>
                               <?php
                           }
                           ?>

                           </tbody>
                       </table>
                    <?php

                   }
                   else{
                       ?>
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
                               <th class="text-center" scope="col">Delete Order</th>

                           </tr>
                           </thead>
                           <tbody>
                           <?php
                           @$con2 = new mysqli('localhost', 'root', '', 'web project');
                           $qrListOrder2="SELECT * FROM `cusorder`,`customer` WHERE cusorder.customer=customer.username;";
                           $res=$con2->query($qrListOrder2);
                           for($i=0;$i<$res->num_rows;$i++) {
                               $row = $res->fetch_row();
                               ?>
                               <tr>
                                   <td><?php echo $row[0];?></th>
                                   <td><?php echo $row[8];?></td>
                                   <td><?php echo $row[1];?></td>
                                   <td><a href="javaScript:;"><img src="images/eye-solid-svg.png"  class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $row[0];?>" style="width: 34px;height: 30px" alt=""></a></td>
                                   <td><?php echo $row[4];?></td>
                                   <?php
                                   if($_SESSION['userName']==$row[4]){?>
                                       <form action="empOrder.php" method="post">
                                           <input type="hidden" name="cancelOrder" id="toCancel" value="toCancel">


                                       <td><button name="toCancel" id="<?php echo $row[0];?>c" value="<?php echo $row[0];?>" class="kind4" style="color:red;" ><img src="images/x-solid-svg.png" style="height: 23px;" alt=""> Cancel Accept</button></td>
                                       </form>
                                       <form action="empOrder.php" method="post">
                                           <input type="hidden" name="editDate" id="toEdate" value="toEdate">
                                           <td><input type="date"  name="<?php echo $row[0];?>ed" value="<?php echo $row[5];?>" min="<?php echo date('Y-m-d') ;?>"> <button  name="toEdate" value="<?php echo $row[0];?>" class="kind4"><img src="images/check-solid-svg.png" alt=""></button></td>
                                       </form>
                                       <?php
                                   }
                                   elseif($row[4]==null){?>
                                       <form action="empOrder.php" method="post">
                                           <input type="hidden" name="acceptOrder" id="toAccept" value="toAccept">
                                           <td><button  name="toAccept" id="<?php echo $row[0];?>a" value="<?php echo $row[0];?>" class="kind4" style="color: #fc8804" ><img src="images/check-solid-svg.png" alt=""> Accept the Order</button></td>
                                           <td><input  type="date" value="<?php echo $row[5];?>" id="<?php echo $row[0];?>ad" name="<?php echo $row[0];?>ad"  min="<?php echo date('Y-m-d') ;?>"><button class="kind4" style="height: 23px;width:20px;cursor: default; "></button></td>
                                       </form>
                                       <?php
                                   }
                                   else{?>
                                       <td><button disabled  name="" id="" value="" class="kind4" style="color: #fc8804" >Already Accepted</button></td>
                                       <td><input disabled type="date" value="<?php echo $row[5];?>" id="<?php echo $row[0];?>ad" name="<?php echo $row[0];?>ad"><button class="kind4" style="height: 23px;width:20px; cursor: default;"></button></td>
                                       <?php

                                   }
                                   ?>
                                   <form action="empOrder.php" method="post">
                                       <?php
                                       if($row[5]<date('Y-m-d')){
                                           ?>
                                           <td><button  name="delFromOrders" value="<?php echo $row[0];?>" style="background: transparent;border: 0px;font-size: 15px;color: #ac2925"> <i class="fa fa-trash mb-1 text-danger" ></i>  Delete</button></td>
                                           <?php
                                       }
                                       else{?>
                                           <td><button disabled  name="delFromOrders" value="<?php echo $row[0];?>" style="background: transparent;border: 0px;font-size: 15px;color: #ac2925" disabled data-toggle="tooltip" title="You Can't delete this order because this order has not yet been delivered!"> <i class="fa fa-trash mb-1 text-danger" ></i>  Delete</button></td>
                                           <?php

                                       }
                                       ?>

                                   </form>
                               </tr>
                               <?php
                           }
                           ?>
                           </tbody>
                       </table>

                       <?php
                   }
                   ?>


                </form>

            <?php
            @$con2 = new mysqli('localhost', 'root', '', 'web project');
            $qrListOrder2="SELECT * FROM `cusorder`;";
            $res=$con2->query($qrListOrder2);
            for($i=0;$i<$res->num_rows;$i++) {
                $row = $res->fetch_row();
                ?>

                <div class="modal fade" id="staticBackdrop<?php echo $row[0];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" style="max-width: 650px;">
                        <div class="modal-content">
                            <div class="modal-header cart_hed" style="background-color: #fc8804;">
                                <h5 class="modal-title" id="staticBackdropLabel<?php echo $row[0];?>">Order details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding-right: 0px;padding-left: 0px;">
                                <div class="container">
                                    <div class="d-flex justify-content-center row">
                                        <div class="col">
                                            <?php
                                            @$con = new mysqli('localhost', 'root', '', 'web project');
                                            $recartshow="SELECT * FROM `bag`,`cusorder`,`chocolate` WHERE cusorder.orderN=bag.orderN && chocolate.SerealNumber=bag.serialNumber && bag.orderN='". $row[0]."';";
                                            $res1=$con->query($recartshow);
                                            for($j=0;$j<$res1->num_rows;$j++) {
                                                $row1 = $res1->fetch_row();?>


                                                <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                                                    <div class="mr-1"><img class="rounded" src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row1[14]) ; ?>" width="70"/></div>
                                                    <div class="d-flex flex-column align-items-center " style="">

                                                        <div class="size mr-1"><span class="text-grey"style="font-size:20px ;"><?php echo $row1[12];?></span></div>

                                                        <div class="color"><span class="text-grey" style="font-size:20px ;"><?php echo $row1[2];?></span></div>

                                                    </div>
                                                    <div class="d-flex flex-row align-items-center qty">
                                                        <h5 class="text-grey mt-1 mr-1 ml-1">Amount:<?php echo $row1[3];?> Kg</h5>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                            ?>
                                            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><h2>Total Order Price:<?php echo $row[3];?>₪</h2></div>
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
                <?php
            }
            ?>
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
