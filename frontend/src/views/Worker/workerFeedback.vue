<template>

<v-app class="grey lighten-2">
    <div class="back">
        <wHeader/>
        
        <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>
        <h4><font size="6" face="Arial">Error Reporting</font></h4>
        <v-container class="my-2">
            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="blue-grey darken-1"
            height="824"
            max-width="1200"
            >
                <v-container>

                    <form @submit="formSubmit" enctype="multipart/form-data">
                         <v-text-field
                          :rules="[inputRules.required]"
                          label="User ID." 
                          shaped clearable 
                          name="UNum" 
                          v-model="item.UNum"
                          >
                          </v-text-field>
                          <v-text-field
                          :rules="[inputRules.required]"
                          label="Employee Name." 
                          shaped clearable 
                          name="EName" 
                          v-model="item.EName"
                          >
                          </v-text-field>
                          <v-menu class="mx-5">
                              <v-text-field 
                              :rules="[inputRules.required]" 
                              :value="item.RDate" 
                              slot="activator" 
                              label="Date" 
                              prepend-icon="place">
                              </v-text-field>
                              <v-date-picker v-model="item.RDate"> </v-date-picker>
                          </v-menu>
                           
                          <v-textarea
                                :rules="[inputRules.required]"
                                name="Feedback"
                                filled
                                background-color="blue-grey lighten-4"
                                color="blue"
                                label="feedback"
                                auto-grow
                                value="Text here....."
                                v-model="item.Feedback"
                            ></v-textarea>
                      
                        

                         
                        <v-container >
                        <v-btn class="success mx-5 mt-3" color= "blue-grey darken-4" type="submit">Send</v-btn>
                        
                        <v-btn class="success mx-5 mt-3" color= "blue-grey darken-4" @click="reset">Reset</v-btn> 
                        
                        </v-container>

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
    import wHeader from './wHeader.vue'
    import axios from 'axios';

    export default {
       components: {
            //Designheader,
            cfooter,
            wHeader,
            //testheader,
        },

        data(){
            return{
                image: '',
               item:{
                    UNum:'',
                    EName:'',
                    RDate:'',
                    Feedback:'',
                },
                inputRules:{
                    required: value => !!value || 'Required.',
                    min: v => v.length >= 8 || 'Min 8 characters',
                    min2: v => v.length >= 5 ||'Minimum length is 5 characters'
                },
            }
        },
        methods:
                {
                reset(){
                this.$refs.form.reset()
            },

                onImageChange(e){
                    this.image = e.target.files[0];
                },
                formSubmit(e) {
                    e.preventDefault();
                    let currentObj = this;
    
                    const config = {
                        headers: { 'content-type': 'multipart/form-data' }
                    }
        
                    let formData = new FormData();
                    
                    formData.append('UNum', this.item.UNum);
                    formData.append('EName', this.item.EName);
                    formData.append('RDate', this.item.RDate);
                    formData.append('Feedback', this.item.Feedback);

                    axios.post('http://localhost:8000/api/workerfeedback', formData, config)
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                },
                
                submitForm()
                {
                    this.$http.post("http://localhost:8000/api/workerfeedback",this.item)
                        .then(function(response){
                            
                            this.$router.push('/TesterFeedback')
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