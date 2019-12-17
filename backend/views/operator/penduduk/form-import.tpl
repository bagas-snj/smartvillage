{use class="yii\helpers\Html"}
{use class="yii\helpers\Url"}

<div id="result-entities-import"></div>
<form id="form-entities-import" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="file" class="col-sm-3 col-xs-12 control-label">File</label>
        <div class="col-sm-8 col-xs-12">
            {Html::fileInput('Uploader[file]', null, ['class' => 'form-control', 'required' => '']) }
            <small><a target="_blank" href="{Url::home(true)|cat:'download/penduduk-example.xlsx'}"><i class="glyphicon glyphicon-download-alt"></i> Download Template</a></small>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Upload">
        </div>
    </div>

    {Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken)}
</form>

<script>
    $("#form-entities-import").submit(function () {
        var data = getFormData("form-entities-import");
        ajaxTransfer("master/penduduk/upload-import", data, "#modal-output");
    })
</script>