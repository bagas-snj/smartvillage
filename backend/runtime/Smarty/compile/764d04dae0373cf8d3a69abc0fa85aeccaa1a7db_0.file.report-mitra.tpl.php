<?php
/* Smarty version 3.1.31, created on 2018-01-15 09:48:47
  from "D:\xampp\htdocs\smartvillage\backend\views\operator\report\report-mitra.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5c168f824056_96898392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '764d04dae0373cf8d3a69abc0fa85aeccaa1a7db' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\operator\\report\\report-mitra.tpl',
      1 => 1515914817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5c168f824056_96898392 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"Laporan Per Mitra"),$_smarty_tpl);?>

<h3>Laporan : <br><br></h3>
<?php if (!$_smarty_tpl->tpl_vars['asPdf']->value) {?>
    <a href="<?php echo yii\helpers\Url::toRoute(('/mitra/report/export-pdf?id=').($_smarty_tpl->tpl_vars['data']->value->id),true);?>
" class="btn btn-success"
       title="Export Data"><i class="glyphicon glyphicon-download-alt"></i> Download Data</a>
<?php }?>
<p align="center">
    <label>LAPORAN HARIAN</label>
</p>

<table class="table table-striped">

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
        <th>:<?php echo $_smarty_tpl->tpl_vars['data']->value->tanggal;?>
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
<br>
<table class="table">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-sm-2 col-xs-12 control-label">Foto</label>
            <div class="col-sm-4 col-xs-12">
                <img src="<?php echo yii\helpers\Url::home(true);?>
/uploads/lapor-progress/<?php echo $_smarty_tpl->tpl_vars['data']->value->image;?>
" width="300px">
            </div>
            <label for="name" class="col-sm-2 col-xs-12 control-label">Capaian Progress</label>
            <div class="col-sm-4 col-xs-12">
               <p><?php echo $_smarty_tpl->tpl_vars['data']->value->capaian_progress;?>
</p>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-2 col-xs-12 control-label">Uraian Pekerjaan</label>
            <div class="col-sm-4 col-xs-12">
                <p align="justify"><?php echo $_smarty_tpl->tpl_vars['data']->value->uraian_pekerjaan;?>
</p>
            </div>
        </div>

    </form>

</table>
<hr>
<br><br>

<div style="float: left;text-align: center;" class="col-xs-4">
    <div class="row center">
        <label>Kepala Desa,</label>
        <br><br><br><br><br>
        <br><br>
        <p>
            Prof. Dr. Moh. Nasih, SE., MT., Ak., CMA.<br>
            NIP. 196508061992031002
        </p>
    </div>
</div>

<div style="float:right;text-align: center;" class="col-xs-4">
    <div class="row center">
        <label>Ponorogo, <?php echo $_smarty_tpl->tpl_vars['data']->value->tanggal;?>
</label><br>
        <br><br><br><br><br>
        <br><br
        <p>
            <?php echo $_smarty_tpl->tpl_vars['pembangunan']->value->mitra->nama_mitra;?>

        </p>
    </div>
</div><?php }
}
