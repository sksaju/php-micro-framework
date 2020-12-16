<?php
    /**
     * @var $this \app\core\View
     */

    $this->title = 'Contact';
?>

<div class="row justify-content-center">
    <div class="col-6">
        <h1 class="text-center">Contact</h1>
        <form action="" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Massage</label>
                <textarea name="massage" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>