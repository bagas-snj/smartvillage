{use class="yii\helpers\Html"}
{use class="yii\helpers\Url"}

<div id="result-entities"></div>
<form id="form-entities" onsubmit="return false;" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-3 col-xs-12 control-label">Nama</label>
        <div class="col-sm-8 col-xs-12">
            {Html::input("text", "rw_parent", $data->rw_parent, ["class" => "form-control", "required" => ""])}
        </div>
    </div>
    {if $data->rt_child>0}
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Induk</label>
        <div class="col-sm-8 col-xs-12">
            {Html::dropDownList("rt_child", $data->rt_child, $parentOption, ["class" => "form-control"])}
        </div>
    </div>
    {else}
    <div class="form-group">
        <label for="parent_id" class="col-sm-3 col-xs-12 control-label">Induk</label>
        <div class="col-sm-8 col-xs-12">
            {Html::dropDownList("rt_child", $data->rt_child, $parentOption, ["class" => "form-control"])}
        </div>
    </div>
    {/if}
    <div class="form-group">
        <label for="entity_type" class="col-sm-3 col-xs-12 control-label">Dusun</label>
        <div class="col-sm-8 col-xs-12">
            {Html::dropDownList("dusun_id", $data->dusun_id, $dusunOption, ["class" => "form-control"])}
        </div>
    </div>
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
        ajaxTransfer("master/rtrw/save", data, "#result-entities");
    })

    $('select[name=rt_child]').chosen();
    $('select[name=dusun_id]').chosen();
</script>