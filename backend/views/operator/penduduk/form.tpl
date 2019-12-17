{use class="yii\helpers\Html"}
{use class="yii\helpers\Url"}
<div id="result-entities"></div>
<form id="form-entities" onsubmit="return false;" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">NIK</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "nik", $data->nik, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama Lengkap</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "nama_lengkap", $data->nama_lengkap, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Tempat Lahir</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "tempat_lahir", $data->tempat_lahir, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Tanggal Lahir</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "tanggal_lahir", $data->tanggal_lahir, ["class" => "form-control datetime", "required" => ""])}
        </div>
    </div>
    {if $data->id==0}

    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Jenis Kelamin</label>
        <div class="col-sm-8 col-xs-12">
                <label>
                    <input type="radio" name="jenis_kelamin" value="L"> Pria
                </label>

                <label>
                    <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                </label>
        </div>
    </div>
    {else}
        {if $data->jenis_kelamin=='L'}
            <div class="form-group">
                <label for="name" class="col-sm-3 col-xs-12 control-label">Jenis Kelamin</label>
                <div class="col-sm-8 col-xs-12">
                    <label>
                        <input type="radio" name="jenis_kelamin" value="L" checked> Pria
                    </label>

                    <label>
                        <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                    </label>
                </div>
            </div>
            {else}
            <div class="form-group">
                <label for="name" class="col-sm-3 col-xs-12 control-label">Jenis Kelamin</label>
                <div class="col-sm-8 col-xs-12">
                    <label>
                        <input type="radio" name="jenis_kelamin" value="L"> Pria
                    </label>

                    <label>
                        <input type="radio" name="jenis_kelamin" value="P" checked> Perempuan
                    </label>
                </div>
            </div>
        {/if}
    {/if}

    {if $data->rt_rw_id>0}
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">RT/RW</label>
            <div class="col-sm-8 col-xs-12">
                {Html::dropDownList("rt_rw_id", $data->rt_rw_id, $rtOption, ["class" => "form-control"])}
            </div>
        </div>
    {else}
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">RT/RW</label>
            <div class="col-sm-8 col-xs-12">
                {Html::dropDownList("rt_rw_id", $data->rt_rw_id, $rtOption, ["class" => "form-control"])}
            </div>
        </div>
    {/if}
    {if $data->agama_id>0}
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Agama</label>
            <div class="col-sm-8 col-xs-12">
                {Html::dropDownList("agama_id", $data->agama_id, $agamaOption, ["class" => "form-control"])}
            </div>
        </div>
    {else}
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Agama</label>
            <div class="col-sm-8 col-xs-12">
                {Html::dropDownList("agama_id", $data->agama_id, $agamaOption, ["class" => "form-control"])}
            </div>
        </div>
    {/if}
    {if $data->pekerjaan_id>0}
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Pekerjaan</label>
            <div class="col-sm-8 col-xs-12">
                {Html::dropDownList("pekerjaan_id", $data->pekerjaan_id, $pekerjaanOption, ["class" => "form-control"])}
            </div>
        </div>
    {else}
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Pekerjaan</label>
            <div class="col-sm-8 col-xs-12">
                {Html::dropDownList("pekerjaan_id", $data->pekerjaan_id, $pekerjaanOption, ["class" => "form-control"])}
            </div>
        </div>
    {/if}
    {if $data->id==0}

        <div class="form-group">
            <label for="name" class="col-sm-3 col-xs-12 control-label">Status Perkawinan</label>
            <div class="col-sm-8 col-xs-12">
                <label>
                    <input type="radio" name="status_perkawinan" value="Sudah Menikah"> Menikah
                </label>

                <label>
                    <input type="radio" name="status perkawinan" value="Belum Menikah"> Belum
                </label>
            </div>
        </div>
    {else}
        {if $data->status_perkawinan=='Sudah Menikah'}
            <div class="form-group">
                <label for="name" class="col-sm-3 col-xs-12 control-label">Status Perkawinan</label>
                <div class="col-sm-8 col-xs-12">
                    <label>
                        <input type="radio" name="status_perkawinan" value="Sudah Menikah" checked> Menikah
                    </label>

                    <label>
                        <input type="radio" name="status perkawinan" value="Belum Menikah"> Belum
                    </label>
                </div>
            </div>
        {else}
            <div class="form-group">
                <label for="name" class="col-sm-3 col-xs-12 control-label">Status Perkawinan</label>
                <div class="col-sm-8 col-xs-12">
                    <label>
                        <input type="radio" name="status_perkawinan" value="Sudah Menikah"> Menikah
                    </label>

                    <label>
                        <input type="radio" name="status perkawinan" value="Belum Menikah" checked> Belum
                    </label>
                </div>
            </div>
        {/if}
    {/if}
    {if $data->pendidikan_id>0}
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Pendidikan</label>
            <div class="col-sm-8 col-xs-12">
                {Html::dropDownList("pendidikan_id", $data->pendidikan_id, $pendidikanOption, ["class" => "form-control"])}
            </div>
        </div>
    {else}
        <div class="form-group">
            <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Pendidikan</label>
            <div class="col-sm-8 col-xs-12">
                {Html::dropDownList("pendidikan_id", $data->pendidikan_id, $pendidikanOption, ["class" => "form-control"])}
            </div>
        </div>
    {/if}

    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </div>

    {Html::hiddenInput('id', $data->id)}
    {Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken)}
</form>

<script>
    $("#form-entities").submit(function () {
        var data = getFormData("form-entities");
        ajaxTransfer("operator/penduduk/save", data, "#result-entities");
    })

    $('select[name=rt_rw_id]').chosen();
    $('select[name=agama_id]').chosen();
    $('select[name=pekerjaan_id]').chosen();
    $('select[name=pendidikan_id]').chosen();
    $('.datetime').datetimepicker({
        format : 'Y-m-d',
    });
</script>