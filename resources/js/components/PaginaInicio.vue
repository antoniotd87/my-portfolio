<template>
  <div>
    <barra-navegacion/>
    <banner/>
  </div>
</template>

<script>
import BarraNavegacion from "./Nabvar.vue";
import Banner from "./Banner.vue";
export default {
  components: {
      BarraNavegacion,
      Banner,
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
