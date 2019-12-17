<?php
/* Smarty version 3.1.31, created on 2018-01-14 20:22:56
  from "D:\xampp\htdocs\smartvillage\backend\views\operator\request-pembangunan\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5b59b0a6e774_60526153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faa60d1a79240be91f84366c15caf717fc87ca05' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\operator\\request-pembangunan\\index.tpl',
      1 => 1515936123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b59b0a6e774_60526153 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Data Request Pembangunan"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
?>
<table id="user-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Tanggal Request</th>
        <th>Pelapor</th>
        <th>Status</th>
        <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    <?php $_smarty_tpl->_assignInScope('nomor', 1);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['nomor']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->judul;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->deskripsi;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->created_at;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->user->username;?>
</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->status == 'requestbaru') {?>
                    <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['item']->value->status;?>
</span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->status == 'terverifikasi') {?>
                    <span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['item']->value->status;?>
</span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->status == 'ditindaklanjuti') {?>
                    <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['item']->value->status;?>
</span>
                <?php }?>
            </td>

            <td class="center nowrap">
                <?php if ($_smarty_tpl->tpl_vars['item']->value->status != 'terverifikasi') {?>
                    <a onclick="verifikasiData(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
)" class="btn btn-info btn-xs glyphicon glyphicon-pencil"
                       title="VerifikasiData"></a>
                    <a onclick="tindakData(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
)" class="btn btn-success btn-xs glyphicon glyphicon-ok-circle"
                       title="tindakData"></a>
                <?php }?>
            </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </tbody>
</table>
<?php echo '<script'; ?>
>
    function reloadData() {
        ajaxTransfer('operator/request-pembangunan', { }, '#main-content');
    }
    function verifikasiData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan memverifikasi data?', function () {
            ajaxTransfer('operator/request-pembangunan/verifikasi', { id: id }, '#modal-output');
        });
    }

    function tindakData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan memverifikasi data?', function () {
            ajaxTransfer('operator/request-pembangunan/tindak', { id: id }, '#modal-output');
        });
    }
    dataTables('#user-table');
<?php echo '</script'; ?>
><?php }
}
