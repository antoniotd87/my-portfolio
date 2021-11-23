<template>
  <div>
    <banner :title="`Transformo sitios web en casos de exito`" />
    <all-projects />
  </div>
</template>

<script>
import Banner from "../components/Banner.vue";
import AllProjects from "../components/AllProjects.vue";
export default {
  components: {
    Banner,
    AllProjects,
  },
};
</script>
