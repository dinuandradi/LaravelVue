<template>

<v-app class="grey lighten-2">
    <div class="back">
        <Dheader/>
        
        <v-parallax src="http://www.cursaintercol.cat/upload/o/19/191699_website-background-images-hd.jpg" max-height="1000" height='100%'>
        <h4><font size="6" face="Comic Sans MS">Test Results</font></h4>
        <v-container class="my-2">
            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="white-1"
            height="824"
             max-width="1200"
            >
                <v-container>
                     
                      <v-form  class="my-2 mx-5" ref="form">
                          <v-text-field label="Project No." shaped clearable></v-text-field>
                          
                          <v-menu class="mx-5">
                              <v-text-field :value="receive" slot="activator" label="Received date" prepend-icon="place"></v-text-field>
                              <v-date-picker v-model="receive"> </v-date-picker>
                          </v-menu>
                           <v-menu class="mx-5">
                              <v-text-field :value="send" slot="activator" label="send date" prepend-icon="data_range"></v-text-field>
                              <v-date-picker v-model="send"> </v-date-picker>
                          </v-menu>
    
                      </v-form>

                    <template>
                        <v-container fluid>
                            <v-textarea
                                name="input-7-1"
                                filled
                                background-color="light green"
                                color="blue"
                                label="feedback"
                                auto-grow
                                value="Text here....."
                            ></v-textarea>
                        </v-container>
                    </template>  

                    <div class="text-center">
                        <v-btn rounded color="primary" dark>send</v-btn>
                    </div> 
                    
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
                due: null,
                order: null
            }

        },

        methods:{
            reset(){
                this.$refs.form.raddeset()
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