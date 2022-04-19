<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/css_item.css">
    <link rel="stylesheet" href="css/loginDiv.css">
    <script src="node_modules/@fortawesome/fontawesome-free/js/brands.js"></script>
    <script src="node_modules/@fortawesome/fontawesome-free/js/solid.js"></script>
    <script src="node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>
    <title>Hello, world!</title>
    <style>
        body .frame {
            display: inline-block;
            position: relative;
        }
        div .lines {
            background: linear-gradient(to bottom, #34495e 2px, transparent 2px) 0 0, linear-gradient(to right, #34495e 2px, transparent 2px) 0 100%, linear-gradient(to left, #34495e 2px, transparent 2px) 100% 0, linear-gradient(to top, #34495e 2px, transparent 2px) 100% 100%;
            background-repeat: no-repeat;
            background-size: 0px 0px;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transition: background-size 0.4s cubic-bezier(0.455, 0.03, 0.515, 0.955);
        }
        div .angles {
            background: linear-gradient(to right, #a6afc0 2px, transparent 2px) 0 0, linear-gradient(to bottom, #a6afc0 2px, transparent 2px) 0 0, linear-gradient(to left, #a6afc0 2px, transparent 2px) 100% 0, linear-gradient(to bottom, #a6afc0 2px, transparent 2px) 100% 0, linear-gradient(to left, #a6afc0 2px, transparent 2px) 100% 100%, linear-gradient(to top, #a6afc0 2px, transparent 2px) 100% 100%, linear-gradient(to right, #a6afc0 2px, transparent 2px) 0 100%, linear-gradient(to top, #a6afc0 2px, transparent 2px) 0 100%;
            background-repeat: no-repeat;
            background-size: 7px 7px;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0.48;
            transition: background-size 0.4s cubic-bezier(0.455, 0.03, 0.515, 0.955);
        }
        div.frame:hover .lines {
            background-size: 100% 100%;
        }
        div.frame:hover .angles {
            background-size: 14px 14px;
        }
    </style>
</head>
<body>
<div class="navbar navbar-expand-md fixed-top navbar-light " style="background-color: #553506;height: 65px">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#divColl" aria-controls="divColl" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="images/logo.png" style="width: 60px; height: 60px" alt="">
        <a class="navbar-brand" href="#" style="color: #c8c5c4;font-size: 25px">Alhijaz chocolate LTD</a>
        <div class="collapse navbar-collapse" id="divColl">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav_font nav-link" id="navdd" href="https://www.google.com" style="color:#FC8804;"> go to google</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav_font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#FC8804;">Our Brands</a>
                    <ul class="dropdown-menu" aria-labelledby="navdd">
                        <li><a class="dropdown-item nav_font" href="#">Gourmet</a></li>
                        <li><a class="dropdown-item nav_font" href="#">Best</a></li>
                        <li><a class="dropdown-item nav_font" href="#">Lorka</a></li>
                        <li><a class="dropdown-item nav_font" href="#">Revera</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link nav_font" href="https://www.facebook.com" style="color: #FC8804;">go to facebook</a></li>
                <li class="nav-item"><a class="nav-link nav_font" href="#connect_us" style="color: #FC8804;"> Connect us</a></li>
                <li class="nav-item"><a class="nav-link nav_font" href="find_us.html" style="color: #FC8804;">Find Us</a></li>
                <li class="nav-item"><a class="nav-link nav_font" href="loginBS.html" style="color:#FC8804;">Login</a></li>
            </ul>
        </div>


    </div>
</div>
<div class="container-xxl" style="padding-top: 1px">
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
                            <input type="radio" id="all" value="All" name="typeChoco">

                        </td>
                        <td class="TR_typeLabel">
                            <label for="all">All Types</label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="radio" id="dark" value="Dark" name="typeChoco">

                        </td>
                        <td class="TR_typeLabel">
                            <label for="dark">Dark</label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="radio" id="milk" value="Milk" name="typeChoco">

                        </td>
                        <td class="TR_typeLabel">
                            <label for="milk">Milk</label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="radio" id="white" value="White" name="typeChoco">

                        </td>
                        <td class="TR_typeLabel">
                            <label for="white">White</label>
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
                            <input type="submit" class="alert-dark" value="search"style="width: 100px">

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

<div class="navbar  text-white navbar-light" style="background-color: #553506;">

    <div class="container" >
<pre>
Alhijaz Chocolate LTD
Anabta P.O. Box 78
Tel: 972 (0) 9 2673077
Fax: 972 (0) 9 2680303
E-mail: info@alhijaz.ps
Palestine
        </pre>
        <div class="container align-content-start">
            <a  href="https://www.facebook.com/alhijazchocolate"><i class="fa-brands fa-facebook-square fa-2x font_images"></i></a>
            <a href="https://www.youtube.com/channel/UC01d6ix0kxbZcMv2jT4mzrQ"><i class="fa-brands fa-youtube fa-2x font_images" style="color:red"></i></a>
            <a href="mailto://info@alhijaz.ps"><i class="fa-solid fa-envelope fa-2x" style=""></i></a>
        </div>

    </div>
</div>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
