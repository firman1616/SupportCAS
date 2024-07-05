<table id="rolepermissionTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Role Permission</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = 1;
        foreach ($role_permission_list as $row) { ?>
            <tr>
                <td><?= $x++; ?></td>
                <td><?= $row->permission ?></td>
                <td>
                    <button type="button" class="btn btn-warning edit" data-id="<?= $row->id ?>"><i class="fa fa-edit"></i></button>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>