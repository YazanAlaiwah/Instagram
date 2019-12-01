<template>
   <div>
                 <button class="btn btn-primary ml-4" @click="followuser">Follow</button>

   </div>
</template>

<script>
import { METHODS } from 'http'
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods:   {
            followuser(){
                axios.post('/follow/1')
                    .then(response=>{
                        alert(response.data)
                    })
            }
        }

    }
</script>
