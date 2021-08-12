  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $data['judul']; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= BASE_URL; ?>/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active"><?= $data['judul']; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">  
              <div class="card-header">
                <h3 class="card-title">Data Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-header col-2 text-left">
                <a href="<?= BASE_URL; ?>/admin/user/add" type="button" class="btn btn-block btn-primary"><i class="fas fa-plus"></i> Add User</a>
              </div>
              <div class="card-body">
              <?php Flasher::flash(); ?>
                <table id="mytable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php $users = $data['users']; ?>
                  <tbody>
                  <?php foreach ($users as $user) {?>
                    <tr>
                      <td><?php echo $user['user_id']; ?></td>
                      <td><?php echo $user['user_name']; ?></td>
                      <td><?php echo $user['user_password']; ?></td>
                      <td><?php echo $user['user_email']; ?></td>
                      <td>
                        <a href="<?= BASE_URL; ?>/admin/user/edit/<?= $user['user_name']; ?>" class="btn btn-sm">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= BASE_URL; ?>/admin/user/remove/<?= $user['user_name']; ?>" class="btn btn-sm" onclick="return confirm('are you sure to remove this user?');">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  <?php }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div>
    </section>
  </div>

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Log Out</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure want to exit this page&hellip;?</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <a href="<?= BASE_URL; ?>/admin/logout/logout_process" type="button" class="btn btn-primary">Sure&hellip;</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->