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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Post Detail</h3>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-10 header text-center">
                  <h1><?= $data['post']['post_title']; ?></h1>
                </div>
                <div class="col-2 float-right">
                  <p><?= $data['post']['post_date']; ?></p>
                  <p><?= $data['post']['author']; ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <p><?= nl2br($data['post']['post_article']); ?></p>
          </div>
          
          <button class="btn btn-default" onclick="history.go(-1);">Back </button>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
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