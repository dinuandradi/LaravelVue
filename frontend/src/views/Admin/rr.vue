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
                        <v-icon small @click="deleteRecord($event)" v-bind:id="props.item.id">delete</v-icon>
                        
                        
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
                { text: "Delete", value: "id" },
            ]
        };
    },
    mounted() {
        this.getListOfUsers();
    },
    methods:{
        getListOfUsers() {
            const vm = this;
            axios.get('http://localhost:8000/api/getListOfUsers')
                .then(function (response) {
                    vm.list = response.data.message;                    
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        deleteRecord(event){
                this.$http.delete("http://localhost:8000/api/deleteUsers/"+event.target.id)
                .then(function(response){
                        /*var position = this.login.findIndex(function(element){
                            return element.id == event.target.id;
                        })
                        
                        this.login.splice(position,1)*/
                        window.location.reload();
                })
                
            },
        downloadPDF(){
            var pdf = new jsPDF();
                axios.get('http://localhost:8000/api/getListOfUsers')
                    .then(function (response) {
                        var tableData = '<div><table><tr><th>ID</th><th>First Name</th><th>Second Name</th><th>E-mail</th><th>U-Dep</th><th>U-Level</th></tr>';
                        response.data.message.forEach(function(entry) 
                        {
                        tableData = tableData + '<tr><td>' +entry.uid + '</td><td>' +entry.ufname + '</td><td>' + entry.ulname + '</td><td>' + entry.uemail + '</td><td>' + entry.udep + '</td><td>' + entry.ulevel + '</td><tr>'  ;


                        });
                        tableData = tableData + '</table></div>';   
                                  //var elementHTML = tableCreate();
            pdf.fromHTML(tableData, 15, 15, {
                'width': 170
                
            });
            //pdf.text(35, 25, 'body');
            pdf.save('Registered_Users.pdf');                
                });
  
        },
        

    }
};
</script>