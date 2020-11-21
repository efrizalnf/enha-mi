<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Direktori Guru</li>
        <!-- Breadcrumb Menu-->
    </ol>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>Input Guru
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputEnhasModal"><i
                            class="fa fa-plus"></i>&nbsp; Input
                        Data</button>
                    <table class="table table-responsive-sm table-bordered table-striped table-sm mt-3">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIP/NUPTK</th>
                                <th>Nama guru</th>
                                <th>Mapel</th>
                                <th>Upload File</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no=1; 
                            foreach ($guru as $gurumapel) :?>
                            <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $gurumapel['nip']?></td>
                                <td><?php echo $gurumapel['nama_guru']?></td>
                                <td><?php echo $gurumapel['mapel_ampu']?></td>
                                <td><?php echo $gurumapel['foto_guru']?></td>
                                <td>
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
    <!-- Modal -->
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
                            placeholder="Inputkan NIP atau NUPTK">
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="inputNama" name="nama_guru"
                            placeholder="Inputkan Nama dan Gelar">
                    </div>
                    <div class="form-group">
                        <label for="inputMapel">Mapel Ampu</label>
                        <input type="text" class="form-control" id="inputMapel" name="mapel_ampu"
                            placeholder="Inputkan Mata Pelajaran yang di ampu">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <!-- </form> -->
                    <?php echo form_close(); ?>
                </div>

            </div>
        </div>
    </div>
</main>