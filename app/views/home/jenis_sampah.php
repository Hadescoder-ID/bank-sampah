<div class="container mt-3">
	<h1 align="center">Jenis-Jenis Bank Sampah yang Diterima</h1>
<table class="table table-bordered table-dark">
				<thead>
					<tr align="center">
						<th scope="col">Kategori</th>
                        <th scope="col">Jenis Sampah</th>
                        <th scope="col">Jumlah Sampah(/kg)</th>
                        <th scope="col">harga (/kg)</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data['jns_smp'] as $mhs) :?>
						<tr style="background:rgba(39,253 ,6 ,0.2);">
							<td><?= $mhs['nama_kategori'];?></td>
                            <td><?= $mhs['jenis_sampah'];?></td>
                            <td><?= $mhs['berat_sampah'];?></td>
                            <td align="right"><?= "Rp.".number_format($mhs['harga_beli'],0,".",".").",-";?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>		
		</div>