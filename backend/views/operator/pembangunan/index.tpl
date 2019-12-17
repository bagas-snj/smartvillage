{set title="Data Pembangunan"}
{$user = Yii::$app->session->get('user', false)}
<!-- Custom Tabs -->
    {*<div class="nav-tabs-custom">*}
        {*<ul class="nav nav-tabs">*}
            {*<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Data Pembangunan</a></li>*}
            {*<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Cari Pembangunan</a></li>*}
            {*<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Pemetaan</a></li>*}
            {*<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>*}
        {*</ul>*}
        {*<div class="tab-content">*}
            {*<div class="tab-pane active" id="tab_1">*}
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
                    {$nomor = 1}
                    {foreach $data as $item}
                        <tr>
                            <td>{$nomor++}</td>
                            <td>{$item->nama_pembangunan}</td>
                            <td>{$item->tgl_mulai}</td>
                            <td>{$item->tgl_selesai}</td>
                            <td>{$item->mitra->nama_mitra}</td>

                            <td class="center nowrap">
                                <a onclick="loadModal(this)" target="operator/pembangunan/form" data="id={$item->id}"
                                   class="btn btn-primary btn-xs glyphicon glyphicon-pencil" title="Ubah Data"></a>
                                <a onclick="loadModal(this)" target="operator/pembangunan/detail" data="id={$item->id}"
                                   class="btn btn-success btn-xs glyphicon glyphicon-list-alt" title="Detail User"></a>
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
            {*</div>*}
            {*<!-- /.tab-pane -->*}
            {*<div class="tab-pane" id="tab_2">*}
                {*The European languages are members of the same family. Their separate existence is a myth.*}
                {*For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ*}
                {*in their grammar, their pronunciation and their most common words. Everyone realizes why a*}
                {*new common language would be desirable: one could refuse to pay expensive translators. To*}
                {*achieve this, it would be necessary to have uniform grammar, pronunciation and more common*}
                {*words. If several languages coalesce, the grammar of the resulting language is more simple*}
                {*and regular than that of the individual languages.*}
            {*</div>*}
            {*<!-- /.tab-pane -->*}
            {*<div class="tab-pane" id="tab_3">*}
                {*Lorem Ipsum is simply dummy text of the printing and typesetting industry.*}
                {*Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,*}
                {*when an unknown printer took a galley of type and scrambled it to make a type specimen book.*}
                {*It has survived not only five centuries, but also the leap into electronic typesetting,*}
                {*remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset*}
                {*sheets containing Lorem Ipsum passages, and more recently with desktop publishing software*}
                {*like Aldus PageMaker including versions of Lorem Ipsum.*}
            {*</div>*}
            {*<!-- /.tab-pane -->*}
        {*</div>*}
        {*<!-- /.tab-content -->*}
    {*</div>*}
    {*<!-- nav-tabs-custom -->*}