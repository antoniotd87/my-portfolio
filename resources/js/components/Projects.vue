<template>
  <div class="container-fluid">
    <div class="container py-5">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row align-items-center p-5">
              <div class="about-me col-md-6">
                <div class="title mb-4">
                  <h2 class="text-blue-800 font-weight-bold">
                    Sistema de Tickets
                  </h2>
                </div>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo
                  aliquam id quisquam consectetur eveniet voluptate dolorum
                  voluptatibus consequuntur quis nesciunt quibusdam, distinctio
                  tenetur perspiciatis fugiat. Nulla consectetur quod delectus
                  libero.
                </p>
                <a href="#" class="btn btn-primary">Mira mis otros proyectos</a>
                <a href="#" class="btn btn-link text-blue-800"
                  >Visita el proyecto</a
                >
              </div>
              <div class="last-project col-md-6">
                <div class="p-1">
                  <img
                    :src="'storage/projects/tdesign.png'"
                    class="img-fluid rounded"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row align-items-center p-5">
              <div class="about-me col-md-6">
                <div class="title mb-4">
                  <h2 class="text-blue-800 font-weight-bold">Intranet</h2>
                </div>
                <a href="#" class="btn btn-primary">Mira mis otros proyectos</a>
                <a href="#" class="btn btn-link text-blue-800"
                  >Visita el proyecto</a
                >
              </div>
              <div class="last-project col-md-6">
                <div class="p-1">
                  <img
                    :src="'storage/projects/tdesign.png'"
                    class="img-fluid rounded"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row align-items-center p-5">
              <div class="about-me col-md-6">
                <div class="title mb-4">
                  <h2 class="text-blue-800 font-weight-bold">Evaluacion 360</h2>
                </div>
                <a href="#" class="btn btn-primary">Mira mis otros proyectos</a>
                <a href="#" class="btn btn-link text-blue-800"
                  >Visita el proyecto</a
                >
              </div>
              <div class="last-project col-md-6">
                <div class="p-1">
                  <img
                    :src="'storage/projects/tdesign.png'"
                    class="img-fluid rounded"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-target="#carouselExampleIndicators"
          data-slide="prev"
        >
          <span
            class="carousel-control-prev-icon icon-control"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-target="#carouselExampleIndicators"
          data-slide="next"
        >
          <span
            class="carousel-control-next-icon icon-control"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.carousel-control-prev,
.carousel-control-next {
  width: 0;
  padding: 1rem;
}
.icon-control {
  padding: .8rem;
  border-radius: 50%;
}
</style>

