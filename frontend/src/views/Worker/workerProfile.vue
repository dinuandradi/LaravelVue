<template>
    <v-app class="grey lighten-2" align="center">
        <div class="back text-center">
        <wHeader/>
        <v-parallax src="http://www.cursaintercol.cat/upload/o/19/191699_website-background-images-hd.jpg" max-height="1000" height='100%'>
            <v-container class="my-2" align="center" >
            <v-sheet 
            :elevation="10"
            color="white-1"
            height="550"
             width="1200"
            >
                <v-container>
                    <h4><font size="5" face="Arial Black">This is main worker profile</font></h4>
                    <v-card
                    class="mx-auto"
                    max-width="434"
                    tile
                    >
                     <v-img
                        height="100%"
                        src="https://cdn.vuetifyjs.com/images/cards/server-room.jpg"
                    >
                    <v-row
                        align="end"
                        class="fill-height"
                    >
                     <v-col
                        align-self="start"
                        class="pa-0"
                        cols="12"
                     >
                    <v-avatar
                        class="profile"
                        color="grey"
                        size="200"
                        tile
                    >
                    <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                     </v-avatar>
                    </v-col>
                        <v-col class="py-0">
                        <v-list-item
                            color="rgba(0, 0, 0, .4)"
                            dark
                        >
                                <v-list-item-content>
                                <v-list-item-title class="title" font color=''>Marcus Obrien</v-list-item-title>
                                <v-list-item-subtitle>Designer</v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>
                         </v-col>
                        </v-row>
                    `</v-img>
                </v-card>
                    <!--<p>need to show the progress of the current slot.</p>-->
                </v-container>
            </v-sheet>
        </v-container>           
        
        </v-parallax>       
    <cfooter/>
    </div>
</v-app>
</template>

<script>

    //import workerHeader from './workerHeader.vue'
    import cfooter from '../Design/Footer.vue'
    import wHeader from './wHeader.vue'
    //import testheader from '../Design/testheader.vue'
    

    export default {
       components: {
            //workerHeader,
            cfooter,
            wHeader,
           // testheader
           
            
           
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
