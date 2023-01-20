<?php $this->view('layout/header')?>
<?php $this->view('layout/navbar')?>

    <div class="container shadow rounded mx-auto p-4">
        <div class="row mb-5">
            <div class="col-md-6">
                <?php $this->view('layout/breadcrumbs', ['crumbs' => $crumbs])?>
            </div>
            <div class="col-md-6">
                <a href="<?=ROOT?>/schools/add" type="submit" class="btn btn-success float-end">Add preseason</a>
            </div>
        </div>
        
        <div class="card-group justify-content-center">
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Preseason</th>
                        <th scope="col">Create by</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($schools) :?>
                    <?php foreach($schools as $school):?>
                        <tr>
                            <th scope="row"><?= $school->id ?></th>
                            <td><?= $school->school ?></td>
                            <td><?= $school->user->rank ?></td>
                            <td><?= get_date($school->date) ?></td>
                            <td>
                                <a href="<?=ROOT?>/switch_school/<?= $school->id ?>" class="btn btn-success">Switch to</a>
                                <a href="<?=ROOT?>/schools/edit/<?= $school->id ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?=ROOT?>/schools/delete/<?= $school->id ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    <?php else:?>
                        <tr>
                            <td colspan="5" class="text-center">No schools were found at this time</td>
                        </tr>
                    <?php endif ;?>
                </tbody>
            </table>
            
        </div>
    </div>
    
<?php $this->view('layout/footer')?>   

