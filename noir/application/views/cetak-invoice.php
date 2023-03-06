<?php
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Daftar Produk');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$i = 0;
$html = '<h3>Laporan Invoice</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="17%" align="center">Id Invoice</th>
                            <th width="19.25%" align="center">Nama Pembeli</th>
                            <th width="19.25%" align="center">Alamat Pembeli</th>
                            <th width="19.25%" align="center">Tanggal Pemesanan</th>
                            <th width="19.25%" align="center">Batas Pembayaran</th>
                        </tr>';
foreach ($produk as $row) {
    $i++;
    $html .= '<tr bgcolor="#ffffff">
                            <td align="center">' . $i . '</td>
                            <td align="center">' . $row['id'] . '</td>
                            <td>' . $row['nama'] . '</td>
                            <td>' . $row['alamat'] . '</td>
                            <td>' . $row['tgl_pesan'] . '</td>
                            <td>' . $row['batas_bayar'] . '</td>
                        </tr>';
}
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('daftar_produk.pdf', 'I');
