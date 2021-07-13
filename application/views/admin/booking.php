<div class="page-wrapper">
    <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title"><?php echo $judul;?></h3>
                    </div><br><br>
                    <div class="col-12">
                        <?php echo $this->session->flashdata('msg');?>
                    </div>
                </div>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>Category</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1;?>
                                <?php foreach($booking as $b) : ?>
                                    <tr>
                                    <th scope="row"><?= $i;?></th>
                                    <td><?= $b['name'];?></td>
                                    <td><?= $b['address'];?></td>
                                    <td><?= $b['phone'];?></td>
                                    <td><?= $b['category'];?></td>
                                    <td><?= $b['service'];?></td>
                                    <td><?= $b['date'];?></td>
                                    <td>
                                        <div class="tooltip-demo">
                                            <a data-toggle="modal" data-target="#Modaledit<?=$b['id'];?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class=" fas fa-edit"></i></a>
                                            <a href="<?= base_url('admin/hapusbooking/'.$b['id']); ?>" onclick="return confirm('Do you want to delete this file <?=$b['name'];?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                    </tr>
                                    <?php $i++;?>
                                <?php endforeach; ?>
                            </tbody>
                             </table>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<?php $no=0; foreach($booking as $b): $no++; ?>
<div class="modal fade" id="Modaledit<?=$b['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="<?= base_url('admin/editbooking');?>" method= "post">
            <div class="modal-body">
                <input type="hidden" readonly value="<?=$b['id'];?>" name="id" class="form-control" >
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?= $b['name'];?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?= $b['address'];?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?= $b['phone'];?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="category" name="category" placeholder="Category" value="<?= $b['category'];?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="service" name="service" placeholder="Service" value="<?= $b['service'];?>">
                    </div>
                    <div class="form-group">
                        <input type="datetime-local" class="form-control" id="date" name="date" placeholder="Date" value="<?= $b['date'];?>">
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- End Modal -->