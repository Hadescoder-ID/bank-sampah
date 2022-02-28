<div class="container mt-3">
	<div class="container" >
  

<h1 align="center">Produk Bank Sampah</h1>
	<table class="table table-stripped">
				<thead style="background: rgb(4, 111, 29,0.7);">
					<tr>
								<td align="center">No</td>
					            <td align="center">Nama Produk</td>
					            <td align="center">Harga Produk</td>
					            <td align="center">bahan</td>
					            <td align="center">Gambar</td>
					           <!-- <td align="center">keterangan</td>-->
					           
					           
					            
							
					</tr>
				</thead>
				<tbody style="background: rgb(108, 243, 140,0.7);">
					   <?php
                        $no = 1;
                        foreach ($data['produk'] as $produk) : ?>
                         <tr>
                             <td><?= $no++; ?></td>
                             <td><?= $produk['nama_produk']; ?></td>
                             <td align="right"><?= "Rp.".number_format($produk['harga_produk'],0,".",".").",-"; ?></td>
                             <td><?= $produk['bahan']; ?></td>
                             <td><img src="<?= BASEURL; ?>/img/produk/<?= $produk['gambar']; ?>" width="70px"></td>
                             
                         </tr>
                     <?php endforeach; ?>
				</tbody>
			</table>		


	</div>
	
</div>