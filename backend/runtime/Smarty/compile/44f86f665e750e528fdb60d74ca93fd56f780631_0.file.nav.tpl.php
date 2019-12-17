<?php
/* Smarty version 3.1.31, created on 2018-01-14 19:16:24
  from "D:\xampp\htdocs\smartvillage\backend\views\layouts\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5b4a185d4194_01404148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44f86f665e750e528fdb60d74ca93fd56f780631' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\layouts\\nav.tpl',
      1 => 1515932180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b4a185d4194_01404148 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-database"></i>
                    <span>Data Pembangunan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo yii\helpers\Url::toRoute('operator/pembangunan',true);?>
">
                            <i class="fa fa-circle-o text-red"></i> Pembangunan
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo yii\helpers\Url::toRoute('operator/kategori-pembangunan',true);?>
">
                            <i class="fa fa-circle-o text-red"></i> Kategori Pembangunan
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo yii\helpers\Url::toRoute('operator/sumber-dana-pembangunan',true);?>
">
                            <i class="fa fa-circle-o text-red"></i>  Sumber Dana
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo yii\helpers\Url::toRoute('operator/mitra',true);?>
">
                            <i class="fa fa-circle-o text-red"></i>  Mitra
                        </a>
                    </li>
                </ul>
            <li>

            <li>
                <a href="<?php echo yii\helpers\Url::toRoute('operator/penduduk',true);?>
">
                    <i class="fa fa-user-plus"></i> <span>Data Penduduk</span>
                </a>
            </li>
            <li>
                <a href="<?php echo yii\helpers\Url::toRoute('operator/request-pembangunan',true);?>
">
                    <i class="fa fa-bookmark"></i> <span>Request Pembangunan</span>
                </a>
            </li>
            <li>
                <a href="<?php echo yii\helpers\Url::toRoute('operator/pengumuman',true);?>
">
                    <i class="fa fa-bullhorn"></i> <span>Pengumuman</span>
                </a>
            </li>
            <li>
                <a href="<?php echo yii\helpers\Url::toRoute('operator/lapor-aduan',true);?>
">
                    <i class="fa fa-retweet"></i> <span>Lapor Aduan</span>
                </a>
            </li>
            <li>
                <a href="<?php echo yii\helpers\Url::toRoute('operator/report',true);?>
">
                    <i class="fa fa-bug"></i> <span>Report</span>
                </a>
            </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->roleAs('mitra')) {?>
            <li>
                <a href="<?php echo yii\helpers\Url::toRoute('mitra/lapor-progress',true);?>
">
                    <i class="fa fa-retweet"></i> <span>Lapor Progress</span>
                </a>
            </li>
            <li>
                <a href="<?php echo yii\helpers\Url::toRoute('mitra/report',true);?>
">
                    <i class="fa fa-bug"></i> <span>Report</span>
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
