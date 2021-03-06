<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url; 

?>
<!-- HOME -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="account-pages">
                        <div class="account-box">
                            <div class="account-logo-box bg-inverse">
                                <h2 class="text-uppercase text-center">
                                    <a href="index.php" class="text-success">
                                        <span><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/logo.png"></span>
                                    </a>
                                </h2>
                            </div>
                            <div class="account-content">
                                <h5 class="text-uppercase font-bold">Login to your Golfer Card account</h5>
                                <hr/>
                                <!--                                        <form class="form-horizontal" action="#">-->
                                <?php
                                $form = ActiveForm::begin([
                                            'id' => 'login-form',
                                            'layout' => 'horizontal',
                                            'fieldConfig' => [
                                                'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                                'labelOptions' => ['class' => 'form-horizontal'],
                                            ],
                                ]);
                                ?>

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="text" name="username" id="emailaddress" required="" placeholder="john@deo.com">

                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="recoverpw.php" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" name="password" id="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-success">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-md btn-block btn-danger waves-effect waves-light" type="submit"><a href="<?= Url::to('golf-clubs') ?>" class="text-white">Sign In</a></button>
 <?php //echo  Html::submitButton('Sign In', ['class' => 'btn btn-md btn-block btn-danger waves-effect waves-light', 'name' => 'login-button']) ?>
                                    </div>
                                </div>

<?php ActiveForm::end(); ?>

                                <div class="row m-t-50">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted">Don't have an account? <a href="<?= Url::to('golfer-registration') ?>" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-box-->


                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>
<!--</div>-->