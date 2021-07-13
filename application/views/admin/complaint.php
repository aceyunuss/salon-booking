<div class="page-wrapper">
    <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title"><?php echo $judul;?></h3>
                    </div>
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
                                        <th>Critic</th>
                                        <th>Suggestion</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1;?>
                                <?php foreach($complaint as $c) : ?>
                                    <tr>
                                    <th scope="row"><?= $i;?></th>
                                    <td><?= $c['kritik'];?></td>
                                    <td><?= $c['saran'];?></td>
                                    <td>
                                        <div class="tooltip-demo">
                                            <a href="<?= base_url('admin/hapuscomplaint/'.$c['id']); ?>" onclick="return confirm('Do you want to delete this file?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
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
