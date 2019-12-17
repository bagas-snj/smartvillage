<?php
/* Smarty version 3.1.31, created on 2018-01-15 09:51:48
  from "D:\xampp\htdocs\smartvillage\backend\views\mitra\lapor-progress\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5c174410dfd3_13194931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '510940b31c82dd963e82a248ee7de73a7a900924' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\mitra\\lapor-progress\\index.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5c174410dfd3_13194931 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Laporan Progress"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h4>Rp <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->anggaran,2);?>
</h4>

                <p><?php echo $_smarty_tpl->tpl_vars['item']->value->nama_pembangunan;?>
</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo yii\helpers\Url::toRoute('mitra/lapor-progress/view',true);?>
?id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" class="small-box-footer">Detail Lapor<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
