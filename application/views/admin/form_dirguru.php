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
                        <i class="fa fa-align-justify"></i>Input Guru
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#inputEnhasModal"><i class="fa fa-plus"></i>&nbsp; Input
                            Data</button>
                        <table class="table table-hover table-responsive-sm table-bordered table-striped table-sm mt-3">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>NIP/NUPTK</th>
                                    <th>Nama guru</th>
                                    <th>Mapel</th>
                                    <th>Foto</th>
                                    <th>Edit/Hapus Data</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody class="align-middle" style="height: 100px;">
                                <?php $no=1; 
                                foreach ($guru as $gurumapel) :?>
                                <tr valign="middle">
                                    <td class="align-middle text-center"><?php echo $no++?></td>
                                    <td class="align-middle text-center"><?php echo $gurumapel['nip']?></td>
                                    <td class="align-middle"><?php echo $gurumapel['nama_guru']?></td>
                                    <td class="align-middle"><?php echo $gurumapel['mapel_ampu']?></td>
                                    <td class="align-middle"> <img
                                            class="rounded border border-light mx-auto d-block m-3"
                                            src="<?php echo base_url() . 'assets/landing/img/fotoguru/' .  $gurumapel['foto_guru'];?>"
                                            width="60" height="60" id="previmg" name="previmg"
                                            value="<?php echo $gurumapel['foto_guru']?>"></td>
                                    <td class="td-actions text-center align-middle">
                                        <a href="javascript:;" data-id="<?php echo $gurumapel['id'] ?>"
                                            data-editnip="<?php echo $gurumapel['nip'] ?>"
                                            data-editnamaguru="<?php echo $gurumapel['nama_guru'] ?>"
                                            data-editmapelampu="<?php echo $gurumapel['mapel_ampu'] ?>"
                                            data-editfotoguru="<?php echo $gurumapel['foto_guru'] ?>"
                                            data-toggle="modal" data-target="#edit-modal">
                                            <button data-toggle="modal" data-target="#edit-modal"
                                                class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                        <button href="<?php base_url()?>deleteguru/<?php echo $gurumapel['id'];?>"
                                            class="btn btn-danger m-1 btn-hapus"><i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                    <td class="td-actions text-center align-middle">
                                        <span class="badge badge-success">Active</span>
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
        <div class="modal fade" id="inputEnhasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Data Guru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php echo form_open_multipart('adminpanel/inputguru');?>

                        <div class="form-group">
                            <label for="inputNip">NIP/NUPTK</label>
                            <input type="text" class="form-control" id="inputNip" name="nip"
                                placeholder="Inputkan NIP atau NUPTK" required>
                            <div class="invalid-feedback">
                                Inputkan NIP/NUPTK!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="inputNama" name="nama_guru"
                                placeholder="Inputkan Nama dan Gelar" required>
                            <div class="invalid-feedback">
                                Inputkan Nama Lengkap!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputMapel">Mapel Ampu</label>
                            <input type="text" class="form-control" id="inputMapel" name="mapel_ampu"
                                placeholder="Inputkan Mata Pelajaran yang di ampu" required>
                            <div class="invalid-feedback">
                                Inputkan Mapel yang di ampu!
                            </div>
                        </div>

                        <!-- <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                <label class="custom-control-label" for="customControlValidation1">Check this custom
                                    checkbox</label>
                                <div class="invalid-feedback">Example invalid feedback text</div>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation2"
                                    name="radio-stacked" required>
                                <label class="custom-control-label" for="customControlValidation2">Toggle this custom
                                    radio</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" class="custom-control-input" id="customControlValidation3"
                                    name="radio-stacked" required>
                                <label class="custom-control-label" for="customControlValidation3">Or toggle this other
                                    custom radio</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>

                            <div class="form-group">
                                <select class="custom-select" required>
                                    <option value="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div> -->
                        <label for="uploadFoto">Upload Foto</label>
                        <div class="custom-file mb-3">
                            <!-- <label class="custom-file-label" for="uploadFoto">Pilih foto...</label> -->
                            <input type="file" class="form-control" id="uploadFoto" name="foto_guru">

                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" id="inputdataguru">Simpan</button>
                        </div>
                        <!-- </form> -->
                        <?php echo form_close(); ?>

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal Edit data -->

        <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Guru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open_multipart('adminpanel/editguru');?>
                        <input type="hidden" class="form-control" id="id" name="id"
                            value="<?php echo $gurumapel['id']?>">
                        <div class="form-group">
                            <label for="inputNip">NIP/NUPTK</label>
                            <input type="text" class="form-control" id="editnip" name="editnip"
                                placeholder="Inputkan NIP atau NUPTK" required>
                            <div class="invalid-feedback">
                                Inputkan NIP/NUPTK!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="editnamaguru" name="editnamaguru"
                                placeholder="Inputkan Nama dan Gelar" required>
                            <div class="invalid-feedback">
                                Inputkan Nama Lengkap!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputMapel">Mapel Ampu</label>
                            <input type="text" class="form-control" id="editmapelampu"
                                name="editmapelampu" placeholder="Inputkan Mata Pelajaran yang di ampu" required>
                            <div class="invalid-feedback">
                                Inputkan Mapel yang di ampu!
                            </div>
                        </div>
                        <label for="uploadFoto">Upload Foto</label>
                        <div class="custom-file mb-3">
                            <!-- <label class="custom-file-label" for="uploadFoto">Pilih foto...</label> -->
                            <input type="file" class="form-control editfotoguru" id="editfotoguru" name="editfotoguru">

                        </div>
                        <!-- <div class="form-group">
                            <label for="previmg">Foto saat ini</label>
                            <img class="rounded border border-light mx-auto d-block"
                                src="<?php echo base_url() . 'assets/landing/img/fotoguru/' .  $gurumapel['foto_guru'];?>"
                                width="100" height="150" id="previmg" name="previmg"
                                >
                        </div> -->
                        <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" id="editdataguru">Edit</button>
                        </div>
                        <!-- </form> -->
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
$(document).ready(function() {
    $('#edit-modal').on('show.bs.modal', function(event) {
        var div = $(event.relatedTarget); // Tombol dimana modal di tampilkan
        var modal = $(this);

        // Isi nilai pada field
        modal.find('#id').attr("value", div.data('-id'));
        modal.find('#editnip').attr("value", div.data('editnip'));
        modal.find('#editnamaguru').attr("value", div.data('editnamaguru'));
        modal.find('#editmapelampu').attr("value", div.data('editmapelampu'));
        modal.find('#editfotoguru').attr("value", div.data('editfotoguru'));
    });
});
    </script>