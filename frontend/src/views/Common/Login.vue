<template>
    <v-app class="grey lighten-2">
        <div class="back" align="center">
            <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>
        
            <v-container
            class="mx-5 my-5">
            
            <v-sheet
            class="px-5"
            :elevation="10"
            color="blue-grey darken-2"
            height="600"
            width="500"
            
            >
                <v-container >
                    <h4>Login</h4>
                    <v-form  ref="form"  @submit.prevent="submitForm">

                        <v-text-field
                        :rules="[inputRules.required,inputRules.email]" 
                        name="uemail" 
                        label="email"
                        v-model="user.uemail"
                        shaped clearable></v-text-field>


                        <v-text-field 
                        name="upassword" 
                        label="password"
                        :append-icon="show3 ? 'visibility' : 'visibility_off'"
                        :type="show3 ? 'text' : 'password'"
                        v-model="user.upassword"
                        @click:append="show3 = !show3"
                        clearable></v-text-field>


                    </v-form>
                    <v-btn class="success mx-5 mt-3" @click="submitForm">login</v-btn>
                    
                    <v-btn class="error mx-5 mt-3" @click="reset">clear</v-btn>

                </v-container>

            </v-sheet>
           
            </v-container>
            </v-parallax>
        
        </div>
    </v-app>
    







  
</template>

<script>
//import VueSession from 'vue-session'
//Vue.use(VueSession)

export default {

    

        data(){

            return{

            user:{
                    uemail:'',
                    upassword:'',
                    },

            ulevel:['Designer','Product Tester','Admin','Production Supervisor','Incentive Supervisor','Worker'],

            inputRules:{
                    required: value => !!value || 'Required.',
                    min: v => v.length >= 8 || 'Min 8 characters',
                    min2: v => v.length >= 5 ||'Minimum length is 5 characters',
                    email: value => {
                    const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                    return pattern.test(value) || 'Invalid e-mail.'
          },
                },

            show3: false,



            }
        },

        methods:{
            reset(){
                this.$refs.form.reset();
            },

            submitForm(){
                this.$http.post("http://localhost:8000/api/login",this.user)
                     .then(function(response){
                        if(response.status === 200){
                            //console.log('sd');
                            //console.log(response.data.login.ulevel);
                            localStorage.setItem("loggedInUser", response.data.login.ulevel);
                            //this.$session.start
                            //this.$session.start();
                            //this.$session.set("loggedInUser",response.login);
                            //alert('valid user id or password!');
                            this.$router.push('/Hm');
                            
                        }
                }).catch(e => {
                    console.log(e);
                    alert('Invalid user id or password!');
                });
            },

            Login(event){
                

            if(this.user.type === 'Designer'){
            this.$http.post("http://localhost:8000/api/login",this.user)
            .then(function(response) {   
            if(response.status === 200){
                
                //this.$session.set(key,value)
                this.$router.push('/Hm')
                    }  
                })
            }

            




                }
            
        },


}
</script>

<style>

</style>