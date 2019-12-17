<?php
/* Smarty version 3.1.31, created on 2017-10-22 00:48:14
  from "D:\xampp\htdocs\smartvillage\backend\views\role\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59eb885e925422_88613478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c5e5dc3cd2e9ec5dff275ef06bec7bee9190d4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\role\\index.tpl',
      1 => 1508608089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59eb885e925422_88613478 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
                        <div class='col-md-12'>
                             <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Data Master Periode"),$_smarty_tpl);?>

</h3>
                                 </div>
                                 <div id="main-block-content" class="box-body">
                                    <a onclick="loadModal(this)" target="master/periods/form" class="btn btn-primary" title="Tambah Data"><i
            class="glyphicon glyphicon-plus"></i> Tambah Data</a>

<a onclick="loadModal(this)" target="master/periods/form-import" class="btn btn-success" title="Import Data"><i
            class="glyphicon glyphicon-upload"></i> Import Data</a>

<table id="indicator-category-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Role</th>
        <th>Setting</th>
       
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
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->role;?>
</td>
            <td>
            </td>
            <td class="center nowrap">
                <a onclick="loadModal(this)" target="master/periods/form" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
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
        ajaxTransfer('master/periods', { }, '#main-content');
    }

    function deleteData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
            ajaxTransfer('master/periods/delete', { id: id }, '#modal-output');
        });
    }

    dataTables('#indicator-category-table');
<?php echo '</script'; ?>
>
                                   
                                 </div>
                             </div>
                         </div>
                    </div>



<?php }
}
