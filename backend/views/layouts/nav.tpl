{use class="yii\helpers\Url"}
{$user = Yii::$app->session->get('user', false)}
{if !empty($user)}
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
            <a href="{Url::home(true)}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
         {if $user->roleAs('admin')}

        <li class="treeview">
            <a href="#">
                <i class="fa fa-book"></i>
                <span>Master Desa</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{Url::toRoute('master/rtrw', true)}">
                        <i class="fa fa-circle-o text-red"></i> RT/RW
                    </a>
                </li>
                <li>
                    <a href="{Url::toRoute('master/dusun', true)}">
                        <i class="fa fa-circle-o text-red"></i> Dusun
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cubes"></i>
                <span>Master Penduduk</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{Url::toRoute('master/agama', true)}">
                        <i class="fa fa-circle-o text-red"></i> Agama
                    </a>
                </li>
                <li>
                    <a href="{Url::toRoute('master/pendidikan', true)}">
                        <i class="fa fa-circle-o text-red"></i> Pendidikan
                    </a>
                </li>
                <li>
                    <a href="{Url::toRoute('master/pekerjaan', true)}">
                        <i class="fa fa-circle-o text-red"></i> Pekerjaan
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-database"></i>
                <span>Master Pembangunan</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{Url::toRoute('master/status-pembangunan', true)}">
                        <i class="fa fa-circle-o text-red"></i> Status Pembangunan
                    </a>
                </li>
                <li>
                    <a href="{Url::toRoute('master/status', true)}">
                        <i class="fa fa-circle-o text-red"></i>  Status
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users"></i>
                <span>Master User</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{Url::toRoute('user/', true)}">
                        <i class="fa fa-circle-o text-red"></i>Pengguna
                    </a>
                </li>
                <li>
                    <a href="{Url::toRoute('master/role', true)}">
                        <i class="fa fa-circle-o text-red"></i> Role Pengguna
                    </a>
                </li>
            </ul>
        </li>
         {/if}
        {if $user->roleAs('operator')}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-database"></i>
                    <span>Data Pembangunan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{Url::toRoute('operator/pembangunan', true)}">
                            <i class="fa fa-circle-o text-red"></i> Pembangunan
                        </a>
                    </li>
                    <li>
                        <a href="{Url::toRoute('operator/kategori-pembangunan', true)}">
                            <i class="fa fa-circle-o text-red"></i> Kategori Pembangunan
                        </a>
                    </li>
                    <li>
                        <a href="{Url::toRoute('operator/sumber-dana-pembangunan', true)}">
                            <i class="fa fa-circle-o text-red"></i>  Sumber Dana
                        </a>
                    </li>
                    <li>
                        <a href="{Url::toRoute('operator/mitra', true)}">
                            <i class="fa fa-circle-o text-red"></i>  Mitra
                        </a>
                    </li>
                </ul>
            <li>

            <li>
                <a href="{Url::toRoute('operator/penduduk', true)}">
                    <i class="fa fa-user-plus"></i> <span>Data Penduduk</span>
                </a>
            </li>
            <li>
                <a href="{Url::toRoute('operator/request-pembangunan', true)}">
                    <i class="fa fa-bookmark"></i> <span>Request Pembangunan</span>
                </a>
            </li>
            <li>
                <a href="{Url::toRoute('operator/pengumuman', true)}">
                    <i class="fa fa-bullhorn"></i> <span>Pengumuman</span>
                </a>
            </li>
            <li>
                <a href="{Url::toRoute('operator/lapor-aduan', true)}">
                    <i class="fa fa-retweet"></i> <span>Lapor Aduan</span>
                </a>
            </li>
            <li>
                <a href="{Url::toRoute('operator/report', true)}">
                    <i class="fa fa-bug"></i> <span>Report</span>
                </a>
            </li>
        {/if}
        {if $user->roleAs('mitra')}
            <li>
                <a href="{Url::toRoute('mitra/lapor-progress', true)}">
                    <i class="fa fa-retweet"></i> <span>Lapor Progress</span>
                </a>
            </li>
            <li>
                <a href="{Url::toRoute('mitra/report', true)}">
                    <i class="fa fa-bug"></i> <span>Report</span>
                </a>
            </li>

        {/if}
        <li>
            <a href="{Url::toRoute('site/logout', true)}">
                <i class="fa fa-lock"></i> <span>Keluar</span>
            </a>
        </li>
    </ul>
{/if}

