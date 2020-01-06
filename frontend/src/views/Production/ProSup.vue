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
            height="824"
            max-width="1300"
            >

      <v-data-table :headers="headers" :items="details" :items-per-page="5" class="elevation-1">
        <template v-slot:top>
          <v-toolbar flat color="white">
            <v-toolbar-title>My CRUD</v-toolbar-title>
            <v-divider
              class="mx-4"
              inset
              vertical
            ></v-divider>
            <v-spacer></v-spacer>
            <v-dialog v-model="dialog" max-width="500px">
              <template v-slot:activator="{ on }">
                <v-btn color="primary" dark class="mb-2" v-on="on">New Item</v-btn>
              </template>
              <v-card>
                <v-card-title>
                  <span class="headline">{{ formTitle }}</span>
                </v-card-title>
                <v-card-actions>
                  <v-spacer></v-spacer>
                  <v-btn color="blue darken-1" text @click="close">Cancel</v-btn>
                  <v-btn color="blue darken-1" text @click="save">Save</v-btn>
                </v-card-actions>
              </v-card>
            </v-dialog>
          </v-toolbar>
        </template>  
        <template slot="items" slot-scope="props">
          <td class="text-xs-left">{{ props.item.pNo }}</td>
          <td class="text-xs-left">{{ props.item.partNo }}</td>
          <td class="text-xs-left">{{ props.item.item }}</td>
          <td class="text-xs-left">{{ props.item.material }}</td>
          <td class="text-xs-left">{{ props.item.target }}</td>
          <td class="text-xs-left">{{ props.item.totalOutput }}</td>
          <td class="text-xs-left">{{ props.item.efficiency }}</td>
          <td class="text-xs-left">{{ props.item.reject }}</td>
          <td class="text-xs-left">{{ props.item.spew }}</td>
        </template>
        <template v-slot:item.action="{ item }">
          <v-icon
            small
            class="mr-2"
            @click="editItem(item)"
          >
            edit
          </v-icon>
          <v-icon
            small
            @click="deleteItem(item)"
          >
            delete
          </v-icon>
        </template>
        <template v-slot:no-data>
          <v-btn color="primary" @click="initialize">Reset</v-btn>
        </template>
      </v-data-table>
      <div class="text-center">
        <v-btn rounded color="primary" dark>submit</v-btn>
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
      headers: [
        {
          text: "P_No",
          align: "left",
          sortable: false,
          value: "pNo"
        },
        { text: "Part_No", value: "partNo" },
        { text: "Item", value: "item" },
        { text: "Material", value: "material" },
        { text: "Target", value: "target" },
        { text: "Total_Output", value: "totalOutput" },
        { text: "Efficiency (%)", value: "efficiency" },
        { text: "Reject", value: "reject" },
        { text: "SPEW", value: "spew" }

      ],
      details: [
        {
          pNo: "G-01",
          partNo: 3900561027,
          item: "Clip 8",
          material: 63830,
          target: 250,
          totalOutput: 256,
          efficiency: 102.4,
          reject: 0,
          spew: 19.60

        },
        {
          pNo: "G-02",
          partNo: 3900561227,
          item: "Clip 10",
          material: 63830,
          target: 228,
          totalOutput: 229,
          efficiency: 102.632,
          reject: 5,
          spew: 19.00
        },
        {
          pNo: "G-03",
          partNo: 4354125,
          item: "NT100M",
          material: 70810,
          target: 220,
          totalOutput: 215,
          efficiency: 100,
          reject: 5,
          spew: 19.00
        },
        {
          pNo: "G-06",
          partNo: "T400202",
          item: "XGM032",
          material: 70814,
          target: 315,
          totalOutput: 313,
          efficiency: 100,
          reject: 2,
          spew: 6.00
        }
        
      ]
    };
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