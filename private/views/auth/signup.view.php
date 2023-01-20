<?php $this->view('layout/header')?>
<div class="container pt-5">
    <?php if(count($errors) > 0):?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong class="text-center">Holy guacamole! <br></strong><?php foreach($errors as $value){ echo "* $value <br>";} ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;?>
    <div class="p-5 m-auto shadow rounded">
        <form method="POST">
            <h1 class="text-center pb-5">Registration</h1>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">First name</label>
                <div class="col-sm-10">
                <input type="text" value="<?= get_var('firstname') ?>" name="firstname" class="form-control" id="inputEmail3">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Last name</label>
                <div class="col-sm-10">
                <input type="text" value="<?= get_var('lastname') ?>" name="lastname" class="form-control" id="inputEmail3">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" value="<?= get_var('email') ?>" name="email" class="form-control" id="inputEmail3">
                </div>
            </div>

            <div class="row mb-3">
                <label for="disabledSelect" class="col-sm-2 col-form-label">Gander</label>
                <div class="col-sm-10">
                    <select class="form-select" name="gender" aria-label="Default select example">
                        <option <?=get_select('gender', '')?> value="">Select a Gender</option>
                        <option <?=get_select('gender', 'male')?> value="male">Male</option>
                        <option <?=get_select('gender', 'female')?> value="female">Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="disabledSelect" class="col-sm-2 col-form-label">Rank</label>
                <div class="col-sm-10">
                    <select class="form-select" name="rank" aria-label="Default select example">
                        <option <?=get_select('rank', '')?> value="" readonly="">Select a Rank</option>
                        <option <?=get_select('rank', 'student')?> value="student" readonly="studetn">Student</option>
                        <option <?=get_select('rank', 'mentor')?> value="mentor" readonly="mentor">Mentor</option>
                        <option <?=get_select('rank', 'manager')?> value="manager" readonly="manager">Manager</option>
                        <option <?=get_select('rank', 'admin')?> value="admin" readonly="admin">Admin</option>
                        <?php if(Auth::getRank() == 'superadmin'):?>
                            <option <?=get_select('rank', 'superadmin')?> value="superadmin" readonly="superadmin">Super Admin</option>
                        <?php endif;?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword3">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Retype Password</label>
                <div class="col-sm-10">
                <input type="password" name="password1" class="form-control" id="inputPassword3">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
            <button type="submit" class="btn btn-danger float-end">Cancel</button>
        </form>
    </div>
</div>
<?php $this->view('layout/footer')?>   

