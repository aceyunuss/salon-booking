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
                    <form action="<?= base_url('booking/save_complaint');?>" method="post">
                        <div class="form-group row">
                            <label class="col-md-3" for="kritik">Critic</label>
                                <div class="col-md-9">
                                    <textarea  name="kritik" required="required" cols="7" rows="7" class="form-control" maxlength="2000" placeholder="Write here"></textarea>   
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="saran" class="col-md-3">Suggestion</label>
                                <div class="col-sm-9">
                                    <textarea  name="saran" required="required" cols="7" rows="7" class="form-control" maxlength="2000" placeholder="Write here"></textarea>   
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

