<template>
  <div>
    <nabvar />
    <banner :title="`Conoce un poco mas sobre mi`" />
    <about-all />
    <footer-component />
  </div>
</template>

<script>
import AboutAll from "../components/AboutAll.vue";
import Banner from "../components/Banner.vue";
import FooterComponent from "../components/Footer.vue";
import Nabvar from "../components/Nabvar.vue";
export default {
  components: {
    Banner,
    AboutAll,
    Nabvar,
    FooterComponent,
  },
};
</script>
