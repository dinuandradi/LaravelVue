<template>

<v-app class="grey lighten-2" >
    <div class="back" align="center">
        <Aheader/>
        
        <v-container class="my-2" >
            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="brown lighten-5"
            height="800"
            width="800"
            align="center"
            >
                <v-container>
                     
                    <h4>Register New user</h4>
                      <v-form  class="my-2 mx-5" ref="form" @submit.prevent="submitForm">
                           <v-text-field 
                            label="First Name" 
                            name="ufname"
                            v-model="user.ufname">
                          </v-text-field>
                           <v-text-field 
                            label="Last Name" 
                            name="ulname"
                             v-model="user.ulname">
                          </v-text-field>
                           <v-text-field 
                            label="user email" 
                            name="uemail"
                             v-model="user.uemail">
                          </v-text-field>
                          <v-text-field 
                            label="user ID" 
                            name="uid"
                             v-model="user.uid">
                          </v-text-field>
                          <v-select 
                            :items = "department"
                            label="Department" 
                            name="udep"
                             v-model="user.udep">
                          </v-select>

                         <div v-if="user.udep==='Designing'"> <v-select
                            :items = "designercategory"
                            label="user level/category" 
                            name="ulevel"
                            v-model="user.ulevel">
                          </v-select></div>

                          <div v-else> <v-select
                            :items = "productioncategory"
                            label="user level/category" 
                            name="ulevel"
                            v-model="user.ulevel">
                          </v-select></div>
                          

                          <v-text-field
                            :append-icon="show3 ? 'visibility' : 'visibility_off'"
                            :rules="[inputRules.required, inputRules.min,]"
                            :type="show3 ? 'text' : 'password'"
                            name="upassword"
                            label="Password"
                            hint="At least 8 characters"
                            v-model="user.upassword"
                            class="input-group--focused"
                            @click:append="show3 = !show3">
                        </v-text-field>

                        <v-text-field
                            :append-icon="show4 ? 'visibility' : 'visibility_off'"
                            :rules="[inputRules.required]"
                            :type="show4 ? 'text' : 'password'"
                            name="upasswordR"
                            label="Re enter the Password"
                            
                            class="input-group--focused"
                            @click:append="show4 = !show4">
                        </v-text-field>
                          

                        
                          

                        <v-container >
                        <v-btn class="success mx-5 mt-3" type="submit">Register</v-btn>
                        
                        <v-btn class="success mx-5 mt-3" @click="reset">Reset</v-btn> 
                        </v-container>
                      </v-form>

                    
                    
                </v-container>
            </v-sheet>
        </v-container>           
        
          <cfooter/>
    </div>
</v-app>        
        
</template>


<script>

    
    import cfooter from '../Design/Footer.vue'
    import Aheader from './Aheader.vue'
   
    

    export default {
       components: {
           
            cfooter,
            Aheader,
            
            },

        data(){
            return{
                
                 
                user:{
                    ufname:'',
                    ulname:'',
                    uid:'',
                    uemail:'',
                    udep:'',
                    ulevel:'',
                    upassword:'',
                    },
                repass:{upasswordR:'',},

                show3: false,
                show4: false,

                inputRules:{
                    required: value => !!value || 'Required.',
                    min: v => v.length >= 8 || 'Min 8 characters',
                    min2: v => v.length >= 5 ||'Minimum length is 5 characters'
                },

                passwordConfirmationRule() {
                return () => (this.upassword === this.upasswordR) || 'Password must match'
                },

               designercategory : ['Designer','Product Tester'], 
               department : ['Designing','Production'],
               productioncategory : ['Production Supervisor','Incentive Supervisor','Worker'],
               
             
               
            }

            
            
             

        },

        methods:{
            reset(){
                this.$refs.form.reset()
            },

            submitForm(){

                 this.$http.post("http://localhost:8000/api/register",this.user)
                     .then(function(response){
                        
                         //this.$router.push('/DesignCurPro')
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

