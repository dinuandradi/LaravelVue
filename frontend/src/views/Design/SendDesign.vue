<template>

<v-app class="grey lighten-2">
    <div class="back">
        <Dheader/>
        
        <v-container class="my-2" >
            <v-sheet
            :elevation="10"
            color="blue-grey lighten-1"
            height="424"
             width="1200"
            >
                <v-container>
                    <h4>upload and send design</h4>
                    <form @submit="formSubmit" enctype="multipart/form-data">
                        <v-text-field
                            label="Project Name" 
                            :rules="inputRules" 
                            name="pname" 
                            v-model="item.pname"
                            shaped clearable>
                           </v-text-field>
                         <v-text-field 
                            label="project code/ number" 
                            name="pcode"
                             v-model="item.pcode">
                          </v-text-field>
                        <v-menu class="mx-5">
                            <v-text-field :value="item.sendate" slot="activator" label="send date"  prepend-icon="place"></v-text-field>
                            <v-date-picker v-model="item.sendate"> </v-date-picker>
                        </v-menu>
                        <div class="v-input v-text-field theme--light">
                            <div class="v-input__control">
                                <div class="v-input__slot">
                                    <div class="v-text-field__slot">
                                        <input  v-on:change="onImageChange"  type="file">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <v-btn class="success mx-0 mt-3" @click="reset">Reset</v-btn> 
                        <button class="success mx-0 mt-3 v-btn theme--light" >Send</button>
                    </form>
                </v-container>
            </v-sheet>
        </v-container>           
        
          <cfooter/>
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
                inputRules:[
                    v => v.length >= 5 ||'Minimum length is 5 characters'
                ]
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

