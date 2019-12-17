<?php
/* Smarty version 3.1.31, created on 2017-10-21 23:20:19
  from "D:\xampp\htdocs\smartvillage\backend\views\layouts\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59eb73c3e28541_33981223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '074438fa54ba90762f133dcef9d9f856136ec6e3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartvillage\\backend\\views\\layouts\\content.tpl',
      1 => 1508470423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59eb73c3e28541_33981223 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

<?php echo '?>';?>
<div class="content-wrapper">
    <section class="content-header">
        <?php echo '<?php ';?>if (isset($this->blocks['content-header'])) { <?php echo '?>';?>
            <h1><?php echo '<?=';?> $this->blocks['content-header'] <?php echo '?>';?></h1>
        <?php echo '<?php ';?>} else { <?php echo '?>';?>
            <h1>
                <?php echo '<?php
                ';?>if ($this->title !== null) {
                    echo \yii\helpers\Html::encode($this->title);
                } else {
                    echo \yii\helpers\Inflector::camel2words(
                        \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                } <?php echo '?>';?>
            </h1>
        <?php echo '<?php ';?>} <?php echo '?>';?>

        <?php echo '<?=';?>
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) <?php echo '?>';?>
    </section>

    <section class="content">
        <?php echo '<?=';?> Alert::widget() <?php echo '?>';?>
        <?php echo '<?=';?> $content <?php echo '?>';?>
    </section>
</div>


<?php }
}
