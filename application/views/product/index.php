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
                    <div class="layer">
                        <div class="layer-body" style="top:0px">
                        <div id="container2" class="curl">
                            <div id="container1">
                                <form method="post" action="">
                                    <div id="col1">
                                        <div class="content-col ">
                                            Product Code : <?php echo $product->pr_id ?> <br/>
                                            <input type="hidden" name="cart_name"
                                                   value="<?php echo $product->pr_name ?>">
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
                                                PRICE <span class="pull-right"> IDR <?php echo $product->pr_price ?></span>
                                                <input type="hidden" name="cart_price"
                                                       value="<?php echo $product->pr_price ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="col2">
                                        <!--<img src="<?php /*echo base_url("assets/img/add-to-my-cart.png") */ ?>" style="margin: auto">-->
                                        <button id="btn-add-to-cart" name="submit_cart" type="submit">ADD TO MY CART
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                <br/><br/>

                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 ">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="layer" style="margin-bottom: -90px;">
                                    <div class="layer-shadow"></div>
                                    <div class="layer-title-reviews">
                                        Video Reviews
                                    </div>
                                    <div class="layer-body">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url("assets/img/vivid.png") ?>" alt=""/>
                                                </div>
                                                <div class="row row-centered">
                                                	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-centered">
                                                        <button id="product-subs-youtube">Subscribe to DUNIAMOTOR.COM</button>
                                                	</div>
                                                </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                        <div class="thumbnail">
                                                            <img src="<?php echo base_url("assets/img/vivid.png") ?>"
                                                                 alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                        <div class="thumbnail">
                                                            <img src="<?php echo base_url("assets/img/vivid.png") ?>"
                                                                 alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                        <div class="thumbnail">
                                                            <img src="<?php echo base_url("assets/img/vivid.png") ?>"
                                                                 alt=""/>
                                                        </div>
                                                    </div>
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
                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="margin-bottom: -90px">
                                        <div class="layer">
                                            <div class="layer-shadow"></div>
                                            <div class="layer-title-grey" style="color: #000">
                                                <b>REVIEW SUMMARY</b>
                                            </div>
                                            <div class="layer-body">
                                                Bung for the Buck
                                                <div class="rating">
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-empty"></div>
                                                </div>
                                                Style
                                                <div class="rating">
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-empty"></div>
                                                </div>
                                                Comfort
                                                <div class="rating">
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-empty"></div>
                                                </div>
                                                Protection & Durability
                                                <div class="rating">
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-empty"></div>
                                                </div>
                                                Fit
                                                <div class="rating">
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-empty"></div>
                                                </div>
                                                Features
                                                <div class="rating">
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-fill"></div>
                                                    <div class="rating-level-empty"></div>
                                                </div><br />
                                                <p>
                                                    47 out of 47 (100%) custmers recommend this product
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" >
                                        <div class="layer">
                                            <div class="layer-shadow"></div>
                                            <div class="layer-title-grey" style="color: #000">
                                                <b>PRODUCT DETAILS</b>
                                            </div>
                                            <div class="layer-body">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Dolore error facilis in voluptate!
                                                    Ab, accusantium aperiam assumenda doloremque dolorum enim illo impedit maiores necessitatibus,
                                                    nulla quam, quas repellendus similique tenetur.
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Dolore error facilis in voluptate!
                                                    Ab, accusantium aperiam assumenda doloremque dolorum enim illo impedit maiores necessitatibus,
                                                    nulla quam, quas repellendus similique tenetur.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: -80px">
                                        <div class="layer">
                                            <div class="layer-shadow-tab"></div>
                                            <div class="layer-title-tab">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist" style="margin-left: 20px">
                                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                                                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                                                </ul>
                                            </div>
                                            <div class="layer-body" style="min-height: 80px">
                                                <div role="tabpanel">
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="home">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="profile">.p..</div>
                                                        <div role="tabpanel" class="tab-pane" id="messages">.m..</div>
                                                        <div role="tabpanel" class="tab-pane" id="settings">.s..</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
