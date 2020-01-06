import '@fortawesome/fontawesome-free/css/all.min.css'
import 'bootstrap-css-only/css/bootstrap.min.css'
import 'mdbvue/lib/mdbvue.css'
import Vue from 'vue'
import './plugins/vuetify'
import router from './router';
import App from './App.vue'
import BootstrapVue from 'bootstrap-vue'
import vueResource from 'vue-resource'



import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'



Vue.config.productionTip = false
Vue.use(BootstrapVue)
Vue.use(vueResource)




new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
