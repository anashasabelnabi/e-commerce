<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>
<header class="main_menu home_menu">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-11">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href=""> <img src="/img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= Url::to('/site/index')?>">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Shop
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                            <a class="dropdown-item" href="<?= Url::to('/category/index')?>"> shop category</a>
                                            <a class="dropdown-item" href="single-product.html">product details</a>

                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                            <a class="dropdown-item" href="<?= Url::to('user/sign-in/login')?>">
                                                login

                                            </a>
                                            <?php if(!Yii::$app->user->isGuest){
                                                echo Html::a( Yii::t('backend', 'Logout'),
                                                    ['user/sign-in/logout'],
                                                    ['class' => 'dropdown-item', 'data-method' => 'POST']) ;
                                                }else{
                                                echo Html::a( Yii::t('backend', 'Sign Up'),
                                                    ['user/sign-in/signup'],
                                                    ['class' => 'dropdown-item']) ;
                                            }
                                            ?>

                                            <a class="dropdown-item" href="tracking.html">tracking</a>
                                            <a class="dropdown-item" href="checkout.html">product checkout</a>
                                            <a class="dropdown-item" href="cart.html">shopping cart</a>
                                            <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                            <a class="dropdown-item" href="elements.html">elements</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                            <a class="dropdown-item" href="blog.html"> blog</a>
                                            <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hearer_icon d-flex">
                                <div class="dropdown cart">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-bag"></i>
                                    </a>
                                    <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="single_product">

                                        </div>
                                    </div> -->
                                </div>
                                <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="search_input" id="search_input_box">
                <div class="container ">
                    <form class="d-flex justify-content-between search-inner">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                        <button type="submit" class="btn"></button>
                        <span class="ti-close" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div>
        </header>

        <?php echo $content ?>

    <!-- free shipping here -->
<section class="shipping_details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="/img/icon/icon_1.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="/img/icon/icon_2.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="/img/icon/icon_3.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="/img/icon/icon_4.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- free shipping end -->
<!-- subscribe_area part start-->
<section class="instagram_photo">
        <div class="container-fluid>
            <div class="row">
        <div class="col-lg-12">
            <div class="instagram_photo_iner">
                <div class="single_instgram_photo">
                    <img src="/img/instagram/inst_1.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
                <div class="single_instgram_photo">
                    <img src="/img/instagram/inst_2.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
                <div class="single_instgram_photo">
                    <img src="/img/instagram/inst_3.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
                <div class="single_instgram_photo">
                    <img src="/img/instagram/inst_4.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
                <div class="single_instgram_photo">
                    <img src="/img/instagram/inst_5.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
<!--::subscribe_area part end::-->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Category</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Male</a></li>
                            <li><a href="#">Female</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Company</h4>
                        <ul class="list-unstyled">
                            <li><a href="">About</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Address</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">200, Green block, NewYork</a></li>
                            <li><a href="#">+10 456 267 1678</a></li>
                            <li><span>contact89@winter.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                  action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                  method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                       class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                        class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                        <div class="social_icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->
<?php $this->endContent() ?>