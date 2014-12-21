<div class="container" role="main">
    <div class="banner">
        <div class="row row-centered" style="margin-bottom:-5px; padding-bottom:0px">
            <div class="col-sm-3 col-sm-offset-1 hidden-xs" style="margin-bottom:30px; text-align:left">
                <a href="<?php echo site_url() ?>">
                <img src="<?php echo base_url("assets/img/logo%20dunia%20motor.png") ?>"
                     style="margin-bottom:-25px; margin-left:-40px"></a>
                <br/>
                    <span style="color:white">
                        CONTACT US : 0878.8444.3234 
                    </span>
            </div>
            <div class="col-sm-5">
                <div class="form-horizontal" style="padding-top:40px; text-align:left">
                    <div class="form-group">
                        <div class="input-group bordered">
                            <input type="text" class="form-control">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Search</button>
                              </span>
                        </div>
                    </div>
                </div>
            </div>

            <!--Content Top Menu-->
            <div class="col-xs-10 col-centered ">
                <nav class="navbar navbar-default content-header" role="navigation"
                     style="border-bottom : 15px solid red; margin-bottom:0px;">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar2" class="navbar-collapse collapse ">
                            <ul class="nav navbar-nav nav-justified">
                                <?php foreach($brands as $i => $val) { ?>
                                    <li>
                                        <a href="<?php echo site_url('category/?brand='.$val->br_id) ?>">
                                            <?php echo $val->br_name ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!--/.container-fluid -->
                </nav>
            </div>
            <!--/.Content Top Menu-->
        </div>
    </div>
</div>

<div class="widget-box">
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <div data-spy="affix" data-offset-top="50" data-offset-bottom="200">
                <div id="body">
                    <h2>
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    </h2>
                    <?php foreach($this->cart->contents() as $cart) {?>
                        <?php echo $cart['qty'] ?> <br />
                        <?php echo $cart['price'] ?> <br />
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
