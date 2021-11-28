<template>
  <div>
    <nabvar />
    <banner :inicio="true" />
    <diferent-section />
    <projects />
    <about />
    <footer-component />
  </div>
</template>

<script>
import Banner from "../components/Banner.vue";
import DiferentSection from "../components/DiferentSection.vue";
import Projects from "../components/Projects.vue";
import About from "../components/About.vue";
import Nabvar from '../components/Nabvar.vue';
import FooterComponent from '../components/Footer.vue';
export default {
  components: {
    Banner,
    DiferentSection,
    Projects,
    About,
    FooterComponent,
    Nabvar
  },
};
</script>
