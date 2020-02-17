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
                        
                        <td><v-icon small @click="deleteRecord($event)" v-bind:id="props.item.id">delete</v-icon></td>
                        <!--<td><v-icon small @click="editItem(item)" v-bind:id="props.item.id">edit</v-icon></td>-->
                        <!--<td><editpopup /></td>-->
                        <td><router-link class ="btn btn-primary" :to ="'/edit/'+props.item.id">edit</router-link> </td>
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


import Dheader from './Header.vue'
import cfooter from './Footer.vue'
import axios from 'axios'
import jsPDF from 'jspdf'
import editpopup from './editpopup';

export default {
    
    name: "app",
    components: {
        cfooter,
        Dheader,
        editpopup,
    },
    data() {
        return {
            list:[],
            headers:[
                {
                    text: "Project_No",
                    align: "left",
                    sortable: false,
                    value: "PNum"
                },
                { text: "RDate", value: "RDate" },
                { text: "SDate", value: "SDate" },
                { text: "Feedback", value: "Feedback" },
                { text: "image", value: "image" },
                { text: "Delete", value: "id" },
                { text: "Edit", value: "id" },
            ],
           
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
        deleteRecord(event){
                this.$http.delete("http://localhost:8000/api/deletefeedbacks/"+event.target.id)
                .then(function(response){
                        /*var position = this.login.findIndex(function(element){
                            return element.id == event.target.id;
                        })
                        
                        this.login.splice(position,1)*/
                        window.location.reload();
                })
                
            },
        editItem (item) {
        this.$router.push('/edit/'+item)
      },


    }
};
</script>
<style>

    .back {

        background: linear-gradient(180deg, #978E8E 40.44%, rgba(173, 164, 164, 0.528293) 76.7%, rgba(199, 189, 189, 0) 100%);

    }

    .downf{

        margin-bottom: 0px;
    }
   
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




