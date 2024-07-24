<table id="poTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>No. PO</th>
            <th>Date</th>
            <th>Supplier</th>
            <th>Curency</th>
            <th>Total</th>
            <th>State</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = 1;
        foreach ($po_list as $row) { ?>
            <tr>
                <td><?= $x++; ?></td>
                <td><?= $row->oms ?></td>
                <td><?= date('d/m/Y', strtotime($row->date)) ?></td>
                <td><?=  '['.$row->sub.'] '. $row->nama_sup ?></td>
                <td><?= $row->cur ?></td>
                <td><?= number_format($row->val) ?></td>
                <td><b><?php 
                if ($row->state == 'approved') { ?>
                    <center><i class="fas fa-check"></i></center>
                <?php }
                ?></b></td>
                <td><a href="<?= base_url('approve/print_po/'.$row->oms) ?>" target="_blank"><button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>