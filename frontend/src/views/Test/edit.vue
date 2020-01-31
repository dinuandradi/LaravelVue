<template>

<v-app class="grey lighten-2">
    <div class="back">
        <Dheader/>
        
        <v-parallax src="http://www.cursaintercol.cat/upload/o/19/191699_website-background-images-hd.jpg" max-height="1000" height='100%'>
        <h4><font size="6" face="Comic Sans MS">Edit Feedback</font></h4>
        <v-container class="my-2">
            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="white-1"
            height="824"
             max-width="1200"
            >
                <v-container>
                     
                      <v-form  class="my-2 mx-5" ref="form" @submit.prevent="submitForm">
                          <v-text-field 
                          
                          label="Project No." 
                          shaped clearable 
                          name="PNum" 
                         
                         
                          v-model="item.PNum"
                          > 
                          </v-text-field>
                         
                         
                          
                          <v-menu class="mx-5">
                              
                              <v-text-field  
                              :value="item.RDate" 
                              slot="activator" 
                              label="Received date" 
                              prepend-icon="place">
                              </v-text-field>
                              <v-date-picker v-model="item.RDate"> </v-date-picker>
                          </v-menu>
                           <v-menu class="mx-5">
                              <v-text-field 
                              :value="item.SDate" 
                              slot="activator" label="send date"
                              prepend-icon="data_range">
                              </v-text-field>
                              <v-date-picker v-model="item.SDate"> </v-date-picker>
                          </v-menu>
                          <v-textarea
                               
                                name="Feedback"
                                filled
                                background-color="light green"
                                color="blue"
                                label="feedback"
                                auto-grow
                                value="Text here....."
                                v-model="item.Feedback"
                            ></v-textarea>
                          <v-container>
                        <v-btn class="success mx-0 mt-3" type="submit">Update</v-btn>
                        <v-btn class="success mx-0 mt-3" @click="reset">Reset</v-btn> 
                        </v-container>
    
                      </v-form>

                   

                    
                    
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
    //import testheader from './testheader.vue'
    
    

    export default {
       components: {
            //Designheader,
            cfooter,
            Dheader,
            //testheader,
            
            },

        data(){
            return{
               item:{
                    
                    PNum:'',
                    SDate:'',
                    RDate:'',
                    Feedback:'',
            
               },
                

        }
        },
        // methods:{
                

               /* submitForm()
                {

                this.$http.post("http://localhost:8000/api/Tester",this.item)
                    .then(function(response){
                        
                        this.$router.push('/TesterFeedback')
                })

                }
        }*/
        created(){
           // console.log(this.$router.params.id )
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