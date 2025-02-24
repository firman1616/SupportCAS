<table id="salesTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>No. OKL</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Remark</th>
            <th>Tanggal SO</th>
            <th>No. POC</th>
            <th>Keterangan Lain</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x=1;
        foreach ($sales_list as $row) { ?>
            <tr>
                <td><?= $x++ ?></td>
                <td><?= $row->okl ?></td>
                <td><?= $row->nama_sup ?></td>
                <td><?= $row->address?></td>
                <td><?= $row->ket ?></td>
                <td><?= date('d/m/Y', strtotime($row->date)) ?></td>
                <td><?= $row->nopoc ?></td>
                <td><?= $row->ketlain ?></td>
                <td>
                    <a href="<?= site_url('Sales/print_so/'.$row->okl) ?>" target="_blank"><button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button></a>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>