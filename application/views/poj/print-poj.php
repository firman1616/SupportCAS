<?php 
foreach ($header_poj as $row) {
    $por = $row->por;
    $date = $row->date;
    $curancy = $row->cur;
    $kurs = $row->kurs;
    $ppn = $row->ppn;
    $kode_sup = $row->kode_sup;
    $nama_sup = $row->nama_sup;
    $alamat = $row->alamat;
    $remark = $row->remark;
    $val = $row->val;
}
?>
<html xmlns="" xml:lang="id" lang="id">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            * {
            margin: 0;
            padding: 0;
            text-indent: 0;
            }
            h1 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 14pt;
            }

            .h2 {
                color: black;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-weight: bold;
                text-decoration: none;
                font-size: 12pt;
                vertical-align: -2pt;
            }

            h3 {
                color: black;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-weight: bold;
                text-decoration: none;
                font-size: 10pt;
            }

            .s1 {
                color: black;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 10pt;
            }

            .s2 {
                color: black;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-weight: bold;
                text-decoration: none;
                font-size: 10pt;
                vertical-align: -1pt;
            }

            .s3 {
                color: black;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-weight: bold;
                text-decoration: none;
                font-size: 10pt;
                vertical-align: 1pt;
            }

            .s4 {
                color: black;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-weight: bold;
                text-decoration: none;
                font-size: 9pt;
            }

            .s5 {
                color: black;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 9pt;
            }

            .p,
            p {
                color: black;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 9pt;
                margin: 0pt;
            }

            .s6 {
                color: black;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 9pt;
                vertical-align: -2pt;
            }

            .s7 {
                color: black;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-weight: normal;
                text-decoration: none;
                font-size: 9pt;
                vertical-align: -4pt;
            }

            table,
            tbody {
                vertical-align: top;
                overflow: visible;
            }

            hr.new1 {
                border-top: 2px solid black;
                margin: 10px;
                width: 770px;
            }

            hr.ttd1 {
                border-top: 1px solid black;
            }

            .no_soe {
                border: 3px solid black;
                border-collapse: collapse;
                margin-left: 30px;
            }

            .footnote {
                margin-left:20pt;
                font-family: Arial, sans-serif;
                font-style: normal;
                font-size: 9pt;
            }

            .table_header {
                margin-top: 25pt;
            }
        </style>
    </head>

    <body>
        <table class="table_header">
            <tr>
                <td width="90">
                    <center>
                        <img width="76" height="68" src="data:image/jpg;base64,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"/>
                    </center>
                </td>
                <td colspan="2">
                    <h1 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;line-height: 18pt;text-align: left;">PT. BARAMUDA BAHARI</h1>
                    <h3 style="padding-left: 5pt;text-indent: 0pt;line-height: 109%;text-align: left;">Desa Wonokoyo, Kec Beji, Pasuruan 67153, Indonesia</h3>
                </td>
                <td width="243">
                    <h1 style="padding-top: 4pt; padding-left: 0pt; text-indent: 0pt; line-height: 14pt; text-align: center; margin-bottom: 5px;">PO Jasa</h1>
                    <table width="200" class="no_soe">
                        <tr>
                            <td style="text-align: center; font-weight: bold;"><?= $por ?></td>
                        </tr>
                    </table>
    
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <hr class="new1">
                </td>
            </tr>
        </table>
        <table style="margin-left: 9pt;">
            <tr>
                <td width="70">
                    <h3 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Kirim ke</h3>
                </td>
                <td width="5">
                    <h3 style="padding-top: 4pt;text-indent: 0pt;text-align: center;">:</h3>
                </td>
                <td width="50">
                    <h3 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">
                        <span class="s1">(<?= $kode_sup ?>) <?= $nama_sup ?>
                        </span>
                    </h3>
                </td>
                <td width="70"><h3 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">Tanggal</h3></td>
                <td><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: center;">:</h3></td>
                <td width="100" colspan="4"><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: left;">  <?= date('d/m/Y', strtotime($date)) ?></h3></td>
            </tr>
            <tr>
                <td width="70">
                    <h3 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Alamat</h3>
                </td>
                <td width="5">
                    <h3 style="padding-top: 4pt;text-indent: 0pt;text-align: center;">:</h3>
                </td>
                <td width="300">
                    <h3 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">
                        <span class="s1"><?= $alamat ?> 
                        </span>
                    </h3>
                </td>
                <td><h3 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">Currency</h3></td>
                <td><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: center;">:</h3></td>
                <td><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: left;"> <?= $curancy ?></h3></td>
                <td><h3 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">Kurs</h3></td>
                <td><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: center;">:</h3></td>
                <td><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: left;"> <?= $kurs ?></h3></td>
            </tr>
        </table>
        <br>
        <table style="border-collapse: collapse; margin-left: 9pt;" cellspacing="0">
            <tr>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;" >No</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;" >Kode Barang</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Nama Barang</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Qty</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Satuan</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Harga</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">PPH</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Total Harga</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Keterangan</p>
                </td>
            </tr>
            <?php 
                $i=1;
                $sumpph = 0;
                foreach ($det_poj as $row) { 
                    $grand = $row->val; 
                    $pph22 = $row->valpph22;
                    $pph23 = $row->valpph23;
                    $pph42 = $row->valpph42;
                    $sumpph = $pph22 + $pph23 + $pph42;
            ?>
            <?php 
            // $pajak = 0;
            
            if ($ppn == 0) {
                // Handle the error, set default values, or log a message
                $pajak = 0;  // Example default value
            }else {
                $pajak = $val *  0.11;
            }
            $grand_all =  $val + $pajak + $sumpph;
            ?>

            <tr style="height:15pt">
                <td style="width:20pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;"><?= $i++;  ?></p>
                </td>
                <td style="width:70pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;"><?= $row->inv ?></p>
                </td>
                <td style="width:100pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: left;"><?= $row->ket ?></p>
                </td>
                <td style="width:47pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;"><?= number_format($row->qty,2) ?></p>
                </td>
                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;"><?= $row->unit ?></p>
                </td>
                <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($row->price,2) ?></p>
                </td>
                <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($sumpph,2) ?></p>
                </td>
                <td style="width:70pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($row->val,2) ?></p>
                </td>
                <td style="width:105pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 3pt; padding-right: 3pt;text-indent: 0pt;text-align: left;"><?= $row->etd ?></p>
                </td>
            </tr>
            <?php
            }
            ?>
            <tr>
                <td rowspan="5" colspan="6" style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:0pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: left;">Catatan : <br>
                    <?= $remark ?>
                </td>
                <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">Subtotal</p>
                </td>
                <td style="width:70pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($val,2) ?></p>
                </td>
                <td rowspan="5" style="width:70pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                </td>
            </tr>
            <tr>
                <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">PPN</p>
                </td>
                <td style="width:70pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($pajak,2) ?> </p>
                </td>
            </tr>
            <tr>
                <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">PPH</p>
                </td>
                <td style="width:70pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($sumpph,2) ?></p>
                </td>
            </tr>
            <tr>
                <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">PPNP</p>
                </td>
                <td style="width:70pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">0.00</p>
                </td>
            </tr>
            <tr>
                <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">Total</p>
                </td>
                <td style="width:70pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($grand_all,2) ?></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: center;">Dibuat oleh :</p>
                </td>
                <td colspan="4" style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: center;">Diterima oleh :</p>
                </td>
                <td colspan="2" style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: center;">Disetujui oleh :</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <br><br><br>
                    <p class="s5" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: center;">Reny Hariyati</p>
                </td>
                <td colspan="4" style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <br><br><br>
                </td>
                <td colspan="2" style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <br><br><br>
                    <p class="s5" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: center;">Yohanes Yoelianto</p>
                </td>
            </tr>
        </table>
    </body>
</html>