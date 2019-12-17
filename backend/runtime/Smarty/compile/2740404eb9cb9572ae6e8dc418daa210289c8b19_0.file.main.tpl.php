<?php
/* Smarty version 3.1.31, created on 2018-01-14 17:03:56
  from "/var/www/html/smartvillage/backend/views/layouts/main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5b2b0c9ba093_13145965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2740404eb9cb9572ae6e8dc418daa210289c8b19' => 
    array (
      0 => '/var/www/html/smartvillage/backend/views/layouts/main.tpl',
      1 => 1515911394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:@app/views/layouts/nav.tpl' => 1,
  ),
),false)) {
function content_5a5b2b0c9ba093_13145965 (Smarty_Internal_Template $_smarty_tpl) {
?>




<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['app']->value->language;?>
">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['app']->value->charset;?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo is_null($_smarty_tpl->tpl_vars['this']->value->title) ? $_smarty_tpl->tpl_vars['app']->value->params['defaultTitle'] : $_smarty_tpl->tpl_vars['this']->value->title;?>
</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php echo yii\helpers\Html::csrfMetaTags();?>

    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
css/style.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
css/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
plugin/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
css/backend.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
template/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
template/dist/css/skins/skin-blue.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
template/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
template/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
plugin/chosen/chosen.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
plugin/datetimepicker/jquery.datetimepicker.css">
    <link rel="stylesheet" href="<?php echo yii\helpers\Url::home(true);?>
css/datatables.min.css">
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
script/lib.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
script/core.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
script/spms.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
script/peta.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/dist/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
script/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
script/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
plugin/chosen/chosen.jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
script/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/morris/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/knob/jquery.knob.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/plugins/fastclick/fastclick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/dist/js/app.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
plugin/datetimepicker/jquery.datetimepicker.full.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
plugin/gauge/highcharts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
plugin/gauge/highcharts-more.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
plugin/gauge/solid-gauge.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/dist/js/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
template/dist/js/respond.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
plugin/highcharts-4.2.5/js/highcharts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo yii\helpers\Url::home(true);?>
plugin/highcharts-4.2.5/js/modules/exporting.src.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        baseURL = "<?php echo yii\helpers\Url::home(true);?>
";
        $.widget.bridge('uibutton', $.ui.button);
    <?php echo '</script'; ?>
>
    <style type="text/css">
    .box, .info-box, .small-box, .nav-tabs-custom, .callout {
    box-shadow: 0 1px 6px 0 rgba(0,0,0,0.12),0 1px 6px 0 rgba(0,0,0,0.12);
    border-radius: 2px;
    border: 0;
    }
    .main-sidebar, .left-side, .control-sidebar {
    padding-top: 60px;
    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    }
    .main-header .navbar {
    box-shadow: 0 1px 6px 0 rgba(0,0,0,0.12),0 1px 6px 0 rgba(0,0,0,0.12);
    }
    </style>
</head>
<body class="skin-blue fixed sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <a href="<?php echo yii\helpers\Url::home(true);?>
" class="logo">
            <span class="logo-mini"><b></b>SV</span>
            <span class="logo-lg"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <b></b>SmartVillage</b></span>

        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                <ul class="nav navbar-nav">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->roleAs('operator')) {?>
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"><?php echo backend\models\RequestPembangunan::find()->where(array('status'=>'requestbaru'))->count();?>
</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Anda Memiliki <?php echo backend\models\RequestPembangunan::find()->where(array('status'=>'requestbaru'))->count();?>
 Request Pembangunan Baru</li>

                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning"><?php echo backend\models\LaporAduan::find()->where(array('status'=>'laporanbaru'))->count();?>
</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="header">Anda Memiliki <?php echo backend\models\LaporAduan::find()->where(array('status'=>'laporanbaru'))->count();?>
  Laporan Aduan Baru</li>
                        </ul>
                    </li>
                    <?php }?>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo !$_smarty_tpl->tpl_vars['user']->value ? '' : $_smarty_tpl->tpl_vars['user']->value->displayPhoto;?>
" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs"><?php echo !$_smarty_tpl->tpl_vars['user']->value ? '' : $_smarty_tpl->tpl_vars['user']->value->name;?>
</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?php echo !$_smarty_tpl->tpl_vars['user']->value ? '' : $_smarty_tpl->tpl_vars['user']->value->displayPhoto;?>
" class="img-circle"
                                     alt="User Image">
                                <p>
                                    <?php echo !$_smarty_tpl->tpl_vars['user']->value ? '' : $_smarty_tpl->tpl_vars['user']->value->name;?>

                                    <small><?php echo !$_smarty_tpl->tpl_vars['user']->value ? '' : $_smarty_tpl->tpl_vars['user']->value->role->name;?>
</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo yii\helpers\Url::toRoute('user/profile/',true);?>
" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo yii\helpers\Url::toRoute('site/logout',true);?>
" class="btn btn-default btn-flat">Keluar</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php }?>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo !$_smarty_tpl->tpl_vars['user']->value ? '' : $_smarty_tpl->tpl_vars['user']->value->displayPhoto;?>
" class="img-circle"
                         alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo !$_smarty_tpl->tpl_vars['user']->value ? '' : $_smarty_tpl->tpl_vars['user']->value->name;?>
</p>
                    <a href="#"><?php echo !$_smarty_tpl->tpl_vars['user']->value ? '' : $_smarty_tpl->tpl_vars['user']->value->role->name;?>
</i>

                    </a>
                </div>
            </div>
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input name="q" class="form-control" placeholder="Search..." type="text">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <?php $_smarty_tpl->_subTemplateRender('file:@app/views/layouts/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </section>
    </aside>
    <?php if ($_smarty_tpl->tpl_vars['this']->value->title == 'SmartVillage Dashboard') {?>
    <div class="content-wrapper">
        <section class="content">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </section>
    </div>
    <?php } else { ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class='col-md-12'>
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">
                                    <?php echo is_null($_smarty_tpl->tpl_vars['this']->value->title) ? $_smarty_tpl->tpl_vars['app']->value->params['defaultTitle'] : $_smarty_tpl->tpl_vars['this']->value->title;?>

                                </h3>
                            </div>
                            <div id="main-content" class="box-body">
                                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php }?>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2017 <a href="<?php echo yii\helpers\Url::home(true);?>
">SMART Village</a>.</strong> All rights reserved.
    </footer>
</div>
<?php echo yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam,Yii::$app->request->csrfToken);?>

</body>
</html>
<?php }
}
