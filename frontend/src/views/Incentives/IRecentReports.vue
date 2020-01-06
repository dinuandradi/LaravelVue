<template>

<v-app class="grey lighten-2">
    <div class="back">
        <Iheader/>
        
        <h4>These are reports</h4>
         <h4>projects are shown here</h4>
          <h4>projects are shown here</h4>
           <h4>here are the functions and views</h4>
            <h4>projects are shown here</h4>
             <h4>projects are shown here</h4>
              <h4>functions and views blah blah blah puhh</h4>
               <h4>projects are shown here</h4>
                <h4>projects are shown here</h4>
                 <h4>projects are shown here</h4>
                  <h4>projects are shown here</h4>
                   
        
          <cfooter/>
    </div>
</v-app>        
        
</template>


<script>

    
    import cfooter from './Footer.vue'
    import Iheader from './Iheader.vue'
    

    export default {
       components: {
            
            cfooter,
            Iheader,
            
            
           
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

