<template>

<v-app class="grey lighten-2">
    <div class="back">
        <wHeader/>
        <v-parallax src="http://www.cursaintercol.cat/upload/o/19/191699_website-background-images-hd.jpg" max-height="1000" height='100%'>
        <v-container class="my-2">
            <v-sheet
            :elevation="10"
            color="white-1"
            height="550"
             width="1200"
            >
                <v-container>
                    <p><font size="5" face="Arial Black">This is main worker Reports</font></p>
                      <v-card-actions>
                        <v-btn rounded color="primary" dark><font face="Times New Roman">Goto Current Slot</font></v-btn>
                    </v-card-actions>
                   <v-spacer></v-spacer>
        
                    <v-col cols="12" sm="4">
                        <!--<p>Editable</p>-->

                            <v-overflow-btn
                            class="my-2"
                            :items="dropdown_edit"
                            label="Choose Slot Number"
                            editable
                            item-value="number"
                            ></v-overflow-btn>
                        </v-col>
                </v-container>
            </v-sheet>
        </v-container>           
        </v-parallax>
          <cfooter/>
    </div>
</v-app>        
        
</template>


<script>

    
    import cfooter from '../Design/Footer.vue'
    import wHeader from './wHeader.vue'
   
    

    export default {
       components: {
            
            cfooter,
            wHeader,
           
           
            
           
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
