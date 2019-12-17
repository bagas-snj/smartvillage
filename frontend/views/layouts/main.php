<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>

        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>


    </head>
    <body data-spy="scroll" data-offset="80">
    <?php $this->beginBody()  ?>
    <div class="background-loader" id="pageloeadacc"></div> <!-- PAGE LOADER -->




    <div class="top-header-section"> <!-- START TOP SECTION -->
        <div class="container"> <!-- START CONTAINER -->
            <nav class="navbar navbar-expand-md spclhdr-tw-rt"> <!-- START THE NAV -->

                <div class="navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto phonnochowop">
                        <li class="nav-item  no-dslp-phon">
                            <a class="nav-link" href="company.html">About us</a>
                        </li>
                        <li class="nav-item  no-dslp-phon">
                            <a class="nav-link" href="news.html">Anouncement</a>
                        </li>
                        <li>
                            <a href="#" class="choose-language nav-link" data-toggle="popover" id="languageChooser">
                                <img src="templates/templates-breed/img/flag/en.png" alt="en lang">
                                <b class="caret"></b>
                            </a>
                            <div id="languageChooserContent" class="hidden">
                                <ul>
                                    <li>
                                        <a href="index59a8.html?language=english">English</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                    <div class="mt-2 mt-md-0 navbar-right">
                        <ul class="navbar-nav mr-auto mrg-mnu-resp">
                            <li class="nav-item">
                                <a class="nav-link"><i class="fa fa-envelope" aria-hidden="true"></i> support@smartvillage.com </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"><i class="fa fa-phone" aria-hidden="true"></i> 089644223272</a>
                            </li>

                            <li class="nav-item no-dslp-phon">
                                <a href="#" class="nav-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>

                            <li class="nav-item no-dslp-phon">
                                <a href="#" class="nav-link"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav> <!-- END NAV -->
        </div> <!-- END CONTAINER -->
    </div> <!-- END TOP SERCTION -->



    <div id="header-indx-pg" class="header-area-in"> <!-- START HEADER AREA -->
        <div class="header-animation"> <!-- START THE HEADER ANIMATION -->
            <span class="header-waves"></span>
            <span class="white-background-header"></span>
            <span class="black-background-header"></span>
            <span class="server-bg"></span>
            <span class="wiz-line"></span>
            <span class="xo-on"></span>
            <span class="xo-tw"></span>
            <span class="xo-tr"></span>
            <span class="xo-fr"></span>
            <span class="right-poly-side-top"></span>
        </div> <!-- END HEADER ANIMATION -->
        <div class="main-header">
            <div class="top-header-nav-cs"> <!-- START TOP HEADER NAV -->
                <div class="container"> <!-- START CONTAINER -->
                    <nav class="navbar navbar-expand-lg"> <!-- START NAVBAR -->
                        <div class="overlay"></div>
                        <a class="navbar-brand mr-auto logo-header" href="index.html"></a> <!-- THE WEBSITE LOGO -->
                        <button class="menu-btn-span-bar ml-auto" type="button" id="navbarSideButton">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <div class="navbar-side navbar-right" id="navbarSide"> <!-- MAIN NAV -->
                            <ul class="navbar-nav ml-auto">
                                <li menuItemName="Home" class="" id="Primary_Navbar-Home">
                                    <a href="index.html">
                                        Home
                                    </a>
                                </li>
                                <li menuItemName="Announcements" class="" id="Primary_Navbar-Announcements">
                                    <a href="index992c.html?rp=/announcements">
                                        Features
                                    </a>
                                </li>
                                <li menuItemName="Knowledgebase" class="" id="Primary_Navbar-Knowledgebase">
                                    <a href="indexded0.html?rp=/knowledgebase">
                                        Reviews
                                    </a>
                                </li>
                                <li menuItemName="Network Status" class="" id="Primary_Navbar-Network_Status">
                                    <a href="serverstatus.html">
                                        Get App
                                    </a>
                                </li>
                                <li menuItemName="Contact Us" class="" id="Primary_Navbar-Contact_Us">
                                    <a href="#">
                                        Contact Us
                                    </a>
                                </li>

                                <li class="nav-item header-login-btn">
                                    <a class="wow fadeInUpBig" href="clientarea.html">Login</a> <!-- LOGIN BUTTON -->
                                </li>

                                <li class="nav-item header-regsiter-btn">
                                    <a class="wow fadeInUp" href="register.html">Register</a> <!-- SIGN UP BUTTON -->
                                </li>
                            </ul>

                        </div> <!-- END MAIN NAV -->
                    </nav> <!-- END NAV -->
                </div> <!-- END CONTAINER -->
            </div> <!-- END TOP HEADER NAV -->
        </div> <!-- END HEADER  -->
    </div> <!-- END HEADER AREA -->





    <div class="pertner-section"> <!-- START PERTNER SECTION -->
        <div class="container"> <!-- CONTAINER -->
            <div class="row"> <!-- ROW -->
                <div class="col-md-8 col-md-push-2">
                    <a class="wow fadeInUp" data-toggle="tooltip" data-placement="top" title="php" href="#"><img src="templates/templates-breed/img/pertner/php.png" alt="png" /></a>
                    <a data-toggle="tooltip" data-placement="top" title="MySQL" href="#"><img src="templates/templates-breed/img/pertner/MySQL.png" alt="png" /></a>
                    <a class="wow fadeInUp" data-toggle="tooltip" data-placement="top" title="dell" href="#"><img src="templates/templates-breed/img/pertner/dell.png" alt="png" /></a>
                    <a class="wow fadeInUp" data-toggle="tooltip" data-placement="top" title="directadmin" href="#"><img src="templates/templates-breed/img/pertner/directadmin.png" alt="png" /></a>
                    <a class="wow fadeInUp" data-toggle="tooltip" data-placement="top" title="ibm" href="#"><img src="templates/templates-breed/img/pertner/ibm.png" alt="png" /></a>
                    <a data-toggle="tooltip" data-placement="top" title="ubuntu" href="#"><img src="templates/templates-breed/img/pertner/ubuntu.png" alt="png" /></a>
                </div>
            </div> <!-- END ROW -->
        </div> <!-- END CONTAINER -->
    </div> <!-- END PERTNER SECTION -->

    <section class="plans-one"> <!-- FIRST PLAN SEECTION -->
        <div class="container"> <!-- CONTAINER -->
            <span class="first-cirl wow fadeInUp">
              <b>
              <em class="hockup-mo-tootl">
              <i class="fa fa-fire" aria-hidden="true"></i>
              <label>Monitoring</label>
              <small>Memudahkan mengawasi pembangunan didesa tempat tinggal</small>
              </em>
              </b>
              </span>
            <span class="second-cirl wow fadeInUp">
              <b>
              <em class="hockup-mo-tootl">
              <i class="fa fa-hdd-o" aria-hidden="true"></i>
              <label>Pelaporan</label>
              <small>Berisi tentang aduan masyarakat berupa:</small>
              <span><u class="fa fa-check-circle" aria-hidden="true"></u>Request pembangunan</span>
            <span><u class="fa fa-check-circle" aria-hidden="true"></u>lapor aduan</span>
            </em>
            </b>
            </span>
            <span class="third-cirl wow fadeInUp">
              <b>
              <em class="hockup-mo-tootl">
              <i class="fa fa-heart-o" aria-hidden="true"></i>
              <label>Transparansi</label>
              </em>
              </b>
              </span>

            <div class="container"> <!-- CONTAINER -->
                <div class="row justify-content-left bckbgpadd"> <!-- ROW -->
                    <div class="col-md-4 plansshadow">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link" id="planoneone-tab" data-toggle="tab" href="#planoneone" role="tab" aria-controls="planoneone" aria-expanded="true">Tentang <span><b>SmartVillage</b></span></a>
                            </li>
                        </ul>

                        <div class="tab-content" id="hosttab">
                            <div class="tab-pane fade in active" id="planoneone" role="tabpanel" aria-labelledby="planoneone-tab"><!-- FIST PLAN -->
                                <h5>Smartvillage Apps :</h5>
                                <img src="templates/templates-breed/img/header/android1.jpg" alt="jpg" class="img-responsive" />
                                
                            </div><!-- END FIST PLAN -->

                        </div>
                    </div>

                </div><!-- END ROW -->
            </div><!-- END CONAINER -->
        </div><!-- END CONATINER -->
    </section> <!-- END FIRST PLAN SEECTION -->

   <!-- END SECOND SERCTION -->

    <section class="how-work"> <!-- FORTH SECTION -->
        <div class="container"> <!-- CONTAINER -->
            <div class="how-ordr-txt">Apa tujuan dari SmartVillage?</div> <!-- TITTLE -->
            <div class="row justify-content-center"> <!-- ROW -->
                <div class="col-md-10 col-md-push-1">
                    <div class="col-md-4">
                        <div class="how-ordr-box blurbrbox wow fadeInUp">
                            <i class="flaticon-headphones"></i>
                            <h6>Pemetaan</h6>
                            <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="how-ordr-box greenbrbox">
                            <i class="flaticon-dollar-symbol-2"></i>
                            <h6>Transparansi Anggaran</h6>
                            <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="how-ordr-box orangebrbox wow fadeInUp">
                            <i class="flaticon-delivery"></i>
                            <h6>Pemerataan Pembangunan</h6>
                        </div>
                    </div>
                </div>

            </div> <!-- END ROW -->
        </div> <!-- END CONAINER -->
    </section> <!-- END FORTH SERCTION -->

    <section class="our-services"> <!-- FIVTH SERCTION -->
        <div class="container"> <!-- CONTAINER -->
            <h5 class="tittle-head">Layanan <span>yang ada dalam Smartvillage</span></h5> <!-- TITTLE -->

            <div class="row justify-content-center"> <!-- ROW -->
                <div class="col-md-3">
                    <div class="box-service orng-box-icon wow fadeInUp">
                        <i class="flaticon-box-1"></i>
                        <h6>Data Pembangunan</h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-service orgwani-box-icon">
                        <i class="flaticon-badge"></i>
                        <h6>Laporan Mitra</h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-service blue-box-icon wow fadeInUp">
                        <i class="flaticon-invoice"></i>
                        <h6>Pemetaan Pembangunan</h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-service green-box-icon">
                        <i class="flaticon-package-5"></i>
                        <h6>Pelaporan Masalah</h6>
                    </div>
                </div>

            </div> <!-- END ROW -->

            <div class="row justify-content-center"> <!-- ROW -->
                <div class="col-md-3">
                    <div class="box-service sbt-box-icon wow fadeInUp">
                        <i class="flaticon-shield"></i>
                        <h6>Request Pembangunan</h6>
                        
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-service lgt-box-icon">
                        <i class="flaticon-piggy-bank"></i>
                        <h6>Monitoring Pembangunan</h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-service lmn-box-icon">
                        <i class="flaticon-payment-method"></i>
                        <h6>Transparansi Anggaran</h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-service opk-box-icon">
                        <i class="flaticon-wallet"></i>
                        <h6>Pengumuman</h6>
                    </div>
                </div>

            </div> <!-- END ROW -->

        </div> <!-- END CONAINER -->
    </section> <!-- END FIFTH SERCTION -->

    <div class="index-ads"> <!-- SIXTH SECTION -->
        <div class="container"> <!-- CONAINER -->
            <p><span>Smartvillage membantu masyarakat desa dalam mengawasi jalannya anggaran desa</span><a href="">Anda</a></p>
        </div> <!-- END CONAINER -->
    </div> <!-- END SIXTH SECTION -->

    <section class="testimonial-sestion"> <!-- EIGHTH SECTION -->
        <div class="container"> <!-- CONTAINER -->
            <h5 class="tittle-head">Testimoni</h5> <!-- TITTLE -->

            <div class="fadeOut owl-carousel owl-theme owl-testimonial">
                <div class="item testimonial-item">
                    <img src="templates/templates-breed/img/svgs/farmer.svg" alt="" />
                    <h5>Sobirin</h5>
                    <p>Dengan adanya Smartvillage saya dapat melihat kinerja aparatur desa dan dapat melihat pembangunan di desa saya</p>
                </div>

                <div class="item testimonial-item">
                    <img src="templates/templates-breed/img/svgs/welder.svg" alt="" />
                    <h5>nedjai moh <span>coodiv.net</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipis, Lorem ipsum dolor s Lorem ipsum dolor sit amet, consectetuer adipis, Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetuer adipis, Lorem ipsum dolor sit.</p>
                </div>

                <div class="item testimonial-item">
                    <img src="templates/templates-breed/img/svgs/showman.svg" alt="" />
                    <h5>nedjai moh <span>coodiv.net</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipis, Lorem ipsum dolor s Lorem ipsum dolor sit amet, consectetuer adipis, Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetuer adipis, Lorem ipsum dolor sit.</p>
                </div>

            </div>

        </div> <!-- END CONTAINER -->
    </section> <!-- END EIGHTH SECTION -->

    <section class="faq-section"> <!-- NINTH SECTION -->
        <div class="container"> <!-- CONTAINER -->
            <div class="moc-bg"></div>
            <div class="mac-bg"></div>
            <div class="row justify-content"> <!-- ROW -->
                <div class="col-md-6 col-sm-12 way-to-work-banner"><img class="img-responsive" src="templates/templates-breed/img/section/mac.png" alt=""></div>
                <div class="col-md-5"></div>
                <div class="col-md-7 jus-faq-page">
                    <h5>Fitur  <span>Utama?</span></h5>

                    <div id="Accordion" data-children=".item">
                        <div class="item">
                            <a class="acoriennbrzbi" data-toggle="collapse" data-parent="#Accordion" href="#firstqst" aria-expanded="false" aria-controls="firstqst">
                                Pelaporan ? <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <div id="firstqst" class="collapse includedonerbayt" role="tabpanel">
                                <p class="mb-3">
                                    Disini masyarakat dapat melaporkan dan juga mengajukan pembangunan di daerahnya lewat aplikasi android.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <a class="acoriennbrzbi" data-toggle="collapse" data-parent="#Accordion" href="#secondqst" aria-expanded="false" aria-controls="secondqst">
                                Monitoring ? <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <div id="secondqst" class="collapse includedonerbayt" role="tabpanel">
                                <p class="mb-3">
                                   Masyarakat dapat memonitor pelaksanaan pembangunan didesanya dan melihat progress pembangunannya.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- CONTANER -->
    </section> <!-- END NINTH SECTION -->




    </div><!-- /.main-content -->
    </div>
    <div class="clearfix"></div>
    </div>
    </div>
    </section>


    <section class="footer-section non-index-footer"><!-- START FOOTER  -->
        <a class="footer-fb-icon" href="#"><i class="fa fa-facebook"></i></a> <!-- FACEBOOK ICON -->
        <a class="footer-twiiter-icon" href="#"><i class="fa fa-twitter"></i></a> <!-- TWIITER ICON -->
        <a class="footer-pinterest-icon" href="#"><i class="fa fa-pinterest-p"></i></a> <!-- PINTERSESTP INCON -->
        <div class="container"><!-- CONTAINER  -->
            <div class="row justify-content"><!-- ROW -->
                <div class="col-md-5 first-panu-footer">
                    <img class="footer-logo" src="templates/templates-breed/img/header/logo.png" alt="" />
                    <p class="footer-text">Smartvillage adalah solusi bagi kemudahan jalannya transparansi anggaran dana desa dan membantu masyarakat ikut aktif mengawalnya</p>
                    <p class="footer-cpy">© 2017 KD Team</p>
                    <img class="footer-paypment" src="templates/templates-breed/img/footer/payment.png" alt="" />
                </div>
                <div class="col-md-4 second-panu-footer">
                    <h5 class="tittle-footer">Link <span>Terkait</span></h5>
                    <ul class="col-md-6">
                        <li><a href="#">Kementrian Keuangan RI</a></li>
                        <li><a href="#">Kementrian Dalam Negeri RI</a></li>
                
                    </ul>

                    <ul class="col-md-6">
                        <li><a href="#">Kementrian Keuangan RI</a></li>
                        <li><a href="#">Kementrian Dalam Negeri RI</a></li>
                    </ul>

                </div>

                <div class="col-md-3 third-panu-footer">
                    <h5 class="tittle-footer">subscribe <span>to us</span></h5>
                    <form id="subscribe-footer-form">
                        <input type="text" name="email" placeholder="Write your email here.." />
                        <button id="subscribe-btn" type="submit" name="submit" value="subscribe"> <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </form>
                </div>

            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section><!-- END FOOTER -->



    <div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content panel panel-primary">
                <div class="modal-header panel-heading">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Title</h4>
                </div>
                <div class="modal-body panel-body">
                    Loading...
                </div>
                <div class="modal-footer panel-footer">
                    <div class="pull-left loader">
                        <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary modal-submit">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>



    <?php $this->endBody() ?>

    </body>
    </html>
<?php $this->endPage() ?>