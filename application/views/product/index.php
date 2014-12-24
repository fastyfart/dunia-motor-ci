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
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail_container">
                                    <div class="thumbnail thumbnail-center">
                                        <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="..."
                                             class="img-responsive" id="img-center">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                <div class="product-sub">
                                    <img src="<?php echo base_url("assets/img/products/play-product.png") ?>">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <!--<small><b>Ducabike</b></small>-->
                        <h3>
                            <?php echo $product->pr_name ?>
                        </h3>

                        <div id="container2" class="curl">
                            <div id="container1" >
                                <form method="post" action="" >
                                    <div id="col1" >
                                        <div class="content-col ">
                                            Product Code : <?php echo $product->pr_id ?> <br/>
                                            <input type="hidden" name="cart_name" value="<?php echo $product->pr_name ?>">
                                            <input type="hidden" name="cart_code" value="<?php echo $product->pr_id ?>">
                                            Select Quentity :
                                                <select name="cart_qty">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            <br/>
                                            Select Color :
                                            <select name="cart_color">
                                                <option value="black">Black</option>
                                                <option value="red">Red</option>
                                                <option value="yellow">Yellow</option>
                                            </select>
                                            <br/>
                                        </div>
                                        <div class="desc-product-footer">
                                            <div class="content-col">
                                                PRICE IDR <?php echo $product->pr_price ?>
                                                <input type="hidden" name="cart_price" value="<?php echo $product->pr_price ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="col2">
                                        <!--<img src="<?php /*echo base_url("assets/img/add-to-my-cart.png") */?>" style="margin: auto">-->
                                        <button id="btn-add-to-cart" name="submit_cart" type="submit">ADD TO MY CART</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div><br/><br/>

                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 ">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="video-review">
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <div class="thumbnail">
                                            <img src="<?php echo base_url("assets/img/vivid.png") ?>" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url("assets/img/vivid.png") ?>" alt=""/>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url("assets/img/vivid.png") ?>" alt=""/>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url("assets/img/vivid.png") ?>" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" id="review-summary">

                                    </div>
                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" id="product-details">
                                        <p>
                                            text text
                                            text text
                                            text text text text text text text text text text text texttext text
                                            text text
                                            text text text text text text text text text text text texttext text
                                            text text
                                            text text text text text text text text text text text texttext text
                                            text text
                                            text text text text text text text text text text text texttext text
                                            text text
                                            text text text text text text text text text text text texttext text
                                            text text
                                            text text text text text text text text text text text texttext text
                                            text text
                                            text text text text text text text text text text text texttext text
                                            text text
                                            text text text text text text text text text text text texttext text
                                            text text
                                            text text text text text text text text text text text texttext text
                                            text text
                                            text text text text text text text text text text text text
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="title-heading">
                                    <button>WRITE REVIEW</button>

                                </div>

                                <p>Awesome Product</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="title-heading">
                                    <div class="row">
                                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                            <h4 style="text-align: center">
                                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                            </h4>
                                        </div>
                                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    Ryan Benedict
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <b>From </b>Jakarta
                                                    <b>Ryder Type : </b> Kneedragger
                                                    <b>Age : </b> 25 - 34
                                                    <b>Gender : </b> Male
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Keren banget lahhhh
                                </p>

                                <p>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" id="" checked>
                                        Yes, I recomended this product
                                    </label>
                                </div>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p>
                                            Yamaha ....
                                        </p>

                                        <p>
                                            <b>IDR 3.7000</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p>
                                            Yamaha ....
                                        </p>

                                        <p>
                                            <b>IDR 3.7000</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p>
                                            Yamaha ....
                                        </p>

                                        <p>
                                            <b>IDR 3.7000</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url("assets/img/products/s.jpg") ?>" alt="...">

                                    <div class="caption">
                                        <a href="#">
                                            <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                        </a>

                                        <p>
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
