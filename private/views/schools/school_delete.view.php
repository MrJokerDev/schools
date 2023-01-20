<?php $this->view('layout/header')?>
<?php $this->view('layout/navbar')?>

    <div class="container shadow rounded mx-auto p-4">
        <?php $this->view('layout/breadcrumbs', ['crumbs' => $crumbs])?>


        <div class="card-group justify-content-center">
            <form method="post">
                <h3>Are you sure want to delete?</h3>
                <input disabled autofocus type="text" class="form-control" value="<?=$row[0]->school?>" name="school">
                <input type="hidden" name="id">
                <button type="submit" value="" class="btn btn-danger float-start mt-3">Delete</button>
                <a href="<?=ROOT?>/schools" type="submit" class="btn btn-success float-end mt-3">Cancel</a>
            </form>
        </div>

    </div>
<?php $this->view('layout/footer')?>   

