<table id="poTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>No. PO</th>
            <th>Date</th>
            <th style="width: 25%;">Supplier</th>
            <th>Curency</th>
            <th style="width: 10%;">Total</th>
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
                if ($row->aprov == 1) { ?>
                    <!-- <center><i class="fas fa-check"></i></center> -->
                    <center><i class="fas fa-check-circle"></i></center>
                <?php }
                ?></b>
                <!-- <input type="text" value="<?= $row->oms ?>" name="oms" id="oms"> -->
                </td>
                <td>
                    <?php 
                    if ($row->aprov != 1) { ?>
                     <form method="post" action="<?= base_url('approve/update_state') ?>" style="display:inline;">
                            <input type="hidden" name="oms" value="<?= $row->oms ?>">
                            <button type="submit" class="btn btn-success"><i class="far fa-check-square"></i></button>
                    </form>
                    <?php }
                    ?>
                    <!-- <button type="button" class="btn btn-success update " data-id="<?= $row->oms ?>"><i class="far fa-check-square"></i></button> -->
                    <a href="<?= base_url('approve/print_po/'.$row->oms) ?>" target="_blank"><button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>