<template>
<v-app>
  <div id="app">
    
      
      <v-content>

        <router-view/>
    
      </v-content>
      
    
  </div>
</v-app>  
  
</template>

<script>
// import Designpanel from './views/Design/despanel.vue'
// import Dheader from './views/Design/Dheader.vue'
// import cfooter from './views/Design/Footer.vue'

export default {
  name: 'app',
  // components: {
  //   'Designpanel':Designpanel,
  //   'Dheader':Dheader,
  //   'cfooter':cfooter
  // }
}
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');

$image-path: '~@/../mdb/mdbvue/img';
@import '~@/../mdb/mdbvue/scss/mdb.scss';

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 0px;
}
</style>
