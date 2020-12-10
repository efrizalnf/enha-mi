<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Profil Sekolah</li>
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
                <form action="http://ard1.masnurulhuda.sch.id/proktor_madrasah/madrasah/update/146625b4f43fe5be5387134a1450b865" method="post" enctype="multipart/form-data">
					<div class="m-portlet__body">
						<div class="row" style="padding: 20px">
							<div class="col-md-4">
								<div style="border:1px #d2d6de solid;border-radius: 5px" align="center">
									<div class="" style="width: 90%">
										<label>Logo Madrasah</label>
										<div style="border:#d2d6de 1px solid; border-radius:10px; padding:10px;">
											<img class="img-responsive" width="100%" src="http://ard1.masnurulhuda.sch.id/assets/attachment/images/sekolah/146625b4f43fe5be5387134a1450b865.png?20201210101037" alt="Logo Madrasah">
										</div>
										<br>
										<div>
											<div class="file-input file-input-new"><div class="file-preview ">
    <button type="button" class="close fileinput-remove">×</button>
    <div class="file-drop-disabled">
    <div class="file-preview-thumbnails">
    </div>
    <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
    <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
    </div>
</div>
<div class="kv-upload-progress kv-hidden" style="display: none;"><div class="progress">
    <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
        0%
     </div>
</div></div><div class="clearfix"></div>
<div class="input-group file-caption-main">
   <div tabindex="500" class="form-control file-caption  kv-fileinput-caption">
   <div class="file-caption-name"></div>
</div>

   <div class="input-group-btn">
       <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default btn-secondary fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Remove</span></button>
       <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default btn-secondary kv-hidden fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
       
       <div tabindex="500" class="btn btn-primary btn-file"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;  <span class="hidden-xs">Browse …</span><input type="file" class="file" name="data_foto" id="input_b3" data-show-upload="false" accept="image/*"></div>
   </div>
