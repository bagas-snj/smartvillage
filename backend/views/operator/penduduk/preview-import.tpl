<div class='alert alert-warning'>Menampilkan 10 data pertama dari data yang akan di import</div>

<table id="preview-import" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Barang Awal</th>
        <th>Harga Pokok</th>
        <th>Harga Jual</th>
        <th>Wajib Setor</th>
    </tr>
    </thead>
    <tbody>
    {$nomor = 1}
    {foreach $data as $item}
        <tr>
            <td class="center">{$nomor++}</td>
            <td>{$item['kode_barang']}</td>
            <td>{$item['nama_barang']}</td>
            <td>{$item['barang_awal']}</td>
            <td>{$item['harga_pokok']}</td>
            <td>{$item['harga_jual']}</td>
            <td>{$item['wajib_setor']}</td>
        </tr>
        {if $nomor>10}
            {break}
        {/if}
    {/foreach}
    </tbody>
</table>

<a onclick='importData()' class='btn btn-primary'>Import Data</a>
<script>
    function importData(){
        var data = {
            key: '{$key}'
        };
        ajaxTransfer('master/penduduk/save-import', data, '#modal-output');
    }
</script>