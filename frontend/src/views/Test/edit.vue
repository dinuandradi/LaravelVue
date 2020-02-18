<template>

<v-app class="grey lighten-2">
    <div class="back">
        <Dheader/>
        
        <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>
        <h4><font size="6" face="Comic Sans MS">Edit Feedback</font></h4>
        <v-container class="my-2">
            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="blue-grey darken-1"
            height="824"
            max-width="1200"
            >
                <v-container>

                    <form @submit.prevent="updateinfo" enctype="multipart/form-data">
                         <v-text-field
                          label="Project No." 
                          shaped clearable 
                          name="PNum" 
                          
                          >
                          </v-text-field>
                          <v-menu class="mx-5">
                              <v-text-field  
                              :value="item.RDate" 
                              slot="activator" 
                              label="Received date" 
                              prepend-icon="place">
                              </v-text-field>
                              <v-date-picker > </v-date-picker>
                          </v-menu>
                           <v-menu class="mx-5">
                              <v-text-field 
                              :value="item.SDate" 
                              slot="activator" label="send date"
                              prepend-icon="data_range">
                              </v-text-field>
                              <v-date-picker > </v-date-picker>
                          </v-menu>
                          <v-textarea
                                name="Feedback"
                                filled
                                background-color="blue-grey lighten-4"
                                color="blue"
                                label="feedback"
                                auto-grow
                                value="Text here....."
                               
                            ></v-textarea>
                      
                        <div class="v-input v-text-field theme--light">
                            <div class="v-input__control">
                                <div class="v-input__slot">
                                    <div class="v-text-field__slot">
                                        <input  v-on:change="onImageChange"  type="file">
                                    </div>
                                </div>
                            </div>
                        </div>

                         
                        <button class="success mx-0 mt-3 v-btn theme--light" >Edit</button>
                        <v-btn class="success mx-0 mt-3" @click="reset">Reset</v-btn>

                    </form>
                </v-container>
            </v-sheet>
        </v-container> 
        </v-parallax>          
        
        <cfooter />
          
    </div>
</v-app>        
        
</template>

<script>

    //import Designheader from './Designheader.vue'
    import cfooter from './Footer.vue'
    import Dheader from './Header.vue'
    import axios from 'axios';

    export default {
       components: {
            //Designheader,
            cfooter,
            Dheader,
            //testheader,
        },

        data(){
            return{
                image: '',
               item:{
                    PNum:'',
                    SDate:'',
                    RDate:'',
                    Feedback:'',
                },
                created(){
                    this.getData();
                    //console.log(this.$route.params.id)
                }
            }
        },
        methods:{
            getData(){
                this.$http.get('http://localhost:8000/api/getItem/'+this.$route.params.id)
                    .then(function (response){
                        console.log(response)
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