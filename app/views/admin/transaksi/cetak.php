<?php
//menyertakan file fpdf
include "../library/fpdf.php";


//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// menyetel font yang digunakan, font yang digunakan adalah arial, bold dengan ukuran 16
$pdf->SetFont('Arial','B',16);
// judul
$pdf->Cell(300,7,'Bank sampah "Pace Makmur"',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(300,7,'laporan transaksi',0,1,'C');
$pdf->Cell(300,7,'Jl. Druju, Donorojo, Kabupaten Pacitan, Jawa Timur 63554',0,1,'C');
$pdf->Cell(300,7,'',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10,'C');
$pdf->Cell(20,6,'no',1,0,'C');
$pdf->Cell(60,6,'Tanggal',1,0,'C');
$pdf->Cell(60,6,'Kategori',1,0,'C');
$pdf->Cell(60,6,'Jenis Sampah',1,0,'C');
$pdf->Cell(25,6,'Kurir',1,0,'C');
$pdf->Cell(25,6,'berat',1,0,'C');
$pdf->Cell(25,6,'total',1,1,'C');
//$pdf->Cell(25,6,'ALAMAT',1,1);
 
$pdf->SetFont('Arial','',10);
 
//koneksi ke database
$mysqli = new mysqli("localhost","root","mutiara","bank_sampah");
$no = 1;
$tampil = mysqli_query($mysqli, "SELECT tb_transaksi.id, tb_transaksi.tgl, tb_transaksi.berat, tb_transaksi.total, tb_kurir.nama_kurir, tb_kat_sampah.nama_kategori, tb_jenis_sampah.jenis_sampah 
		FROM tb_transaksi
		INNER JOIN tb_kurir ON tb_kurir.id = tb_transaksi.kurir
		INNER JOIN tb_kat_sampah ON tb_kat_sampah.id = tb_transaksi.kat
		INNER JOIN tb_jenis_sampah ON tb_jenis_sampah.id = tb_transaksi.jenis; ");
while ($hasil = mysqli_fetch_array($tampil)){
    $pdf->Cell(20,6,$no++,1,0,'C');
    $pdf->Cell(60,6,$hasil['tgl'],1,0);
    $pdf->Cell(60,6,$hasil['nama_kategori'],1,0);
    $pdf->Cell(60,6,$hasil['jenis_sampah'],1,0); 
    $pdf->Cell(25,6,$hasil['nama_kurir'],1,0);
    $pdf->Cell(25,6,$hasil['berat'],1,0);
    $pdf->Cell(25,6,'Rp.'.number_format($hasil['total']),1,1,'R');
    //$pdf->Cell(25,6,$hasil['alamat'],1,1);
}

 
$pdf->Output();


?>

