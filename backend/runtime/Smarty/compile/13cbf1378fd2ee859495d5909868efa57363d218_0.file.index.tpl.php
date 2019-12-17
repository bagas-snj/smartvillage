<?php
/* Smarty version 3.1.31, created on 2018-01-14 20:23:50
  from "D:\xampp\htdocs\smartvillage\backend\views\operator\kategori-pembangunan\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5b59e654c912_40243701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13cbf1378fd2ee859495d5909868efa57363d218' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\operator\\kategori-pembangunan\\index.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b59e654c912_40243701 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Manajemen Kategori Pembangunan"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
?>
    <a onclick="loadModal(this)" target="operator/kategori-pembangunan/form" class="btn btn-primary" title="Tambah Data"><i
                class="glyphicon glyphicon-plus"></i> Tambah Data</a>
<table id="user-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Kategori Pembangunan</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->nama;?>
</td>

            <td class="center nowrap">
                <a onclick="loadModal(this)" target="operator/kategori-pembangunan/form" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"
                   class="btn btn-primary btn-xs glyphicon glyphicon-pencil" title="Ubah Data"></a>
                <a onclick="deleteData(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
)" class="btn btn-danger btn-xs glyphicon glyphicon-trash"
                   title="Hapus Data"></a>
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
        ajaxTransfer('operator/kategori-pembangunan', { }, '#main-content');
    }

    function deleteData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
            ajaxTransfer('operator/kategori-pembangunan/delete', { id: id }, '#modal-output');
        });
    }
    dataTables('#user-table');
<?php echo '</script'; ?>
><?php }
}
