<template>

    <nav>
        <v-toolbar app color="grey lighten-2">

        <v-toolbar-side-icon class="grey--text" @click="drawer = !drawer"></v-toolbar-side-icon>
            <v-toolbar-title>
                <!--<span class="font-weight-light">elastomeric logo</span>-->
                 <b-navbar-brand href="#">
                    <img src="../../assets/ElastomericLogo1.png" width ="184" height="58" alt="Elastomeric">
                </b-navbar-brand>
            </v-toolbar-title> 

            <v-spacer></v-spacer>

            <v-toolbar-title>
                <span class="font-weight-light"><font face="Arial" size= "2">Worker Panel</font></span>

            </v-toolbar-title> 
            <!--<v-btn color="grey">-->
                <v-icon large right>person</v-icon>
                <span><router-link to="/logout">Sign out</router-link></span>
                 
               
               
        </v-toolbar>

            
        
        <v-navigation-drawer v-model="drawer" app class="grey darken-2" temporary>
            <v-container class="my-5">
            <v-list>
            
                <v-list-tile v-for="link in links" :key="link.text" router :to="link.route">
                    <v-list-tile-action>
                        <v-icon class="white--text">{{link.icon}}</v-icon>
                    </v-list-tile-action>
                    <v-list-title-content>
                        <v-list-tile-title class="white--text">{{link.text}}</v-list-tile-title>
                    </v-list-title-content>

    


                </v-list-tile>
               
            </v-list>
            
            </v-container>
            
        </v-navigation-drawer>
        
    </nav>


</template>

<script>
export default {
    data(){
        return{
            drawer:false,
            links:[
                { icon: 'dashboard', text:'Dashboard', route:'/Hm'},
                { icon: 'person', text:'Profile', route: '/workerProfile'},
                { icon: 'folder', text:'Incentive Reports', route: '/workerReport'},
                
                //{ icon: 'folder', text:'send designs', route:'/SendDesign'},
            ]
        }
    }
    
}
</script>