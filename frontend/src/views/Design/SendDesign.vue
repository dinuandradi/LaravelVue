<template>

<v-app class="grey lighten-2">
    <div class="back">
        <Dheader/>
        <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>
        <h4><font size="6" face="Arial">Upload and Send Design</font></h4>
        
        <v-container class="my-2" >
            <v-sheet
            :elevation="10"
            color="blue-grey darken-1"
            height="824"
             width="1200"
            >
                <v-container>
                    
                    <form @submit="formSubmit" enctype="multipart/form-data">
                        <v-text-field
                            label="Project Name" 
                            :rules="[inputRules.required]" 
                            name="pname" 
                            v-model="item.pname"
                            shaped clearable>
                           </v-text-field>
                         <v-text-field 
                            :rules="[inputRules.required]"
                            label="project code/ number" 
                            name="pcode"
                             v-model="item.pcode">
                          </v-text-field>
                        <v-menu class="mx-5">
                            <v-text-field :value="item.sendate" :rules="[inputRules.required]" slot="activator" label="send date"  prepend-icon="place"></v-text-field>
                            <v-date-picker v-model="item.sendate"> </v-date-picker>
                        </v-menu>
                        <div class="v-input v-text-field theme--light">
                            <div class="v-input__control">
                                <div class="v-input__slot">
                                    <div class="v-text-field__slot" :rules="[inputRules.required]" >
                                        <input  v-on:change="onImageChange"  type="file">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <v-container >
                        <v-btn class="success mx-5 mt-3" color= "blue-grey darken-4" type="submit">Send</v-btn>
                        
                        <v-btn class="success mx-5 mt-3" color= "blue-grey darken-4" @click="reset">Reset</v-btn> 
                        </v-container>
                    </form>
                </v-container>
            </v-sheet>
        </v-container>           
        
          <cfooter/>
        </v-parallax>
    </div>
</v-app>        
        
</template>


<script>
    import cfooter from './Footer.vue';
    import Dheader from './Dheader.vue';
    import axios from 'axios';

    export default {
       components: {    
            cfooter,
            Dheader,
           },
           data(){
               return{
                name: '',
                image: '',
                item:{
                    pname:'',
                    pcode:'',
                    sendate:'',
                },
                inputRules:{
                    required: value => !!value || 'Required.',
                    min: v => v.length >= 8 || 'Min 8 characters',
                    min2: v => v.length >= 5 ||'Minimum length is 5 characters'
                },
            }
           },
           
        methods: {
            onImageChange(e){
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
 
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
    
                let formData = new FormData();
                formData.append('image', this.image);
                formData.append('pname', this.item.pname);
                formData.append('sendate', this.item.sendate);
                formData.append('pcode', this.item.pcode);

                axios.post('http://localhost:8000/api/sendimage', formData, config)
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            reset(){
                this.$refs.form.reset()
                 },

                submitForm()
                {

                this.$http.post("http://localhost:8000/api/sendimage",this.item)
                    .then(function(response){
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

