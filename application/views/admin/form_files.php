<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Input Files</li>
        <!-- Breadcrumb Menu-->

    </ol>
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
    <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>Input File
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputEnhasModal"><i
                            class="fa fa-plus"></i>&nbsp; Input File</button>
                    <table class="table tb table-hover table-responsive-sm table-bordered table-striped table-sm mt-3">
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Nama File</th>
                                <th>File</th>
                                <th>Edit/Hapus File</th>
                            </tr>
                        </thead>

                        <tbody class="align-middle" style="height: 100px;">
                            <?php $no=1; 
                                foreach ($filedata as $item) :?>
                            <tr valign="middle">
                                <td class="align-middle text-center"><?php echo $no++?></td>
                                <td class="align-middle text-center"><?php echo $item['nama_file']?></td>
                                <td class="align-middle text-center"> <a
                                        href="<?php echo base_url()?>assets/landing/files/<?php echo $item['lokasi_file']?>"
                                        alt="filepdf" download>
                                        <i class="fa fa-file fa-2x" style="font-size:48px;color:green"></i></td>
                                <td class="td-actions text-center align-middle">
                                    <a href="javascript:;" data-id="<?php echo $item['id_files']?>"
                                        data-nama="<?php echo $item['nama_file']?>"
                                        data-lokasi="<?php echo $item['lokasi_file'] ?>"
                                        class="btn btn-info" type="button"
                                        data-toggle="modal" data-target="#edit-modal-file"><i class="fa fa-edit"></i></a>
                                    <button href="<?php base_url()?>deletefile/<?php echo $item['id_files'];?>"
                                        class="btn btn-danger m-1 btn-hapus"><i class="fa fa-trash"></i>
                                    </button>
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
    <!-- Input Guru Modal -->
    <div class="modal fade" id="inputEnhasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <?php echo form_open_multipart('adminpanel/inputfile');?>

                    <div class="form-group">
                        <label for="namafile">Nama File</label>
                        <input type="text" class="form-control" id="namafile" name="namafile"
                            placeholder="Inputkan Nama File" required>
                        <div class="invalid-feedback">
                            Inputkan Nama File!
                        </div>
                    </div>
                
                    <label for="lokasifile">Upload File</label>
                    <div class="custom-file mb-3">
                        <!-- <label class="custom-file-label" for="uploadFoto">Pilih foto...</label> -->
                        <input type="file" class="form-control" id="lokasifile" name="lokasifile">

                    </div>
                    <div class="modal-footer w-100">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="inputfile">Simpan</button>
                    </div>
                    <!-- </form> -->
                    <?php echo form_close(); ?>

                </div>

            </div>
        </div>
    </div>
    <!-- End Input Guru Modal -->

    <!--Edit Guru Modal-->
    <div class="modal fade" id="edit-modal-file" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('adminpanel/editfile');?>
                    <input type="hidden" class="form-control" id="edit_id_file" name="edit_id_file"
                        value="<?= $item['id_files']?>">
                    <div class="form-group">
                        <label for="editfile">Nama File</label>
                        <input type="text" class="form-control" id="editfile" name="editfile"
                            value="<?= $item['nama_file']?>" placeholder="Inputkan File">
                        <div class="invalid-feedback">
                            Inputkan File!
                        </div>
                    </div>
                    <label for="edtlokasifile">Upload File</label>
                    <div class="custom-file mb-3">
                        <input type="file" class="form-control" id="edtlokasifile" name="edtlokasifile"
                            value="<?=$item['lokasi_file']?>">

                    </div>
                    <div class="modal-footer w-100">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="editdatafile">Edit</button>
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
    $('#edit-modal-file').on('show.bs.modal', function(event) {
        var div = $(event.relatedTarget) 
        var modal = $(this)
      
        modal.find('#edit_id_file').attr("value", div.data('id'));
        modal.find('#editfile').attr("value", div.data('nama'));
        modal.find('#edtlokasifile').attr("value", div.data('lokasi'));
    });
});
</script>