<section class="herobwa mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Form Ubah Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
						<input type="hidden" name="id" value="<?= $mahasiswa['id'];?>" id="id">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required value="<?=$mahasiswa['nama'];?>">
                            </div>
                            <div class="form-group">
                                <label for="nrp">NIM (Nomor Induk Mahasiswa)</label>
                                <input type="number" class="form-control" id="nrp" name="nrp" autocomplete="off"
                                    required value="<?=$mahasiswa['nrp'];?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" autocomplete="off" required value="<?=$mahasiswa['email'];?>">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan" required>
									<?php foreach($jurusan as $row) :?>
										<?php if($row == $mahasiswa['jurusan']): ?>
                                			<option value="<?= $row;?>"selected><?= $row;?></option>
										<?php else : ?>
											<option value="<?= $row;?>"><?= $row;?></option>
										<?php endif;?>
									<?php endforeach; ?>
                                </select>
                            </div>
                    </div>
                    <div class="card-footer">
					<button type="submit" name="edit" class="btn fourth float-right ml-1">Save Changes</button>
					<a href="<?= base_url();?>students" class="btn fifth float-right ml-1">Close</a>
                        </form>
                    </div>
                </div>
            </div>
			<div class="col d-none d-sm-block ml-3">
                <img width="520" src="<?= base_url();?>assets/img/edit.svg" alt="">
            </div>
        </div>
    </div>
    </div>
</section>
