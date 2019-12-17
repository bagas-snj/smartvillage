{use class="yii\helpers\Url"}
{use class="yii\helpers\Html"}
{set title="Laporan Progress"}
{$user = Yii::$app->session->get('user', false)}

{foreach $data as $item}
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h4>Rp {number_format($item->anggaran,2)}</h4>

                <p>{$item->nama_pembangunan}</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="{Url::toRoute('mitra/lapor-progress/view', true)}?id={$item->id}" class="small-box-footer">Detail Lapor<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

{/foreach}
