<!-- Static navbar -->
<nav class="navbar navbar-default " role="navigation" id="navy">
    <div class="container-fluid" id="navy-link">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">COMMUNITY : </a>
                </li>
                <li><a href="#">YOUTUBE | </a>
                </li>
                <li><a href="#">FACEBOOK</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar-static-top/">ABOUT US</a>
                </li>
                <li><a href="../navbar-fixed-top/">BLOG</a>
                </li>
                <li><a href="../navbar-fixed-top/">CONTACT</a>
                </li>
                <li>
                    <?php
                        if($this->ion_auth->logged_in()){ ?>
                            <a href="<?php echo site_url('user/logout') ?>">LOGOUT</a>
                        <?php }else{ ?>
                            <a href="<?php echo site_url('user/getIn') ?>">REGISTER / LOGIN </a>
                        <?php }
                    ?>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>