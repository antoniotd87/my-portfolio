<template>
  <div>
    <banner :inicio="true"/>
    <diferent-section />
    <projects />
    <about />
  </div>
</template>

<script>
import Banner from "../components/Banner.vue";
import DiferentSection from "../components/DiferentSection.vue";
import Projects from "../components/Projects.vue";
import About from "../components/About.vue";
export default {
  components: {
    Banner,
    DiferentSection,
    Projects,
    About,
  },
};
</script>
