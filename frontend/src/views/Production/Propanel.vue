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
                    <h4>This is main Production panel</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio beatae obcaecati, voluptate sunt aut laboriosam saepe quibusdam ad, delectus, accusamus dolores. Architecto nam nobis explicabo perferendis, laborum modi labore quae!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus culpa soluta, quae provident eveniet consequatur magni officiis adipisci, pariatur harum magnam atque sit a fugiat sint sed dolorem reiciendis delectus.</p>
                </v-container>
            </v-sheet>
        </v-container>           
        
          <cfooter/>
    </div>
</v-app>        
        
</template>


<script>

    import Dheader from './ProHeader.vue'
    import cfooter from './ProFooter.vue'
    

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

