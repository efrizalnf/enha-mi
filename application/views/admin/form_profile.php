<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">ENHAS Profile</li>
        <!-- Breadcrumb Menu-->

    </ol>
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
    <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>Profil Sekolah
                </div>
                <div class="card-body">
                    <!-- <form
                        action="http://ard1.masnurulhuda.sch.id/proktor_madrasah/madrasah/update/146625b4f43fe5be5387134a1450b865"
                        method="post" enctype="multipart/form-data"> -->
                        <?= form_open_multipart('adminpanel/editprofile'); ?>
                        <div class="m-portlet__body">
                            <div class="row" style="padding: 20px">
                                <div class="col-md-4">
                                    <div style="border:1px #d2d6de solid;border-radius: 5px" align="center">
                                        <div class="" style="width: 90%">
                                        <input type="hidden" class="form-control" id="idskul" name="idskul"
                        value="<?= $profile->id_school?>">
                                            <label for="uploadlogo">Logo Madrasah</label>
                                            <div style="border:#d2d6de 1px solid; border-radius:10px; padding:10px;">
                                                <img class="img-responsive" width="100%"
                                                    src="<?= base_url('/assets/landing/img/').$profile->logo_sekolah?>"
                                                    alt="Logo Madrasah">
                                            </div>
                                            <br>
                                            <div>
                                                <div class="file-input file-input-new">
                                                    <div class="file-preview ">
                                                        <!-- <button type="button" class="close fileinput-remove">×</button> -->
                                                        <div class="file-drop-disabled">
                                                            <div class="file-preview-thumbnails">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="file-preview-status text-center text-success">
                                                            </div>
                                                            <div class="kv-fileinput-error file-error-message"
                                                                style="display: none;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kv-upload-progress kv-hidden" style="display: none;">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success progress-bar-success progress-bar-striped active"
                                                                role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100" style="width:0%;">
                                                                0%
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="input-group file-caption-main">
                                                        <input type="file" class="form-control" name="uploadlogo"
                                                            id="uploadlogo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <text style="font-size:8pt;">
                                            * Format logo .JPG/.PNG
                                        </text>
                                    </div>
                                </div>
                                <!-- batas col md4 -->
                                <div class="col-md-8"
                                    style="border: 1px #d2d6de solid; border-radius: 5px; padding: 25px 20px;">
                                    <div class="panel panel-success padding-md">
                                        <ul class="nav nav-tabs nav-fill" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab"
                                                    href="#school_identity">Identitas</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#school_location">Lokasi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#school_headmaster">Kepala
                                                    Madrasah</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="school_identity">
                                                <div class="padding-x-md">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Jenjang<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <select class="form-control" name="jenjang"
                                                                    value="<?php echo $profile->jenjang;?>" required>
                                                                    <?php if (!empty($profile->jenjang)) :?>
                                                                    <option><?php echo $profile->jenjang;?></option>
                                                                    <option value="">-- Jenjang --</option>
                                                                    <option>RA</option>
                                                                    <option>MI</option>
                                                                    <option>MTS</option>
                                                                    <option>MA</option>
                                                                    <?php endif;?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>NSM<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="nsm"
                                                                    placeholder="NSM"
                                                                    value="<?php echo $profile->nsm;?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>NPSN<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="npsn"
                                                                    value="<?php echo $profile->npsn;?>"
                                                                    placeholder="NPSN" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Madrasah<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control"
                                                                    name="namamadrasah" placeholder="Nama Madrasah"
                                                                    value="<?php echo $profile->nama_madrasah;?>"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Akreditasi<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <select class="form-control" name="akreditasi"
                                                                    value="<?php echo $profile->nilai_akreditasi;?>"
                                                                    required="">
                                                                    <?php if (!empty($profile->nilai_akreditasi)) :?>
                                                                    <option><?php echo $profile->nilai_akreditasi;?>
                                                                    </option>
                                                                    <option value="">-- Akreditasi --</option>
                                                                    <option>A</option>
                                                                    <option>B</option>
                                                                    <option>C</option>
                                                                    <option>TT</option>
                                                                    <?php endif;?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Status Sekolah</label>
                                                                <select class="form-control" name="statussekolah"
                                                                    value="<?php echo $profile->status_sekolah;?>"
                                                                    required>
                                                                    <?php if (!empty($profile->status_sekolah)) :?>
                                                                    <option><?php echo $profile->status_sekolah;?>
                                                                    </option>
                                                                    <option value="">-- Status --</option>
                                                                    <option value="negeri">Negeri</option>
                                                                    <option value="swasta">Swasta</option>
                                                                    <?php endif;?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="school_location">
                                                <div class="padding-x-md">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Provinsi<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="provinsi"
                                                                    value="<?php echo $profile->provinsi;?>"
                                                                    placeholder="Provinsi" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kab/Kota<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="kabkota"
                                                                    value="<?php echo $profile->kab_kota;?>"
                                                                    placeholder="Kab/Kota" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kecamatan<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="kecamatan"
                                                                    value="<?php echo $profile->kecamatan;?>"
                                                                    placeholder="Kecamatan" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kelurahan<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="kelurahan"
                                                                    value="<?php echo $profile->kelurahan;?>"
                                                                    placeholder="Kelurahan" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alamat<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <textarea class="form-control" name="alamat"
                                                                    placeholder="Alamat" rows="5"
                                                                    required><?php echo $profile->alamat_madrasah;?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <font color="red" size="4">*</font>
                                                                <label>Kodepos</label>
                                                                <input type="text" class="form-control" name="kodepos"
                                                                    value="<?php echo $profile->kodepos;?>"
                                                                    placeholder="Kodepos">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Latitude</label>
                                                                <input type="text" class="form-control" name="lattitude"
                                                                    value="<?php echo $profile->lattitude;?>"
                                                                    placeholder="Latitude">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Longitude</label>
                                                                <input type="text" class="form-control" name="longitude"
                                                                    value="<?php echo $profile->longitude;?>"
                                                                    placeholder="Longitude">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Telepon<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="phone"
                                                                    value="<?php echo $profile->phone;?>"
                                                                    placeholder="Telepon" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="email" class="form-control" name="email"
                                                                    value="<?php echo $profile->email;?>"
                                                                    placeholder="Email" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Link Profil Facebook<sup>
                                                                    </sup></label>
                                                                <input type="linkfb" class="form-control" name="linkfb"
                                                                    value="<?php echo $profile->link_fb;?>"
                                                                    placeholder="Inputkan Link Profil Facebook Sekolah"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Link Profil Instagram<sup>
                                                                    </sup></label>
                                                                <input type="linkig" class="form-control" name="linkig"
                                                                    value="<?php echo $profile->link_ig;?>"
                                                                    placeholder="Inputkan Link Profil Instagram Sekolah"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Link Profil Youtube<sup>
                                                                    </sup></label>
                                                                <input type="linkyt" class="form-control" name="linkyt"
                                                                    value="<?php echo $profile->link_youtube;?>"
                                                                    placeholder="Inputkan Link Profil Youtube Sekolah"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Visi / Motto Sekolah<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <textarea type="visi" class="form-control" name="visi"
                                                                    rows="5" placeholder="Inputkan Visi/Motto Sekolah"
                                                                    required><?php echo $profile->visi_motto;?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="school_headmaster">
                                                <div class="padding-x-md">
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                            <label for="uploadlogo">Foto Kepala Sekolah</label>
                                                            <div
                                                                style="border:#d2d6de 1px solid; border-radius:10px; padding:10px;">
                                                                <img class="img-responsive" width="100%"
                                                                    src="<?= base_url('/assets/landing/img/').$profile->img_kepsek?>"
                                                                    alt="kamad">
                                                            </div>
                                                            <div
                                                                style="border:#d2d6de 1px solid; border-radius:10px; padding:10px; margin-top:5px">
                                                                <input type="file" class="form-control"
                                                                    name="uploadfotokamad" id="uploadfotokamad">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nama Kepala Madrasah<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control"
                                                                    name="namakepsek"
                                                                    value="<?php echo $profile->nama_kepsek;?>"
                                                                    placeholder="Nama Kepala Madrasah" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>NIP Kepala Madrasah<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="nipkepsek"
                                                                    value="<?php echo $profile->nip_kepsek;?>"
                                                                    placeholder="NIP Kepala Madrasah" required>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-md btn-primary" id="btn-simpan">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                        <?= form_close();?>
                    <!-- </form> -->
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
</main>