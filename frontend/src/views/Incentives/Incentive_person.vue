<template>

<v-app class="grey lighten-2">
    <div class="back">
        <Iheader/>
        <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1200" height='100%'>
        
        <v-container class="my-2" >
            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="blue-grey darken-1"
            height="824"
            max-width="1300"
                >
            
                <v-container>
                    <h4><font size="6" face="Arial">Incentive data</font></h4>
                   
                         
                                <v-card>
                                <!--<v-card-title>
                                    Incentive Data
                                    <v-spacer></v-spacer>
                                    <v-text-field
                                    v-model="search"
                                    append-icon="search"
                                    label="Search"
                                    single-line
                                    hide-details
                                    ></v-text-field>
                                </v-card-title>-->
                                <v-data-table 
                                :headers="headers" 
                                :items="productions" 
                                :items-per-page="6" 
                                class="elevation-1" 
                                dark>
                                <template slot="items" slot-scope="props">
                                <td class="text-xs-left">{{ props.item.Pressno }}</td>
                                <td class="text-xs-left">{{ props.item.Item }}</td>
                                <td class="text-xs-left">{{ props.item.six_2target }}</td>
                                <td class="text-xs-left">{{ props.item.six_2Losttime }}</td>
                                <td class="text-xs-left">{{ props.item.six_2actual_time }}</td>
                                <td class="text-xs-left">{{ props.item.six_2Total }}</td>
                                <td class="text-xs-left">{{ props.item.six_2new_target }}</td>
                                <td class="text-xs-left">{{ props.item.six_2Empl }}</td>
                                <td class="text-xs-left">{{ props.item.six_2Reject }}</td>
                                
                               
                                </template>
                                </v-data-table>
                                
                                </v-card>
                                <div class="text-center">
                                    <v-btn rounded  dark color="deep-purple darken-4" height="10" width="20" href="#"><router-link to="./IRecentReports"><font color="black">Calculate Incentives</font></router-link></v-btn>
                                </div>
                                
                    
                </v-container>
          </v-sheet>     
        </v-container>
        
        </v-parallax>        
        
          <cfooter/>
    </div>
</v-app>        
        
</template>


<script>

    
    import cfooter from './Footer.vue'
    import Iheader from './Iheader.vue'
    
    

    export default {
        name: "app",
        components: {
            
            cfooter,
            Iheader,
       },
           
        data() {
    return {
      headers: [
        {
          text: "Press No:",
          align: "left",
          sortable: true,
          value: "number"
        },
        { text: "Item", value: "item" },
        { text: "450 min:TARGET(Pcs)", value: "target" },
        { text: "Acceptable Loss time(Min)", value: "losstime" },
        { text: "Actual Time(Min)", value: "actualtime" },
        { text: "6-2 Total output", value: "total output" },
        { text: "New Target", value: "newtarget" },
        { text: "Employee Number", value: "employeenumber" },
        { text: "Total Reject", value: "reject" },
        
        

      ],
      
      productions:[]


    };
  },



  created(){

            this.$http.get("http://localhost:8000/api/currentproductions")

             .then(function(response){
                        
                         this.productions = response.body.allproductions;
                    })

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

