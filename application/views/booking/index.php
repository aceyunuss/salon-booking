<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"><?php echo $judul;?></h4>
                    </div>
                </div>
            </div>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
            <img src="<?= base_url();?>dist/img/header.jpg" height="180px" weight="100px" lass="img-thumbnail mx-auto d-block" alt="">
                <div class="card-body">
                <?php echo $this->session->flashdata('msg');?>
                    <form action="<?= base_url('booking/save_service');?>" method="post">
                    <h5 class="card-title"></h5><br>
                        <div class="form-group row">
                            <label class="col-md-3" for="name">Nama</label>
                                <div class="col-md-9">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" value="<?= set_value('name');?>">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-3">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="<?= set_value('address');?>">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-3">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" value="<?= set_value('phone');?>">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-md-3">Category</label>
                            <div class="col-md-9">
                                <select name="category" id="category" class="form-control custom-select" style="width: 100%; height:36px;" required>
                                <option value="">No     Selected</option>
                                 <?php foreach($category as $row):?>
                                 <option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
                                 <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="service" class="col-md-3">Service</label>
                            <div class="col-md-9">
                                    <select name="service" id="service"  class="form-control custom-select" style="width: 100%; height:36px;"required>
                                    <option>No Selected</option>
                                    </select>
                                    <!-- <div id="loading" style="margin-top: 15px;">
                                <img src="<?=base_url();?>assets/images/loading.gif" width="18"> <small>Loading...</small>
                            </div> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-3">Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                     <input type="datetime-local" class="form-control" id="date" name="date" placeholder="mm/dd/yyyy">
                                    </div>
                                </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

