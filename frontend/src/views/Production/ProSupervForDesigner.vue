<template>
    <div class="back">
        <Dheader />
        <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>
        <h4><font size="6" face="Arial">Designs</font></h4>
            <v-container class="my-2">
                <v-sheet
                    class="py-3 px-5"
                    :elevation="10"
                    color="blue-grey darken-1"
                    height="824"
                    max-width="1300"
                >

                <v-data-table
                    :headers="headers"
                    :items="list"
                    dark
                    >
                    <template slot="items" slot-scope="props">
                        <td class="text-xs-right">{{ props.item.id }}</td>
                        <td class="text-xs-right">{{ props.item.pname }}</td>
                        <td class="text-xs-right">{{ props.item.sendate }}</td>
                        <td class="text-xs-right">{{ props.item.pcode }}</td>
                        <td><img :src="'http://127.0.0.1:8000/images/' +props.item.image" style="width: 50px; height: 50px"></td>
                         <td>
                            <a :href="'http://127.0.0.1:8000/testimage/'+props.item.image" download>DownLoad</a>
                        </td>
                        
                    </template>
                    
                </v-data-table>
                
                </v-sheet>
            </v-container>
        </v-parallax>
    </div>
</template>


<script>
import Dheader from './ProHeader.vue'
import cfooter from './ProFooter.vue'
import axios from 'axios';

export default {
    name: "app",
    components: {
        cfooter,
        Dheader,
    },
    data() {
        return {
            list:[],
            headers:[
                {
                    text: "id",
                    align: "left",
                    sortable: false,
                    value: "id"
                },
                { text: "pname", value: "pname" },
                { text: "sendate", value: "sendate" },
                { text: "pcode", value: "pcode" },
                { text: "image", value: "image" },
                { text: "Download File", value: "" },
            ]
        };
    },
    mounted() {
        this.getListOfTester();
    },
    methods:{
        getListOfTester() {
            const vm = this;
            axios.get('http://localhost:8000/api/getListOfDesigner')
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
<style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #225253;
        }

</style>