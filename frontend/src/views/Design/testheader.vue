<template>

<nav>
    <v-toolbar app color="grey lighten-2">

        <v-toolbar-side-icon class="grey--text" @click="drawer = !drawer"></v-toolbar-side-icon>
            <v-toolbar-title>
                <span class="font-weight-light">elastomeric logo</span>

            </v-toolbar-title> 

            <v-spacer></v-spacer>

            <v-toolbar-title>
                <span class="font-weight-light">profile name</span>

            </v-toolbar-title> 
            <v-btn color="grey">
                <span>sign out</span>
                <v-icon right>exit_to_app</v-icon> 
            </v-btn>    
               
    </v-toolbar>

    <!-- <v-sheet
    height="400"
    class="overflow-hidden"
  > -->
    <v-container class="fill-height">
      <v-row
        align="center"
        justify="center"
      >
        
      </v-row>
    </v-container>

    <v-navigation-drawer
      v-model="drawer"
      absolute
      temporary
      class="grey darken-2"
    >
      <v-container class="my-5" >
            <v-list>
                <router-link to="/DesignCurPro"><v-list-item>
                        <v-list-item-icon><v-icon>dashboard</v-icon></v-list-item-icon>
                        <v-listiitem-title><v-list-item-content>Home</v-list-item-content></v-listiitem-title>
                </v-list-item></router-link>
                <v-list-item>
                        <v-list-item-icon><v-icon>folder</v-icon></v-list-item-icon>
                        <v-listiitem-title><v-list-item-content>projects</v-list-item-content></v-listiitem-title>
                </v-list-item>
                
                
            </v-list>

            </v-container>
    </v-navigation-drawer>
  <!-- </v-sheet> -->
</nav>  
</template>

<script>
  export default {
    data () {
      return {
        drawer: null,
        links:[
                { icon: 'dashboard', text:'Dashboard', route:'/'},
                { icon: 'folder', text:'projects', route:'./DesignCurPro.vue'},
                { icon: 'person', text:'reports', route:'/DesignCurPro.vue'},
            ]
      }
    },
  }
</script>

<style>

</style>