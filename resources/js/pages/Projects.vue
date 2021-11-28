<template>
  <div>
    <nabvar />
    <banner :title="`Transformo sitios web en casos de exito`" />
    <all-projects />
    <footer-component/>
  </div>
</template>

<script>
import Banner from "../components/Banner.vue";
import AllProjects from "../components/AllProjects.vue";
import Nabvar from "../components/Nabvar.vue";
import FooterComponent from '../components/Footer.vue';
export default {
  components: {
    Banner,
    AllProjects,
    Nabvar,
    FooterComponent,
  },
};
</script>
