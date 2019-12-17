{use class="yii\helpers\Url"}
{set title="Laporan Per Mitra"}
<h3>Laporan : <br><br></h3>
{if !$asPdf}
    <a href="{Url::toRoute('/mitra/report/export-pdf?id='|cat:$data->id, true)}" class="btn btn-success"
       title="Export Data"><i class="glyphicon glyphicon-download-alt"></i> Download Data</a>
{/if}
<p align="center">
    <label>LAPORAN HARIAN</label>
</p>

<table class="table table-striped">

    <tr>
        <th>NAMA PEMBANGUNAN</th>
        <th>:{$pembangunan->nama_pembangunan}</th>
        <th>NAMA MITRA</th>
        <th>:{$pembangunan->mitra->nama_mitra}</th>
    </tr>
    <tr>
        <th>KATEGORI PEMBANGUNAN</th>
        <th>:{$pembangunan->kategori->nama}</th>
        <th>TANGGAL</th>
        <th>:{$data->tanggal}</th>
    </tr>
    <tr>
        <th>TANGGAL MULAI</th>
        <th>:{$pembangunan->tgl_mulai}</th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <th>TANGGAL SELESAI</th>
        <th>:{$pembangunan->tgl_selesai}</th>
        <th></th>
        <th></th>
    </tr>
</table>
<br>
<table class="table">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-sm-2 col-xs-12 control-label">Foto</label>
            <div class="col-sm-4 col-xs-12">
                <img src="{Url::home(true)}/uploads/lapor-progress/{$data->image}" width="300px">
            </div>
            <label for="name" class="col-sm-2 col-xs-12 control-label">Capaian Progress</label>
            <div class="col-sm-4 col-xs-12">
               <p>{$data->capaian_progress}</p>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-2 col-xs-12 control-label">Uraian Pekerjaan</label>
            <div class="col-sm-4 col-xs-12">
                <p align="justify">{$data->uraian_pekerjaan}</p>
            </div>
        </div>

    </form>

</table>
<hr>
<br><br>

<div style="float: left;text-align: center;" class="col-xs-4">
    <div class="row center">
        <label>Kepala Desa,</label>
        <br><br><br><br><br>
        <br><br>
        <p>
            Prof. Dr. Moh. Nasih, SE., MT., Ak., CMA.<br>
            NIP. 196508061992031002
        </p>
    </div>
</div>

<div style="float:right;text-align: center;" class="col-xs-4">
    <div class="row center">
        <label>Ponorogo, {$data->tanggal}</label><br>
        <br><br><br><br><br>
        <br><br
        <p>
            {$pembangunan->mitra->nama_mitra}
        </p>
    </div>
</div>