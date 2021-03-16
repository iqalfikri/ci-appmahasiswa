//flash message
const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal({
		title: 'Data Mahasiswa ',
		text: 'Berhasil ' + flashData,
		type: 'success'
	});
}

//tombol hapus mahasiswa
$('.tombol-hapus').on('click', function (e) {
	
	//matikan dulu  aksi href nya(karena tidak sama dengan di browser)
	e.preventDefault();
	//ambil href nya
	const href = $(this).attr('href');

	Swal({
		title: 'Apakah anda yakin',
		text: "Data mahasiswa akan dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus Data! '
	  }).then((result) => {
			if (result.value) {
				//jika dipencet confirm arahkan ke href
				document.location.href = href;
			
			}
	  })

});

//tombol hapus delete
$('.delete-peoples').on('click', function (e) {
	
	//matikan dulu  aksi href nya(karena tidak sama dengan di browser)
	e.preventDefault();
	//ambil href nya
	const href = $(this).attr('href');

	Swal({
		title: 'Are You Sure?',
		text: "This data will be deleted",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, Delete Data!'
	  }).then((result) => {
			if (result.value) {
				//jika dipencet confirm arahkan ke href
				document.location.href = href;
			
			}
	  })

});
