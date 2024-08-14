<table id="menuTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Url Menu</th>
            <th>Modul</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = 1;
        foreach ($menu_list as $row) { ?>
            <tr>
                <td><?= $x++; ?></td>
                <td><?= $row->nama_menu ?></td>
                <td><?= $row->url_menu ?></td>
                <td><?= $row->modul_id ?></td>
                <td>
                    <button type="button" class="btn btn-warning edit" data-id="<?= $row->id_menu ?>"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger delete" data-id="<?= $row->id_menu ?>"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>