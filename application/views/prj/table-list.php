<table id="prjTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <!-- <th>No</th> -->
            <th>PRJ</th>
            <th>Date</th>
            <th width='80px'>Request By</th>
            <th width='275px'>Keterangan</th>
            <th width='95px'>State</th>
            <th width='75px'>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($prj as $row) { ?>
            <tr>
                <td><?= $row->rma ?></td>
                <td><?= date('d - m - Y', strtotime($row->date)) ?></td>
                <td><?= $row->sub ?></td>
                <td><?= $row->keterangan ?></td>
                <td>
                    <?php
                    if ($row->aprov ==  0) { ?>
                        <center><i class="fas fa-spinner"></i></center>
                    <?php } else { ?>
                        <center><i class="fas fa-check-circle"></i></center>
                    <?php }
                    ?>
                </td>
                <td>
                    <?php
                    if ($row->aprov != 1) { ?>
                        <form method="post" action="<?= site_url('PRJ/update_state') ?>" style="display:inline;">
                            <input type="hidden" name="prj" value="<?= $row->rma ?>">
                            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
                        </form>
                    <?php }else { ?>
                        <a href="<?= site_url('PRJ/print_prj/'.$row->rma) ?>" target="_blank"><button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button></a>
                    <?php }
                    ?>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>