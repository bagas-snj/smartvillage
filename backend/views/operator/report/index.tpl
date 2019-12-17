{use class="yii\helpers\Html"}
{use class="yii\helpers\Url"}
{set title="Report Mitra"}

<form id="form-targets" onsubmit="return false;" class="form-horizontal">
    <table class="table table-striped">
        <tr>
            <td width="12%">Pilih Tanggal</td>
            <td width="3%">:</td>
            <td> {Html::input("text", "tanggal","",["class" => "form-control", "required"=>""])}</td>
        </tr>

        <tr>
            <td>Pilih Mitra</td>
            <td>:</td>
            <td>{Html::dropDownList("mitra_id","", $mitraOption, ["class" => "form-control", "required"=>""])}</td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input class="btn btn-primary" type="submit" value="Buka Laporan"></td>
        </tr>
    </table>
    {Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken)}
</form>
<hr>
<div id="result-targets"></div>
<script>
    $("#form-targets").submit(function () {
        var data = getFormData("form-targets");
        ajaxTransfer("operator/report/report-mitra", data, "#result-targets");
    });
    $('select[name=mitra_id]').chosen();
    $('input[name=tanggal]').datepicker({
        format: 'yyyy-mm-dd'
    })
</script>

