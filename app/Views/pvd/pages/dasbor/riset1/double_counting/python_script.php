<?= $this->include('pvd/layout/dasbor/header'); ?>
<?= $this->include('pvd/layout/dasbor/navbar'); ?>
<div class="container-fluid page-body-wrapper">
  <?= $this->include('pvd/layout/dasbor/sidebar'); ?>
  <div class="main-panel">

<link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
<script defer src="https://pyscript.net/latest/pyscript.js"></script>
  

    <div class="content-wrapper">

        <div class="portfolio-item filter-riset1-hasil2" onresize="responsivefonts()">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="position-absolute top-0  end-0 d-flex flex-row justify-content-center align-item-center ">
                            <div class="me-1 mt-1 justify-content-end align-item-end">
                                <button id="unduh-1-2" type="button" class="tombol btn-for" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                            </div>
                        </div>
                        <div style=" height:500px;">
                            <py-config>
                                packages = ["matplotlib"]
                            </py-config>
                            
                            <py-script>
                                # import matplotlib
                                import matplotlib.pyplot as plt

                                # siapkan data
                                cities = ["New York", "Los Angeles", "Chicago", "Houston", "Phoenix", "Philadelphia"]
                                pop = [8.60, 4.06, 2.68, 2.40, 2.71, 1.58]
                                colors = ["#ffab00", "#ffbc33", "#ffdd99", "#ffeecc", "#506396","#7382ab"]

                                # membuat pie chart
                                plt.pie(pop, 
                                        labels=cities, # memberi labels
                                        autopct = '%1.1f%%', # memberi label persen
                                        startangle= 15, # mengatur sudut awal pie chart
                                        shadow=True, #memberi efek 3D/bayangan
                                        colors = colors, # mengatur warna pie chart
                                        explode = [0.1,0,0,0,0,0] # mengatur jarak antar bagian pie chart
                                    )

                                # memberi judul chart
                                plt.title("Pie Chart of Cities")

                                # memastikan rasio aspek sama sehingga satu unit dalam x = satu unit dalam y
                                plt.axis('equal')

                                # menampilkan chart
                                display(plt, target="graph-area", append=False)

                            </py-script>

                            <div id = "graph-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  


        <?= $this->renderSection('content'); ?>
    </div>  
</div>

    

    
<?= $this->include('pvd/layout/dasbor/footer'); ?>

