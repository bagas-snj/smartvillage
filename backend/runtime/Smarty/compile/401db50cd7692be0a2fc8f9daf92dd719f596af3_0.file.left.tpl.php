<?php
/* Smarty version 3.1.31, created on 2017-10-21 23:20:19
  from "D:\xampp\htdocs\smartvillage\backend\views\layouts\left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59eb73c3d7aaf8_12641114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '401db50cd7692be0a2fc8f9daf92dd719f596af3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\layouts\\left.tpl',
      1 => 1506271831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59eb73c3d7aaf8_12641114 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->

        <div class="user-panel" style="text-align: ">
            <div style="color: #ffffff">
                <b style="text-align: center">Sistem Informasi
                    Managemen
                </b>
            </div>
        </div>
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo '<?=';?>Yii::getAlias('@web')<?php echo '?>';?>/img/user.png" width="20px" height="auto" class="img-circle" alt="User Image"/>

            </div>
            <div class="pull-left info">
                <p><?php echo '<?=';?>Yii::$app->user->identity->username<?php echo '?>';?></p>

                <?php echo '<?php
                ';?>$role = \app\models\User::findOne(Yii::$app->user->id)->role
                <?php echo '?>';?>

                <a href="#"><i class="fa fa-circle text-success"></i> Online (<?php echo '<?=';?>\app\models\Role::findOne($role)->role<?php echo '?>';?>)</a>

            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
        </ul>
        <?php echo '<?php
        ';?>$menuItems = backend\components\SidebarMenu::getAllMenu();
        <?php echo '?>';?>
        <?php echo '<?=';?> dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => $menuItems,
            ]
        ) <?php echo '?>';?>

    </section>

</aside>
<?php }
}
