<?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment;filename=Laporan Data Penduduk Desa Detusoko Barat.xls');
?>

<html>
	<body>
        <center>
            <h4>Laporan Data Penduduk Desa Detusoko Barat</h4>
        </center>
			<table border="1">
				<thead>
					<tr>
						<th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No.KK</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">T.Lahir</th>
                        <th scope="col">Tgl Lahir</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">RT/RW</th>
                        <th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach($tampil as $sm): ?>
					<tr>
						<td scope="row"><?= $no ?></td>
                        <td><?= $sm['nama'] ?></td>
                        <td><?= $sm['no_kk'] ?></td>
                        <td><?= $sm['nik'] ?></td>
                        <td><?= $sm['jk'] ?></td>
                        <td><?= $sm['tempatla'] ?></td>
                        <td><?= $sm['tglah'] ?></td>
                        <td><?= $sm['agama'] ?></td>
                        <td><?= $sm['pend'] ?></td>
                        <td><?= $sm['pekerjaan'] ?></td>
                        <td><?= $sm['rtw'] ?></td>
                        <td><?= $sm['status'] ?></td>
					</tr>
					<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
	</body>
</html>
