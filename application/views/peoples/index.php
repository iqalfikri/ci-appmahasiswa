<section class="herobwa mt-3">
    <div class="container">
        <?php if($this->session->flashdata('flash-peoples') ):?>
        <div class="row">
            <div class="col-lg-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Peoples data <strong>success</strong> <?= $this->session->flashdata('flash-peoples');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php endif;?>
        <h3>List of Peoples</h3>
        <div class="row">
            <div class="col-md-2">
                <a href="<?= base_url();?>peoples/add" type="button" class="btn third insertDataButton mb-4">
                    Insert Data
                </a>
            </div>
            <div class="col-md-5 offset-md-3">
                <!-- search -->
                <form action="<?= base_url('peoples');?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="keyword" id="keyword"
                            autocomplete="off">
                        <div class="input-group-append">
                            <input class="btn third" type="submit" id="searchButton" name="submit" value="Search">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($peoples)):?>
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-danger" role="alert">
                                    Sorry, Data not found!.
                                </div>
                            </td>
                        </tr>
                        <?php endif;?>
                        <?php foreach($peoples as $row) :?>
                        <tr>
                            <th><?= ++$start;?></th>
                            <td><?= $row['name'];?></td>
                            <td><?= $row['email'];?></td>
                            <td>
                                <a href="<?= base_url();?>peoples/detail/<?= $row['id'];?>" class="badge badge-warning ">detail</a>
                                <a href="<?= base_url();?>peoples/edit/<?= $row['id'];?>"
                                    class="badge badge-success ">edit</a>
                                <a href="<?= base_url();?>peoples/delete/<?= $row['id'];?>"
                                    class="badge badge-danger delete-peoples">delete</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <p>Results : <?= $total_rows;?></p>
                <?= $this->pagination->create_links();?>
            </div>
        </div>
    </div>
</section>

