<table id="modulaksesTable" class="table table-bordered table-striped">
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
        foreach ($modul_list as $row) { ?>
            <tr>
                <td><?= $x++; ?></td>
                <td><?= $row->nama_modul ?></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?= check_access($role['id_role'], $m['id_modul']); ?> data-role="<?= $role['id_role'] ?>" data-menu="<?= $m['id_menu'] ?>">
                    </div>
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