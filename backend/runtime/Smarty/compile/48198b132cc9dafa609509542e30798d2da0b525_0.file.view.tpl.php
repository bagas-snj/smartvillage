<?php
/* Smarty version 3.1.31, created on 2018-01-15 09:52:32
  from "D:\xampp\htdocs\smartvillage\backend\views\mitra\lapor-progress\view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5c17702f7623_26972545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48198b132cc9dafa609509542e30798d2da0b525' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\mitra\\lapor-progress\\view.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5c17702f7623_26972545 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Data Laporan"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
?>
<!-- Custom Tabs -->
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Buat Laporan</a></li>
        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Data Laporan</a></li>
        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
    </ul>
    <div class="tab-content">

        <div class="tab-pane active" id="tab_1">
            <?php if ($_smarty_tpl->tpl_vars['cek']->value) {?>
                <div class="btn btn-warning">Anda Telah Membuat Laporan Pada Hari Ini !!</div>
            <?php } else { ?>
                <h4><center>LAPORAN PROGRESS HARIAN</center></h4>
                <table class="table">
                    <tr>
                        <th>NAMA PEMBANGUNAN</th>
                        <th>:<?php echo $_smarty_tpl->tpl_vars['pembangunan']->value->nama_pembangunan;?>
</th>
                        <th>NAMA MITRA</th>
                        <th>:<?php echo $_smarty_tpl->tpl_vars['pembangunan']->value->mitra->nama_mitra;?>
</th>
                    </tr>
                    <tr>
                        <th>KATEGORI PEMBANGUNAN</th>
                        <th>:<?php echo $_smarty_tpl->tpl_vars['pembangunan']->value->kategori->nama;?>
</th>
                        <th>TANGGAL</th>
                        <th>:<?php echo date('Y-m-d');?>
</th>
                    </tr>
                    <tr>
                        <th>TANGGAL MULAI</th>
                        <th>:<?php echo $_smarty_tpl->tpl_vars['pembangunan']->value->tgl_mulai;?>
</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>TANGGAL SELESAI</th>
                        <th>:<?php echo $_smarty_tpl->tpl_vars['pembangunan']->value->tgl_selesai;?>
</th>
                        <th></th>
                        <th></th>
                    </tr>
                </table>
                <div id="result-entities"></div>
                <form id="form-entities" onsubmit="return false;" class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 col-xs-12 control-label">Uraian Pekerjaan</label>
                        <div class="col-sm-10 col-xs-12">
                            <textarea class="form-control" name="uraian_pekerjaan"></textarea>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-10">Capaian Berisi Bobot Pekerjaan Tiap Hari!!</div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 col-xs-12 control-label">Capaian</label>
                        <div class="col-sm-8 col-xs-12">
                            <?php echo yii\helpers\Html::input("text","capaian_progress",'',array("class"=>"form-control","required"=>''));?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-2 col-xs-12 control-label">Foto</label>
                        <div class="col-sm-8 col-xs-12">
                            <?php echo yii\helpers\Html::fileInput('Uploader[file]',null,array('class'=>'form-control'));?>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-sm-8 col-xs-12">
                            <input class="btn btn-primary" type="submit" value="Simpan">
                        </div>
                    </div>
                    <?php echo yii\helpers\Html::hiddenInput('pembangunan_id',$_smarty_tpl->tpl_vars['pembangunan']->value->id);?>

                    <?php echo yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam,Yii::$app->request->csrfToken);?>

                </form>

                <?php echo '<script'; ?>
>
                    $("#form-entities").submit(function () {
                        var data = getFormData("form-entities");
                        ajaxTransfer("mitra/lapor-progress/save", data, "#result-entities");
                    })

                <?php echo '</script'; ?>
>
            <?php }?>


        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            <table id="user-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pembangunan</th>
                    <th>Capaian Progress</th>
                    <th>Tanggal</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->pembangunan->nama_pembangunan;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->capaian_progress;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->tanggal;?>
</td>
                        <td class="center nowrap">
                            <a onclick="loadModal(this)" target="mitra/lapor-progress/form" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"
                               class="btn btn-primary btn-xs glyphicon glyphicon-pencil" title="Ubah Data"></a>
                            <a onclick="loadModal(this)" target="mitra/lapor-progress/form" data="id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"
                               class="btn btn-success btn-xs glyphicon glyphicon-list-alt" title="Detail Data"></a>
                            <a onclick="loadModal(this)" target="mitra/laporan-progress/form-export"
                               class="btn btn-success btn-xs glyphicon glyphicon-cloud-download" title="Import Data"></a>
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
        </div>
    </div>
    <!-- /.tab-content -->
</div>
<!-- nav-tabs-custom --><?php }
}
