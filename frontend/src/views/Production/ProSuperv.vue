<template>
    <div class="back">
        <Dheader />

        <v-parallax src="http://www.cursaintercol.cat/upload/o/19/191699_website-background-images-hd.jpg" max-height="1000" height='100%'>
        <h4><font size="6" face="Comic Sans MS">Production Sheet</font></h4>
            <v-container class="my-2">
                <v-sheet
                    class="py-3 px-5"
                    :elevation="10"
                    color="wight-1"
                    height="824"
                    max-width="1300"
                >

                <v-data-table
                    :headers="headers"
                    :items="list"
                    light
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
    }
};
</script>