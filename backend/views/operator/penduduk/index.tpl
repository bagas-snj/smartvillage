{use class="yii\helpers\Html"}
{use class="yii\helpers\Url"}
{set title="Data Penduduk"}
{$user = Yii::$app->session->get('user', false)}
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
                {$nomor = 1}
                {foreach $data as $item}
                    <tr>
                        <td>{$nomor++}</td>
                        <td>{$item->nik}</td>
                        <td>{$item->nama_lengkap}</td>
                        <td>{$item->tempat_lahir},{$item->tanggal_lahir}</td>
                        <td class="center nowrap">
                            <a onclick="loadModal(this)" target="operator/penduduk/form" data="id={$item->id}"
                               class="btn btn-primary btn-xs glyphicon glyphicon-pencil" title="Ubah Data"></a>
                            <a onclick="deleteData({$item->id})" class="btn btn-danger btn-xs glyphicon glyphicon-trash"
                               title="Hapus Data"></a>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
            <script>
                function reloadData() {
                    ajaxTransfer('operator/penduduk', { }, '#main-content');
                }

                function deleteData(id) {
                    modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
                        ajaxTransfer('operator/penduduk/delete', { id: id }, '#modal-output');
                    });
                }
                dataTables('#user-table');
            </script>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
           <form class="form-horizontal">
               <div class="form-group">
                   <label for="name" class="col-sm-2 col-xs-12 control-label">Berdasarkan NIK</label>
                   <div class="col-sm-3 col-xs-12">
                       {Html::input("text", "nik", $data->nik, ["class" => "form-control", "required" => ""])}
                   </div>
                   <label for="name" class="col-sm-3 col-xs-12 control-label">Berdasarkan RT/RW</label>
                   <div class="col-sm-4 col-xs-12">
                       {Html::input("text", "nik", $data->nik, ["class" => "form-control", "required" => ""])}
                   </div>
               </div>
               <div class="form-group">
                   <label for="name" class="col-sm-2 col-xs-12 control-label">Berdasarkan Pendidikan</label>
                   <div class="col-sm-3 col-xs-12">
                       {Html::input("text", "nik", $data->nik, ["class" => "form-control", "required" => ""])}
                   </div>
                   <label for="name" class="col-sm-3 col-xs-12 control-label">Berdasarkan Pekerjaan</label>
                   <div class="col-sm-3 col-xs-12">
                       {Html::input("text", "nik", $data->nik, ["class" => "form-control", "required" => ""])}
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
            <script>
                $('select[name=nik]').chosen();
            </script>
        </div>
    </div>
    <!-- /.tab-content -->
</div>
<!-- nav-tabs-custom -->
