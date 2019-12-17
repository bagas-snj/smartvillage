<?php
/* Smarty version 3.1.31, created on 2018-01-15 00:28:07
  from "D:\xampp\htdocs\smartvillage\backend\views\site\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5b9327d0f3c8_58273641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a74bee3b3a7a485a447dac61f432ec98384d37cc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\site\\index.tpl',
      1 => 1515950883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5b9327d0f3c8_58273641 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set'][0][0]->functionSet(array('title'=>"SmartVillage Dashboard"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('user', Yii::$app->session->get('user',false));
$_smarty_tpl->_assignInScope('i', 1);
$_smarty_tpl->_assignInScope('j', 1);
if ($_smarty_tpl->tpl_vars['user']->value->roleAs('admin')) {?>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">CPU Traffic</span>
                    <span class="info-box-number">90<small>%</small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-adjust"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Rt/rw</span>
                    <span class="info-box-number"><?php echo $_smarty_tpl->tpl_vars['totalRtrw']->value;?>
</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-bookmarks"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Dusun</span>
                    <span class="info-box-number"><?php echo $_smarty_tpl->tpl_vars['totalDusun']->value;?>
</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number"><?php echo $_smarty_tpl->tpl_vars['totalUser']->value;?>
</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Pembangunan Terbaru</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pembangunan</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $_smarty_tpl->_assignInScope('nomor', 1);
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pembangunanTerbaru']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['nomor']->value++;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->nama_pembangunan;?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->status->nama == 'Progress') {?>
                                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['item']->value->status->nama;?>
</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->status->nama == 'Pending') {?>
                                        <span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['item']->value->status->nama;?>
</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->status->nama == 'Selesai') {?>
                                        <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['item']->value->status->nama;?>
</span>
                                    <?php }?>

                                </td>

                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <!-- /.box-footer -->
            </div>
        </div>

    </div>



<?php }
if ($_smarty_tpl->tpl_vars['user']->value->roleAs('operator')) {?>
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['totalPenduduk']->value;?>
</h3>

                <p>Penduduk</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['totalLapor']->value;?>
</h3>

                <p>Laporan Aduan</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['totalRequest']->value;?>
</h3>

                <p>Request Pembangunan</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo yii\helpers\Url::toRoute('user/',true);?>
" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['totalPembangunan']->value;?>
</h3>

                <p>Pembangunan</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
</div>
<div class="row">
    <div class="col-md-7">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Target to Realisasi Total</h3>
            </div>
            <div id="main-block-content" class="box-body">
                <div id="container"></div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Pembangunan</h3>
            </div>
            <div id="main-block-content" class="box-body">
                <div id="container2"></div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Progress Pembangunan di Desa Gandu'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'prosentase'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },
        series: [{
            name: 'Pembangunan',
            colorByPoint: true,
            data: [
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataPembangunan']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            {
                name: '<?php echo $_smarty_tpl->tpl_vars['item']->value->nama_pembangunan;?>
',
                y: <?php echo $_smarty_tpl->tpl_vars['item']->value->prosentase;?>
,
                drilldown: '<?php echo $_smarty_tpl->tpl_vars['item']->value->nama_pembangunan;?>
'
            },
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            ]
        }],
       
    });
});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $('#container2').highcharts({
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45
                }
            },
            title: {
                text: 'Pemerataan Pembangunan'
            },
            subtitle: {
                text: ''
            },
            plotOptions: {
                pie: {
                    innerSize: 100,
                    depth: 45
                }
            },
            series: [{
                name: 'Jumlah Pembangunan',
                data: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataCount']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>

                    ['<?php echo $_smarty_tpl->tpl_vars['item']->value['nama_kategori'];?>
', <?php echo $_smarty_tpl->tpl_vars['item']->value['jumlah'];?>
],
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                ]
            }]
        });
    });
<?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['user']->value->roleAs('kades')) {?>
    <div class="row">
        <div class="col-md-8">
            <div class='box box-primary color-palette-box'>
                <div class='box-header with-border'>
                    <h3 class='box-title'><i class="fa fa-university"></i>Pemetaan Pembangunan Pembangunan</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-default" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class='box-body'>
                    <div id="map" style="width: 100%; height: 450px;"></div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-4">
            <div class='box box-primary color-palette-box'>
                <div class='box-header with-border'>
                    <h3 class='box-title'><i class="fa fa-search"></i>Cari Pembangunan</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-default" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class='box-body'>
                    <form id="form-targets" onsubmit="return false;" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-10"><b>Berdasarkan Kategori</b></div>
                            <div class="col-sm-12 col-xs-12">
                                <?php echo yii\helpers\Html::dropDownList("kategori_pembangunan_id",'',$_smarty_tpl->tpl_vars['kategoriOption']->value,array("class"=>"form-control"));?>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10"><b>Berdasarkan Sumber Dana</b></div>
                            <div class="col-sm-12 col-xs-12">
                                <?php echo yii\helpers\Html::dropDownList("sumber_dana_pembangunan_id",'',$_smarty_tpl->tpl_vars['sumberOption']->value,array("class"=>"form-control"));?>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10"><b>Berdasarkan Mitra</b></div>
                            <div class="col-sm-12 col-xs-12">
                                <?php echo yii\helpers\Html::dropDownList("mitra_id",'',$_smarty_tpl->tpl_vars['mitraOption']->value,array("class"=>"form-control"));?>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-12 col-xs-12">
                                <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i>Cari Data</button>

                            </div>
                        </div>
                        <?php echo yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam,Yii::$app->request->csrfToken);?>

                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
    <?php echo '<script'; ?>
 async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcG0CV3wZS1g2tLzebX2Q-Dbbp2doE1eI&callback=initMap">
    <?php echo '</script'; ?>
>


<?php }
}
}
