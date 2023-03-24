<?= $this->extend('pvd/layout/dasbor/template'); ?>
<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio section-bg">
  <div class="container">
    <header class="section-header">
      <p>Pilot Survei Wisatawan Nusantara</p>
    </header>

    <hr class="hrjudul">

    <section>
      <div class="container-fluid">
        <div class="shadow box par m-auto p-4 p-md-5 my-4 rounded-5 bg-body" style="line-height: 1.5;">
          <p class="text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum reprehenderit voluptatibus optio recusandae enim quis explicabo odit earum pariatur delectus sunt autem facere mollitia, dolor reiciendis! Asperiores, aliquid placeat totam accusamus ad obcaecati, ullam velit, earum voluptatibus laboriosam quia excepturi mollitia quisquam nostrum cupiditate ut pariatur optio necessitatibus? Ut, accusantium. Eum esse dolor rem magni vel enim adipisci, reiciendis voluptatem sunt saepe nostrum laborum eveniet quidem dignissimos omnis quam. Eligendi eveniet accusamus adipisci cum nemo!
          </p>
        </div>
      </div>
    </section>

    <div class="accordion" id="accordionExample">
      <!-- Tujuan 1 -->
      <div class="accordion-item my-3 rounded-5 shadow">
        <h3 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            <span class="fa-solid fa-map-location-dot pe-2"></span>  
            Tujuan 1
          </button>
        </h3>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body rounded-bottom">
            <ol class="text-justify fs-5 ms-3">
              <li>
                <a href="#" class="text-decoration-none fs-5">Tujuan 1 Tab 1</a>
              </li>
              <li>
                <a href="#" class="text-decoration-none fs-5">Tujuan 1 Tab 2</a>
              </li>
              <li>
                <a href="#" class="text-decoration-none fs-5">Tujuan 1 Tab 3</a>
              </li>
            </ol>
          </div>
        </div>
      </div>

      <!-- Tujuan 2 -->
      <div class="accordion-item my-3 rounded-5 shadow">
        <h3 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="fa-solid fa-calendar-week pe-2"></span>
            Tujuan 2
          </button>
        </h3>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body rounded-bottom">
            <ol class="text-justify fs-5 ms-3">
              <li>
                <a href="#" class="text-decoration-none fs-5">Tujuan 2 Tab 1</a>
              </li>
              <li>
                <a href="#" class="text-decoration-none fs-5">Tujuan 2 Tab 2</a>
              </li>
            </ol>
          </div>
        </div>
      </div>

      <!-- Tujuan 3 -->
      <div class="accordion-item my-3 rounded-5 shadow">
        <h3 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span class="fa-solid fa-person-walking-luggage pe-2"></span>
            Tujuan 3
          </button>
        </h3>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body rounded-bottom">
            <ol class="text-justify fs-5 ms-3">
              <li>
                <a href="#" class="text-decoration-none fs-5">Tujuan 3 Tab 1</a>
              </li>
              <li>
                <a href="#" class="text-decoration-none fs-5">Tujuan 3 Tab 2</a>
              </li>
            </ol>
          </div>
        </div>
      </div>

      <!-- Tujuan 4 -->
      <div class="accordion-item my-3 rounded-5 shadow">
        <h3 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <span class="fa-solid fa-chart-simple pe-2"></span>
            Tujuan 4
          </button>
        </h3>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body rounded-bottom">
            <p class="text-justify ms-3">
              <a href="#" class="text-decoration-none fs-5">Tujuan 4</a>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?= $this->endSection(); ?>