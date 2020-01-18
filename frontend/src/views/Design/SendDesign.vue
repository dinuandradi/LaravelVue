<template>

<v-app class="grey lighten-2">
    <div class="back">
        <Dheader/>
        
        <v-container class="my-2" >
            <v-sheet
            :elevation="10"
            color="blue-grey lighten-1"
            height="424"
             width="1200"
            >
                <v-container>
                    <h4>upload and send design</h4>
                     <v-file-input multiple label="File input"></v-file-input>
                    
                </v-container>
            </v-sheet>
        </v-container>           
        
          <cfooter/>
    </div>
</v-app>        
        
</template>


<script>

    
    import cfooter from './Footer.vue'
    import Dheader from './Dheader.vue'
    
    

    export default {
       components: {
            
            cfooter,
            Dheader,
            
           
            
           
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

