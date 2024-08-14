    <!-- Main content -->
    <div class="content">
        <div class="container">

        <?php
            $role_id = $this->session->userdata('role_id');
            $queryModul = "SELECT a.id_modul, a.nama_modul, a.icon_modul, a.url_modul, a.seq FROM modul as a JOIN user_access_modul as b ON a.id_modul = b.modul_id WHERE b.role_id = $role_id ORDER BY a.seq ASC";
            $modul = $this->db->query($queryModul)->result_array();
            // var_dump($menu);
            // die;
            ?>

            <div class="row">

            <?php 
            foreach ($modul as $row) { ?>
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="<?= site_url($row['url_modul']) ?>">
                    <div class="info-box shadow-none">
                        <span class="info-box-icon bg-info"><i class="<?= $row['icon_modul'] ?>"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><?= $row['nama_modul'] ?></span>
                            <span class="info-box-number">None</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    </a>
                    <!-- /.info-box -->
                </div>
            <?php }
            ?>
                
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->