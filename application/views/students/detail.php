<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <div class="card mt-3 mb-5 ml-4" style="width: 22rem;">
                    <div class="card-header">
                        <h5>Detail Data Mahasiswa</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?=$mahasiswa['nama'];?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['nrp'];?></h6>
                        <p class="card-text"><?= $mahasiswa['email'];?></p>
                        <p class="card-text"><?= $mahasiswa['jurusan'];?></p><br>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url();?>students" class="btn fourth float-right">Back</a>
                    </div>
                </div>
            </div>
			<div class="col-md-7">
				<img width="590" src="<?= base_url();?>assets/img/detail.svg" alt="">
			</div>
        </div>
    </div>
</section>
