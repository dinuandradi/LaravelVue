<template>
<div>
    <!-- <h1>logou</h1> -->
</div>
    
</template>
<script>
import axios from 'axios'
export default {
    created(){
        let token=localStorage.getItem('token');

        if(!token){
            return false;
        }else{
            axios.get("http://localhost:8000/api/logout?api_token="+token)
            .then(response=>{
                localStorage.removeItem('token');
                console.log("logout");
                this.$router.push('/Hm')

            })
        }
        
    }
}
</script>