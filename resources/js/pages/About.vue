<template>
  <div>
    <banner :title="`Conoce un poco mas sobre mi`" />
    <about-all />
  </div>
</template>

<script>
import AboutAll from "../components/AboutAll.vue";
import Banner from "../components/Banner.vue";
export default {
  components: {
    Banner,
    AboutAll,
  },
};
</script>
