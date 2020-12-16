<?php
/**
 * @var $exception \Exception
 */
?>

<div class="row justify-content-center">
    <div class="col-8">
        <h3 class="text-center"><?php echo $exception->getCode(); ?> - <?php echo $exception->getMessage(); ?></h3>
    </div>
</div>