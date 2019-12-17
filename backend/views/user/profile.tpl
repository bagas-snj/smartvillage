{set title="Profile User"}
{use class="yii\helpers\Html"}
{use class="yii\widgets\ActiveForm"}
{use class="yii\helpers\Url"}

{if !isset($user)}
    {$user = Yii::$app->session->get('user', false)}
{/if}

        <table class="table table-striped">

            <tr>
                <td width="250px" rowspan="6">
                    <center><img width="200px" src="{(!$user)?"":$user->displayPhoto}" class="img-rounded" alt="User Image"></center>
                </td>
                <td width="20%">Nama</td>
                <td width="5%">:</td>
                <td>{$user->name}</td>
            </tr>
            <tr>
                <td width="20%">Role</td>
                <td width="5%">:</td>
                <td>{$user->role->name}</td>
            </tr>
            <tr>
                <td width="20%">Username</td>
                <td width="5%">:</td>
                <td>{$user->username}</td>
            </tr>
            <tr>
                <td width="20%">Email</td>
                <td width="5%">:</td>
                <td>{$user->email}</td>
            </tr>
            <tr>
                <td width="20%">Dibuat Pada</td>
                <td width="5%">:</td>
                <td>{$user->created_at}</td>
            </tr>
            <tr>
                <td width="20%">Terakhir Login</td>
                <td width="5%">:</td>
                <td>{$user->last_login}</td>
            </tr>
            <tr>
                <td colspan="4">
                <center style="margin-top:30px;">
                    <a onclick="loadModal(this)" target="user/form" data="id={$user->id}"
                       class="btn btn-primary btn-xs glyphicon glyphicon-pencil" style="word-spacing: -10px;font-size: 15px;padding: 5px 15px; margin: 0px 10px;" title="Ubah Data"> Edit Data</a>
                    {if $detail}

                        {$userNow = Yii::$app->session->get('user', false)}
                        {if $user->username != $userNow->username}
                            <a onclick="deleteData({$user->id})" class="btn btn-danger btn-xs glyphicon glyphicon-trash" style="word-spacing: -10px;font-size: 15px; padding: 5px 15px; margin: 0px 10px;" title="Hapus Data"> Hapus Data</a>

                            <a onclick="loadModal(this)" target="user/login" data="id={$user->id}"
                                class="btn btn-primary btn-xs glyphicon glyphicon-log-in" style="word-spacing: -10px;font-size: 15px; padding: 5px 15px; margin: 0px 10px;" title="Ubah Data"> Login</a>
                        {/if}
                    {/if}
                </center>
                </td>
        </table>

<script>
    function reloadData() {
        ajaxTransfer('user/profile', {}, '#main-content');
    }
</script>