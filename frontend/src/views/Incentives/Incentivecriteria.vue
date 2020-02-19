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
                    max-width="1500"
                >
        
           
            
            
                <v-container>
                    <h4><font size="6" face="Arial" >Incentive Criterias</font></h4>
                   
                                <v-data-table 
                                :headers="headers2" 
                                :items="desserts2" 
                                :items-per-page="6" 
                                class="elevation-1" 
                                dark>
                                <template slot="items" slot-scope="props">
                                <td class="text-xs-left">{{ props.item.range }}</td>
                                <td class="text-xs-left">{{ props.item.unit }}</td>
                                <td class="text-xs-left">{{ props.item.amount }}</td>
                                </template>
                                </v-data-table> 

                </v-container>

           </v-sheet>        
            
        </v-container> 
        
        </v-parallax>
                  
        
          <cfooter/>
    </div>
</v-app>        
        
</template>

<script>
import Iheader from "./Iheader.vue";

import cfooter from "./Footer.vue";
export default {
  name: "app",
  components: {
    cfooter,
    Iheader
  },
  data() {
    return {
      
      
      headers2: [
        {
          text: "Range(%)",
          align: "left",
          sortable: true,
          value: "range"
        },
        { text: "Unit", value: "unit" },
        { text: "Payable amount(Rs.)", value: "amount" },
        ],
      desserts2: [
        { range: "<80%",unit: "Range 0" ,amount: "0"},
        { range: ">80%,<89.9",unit: "Range 1" ,amount: "63.5"},
        { range: ">90%,<94.9",unit: "Range 2" ,amount: "93.25"},
        { range: ">95%,<97.9",unit: "Range 3" ,amount: "106"},
        { range: ">98%,<99.9",unit: "Range 4" ,amount: "159"},
        { range: ">100%,<103",unit: "Range 5" ,amount: "212"},
        
        
        
        
      ]
    };
  }
};


</script>

<style>

</style>