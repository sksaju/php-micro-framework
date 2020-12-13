<div class="row justify-content-center">
    <div class="col-6">
        <h1 class="text-center">Login</h1>
        <?php $form = \app\core\form\Form::begin('', 'post'); ?>

            <?php echo $form->field($model, 'email'); ?>
            <?php echo $form->field($model, 'password')->passwordField(); ?>

            <button type="submit" class="btn btn-primary">Submit</button>

        <?php echo \app\core\form\Form::end(); ?>
    </div>
</div>