<?php
/* Smarty version 3.1.31, created on 2019-12-16 19:10:23
  from "C:\xampp98\htdocs\smartvillage\backend\views\master\rtrw\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5df7742fe0e855_68810226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '325feb59177d9ccf4c87f4300245fbd60e54c576' => 
    array (
      0 => 'C:\\xampp98\\htdocs\\smartvillage\\backend\\views\\master\\rtrw\\index.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df7742fe0e855_68810226 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Data Master RT/RW"),$_smarty_tpl);?>


<a onclick="loadModal(this)" target="master/rtrw/form" class="btn btn-primary" title="Tambah Data"><i
            class="glyphicon glyphicon-plus"></i> Tambah Data</a>
<a onclick="loadModal(this)" target="master/rtrw/form-import" class="btn btn-success" title="Import Data"><i
            class="glyphicon glyphicon-upload"></i> Import Data</a>

<table id="indicator-category-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Induk</th>
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
            <td class="center"><?php echo $_smarty_tpl->tpl_vars['nomor']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->rw_parent;?>
</td>
            <td class="center"><?php echo is_null($_smarty_tpl->tpl_vars['item']->value->rt_child) ? '-' : $_smarty_tpl->tpl_vars['item']->value->parent->rw_parent;?>
</td>
            <!--<td class="center"><?php echo $_smarty_tpl->tpl_vars['item']->value->rt_child;?>
</td>-->
            <td class="center nowrap">
                <a onclick="loadModal(this)" target="master/rtrw/form" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
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
        ajaxTransfer('master/rtrw', { }, '#main-content');
    }

    function deleteData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
            ajaxTransfer('master/rtrw/delete', { id: id }, '#modal-output');
        });
    }

    dataTables('#indicator-category-table');
<?php echo '</script'; ?>
><?php }
}
