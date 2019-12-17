<?php
/* Smarty version 3.1.31, created on 2017-10-22 02:59:41
  from "D:\xampp\htdocs\smartvillage\backend\views\layouts\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59eba72d9badc6_21744080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e6fc64559ea24cce647831c1ec312d3401e3ae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\layouts\\nav.tpl',
      1 => 1508615766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59eba72d9badc6_21744080 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <a href="<?php echo yii\helpers\Url::toRoute('master/user',true);?>
">
                            <i class="fa fa-circle-o"></i> Pengguna
                        </a>
                    </li>

                </ul>
            </li>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['user']->value->memberOf('operator')) {?>
            <li>
                <a href="<?php echo yii\helpers\Url::toRoute('#',true);?>
">
                    <i class="fa fa-users"></i> <span>Setting</span>
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
