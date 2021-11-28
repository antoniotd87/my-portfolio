<template>
  <div class="container-fluid">
    <div class="container contact py-5">
      <div class="d-flex flex-column align-items-center text-center">
        <div class="title mb-4">
          <p class="text-blue-800">Yo estoy listo, ¿y tú?</p>
          <h2 class="text-blue-800 font-weight-bold">Creemeos algo nuevo</h2>
        </div>
        <div class="buttons">
                      <router-link :to="{ name: 'contactme' }">
              <a href="#" class="btn btn-light text-blue-800"
                >Trabajemos Juntos</a
              >
            </router-link>
          <a href="#" class="btn btn-link text-blue-700"
            >Mira mis otros proyectos</a
          >
        </div>
      </div>
    </div>
    <div class="container">
      <div class="d-flex my-5 justify-content-between align-items-center">
        <div class="redes">
          <i class="fab fa-facebook fa-2x"></i>
          <i class="fab fa-whatsapp fa-2x"></i>
          <i class="fab fa-linkedin fa-2x"></i>
        </div>
        <div class="info-contact">
          <p>Contactame en:</p>
          <span><i class="fas fa-phone-alt"></i> 712 173 5117</span>
          <span><i class="fas fa-envelope"></i> antoniotd87@gmail.com</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.container.contact {
  background-image: url("/img/banner.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  border-radius: 10px;
  margin-top: 4rem;
}
.btn-link:hover {
  text-decoration: none;
}
.latest-project {
  position: relative;
}
.latest-project p {
  opacity: 0.9;
  position: absolute;
  bottom: 0;
  left: 0;
  margin-bottom: 0;
  margin: 0.4em 1rem;
  padding: 0.25rem;
  border-radius: 6px;
}
.latest-project p span {
  opacity: 1;
  color: white;
  font-weight: bold;
}
</style>

