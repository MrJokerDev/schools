<?php $this->view('layout/header')?>
<?php $this->view('layout/navbar')?>

    <div class="container shadow rounded mx-auto p-4">
        <div class="row">
            <div class="col-auto offset-md-11">
                <a href="<?=ROOT?>/signup" type="submit" class="btn btn-success"><i class="bi bi-person-plus"></i></a>
            </div>
        </div>

        <div class="card-group justify-content-center">
            <?php if($users):?>
                <?php foreach($users as $user):?>
                    <div class="card m-2 shadow" style="max-width: 18rem; min-width: 18rem;">
                        <img src="<?=ASSETS?>/image/profile.png" class="card-img-top w-75 d-block mx-auto" alt="Card image">
                        <div class="card-body">
                            <h5 class="card-title"><?=$user->firstname ?> <?=$user->lastname ?></h5>
                            <p class="card-text">Rank: <?=str_replace("_", " ", $user->rank) ?></p>
                            <a href="<?=ROOT?>/profile/<?=$user->id?>" class="btn btn-primary">Profile</a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php else:?>
                <h1>Not users</h1>
            <?php endif; ?>
        </div>
    </div>
    
<?php $this->view('layout/footer')?>   

