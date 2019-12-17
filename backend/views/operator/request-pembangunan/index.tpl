{set title="Data Request Pembangunan"}
{$user = Yii::$app->session->get('user', false)}
<table id="user-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Tanggal Request</th>
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
            <td>{$item->judul}</td>
            <td>{$item->deskripsi}</td>
            <td>{$item->created_at}</td>
            <td>{$item->user->username}</td>
            <td>
                {if $item->status == 'requestbaru'}
                    <span class="label label-info">{$item->status}</span>
                {/if}
                {if $item->status == 'terverifikasi'}
                    <span class="label label-warning">{$item->status}</span>
                {/if}
                {if $item->status == 'ditindaklanjuti'}
                    <span class="label label-success">{$item->status}</span>
                {/if}
            </td>

            <td class="center nowrap">
                {if $item->status !='terverifikasi'}
                    <a onclick="verifikasiData({$item->id})" class="btn btn-info btn-xs glyphicon glyphicon-pencil"
                       title="VerifikasiData"></a>
                    <a onclick="tindakData({$item->id})" class="btn btn-success btn-xs glyphicon glyphicon-ok-circle"
                       title="tindakData"></a>
                {/if}
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>
<script>
    function reloadData() {
        ajaxTransfer('operator/request-pembangunan', { }, '#main-content');
    }
    function verifikasiData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan memverifikasi data?', function () {
            ajaxTransfer('operator/request-pembangunan/verifikasi', { id: id }, '#modal-output');
        });
    }

    function tindakData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan memverifikasi data?', function () {
            ajaxTransfer('operator/request-pembangunan/tindak', { id: id }, '#modal-output');
        });
    }
    dataTables('#user-table');
</script>