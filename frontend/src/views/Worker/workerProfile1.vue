<template>
    <v-app class="grey lighten-2" align="center">
        <div class="back text-center">
        <wHeader/>
        <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>
            <v-container class="my-2" align="center" >
            <v-sheet 
            :elevation="10"
            color="blue-grey darken-2"
            height="550"
             width="1200"
            >
                <v-container>
                    <h4><font size="5" face="Arial Black">Profile</font></h4>
                    <v-card
                    class="mx-auto"
                    max-width="434"
                    color="blue-grey darken-2"
                    tile
                    > 
                     
                    <!--v-row
                        align="end"
                        class="fill-height"
                    >
                     <v-col
                        align-self="start"
                        class="pa-0"
                        cols="12"
                     -->
                    <v-avatar
                        class="profile"
                        color="grey"
                        size="200"
                        tile
                    >
                    <v-img height="100%" 
                    src="https://www.scienceabc.com/wp-content/uploads/2017/01/Kim-Ung-yong-young.jpg"></v-img>

                     </v-avatar>
                    <!--/v-col-->
                        <!--v-col class="py-0">
                        <v-list-item two-line>
                                <v-list-item-content>
                                <v-list-item-title class="title" font color=''>Marcus Obrien</v-list-item-title>
                                <v-list-item-subtitle>Designer</v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>
                         </v-col-->
                        <!--/v-row-->
                    `
                </v-card>

                 <v-container>
                <v-data-table 
                    
                    :headers="headers"
                    :items="list"
                    dark
                    
                    >
                    <template slot="items" slot-scope="props">
                        <td class="text-xs-right">{{ props.item.uid }}</td>
                        <td class="text-xs-right">{{ props.item.ufname }}</td>
                        <td class="text-xs-right">{{ props.item.ulname }}</td>
                        <td class="text-xs-right">{{ props.item.uemail }}</td>
                        <td class="text-xs-right">{{ props.item.udep }}</td>
                        
                        
                        
                        
                    </template>
                   
                    
                </v-data-table>
                

                </v-container>

                
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
    import axios from 'axios'
    //import testheader from '../Design/testheader.vue'
    

    export default {
       components: {
            //workerHeader,
            cfooter,
            wHeader,
           // testheader
           
        },
        data() {
        return {
            list:[],
            headers:[
                {
                    text: "User Id",
                    align: "left",
                    sortable: false,
                    value: "uid"
                },
                { text: "First Name", value: "ufname" },
                { text: "Last Name", value: "ulname" },
                { text: "E-mail", value: "uemail" },
                { text: "Dep", value: "udep" },
                
                
            ]
        };
    },
    mounted() {
        this.getworkerProfile1();
    },
    methods:{
        getworkerProfile1() {
            const vm = this;
            axios.get('http://localhost:8000/api/getworkerProfile1')
                .then(function (response) {
                    vm.list = response.data.message;                    
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        
        
        

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
