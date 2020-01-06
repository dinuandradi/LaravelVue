<template>

<v-app class="grey lighten-2">
    <div class="back" align="center">
        <Dheader/>
        <v-container>

            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="blue-grey lighten-3"
            height="550"
            width="800"
            align="center"
            >
            <v-container>
                <v-layout row class="my-5" >
                    <v-flex>
                        <v-card color="blue darken-1">
                        Project Name
                        </v-card>
                    </v-flex>
                    <v-flex>
                        <v-card color="light-blue darken-2">
                        Project Code
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="green lighten-1">
                        Order Date
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="orange accent-2">
                        Due Date
                        </v-card>
                    </v-flex>
                </v-layout>


                <div >
                 <v-layout row  :key="projects" v-for="projects in projects" >
                    <v-flex>
                        <v-card color="deep-purple accent-1">
                        {{projects.pname}}
                        </v-card>
                    </v-flex>
                    <v-flex>
                        <v-card color="deep-purple accent-1">
                        {{projects.pcode}}
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="deep-purple accent-1">
                        {{projects.orderdate}}
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="deep-purple accent-1">
                        {{projects.duedate}}
                        </v-card>
                    </v-flex>
                </v-layout>
                </div>


            </v-container>
        
            </v-sheet>     
        </v-container>           
        
          <cfooter/>
    </div>
</v-app>        
        
</template>


<script>

    
    import cfooter from './Footer.vue'
    import Dheader from './Dheader.vue'
    

    export default {
       components: {
            
            cfooter,
            Dheader,
            },

        data(){

            return{

                projects:[]
                

            }

        },

        created(){

            this.$http.get("http://localhost:8000/api/currentprojects")

             .then(function(response){
                        
                         this.projects = response.body.allprojects;
                    })

        }

    }


</script>

<style>

    .back {

        background: linear-gradient(180deg, #978E8E 40.44%, rgba(173, 164, 164, 0.528293) 76.7%, rgba(199, 189, 189, 0) 100%);

    }

    .downf{

        margin-bottom: 0px;
    }


</style>

