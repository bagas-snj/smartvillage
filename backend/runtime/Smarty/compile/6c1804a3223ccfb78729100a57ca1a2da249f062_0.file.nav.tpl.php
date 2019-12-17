<?php
/* Smarty version 3.1.31, created on 2017-12-03 04:00:23
  from "D:\xampp\htdocs\smartvillage\backend\views\layouts\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a231467189855_56278554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c1804a3223ccfb78729100a57ca1a2da249f062' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\layouts\\nav.tpl',
      1 => 1511840200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a231467189855_56278554 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
if (!empty($_smarty_tpl->tpl_vars['user']->value)) {?>
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
            <a href="<?php echo yii\helpers\Url::home(true);?>
">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
         <?php if ($_smarty_tpl->tpl_vars['user']->value->roleAs('admin')) {?>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-book"></i>
                <span>Master Desa</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo yii\helpers\Url::toRoute('master/rtrw',true);?>
">
                        <i class="fa fa-circle-o text-red"></i> RT/RW
                    </a>
                </li>
                <li>
                    <a href="<?php echo yii\helpers\Url::toRoute('master/dusun',true);?>
">
                        <i class="fa fa-circle-o text-red"></i> Dusun
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cubes"></i>
                <span>Master Penduduk</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo yii\helpers\Url::toRoute('master/agama',true);?>
">
                        <i class="fa fa-circle-o text-red"></i> Agama
                    </a>
                </li>
                <li>
                    <a href="<?php echo yii\helpers\Url::toRoute('master/pendidikan',true);?>
">
                        <i class="fa fa-circle-o text-red"></i> Pendidikan
                    </a>
                </li>
                <li>
                    <a href="<?php echo yii\helpers\Url::toRoute('master/pekerjaan',true);?>
">
                        <i class="fa fa-circle-o text-red"></i> Pekerjaan
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-database"></i>
                <span>Master Pembangunan</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo yii\helpers\Url::toRoute('master/status-pembangunan',true);?>
">
                        <i class="fa fa-circle-o text-red"></i> Status Pembangunan
                    </a>
                </li>
                <li>
                    <a href="<?php echo yii\helpers\Url::toRoute('master/kategori-pembangunan',true);?>
">
                        <i class="fa fa-circle-o text-red"></i> Kategori Pembangunan
                    </a>
                </li>
                <li>
                    <a href="<?php echo yii\helpers\Url::toRoute('master/status',true);?>
">
                        <i class="fa fa-circle-o text-red"></i>  Status
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users"></i>
                <span>Master User</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="<?php echo yii\helpers\Url::toRoute('user/',true);?>
">
                        <i class="fa fa-circle-o text-red"></i>Pengguna
                    </a>
                </li>
                <li>
                    <a href="<?php echo yii\helpers\Url::toRoute('master/role',true);?>
">
                        <i class="fa fa-circle-o text-red"></i> Role Pengguna
                    </a>
                </li>
            </ul>
        </li>
         <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->roleAs('operator')) {?>
            <li>
                <a href="<?php echo yii\helpers\Url::toRoute('operator/pembangunan',true);?>
">
                    <i class="fa fa-building"></i> <span>Data Pembangunan</span>
                </a>
            </li>
            <li>
                <a href="<?php echo yii\helpers\Url::toRoute('operator/penduduk',true);?>
">
                    <i class="fa fa-user-plus"></i> <span>Data Penduduk</span>
                </a>
            </li>
        <?php }?>
        <li>
            <a href="<?php echo yii\helpers\Url::toRoute('site/logout',true);?>
">
                <i class="fa fa-lock"></i> <span>Keluar</span>
            </a>
        </li>
    </ul>
<?php }?>

<?php }
}
