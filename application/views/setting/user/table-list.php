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
                    <button type="button" class="btn btn-primary passupdate" data-id="#" data-toggle="modal" data-target="#passwordModal"><i class="fa fa-lock"></i></button>
                    <button type="button" class="btn btn-warning edit" data-id="<?= $row->id_user ?>"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger delete" data-id="<?= $row->id_user ?>"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>

<!-- update password -->
<div class="modal fade" id="passwordModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" id="passForm" name="passForm" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Update Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" id="user_id" name="user_id">
                        <label for="urlModul">Password</label>
                        <input type="text" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="save-data" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>