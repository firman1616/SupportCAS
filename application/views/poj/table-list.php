<table id="pojTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <!-- <th>No</th> -->
            <th style="width: 15%;">No. POJ</th>
            <th style="width: 10%;">Date</th>
            <th style="width: 12%;">Kode Sup</th>
            <th style="width: 20%;">Nama Sup</th>
            <th>Keterangan</th>
            <th style="width: auto;">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach ($get_poj as $row) { ?>
       <tr>
        <td><?= $row->por ?></td>
        <td><?= $row->date ?></td>
        <td><?= $row->kode_sup ?></td>
        <td><?= $row->nama_sup ?></td>
        <td><?= $row->ket ?></td>
        <td>
            <?php 
            if ($row->aprov != 1) { ?>
                <button type="button" class="btn btn-success" title="Approve"><i class="fa fa-check"></i></button>
            <?php }
            ?>
            <a href="<?= base_url('POJ/print_poj/'.$row->por) ?>" target="_blank" type="button" class="btn btn-primary" title="cetak POJ"><i class="fa fa-print"></i></a>
        </td>
       </tr>
        <?php }?>
    </tbody>
</table>