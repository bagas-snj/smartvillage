{set title="Manajemen User"}

<a onclick="loadModal(this)" target="master/login/form" class="btn btn-primary" title="Tambah Data"><i
            class="glyphicon glyphicon-plus"></i> Tambah Data</a>
<!--
<table id="user-table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Photo</th>
        <th>Terakhir Login</th>
        <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    {*$nomor = 1*}
    {*foreach $data as $item*}
        <tr>
            <td class="center">{*$nomor++*}</td>
            <td>{*$item->name*}</td>
            <td>{*$item->email*}</td>
            <td>{*$item->photo*}</td>
            <td>{*$item->last_login*}</td>
            <td class="center">
                <a onclick="loadModal(this)" target="master/user/form" data="id={*$item->id*}"
                   class="btn btn-primary btn-xs glyphicon glyphicon-pencil" title="Ubah Data"></a>
                <a onclick="deleteData({*$item->id*})" class="btn btn-danger btn-xs glyphicon glyphicon-trash"
                   title="Hapus Data"></a>
            </td>
        </tr>
    {*/foreach*}
    </tbody>
</table>
!-->

{use class="yii\helpers\Html"}
{use class="yii\widgets\ActiveForm"}
{use class="yii\helpers\Url"}

<div id="result-user"></div>
<form id="form-user" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">

    <div class="form-group">
        <label for="username" class="col-sm-3 col-xs-12 control-label">Username</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "username", '', ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("password", "password", '', ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </div>
    {*Html::hiddenInput('id', $data->id)*}
    {Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken)}
</form>

<script>
    $("#form-user").submit(function () {
        var data = getFormData("form-user");
        ajaxTransfer("master/login/save", data, "#result-user");
    })
    function reloadData() {
        ajaxTransfer('', { }, 'body');
    }

    function deleteData(id) {
        modalConfirm('Konfirmasi', 'Apakah anda yakin akan menghapus data?', function () {
            ajaxTransfer('master/user/delete', { id: id }, '#modal-output');
        });
    }

    dataTables('#user-table');
</script>