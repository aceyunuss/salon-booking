<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title"><?php echo $judul; ?></h4>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <img src="<?= base_url(); ?>dist/img/header.jpg" height="180px" weight="100px" lass="img-thumbnail mx-auto d-block" alt="">
          <div class="card-body">
            <?php echo $this->session->flashdata('msg'); ?>
            <form action="<?= base_url('booking/check_cancel'); ?>" method="post">
              <h5 class="card-title"></h5><br>
              <div class="form-group row">
                <label class="col-md-3" for="name">Nama</label>
                <div class="col-md-9">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" value="<?= set_value('name'); ?>">
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
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php if (!empty($booking)) { ?>
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
                    <tr>
                      <th scope="row">1</th>
                      <td><?= $booking['name']; ?></td>
                      <td><?= $booking['address']; ?></td>
                      <td><?= $booking['phone']; ?></td>
                      <td><?= $booking['category']; ?></td>
                      <td><?= $booking['service']; ?></td>
                      <td><?= $booking['date']; ?></td>
                      <td>
                        <div class="tooltip-demo">
                          <a href="<?= base_url('booking/delete/' . $booking['id']); ?>" onclick="return confirm('Do you want to cancel booking <?= $booking['name']; ?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
>