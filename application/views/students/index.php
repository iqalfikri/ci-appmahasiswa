<section class="herobwa mt-3">
    <div class="container">
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ; ?>"></div>
        <?php if($this->session->flashdata('flash') ):?>
        <!-- <div class="row">
            <div class="col-lg-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
        <?php endif;?>
        <div class="row ">
            <div class="col align-self-center">
                <!-- insert -->
                <button type="button" class="btn third insertDataButton mb-4" data-toggle="modal"
                    data-target="#formModal">
                    Insert Data
                </button>
                <!-- search -->
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="keyword" id="keyword"
                            autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn third" type="submit" id="searchButton">Search</button>
                        </div>
                    </div>
                </form>
                <h3>Daftar Mahasiswa</h3>
                <?php if(empty($mahasiswa)) :?>
					<div class="alert alert-danger" role="alert">
						Maaf, Data mahasiswa tidak ditemukan.
					</div>
                <?php endif;?>
                <ul class="list-group">
                    <?php foreach($mahasiswa as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama'];?>
                        <!-- delete-->
                        <a href="<?= base_url();?>students/delete/<?= $mhs['id'];?>"
                            class="badge badge-danger float-right ml-1 tombol-hapus">delete</a>
                        <!-- detail -->
                        <a href="<?= base_url();?>students/detail/<?= $mhs['id'];?>"
                            class="badge badge-primary float-right ml-1">detail</a>
                        <!-- edit -->
                        <a href="<?= base_url();?>students/edit/<?= $mhs['id'];?>"
                            class="badge badge-success float-right ml-1">edit</a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="d-none d-sm-block ml-5">
                <img width="400" src="<?= base_url();?>assets/img/content-4.svg" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Modal insert -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="titleInsertModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url();?>students/add" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
                        <!-- <small class="form-text text-danger"></small> -->
                    </div>
                    <div class="form-group">
                        <label for="nrp">NIM (Nomor Induk Mahasiswa)</label>
                        <input type="number" class="form-control" id="nrp" name="nrp" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                            autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan" required>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                            <option value="Teknik Pesawat Tempur">Teknik Pesawat Tempur</option>
                            <option value="Teknik Nuklir">Teknik Nuklir</option>
                            <option value="Manejemen Perang">Manejemen Perang</option>
                            <option value="Administrasi Tahanan">Administrasi Tahanan</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn fifth" data-dismiss="modal">Close</button>
                <button type="submit" class="btn fourth">Add Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
