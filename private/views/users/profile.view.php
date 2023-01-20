<?php $this->view('layout/header')?>
<?php $this->view('layout/navbar')?>
    <div class="container shadow rounded mx-auto p-4">
        <?php $this->view('layout/breadcrumbs')?>

        <h1 class="text-center mb-4">Profile</h1>
        <?php var_dump($row) ?>
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <img src="<?=ASSETS?>/image/profile.png" class="w-75 d-block mx-auto" alt="">
            </div>
            <div class="col-md-9 col-sm-8 bg-light p-3">
                <table class="table table-hover table-striped table-bordered m-auto">
                    <tr>
                        <th>First Name: </th>
                        <td><?= Auth::getFirstname() ?></td>
                    </tr>
                    <tr>
                        <th>Last Name: </th>
                        <td><?= Auth::getLastname() ?></td>
                    </tr>
                    <tr>
                        <th>Gender: </th>
                        <td><?= Auth::getGender() ?></td>
                    </tr>
                    <tr>
                        <th>Data: </th>
                        <td><?= Auth::getDate() ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tests</a>
                </li>
            </ul>

            <nav class="navbar bg-light">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </nav>
        </div>
    </div>
<?php $this->view('layout/footer')?>   

