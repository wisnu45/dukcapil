<?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment;filename=Laporan Data Pegawai Desa Detusoko Barat.xls');
?>

<html>
	<body>
        <center>
            <h4>Laporan Data Pegawai Desa Detusoko Barat</h4>
        </center>
			<table border="1">
				<thead>
					<tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Golongan</th>
                        <th scope="col">Jabatan</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach($tampil as $sm): ?>
					<tr>
                        <td scope="row"><?= $no ?></td>
                        <td><?= $sm['nama'] ?></td>
                        <td><?= $sm['nip'] ?></td>
                        <td><?= $sm['jk'] ?></td>
                        <td><?= $sm['golongan'] ?></td>
                        <td><?= $sm['jabatan'] ?></td>
					</tr>
					<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
	</body>
</html>
