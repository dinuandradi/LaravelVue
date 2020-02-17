<template>

    <v-app class="grey lighten-2"> 
  <div class="back">
    <Dheader />
                    <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>


            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="blue-grey darken-1"
            height="850"
            max-width="1500"
            >

        <v-data-table
    :headers="headers"
    :items="productions"
    class="elevation-1"
    dark
  >
    <template slot="items" slot-scope="props">
      <td class="text-xs-left">{{ props.item.Pressno }}</td>
          <td class="text-xs-left">{{ props.item.Partno }}</td>
          <td class="text-xs-left">{{ props.item.Item }}</td>
          <td class="text-xs-left">{{ props.item.op}}</td>
          <td class="text-xs-left">{{ props.item.dl }}</td>
          <td class="text-xs-left">{{ props.item.Material }}</td>
          <td class="text-xs-left">{{ props.item.six_2target }}</td>
          <td class="text-xs-left">{{ props.item.two_10target }}</td>
          <td class="text-xs-left">{{ props.item.ten_6target }}</td>
          <td class="text-xs-left">{{ props.item.TotaltargetPrecentage }}</td>
          <td class="text-xs-left">{{ props.item.Machine_run_factor}}</td>
          <td class="text-xs-left">{{ props.item.Actual_run_factor}}</td>
          <td class="text-xs-left">{{ props.item.six_2Empl}}</td>
          <td class="text-xs-left">{{ props.item.two_10Empl}}</td>
          <td class="text-xs-left">{{ props.item.ten_6Empl}}</td>
          <td class="text-xs-left">{{ props.item.six_2Losttime}}</td>
          <td class="text-xs-left">{{ props.item.two_10Losttime}}</td>
          <td class="text-xs-left">{{ props.item.ten_6Losttime}}</td>
          <td class="text-xs-left">{{ props.item.six_2GoodTotal}}</td>
          <td class="text-xs-left">{{ props.item.six_2Reject}}</td>
          <td class="text-xs-left">{{ props.item.six_2Total}}</td>
          <td class="text-xs-left">{{ props.item.two_10Total}}</td>
          <td class="text-xs-left">{{ props.item.ten_6Total}}</td>
          <td class="text-xs-left">{{ props.item.RejectTotal}}</td>
          <td class="text-xs-left">{{ props.item.GoodTotal}}</td>
          <td class="text-xs-left">{{ props.item.six_2actual_time}}</td>
          <td class="text-xs-left">{{ props.item.two_10actual_time}}</td>
          <td class="text-xs-left">{{ props.item.ten_6actual_time}}</td>
          <td class="text-xs-left">{{ props.item.six_2new_target}}</td>
          <td class="text-xs-left">{{ props.item.two_10new_target}}</td>
          <td class="text-xs-left">{{ props.item.ten_6new_target}}</td>
    </template>
  </v-data-table>


            </v-sheet>
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
      headers: [
        {
          text: "Pressno",
          align: "left",
          sortable: false,
          value: "pNo"
        },
        { text: "Partno", value: "Partno" },
        { text: "Item", value: "Item" },
        { text: "OP", value: "op" },
        { text: "DL", value: "dl" },
        { text: "Material", value: "Material" },
        { text: "6_2target", value: "six_2target" },
        { text: "2_10target", value: "two_10target" },
        { text: "10_6target", value: "ten_6target" },
        {text: "TotaltargetPrecentage", value: "TotaltargetPrecentage"},
        {text: "Machine_run_factor", value: "Machine_run_factor"},
        {text: "Actual_run_factor", value: "Actual_run_factor"},
        {text: "six_2Empl", value: "six_2Empl"},
        {text: "two_10Empl", value: "two_10Empl"},
        {text: "ten_6Empl", value: "ten_6Empl"},
        {text: "six_2Losttime", value: "six_2Losttime"},
        {text: "two_10Losttime", value: "two_10Losttime"},
        {text: "ten_6Losttime", value: "ten_6Losttime"},
        {text: "six_2GoodTotal", value: "six_2GoodTotal"},
        {text: "six_2Reject", value: "six_2Reject"},
        {text: "six_2Total", value: "six_2Total"},
        {text: "two_10Total", value: "two_10Total"},
        {text: "ten_6Total", value: "ten_6Total"},
        {text: "RejectTotal", value: "RejectTotal"},
        {text: "GoodTotal", value: "GoodTotal"},
        {text: "six_2actual_time", value: "six_2actual_time"},
        {text: "two_10actual_time", value: "two_10actual_time"},
        {text: "ten_6actual_time", value: "ten_6actual_time"},
        {text: "six_2new_target", value: "six_2new_target"},
        {text: "two_10new_target", value: "two_10new_target"},
        {text: "ten_6new_target", value: "ten_6new_target"},

      ],

    productions:[]

        // {
        //     Pressno : '',
        //     Partno : '',
        //     Item : '',
        //     op : '',
        //     dl : '',
        //     Material : '',
        //     six_2target : '',
        //     two_10target : '',
        //     ten_6target : ''
        // },
    

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