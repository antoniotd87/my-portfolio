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
          <div
            class="carousel-item"
            v-for="(latestThreeProject, index) in latestThreeProjects"
            :key="index"
            :class="index == 0 ? 'active' : ''"
          >
            <div class="row align-items-center p-5">
              <div class="about-me col-md-6">
                <div class="title mb-4">
                  <h2 class="text-blue-800 font-weight-bold">
                    {{ latestThreeProject.name }}
                  </h2>
                </div>
                <p>
                  {{ latestThreeProject.description.substr(0, 300) }}
                </p>
                <a href="#" class="btn btn-primary">Mira mis otros proyectos</a>
                <a href="#" class="btn btn-link text-blue-800"
                  >Visita el proyecto</a
                >
              </div>
              <div class="last-project col-md-6 text-center">
                <div class="m-1 project">
                  <img
                    :src="`storage/${latestThreeProject.image}`"
                    class="img-fluid"
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
export default {
  data() {
    return {
      latestThreeProjects: [],
      carrouselActive: Boolean,
    };
  },
  mounted() {
    this.getLatestThreeProject();
  },
  methods: {
    async getLatestThreeProject() {
      try {
        const response = await axios.get("/api/latestThreeProject");
        this.latestThreeProjects = response.data.data;
        console.log(response);
      } catch (error) {
        console.error(error);
      }
    },
  },
};
</script>

<style scoped>
.carousel-control-prev,
.carousel-control-next {
  width: 0;
  padding: 1rem;
}
.icon-control {
  padding: 0.8rem;
  border-radius: 50%;
}
.project {
  max-height: 300px;
  overflow: hidden;
  border-radius: 15px;
}
</style>

