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
                        Project Number
                        </v-card>
                    </v-flex>
                    <v-flex>
                        <v-card color="light-blue darken-2">
                        Received Date
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="green lighten-1">
                        Send Date
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="orange accent-2">
                        Feedback
                        </v-card>
                    </v-flex>
                    <v-flex>
                         <v-card color="orange accent-2">
                        Edit
                        </v-card>
                    </v-flex>
                    <v-flex>
                         <v-card color="orange accent-2">
                        Delete
                        </v-card>
                    </v-flex>
                </v-layout>

/*
                <div >
                 <v-layout row  :key="Feedbacks" v-for="Feedbacks in Feedbacks" >
                    <v-flex>
                        <v-card color="deep-purple accent-1">
                        {{Feedbacks.PNum}}
                        </v-card>
                    </v-flex>
                    <v-flex>
                        <v-card color="deep-purple accent-1">
                        {{Feedbacks.RDate}}
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="deep-purple accent-1">
                        {{Feedbacks.SDate}}
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="deep-purple accent-1">
                        {{Feedbacks.Feedback}}
                        </v-card>
                    </v-flex>
                    <v-flex>
                        <v-card color="deep-purple accent-1">
                            <v-btn><router-link to ="/edit/"><v-icon >edit</v-icon></router-link></v-btn>
                       
                        
                            
                       
                        </v-card>
                    </v-flex>
                   
                    
                    <v-flex>
                        <v-card color="deep-purple accent-1">
                        <v-icon small @click="deleteRecord($event)" v-bind:id="Feedbacks.id">delete</v-icon>
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

    
    import Dheader from './Header.vue'
    import cfooter from './Footer.vue'
    

    export default {
       components: {
            name: "app",
            cfooter,
            Dheader,
            },

        data(){ 

            return{

                Feedbacks:[]
                

            }

        },

        created(){

            this.$http.get("http://localhost:8000/api/feedbacks")

             .then(function(response){
                        
                         this.Feedbacks = response.body.allfeedbacks;
                    })

        },
        methods:{ 
            deleteRecord(event){
                this.$http.delete("http://localhost:8000/api/deletefeedbacks/"+event.target.id)
                .then(function(response){
                        var position = this.Feedbacks.findIndex(function(element){
                            return element.id == event.target.id;
                        })
                        this.Feedbacks.splice(position,1)
                })
                
            }
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

