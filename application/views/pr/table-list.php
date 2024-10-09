<table id="prTable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <!-- <th>No</th> -->
            <th>No. PRQ</th>
            <th>Date</th>
            <th width='80px'>Request By</th>
            <th width='275px'>Keterangan</th>
            <th width='95px'>State</th>
            <th width='75px'>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = 1;
        $no = 1;
        foreach ($pr_list as $row) { ?>
            <tr>
                <td><?= $row->prq ?></td>
                <td><?= date('d/m/Y', strtotime($row->date)) ?></td>
                <td><?= $row->cct ?></td>
                <td><?= $row->remark ?></td>
                <td><?php if ($row->aprov == 0) { ?>
                        <center><i class="fas fa-spinner"></i></center>
                    <?php } else { ?>
                        <center><i class="fas fa-check-circle"></i></center>
                    <?php } ?>
                </td>
                <td>
                    <?php
                    if ($row->aprov != 1) { ?>
                        <form method="post" action="<?= base_url('Pr_approve/update_state') ?>" style="display:inline;">
                            <input type="hidden" name="prq" value="<?= $row->prq ?>">
                            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
                        </form>
                    <?php }elseif ($row->cct == 'WHS') { ?>
                        <form method="post" action="<?= base_url('Pr_approve/cancel_update_state') ?>" style="display:inline;">
                            <input type="hidden" name="cancel_prq" value="<?= $row->prq ?>">
                            <button type="submit" class="btn btn-danger" title="batal approve"><i class="fas fa-times-circle"></i></button>
                        </form>
                    <?php }
                    ?>
                    <a href="<?= base_url('Pr_approve/print_pr/'.$row->prq) ?>" target="_blank"><button type="button" class="btn btn-primary"><i class="fas fa-print"></i></button></a>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>