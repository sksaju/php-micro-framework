<?php
    /**
     * @var $this \sksaju\phpmvc\View
     */

    $this->title = 'Register';
?>

<div class="row justify-content-center">
    <div class="col-6">
        <h1 class="text-center">Create an Account</h1>
        <?php $form = \sksaju\phpmvc\form\Form::begin('', 'post'); ?>

            <div class="row">
                <div class="col">
                    <?php echo $form->field($model, 'firstName'); ?>
                </div>
                <div class="col">
                    <?php echo $form->field($model, 'lastName'); ?>
                </div>
            </div>

            <?php echo $form->field($model, 'email'); ?>
            <?php echo $form->field($model, 'password')->passwordField(); ?>
            <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>

            <button type="submit" class="btn btn-primary">Submit</button>

        <?php echo \sksaju\phpmvc\form\Form::end(); ?>
    </div>
</div>