<?php
/* Smarty version 3.1.31, created on 2017-10-23 21:42:45
  from "D:\xampp\htdocs\smartvillage\backend\views\layouts\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59edffe519c3a4_66465966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '118796ade14b494f6e39fbfada63175095421f10' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\layouts\\nav.tpl',
      1 => 1508769705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59edffe519c3a4_66465966 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
?>

<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)) {?>
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
            <a href="<?php echo yii\helpers\Url::home(true);?>
">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->memberOf('operator') || $_smarty_tpl->tpl_vars['user']->value->memberOf('bpp')) {?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Data Master</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo yii\helpers\Url::toRoute('master/pembangunan',true);?>
">
                            <i class="fa fa-circle-o"></i> Pembangunan
                        </a>
                    </li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Master Pengguna</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo yii\helpers\Url::toRoute('user/',true);?>
">
                            <i class="fa fa-circle-o"></i> Pengguna
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo yii\helpers\Url::toRoute('master/role',true);?>
">
                            <i class="fa fa-circle-o"></i> Role Pengguna
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo yii\helpers\Url::toRoute('master/role-group',true);?>
">
                            <i class="fa fa-circle-o"></i> Role Group
                        </a>
                    </li>

                </ul>
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
