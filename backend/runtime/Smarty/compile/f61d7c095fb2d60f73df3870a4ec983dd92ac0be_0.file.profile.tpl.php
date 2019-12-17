<?php
/* Smarty version 3.1.31, created on 2018-01-14 13:56:15
  from "/var/www/html/smartvillage/backend/views/user/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5aff0f5b6902_19528454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f61d7c095fb2d60f73df3870a4ec983dd92ac0be' => 
    array (
      0 => '/var/www/html/smartvillage/backend/views/user/profile.tpl',
      1 => 1515911394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5aff0f5b6902_19528454 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Profile User"),$_smarty_tpl);?>





<?php if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
}?>

        <table class="table table-striped">

            <tr>
                <td width="250px" rowspan="6">
                    <center><img width="200px" src="<?php echo !$_smarty_tpl->tpl_vars['user']->value ? '' : $_smarty_tpl->tpl_vars['user']->value->displayPhoto;?>
" class="img-rounded" alt="User Image"></center>
                </td>
                <td width="20%">Nama</td>
                <td width="5%">:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</td>
            </tr>
            <tr>
                <td width="20%">Role</td>
                <td width="5%">:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->role->name;?>
</td>
            </tr>
            <tr>
                <td width="20%">Username</td>
                <td width="5%">:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
            </tr>
            <tr>
                <td width="20%">Email</td>
                <td width="5%">:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
            </tr>
            <tr>
                <td width="20%">Dibuat Pada</td>
                <td width="5%">:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->created_at;?>
</td>
            </tr>
            <tr>
                <td width="20%">Terakhir Login</td>
                <td width="5%">:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->last_login;?>
</td>
            </tr>
            <tr>
                <td colspan="4">
                <center style="margin-top:30px;">
                    <a onclick="loadModal(this)" target="user/form" data="id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"
                       class="btn btn-primary btn-xs glyphicon glyphicon-pencil" style="word-spacing: -10px;font-size: 15px;padding: 5px 15px; margin: 0px 10px;" title="Ubah Data"> Edit Data</a>
                    <?php if ($_smarty_tpl->tpl_vars['detail']->value) {?>

                        <?php $_smarty_tpl->_assignInScope('userNow', Yii::$app->session->get('user',false));
?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->username != $_smarty_tpl->tpl_vars['userNow']->value->username) {?>
                            <a onclick="deleteData(<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
)" class="btn btn-danger btn-xs glyphicon glyphicon-trash" style="word-spacing: -10px;font-size: 15px; padding: 5px 15px; margin: 0px 10px;" title="Hapus Data"> Hapus Data</a>

                            <a onclick="loadModal(this)" target="user/login" data="id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"
                                class="btn btn-primary btn-xs glyphicon glyphicon-log-in" style="word-spacing: -10px;font-size: 15px; padding: 5px 15px; margin: 0px 10px;" title="Ubah Data"> Login</a>
                        <?php }?>
                    <?php }?>
                </center>
                </td>
        </table>

<?php echo '<script'; ?>
>
    function reloadData() {
        ajaxTransfer('user/profile', {}, '#main-content');
    }
<?php echo '</script'; ?>
><?php }
}
