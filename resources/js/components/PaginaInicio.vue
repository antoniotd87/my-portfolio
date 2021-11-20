<template>
  <div>
    <barra-navegacion />
    <banner />
    <diferent-section />
    <projects/>
    <about/>
  </div>
</template>

<script>
import BarraNavegacion from "./Nabvar.vue";
import Banner from "./Banner.vue";
import DiferentSection from "./DiferentSection.vue";
import Projects from "./Projects.vue";
import About from "./About.vue";
export default {
  components: {
    BarraNavegacion,
    Banner,
    DiferentSection,
    Projects,
    About
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
