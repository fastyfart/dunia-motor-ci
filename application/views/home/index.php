<div class="container">
    <div class="content" style="margin-top:0px">

        <div class="row row-centered">
            <div class="col-md-11 col-centered well">

                <div class="row" id="row-nopad">
                    <div id="row-stp">
                        <div id="col-stp1">
                            <img src="<?php echo base_url("assets/img/we%20offer.png") ?>">
                        </div>
                        <div id="col-stp">
                            <img src="<?php echo base_url("assets/img/originality.png") ?>">
                            <img src="<?php echo base_url("assets/img/prestigious.png") ?>">
                            <img src="<?php echo base_url("assets/img/satisfaction.png") ?>">

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-3 shop-category">
                        <!--Left Content Menu-->
                        <h4>Shop by Category</h4>
                        <ul class="list-unstyled">
                            <?php foreach ($categories as $val) { ?>
                                <li>
                                    <a href="<?php echo current_url().'category/?brand='.@$_GET['brand'] ?>&&cat=<?php echo $val->ct_id ?>"><?php echo $val->ct_name ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                        <!--/.Left Content Menu-->
                    </div>

                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-sm-12">
                                <!--Slideshow-->
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img
                                                src="<?php echo base_url("assets/img/banner_front_page/frontpage1.png") ?>"
                                                alt="First slide" style="width:100%">
                                        </div>
                                        <div class="item">
                                            <img
                                                src="<?php echo base_url("assets/img/banner_front_page/frontpage2.png") ?>"
                                                alt="Second slide" style="width:100%">
                                        </div>
                                        <div class="item">
                                            <img
                                                src="<?php echo base_url("assets/img/banner_front_page/frontpage3.png") ?>"
                                                alt="Third slide" style="width:100%">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button"
                                       data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button"
                                       data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!--./Slideshow-->
                                <br/>
                            </div>

                            <!--Brand slideshow-->
                            <div class="col-sm-12">
                                <div id="carousel-brand" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#x">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/112902alpinestars.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#x">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/151780cnc.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#x">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/162118akrapovic-1211x454.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#x">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/248594ducabike.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/258872R&G.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/377799termignoni.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/456733BMC.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/459245m4.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/487128ohlins.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/507112evotech.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/544456SENA.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/592360rizoma.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/616085werkes.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/71105sector.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/756710sato_racing.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/760229ducati_performance.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/888401LV8.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-sm-3 carouselFix">
                                                    <a href="#">
                                                        <img
                                                            src="<?php echo base_url("assets/img/brands/ducati_OEM_logo.png") ?>"
                                                            alt="Image" class="img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-brand" data-slide="prev">
                                        <img class="chevron chevron-left"
                                             src="<?php echo base_url("assets/img/kiri.png") ?>"/>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-brand" data-slide="next">
                                        <img class="chevron chevron-right"
                                             src="<?php echo base_url("assets/img/kanan.png") ?>"/>
                                    </a>
                                </div>
                                <br/>
                            </div>
                            <!--/.Brand slideshow-->

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img
                                            src="<?php echo base_url("assets/img/banner_front_page/banner%20-%20small1.png") ?>"
                                            style="width:100%">
                                    </div>
                                    <div class="col-sm-6">
                                        <img
                                            src="<?php echo base_url("assets/img/banner_front_page/banner%20-%20small2.png") ?>"
                                            style="width:100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.col-sm-7-->

                    <!--Right Content Menu-->
                    <div class="col-sm-2 effect2" id="brand-sidebar">
                        <div id="header">
                            <span><b>Brand</b></span>
                            <span class="pull-right" style="font-size:12px">VIEW ALL</span>

                            <div class="clearfix"></div>
                        </div>
                        <br/>
                        <ul class="list-unstyled">
                            <li>Akrapovic</li>
                            <li>Alpinestars</li>
                            <li>BMC Air Filter</li>
                            <li>Brocks Performance</li>
                        </ul>
                    </div>
                    <!--/.Right Content Menu-->
                </div>
                <br/>

                <!--Popular Search Product-->
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                        <img src="<?php echo base_url("assets/img/popular-searches.png") ?>"
                             style="padding-left:0px; margin-left: -18px;">

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p class="caption-product">
                                            Yamaha ....
                                        </p>

                                        <p>
                                            <b>IDR 3.7000</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p class="caption-product">
                                            Yamaha ....
                                        </p>

                                        <p>
                                            <b>IDR 3.7000</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p class="caption-product">
                                            Yamaha ....
                                        </p>

                                        <p>
                                            <b>IDR 3.7000</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p class="caption-product">
                                            Yamaha ....
                                        </p>

                                        <p>
                                            <b>IDR 3.7000</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p class="caption-product">
                                            Yamaha ....
                                        </p>

                                        <p>
                                            <b>IDR 3.7000</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p class="caption-product">
                                            Yamaha ....
                                        </p>

                                        <p>
                                            <b>IDR 3.7000</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p class="caption-product">
                                            Yamaha ....
                                        </p>

                                        <p>
                                            <b>IDR 3.7000</b>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.Popular Search Product-->

                <!--Text -->
                <div class="row">
                    <div class="col-xs-9 col-xs-offset-3">
                        <p>Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                            Text text text Text text text Text text text Text text text Text text text Text text text
                        </p>
                    </div>
                </div>
                <!--/.text-->

                <!--Content Bottom-->
                <div class="bottom-content">
                    <div class="row ">
                        <div class="col-sm-6">
                            <div class="row row-centered">
                                <div class="col-sm-11 col-centered" id="subscribe">
                                    <h3>GET OUR WEEKLY EMAIL</h3>
                                    SUBSCRIBE FOR SPECIAL OFFER AND UPDATES !
                                    <br/>

                                    <div class="row row-centered">
                                        <div class="col-sm-8 col-centered">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">SIGN UP!</button>
                                                  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="row row-centered">
                                <div class="col-sm-11 col-centered">
                                    <!--Teting Only-->
                                    <div
                                        style="min-width:100%; min-height:130px; background-color:black; display:block">

                                    </div>
                                    <!--/.Testing only-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Content Bottom-->
            </div>

            <!--Widget-->
            <div class="col-md-11 col-centered" id="widgets">
                Widget
            </div>
            <!--/.Widget-->
        </div>
    </div>