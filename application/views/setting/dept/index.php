    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Data Form</h5>
                        </div>
                        <div class="card-body">
                            <form action="" id="deptForm" name="deptForm" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="nama">Kode Departemen</label>
                                    <input type="text" class="form-control" id="kode_dept" name="kode_dept">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Departemen</label>
                                    <input type="text" class="form-control" id="nama_dept" name="nama_dept">
                                </div>
                                <button type="submit" id="save-data" class="btn btn-primary">Save Data</button>
                            </form>
                        </div>
                    </div>


                </div>

                <div class="col-lg-9">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Data</h5>
                        </div>
                        <div class="card-body">
                            <div id="div-table-dept"></div>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-6 -->
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->