<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\modules\user\models\LoginForm */
?>

<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <p>Home / Login</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================login_part Area =================-->
<section class="login_part section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>Already User</h2>
                        <p>There are advances being made in science and technology
                            everyday, and a good example of this is the</p>
                        <a href="<?= Url::to('login')?> " class="btn_3">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>Welcome Back ! <br>
                            Please Sign in now</h3>
                        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                        <div class="col-md-12 form-group p_star">
                            <?php echo $form->field($model, 'username')->textInput(['placeholder'=>'Username','class' => 'form-control', 'id'=>'name' ]) ?>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <?php echo $form->field($model, 'email')->textInput(['placeholder'=>'E-mail','class' => 'form-control', 'id'=>'name' ]) ?>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <?php echo $form->field($model, 'password')->passwordInput(['placeholder'=>'Password','class' => 'form-control', 'id'=>'password']) ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <?php echo Html::submitButton(Yii::t('frontend', 'Signup'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>

                            <h2><?php echo Yii::t('frontend', 'Sign up with')  ?>:</h2>
                            <div class="form-group">
                                <?php $authAuthChoice = yii\authclient\widgets\AuthChoice::begin([
                                    'baseAuthUrl' => ['site/auth']
                                ]); ?>
                                <ul class="list-unstyle list-inline">
                                    <?php foreach ($authAuthChoice->getClients() as $client): ?>
                                        <li><?= $authAuthChoice->clientLink($client) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php yii\authclient\widgets\AuthChoice::end(); ?>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->
