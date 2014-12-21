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
                                    <a href="<?php echo current_url().'/?brand='.$_GET['brand'] ?>&&cat=<?php echo $val->ct_id ?>"><?php echo $val->ct_name ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                        <!--/.Left Content Menu-->
                    </div>

                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-12">
                                <ol class="breadcrumb">
                                    <li><a href="#">akrapovic</a>
                                    </li>
                                    <li><a href="#">akrapovic</a>
                                    </li>
                                </ol>
                            </div>

                            <div class="col-sm-12 ">

                                <form class="form-inline">
                                    <div class="form-group">
                                        <label>ALL PRODUCT (2)</label>
                                        <select class="form-control">
                                            <option>opt 1</option>
                                            <option>opt 2</option>
                                            <option>opt 3</option>
                                        </select>
                                    </div>
                                </form>

                                <!--List Product-->
                                <div class="row detail-product ">
                                    <?php foreach($products as $i => $val) { ?>
                                    <div class="col-sm-3">
                                        <div class="thumbnail">
                                            <img src="<?php echo base_url("assets/img/products/".$val->pr_img) ?>" alt="...">

                                            <div class="caption">
                                                <a href="#">
                                                    <img src="<?php echo base_url("assets/img/video-available.png") ?>">
                                                </a>
                                                <p>
                                                    <a href="<?php echo site_url('product/?pr='.$val->pr_id) ?>"> <?php echo $val->pr_name ?></a>
                                                </p>
                                                <p>
                                                    <b>Rp. <?php echo $val->pr_price ?></b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!--/.List Product-->
                                </div>
                            </div>

                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.col-sm-7-->


                    <!--Right Content Menu-->

                    <!--/.Right Content Menu-->
                </div>
                <br/>


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

