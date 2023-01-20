<?php $this->view('layout/header')?>
<?php $this->view('layout/navbar')?>

    <div class="container shadow rounded mx-auto p-4">
        <?php $this->view('layout/breadcrumbs', ['crumbs' => $crumbs])?>
        <div class="card-group justify-content-center">
            <h1>Students</h1> 
        </div>
    </div>
    
<?php $this->view('layout/footer')?>   

