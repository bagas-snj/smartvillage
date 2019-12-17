{use class="yii\helpers\Html"}
{use class="yii\helpers\Url"}
{set title="Data Laporan"}
{$user = Yii::$app->session->get('user', false)}
<!-- Custom Tabs -->
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Buat Laporan</a></li>
        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Data Laporan</a></li>
        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
    </ul>
    <div class="tab-content">

        <div class="tab-pane active" id="tab_1">
            {if $cek}
                <div class="btn btn-warning">Anda Telah Membuat Laporan Pada Hari Ini !!</div>
            {else}
                <h4><center>LAPORAN PROGRESS HARIAN</center></h4>
                <table class="table">
                    <tr>
                        <th>NAMA PEMBANGUNAN</th>
                        <th>:{$pembangunan->nama_pembangunan}</th>
                        <th>NAMA MITRA</th>
                        <th>:{$pembangunan->mitra->nama_mitra}</th>
                    </tr>
                    <tr>
                        <th>KATEGORI PEMBANGUNAN</th>
                        <th>:{$pembangunan->kategori->nama}</th>
                        <th>TANGGAL</th>
                        <th>:{date('Y-m-d')}</th>
                    </tr>
                    <tr>
                        <th>TANGGAL MULAI</th>
                        <th>:{$pembangunan->tgl_mulai}</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>TANGGAL SELESAI</th>
                        <th>:{$pembangunan->tgl_selesai}</th>
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
                            {Html::input("text", "capaian_progress",'', ["class" => "form-control", "required" => ""])}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-2 col-xs-12 control-label">Foto</label>
                        <div class="col-sm-8 col-xs-12">
                            {Html::fileInput('Uploader[file]', null, ['class' => 'form-control']) }
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-sm-8 col-xs-12">
                            <input class="btn btn-primary" type="submit" value="Simpan">
                        </div>
                    </div>
                    {Html::hiddenInput('pembangunan_id',$pembangunan->id)}
                    {Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken)}
                </form>

                <script>
                    $("#form-entities").submit(function () {
                        var data = getFormData("form-entities");
                        ajaxTransfer("mitra/lapor-progress/save", data, "#result-entities");
                    })

                </script>
            {/if}


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
                {$nomor = 1}
                {foreach $data as $item}
                    <tr>
                        <td>{$nomor++}</td>
                        <td>{$item->pembangunan->nama_pembangunan}</td>
                        <td>{$item->capaian_progress}</td>
                        <td>{$item->tanggal}</td>
                        <td class="center nowrap">
                            <a onclick="loadModal(this)" target="mitra/lapor-progress/form" data="id={$item->id}"
                               class="btn btn-primary btn-xs glyphicon glyphicon-pencil" title="Ubah Data"></a>
                            <a onclick="loadModal(this)" target="mitra/lapor-progress/form" data="id={$item->id}"
                               class="btn btn-success btn-xs glyphicon glyphicon-list-alt" title="Detail Data"></a>
                            <a onclick="loadModal(this)" target="mitra/laporan-progress/form-export"
                               class="btn btn-success btn-xs glyphicon glyphicon-cloud-download" title="Import Data"></a>
                            <a onclick="deleteData({$item->id})" class="btn btn-danger btn-xs glyphicon glyphicon-trash"
                               title="Hapus Data"></a>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
            <script>
                function reloadData() {
                    ajaxTransfer('operator/pembangunan', { }, '#main-content');
                }

                function deleteData(id) {
                    modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
                        ajaxTransfer('operator/pembangunan/delete', { id: id }, '#modal-output');
                    });
                }
                dataTables('#user-table');
            </script>
        </div>
    </div>
    <!-- /.tab-content -->
</div>
<!-- nav-tabs-custom -->