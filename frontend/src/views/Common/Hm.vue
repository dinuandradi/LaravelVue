<template>
    <v-app class="grey lighten-2"> 
    <div class="back">
        <Dheader/>
        
        <v-parallax src="http://www.cursaintercol.cat/upload/o/19/191699_website-background-images-hd.jpg" max-height="1000" height='100%'>
        <v-container class="my-2">
            <v-sheet
            class="py-3 px-5"
            :elevation="10"
            color="blue-grey lighten-3"
            height="824"
             max-width="1300"
            >

        <v-container>
            <v-carousel :show-arrows="false"
            height="350"
            width="940">
                <v-carousel-item
                    v-for="(item,i) in items"
                    :key="i"
                    :src="item.src">
                </v-carousel-item>
            </v-carousel>                  
        </v-container>

        <v-container>
          <v-layout wrap align-content-space-around text-xs-center>
            <v-flex xs1></v-flex>
            <v-flex xs3><v-card color="blue-grey lighten-3"><v-card-text class="px-0"><h3><b>Capabilities</b></h3>We proactively identify the market dynamics and adopt a market responsive approach to meet diverse customer requirements. With continuous emphasis on upgrading our manufacturing capabilities and processes, we remain highly competitive in the world market place. Adherence to quality measures, timely delivery, competitive pricing and prompt response to diverse global customer demands have contributed to the continued growth of the company</v-card-text></v-card></v-flex>
            <v-spacer></v-spacer>
            <v-flex xs3><v-card color="blue-grey lighten-3"><v-card-text class="px-1"><h3><b>Wheels and Tire market</b></h3>Elastomeric products cater mainly for the material handling industry. Typical applications are rubber wheels for casters used in shopping trollies, airport trollies, hospital carts and a wide variety of other Industrial and commercial applications. Elastomeric also sells natural rubber solid tires that are used in numerous industrial folk lift applications around the globe.</v-card-text></v-card></v-flex>
            <v-spacer></v-spacer>
            <v-flex xs3><v-card color="blue-grey lighten-3"><v-card-text class="px-1"><h3><b>Global Advantages</b></h3>Sri Lanka is the manufacturing capital of the world for high quality industrial natural rubber products which is sourced locally.The history of Sri Lanka’s rubber industry dates back to 1876.
Elastomeric Engineering is certified with: ISO 9001 Quality Management System, ISO 14001 Environmental Management System, ISO 18001 Occupational Health and Safety Management System and ISO 50001 Energy Management System.</v-card-text></v-card></v-flex>
            <v-flex xs1></v-flex>
          </v-layout>
      </v-container>
        

            </v-sheet>
        </v-container>

        </v-parallax>
        <cfooter/>
    </div>
    </v-app>              
</template>

<script>

import cfooter from './HFooter.vue'
import Dheader from './Hheader.vue'

export default {
  components: {
            cfooter,
            Dheader,
            },

    data () {
      return {
        items: [
          {
            src: 'https://www.elastomericgroup.com/images/slider/slides/slide1.jpg',
          },
          {
            src: 'https://www.elastomericgroup.com/images/slider/slides/slide2.jpg',
          },
          {
            src: 'https://www.elastomericgroup.com/images/slider/slides/slide3.jpg',
          },
          {
            src: 'https://www.elastomericgroup.com/images/slider/slides/slide4.jpg',
          },
        ]
        
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