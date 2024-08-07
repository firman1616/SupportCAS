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
                            <form action="" id="modulForm" name="modulForm" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="nama">Nama Modul</label>
                                    <input type="text" class="form-control" id="nama_modul" name="nama_modul">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Url Modul</label>
                                    <input type="text" class="form-control" id="url_modul" name="url_modul">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Icon Modul</label>
                                    <input type="text" class="form-control" id="icon_modul" name="icon_modul" placeholder="fas fa-list">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Sequence Modul</label>
                                    <input type="text" class="form-control" id="seq_modul" name="seq_modul" placeholder="100">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Non Active</option>
                                    </select>
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
                            <div id="div-table-modul"></div>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-6 -->
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->