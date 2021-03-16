//buat agar script dijalankan ketika file sudah siap di load
$(function () {

    //label insert data modal
    $('.insertDataButton').on('click', function () {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Add Data');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
        
    });

    //label edit modal
    $('.viewEditModal').on('click', function () {

            //cari title dan ubah title nya
            $('#formModalLabel').html('Ubah Data Mahasiswa');
            //ubah tombolnya dengan css selector
            $('.modal-footer button[type=submit]').html('Save Changes');
            $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/students/edit');

            //ambil id nya
            const id = $(this).data('id');

            //jalankan ajaxnya
            $.ajax({
                    url: 'http://localhost/phpmvc/public/students/getedit',
                    data: {id : id},
                    method: 'post',
                    dataType: 'json',
                    //jika sukses jalankan sebuah function
                    success: function (data) {
                        //isikan data sesuai object
                        $('#nama').val(data.nama);
                        $('#nrp').val(data.nrp);
                        $('#email').val(data.email);
                        $('#jurusan').val(data.jurusan);
                        $('#id').val(data.id);
                    }
            });
    });
    
});