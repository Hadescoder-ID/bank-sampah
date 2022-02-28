 <div class="container mt-3">
     <div class="row">
         <div class="col-sm-12">
             <?php
                Flasher::Message();
                ?>
         </div>
     </div>

     <div class="row">
         <div class="col-sm-12">

             <h1>Data Produk</h1>
             <br>
             <br>

             <div class="container">
                 <div class="row">
                     <div class="col-sm">
                         <button type="button" class="btn btn-primary btnTambahDatapro" data-toggle="modal" data-target="#exampleModal" data-zurl="<?= BASEURL; ?>">
                             Tambah Data Produk
                         </button>
                     </div>

                     <div class="col-sm">
                         <form action="<?= BASEURL; ?>/Admin/cariProduk" method="post">
                             <div class="input-group mb-3">
                                 <input type="text" class="form-control" autocomplete="off" placeholder="masukkan tanggal transaksi atau nama kurir" name="keyword" id="keyword" aria-label="" aria-describedby="button-addon2">
                                 <div class="input-group-append">
                                     <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                                 </div>
                             </div>
                         </form>

                     </div>
                 </div>
             </div>


             <table class="table table-stripped">
                 <thead>
                     <tr align="center">

                         <th scope="col">No</th>
                         <th scope="col">Nama produk </th>
                         <th scope="col">Harga Produk</th>
                         <th scope="col">Bahan</th>
                         <th scope="col">gambar</th>
                         <!--<th scope="col">Keterangan</th>-->
                         <th scope="col" width="200px">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        $no = 1;
                        foreach ($data['produk'] as $produk) : ?>
                         <tr>
                             <td><?= $no++; ?></td>
                             <td><?= $produk['nama_produk']; ?></td>
                             <td align="right"><?= "Rp. ".number_format($produk['harga_produk'],0,".",".").",-"; ?></td>
                             <td><?= $produk['bahan']; ?></td>
                             <td><img src="<?= BASEURL; ?>/img/produk/<?= $produk['gambar']; ?>" width="70px"></td>
                             <td>
                                 <a href="<?= BASEURL; ?>/Admin/update_produk/<?= $produk['id'] ?>" class="badge badge-primary badge-pill tampilModalUbahproduk" data-toggle="modal" data-target="#exampleModal" data-id="<?= $produk['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
                                 <a href="<?= BASEURL; ?>/Admin/hapus_produk/<?= $produk['id'] ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
                             </td>
                         </tr>
                     <?php endforeach; ?>
                 </tbody>
             </table>

         </div>
     </div>

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form action="<?= BASEURL; ?>/Admin/simpanproduk" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="id" id="id">
                     <input type="hidden" name="gambarold" id="gambarold">
                         <div class="form-group">
                             <label for="nama_produk">Nama produk</label>
                             <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan nama_produk" required="true">
                         </div>
                         <div class="form-group">
                             <label for="harga_produk">Harga Produk</label>
                             <input type="text" name="harga_produk" id="harga_produk" class="form-control" placeholder="Masukkan harga_produk" required="true">
                         </div>
                         <div class="form-group">
                             <label for="bahan">bahan</label>
                             <input type="text" name="bahan" id="bahan" class="form-control" placeholder="Masukkan bahan" required="true">
                         </div>
                         <div class="form-group">
                             <label for="gambar">Masukkan Gambar :</label>
                             <img src="" id="imgview" width="40px" height="40px">
                             <input type="file" name="gambar" class="form-control" id="gambar">

                         </div>

                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                     </form>
                     <?php



                        ?>
                 </div>
             </div>
         </div>
     </div>