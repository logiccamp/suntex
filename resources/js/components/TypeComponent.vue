<template>
    <span>
    <a v-for="item in types" :key="item.id" class="dropdown-item" :href="'/properties/type/'+item.title">{{item.title}}</a>
    </span>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            types : []
        }
    },
    methods: {
        fetchTypes(){
            let self = this
            axios.get('/getTypes')
            .then((response)=>{
            console.log(response)
                self.types = response.data.types
            })       
        }
    },
    mounted() {
        this.fetchTypes()
    },
}
</script>