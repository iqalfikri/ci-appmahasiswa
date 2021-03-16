<section class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Edit Data Peoples</h5>
                    </div>
                    <div class="card-body">
					<!-- <?php if(validation_errors() ) :?>
                        <div class="alert alert-danger" role="alert">
							<?= validation_errors();?>
                        </div>
					<?php endif; ?> -->
                        <form action="" method="post">
						<input type="hidden" name="id" value="<?= $peoples['id'];?>" id="id">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" autocomplete="off" value="<?=$peoples['name'];?>">
								<small class="form-text text-danger"><?= form_error('name');?></small>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" autocomplete="off" value="<?=$peoples['address'];?>">
								<small class="form-text text-danger"><?= form_error('address');?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                	autocomplete="off" value="<?=$peoples['email'];?>">
									<small class="form-text text-danger"><?= form_error('email');?></small>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="edit" class="btn fourth float-right ml-1">Save Changes</button>
                        <a href="<?= base_url();?>peoples" class="btn fifth float-right ml-1">Close</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col d-none d-sm-block ml-3 mt-5">
                <img width="500" src="<?= base_url();?>assets/img/update.svg" alt="">
            </div>
        </div>
    </div>
    </div>
</section>
