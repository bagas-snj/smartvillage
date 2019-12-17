{set title="Manajemen User"}
{$user = Yii::$app->session->get('user', false)}

{if $isAdmin}
<a onclick="loadModal(this)" target="user/form" class="btn btn-primary" title="Tambah Data"><i
            class="glyphicon glyphicon-plus"></i> Tambah Data</a>
{/if}

<table id="user-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Peran</th>
        <th>Email</th>
        <th>Terakhir Login</th>
        {if $user->roleAs('admin')}
            <th>Opsi</th>
        {/if}
    </tr>
    </thead>
    <tbody>
    {$nomor = 1}
    {foreach $data as $item}
        <tr>
            <td class="center">{$nomor++}</td>
            <td>{$item->name}</td>
            <td class="center">{$item->role->name}</td>
            <td class="center">{$item->email}</td>
            <td class="center">{$item->last_login}</td>
            {if $user->roleAs('admin')}
                <td class="center nowrap">
                    <a onclick="loadModal(this)" target="user/form" data="id={$item->id}"
                       class="btn btn-primary btn-xs glyphicon glyphicon-pencil" title="Ubah Data"></a>

                    <a onclick="loadModal(this)" target="user/detail" data="id={$item->id}"
                       class="btn btn-primary btn-xs glyphicon glyphicon-list-alt" title="Detail User"></a>

                    {$userNow = Yii::$app->session->get('user', false)}
                    {if $item->username != $userNow->username}
                        <a onclick="deleteData({$item->id})" class="btn btn-danger btn-xs glyphicon glyphicon-trash"
                           title="Hapus Data"></a>
                    {/if}
                </td>
            {/if}
        </tr>
    {/foreach}
    </tbody>
</table>

<script>
    function reloadData() {
        ajaxTransfer('user/', { }, '#main-content');
    }

    function deleteData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
            ajaxTransfer('user/delete', { id: id }, '#modal-output');
        });
    }

    dataTables('#user-table');
</script>