<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">ENHAS Gambar Cover</li>
        <!-- Breadcrumb Menu-->

    </ol>
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
    <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>ENHAS Gambar Cover
                </div>
                <div class="card-body">
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputEnhasModal"><i
                            class="fa fa-plus"></i>&nbsp; Input Cover</button>
                            <br> -->
                            <small>*Silahkan upload 4 foto yang akan tampil pada Slide utama Halaman Web (Rekomendasi ukuran 1046x500px)</small>
                    <table class="table tb table-hover table-responsive-sm table-bordered table-striped table-sm mt-3">
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Gambar Cover</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Edit</th>
                            </tr>
                        </thead>

                        <tbody class="align-middle" style="height: 100px;">
                            <?php $no=1; 
                                foreach ($cover as $item) :?>
                            <tr valign="middle">
                                <td class="align-middle text-center"><?php echo $no++?></td>
                                <td class="align-middle text-center"> <img class="rounded border border-light mx-auto d-block m-3"
                                        src="<?php echo base_url() . 'assets/landing/img/'.$item['img_cover'];?>"
                                        width="130" height="80" id="previmg" name="previmg"
                                        value="<?php echo $item['img_cover']?>"></td>
                                <td class="align-middle text-center"><?php echo $item['txt_title']?></td>
                                <td class="align-middle"><?php echo $item['txt_desc']?></td>
                                <td class="td-actions text-center align-middle">
                                    <a href="javascript:;" data-id="<?php echo $item['id_carrousel']?>"
                                        data-cover="<?php echo $item['img_cover']?>"
                                        data-title="<?php echo $item['txt_title'] ?>"
                                        data-desc="<?php echo $item['txt_desc'] ?>" class="btn-lg btn-info" type="button"
                                        data-toggle="modal" data-target="#edit-modal-cover"><i
                                            class="fa fa-edit"></i></a>
                                    <!-- <button href="<?php base_url()?>deletecover/<?php echo $item['id_carrousel'];?>"
                                        class="btn btn-danger m-1 btn-hapus"><i class="fa fa-trash"></i>
                                    </button> -->
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
  
    <!--Edit Info Modal-->
    <div class="modal fade" id="edit-modal-cover" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('adminpanel/editcover');?>
                    <input type="hidden" class="form-control" id="edit_id_cover" name="edit_id_cover"
                        value="<?= $item['id_carrousel']?>">
                    <div class="form-group">
                        <label for="editjudulcover">Judul Cover</label>
                        <input type="text" class="form-control" id="editjudulcover" name="editjudulcover"
                            value="<?= $item['txt_title']?>" placeholder="Inputkan Judul Cover">
                        <div class="invalid-feedback">
                            Inputkan Judul Cover!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editdesccover">Deskripsi Cover</label>
                        <input type="text" class="form-control" id="editdesccover" name="editdesccover"
                            value="<?= $item['txt_desc']?>" placeholder="Inputkan Deskripsi Cover">
                        <div class="invalid-feedback">
                            Inputkan Deskripsi Cover!
                        </div>
                    </div>
                    <label for="editimgcover">Upload Gambar Cover</label>
                    <div class="custom-file mb-3">
                        <input type="file" class="form-control" id="editimgcover" name="editimgcover">

                    </div>
                    <div class="modal-footer w-100">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="editdatainfo">Edit</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>