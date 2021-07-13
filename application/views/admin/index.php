<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title"><?php echo $judul;?></h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="alert alert-info" role="alert">
            Selamat datang di Dashboard <?= $user['name'];?> !
        </div>
        
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                        <h4><a href="<?= base_url('admin/category');?>" class="text-white">Category</a></h4>
                        <div class="info">
                            <strong class="amount text-white"><h3><?=$total_category;?></h3></strong>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                        <h4><a href="<?= base_url('admin/service');?>" class="text-white">Service</a></h4>
                        <div class="info">
                            <strong class="amount text-white"><h3><?=$total_service;?></h3></strong>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                        <h4><a href="<?= base_url('admin/booking');?>" class="text-white">Booking</a></h4>
                        <div class="info">
                            <strong class="amount text-white"><h3><?=$total_booking;?></h3></strong>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                        <h4><a href="<?= base_url('admin/complaint');?>" class="text-white">Complaint</a></h4>
                        <div class="info">
                            <strong class="amount text-white"><h3><?=$total_complaint;?></h3></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
