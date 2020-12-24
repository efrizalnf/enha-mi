<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Input Informasi</li>
        <!-- Breadcrumb Menu-->

    </ol>
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
    <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>Input Informasi
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputEnhasModal"><i
                            class="fa fa-plus"></i>&nbsp; Input
                        Informasi</button>
                    <table class="table table-hover table-responsive-sm table-bordered table-striped table-sm mt-3">
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Judul Informasi</th>
                                <th>Isi Informasi</th>
                                <th>Tanggal Posting</th>
                                <th>Gambar Informasi</th>
                                <th>Edit/Hapus Data</th>
                            </tr>
                        </thead>

                        <tbody class="align-middle" style="height: 100px;">
                            <?php $no=1; 
                                foreach ($info as $item) :?>
                            <tr valign="middle">
                                <td class="align-middle text-center"><?php echo $no++?></td>
                                <td class="align-middle text-center"><?php echo $item['judul_info']?></td>
                                <td class="align-middle"><?php echo $item['isi_info']?></td>
                                <td class="align-middle text-center"><?php echo $item['tgl_info']?></td>
                                <td class="align-middle"> <img class="rounded border border-light mx-auto d-block m-3"
                                        src="<?php echo base_url() . 'assets/landing/img/info/'.$item['gbr_info'];?>"
                                        width="60" height="60" id="previmg" name="previmg"
                                        value="<?php echo $item['gbr_info']?>"></td>
                                <td class="td-actions text-center align-middle">
                                    <a href="javascript:;" data-id="<?php echo $item['id_info']?>"
                                        data-judul="<?php echo $item['judul_info']?>"
                                        data-isi="<?php echo $item['isi_info'] ?>"
                                       
                                        data-foto="<?php echo $item['gbr_info'] ?>" class="btn btn-info" type="button"
                                        data-toggle="modal" data-target="#edit-modal-info"><i class="fa fa-edit"></i></a>
                                    <button href="<?php base_url()?>deleteinfo/<?php echo $item['id_info'];?>"
                                        class="btn btn-danger m-1 btn-hapus"><i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
    <!-- Input Info Modal -->
    <div class="modal fade" id="inputEnhasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <?php echo form_open_multipart('adminpanel/inputinfo');?>

                    <div class="form-group">
                        <label for="judulinfo">Judul Informasi</label>
                        <input type="text" class="form-control" id="judulinfo" name="judulinfo"
                            placeholder="Inputkan Judul Informasi" required>
                        <div class="invalid-feedback">
                            Inputkan Judul Informasi!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isiinfo">Konten Informasi</label>
                        <input type="text" class="form-control" id="isiinfo" name="isiinfo"
                            placeholder="Inputkan Isi Informasi" required>
                        <div class="invalid-feedback">
                            Inputkan Isi Informasi!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tglinfo">Tanggal Posting Informasi</label>
                        <input type="datetime-local" class="form-control w-50" id="tglinfo" name="tglinfo" required>
                        <!-- <div class="invalid-feedback">
                                Inputkan Tanggal Posting Informasi!
                            </div> -->
                    </div>
                    <label for="gbrinfo">Upload Gambar</label>
                    <div class="custom-file mb-3">
                        <!-- <label class="custom-file-label" for="uploadFoto">Pilih foto...</label> -->
                        <input type="file" class="form-control" id="gbrinfo" name="gbrinfo">

                    </div>
                    <div class="modal-footer w-100">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="inputinfo">Simpan</button>
                    </div>
                    <!-- </form> -->
                    <?php echo form_close(); ?>

                </div>

            </div>
        </div>
    </div>
    <!-- End Input Info Modal -->

    <!--Edit Info Modal-->
    <div class="modal fade" id="edit-modal-info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <?php echo form_open_multipart('adminpanel/editinfo');?>
                    <input type="hidden" class="form-control" id="edit_id_info" name="edit_id_info"
                        value="<?= $item['id_info']?>">
                    <div class="form-group">
                        <label for="editjudul">NIP/NUPTK</label>
                        <input type="text" class="form-control" id="editjudul" name="editjudul"
                            value="<?= $item['judul_info']?>" placeholder="Inputkan Judul Informasi">
                        <div class="invalid-feedback">
                            Inputkan Judul Informasi!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editisi">Konten Informasi</label>
                        <input type="text" class="form-control" id="editisi" name="editisi"
                            value="<?= $item['isi_info']?>" placeholder="Inputkan Isi Informasi">
                        <div class="invalid-feedback">
                            Inputkan Isi Informasi!
                        </div>
                    </div>
                    <label for="editgbrinfo">Upload Gambar</label>
                    <div class="custom-file mb-3">
                        <input type="file" class="form-control" id="editgbrinfo" name="editgbrinfo">

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
    $('#edit-modal-info').on('show.bs.modal', function(event) {
        var div = $(event.relatedTarget) 
        var modal = $(this)

        modal.find('#edit_id_info').attr("value", div.data('id'));
        modal.find('#editjudul').attr("value", div.data('judul'));
        modal.find('#editisi').attr("value", div.data('isi'));
        modal.find('#editgbrinfo').attr("value", div.data('foto'));
    });
});
</script>