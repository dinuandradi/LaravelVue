<template>

<v-app class="grey lighten-2">
    <div class="back">
        <Iheader/>
        <v-parallax src="http://www.cursaintercol.cat/upload/o/19/191699_website-background-images-hd.jpg" max-height="1000" height='100%'>
        
        <v-container class="my-2" >
           
            
            
                <v-container>
                    <h4><font size="6" face="Comic Sans MS" >Incentive Calculations</font></h4>
                   
                         
                                <v-data-table :headers="headers" :items="desserts" :items-per-page="6" class="elevation-1" color="blue-grey lighten-1">
                                <template slot="items" slot-scope="props">
                                <td class="text-xs-left">{{ props.item.number }}</td>
                                <td class="text-xs-left">{{ props.item.item }}</td>
                                <td class="text-xs-left">{{ props.item.target }}</td>
                                <td class="text-xs-left">{{ props.item.losstime }}</td>
                                <td class="text-xs-left">{{ props.item.actualtime }}</td>
                                <td class="text-xs-left">{{ props.item.newtarget }}</td>
                                <td class="text-xs-left">{{ props.item.employeenumber }}</td>
                                <td class="text-xs-left">{{ reject }}</td>
                                <td class="text-xs-left">{{ production }}</td>
                                <td class="text-xs-left">{{ rangeachieved }}</td>
                                <td class="text-xs-left">{{ rej }}</td>
                                <td class="text-xs-left">{{ F/G  }}</td>
                                <td class="text-xs-left">{{ payable   }}</td>
                                </template>
                                </v-data-table>
                                <div class="text-center">
                                <v-btn rounded  dark color="grey darken-1" height="10" width="20" href="#"><router-link to="./publish"><font color="black">Publish</font></router-link></v-btn>
                                </div>
                                <v-spacer></v-spacer>
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
                                
                                <v-data-table :headers="headers2" :items="desserts2" :items-per-page="6" class="elevation-1" color="blue-grey lighten-1">
                                <template slot="items" slot-scope="props">
                                <td class="text-xs-left">{{ props.item.range }}</td>
                                <td class="text-xs-left">{{ props.item.unit }}</td>
                                <td class="text-xs-left">{{ props.item.amount }}</td>
                                </template>
                                </v-data-table> 
                                </v-card>
                                
                                
                    
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
          text: "Press No:",
          align: "left",
          sortable: true,
          value: "number"
        },
        { text: "Item", value: "item" },
        { text: "450 min:TARGET(Pcs)", value: "target" },
        { text: "Acceptable Loss time(Min)", value: "losstime" },
        { text: "Actual Time(Min)", value: "actualtime" },
        { text: "New Target", value: "newtarget" },
        { text: "Employee Number", value: "employeenumber" },
        { text: "Total Reject", value: "reject" },
        { text: "Range Achieved(%)", value: "rangeachieved" },
        { text: "REJ(%)", value: "rej" },
        { text: "F/G Rej", value: "F/G" },
        { text: "Payable Amount", value: "payable" }

      ],
      desserts: [
        {
          number: "10",
          item: 159,
          target: 6.0,
          losstime: 24,
          actualtime: 4.0,
          newtarget: "1"

        },
        {
          number: "1",
          item: 237,
          target: 9.0,
          losstime: 37,
          actualtime: 4.3,
          newtarget: "100"
        },
        {
          number: "8",
          item: 262,
          target: 16.0,
          losstime: 23,
          actualtime: 6.0,
          newtarget: "7"
        },
        {
          number: "20",
          item: 305,
          target: 3.7,
          losstime: 67,
          actualtime: 4.3,
          newtarget: "8"
        },
        {
          number: "19",
          item: 356,
          target: 16.0,
          losstime: 49,
          actualtime: 3.9,
          newtarget: "16"
        },
        {
          number: "16",
          item: 375,
          target: 0.0,
          losstime: 94,
          actualtime: 0.0,
          newtarget: "0"
        },
        {
          number: "15",
          item: 392,
          target: 0.2,
          losstime: 98,
          actualtime: 0,
          newtarget: "2"
        },
        {
          number: "12",
          item: 408,
          target: 3.2,
          losstime: 87,
          actualtime: 6.5,
          newtarget: "45"
        },
        {
          number: "4",
          item: 452,
          target: 25.0,
          losstime: 51,
          actualtime: 4.9,
          newtarget: "22"
        },
        {
          number: "13",
          item: 518,
          target: 26.0,
          losstime: 65,
          actualtime: 7,
          newtarget: "9"
        }
      ],
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


