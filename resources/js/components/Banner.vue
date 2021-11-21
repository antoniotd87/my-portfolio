<template>
  <div class="container-fluid">
    <div class="container py-5">
      <div v-if="inicio">
        <div class="row align-items-center">
          <div class="about-me col-md-6">
            <div class="title mb-4">
              <h2 class="text-blue-800 font-weight-bold">
                Soy Antonio Tomas y soy un desarrollador web
              </h2>
            </div>
            <a href="#" class="btn btn-light text-blue-700"
              >Mira mis otros proyectos</a
            >
            <a href="#" class="btn btn-link text-blue-800">Trabajemos Juntos</a>
          </div>
          <div class="last-project col-md-6">
            <div class="m-1 latest-project">
              <img
                :src="'storage/projects/tdesign.png'"
                class="img-fluid rounded"
                alt=""
              />
              <p><span>Ultimo Proyecto: Sistema de Tickets</span></p>
            </div>
          </div>
        </div>
      </div>
      <div v-else>
        <div class="d-flex flex-column align-items-center text-center my-3 py-5">
          <div class="title mb-4">
            <h2 class="text-blue-800 font-weight-bold">{{title}}</h2>
          </div>
          <div class="buttons">
            <a href="#" class="btn btn-light text-blue-800"
              >Trabajemos Juntos</a
            >
            <a href="#" class="btn btn-link text-blue-700"
              >Mira mis otros proyectos</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["inicio","title"],
  data() {
    return {
      inicio: Boolean,
    };
  },
};
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
.latest-project {
  position: relative;
}
.latest-project p {
  opacity: 0.9;
  position: absolute;
  bottom: 0;
  left: 0;
  margin-bottom: 0;
  margin: 0.4em 1rem;
  padding: 0.25rem;
  border-radius: 6px;
}
.latest-project p span {
  opacity: 1;
  color: white;
  font-weight: bold;
}
</style>

