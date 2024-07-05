    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Role: <?= $role['role'] ?></h5>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('message') ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Modul</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $x = 1;
                                    foreach ($modul as $row) { ?>
                                        <tr>
                                            <td><?= $x++; ?></td>
                                            <td><?= $row['nama_modul'] ?></td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" <?= check_access($role['id_role'], $row['id_modul']); ?> data-role="<?= $role['id_role'] ?>" data-modul="<?= $row['id_modul'] ?>">
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                            <!-- <div id="div-table-akses-modul"></div> -->
                        </div>
                    </div>

                </div>
                <!-- /.col-md-6 -->
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->