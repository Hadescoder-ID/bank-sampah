let harga;
// $(document).ready(function () {
$(function () {

    $('.btnTambahDataKat').on('click', function () {
        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Tambah Data Kategori Sampah');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Admin/simpankatsampah');
    });

    $('.btnTambahDatavisi').on('click', function () {
        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Tambah Data Visi');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Admin/simpanvisi');
    });
       $('.btnTambahDatamisi').on('click', function () {
        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel1').html('Tambah Data Misi');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Admin/simpanmisi');
    });
     $('.btnTambahDataPortal').on('click', function () {
        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Tambah Data Berita');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Admin/simpanPortal');
    });
    $('.btnTambahDataJns').on('click', function () {
        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Tambah Data Jenis Sampah');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Admin/simpan_jenis_sampah');
    });
    $('.btnTambahDataKar').on('click', function () {
        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Tambah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Admin/simpan_karyawan');
    });

    $('.btnTambahDataKurir').on('click', function () {
        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Tambah Data Kurir');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Admin/simpan_kurir');
    });

    $('.btnTambahDataTrx').on('click', function () {
        var baseurl = $(this).data('zurl');
        $('#exampleModalLabel').html('Tambah Data Transaksi');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Admin/simpan_transaksi');
        
    });
    $('.btnTambahDataKTrx').on('click', function () {
        var baseurl = $(this).data('zurl');
        $('#exampleModalLabel').html('Tambah Data Transaksi');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Transaksi/simpan_transaksi');
        
    });
    /*$('.btnTambahDataPortal').on('click', function () {
        var baseurl = $(this).data('zurl');
        $('#exampleModalLabel').html('Tambah Data Portal');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Portal/simpantrx');
        
    });*/
    $('.btnTambahDatapro').on('click', function () {
        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Tambah Data Produk');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', baseurl + '/Admin/simpanproduk');
    });
    $('.tampilModalUbahkat').on('click', function () {

        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Ubah Data Kategori');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl + '/Admin/update_kat_sampah');
        const id = $(this).data('id');

        $.ajax({
            url: baseurl + '/Admin/getDataChangeKat',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);                                
                $('#id').val(data.id);
                $('#nama').val(data.nama_kategori);
            }
        });
    });
    $('.tampilModalUbahvisi').on('click', function () {

        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Ubah Data Visi');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl + '/Admin/update_visi');
        const id = $(this).data('id');

        $.ajax({
            url: baseurl + '/Admin/getDataChangeVisi',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);                                
                $('#id').val(data.id);
                $('#visi').val(data.visi);
            }
        });
    });
     $('.tampilModalUbahmisi').on('click', function () {

        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel1').html('Ubah Data Misi');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl + '/Admin/update_misi');
        const id = $(this).data('id');

        $.ajax({
            url: baseurl + '/Admin/getDataChangeMisi',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);                                
                $('#id').val(data.id);
                $('#misi').val(data.misi);
            }
        });
    });


    $('.tampilModalUbahPortal').on('click', function () {

        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Ubah Data Berita');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl + '/Admin/update_portal');
        const id = $(this).data('id');

        $.ajax({
            url: baseurl + '/Admin/getDataChangePortal',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);                                
                $('#id').val(data.id);
                $('#judul').val(data.judul);
                $('#isi').val(data.isi);
                $('#gambarold').val(data.gambar);
                $('#imgview').attr("src",'/banksampah/public/img/portal/'+data.gambar);
            }
        });
    });
     $('.tampilModalUbahkar').on('click', function () {

        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Ubah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl + '/Admin/update_karyawan');
        const id = $(this).data('id');
        // console.log(id);
        $.ajax({
            url: baseurl + '/Admin/getChangeKar',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);                                
                $('#id').val(data.id);
                $('#nama').val(data.nama_lengkap);
                $('#username').val(data.username);
                $('#password').val(data.password);
                $('#level ').val(data.level);
            }
        });
    });

    $('.tampilModalUbahJNs').on('click', function () {

        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Ubah Data Jenis');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl + '/Admin/update_jenis_sampah');
        const id = $(this).data('id');

        $.ajax({
            url: baseurl + '/Admin/getDataChangejns',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#id').val(data.id);
                $('#kat option[value="'+data.kategori+'"]').prop('selected',true);
                $('#jenis').val(data.jenis_sampah);
                $('#berat').val(data.berat_sampah);
                $('#beli').val(data.harga_beli);
            }
        });
    });
      $('.tampilModalUbahKur').on('click', function () {

        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Ubah Data Kurir');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl + '/Admin/update_kurir');
        const id = $(this).data('id');

        $.ajax({
            url: baseurl + '/Admin/getDataChangeKurir',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);                                
                $('#id').val(data.id);
                $('#nama_kurir').val(data.nama_kurir);
                $('#no_ktp').val(data.no_ktp);
            }
        });
    });


    $('.tampilModalUbahTrx').on('click', function () {

        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Ubah Data Transaksi');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl + '/Admin/update_transaksi');
        const id = $(this).data('id');

        $.ajax({
            url: baseurl + '/Admin/getDataChangeTrx',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#id').val(data.id);

                $('#kur option[value="'+data.kurir+'"]').prop('selected',true);
                $('#kur').val(data.kurir).change();
                $('#kur').val(data.kurir);

                $('#kat option[value="'+data.kat+'"]').prop('selected',true);
                $('#kat').val(data.kat).change();
                $('#kat').val(data.kat);

                $('#jns_smp option[value="'+data.jenis+'"]').prop('selected',true);
                $('#jns_smp').val(data.jenis).change();
                $('#jns_smp').val(data.jenis);

                $('#berat').val(data.berat);
                $('#total').val(data.total);

                //var total = parseInt(berat)*perseInt(jumlah);
                //$("#total").val(total);

            }
        });
    });
        $('.tampilModalKUbahTrx').on('click', function () {

        var baseurl = $(this).data('zurl');

        $('#exampleModalLabel').html('Ubah Data Transaksi');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl + '/Transaksi/update_transaksi');
        const id = $(this).data('id');

        $.ajax({
            url: baseurl + '/Transaksi/getDataChangeTrx',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#id').val(data.id);

                $('#kur option[value="'+data.kurir+'"]').prop('selected',true);
                $('#kur').val(data.kurir).change();
                $('#kur').val(data.kurir);

                $('#kat option[value="'+data.kat+'"]').prop('selected',true);
                $('#kat').val(data.kat).change();
                $('#kat').val(data.kat);

                $('#jns_smp option[value="'+data.jenis+'"]').prop('selected',true);
                $('#jns_smp').val(data.jenis).change();
                $('#jns_smp').val(data.jenis);

                $('#berat').val(data.berat);
                $('#total').val(data.total);

                //var total = parseInt(berat)*perseInt(jumlah);
                //$("#total").val(total);

            }
        });
    });
        $('.tampilModalUbahproduk').on('click', function () {

        var baseurl = $(this).data('zurl');
    
        $('#exampleModalLabel').html('Ubah Data Produk');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', baseurl + '/Admin/update_produk');
        const id = $(this).data('id');

        $.ajax({
            url: baseurl + '/Admin/getDataChangeProduk',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);                                
                $('#id').val(data.id);
                $('#nama_produk').val(data.nama_produk);
                $('#harga_produk').val(data.harga_produk);
                $('#bahan').val(data.bahan);
                $('#gambarold').val(data.gambar);
                $('#imgview').attr("src",'/banksampah/public/img/produk/'+data.gambar);
                
            }
        });
    });

    $('#jns_smp').on('change', function () {
        harga = $(this).find(':selected').data('harga')
    })


})

function hitung_total() {
    let total = document.getElementById("berat").value * harga;
    $('#total').val(total)
}