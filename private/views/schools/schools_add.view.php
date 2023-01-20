<?php $this->view('layout/header')?>
<?php $this->view('layout/navbar')?>

    <div class="container shadow rounded mx-auto p-4">
        <?php $this->view('layout/breadcrumbs', ['crumbs' => $crumbs])?>
        <?php if(count($errors) > 0):?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong class="text-center">Holy guacamole! <br></strong><?php foreach($errors as $value){ echo "* $value <br>";} ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif;?>
        <div class="card-group justify-content-center">
            <form method="post">
                <h3>Add new preseason</h3>
                <input type="text" class="form-control" value="<?=get_var('school')?>" name="school" placeholder="New preseason">
                <button type="submit" class="btn btn-primary float-start mt-3">Create</button>
                <a href="<?=ROOT?>/schools" type="submit" class="btn btn-danger float-end mt-3">Cancel</a>
            </form>
        </div>
    </div>
<?php $this->view('layout/footer')?>   

