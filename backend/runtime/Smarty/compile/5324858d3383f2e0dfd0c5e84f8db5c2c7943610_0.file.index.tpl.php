<?php
/* Smarty version 3.1.31, created on 2019-12-16 19:10:30
  from "C:\xampp98\htdocs\smartvillage\backend\views\master\dusun\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df774366aa109_63722178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5324858d3383f2e0dfd0c5e84f8db5c2c7943610' => 
    array (
      0 => 'C:\\xampp98\\htdocs\\smartvillage\\backend\\views\\master\\dusun\\index.tpl',
      1 => 1515914816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df774366aa109_63722178 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Manajemen Dusun"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
    <a onclick="loadModal(this)" target="master/dusun/form" class="btn btn-primary" title="Tambah Data"><i
                class="glyphicon glyphicon-plus"></i> Tambah Data</a>
<?php }?>
<table id="user-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Dusun</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->nama_dusun;?>
</td>

                <td class="center nowrap">
                    <a onclick="loadModal(this)" target="master/dusun/form" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
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
        ajaxTransfer('master/dusun', { }, '#main-content');
    }

    function deleteData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
            ajaxTransfer('master/dusun/delete', { id: id }, '#modal-output');
        });
    }
    dataTables('#user-table');
<?php echo '</script'; ?>
><?php }
}
