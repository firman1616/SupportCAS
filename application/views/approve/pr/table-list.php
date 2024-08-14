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
                <!-- <td><?= $x++; ?></td> -->
                <td><?= $row->prq ?></td>
                <td><?= date('d/m/Y', strtotime($row->date)) ?></td>
                <td><?= $row->cct ?></td>
                <td><?= $row->remark ?></td>
                <td><?php if ($row->categ_id == 'Need Approve') { ?>
                        <button type="disable" class="btn btn-warning">To Approve</button>
                    <?php } else { ?>
                        <button type="disable" class="btn btn-success">Approve</button>
                    <?php } ?>
                </td>
                <td>
                    <!-- <button type="button" class="btn btn-primary" title="detail barang" data-toggle="modal" data-target="#detail-barang<?= $no++; ?>"><i class="fas fa-book-reader"></i></button> -->
                    <!-- <button type="button" class="btn btn-info btn-detail" data-no_prq="<?= $row->prq ?>"><i class="fas fa-book-reader"></i></button> -->
                    <!-- <button type="button" class="btn btn-info btn-detail">Lihat Detail</button> -->
                    <a href="#" target="_blank"><button type="button" class="btn btn-primary"><i class="fas fa-check"></i></button></a>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>

<!-- detail data item -->
<!-- Modal -->
<div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Loading...</p>
            </div>
        </div>
    </div>
</div>