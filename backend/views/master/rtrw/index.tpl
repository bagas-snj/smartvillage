{set title="Data Master RT/RW"}

<a onclick="loadModal(this)" target="master/rtrw/form" class="btn btn-primary" title="Tambah Data"><i
            class="glyphicon glyphicon-plus"></i> Tambah Data</a>
<a onclick="loadModal(this)" target="master/rtrw/form-import" class="btn btn-success" title="Import Data"><i
            class="glyphicon glyphicon-upload"></i> Import Data</a>

<table id="indicator-category-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Induk</th>
        <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    {$nomor = 1}
    {foreach $data as $item}
        <tr>
            <td class="center">{$nomor++}</td>
            <td>{$item->rw_parent}</td>
            <td class="center">{(is_null($item->rt_child))?'-':$item->parent->rw_parent}</td>
            <!--<td class="center">{$item->rt_child}</td>-->
            <td class="center nowrap">
                <a onclick="loadModal(this)" target="master/rtrw/form" data="id={$item->id}"
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
        ajaxTransfer('master/rtrw', { }, '#main-content');
    }

    function deleteData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
            ajaxTransfer('master/rtrw/delete', { id: id }, '#modal-output');
        });
    }

    dataTables('#indicator-category-table');
</script>