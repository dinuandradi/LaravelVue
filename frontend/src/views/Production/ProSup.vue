<template>
  <v-app class="grey lighten-2"> 
  <div class="back">
    <Dheader />

    <v-parallax src="http://www.cursaintercol.cat/upload/o/19/191699_website-background-images-hd.jpg" max-height="1000" height='100%'>
    <h4><font size="6" face="Comic Sans MS">Production Sheet</font></h4>
    <v-container class="my-2">
            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="wight-1"
            height="850"
            max-width="1500"
            >


          <v-container>
                <v-layout row class="my-5" >
                    <v-flex>
                        <v-card color="blue darken-1">
                        Press number
                        </v-card>
                    </v-flex>
                    <v-flex>
                        <v-card color="light-blue darken-2">
                        Part no
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="green lighten-1">
                        Item
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="orange accent-2">
                        Material
                        </v-card>
                    </v-flex>
                </v-layout>


                <div >
                 <v-layout row  :key="productions" v-for="productions in productions" >
                    <v-flex>
                        <v-card color="deep-purple accent-1">
                        {{productions.Pressno}}
                        </v-card>
                    </v-flex>
                    <v-flex>
                        <v-card color="deep-purple accent-1">
                        {{productions.Partno}}
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="deep-purple accent-1">
                        {{productions.Item}}
                        </v-card>
                    </v-flex>
                     <v-flex>
                         <v-card color="deep-purple accent-1">
                        {{productions.Material}}
                        </v-card>
                    </v-flex>
                </v-layout>
                </div>


            </v-container>
     




      <div class="text-center">
          <table class="table">
            <tr>
                <td>
                  <label>Select production sheet for upload</label>
                </td>

                <td width="30">
                  <input type="file" name="select_file"/>  
                </td>
                
                <td>
                  <v-btn rounded type="submit" name="upload" value="Upload" color="primary" dark>Upload</v-btn>
                </td>

            </tr>
          </table>
        <!--<v-btn rounded color="primary" dark>submit</v-btn>  -->
      </div>

            </v-sheet>
    </v-container>
    </v-parallax>
    <cfooter />
  </div>
  </v-app>
</template>


<script>
import Dheader from './ProHeader.vue'
import cfooter from './ProFooter.vue'

export default {
  name: "app",
  components: {
    cfooter,
    Dheader,
  },
  data() {
    return {

    productions:[]

    };
  },

  created(){

            this.$http.get("http://localhost:8000/api/currentproductions")

             .then(function(response){
                        
                         this.productions = response.body.allproductions;
                    })

        }



};
</script>

<style>

    .back {

        background: linear-gradient(180deg, #978E8E 40.44%, rgba(173, 164, 164, 0.528293) 76.7%, rgba(199, 189, 189, 0) 100%);

    }

    .downf{

        margin-bottom: 0px;
    }


</style>