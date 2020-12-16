<?php
/**
 * @var $this \app\core\View
 */

use app\core\form\TextareaField;

$this->title = 'Contact';
?>

<div class="row justify-content-center">
    <div class="col-6">
        <h1 class="text-center">Contact</h1>
        <?php $form = \app\core\form\Form::begin('', 'post'); ?>
            <?php echo $form->field($model, 'subject'); ?>
            <?php echo $form->field($model, 'email'); ?>
            <?php echo new TextareaField($model, 'message'); ?>

            <button type="submit" class="btn btn-primary">Submit</button>

        <?php echo \app\core\form\Form::end(); ?>
    </div>
</div>