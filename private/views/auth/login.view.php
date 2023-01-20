<?php $this->view('layout/header')?>

<div class="container pt-5">
    <?php if(count($errors) > 0):?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong class="text-center">Holy guacamole! <br></strong><?php foreach($errors as $value){ echo "* $value <br>";} ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;?>
    <div class="p-5 m-auto shadow rounded">
        <form method="post" class="m-5">
            <h1 class="text-center pb-5">Login</h1>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="<?= get_var('email') ?>" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password"  class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <a href="<?=ROOT?>/signup">Register</a>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div>

<?php $this->view('layout/footer')?>   

