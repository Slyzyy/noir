<?php
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Daftar Masukan');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$i = 0;
$html = '<h3>Laporan Masukan User</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="15%" align="center">Id Contact</th>
                            <th width="26.66%" align="center">Nama User</th>
                            <th width="26.66%" align="center">Email User</th>
                            <th width="26.66%" align="center">Masukan User</th>
                        </tr>';
foreach ($contact as $row) {
    $i++;
    $html .= '<tr bgcolor="#ffffff">
                            <td align="center">' . $i . '</td>
                            <td align="center">' . $row['id_contact'] . '</td>
                            <td>' . $row['nama'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['pesan'] . '</td>
                        </tr>';
}
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('daftar_produk.pdf', 'I');
