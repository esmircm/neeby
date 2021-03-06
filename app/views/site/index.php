<?php

use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\text\api\Text;
use yii\helpers\Html;

$page = Page::get('page-index');

$this->title = $page->seo('title', $page->model->title);
?>

<style>

    /*#dd{*/

        /*position:fixed;*/
        
/*        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        color: #cfcfcf;*/
    }
    
    /*#ddd{*/
        /*position: relative;*/
    /*}*/

</style>

<!-- Home Page
   ==========================================-->

<link rel="stylesheet" type="text/css" href="<?php Yii::$app->basePath; ?>/media/fonts/font-awesome/css/font-awesome.css" />

<div class="ss" id="dd">
<div class="ss" id="ddd">
    <?= Carousel::widget(1600, 700) ?>
</div>
</div>


<div id="tf-home" class="text-center">

    <div class="overlay">
        <div class="content">
            <h1>Bienvenido a <strong><span class="color">Neeby</span></strong></h1>
            <p class="lead">Desarrolladores web con <strong> años de experiencia</strong> y con <strong>gente extraordinaria</strong></p>
            <a href="#tf-about" class="glyphicon glyphicon-list"></a>
        </div>
    </div>
</div>

<!-- About Us Page
  ==========================================-->
<div id="tf-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php Yii::$app->basePath; ?>/img/01.jpg" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <div class="section-title">
                        <h4>About us</h4>
                        <h2>Some words <strong>about us</strong></h2>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                    <p class="intro">We love building and rebuilding brands through our  specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget.</p>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Mission</strong> - <em>We deliver uniqueness and quality</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Page
==========================================-->
<div id="tf-team" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2>Meet <strong>our team</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <div id="team" class="owl-carousel owl-theme row">
                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/01.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Jenn Gwapa</h3>
                            <p>CEO / Founder</p>
                            <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/02.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Jenn Gwapa</h3>
                            <p>CEO / Founder</p>
                            <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/03.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Jenn Gwapa</h3>
                            <p>CEO / Founder</p>
                            <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/04.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Jenn Gwapa</h3>
                            <p>CEO / Founder</p>
                            <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/04.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Jenn Gwapa</h3>
                            <p>CEO / Founder</p>
                            <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/01.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Jenn Gwapa</h3>
                            <p>CEO / Founder</p>
                            <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/02.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Jenn Gwapa</h3>
                            <p>CEO / Founder</p>
                            <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="thumbnail">
                        <img src="img/team/03.jpg" alt="..." class="img-circle team-img">
                        <div class="caption">
                            <h3>Jenn Gwapa</h3>
                            <p>CEO / Founder</p>
                            <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Services Section
==========================================-->
<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Take a look at <strong>our services</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-desktop"></i>
                <h4><strong>Web design</strong></h4>
                <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-mobile"></i>
                <h4><strong>Mobile Apps</strong></h4>
                <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-camera"></i>
                <h4><strong>Photography</strong></h4>
                <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-bullhorn"></i>
                <h4><strong>Marketing</strong></h4>
                <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>
        </div>
    </div>
</div>

<!-- Clients Section
==========================================-->
<div id="tf-clients" class="text-center">
    <div class="overlay">
        <div class="container">

            <div class="section-title center">
                <h2>Some of <strong>our Clients</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div id="clients" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="img/client/01.png">
                </div>
                <div class="item">
                    <img src="img/client/02.png">
                </div>
                <div class="item">
                    <img src="img/client/03.png">
                </div>
                <div class="item">
                    <img src="img/client/04.png">
                </div>
                <div class="item">
                    <img src="img/client/05.png">
                </div>
                <div class="item">
                    <img src="img/client/06.png">
                </div>
                <div class="item">
                    <img src="img/client/07.png">
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Portfolio Section
==========================================-->
<div id="tf-works">
    <div class="container"> <!-- Container -->
        <div class="section-title text-center center">
            <h2>Take a look at <strong>our services</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
        </div>
        <div class="space"></div>

        <div class="categories">

            <ul class="cat">
                <li class="pull-left"><h4>Filter by Type:</h4></li>
                <li class="pull-right">
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".web">Web Design</a></li>
                        <li><a href="#" data-filter=".photography">Photography</a></li>
                        <li><a href="#" data-filter=".app" >Mobile App</a></li>
                        <li><a href="#" data-filter=".branding" >Branding</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div id="lightbox" class="row">

            <div class="col-sm-6 col-md-3 col-lg-3 branding">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 photography app">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/02.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 branding">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 branding">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/04.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 web">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/05.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 app">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/06.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 photography web">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/07.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 web">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/08.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Testimonials Section
==========================================-->
<div id="tf-testimonials" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Our clients’</strong> testimonials</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div class="item">
                            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                            <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                        </div>

                        <div class="item">
                            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                            <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                        </div>

                        <div class="item">
                            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                            <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section
==========================================-->
<div id="tf-contact" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="section-title center">
                    <h2>Feel free to <strong>contact us</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>            
                </div>

                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn tf-btn btn-default">Submit</button>
                </form>

            </div>
        </div>

    </div>
</div>

<nav id="footer">
    <div class="container">
        <div class="pull-left fnav">
            <p>ALL RIGHTS RESERVED. COPYRIGHT © 2014. Designed by <a href="https://dribbble.com/shots/1817781--FREEBIE-Spirit8-Digital-agency-one-page-template">Robert Berki</a> and Coded by <a href="https://dribbble.com/jennpereira">Jenn Pereira</a></p>
        </div>
        <div class="pull-right fnav">
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
</nav>


<?= Carousel::widget(1140, 520) ?>

<div class="text-center">
    <h1><?= Text::get('index-welcome-title') ?></h1>
    <p><?= $page->text ?></p>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2>Last photos</h2>
    <br/>
    <?php foreach (Gallery::last(2) as $photo) : ?>
        <?= $photo->box(180, 135) ?>
    <?php endforeach; ?>
    <?php Gallery::plugin() ?>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2>Last news</h2>
    <blockquote class="text-left">
        <?= Html::a(News::last()->title, ['news/view', 'slug' => News::last()->slug]) ?>
        <br/>
        <?= News::last()->short ?>
    </blockquote>
</div>

<br/>
<hr/>


<div class="text-center">
    <h2>Last article from category #1</h2>
    <br/>
    <div class="row text-left">
        <?php $article = Article::last(1, ['category_id' => 1]); ?>
        <div class="col-md-2">
            <?= Html::img($article->thumb(160, 120)) ?>
        </div>
        <div class="col-md-10 text-left">
            <?= Html::a($article->title, ['articles/view', 'slug' => $article->slug]) ?>
            <br/>
            <?= $article->short ?>
        </div>
    </div>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2>Last reviews</h2>
    <br/>
    <div class="row text-left">
        <?php foreach (Guestbook::last(2) as $post) : ?>
            <div class="col-md-6">
                <b><?= $post->name ?></b>
                <p class="text-muted"><?= $post->text ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<br/>
