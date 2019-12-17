<?php
/* Smarty version 3.1.31, created on 2018-01-14 13:59:33
  from "/var/www/html/smartvillage/backend/views/operator/penduduk/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5affd580fb27_25123597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2e18a0400c84d10640e8156d99043b8ce143bd8' => 
    array (
      0 => '/var/www/html/smartvillage/backend/views/operator/penduduk/index.tpl',
      1 => 1515911394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5affd580fb27_25123597 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Data Penduduk"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
?>
<!-- Custom Tabs -->
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Data Penduduk</a></li>
        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Cari Penduduk</a></li>
        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
            <a onclick="loadModal(this)" target="operator/penduduk/form" class="btn btn-primary" title="Tambah Data"><i
                        class="glyphicon glyphicon-plus"></i> Tambah Data</a>
            <a onclick="loadModal(this)" target="operator/penduduk/form-import" class="btn btn-success" title="Import Data"><i
                        class="glyphicon glyphicon-upload"></i> Import Data</a>
            <table id="user-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>TTL</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->nik;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->nama_lengkap;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->tempat_lahir;?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value->tanggal_lahir;?>
</td>
                        <td class="center nowrap">
                            <a onclick="loadModal(this)" target="operator/penduduk/form" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
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
                    ajaxTransfer('operator/penduduk', { }, '#main-content');
                }

                function deleteData(id) {
                    modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
                        ajaxTransfer('operator/penduduk/delete', { id: id }, '#modal-output');
                    });
                }
                dataTables('#user-table');
            <?php echo '</script'; ?>
>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
           <form class="form-horizontal">
               <div class="form-group">
                   <label for="name" class="col-sm-2 col-xs-12 control-label">Berdasarkan NIK</label>
                   <div class="col-sm-3 col-xs-12">
                       <?php echo yii\helpers\Html::input("text","nik",$_smarty_tpl->tpl_vars['data']->value->nik,array("class"=>"form-control","required"=>''));?>

                   </div>
                   <label for="name" class="col-sm-3 col-xs-12 control-label">Berdasarkan RT/RW</label>
                   <div class="col-sm-4 col-xs-12">
                       <?php echo yii\helpers\Html::input("text","nik",$_smarty_tpl->tpl_vars['data']->value->nik,array("class"=>"form-control","required"=>''));?>

                   </div>
               </div>
               <div class="form-group">
                   <label for="name" class="col-sm-2 col-xs-12 control-label">Berdasarkan Pendidikan</label>
                   <div class="col-sm-3 col-xs-12">
                       <?php echo yii\helpers\Html::input("text","nik",$_smarty_tpl->tpl_vars['data']->value->nik,array("class"=>"form-control","required"=>''));?>

                   </div>
                   <label for="name" class="col-sm-3 col-xs-12 control-label">Berdasarkan Pekerjaan</label>
                   <div class="col-sm-3 col-xs-12">
                       <?php echo yii\helpers\Html::input("text","nik",$_smarty_tpl->tpl_vars['data']->value->nik,array("class"=>"form-control","required"=>''));?>

                   </div>
               </div>
               <div class="form-group">
                   <label class="col-sm-2 col-xs-12 control-label"></label>
                   <div class="col-sm-1 col-xs-12">
                       <button class="btn btn-warning"><i class="glyphicon glyphicon-refresh"></i>Reset</button>
                   </div>
                   <div class="col-sm-2 col-xs-12">
                       <button class="btn btn-success"><i class="glyphicon glyphicon-search"></i>Cari</button>
                   </div>
               </div>
           </form>
            <?php echo '<script'; ?>
>
                $('select[name=nik]').chosen();
            <?php echo '</script'; ?>
>
        </div>
    </div>
    <!-- /.tab-content -->
</div>
<!-- nav-tabs-custom -->
<?php }
}
