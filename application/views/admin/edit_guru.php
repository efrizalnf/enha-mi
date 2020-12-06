<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Direktori Guru</li>
        <!-- Breadcrumb Menu-->

    </ol>
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
    <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>Edit Guru
                </div>
                <div class="card-body">
                    <div class="row p-3">
                        <div class="col">
                            <?php echo form_open_multipart('adminpanel/updatedataguru');?>
                            <input type="hidden" class="form-control" id="id_guru" name="id_guru"  value="<?= $guru['id_guru']?>">
                            <div class="form-group">
                                <label for="inputNip">NIP/NUPTK</label>
                                <input type="text" class="form-control w-50" id="editnip" name="editnip"
                                    value="<?= $guru['nip']?>" placeholder="Inputkan NIP atau NUPTK">
                                <div class="invalid-feedback">
                                    Inputkan NIP/NUPTK!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNama">Nama Lengkap</label>
                                <input type="text" class="form-control w-50" id="editnamaguru" name="editnamaguru"
                                    value="<?= $guru['nama_guru']?>" placeholder="Inputkan Nama dan Gelar">
                                <div class="invalid-feedback">
                                    Inputkan Nama Lengkap!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputMapel">Mapel Ampu</label>
                                <input type="text" class="form-control w-50" id="editmapelampu" name="editmapelampu"
                                    value="<?= $guru['mapel_ampu']?>"
                                    placeholder="Inputkan Mata Pelajaran yang di ampu">
                                <div class="invalid-feedback">
                                    Inputkan Mapel yang di ampu!
                                </div>
                            </div>


                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="previmg">Foto saat ini</label>
                                <img class="rounded border border-light mx-auto d-block"
                                    src="<?php echo base_url() . 'assets/landing/img/fotoguru/' .  $guru['foto_guru'];?>"
                                    width="100" height="150" id="previmg" name="previmg">
                            </div>
                            <div class="custom-file">
                                <label for="uploadFoto">Upload Foto</label>
                                <!-- <label class="custom-file-label" for="uploadFoto">Pilih foto...</label> -->
                                <input type="file" class="form-control editfotoguru" id="editfotoguru"
                                    name="editfotoguru">
                            </div>
                        </div>
                        <div class="modal-footer mt-5 w-100">
                            <a href="<?= base_url('adminpanel/dataguru')?>" class="btn btn-secondary">Tutup</a>
                            <button type="submit" class="btn btn-primary" id="editdataguru">Edit</button>
                        </div>
                        <!-- </form> -->
                        <?php echo form_close(); ?>
                    </div>

                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
</main>