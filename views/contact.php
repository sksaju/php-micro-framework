<?php
/**
 * @var $this \sksaju\phpmvc\View
 */

use sksaju\phpmvc\form\TextareaField;

$this->title = 'Contact';
?>

<div class="row justify-content-center">
    <div class="col-6">
        <h1 class="text-center">Contact</h1>
        <?php $form = \sksaju\phpmvc\form\Form::begin('', 'post'); ?>
            <?php echo $form->field($model, 'subject'); ?>
            <?php echo $form->field($model, 'email'); ?>
            <?php echo new TextareaField($model, 'message'); ?>

            <button type="submit" class="btn btn-primary">Submit</button>

        <?php echo \sksaju\phpmvc\form\Form::end(); ?>
    </div>
</div>