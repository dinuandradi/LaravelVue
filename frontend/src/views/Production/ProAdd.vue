<template>

<v-app class="grey lighten-2" >
    <div class="back" align="center">
        <Dheader/>
          <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>

        <v-container class="my-2" >
            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="brown lighten-5"
            height="2500"
            width="800"
            align="center"
            >
                <v-container>
                     
                    <h4>Add Production Record</h4>
                      <v-form  class="my-2 mx-5" ref="form" @submit.prevent="submitForm">
                          <v-text-field
                            label="Press No"
                            :rules="[inputRules.required]"  
                            name="Pressno" 
                            v-model="production.Pressno"
                            shaped clearable>
                           </v-text-field>
                          <v-text-field 
                            label="Part No" 
                            name="Partno"
                             v-model="production.Partno"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Item" 
                            name="Item"
                             v-model="production.Item"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="OP" 
                            name="op"
                             v-model="production.op"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="DL" 
                            name="dl"
                             v-model="production.dl"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Material" 
                            name="Material"
                             v-model="production.Material"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Six_2target" 
                            name="six_2target"
                             v-model="production.six_2target"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Two_10target" 
                            name="two_10target"
                             v-model="production.two_10target"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Ten_6target" 
                            name="ten_6target"
                             v-model="production.ten_6target"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Total target percentage" 
                            name="TotaltargetPrecentage"
                             v-model="production.TotaltargetPrecentage"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Machine run factor" 
                            name="Machine_run_factor"
                             v-model="production.Machine_run_factor"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Actual run factor" 
                            name="Actual_run_factor"
                             v-model="production.Actual_run_factor"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Six_2Empl" 
                            name="six_2Empl"
                             v-model="production.six_2Empl"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Two_10Empl" 
                            name="two_10Empl"
                             v-model="production.two_10Empl"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Ten_6Empl" 
                            name="ten_6Empl"
                             v-model="production.ten_6Empl"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Six_2Losttime" 
                            name="six_2Losttime"
                             v-model="production.six_2Losttime"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Two_10Losttime" 
                            name="two_10Losttime"
                             v-model="production.two_10Losttime"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Ten_6Losttime" 
                            name="ten_6Losttime"
                             v-model="production.ten_6Losttime"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Six_2GoodTotal" 
                            name="six_2GoodTotal"
                             v-model="production.six_2GoodTotal"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Six_2Reject" 
                            name="six_2Reject"
                             v-model="production.six_2Reject"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Six_2Total" 
                            name="six_2Total"
                             v-model="production.six_2Total"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Two_10Total" 
                            name="two_10Total"
                             v-model="production.two_10Total"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Ten_6Total" 
                            name="ten_6Total"
                             v-model="production.ten_6Total"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Reject Total" 
                            name="RejectTotal"
                             v-model="production.RejectTotal"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Good Total" 
                            name="GoodTotal"
                             v-model="production.GoodTotal"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Six_2actual_time" 
                            name="six_2actual_time"
                             v-model="production.six_2actual_time"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Two_10actual_time" 
                            name="two_10actual_time"
                             v-model="production.two_10actual_time"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Ten_6actual_time" 
                            name="ten_6actual_time"
                             v-model="production.ten_6actual_time"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Six_2new_target" 
                            name="six_2new_target"
                             v-model="production.six_2new_target"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Two_10new_target" 
                            name="two_10new_target"
                             v-model="production.two_10new_target"
                             shaped clearable>
                          </v-text-field>
                          <v-text-field 
                            label="Ten_6new_target" 
                            name="ten_6new_target"
                             v-model="production.ten_6new_target"
                             shaped clearable>
                          </v-text-field>


                        
                        <v-container >
                        <v-btn class="success mx-5 mt-3" type="submit">Send</v-btn>
                        
                        <v-btn class="success mx-5 mt-3" @click="reset">Reset</v-btn> 
                        </v-container>
                      </v-form>
 
                </v-container>
            </v-sheet>
        </v-container>           
          </v-parallax>
          <cfooter/>
    </div>
</v-app>        
        
</template>


<script>
    
    import cfooter from '../Production/ProFooter.vue'
    import Dheader from '../Production/ProHeader.vue'
   
    
    export default {
       components: {
           
            cfooter,
            Dheader,
            
            },
        data(){
            return{
                
                 
                production:{
                    Pressno:'',
                    Partno:'',
                    Item:'',
                    op:'',
                    dl:'',
                    Material:'',
                    six_2target:'',
                    two_10target:'',
                    ten_6target:'',
                    TotaltargetPrecentage:'',
                    Machine_run_factor:'',
                    Actual_run_factor:'',
                    six_2Empl:'',
                    two_10Empl:'',
                    ten_6Empl:'',
                    six_2Losttime:'',
                    two_10Losttime:'',
                    ten_6Losttime:'',
                    six_2GoodTotal:'',
                    six_2Reject:'',
                    six_2Total:'',
                    two_10Total:'',
                    ten_6Total:'',
                    RejectTotal:'',
                    GoodTotal:'',
                    six_2actual_time:'',
                    two_10actual_time:'',
                    ten_6actual_time:'',
                    six_2new_target:'',
                    two_10new_target:'',
                    ten_6new_target:'',
                    },

                inputRules:{
                        required: value => !!value || 'Required.'
                    },
            }
                 
        },
        
        methods:{
            reset(){
                this.$refs.form.reset()
            },
            submitForm(){
                 this.$http.post("http://localhost:8000/api/Addproductiondata",this.production)
                     // eslint-disable-next-line no-unused-vars
                     .then(function(response){
                        
                         this.$router.push('/productiondata')
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