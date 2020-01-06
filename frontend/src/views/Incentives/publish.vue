<template>

<v-app class="grey lighten-2">
    <div class="back">
        <Iheader/>
        <v-parallax src="http://www.cursaintercol.cat/upload/o/19/191699_website-background-images-hd.jpg" max-height="1000" height='100%'>
        
        <v-container class="my-2" >
           
            
            
                <v-container>
                    <h4><font size="6" face="Comic Sans MS">Incentive sheet</font></h4>
                                <v-card>
                                <v-card-title>
                                    Incentives
                                    <v-spacer></v-spacer>
                                    <v-text-field
                                    v-model="search"
                                    append-icon="search"
                                    label="Search"
                                    single-line
                                    hide-details
                                    ></v-text-field>
                                </v-card-title>
                                
                                  <v-data-table :headers="headers" :items="desserts" :items-per-page="6" class="elevation-1" color="blue-grey lighten-1">
                                <template slot="items" slot-scope="props">
                                <td class="text-xs-left">{{ props.item.number }}</td>
                                <td class="text-xs-left">{{ props.item.item }}</td>
                                
                                </template>
                                </v-data-table>  
                                
                                </v-card>
                                
                                
                   
                         
                                
                                <div class="text-center">
                                    
                                    <v-btn rounded  dark color="grey darken-1" height="10" width="40" href="#"><router-link to="./publish"><font color="black">Download</font></router-link></v-btn>
                                </div>
                    
                </v-container>
            
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
      headers: [
        {
          text: "Worker ID",
          align: "left",
          sortable: true,
          value: "number"
        },
        { text: "Amount", value: "item" },
        
      ],
      desserts: [
        {
          number: "10",
          item: 159,
          
        },
        {
          number: "1",
          item: 237,
          
        },
        {
          number: "8",
          item: 262,
         
        },
        {
          number: "20",
          item: 305,
          
        },
        {
          number: "19",
          item: 356,
          
        },
        {
          number: "16",
          item: 375,
          
        },
        {
          number: "15",
          item: 392,
          
        },
        {
          number: "12",
          item: 408,
          
        },
        {
          number: "4",
          item: 452,
          
        },
        {
          number: "13",
          item: 518,
          
        }
      ]
    };
  }
};
</script>


