<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">ENHAS Running Text</li>
        <!-- Breadcrumb Menu-->

    </ol>
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
    <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>ENHAS Running Text
                </div>
                <div class="card-body text-center">
                    <?php foreach ($runtext as $item) : ?>
                    <nav>
                        <div class="informasi ">
                            <div class="row">
                                <div class="inform col-md-12 col-sm-12">
                                    <p class="font-weight-bold"><?php echo $item['isi_rtext']?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <a href="javascript:;" data-id="<?php echo $item['id_rtext']?>"
                        data-isi="<?php echo $item['isi_rtext']?>" class="btn-lg btn-info w-50" type="button"
                        data-toggle="modal" data-target="#edit-modal-rtext"><i class="fa fa-edit"></i> Edit Running Text</a>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->

    <!--Edit Info Modal-->
    <div class="modal fade" id="edit-modal-rtext" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <?php echo form_open_multipart('adminpanel/editrtext');?>
                    <input type="hidden" class="form-control" id="edit_id_rtext" name="edit_id_rtext"
                        value="<?= $item['id_rtext']?>">
                    <div class="form-group">
                        <label for="editrtext" class="col-form-label">Input Running Text</label>
                        <textarea type="text" class="form-control" id="editrtext" name="editrtext"
                             placeholder="Inputkan Running Text"><?= $item['isi_rtext']?></textarea>
                        <div class="invalid-feedback">
                            Inputkan Running Text!
                        </div>
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
<script src="<?php echo base_url();?>assets/admin/vendors/jquery/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/vendors/popper.js/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/vendors/bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $('#edit-modal-rtext').on('show.bs.modal', function(event) {
        var div = $(event.relatedTarget)
        var modal = $(this)

        modal.find('#edit_id_rtext').attr("value", div.data('id'));
        modal.find('#editrtext').attr("value", div.data('isi'));
       
    });
});
</script>