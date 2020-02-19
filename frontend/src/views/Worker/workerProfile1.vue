<template>
  <v-app class="grey lighten-2" align="center">
    <div class="back text-center">
      <wHeader />
      <v-parallax
        src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg"
        max-height="1000"
        height="100%"
      >
        <v-container class="my-2" align="center">
          <v-sheet :elevation="10" color="blue-grey darken-2" height="850" width="1200">
            <v-container>
              <h4>
                <font size="5" face="Arial Black">Incentives</font>
              </h4>
              <v-card class="mx-auto" max-width="434" color="blue-grey darken-2" tile>
                <!--v-row
                        align="end"
                        class="fill-height"
                    >
                     <v-col
                        align-self="start"
                        class="pa-0"
                        cols="12"
                -->
                <v-avatar class="profile" color="grey" size="200" tile>
                  <v-img
                    height="100%"
                    src="https://www.scienceabc.com/wp-content/uploads/2017/01/Kim-Ung-yong-young.jpg"
                  ></v-img>
                </v-avatar>
                
                
              </v-card>

               <v-container>
                         
                                <v-card>
                                <v-card-title>
                                    Incentive Data
                                    <v-spacer></v-spacer>
                                    <v-text-field
                                    v-model="search"
                                    append-icon="search"
                                    label="Search"
                                    single-line
                                    hide-details
                                    ></v-text-field>
                                </v-card-title>
                                <v-data-table :headers="headers" :items="productions" :items-per-page="6" class="elevation-1" color="blue-grey lighten-1">
                                <template slot="items" slot-scope="props">
                                
                                <td class="text-xs-left">{{ props.item.six_2Empl }}</td>
                                <td class="text-xs-left">{{ props.item.six_2target }}</td>
                                <td class="text-xs-left">{{ props.item.six_2Total }}</td>
                                <td class="text-xs-left">{{ props.item.RangeAchieved }}</td>
                                <td class="text-xs-left">{{ props.item.PayableAmount }}</td>
                                
                                
                               
                                </template>
                                </v-data-table>
                                
                                </v-card>
                                
                                
                    
                </v-container>

              <!--<p>need to show the progress of the current slot.</p>-->
            </v-container>
          </v-sheet>
        </v-container>
      </v-parallax>
      <cfooter />
    </div>
  </v-app>
</template>

<script>
//import workerHeader from './workerHeader.vue'
import cfooter from "../Design/Footer.vue";
import wHeader from "./wHeader.vue";
import axios from "axios";
//import testheader from '../Design/testheader.vue'

export default {
  components: {
    //workerHeader,
    cfooter,
    wHeader
    // testheader
  },
  data() {
    return {
      list: [],
      headers: [
        { text: "Employee Number", value: "employeenumber" },
        { text: "450 min:TARGET(Pcs)", value: "target" },
        { text: "6-2 Total output", value: "total output" },
        { text: "Range Achieved", value: "range" },
        { text: "Total Payment", value: "pay" }
      ],
      users:{},
      result: [],
      productions:[],
    };
  },
  mounted() {
    this.getworkerProfile1();

    let token = localStorage.getItem("token");
    if (!token) {
      this.$router.push("/Login");
    } else {
      axios
        .get("http://localhost:8000/api/showworker/" + token)
        .then(response => {
          this.users = response.data.logins;
          console.log(this.users.uid);
          let uid = this.users.uid;
          localStorage.setItem("uid",uid);

          //   Event.$emit("userLoaded", this.users);
        });
    }

       
  },

  created(){

       let uid = localStorage.getItem('uid');
        console.log(uid)
            axios.get("http://localhost:8000/api/getResult?uid="+uid)
            .then(response => {
                this.result=response;
            console.log(this.result);
            });

  },
  methods: {
    getworkerProfile1() {
      const vm = this;
      axios
        .get("http://localhost:8000/api/getworkerProfile1")
        .then(function(response) {
          vm.list = response.data.message;
        })
        .catch(function(error) {
          console.log(error);
        });
    }
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
  background: linear-gradient(
    180deg,
    #978e8e 40.44%,
    rgba(173, 164, 164, 0.528293) 76.7%,
    rgba(199, 189, 189, 0) 100%
  );
}

.downf {
  margin-bottom: 0px;
}
</style>
