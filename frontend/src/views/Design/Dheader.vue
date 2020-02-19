<template>

    <nav>
        <v-toolbar app color="grey lighten-2">

        <v-toolbar-side-icon class="grey--text" @click="drawer = !drawer"></v-toolbar-side-icon>
            <v-toolbar-title>
                <img src="../../assets/ElastomericLogo1.png" width ="184" height="58" alt="Elastomeric">

            </v-toolbar-title> 

            <v-spacer></v-spacer>

            <v-toolbar-title>
                <span class="font-weight-light"><font face="Arial" size= "2">Designer Panel</font></span>

            </v-toolbar-title> 
            <v-btn color="grey">
                <span><router-link to="/logout">Sign out</router-link></span>
                <v-icon right>exit_to_app</v-icon> 
            </v-btn>    
               
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
                { icon: 'folder', text:'projects', route:'./Reports'},
                
                { icon: 'folder', text:'Add new project', route:'/AddnewProject'},
                { icon: 'folder', text:'send designs', route:'/SendDesign'},
                { icon: 'folder', text:'Feedbacks', route:'/ProSuperv'},
                

            ]
        }
    }
    
}
</script>