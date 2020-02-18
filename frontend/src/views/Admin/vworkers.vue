<template>
    <div class="back" id="customers" >
        <Aheader />

        <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>
        <h4><font size="6" face="Arial">Registered Users</font></h4>
            <v-container class="my-2">
                
                <v-sheet
                    class="py-3 px-5"
                    :elevation="10"
                    color="blue-grey darken-2"
                    height="550"
                    max-width="1300"
                >

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
                        <td class="text-xs-right">{{ props.item.ulevel }}</td>
                        
                        
                        
                    </template>
                   
                    
                </v-data-table>
                
                
                </v-sheet>
                
            </v-container>
        </v-parallax>
    </div>
</template>


<script>


import cfooter from '../Design/Footer.vue'
import Aheader from './Aheader.vue'
import axios from 'axios'
import jsPDF from 'jspdf';

export default {
    
    name: "app",
    components: {
        cfooter,
        Aheader,
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
                { text: "level", value: "ulevel" },
                
            ]
        };
    },
    mounted() {
        this.getWorkers();
    },
    methods:{
        getWorkers() {
            const vm = this;
            axios.get('http://localhost:8000/api/getWorkers')
                .then(function (response) {
                    vm.list = response.data.message;                    
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        
        
        

    }
};
</script>