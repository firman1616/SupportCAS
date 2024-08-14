<table id="userTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Username</th>
            <th>Departemen</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $x = 1;
        foreach ($user_list as $row) { ?>
            <tr>
                <td><?= $x++; ?></td>
                <td><?= $row->name ?></td>
                <td><?= $row->email ?></td>
                <td><?= $row->kode_dept ?></td>
                <td><?= $row->role ?></td>
                <td>
                    <!-- data-toggle="modal" data-target="#modal-default" -->
                    <button type="button" class="btn btn-success" title="akases modul"><i class="fa fa-key"></i></button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default<?= $no++; ?>">
                        <i class="fa fa-lock"></i>
                    </button>
                    <button type="button" class="btn btn-warning edit" data-id="<?= $row->id_user ?>"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger delete" data-id="<?= $row->id_user ?>"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>

<?php
$y = 1;
foreach ($user_list as $row) { ?>

    <div class="modal fade" id="modal-default<?= $y++; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('setting/user/update_password') ?>" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Reset Password <?= $row->name ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="userid" id="userid" value="<?= $row->id_user ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">New Password</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="New password">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php $no++;
}
?>