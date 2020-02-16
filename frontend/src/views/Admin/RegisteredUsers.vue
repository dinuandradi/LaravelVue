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
                        <v-card width=50 color="blue darken-1">
                        ID
                        </v-card>
                    </v-flex>
                    <v-flex>
                        <v-card width=100 color="blue darken-1">
                        Fisrt Name
                        </v-card>
                    </v-flex>
                    <v-flex>
                        <v-card width=100 color="light-blue darken-2">
                        Second Name
                        </v-card>
                    </v-flex>
                     <v-flex >
                         <v-card width=100 color="green lighten-1">
                        E-mail
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card width=100 color="orange accent-2">
                        Department
                        </v-card>
                    </v-flex>
                    <v-flex>
                         <v-card width=100 color="orange accent-2">
                        User Level
                        </v-card>
                    </v-flex>
                    <v-flex>
                         <v-card width=70 color="orange accent-2">
                        Delete
                        </v-card>
                    </v-flex>
                </v-layout>

/*
                <div >
                 <v-layout row  :key="login" v-for="login in login" >
                    <v-flex>
                        <v-card width=50 color="deep-purple accent-1">
                        {{login.uid}}
                        </v-card>
                        <v-card width=100 color="deep-purple accent-1">
                        {{login.ufname}}
                        </v-card>
                    </v-flex>
                    <v-flex>
                        <v-card width=100 color="deep-purple accent-1">
                        {{login.ulname}}
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card width=100 color="deep-purple accent-1">
                        {{login.uemail}}
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card width=100 color="deep-purple accent-1">
                        {{login.udep}}
                        </v-card>
                    </v-flex>
                    <v-flex>
                         <v-card width=100 color="deep-purple accent-1">
                        {{login.ulevel}}
                        </v-card>
                    </v-flex>
                    
                    <v-flex>
                        
                    </v-flex>
                   
                    
                    <v-flex>
                        <v-card width=70 color="deep-purple accent-1">
                        <v-icon small @click="deleteRecord($event)" v-bind:id="login.id">delete</v-icon>
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
import cfooter from '../Design/Footer.vue'
import Dheader from '../Design/Dheader.vue'

export default {
       components: {
            name: "app",
            cfooter,
            Dheader,
            },

        data(){ 

            return{

                login:[]
                

            }

        },

        created(){

            this.$http.get("http://localhost:8000/api/getUsers")

             .then(function(response){
                        
                         this.login = response.body.alllogin;
                    })

        },
        methods:{ 
            deleteRecord(event){
                this.$http.delete("http://localhost:8000/api/deleteUsers/"+event.target.id)
                .then(function(response){
                        var position = this.login.findIndex(function(element){
                            return element.id == event.target.id;
                        })
                        this.login.splice(position,1)
                })
                
            }
        }

    }

</script>