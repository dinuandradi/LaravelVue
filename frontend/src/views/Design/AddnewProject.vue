<template>

<v-app class="grey lighten-2">
    
    <div class="back">
        <Dheader/>
        <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>
        <v-container class="my-2">
            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="blue-grey lighten-3"
            height="824"
             max-width="1200"
            >
                <v-container>
                     
                    <h4>add new projects</h4>
                      <v-form  class="my-2 mx-5" ref="form" @submit.prevent="submitForm">
                          <v-text-field
                            label="project name" 
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
                              <v-text-field :value="item.orderdate" slot="activator" label="order date"  prepend-icon="place"></v-text-field>
                              <v-date-picker v-model="item.orderdate"> </v-date-picker>
                          </v-menu>
                           <v-menu class="mx-5">
                              <v-text-field :value="item.duedate" slot="activator" label="due date" prepend-icon="place"></v-text-field>
                              <v-date-picker v-model="item.duedate"> </v-date-picker>
                          </v-menu>

                        <v-container>
                        <v-btn class="success mx-0 mt-3" type="submit">Add project</v-btn>
                        <v-btn class="success mx-0 mt-3" @click="reset">Reset</v-btn> 
                        </v-container>
                      </v-form>

                    
                    
                </v-container>
            </v-sheet>
        </v-container>           
        
          <cfooter/>
        </v-parallax>
    </div>
</v-app>        
        
</template>


<script>

    import Designheader from './Designheader.vue'
    import cfooter from './Footer.vue'
    import Dheader from './Dheader.vue'
    import testheader from './testheader.vue'
    

    export default {
       components: {
            Designheader,
            cfooter,
            Dheader,
            testheader
            },

        data(){
            return{
                
                    
                item:{
                    pname:'',
                    pcode:'',
                    orderdate:'',
                    duedate:''
                    
                    
                },
                inputRules:[
                    v => v.length >= 5 ||'Minimum length is 5 characters'
                ]
            }

        },

        methods:{
            reset(){
                this.$refs.form.reset()
            },

            submitForm(){

                this.$http.post("http://localhost:8000/api/AddnewProject",this.item)
                    .then(function(response){
                        
                        this.$router.push('/DesignCurPro')
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

