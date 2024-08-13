<?php 
foreach ($header as $row) {
    $oms = $row->oms;
    $date = $row->date;
    $curancy = $row->cur;
    $total_all = $row->val;
    $user = $row->chusr;
    $ppn = $row->ppn;
    $kod_sup = $row->sub;
    $nama_sup = $row->nama_sup;
    $top = $row->top;
    $note = $row->addnote;
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
                margin-left: 20px;
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
                <td width="240">
                    <h1 style="padding-top: 4pt; padding-left: 0pt; text-indent: 0pt; line-height: 14pt; text-align: center; margin-bottom: 5px;">PURCHASE ORDER</h1>
                    <table width="200" class="no_soe">
                        <tr>
                            <td style="text-align: center; font-weight: bold;"><?= $oms ?></td>
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
        <table width="550" style="margin-left: 9pt;">
            <tr>
                <td width="80" rowspan="3">
                    <h3 style="padding-top: 4pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Supplier</h3>
                </td>
                <td width="2" rowspan="3">
                    <h3 style="padding-top: 4pt;text-indent: 0pt;text-align: center;">:</h3>
                </td>
                <td width="300">
                    <h3 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">
                        <span class="s1">(<?= $kod_sup ?>) <?= $nama_sup ?>
                        </span>
                    </h3>
                </td>
                <td width="90"><h3 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">Tanggal</h3></td>
                <td width="10"><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: center;">:</h3></td>
                <td width="100"><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: left;"> <?= date('d/m/Y', strtotime($date)) ?></h3></td>
            </tr>
            <tr>
                <td width="300" rowspan="2">
                    <h3 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">
                        <span class="s1">Jl.HM.ASHARI RT.006/001 - BOGOR
                        </span>
                    </h3>
                </td>
                <td><h3 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">Mata Uang</h3></td>
                <td><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: center;">:</h3></td>
                <td><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: left;"> <?= $curancy ?></h3></td>
            </tr>
            <tr>
                <td><h3 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">TOP</h3></td>
                <td><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: center;">:</h3></td>
                <td><h3 style="padding-top: 4pt; text-indent: 0pt; text-align: left;"><?= $top ?> days</h3></td>
            </tr>
        </table>
        <br>
        <table style="border-collapse: collapse; margin-left: 13pt;" cellspacing="0">
            <tr>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;" >Kode</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Nama Barang</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Spesifikasi</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Qty</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Tgl Kirim</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Harga</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Disc %</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Keterangan</p>
                </td>
                <td style="border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s4" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Total Harga</p>
                </td>
            </tr>
            <?php 
            $sumpph = 0;
            foreach ($det_pos as $row) { 
                $grand = $row->grand_tot; 
                $pph22 = $row->valpph22;
                $pph23 = $row->valpph23;
                $pph42 = $row->valpph42;
                $sumpph = $pph22 + $pph23 + $pph42;
            ?>

            <?php 
            // $pajak = 0;
            if (!is_numeric($ppn)) {
                // Handle the error, set default values, or log a message
                $pajak = 0;  // Example default value
            }else {
                $pajak = $total_all * 0.11;
            }
            $grand_all =  $total_all + $pajak + $sumpph;
            ?>
                
            <tr style="height:15pt">
                <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;"><?= $row->inv ?></p>
                </td>
                <td style="width:100pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: left;"><?= $row->remark ?></p>
                </td>
                <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;"><?= $row->spesifikasi ?></p>
                </td>
                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;"> <?= number_format($row->qty) .' '. $row->unit ?></p>
                </td>
                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;"><?= date('d/m/Y', strtotime($row->dateneed)) ?></p>
                </td>
                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($row->price) ?></p>
                </td>
                <td style="width:40pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($row->disc,2) ?></p>
                </td>
                <td style="width:80pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 3pt; padding-right: 3pt;text-indent: 0pt;text-align: left;"><?= $row->etd ?></p>
                </td>
                <td style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($row->grand_tot,2) ?> </p>
                </td>
            </tr>
            <?php }?>
            <tr>
                <td rowspan="4" style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: left;">Catatan :</p>
                </td>
                <td rowspan="4" style="width:100pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="6" >
                    <p class="s5" style="padding-top: 3pt;padding-left: 3pt;text-indent: 0pt;text-align: left;"><?= $note ?> </p>
                </td>
                <td style="width:80pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">Subtotal</p>
                </td>
                <td style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($total_all,2) ?> </p>
                </td>
            </tr>
            <tr>
                <td style="width:80pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">PPN</p>
                </td>
                <td style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($pajak,2) ?> </p>
                </td>
            </tr>
            <tr>
                <td style="width:80pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">PPH</p>
                </td>
                <td style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($sumpph,2) ?> </p>
                </td>
            </tr>
            <tr>
                <td style="width:80pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">Total</p>
                </td>
                <td style="width:75pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?= number_format($grand_all,2) ?> </p>
                </td>
            </tr>
        </table>
        <br>
        <table width="570" style="margin-left: 9pt;">
            <tr>
                <td width="80" colspan="2">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Dibuat </p>
                </td>
                <td width="80" colspan="2">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Diperiksa </p>
                </td>
                <td width="80" colspan="2">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Disetujui</p>
                </td>
                <td width="80">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Supplier </p>
                </td>
            </tr>
            <tr>
                <td width="90" colspan="2">
                    <center>
                        <?php 
                        if ($user == 'tanti') { ?>
                            <img width="65" height="65" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/2wBDAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/wAARCAAvAC0DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD+9ea+uYru4INyY7WVXeGSKG3tRaytYW5jDRQahqWoXbJ9svtIWwgigvrl20a4mhuoJPs9Vbu+ULGbu6nMM1pYyTxPbXP2iWz1SS28+OOz8NtLJLqJlsLXxfKlpb6R4dimn/s26t59Nv7sRSJBLfPFK0c8Vnr5smVpftV5DFqmn2usiMub/VL1WTXJLC9tMQ6HNpNpaW0lrbQ6NYRX17XNx/ZqrdXikrpljfX2JMR7m0mOY3kyx6lrEI0+8kh1DUba51O+ub/TL6OXS9QudeUzQxT+gnTsoRhh5SlGEoOUKPNypVFGM714pTUqcsTVa9pL6uqlKrCfsHOphafs5JOo2vaRda10pwXtZxbvTpQrTpyhSoJpxbcX7D95KtS8I+Ivxh8e6FrWuSeErKwHhH4OHwtr3xy8ReMNIuotLls/EyadPqXg7wbd6LdyzWE3w78C39x8XviH4pubbxNBomlv4J8NaDZeN7zxR4qk+H30RNqEkH/L7cywwSqzMLG4+23MemJeLqkVukGiXEep3txJYTMmjaZax6hJEk95Y3Yt7i0t4Pk3xToVs37H/wAXrHxFeRRX/jH4E/Gbx/41l097+2S6vPiT4X8UajdapPJeNay6WY7S8vIIdLvbS3soJINmmRLHoBNv9TC5kup4mvJrezu559E8+2Fy7W9mq2LX2m20sF3qmm3zST6/NdCC7XRNI1DVIrSLTdQ0kWtst0VHld24wcpU5vlVOlFKUG3yQg4PnrS+zFVqdOcYOneEvatbVL+86catueHInGME6yf1eFOmqkW6kXOF/ZutNV6v7ypSdJVfrNo3OqLb3IWaW4uraWG2mVPLjI1KGfTlsLZIrTRNW+z6V4hgm+16xeTS3Nz4esbwSIItklzp3U1wUvlXWmXpa3t7p5/Dup3QUwQXVzvvZJJNf0i0Foni57u2mvoLWHVdPs7bWFtJ3tYbT+2BJY2ln3tZYlJNLlhGanPnjGEadrqDiuWLkmoxap80akqbqQqxjecKlatMN2lLmjZcsk3KMleSbjJpX1TUtOaMk4TUJwlThxlwlrC08JtLYafaRwQ2tpPbzWNlbadYRvprxWtjcXyW8dpYS380+s65aadbWM3hy6tNIEGqpF5sHnHxZu59P+Fnxfe1ufsd4Phr8VJ47y0fRYbl7jT/AA/qDDWLzzbfSvtT6QTp8Nvd2F01ra3WqzabrqpdWC6i3p12DLeXMcSyypi98tftktzFJIg06a9mns5lt9Qls7KWG3sl0zQb+fSr64vLiy1eC2nxJa+S/GG4uJPAhtre103VrDV/ih8BvDesaLdQ21/ZXGkeKvjz4J0PxfHq1hqOn6fbxXWqeD9Ye51fSJVd7e6nnWOxlnlS41beU5Onecm+f3JSr1HTSjOM4UJVJNKNP2co1ak3RpzrzjSwterVSjGJDac4ycUnCiqlJKcqSp0pyhP2lOqlGVWFWXtKcUvaqT9ri4xw0adDDrlv2qNQ0TQv2d/itoeoNPpvh/xVoUPwYtbKC0vJ1eD4qHQfhoJtJ0v7K2p6hfeH7PWr2+sNO8O7tPvbeO4d0u71bp7D1nQPHWl+MbOXUtFTxLHo00d/JJrOq6d4m8IQc6rJ4fntUi8X+H9DmspdMigGoP8AZ4La4iurUpaSai9xqE91zHj3wPdeMfGHwp1KS/tbXw/8NvGXiv4k6to0ul3/AJ3iW/sdC8TeHvD/APY+hxXEurS3fhbXdZ03xBfalBFDZ61NLbPpcV2viOWK09CkfVYtStZEdHVr67OrLcNqS30U1xpmpR2Nl4dad4NJktHnt9Mt4pNQs9P0W8mtZLx2uvEF0ws0lKMve05fdjPlq0+eKcKcU5yvS51OSUnKSqQrOmnSkqH1WLTjGPLC7moNaVIU5ckFzR5JTnFU6eH9nHEw55exwcIwpYXFKvP2lSeeWcySmZFltguj6jJEqDW7K3eXVZ7rzrOKeHT7i6mik0zzdHmsvtN9FqmowSrpmpWtrpdrB18EKW8ENvGZWjgijhRp557qdkiQIpmubmSW5uJSFBknuJZZ5XzJLI8jMx4hxbPA3zy3FvNbvFDNDHFdyahZX8NxrGuw2y2Vm9lf61q91pl1DfW1nILW2tjbT6c1tcu1tcdzGJBHGJmR5QiiV442ijeQKN7RxNJM0aM2SsbTSsikKZHI3Hnr3ilC6hFKDVGGkI8lONJy5VOfLNTp1Kc4zc5U5xlTVasotwqnDkjH3UkoRUXGlKnGfNOpVc0pQi4tqcJck2pqlKhN04qfNLj75C0lxpu3znnj1+KK0jt5rU3dxc201+rwxzadNYwRwW+pizuvEpuZdNm1G6NhqEE+qXVvb2fnHj1bnVfEXwSt5rtJbLVfjHH9u220cKX2k6L8JviH8QNEs4Laaaa600Q+K/DnhjVrsXRkvrq50YSMlvZvYJY+oXljdS3OpYsXaC6njkkMUGjTw6kkUGiQxRX8Goy+bOiFdQX93PpxjtoJgivcyWc8lO60NLnUbPUbrS7e91TSNSuNU0PUHsdMuLzSL/U1u9Dm1E3Bu9LSZD4Z1EaRJHDZpqsGjaZq9iNV1O6vtPnuNfaU0qX76MKldyjHnlQpz9rJqVV8sYqEv4aTjUkprLqblSjWqRlSpqMXF3ioKUKrrSqexhWdSblKqm5VVTlCfs4qk6qjUSq3pqUniPaVWMIzADdxxmyu47ya+gu1uH0EJdSyWesvtnSw0yexuNQuLTVbUavf3V1qWmzanJpVnDt+a6LaRZHZ1nIjtbjUGmC3sl3NOHjjhuhKmhxiPUtS08XVhqFrbiS/0mzW1s9Cgt4ZWamx2ivcT2lmr2N4tukFw0UsUcumWUtvrUGmGB7e2hF9p1pdLcT6PY3F1ILT+07iaWzsZLa0ghREV7qG0a3W3vnaHVJNIe30t447WZbSz1FbXUIrKRGsrebU9XluUuFTVtQv7m8Fvd22mTKkuqnGpJulFKSVWUpQdLmjTdenKdOTi69NLmnUWLqSr3qVKdXEWUJwck4ygpU/ZXcqVNKE4uNWtGnReIcKf1n3qlNxpRxDboy9or1ant8uwUaGIjmS4e2vGxKk7rLqmoZWWZQt1p8r2Fwui6bFBrmtx2Emn2+iDSLuPRn1iBL5pobm6iihPZAggEEEEAgjkEHkEEcEEdDXGshuLCOWEIbSS1n1KDULiLTCtwsVxY6jZ6ve2a6KWTULW7urzWdMgtYVQ3FvHLftDeXjR2nZ1yV2m0lVU5U6lanVppVLUqkVS92023RlL3qioNycMPUwvKqdH2SlduWc4uEac0oSlD3Y1Vzc1pVaX8WDdnFKtzThOnVw8qtWeHnJf//Z"/>
                        <?php } elseif ($user == 'ulfa') { ?>
                            <img width="65" height="65" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/2wBDAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/wAARCABFAC8DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD+7661m+jiCF9VEt/ZRPYfZLGCN01HUHuNtg8l9ps0lm+k2upaffXI1zSNNuILHS21OS01O3h8Q2tjXj1+8nRmi1NJ/tE8bxrYQ29z9hj1GwtNY0u3a4itrqK6t/stnqVrPeaZFrk32fULTXDDHpwY2Ulyl75txPLFrhuBb6M1xd2D3EcsWnWct7r0lzF5GnRQarIt4kugx6DFosmszxGNdQt4tP1uSZfK/jdpPjzWfhH4003wR421/wCHXjJLO1u9J8WRW0N7Jot14NvdL8T3sOmQ6/pnifTr6z8WaFZ6/bDVNRivLywW+trRZ9K8R6TbnSfV56cfapQwnNGUJRdWjBrln7JTcrezcYYdT5nH2ClOE8PWXtXi8PhquEpJp25qkW2ock3ST+CpJKrGpKKoq8qMK3tqtSupTdOpQUJzy7nf2lPip4i8KfAnxW/w/wDEVlpnxR8c6Dq3gD4LXWpae2qTXHxa8caPrNj8J7vUILG50GOKwv8AxNpd3aQy6XDqdrqBFlqek3d/ZxPDfcN8EhefBH4kfEz9ni18Wa9420TTvCXg/wCOnhu/8V+NtP1TVvBumeI9dufhlc/DWG4ufDun6VaeF7vXPhn4g8TWt3NDpd4mq+JvFGl6bBeXljJqll5j4x8cah+0R8HP2AfiPHa6voWsfF34l/sh/tGjw7axt5ml6FJoei+KvFekXlrrUOsvpGm6BP4k0uDVblYrTVLubWLTS4722vBPq0HcfsuahafGab4p/tK3GmXPiDRvip8QLLSvgh4iutF8QpqVv+znotr4fu9E0nUvDPiKPQE0PUbT47WnxY1WQz6Tf6hYR6pomtapLe+C20i9g5oS5pRqPDxkubmqUaUY/ulrUcFLkjPEPnUcOqcrxdSpH2NKcHFwudSNOEZOM5SaqqFODlSlWjGFNS53KE61C8owqyc6OIWGs+WhKpivZR+2LvV7iIWRMkoe5v57K3+z2PlRG++ymK0sdVt9UeCeGK5ZrjV4ZBd6R5jWthpVvfXkt/aLrOnY6kLu6eCCSO6iigMtzcR7zFDcSTsscFtc+RDbajAdt1b+bb4ezl054b3fczlYeXW0n+2acstpfwXw1iD7TfT3lqyXlysEt3ctBcmIJf2U2naUJLmzOgwxGe80ZNNudHuvDUY0LU05J7wLDdyXV0kljbx3F9bX2rWLLcxtvuhiJ7S3Ev8AaUN9Dcm3TS9SsgIdMuNHi09VlrSfsVTtOlyNcy574eLjFziozbVSEcUvfVOjOjOPtK65LVKaUqrVKUJwVWpOcKcnCMqcZczXNRgp1qMIy5k8LTliIYitVp4epVr06V6OIqOUk1Ozt5P7RZtN0e+S4uDFfQJcLps88k1raWostRvAxGp3OtW8ehWi6ZewWtnJaRwW95dXMMNgkuZrENpfaPqsbSxy209p4l0fVNT1DUYXhGnLo89rrd00817aQaLa2+t2dvZX722m3MVtNbORpNvaXTX9ne1maCRtetcaZayNaaejSarbWdnbXdwpea2hvtRvPty3dhqas+n2rx6NdNpkthrEp+0TNaW48a+Pnxp8L/Bj4eXPjzxT/wAJBr/2q4/4RDwN4O8KeG9W1X4jfEfX9a8NXmpz6J4X8K6ZoOta94tu7XStK1jx14ih8MeGLi38JeAPBfjP4ha7ZzeGvBGuvYqPNaKjGopcsI02qda8HiqPs4+zpxpKMKnN7V4erUq0qVZVKlSrKop0q0FFc0vZKaX8Pnp1ouftU69KNRydCnGpQpStTq4h1eSk6csHKk7wiq35aeIrLxV8QNQ/Yy/Zj8F30nhJta+B/wC2J8B9V1vTfEvif4a6t4J+AvgTVf2XPCuveNfh5418CXut+J/Cvxj8D+Fb/wAML8Nb+GPR7bVL8apFqfxP8DT39rbeLP2eg8NaNpWlw6VoPhuw0Hw/p8uhzafpmiaVYeHrGw0+PU21K3uba1aSxs9OvPD2tNeeJLu3ay8m4sZpLG50u/v7xki/KT9kz4ZX3hz4y/AP4peOdFWL4s/G34TftMeNvjbc6p4k0z4rQ/Dq0vNY+CniHwD+z1oPxat47QeK/g58EIfG3jbwb8IdaOn2mkar4bs9cv8ASZ47bXLiXXv1pkneW7sROInuLe90q/F7Jb22myQXs2dBvLi20i8uxqK6fqFu19psMt89zeQTahCLCXVbcxy6fMXOPtaspTjGilWjJeznapCVPE29ql7VTpV6D9l9YxFRulOGIoPFVa9y5wnZwpTi20+eMqcKlSg/YupGFSMpzpTxFadfDShhqEKFH2daFGnhYVMXLDjILWI31rEtpa20i3+q2N3JHq+satqNvK0d7dRqXthF/Zk2r6Lcwapcajf30Mtq0mi6cYL6ZNGnttXRIiYdKkjt7WO3ttNubWP+z7yN7O2Z20sy2MdnCJYIktrq3u7O2it7y5g0+2sUgSV/tJjt86WSC7bRrI7JIbo3C6dDaaFdWlxpsPlXsllfIL+6FvpF3oMFtDZXck1jNd2movBD9k0yTWLfThraeji9ElxMbuaS2uYI55dBurKeI2E1ra6igv5B5cdleXy/brGzlGbyOSS6024vdNtkeGuVwhWSckk6iVOUMTTcWoSpyagrKbqfv6qqYn2TpUoShCNeEpVJZKEEo2hFQnapStGEJKjKpF0alN037PlmoUoSj7Wc6mGp03W55UsJCfN694m0nwzoPinxN4r1z/hHPDHhbw9H4p8YXxmtdO0TwxpNvYalqHim8uvEd5baXcQ2Ol6bDJ4g1iaRbDWtOs4odRiMR1C3sh+fnhzVbL4k3XjD9uP4wQ6jpPw98F6f448OfszfDu/0xLbxJY+GtLu5vA+sfFP4i6Vqun+JotR8ceNPH7eKv+FYaj4YvpvhrY/Bfx74BvNe8ITeIraTXNO9S/aBsb34sfEz4Vfs6WkZj+Ht1d+Gfib8fks9Y1yyOneALHWzP8MPh7rei/ZtJ0S88AfH7WvAvxD+DvjjwRrEo0rxl4LTXvDfiHQfElhrWr6bHW/bUEsH7N2t/DTwhoken+I/idrvw++HHw28EW99N4cm1PVrXXvDd7q/gzwhaaNGnlpo3w38DeK/Etrf6d5FnaaZpcwsCYvPWPOEeeNWcYVI2dNTpey5pSd6VVKhU9nRnVaVSo+fndXBulKGLjzSdSpr7SdGnQ6RcJJ0pyWFaVFwqpzgo1MLhZ/uakKV7Y6ap1YKr7KnTxM/gn9ib9ofx1c3Pw38XftM6d4N+E3gn4N/sX/Cv4n+EvElrqWoz3eueCP2j/AUOt6FpGqaZb674mj8WftBfC3w38HNI8O/ElPD2mHRfGes+NI734Z+HPEFrK3/AAjX7NP4o1W58Y6X4Wt9A1+4tX0Hwv4p1HxbeS2UPhrS31T/AISfT4LC6064bQtdvNWub7RLFRpsGnQ29tcahZ6tPaac+n3VrefBOt/sy/B7xx+0Z4K+Hvj/AMPS+K/DnwT+Gvwsg8G+G49e8T+CvCGueIPBmlS/8IzD448IeEJ4/DnxJ0Wwt9Le7i0fxzba3puiWjz2DaNcaBNNbap+h9xFLZ7/ACm0vT4NHu7eQLDe3UtjpkEdjY7JZ7N5YbTw9pOl6JDfCaOGfS01ZrfdG1lDrl7p96Rpp+09nCPtfq1NRg4yqU+aNJwi5UoVJJQqwVOEcPKnF2rUK9dVmubETU9moeyp2fuShT9tHEVXy04VXFc1PnrQpKnKWE9tVjhvb+wtVnicLHETqaKTtaS20ky6qlhbT3893Nc2iWNvFJBpb3EmpSjTGtkmtdTFzd3k0Go2t3D/AGpKWYaXqdhbWj29DlYfZrMvdyy22jadFdPf6lbXNyyRJtsdRNvBe6iZP7YZtSWXUZLtmuJ9JeMtciNZhklZvtGi/ZtMNpJa32tzrosdzPDCr2+lTwaeSJrP7Elg0M1st8+mQNYWOvXsK2msXy/ajrO7pMazfZr1dt1Ati0Gm6hJcWt9K9hLMjLcQahF59xdLrUVtaajdyNcx25jj0tEt3uIbmUaTTUKj5bUuSMU6k6yqOS5+Rexc1Tk3JSq/WIValKXvK08THE+2KkpRqRlL2rddKalGnJU5+1cJznCdKMFLDe0540edYyHIoyniqdSnThS+MvjD4C+LGhfEuT9oL4H+HvC/j/xJqngDwh8I/iz4B+I0Vl4Cb4h/CbRLjxhr/hDVNN+KN/bazpvgLVfh/4k+JXxK8TeJtBv/hpryeNorrSPCl7oXgqzhtfGF/F8NPhh8U/Gfiu0+N37Rc2i+HPEmkHUdA+DvwC8J69J4+8FfAxZ9Pi8Ot8Q/wDhL30gWPxF+NutaNP4m17w14w0PwF8LW8FfDL4oa78I7nTPEOnaPf+NtV+rtWie4u7qzt7i7T7PfWQgnFxHftpt9cXcE013ZX1ze2raNqjReJmsptFv70G/wDDk1pH4etLm1gvNGuq93AzWM8LjUdOtb+40SxlsbuzsbbR4rHU9WtrOPRbG0Au7NLmIX0R1Ke6tbyDWxql1pk/2lbRNP8ADOs4czlKfv8APTpOh/ssak4Q/wBmVP4KdX2qipQaoUqc6kpU8Xh3Tjh3QhUnek6bhTc5VXepealJOdBRoutGkpKF1RhUqwlPGUfrNHDYfEQgq+GqfMKzxR/tf6tfSXMmn6trnwcj/sbXbjT2vbV10PT7O9v4tL0mW3GpW1rENfOpXNg19t1K8toUlubW40p7DXfqCRdOtNRtraC2trS0sb/TLPT4bWxury7H2qxMVtp8UUsNte6XJaafq2s3FnZaDI9t4W0WwvdUvillqEunWfzH41kh0v8AbT/Zzuord49b8W/An9pbUNTNtZxPFrUng+9+A1lFNaxw+ILxIiw1uxeGxkeUT2r2CHWY7i0uIpfql5tSlkWe2upJ0iu7e+V7QXBgt4LfSrKQ28emWkkyX2meI7VNXS2uheavHpl/caa9rYXeqQzvZYSSgnSiqVTkVWLc+TE03VqKlDmUKdGpVkqcKjxM6M50JyqxxKy3C0sPVpU2ScajaUko1fYOVqNlKckqtNw9n9YpVuZR9lBSpUliOd4JfWKmGxFGrlSvpt5cabb3Oq2lzbXjXEjSz/b0s73SLfT7y5g1aC4vXaFNSijt0h0rVLXUJLjUdLsdS1n7Zqdvb3EOm7uiy2UmpidbmNryS0aO432McdzdS3hS/wBPN5dzWVlf2mtnQ7a1udS0GeOJbe2aza1srezskZ4g18twi2l3qchuJNUktrs3Ed1ZfaJopYE0u4trm3jLT27abd6vJb40pdJ1GOHQkvksby4jfc0uExSN5FvJaWgtdOht7UfZxY2Nraw3NudGtbWy1Ke0t77TrtJHvrqG0jglt57PT4ri9TT0axdXlvXc3Km7NxpOnCm+Zum9ZxpqMqkfbTp1J0rxr+zrUP3dLCw5VGVOEpKlB+1crzmqsaspRqP2cnKq6lVVqrhSh9dnCs6tNrDYdy9hGlSr5dzC15rl/pLuVMukw6h9oUzpvT7TdQ2NrcRQTwErY3fnXYu7GbT76eMWVpJchbWaW95y3K3WneHUtnvrU654g1nTCzatqbG2ktrHWZL67c2N1pr3r6hH4evJENy5utN1TV/7XsL2K40+FJiitYxisRTpxSjCWW4jESjBKCnXWX1Gqs+W3NNJcl5XfspTo/wqk4Szrf7xiqK0hTll9OFvdmoVctymtP8Aeq1VylUxOIlzubmvrFeKko1ail4d4i+HVn4q/aY/Zp+NE+q3ttLonw0/ab8D3fhmO209rLxDF8ULz4M6zBfa3ex2sDXI8IWHwtOi6PCLNbye38QTS3GqKtteW+s+3W2oQ3tvperNaB1tPBWjeM4bW6kSQLdJHqMkUPm2lvp/mGO3vr+KJbmK40uzujp+oaVo+mzWDpeFFeosDhV9agqXuqrSpr36l1GOY5lTjaXPzKUIUKXJNNThKHPGSnKUnph6k684e1k5uNbKqMZO3PClicz4fw1aEKitOClRrSScZJwlChVpuNXC4adK+80P9pnRo45zbHxfeaBsu7tryOFNQ8EJ4pupbF5Il1DToktmvdKsLKy1GGLT/trTQsdPt7fRY9y0c2+qnSbcs00GnSRwXd0IWght7KXTZhDFp1jBp1vD5kerpbs1u0O6LTrLzVmMYKlFeZj4xw9bKqdFckMTgI4ivG7lGrW/s7FVXOSk5bzwtBuKtFqHK48s5qUUf306eFlpQdbH03TpfuFyUMsxuJopOj7OS9niKUK8GmpRrJ1U+eU5S//Z"/>
                        <?php } elseif ($user == 'reny') { ?>
                            <img width="65" height="65" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/2wBDAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/wAARCABFAC8DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD+7661m+jiCF9VEt/ZRPYfZLGCN01HUHuNtg8l9ps0lm+k2upaffXI1zSNNuILHS21OS01O3h8Q2tjXj1+8nRmi1NJ/tE8bxrYQ29z9hj1GwtNY0u3a4itrqK6t/stnqVrPeaZFrk32fULTXDDHpwY2Ulyl75txPLFrhuBb6M1xd2D3EcsWnWct7r0lzF5GnRQarIt4kugx6DFosmszxGNdQt4tP1uSZfK/jdpPjzWfhH4003wR421/wCHXjJLO1u9J8WRW0N7Jot14NvdL8T3sOmQ6/pnifTr6z8WaFZ6/bDVNRivLywW+trRZ9K8R6TbnSfV56cfapQwnNGUJRdWjBrln7JTcrezcYYdT5nH2ClOE8PWXtXi8PhquEpJp25qkW2ock3ST+CpJKrGpKKoq8qMK3tqtSupTdOpQUJzy7nf2lPip4i8KfAnxW/w/wDEVlpnxR8c6Dq3gD4LXWpae2qTXHxa8caPrNj8J7vUILG50GOKwv8AxNpd3aQy6XDqdrqBFlqek3d/ZxPDfcN8EhefBH4kfEz9ni18Wa9420TTvCXg/wCOnhu/8V+NtP1TVvBumeI9dufhlc/DWG4ufDun6VaeF7vXPhn4g8TWt3NDpd4mq+JvFGl6bBeXljJqll5j4x8cah+0R8HP2AfiPHa6voWsfF34l/sh/tGjw7axt5ml6FJoei+KvFekXlrrUOsvpGm6BP4k0uDVblYrTVLubWLTS4722vBPq0HcfsuahafGab4p/tK3GmXPiDRvip8QLLSvgh4iutF8QpqVv+znotr4fu9E0nUvDPiKPQE0PUbT47WnxY1WQz6Tf6hYR6pomtapLe+C20i9g5oS5pRqPDxkubmqUaUY/ulrUcFLkjPEPnUcOqcrxdSpH2NKcHFwudSNOEZOM5SaqqFODlSlWjGFNS53KE61C8owqyc6OIWGs+WhKpivZR+2LvV7iIWRMkoe5v57K3+z2PlRG++ymK0sdVt9UeCeGK5ZrjV4ZBd6R5jWthpVvfXkt/aLrOnY6kLu6eCCSO6iigMtzcR7zFDcSTsscFtc+RDbajAdt1b+bb4ezl054b3fczlYeXW0n+2acstpfwXw1iD7TfT3lqyXlysEt3ctBcmIJf2U2naUJLmzOgwxGe80ZNNudHuvDUY0LU05J7wLDdyXV0kljbx3F9bX2rWLLcxtvuhiJ7S3Ev8AaUN9Dcm3TS9SsgIdMuNHi09VlrSfsVTtOlyNcy574eLjFziozbVSEcUvfVOjOjOPtK65LVKaUqrVKUJwVWpOcKcnCMqcZczXNRgp1qMIy5k8LTliIYitVp4epVr06V6OIqOUk1Ozt5P7RZtN0e+S4uDFfQJcLps88k1raWostRvAxGp3OtW8ehWi6ZewWtnJaRwW95dXMMNgkuZrENpfaPqsbSxy209p4l0fVNT1DUYXhGnLo89rrd00817aQaLa2+t2dvZX722m3MVtNbORpNvaXTX9ne1maCRtetcaZayNaaejSarbWdnbXdwpea2hvtRvPty3dhqas+n2rx6NdNpkthrEp+0TNaW48a+Pnxp8L/Bj4eXPjzxT/wAJBr/2q4/4RDwN4O8KeG9W1X4jfEfX9a8NXmpz6J4X8K6ZoOta94tu7XStK1jx14ih8MeGLi38JeAPBfjP4ha7ZzeGvBGuvYqPNaKjGopcsI02qda8HiqPs4+zpxpKMKnN7V4erUq0qVZVKlSrKop0q0FFc0vZKaX8Pnp1ouftU69KNRydCnGpQpStTq4h1eSk6csHKk7wiq35aeIrLxV8QNQ/Yy/Zj8F30nhJta+B/wC2J8B9V1vTfEvif4a6t4J+AvgTVf2XPCuveNfh5418CXut+J/Cvxj8D+Fb/wAML8Nb+GPR7bVL8apFqfxP8DT39rbeLP2eg8NaNpWlw6VoPhuw0Hw/p8uhzafpmiaVYeHrGw0+PU21K3uba1aSxs9OvPD2tNeeJLu3ay8m4sZpLG50u/v7xki/KT9kz4ZX3hz4y/AP4peOdFWL4s/G34TftMeNvjbc6p4k0z4rQ/Dq0vNY+CniHwD+z1oPxat47QeK/g58EIfG3jbwb8IdaOn2mkar4bs9cv8ASZ47bXLiXXv1pkneW7sROInuLe90q/F7Jb22myQXs2dBvLi20i8uxqK6fqFu19psMt89zeQTahCLCXVbcxy6fMXOPtaspTjGilWjJeznapCVPE29ql7VTpV6D9l9YxFRulOGIoPFVa9y5wnZwpTi20+eMqcKlSg/YupGFSMpzpTxFadfDShhqEKFH2daFGnhYVMXLDjILWI31rEtpa20i3+q2N3JHq+satqNvK0d7dRqXthF/Zk2r6Lcwapcajf30Mtq0mi6cYL6ZNGnttXRIiYdKkjt7WO3ttNubWP+z7yN7O2Z20sy2MdnCJYIktrq3u7O2it7y5g0+2sUgSV/tJjt86WSC7bRrI7JIbo3C6dDaaFdWlxpsPlXsllfIL+6FvpF3oMFtDZXck1jNd2movBD9k0yTWLfThraeji9ElxMbuaS2uYI55dBurKeI2E1ra6igv5B5cdleXy/brGzlGbyOSS6024vdNtkeGuVwhWSckk6iVOUMTTcWoSpyagrKbqfv6qqYn2TpUoShCNeEpVJZKEEo2hFQnapStGEJKjKpF0alN037PlmoUoSj7Wc6mGp03W55UsJCfN694m0nwzoPinxN4r1z/hHPDHhbw9H4p8YXxmtdO0TwxpNvYalqHim8uvEd5baXcQ2Ol6bDJ4g1iaRbDWtOs4odRiMR1C3sh+fnhzVbL4k3XjD9uP4wQ6jpPw98F6f448OfszfDu/0xLbxJY+GtLu5vA+sfFP4i6Vqun+JotR8ceNPH7eKv+FYaj4YvpvhrY/Bfx74BvNe8ITeIraTXNO9S/aBsb34sfEz4Vfs6WkZj+Ht1d+Gfib8fks9Y1yyOneALHWzP8MPh7rei/ZtJ0S88AfH7WvAvxD+DvjjwRrEo0rxl4LTXvDfiHQfElhrWr6bHW/bUEsH7N2t/DTwhoken+I/idrvw++HHw28EW99N4cm1PVrXXvDd7q/gzwhaaNGnlpo3w38DeK/Etrf6d5FnaaZpcwsCYvPWPOEeeNWcYVI2dNTpey5pSd6VVKhU9nRnVaVSo+fndXBulKGLjzSdSpr7SdGnQ6RcJJ0pyWFaVFwqpzgo1MLhZ/uakKV7Y6ap1YKr7KnTxM/gn9ib9ofx1c3Pw38XftM6d4N+E3gn4N/sX/Cv4n+EvElrqWoz3eueCP2j/AUOt6FpGqaZb674mj8WftBfC3w38HNI8O/ElPD2mHRfGes+NI734Z+HPEFrK3/AAjX7NP4o1W58Y6X4Wt9A1+4tX0Hwv4p1HxbeS2UPhrS31T/AISfT4LC6064bQtdvNWub7RLFRpsGnQ29tcahZ6tPaac+n3VrefBOt/sy/B7xx+0Z4K+Hvj/AMPS+K/DnwT+Gvwsg8G+G49e8T+CvCGueIPBmlS/8IzD448IeEJ4/DnxJ0Wwt9Le7i0fxzba3puiWjz2DaNcaBNNbap+h9xFLZ7/ACm0vT4NHu7eQLDe3UtjpkEdjY7JZ7N5YbTw9pOl6JDfCaOGfS01ZrfdG1lDrl7p96Rpp+09nCPtfq1NRg4yqU+aNJwi5UoVJJQqwVOEcPKnF2rUK9dVmubETU9moeyp2fuShT9tHEVXy04VXFc1PnrQpKnKWE9tVjhvb+wtVnicLHETqaKTtaS20ky6qlhbT3893Nc2iWNvFJBpb3EmpSjTGtkmtdTFzd3k0Go2t3D/AGpKWYaXqdhbWj29DlYfZrMvdyy22jadFdPf6lbXNyyRJtsdRNvBe6iZP7YZtSWXUZLtmuJ9JeMtciNZhklZvtGi/ZtMNpJa32tzrosdzPDCr2+lTwaeSJrP7Elg0M1st8+mQNYWOvXsK2msXy/ajrO7pMazfZr1dt1Ati0Gm6hJcWt9K9hLMjLcQahF59xdLrUVtaajdyNcx25jj0tEt3uIbmUaTTUKj5bUuSMU6k6yqOS5+Rexc1Tk3JSq/WIValKXvK08THE+2KkpRqRlL2rddKalGnJU5+1cJznCdKMFLDe0540edYyHIoyniqdSnThS+MvjD4C+LGhfEuT9oL4H+HvC/j/xJqngDwh8I/iz4B+I0Vl4Cb4h/CbRLjxhr/hDVNN+KN/bazpvgLVfh/4k+JXxK8TeJtBv/hpryeNorrSPCl7oXgqzhtfGF/F8NPhh8U/Gfiu0+N37Rc2i+HPEmkHUdA+DvwC8J69J4+8FfAxZ9Pi8Ot8Q/wDhL30gWPxF+NutaNP4m17w14w0PwF8LW8FfDL4oa78I7nTPEOnaPf+NtV+rtWie4u7qzt7i7T7PfWQgnFxHftpt9cXcE013ZX1ze2raNqjReJmsptFv70G/wDDk1pH4etLm1gvNGuq93AzWM8LjUdOtb+40SxlsbuzsbbR4rHU9WtrOPRbG0Au7NLmIX0R1Ke6tbyDWxql1pk/2lbRNP8ADOs4czlKfv8APTpOh/ssak4Q/wBmVP4KdX2qipQaoUqc6kpU8Xh3Tjh3QhUnek6bhTc5VXepealJOdBRoutGkpKF1RhUqwlPGUfrNHDYfEQgq+GqfMKzxR/tf6tfSXMmn6trnwcj/sbXbjT2vbV10PT7O9v4tL0mW3GpW1rENfOpXNg19t1K8toUlubW40p7DXfqCRdOtNRtraC2trS0sb/TLPT4bWxury7H2qxMVtp8UUsNte6XJaafq2s3FnZaDI9t4W0WwvdUvillqEunWfzH41kh0v8AbT/Zzuord49b8W/An9pbUNTNtZxPFrUng+9+A1lFNaxw+ILxIiw1uxeGxkeUT2r2CHWY7i0uIpfql5tSlkWe2upJ0iu7e+V7QXBgt4LfSrKQ28emWkkyX2meI7VNXS2uheavHpl/caa9rYXeqQzvZYSSgnSiqVTkVWLc+TE03VqKlDmUKdGpVkqcKjxM6M50JyqxxKy3C0sPVpU2ScajaUko1fYOVqNlKckqtNw9n9YpVuZR9lBSpUliOd4JfWKmGxFGrlSvpt5cabb3Oq2lzbXjXEjSz/b0s73SLfT7y5g1aC4vXaFNSijt0h0rVLXUJLjUdLsdS1n7Zqdvb3EOm7uiy2UmpidbmNryS0aO432McdzdS3hS/wBPN5dzWVlf2mtnQ7a1udS0GeOJbe2aza1srezskZ4g18twi2l3qchuJNUktrs3Ed1ZfaJopYE0u4trm3jLT27abd6vJb40pdJ1GOHQkvksby4jfc0uExSN5FvJaWgtdOht7UfZxY2Nraw3NudGtbWy1Ke0t77TrtJHvrqG0jglt57PT4ri9TT0axdXlvXc3Km7NxpOnCm+Zum9ZxpqMqkfbTp1J0rxr+zrUP3dLCw5VGVOEpKlB+1crzmqsaspRqP2cnKq6lVVqrhSh9dnCs6tNrDYdy9hGlSr5dzC15rl/pLuVMukw6h9oUzpvT7TdQ2NrcRQTwErY3fnXYu7GbT76eMWVpJchbWaW95y3K3WneHUtnvrU654g1nTCzatqbG2ktrHWZL67c2N1pr3r6hH4evJENy5utN1TV/7XsL2K40+FJiitYxisRTpxSjCWW4jESjBKCnXWX1Gqs+W3NNJcl5XfspTo/wqk4Szrf7xiqK0hTll9OFvdmoVctymtP8Aeq1VylUxOIlzubmvrFeKko1ail4d4i+HVn4q/aY/Zp+NE+q3ttLonw0/ab8D3fhmO209rLxDF8ULz4M6zBfa3ex2sDXI8IWHwtOi6PCLNbye38QTS3GqKtteW+s+3W2oQ3tvperNaB1tPBWjeM4bW6kSQLdJHqMkUPm2lvp/mGO3vr+KJbmK40uzujp+oaVo+mzWDpeFFeosDhV9agqXuqrSpr36l1GOY5lTjaXPzKUIUKXJNNThKHPGSnKUnph6k684e1k5uNbKqMZO3PClicz4fw1aEKitOClRrSScZJwlChVpuNXC4adK+80P9pnRo45zbHxfeaBsu7tryOFNQ8EJ4pupbF5Il1DToktmvdKsLKy1GGLT/trTQsdPt7fRY9y0c2+qnSbcs00GnSRwXd0IWght7KXTZhDFp1jBp1vD5kerpbs1u0O6LTrLzVmMYKlFeZj4xw9bKqdFckMTgI4ivG7lGrW/s7FVXOSk5bzwtBuKtFqHK48s5qUUf306eFlpQdbH03TpfuFyUMsxuJopOj7OS9niKUK8GmpRrJ1U+eU5S//Z"/>
                        <?php }
                        ?>
                    </center>
                </td>
                <td width="90" colspan="2">
                    <center>
                        <img width="65" height="65" src="data:image/jpeg;base64,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"/>
                    </center>
                </td>
                <td width="90" colspan="2">
                    <center>
                        <img width="65" height="65" src="data:image/png;base64,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"/>
                    </center>
                </td>
                <td width="90">
                </td>
            </tr>
            <tr>
                <td width="40">
                    <hr class="ttd1">
                </td>
                <td width="5">
                </td>
                <td width="40">
                    <hr class="ttd1">
                </td>
                <td width="5">
                </td>
                <td width="40">
                    <hr class="ttd1">
                </td>
                <td width="5">
                </td>
                <td width="30">
                    <hr class="ttd1">
                </td>
            </tr>
            <tr>
                <td width="70" colspan="2">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;"><?php if ($user == 'reny') {
                        echo "Ulfa";
                    }else {
                        echo ucwords($user);
                    } ?> </p>
                </td>
                <td width="70" colspan="2">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Reny Hariyati </p>
                </td>
                <td width="70" colspan="2">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">Yohanes Yoelianto</p>
                </td>
                <td width="70">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: center;">(<?= $kod_sup ?>) <?= $nama_sup ?> </p>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: left;">* Billing Address: </p>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <p class="s5" style="padding-top: 3pt;text-indent: 0pt;text-align: left;">* Penagihan harap melampirkan PO. PT Baramuda Bahari: </p>
                </td>
            </tr>
        </table>
    </body>
</html>