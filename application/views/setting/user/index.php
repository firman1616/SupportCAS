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
                            <form action="" id="userForm" name="userForm" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="nama">Nama User</label>
                                    <input type="text" class="form-control" id="nama_user" name="nama_user">
                                </div>
                                <div class="form-group">
                                    <label for="urlModul">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="iconModul">Departemen</label>
                                    <select class="form-control select2" style="width: 100%; height: 100%" name="dept" id="dept">
                                        <option disabled selected>Pilih Departemen</option>
                                        <?php foreach ($dept->result() as $row) {?>
                                            <option value="<?= $row->id_dept ?>"><?= $row->kode_dept. ' - ' .$row->nama_dept ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="iconModul">Role</label>
                                    <select name="role" id="role" class="form-conrtol select22" style="width: 100%; height: 100%">
                                        <option disabled selected>Role Coming soon</option>
                                        <?php foreach ($role->result() as $row) {?>
                                            <option value="<?= $row->id_role ?>"><?= $row->role ?></option>
                                        <?php } ?>
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
                            <div id="div-table-user"></div>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-6 -->
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->