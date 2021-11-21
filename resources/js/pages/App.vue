<template>
  <div>
    <barra-navegacion />
    <router-view></router-view>
    <footer-component />
  </div>
</template>

<script>
import BarraNavegacion from "../components/Nabvar.vue";
import FooterComponent from "../components/Footer.vue";
export default {
  components: {
    BarraNavegacion,
    FooterComponent,
  },
};
</script>
