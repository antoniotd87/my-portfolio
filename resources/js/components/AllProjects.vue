<template>
  <div class="container-fluid">
    <div class="container py-5">
      <div class="row">
        <div
          v-for="(allProject, index) in allProjects"
          :key="index"
          class="col-md-6"
        >
          <div class="m-1">
            <div class="project">
              <img
                v-if="allProject.image != undefined"
                :src="`storage/${allProject.image}`"
                class="img-fluid rounded"
                alt=""
              />
            </div>
            <h4 class="font-weight-bold my-3">{{ allProject.name }}</h4>
            <p class="my-1">
              <span>{{ allProject.description }}</span>
            </p>
            <a href="" class="btn btn-primary">Ver Proyecto</a>
          </div>
          <br />
          <br />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["inicio", "title"],
  data() {
    return {
      allProjects: {},
    };
  },
  mounted() {
    this.getAllProjects();
  },
  methods: {
    async getAllProjects() {
      try {
        const response = await axios.get("/api/allProjects");
        this.allProjects = response.data.data;
        console.log(response);
      } catch (error) {
        console.error(error);
      }
    },
  },
};
</script>

<style scoped>
.project {
  max-height: 300px;
  overflow: hidden;
  border-radius: 15px;
}
</style>


