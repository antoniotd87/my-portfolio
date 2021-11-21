<template>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img :src="`img/TONY.png`" height="40" alt="" />
      </a>
      <div class="">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link :to="{ name: 'inicio' }">
              <a class="nav-link">Inicio</a>
            </router-link>
          </li>
          <li class="nav-item active">
            <router-link :to="{ name: 'projects' }">
              <a class="nav-link">Proyectos</a>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'about' }">
              <a class="nav-link">Acerca de mi</a>
            </router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {};
</script>

<style>
</style>
