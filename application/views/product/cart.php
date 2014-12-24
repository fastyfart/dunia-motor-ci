<?php
/**
 * Created by PhpStorm.
 * User: fasty
 * Date: 22/12/14
 * Time: 14:19
 */
?>

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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="<?php echo ($error == null && $regErrors == null && $success == null) ? 'active' : '' ?>">
                                    <a href="#detail" aria-controls="detail" role="tab" data-toggle="tab">Detail</a>
                                </li>

                                <?php if($this->ion_auth->logged_in()) { ?>
                                    <li role="presentation" class="disabled">
                                        <a href="#register" aria-controls="register" role="tab">Register</a>
                                    </li>
                                <?php }else{ ?>
                                    <li role="presentation" class="<?php echo (($error != null || $regErrors != null) && $success == null) ? 'active' : '' ?>">
                                        <a href="#register" aria-controls="register" role="tab"
                                           data-toggle="tab">Register</a>
                                    </li>
                                <?php } ?>
                                <li role="presentation" class="<?php echo ($success != null || $regSuccess != null) ? 'active' : '' ?>">
                                    <a href="#payment" aria-controls="payment" role="tab" data-toggle="tab">Payment</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane <?php echo ($error == null && $regErrors == null) ? 'active' : '' ?>" id="detail">
                                    <br/>
                                    <table class="table table-striped">
                                        <tbody>
                                        <?php foreach ($this->cart->contents() as $cart) { ?>
                                            <tr>
                                                <td><?php echo $cart['name'] ?></td>
                                                <td><?php echo $cart['qty'] ?></td>
                                                <td><?php echo $cart['price'] ?></td>
                                                <td><?php echo $cart['price'] * $cart['qty'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="3" style="text-align: right">Total</td>
                                            <td><?php echo $this->cart->total() ?></td>
                                        </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <div role="tabpanel" class="tab-pane <?php echo ($error != null || $regErrors != null) ? 'active' : '' ?>" id="register">
                                    <br/>

                                    <div class="row">
                                        <!--LOGIN-->
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="border-right: 1px solid #c6c6c6">

                                            <?php print_r($error); ?>
                                            <?php
                                                $attributes = array(
                                                    'class' => 'form-horizontal',
                                                    'id' => 'iFrom'
                                                );
                                            ?>
                                            <?php echo form_open(site_url('user/cartLogin'), $attributes); ?>
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-4 control-label">Username</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="username" id="username"
                                                               class="form-control" value="" title="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-sm-4 control-label">Password</label>
                                                    <div class="col-sm-6">
                                                        <input type="password" name="password" id="password"
                                                               class="form-control" value="" title="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6 col-sm-offset-4">
                                                        <button class="btn btn-primary" name="login">Login</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--END LOGIN-->

                                        <!-- USER REGISTER -->
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <?php
                                                print_r($regErrors);
                                                $attributes = array(
                                                    'class' => 'form-horizontal',
                                                    'id' => 'iFrom'
                                                );
                                            ?>
                                            <?php echo form_open(site_url('user/cartRegister'), $attributes); ?>
                                                <div class="form-group">
                                                    <label for="username"
                                                           class="col-sm-4 control-label">Username</label>

                                                    <div class="col-sm-6">
                                                        <input type="text" name="username" id="username"
                                                               class="form-control" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email"
                                                           class="col-sm-4 control-label">Email</label>

                                                    <div class="col-sm-6">
                                                        <input type="text" name="email" id="email"
                                                               class="form-control" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password"
                                                           class="col-sm-4 control-label">Password</label>

                                                    <div class="col-sm-6">
                                                        <input type="password" name="password" id="password"
                                                               class="form-control" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="passconf" class="col-sm-4 control-label">Confirm
                                                        Password</label>

                                                    <div class="col-sm-6">
                                                        <input type="text" name="passconf" id="password-confirm"
                                                               class="form-control" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6 col-sm-offset-4">
                                                        <button class="btn btn-primary" name="register">Register
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--END REGISTER-->
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane <?php echo ($success != null || $regSuccess != null) ? 'active' : '' ?>" id="payment">
                                    payment
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        alert('tes');
    })
</script>