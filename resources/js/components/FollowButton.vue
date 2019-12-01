<template>
   <div>
                 <button class="btn btn-primary ml-4" @click="followuser">Follow</button>

   </div>
</template>

<script>
import { METHODS } from 'http'
    export default {
        props:['userId'],
        mounted() {
            console.log('Component mounted.')
        },
        methods:   {
            followuser(){
                axios.post('/follow/'+this.userId)
                    .then(response=>{
                        console.log(response.data)
                    })
            }
        }

    }
</script>
