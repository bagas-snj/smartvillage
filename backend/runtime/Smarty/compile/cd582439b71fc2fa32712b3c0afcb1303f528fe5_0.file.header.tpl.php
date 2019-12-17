<?php
/* Smarty version 3.1.31, created on 2017-10-21 23:20:19
  from "D:\xampp\htdocs\smartvillage\backend\views\layouts\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59eb73c3cbe040_58782142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd582439b71fc2fa32712b3c0afcb1303f528fe5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\layouts\\header.tpl',
      1 => 1508139618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59eb73c3cbe040_58782142 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$user = Yii::$app->user->id;
$user_role = \app\models\User::findOne($user)->role;
$role = \app\models\Role::findOne($user_role)->role;
if($user_role > 2){
    Yii::$app->response->redirect(\yii\helpers\Url::to($role));
}
<?php echo '?>';?>

<header class="main-header">

    <?php echo '<?=';?> Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name.'</span>', Yii::$app->homeUrl, ['class' => 'logo']) <?php echo '?>';?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                        <span class="hidden-xs"><?php echo '<?=';?>Yii::$app->user->identity->username<?php echo '?>';?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo '<?=';?>Yii::getAlias('@web')<?php echo '?>';?>/img/user.png" width="20px" height="auto" class="img-circle" alt="User Image"/>

                            <p>
                                <?php echo '<?=';?>Yii::$app->user->identity->username<?php echo '?>';?>
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <?php echo '<?=';?> Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) <?php echo '?>';?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
              
            </ul>
        </div>
    </nav>
</header>
<?php }
}
