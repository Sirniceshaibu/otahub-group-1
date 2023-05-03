<template>
 <div class="nav">
    <NavbarComponent></NavbarComponent>
  </div>
  <div>
    <WelcomeComponent></WelcomeComponent>
 </div>
    <AboutusComponent></AboutusComponent>
    <ContactusComponent></ContactusComponent>

</template>

<script>

import NavbarComponent from "./components/NavbarComponent.vue"

import WelcomeComponent from './components/WelcomeComponent.vue'
import AboutusComponent from './components/AboutusComponent.vue'
import ContactusComponent from './components/ContactusComponent.vue'

  export default {
    name: 'App',
    components: {
      NavbarComponent,

      WelcomeComponent,
      AboutusComponent,
      ContactusComponent,
    }
  }
</script>

<style>

</style>
