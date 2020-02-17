<template>
    <div class="back" id="customers" >
        <Dheader />
        <v-parallax src="https://cdn.hipwallpaper.com/i/82/58/VhbYJl.jpg" max-height="1000" height='100%'>
        <h4><font size="6" face="Arial">Current Projects</font></h4>
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
                    <template slot="items" slot-scope="props" align="center">
                        <td class="text-xs-right">{{ props.item.pname }}</td>
                        <td class="text-xs-right">{{ props.item.pcode }}</td>
                        <td class="text-xs-right">{{ props.item.orderdate }}</td>
                        <td class="text-xs-right">{{ props.item.duedate }}</td>
                        
                        
                        <td><v-icon small @click="deleteRecord($event)" v-bind:id="props.item.id">delete</v-icon></td>
                        <!--<td><v-icon small @click="editItem(item)" v-bind:id="props.item.id">edit</v-icon></td>-->
                        <!--<td><editpopup /></td>-->
                        <!--<td><router-link class ="btn btn-primary" :to ="'/edit/'+props.item.id">edit</router-link> </td>-->
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
                    text: "Project name",
                    align: "left",
                    sortable: false,
                    value: "pname"
                },
                { text: "Project Code", value: "pcode" },
                { text: "Order Date", value: "orderdate" },
                { text: "Due date", value: "duedate" },
                { text: "Delete", value: "id" },
                
            ]
        };
    },
    mounted() {
        this.currentprojects();
    },
    methods:{
        currentprojects() {
            const vm = this;
            axios.get('http://localhost:8000/api/currentprojects')
                .then(function (response) {
                    vm.list = response.data.allprojects;                    
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        downloadPDF(){
            var pdf = new jsPDF();
                axios.get('http://localhost:8000/api/currentprojects')
                    .then(function (response) {
                        var tableData = '<div><h2>Current Projects</h2><table><tr><th>Project Name</th><th>Project Code</th><th>Order date</th><th>Due Date</th></tr>';
                        response.data.allprojects.forEach(function(entry) 
                        {
                        tableData = tableData + '<tr><td>' +entry.pname + '</td><td>' +entry.pcode + '</td><td>' + entry.orderdate + '</td><td>' + entry.duedate + '</td><tr>'  ;


                        });
                        tableData = tableData + '</table></div>';   
                                  //var elementHTML = tableCreate();
            pdf.fromHTML(tableData, 30, 30, {
                'width': 200
                
            });
            //pdf.text(35, 25, 'body');
            pdf.save('Current_Projects.pdf');                
                });
  
        },
        deleteRecord(event){
                this.$http.delete("http://localhost:8000/api/deleteproject/"+event.target.id)
                .then(function(response){
                        /*var position = this.login.findIndex(function(element){
                            return element.id == event.target.id;
                        })
                        
                        this.login.splice(position,1)*/
                        window.location.reload();
                })
                
            },
}
}
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