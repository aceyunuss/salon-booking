<div class="page-wrapper">
    <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title"><?php echo $judul;?></h3>
                    </div><br><br><br>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info margin-5 text-white" data-toggle="modal" data-target="#Modal1">Add</button>
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
                                        <th>Id Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1;?>
                                <?php foreach($service as $s) : ?>
                                    <tr>
                                    <th scope="row"><?= $i;?></th>
                                    <td><?= $s['service_name'];?></td>
                                    <td><?= $s['service_category_id'];?></td>
                                    <td>
                                        <div class="tooltip-demo">
                                        <a data-toggle="modal" data-target="#Modaledit<?=$s['service_id'];?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class=" fas fa-edit"></i></a>
                                        <a href="<?= base_url('admin/hapuservice/'.$s['service_id']); ?>" onclick="return confirm('Do you want to delete this file <?=$s['service_name'];?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/service');?>" method= "post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="service_name" name="service_name" placeholder="Service name">
                    </div>
                    <div class="form-group">
                        <select name="service_category_id" id="service_category_id" class="form-control">
                            <option value="">Select category id</option>
                                <?php foreach($category as $c) : ?>
                            <option value="<?= $c['category_id'];?>"><?= $c['category_id'];?></option>
                                <?php endforeach; ?>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal -->
<?php $no=0; foreach($service as $s): $no++; ?>
<div class="modal fade" id="Modaledit<?=$s['service_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="<?= base_url('admin/editservice');?>" method= "post">
            <div class="modal-body">
                <input type="hidden" readonly value="<?=$s['service_id'];?>" name="service_id" class="form-control" >
                    <div class="form-group">
                        <input type="text" class="form-control" id="service_name" name="service_name" placeholder="Service name" value="<?= $s['service_name'];?>">
                    </div>
                    <div class="form-group">
                        <select name="service_category_id" id="service_category_id" class="form-control">
                            <option value="">Select category id</option>
                                <?php foreach($category as $c) : ?>
                            <option value="<?= $c['category_id'];?>"><?= $c['category_id'];?></option>
                                <?php endforeach; ?>
                        </select>
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

