<?php
/* Smarty version 3.1.31, created on 2017-10-22 03:15:56
  from "D:\xampp\htdocs\smartvillage\backend\views\master\user\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ebaafc0e2213_31620351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72d4f4a8f715b3b7eeabd09bae1e3caaa2bc12fd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\master\\user\\index.tpl',
      1 => 1508616910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ebaafc0e2213_31620351 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Manajemen User"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
?>

<?php if ($_smarty_tpl->tpl_vars['isOperator']->value) {?>
    <a onclick="loadModal(this)" target="master/user/form" class="btn btn-primary" title="Tambah Data"><i
                class="glyphicon glyphicon-plus"></i> Tambah Data</a>
<?php }?>

<table id="user-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Peran</th>
        <th>Email</th>
        <th>Terakhir Login</th>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->roleAs('admin')) {?>
            <th>Opsi</th>
        <?php }?>
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
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</td>
            <td class="center"><?php echo $_smarty_tpl->tpl_vars['item']->value->role->name;?>
</td>
            <td class="center"><?php echo $_smarty_tpl->tpl_vars['item']->value->email;?>
</td>
            <td class="center"><?php echo $_smarty_tpl->tpl_vars['item']->value->last_login;?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->roleAs('admin')) {?>
                <td class="center nowrap">
                    <a onclick="loadModal(this)" target="master/user/form" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"
                       class="btn btn-primary btn-xs glyphicon glyphicon-pencil" title="Ubah Data"></a>

                    <a onclick="loadModal(this)" target="master/user/detail" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"
                       class="btn btn-primary btn-xs glyphicon glyphicon-list-alt" title="Detail User"></a>

                    <?php $_smarty_tpl->_assignInScope('userNow', Yii::$app->session->get('user',false));
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value->username != $_smarty_tpl->tpl_vars['userNow']->value->username) {?>
                        <a onclick="deleteData(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
)" class="btn btn-danger btn-xs glyphicon glyphicon-trash"
                           title="Hapus Data"></a>
                    <?php }?>
                </td>
            <?php }?>
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
        ajaxTransfer('master/user', { }, '#main-content');
    }

    function deleteData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
            ajaxTransfer('master/user/delete', { id: id }, '#modal-output');
        });
    }

    dataTables('#user-table');
<?php echo '</script'; ?>
><?php }
}
