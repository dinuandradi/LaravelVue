<template>
    <div class="back" id="customers" >
        <Dheader />
        <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>
        <h4><font size="6" face="Arial">Feedback</font></h4>
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
                        <td class="text-xs-right">{{ props.item.PNum }}</td>
                        <td class="text-xs-right">{{ props.item.RDate }}</td>
                        <td class="text-xs-right">{{ props.item.SDate }}</td>
                        <td class="text-xs-right">{{ props.item.Feedback }}</td>
                        <td>
                            <img :src="'http://127.0.0.1:8000/images/' +props.item.image" style="width: 50px; height: 50px">
                        </td>
                         <td>
                            <a :href="'http://127.0.0.1:8000/testimage/'+props.item.image" download>DownLoad</a>
                        </td>
                    </template>
                </v-data-table>
                <div class="pdf" center>
                     <v-btn rounded color="blue-grey darken-4" dark @click="downloadPDF" >Download PDF</v-btn>
                </div>
                </v-sheet>
                
            </v-container>
        </v-parallax>
    </div>
</template>


<script>


import Dheader from './Dheader.vue'
import cfooter from './Footer.vue'
import axios from 'axios'
import jsPDF from 'jspdf';

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
                    text: "Part_No",
                    align: "left",
                    sortable: false,
                    value: "PNum"
                },
                { text: "RDate", value: "RDate" },
                { text: "SDate", value: "SDate" },
                { text: "Feedback", value: "Feedback" },
                { text: "image", value: "image" },
            ]
        };
    },
    mounted() {
        this.getListOfTester();
    },
    methods:{
        getListOfTester() {
            const vm = this;
            axios.get('http://localhost:8000/api/getListOfTester')
                .then(function (response) {
                    vm.list = response.data.message;                    
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        downloadPDF(){
            var pdf = new jsPDF();
                axios.get('http://localhost:8000/api/getListOfTester')
                    .then(function (response) {
                        var tableData = '<div><h2>Feedbacks</h2><table><tr><th>Project Number</th><th>Recieved Date</th><th>Send Date</th><th>Feedback</th></tr>';
                        response.data.message.forEach(function(entry) 
                        {
                        tableData = tableData + '<tr><td>' +entry.PNum + '</td><td>' +entry.RDate + '</td><td>' + entry.SDate + '</td><td>' + entry.Feedback + '</td><tr>'  ;


                        });
                        tableData = tableData + '</table></div>';   
                                  //var elementHTML = tableCreate();
            pdf.fromHTML(tableData, 30, 30, {
                'width': 200
                
            });
            //pdf.text(35, 25, 'body');
            pdf.save('info.pdf');                
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