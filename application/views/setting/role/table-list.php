<table id="roleTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = 1;
        foreach ($role_list as $row) { ?>
            <tr>
                <td><?= $x++; ?></td>
                <td><?= $row->role ?></td>
                <td>
                    <a href="<?= base_url('setting/Modul/akses_modul/'.$row->id_role) ?>" class="btn btn-primary"><i class="fa fa-list"></i></a>
                    <!-- <button type="button" class="btn btn-primary modul-akses" data-id="#" title="Akses Modul"><i class="fa fa-list"></i></button> -->
                    <button type="button" class="btn btn-success permission" data-id="#" title="Akses Permission"><i class="fa fa-lock"></i></button>
                    <button type="button" class="btn btn-warning edit" data-id="<?= $row->id_role ?>"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger delete" data-id="<?= $row->id_role ?>"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>