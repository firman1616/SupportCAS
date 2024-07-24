<table id="modulTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Modul</th>
            <th>Url Modul</th>
            <th>Icon Modul</th>
            <th>Sequence</th>
            <th>Status</th>
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
                <td><?= $row->url_modul ?></td>
                <td><?= $row->icon_modul ?></td>
                <td><?= $row->seq ?></td>
                <td><?php if ( $row->status == 1) { ?>
                    <button type="button" class="disabled btn btn-primary">Active</button>
                <?php }else { ?>
                    <button type="button" class="disabled btn btn-danger">Non Active</button>
                <?php } ?></td>
                <td>
                    <button type="button" class="btn btn-warning edit" data-id="<?= $row->id_modul ?>"><i class="fa fa-edit"></i></button>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>