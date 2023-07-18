<?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment;filename=Laporan Data Kelahiran Penduduk Desa Detusoko Barat.xls');
?>

<html>
	<body>
        <center>
            <h4>Laporan Data Kelahiran Penduduk Desa Detusoko Barat</h4>
        </center>
			<table border="1">
				<thead>
					<tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Lahir</th>
                        <th scope="col">No.KK</th>
                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Nama Anak</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Anak Ke</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tgl Lahir</th>
                        <th scope="col">Thn Lahir</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach($tampil as $sm): ?>
					<tr>
                        <td scope="row"><?= $no ?></td>
                        <td><?= $sm['id'] ?></td>
                        <td><?= $sm['no_kk'] ?></td>
                        <td><?= $sm['nm_ayah'] ?></td>
                        <td><?= $sm['nm_ibu'] ?></td>
                        <td><?= $sm['nm_anak'] ?></td>
                        <td><?= $sm['jk'] ?></td>
                        <td><?= $sm['anak_ke'] ?></td>
                        <td><?= $sm['tmpt_lah'] ?></td>
                        <td><?= $sm['tgl_lah']?></td>
                        <td><?= $sm['tahun'] ?></td>
					</tr>
					<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
	</body>
</html>
