<?php include("header.php");?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Homepage Sliders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="card">
        <div class="card-header">
        <div class="btn_position">
            <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-xl"><i class="fas fa-plus"></i> Add New Slider</button>
        </div>
        <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Slider</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="sliderUpload" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slider title</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Slider Type</label>
                            <select class="form-control">
                                <option>Please Choose slider type</option>
                                <option value="homeslider">Homepage Slider</option>
                                <option value="footerslider">Footer Slider</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Slider Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="sliderFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slider Caption</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter the Caption">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img id="slider_preview" class="mb-4" src="assets/images/no_image.webp" alt="" style="height: 150px;width: 100%;">
                        <button type="button" class="btn btn-block btn-danger btn-sm mx-auto" style="width:50%">Remove Slider Image</button>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>S.No</th>
            <th>Slider Title</th>
            <th>Slider Image</th>
            <th>Slider Caption</th>
            <th>Engine version</th>
            <!-- <th>CSS grade</th> -->
            </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php");?>