<!-- Tab 3 new -->
<div class="portfolio-item filter-riset2-hasiltujuan1-3">
    <div class="row mt-3">
        <div class="col-sm-5 my-2">
            <div class="card shadow rounded-5">
                <div class="card-body">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-2-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt-1" id="t1_pie"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value1(this);" type="checkbox" id="forPieChartLegend" value="show">
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legend</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7 my-2">           
            <div class="card d-flex justify-content-center flex-column align-item-center flex-md primary pb-5 pt-5 shadow rounded-5">
                <div class="d-flex flex-row align-item-center justify-content-center">
                    <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="me-1 mt-1 justify-content-end align-item-end">
                            <button id="unduh-2-3" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <i class="fa-solid fa-download"></i>
                            </button>
                        </div>
                    </div>
                    <div style=" height:500px;">
                        <canvas class="mt-1" id="t1_twowaybar"></canvas>
                    </div>
                    <div class="position-absolute bot-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                        <div class="form-check form-switch me-3">
                            <input class="form-check-input" onchange="update_value2(this);" type="checkbox" id="forBarChartLegend" value="show">
                            <label class="form-check-label" style="margin-left:-3px;" for="flexSwitchCheckChecked">Tampilkan Legend</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Riset 2  -->
<?php include('modal_tujuan1.php') ?>