</div></div>
										</div>
									</div>
										<text style="font-size:8pt;">
											* Format logo .JPG/.PNG
										</text>
								</div>
							</div>
							<!-- batas col md4 -->
							<div class="col-md-8" style="border: 1px #d2d6de solid; border-radius: 5px; padding: 25px 20px;">
									<div class="panel panel-success padding-md">
									<ul class="nav nav-tabs nav-fill" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#school_identity">Identitas</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#school_location">Lokasi</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#school_headmaster">Kepala Madrasah</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#proktor">Proktor Madrasah</a>
										</li>
									</ul>                    
									<div class="tab-content">
										<div class="tab-pane active" id="school_identity">
											<div class="padding-x-md">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
																																											<label>Jenjang</label>
															<input type="text" class="form-control" placeholder="Jenjang" name="category_ladder_id" value="Madrasah Aliyah" readonly="">
														</div>
														<div class="form-group">
															<label>NSM<sup><font color="red" size="4">*</font></sup></label>
															<input type="text" class="form-control" name="school_nsm" placeholder="NSM" value="131232730013" required="">
														</div>
														<div class="form-group">
															<label>NPSN<sup><font color="red" size="4">*</font></sup></label>
															<input type="text" class="form-control" name="school_npsn" placeholder="NPSN" value="20277078" required="">
														</div>
														<div class="form-group">
															<label>NSS<sup><font color="red" size="4">*</font></sup></label>
															<input type="text" class="form-control" name="school_nss" placeholder="NSS" value="20277078" required="">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
																<label>Kata Sandi</label>
																<input type="password" class="form-control" name="school_password" placeholder="Kata Sandi" id="school_password">
														</div>
														<div class="form-group">
																<label>Ketik Ulang Kata Sandi</label>
																<input type="password" class="form-control" name="school_password2" placeholder="Ketikan Ulang Kata Sandi" id="school_password2">
														</div>
														<div class="form-group">
															<label>Nama Madrasah<sup><font color="red" size="4">*</font></sup></label>
															<input type="text" class="form-control" name="school_name" placeholder="Nama Madrasah" value="MA Nurul Huda" required="">
														</div>
														<div class="form-group">
															<label>Akreditasi<sup><font color="red" size="4">*</font></sup></label>
															<select class="form-control" name="school_accreditation" required="">
																<option value="">-- Akreditasi --</option>
																<option value="A">A</option>
																<option value="B" selected="">B</option>
																<option value="C">C</option>
																<option value="TT">TT</option>
															</select>
														</div>
														<div class="form-group">
															<label>Pemilik</label>
															<select class="form-control" name="school_owner">
																<option value="">-- Pemilik --</option>
																<option value="negeri">Negeri</option>
																<option value="swasta" selected="">Swasta</option>
															</select>
														</div>
														<!-- <div class="form-group">
															<label>Status Madrasah</label>
															<input type="text" class="form-control" name="school_is_active" value="">
														</div> -->
													</div>
												</div>
											</div>
										</div>
									<div class="tab-pane" id="school_location">
										<div class="padding-x-md">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
																																										<label>Provinsi</label>
														<select class="form-control" name="master_province_id" id="master_province_id">
															<option value="">-- Pilih Provinsi --</option>
																												<option value="11">ACEH</option>
																												<option value="12">SUMATERA UTARA</option>
																												<option value="13">SUMATERA BARAT</option>
																												<option value="14">RIAU</option>
																												<option value="15">JAMBI</option>
																												<option value="16">SUMATERA SELATAN</option>
																												<option value="17">BENGKULU</option>
																												<option value="18">LAMPUNG</option>
																												<option value="19">KEPULAUAN BANGKA BELITUNG</option>
																												<option value="21">KEPULAUAN RIAU</option>
																												<option value="31">DKI JAKARTA</option>
																												<option selected="" value="32">JAWA BARAT</option>
																												<option value="33">JAWA TENGAH</option>
																												<option value="34">DI YOGYAKARTA</option>
																												<option value="35">JAWA TIMUR</option>
																												<option value="36">BANTEN</option>
																												<option value="51">BALI</option>
																												<option value="52">NUSA TENGGARA BARAT</option>
																												<option value="53">NUSA TENGGARA TIMUR</option>
																												<option value="61">KALIMANTAN BARAT</option>
																												<option value="62">KALIMANTAN TENGAH</option>
																												<option value="63">KALIMANTAN SELATAN</option>
																												<option value="64">KALIMANTAN TIMUR</option>
																												<option value="65">KALIMANTAN UTARA</option>
																												<option value="71">SULAWESI UTARA</option>
																												<option value="72">SULAWESI TENGAH</option>
																												<option value="73">SULAWESI SELATAN</option>
																												<option value="74">SULAWESI TENGGARA</option>
																												<option value="75">GORONTALO</option>
																												<option value="76">SULAWESI BARAT</option>
																												<option value="81">MALUKU</option>
																												<option value="82">MALUKU UTARA</option>
																												<option value="91">PAPUA BARAT</option>
																												<option value="94">PAPUA</option>
																												</select>
													</div>
													<div class="form-group">
														<label>Kota/Kabupaten</label>
														<select class="form-control" name="master_regency_id" required="" id="master_regency_id">
															<option value="">-- Pilih Kota Kabupaten --</option>
																												<option value="3201">KABUPATEN BOGOR</option>
																												<option value="3202">KABUPATEN SUKABUMI</option>
																												<option value="3203">KABUPATEN CIANJUR</option>
																												<option value="3204">KABUPATEN BANDUNG</option>
																												<option value="3205">KABUPATEN GARUT</option>
																												<option value="3206">KABUPATEN TASIKMALAYA</option>
																												<option value="3207">KABUPATEN CIAMIS</option>
																												<option value="3208">KABUPATEN KUNINGAN</option>
																												<option value="3209">KABUPATEN CIREBON</option>
																												<option value="3210">KABUPATEN MAJALENGKA</option>
																												<option value="3211">KABUPATEN SUMEDANG</option>
																												<option value="3212">KABUPATEN INDRAMAYU</option>
																												<option value="3213">KABUPATEN SUBANG</option>
																												<option value="3214">KABUPATEN PURWAKARTA</option>
																												<option value="3215">KABUPATEN KARAWANG</option>
																												<option value="3216">KABUPATEN BEKASI</option>
																												<option value="3217">KABUPATEN BANDUNG BARAT</option>
																												<option value="3218">KABUPATEN PANGANDARAN</option>
																												<option value="3271">KOTA BOGOR</option>
																												<option value="3272">KOTA SUKABUMI</option>
																												<option selected="" value="3273">KOTA BANDUNG</option>
																												<option value="3274">KOTA CIREBON</option>
																												<option value="3275">KOTA BEKASI</option>
																												<option value="3276">KOTA DEPOK</option>
																												<option value="3277">KOTA CIMAHI</option>
																												<option value="3278">KOTA TASIKMALAYA</option>
																												<option value="3279">KOTA BANJAR</option>
																												</select>
													</div>
													<div class="form-group">
														<label>Kecamatan</label>
														<select class="form-control" name="master_district_id" required="" id="master_district_id">
															<option value="">-- Pilih Kecamatan --</option>
																												<option value="1608">DONGGALA</option>
																												<option value="3273010">BANDUNG KULON</option>
																												<option value="3273020">BABAKAN CIPARAY</option>
																												<option value="3273030">BOJONGLOA KALER</option>
																												<option selected="" value="3273040">BOJONGLOA KIDUL</option>
																												<option value="3273050">ASTANAANYAR</option>
																												<option value="3273060">REGOL</option>
																												<option value="3273070">LENGKONG</option>
																												<option value="3273080">BANDUNG KIDUL</option>
																												<option value="3273090">BUAHBATU</option>
																												<option value="3273100">RANCASARI</option>
																												<option value="3273101">GEDEBAGE</option>
																												<option value="3273110">CIBIRU</option>
																												<option value="3273111">PANYILEUKAN</option>
																												<option value="3273120">UJUNG BERUNG</option>
																												<option value="3273121">CINAMBO</option>
																												<option value="3273130">ARCAMANIK</option>
																												<option value="3273141">ANTAPANI</option>
																												<option value="3273142">MANDALAJATI</option>
																												<option value="3273150">KIARACONDONG</option>
																												<option value="3273160">BATUNUNGGAL</option>
																												<option value="3273170">SUMUR BANDUNG</option>
																												<option value="3273180">ANDIR</option>
																												<option value="3273190">CICENDO</option>
																												<option value="3273200">BANDUNG WETAN</option>
																												<option value="3273210">CIBEUNYING KIDUL</option>
																												<option value="3273220">CIBEUNYING KALER</option>
																												<option value="3273230">COBLONG</option>
																												<option value="3273240">SUKAJADI</option>
																												<option value="3273250">SUKASARI</option>
																												<option value="3273260">CIDADAP</option>
																												<option value="81070200">8107</option>
																												</select>
													</div>
													<div class="form-group">
														<label>Kelurahan</label>
														<select class="form-control" name="master_village_id" required="" id="master_village_id">
															<option value="">-- Pilih Kelurahan --</option>
																												<option value="3273040001">CIBADUYUT KIDUL</option>
																												<option value="3273040002">CIBADUYUT WETAN</option>
																												<option value="3273040003">MEKAR WANGI</option>
																												<option value="3273040004">CIBADUYUT</option>
																												<option value="3273040005">KEBON LEGA</option>
																												<option selected="" value="3273040006">SITUSAEUR</option>
																												</select>
													</div>
													<div class="form-group">
														<label>Alamat<sup><font color="red" size="4">*</font></sup></label>
														<textarea class="form-control" name="school_address" placeholder="Alamat" rows="5" required="">Jl. KH. Wahid Hasyim Gg. Parasdi I No. 7</textarea>
													</div>
													<div class="form-group">
														<label>Kodepos</label>
														<input type="text" class="form-control" name="school_postal_code" placeholder="Kodepos" value="40234">
													</div>
													<div class="form-group">
														<label>Latitutde</label>
														<input type="text" class="form-control" name="school_latitude" placeholder="Latitude" value="-6.9379608">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Longitude</label>
														<input type="text" class="form-control" name="school_longitude" placeholder="Longitude" value="107.5952584">
													</div>
													<div class="form-group">
														<label>Ketinggian (mdpl)</label>
														<input type="number" class="form-control" name="school_elevation" placeholder="Ketinggian (mdpl)" value="">
													</div>
													<div class="form-group">
														<label>Telepon<sup><font color="red" size="4">*</font></sup></label>
														<input type="text" class="form-control" name="school_phone" placeholder="Telepon" value="022 5207636" required="">
													</div>
													<div class="form-group">
														<label>Fax</label>
														<input type="text" class="form-control" name="school_fax" placeholder="Fax" value="">
													</div>
													<div class="form-group">
														<label>Email<sup><font color="red" size="4">*</font></sup></label>
														<input type="email" class="form-control" name="school_email" placeholder="Email" value="masnurulhudakotabandung@gmail.com" required="">
													</div>
													<div class="form-group">
														<label>Website</label>
														<input type="text" class="form-control" name="school_website" placeholder="Website" value="http://masnurulhuda.sch.id">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="school_headmaster">
											<div class="padding-x-md">
												<div class="col-md-6">
													<div class="form-group">
														<label>Nama Kepala Madrasah<sup><font color="red" size="4">*</font></sup></label>
														<input type="text" class="form-control" name="school_headmaster_name" placeholder="Nama Kepala Madrasah" value="Efrizal Nurul Fajri, S.T." required="">
													</div>
													<div class="form-group">
														<label>NIP Kepala Madrasah<sup><font color="red" size="4">*</font></sup></label>
														<input type="text" class="form-control" name="school_headmaster_nip" placeholder="NIP Kepala Madrasah" value="-" required="">
													</div>
												</div>
											</div>
									</div>
									<div class="tab-pane" id="proktor">
										<div class="padding-x-md">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Nama Proktor<sup><font color="red" size="4">*</font></sup></label>
														<input type="text" class="form-control" name="proktor_name" placeholder="Nama Proktor" value="Desi Sonya Handayani, S.Kom" required="">
													</div>
													<div class="form-group">
														<label>Nomor Telepon<sup><font color="red" size="4">*</font></sup></label>
														<input type="text" class="form-control" name="proktor_phone" placeholder="Nomor Telepon" value="085722921311" required="">
													</div>
													<div class="form-group">
														<label>Email</label>
														<input type="email" class="form-control" name="proktor_email" placeholder="Email" value="desisonyah@gmail.com">
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
			</form>

                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
</main>