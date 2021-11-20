<template>
  <div class="container-fluid">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="about-me col-md-6">
          <div class="title mb-4">
            <h2 class="text-blue-800 font-weight-bold">
              Soy Antonio Tomas y soy un desarrollador web
            </h2>
          </div>
          <a href="#" class="btn btn-light text-blue-700">Mira mis otros proyectos</a>
          <a href="#" class="btn btn-link text-blue-800"
            >Trabajemos Juntos</a
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
</template>

<script>
export default {};
</script>

<style scoped>
.container-fluid {
  background-image: url("/img/banner.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}
.btn-link:hover {
  text-decoration: none;
}
</style>

