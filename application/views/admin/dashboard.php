<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- Breadcrumb Menu-->
        <!-- <li class="breadcrumb-menu d-md-down-none">
			            <div class="btn-group" role="group" aria-label="Button group">
			                <a class="btn" href="#">
			                    <i class="icon-speech"></i>
			                </a>
			                <a class="btn" href="#">
			                    <i class="icon-graph"></i>  Dashboard</a>
			                <a class="btn" href="#">
			                    <i class="icon-settings"></i>  Settings</a>
			            </div>
			        </li> -->
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">


            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body pb-0">
                            <button type="button" class="btn btn-transparent p-0 float-right">
                                <i class="icon-people"></i>
                            </button>
                            <div class="text-value"><?= $guru?></div>
                            <div>Jumlah Guru</div>
                        </div>
                        <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas id="card-chart1" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->

                <!--/.col-->
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-warning">

                        <div class="card-body pb-0">
                            <button type="button" class="btn btn-transparent p-0 float-right">
                                <i class="icon-doc"></i>
                            </button>
                            <div class="text-value"><?= $file?></div>
                            <div>Jumlah File (Yang dapat di unduh)</div>
                        </div>

                        <div class="chart-wrapper mt-3" style="height:70px;">
                            <canvas id="card-chart3" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-danger">
                        <div class="card-body pb-0">
                            <button type="button" class="btn btn-transparent p-0 float-right"
                                href="<?php echo base_url('adminpanel/datainfo');?>">
                                <i class="icon-info"></i>
                            </button>
                            <div class="text-value"><?= $info?></div>
                            <div>Jumlah Informasi</div>
                        </div>
                        <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas id="card-chart4" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
        </div>
        <!--/.row-->
    </div>
    </div>
</main>