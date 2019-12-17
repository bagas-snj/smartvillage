<?php
/* Smarty version 3.1.31, created on 2018-01-15 11:12:07
  from "/var/www/html/smartvillage/backend/views/operator/pembangunan/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5c2a17831391_41766986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '071880394d8c73d0068024c25806507eda30cadd' => 
    array (
      0 => '/var/www/html/smartvillage/backend/views/operator/pembangunan/index.tpl',
      1 => 1515911394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5c2a17831391_41766986 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Data Pembangunan"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
?>
<!-- Custom Tabs -->
    
        
            
            
            
            
        
        
            
                <a onclick="loadModal(this)" target="operator/pembangunan/form" class="btn btn-primary" title="Tambah Data"><i
                            class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                <a onclick="loadModal(this)" target="operator/penduduk/form-import" class="btn btn-success" title="Import Data"><i
            class="glyphicon glyphicon-cloud-download"></i> Export Data</a>

                <table id="user-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembangunan</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Mitra/Rekanan</th>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->nama_pembangunan;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->tgl_mulai;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->tgl_selesai;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->mitra->nama_mitra;?>
</td>

                            <td class="center nowrap">
                                <a onclick="loadModal(this)" target="operator/pembangunan/form" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"
                                   class="btn btn-primary btn-xs glyphicon glyphicon-pencil" title="Ubah Data"></a>
                                <a onclick="loadModal(this)" target="operator/pembangunan/detail" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"
                                   class="btn btn-success btn-xs glyphicon glyphicon-list-alt" title="Detail User"></a>
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
                        ajaxTransfer('operator/pembangunan', { }, '#main-content');
                    }

                    function deleteData(id) {
                        modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
                            ajaxTransfer('operator/pembangunan/delete', { id: id }, '#modal-output');
                        });
                    }
                    dataTables('#user-table');
                <?php echo '</script'; ?>
>
            
            
            
                
                
                
                
                
                
                
            
            
            
                
                
                
                
                
                
                
            
            
        
        
    
    <?php }
}
