{set title="Data Laporan Aduan Masyarakat"}
{$user = Yii::$app->session->get('user', false)}
<table id="user-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Pembangunan</th>
        <th>Tanggal Aduan</th>
        <th>Pelapor</th>
        <th>Status</th>
        <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    {$nomor = 1}
    {foreach $data as $item}
        <tr>
            <td>{$nomor++}</td>
            <td>{$item->pembangunan->nama_pembangunan}</td>
            <td>{$item->pembangunan->tgl_mulai}</td>
            <td>{$item->user->username}</td>
            <td>
                {if $item->status == 'laporanbaru'}
                    <span class="label label-info">{$item->status}</span>
                {/if}
                {if $item->status == 'dipending'}
                    <span class="label label-warning">{$item->status}</span>
                {/if}
                {if $item->status == 'ditolak'}
                    <span class="label label-danger>{$item->status}</span>
                {/if}

                {if $item->status == 'diverifikasi'}
                    <span class="label label-success">{$item->status}</span>
                {/if}
            </td>
            <td class="center nowrap">
                {if $item->status !='diverifikasi'}
                    <a onclick="verifikasiData({$item->id})" class="btn btn-info btn-xs glyphicon glyphicon-pencil"
                       title="VerifikasiData"></a>
                    <a onclick="tolakData({$item->id})" class="btn btn-danger btn-xs glyphicon glyphicon-remove"
                       title="VerifikasiData"></a>
                {/if}

            </td>
        </tr>
    {/foreach}
    </tbody>
</table>
<script>
    function reloadData() {
        ajaxTransfer('operator/lapor-aduan', { }, '#main-content');
    }

    function verifikasiData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan verifikasi data?', function () {
            ajaxTransfer('operator/lapor-aduan/verifikasi', { id: id }, '#modal-output');
        });
    }
    function tolakData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan verifikasi data?', function () {
            ajaxTransfer('operator/lapor-aduan/tolak', { id: id }, '#modal-output');
        });
    }
    dataTables('#user-table');
</script>