<template>
    <div>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>My <em>Properties</em></h2>
            </div>
          </div>
            <div v-for="property in properties" :key="property.id" class="col-md-4">
                <div class="service-item">
                    <img :src="'/storage/'+property.image" class="img-fluid img-thumbnail" alt="">
                    <div class="down-content">
                    <h4>{{property.caption}}</h4>
                    <div class="d-flex justify-content-between">
                        <div style="margin-bottom:10px;">
                        <span><sup>N</sup> {{ (property.price).toLocaleString(2)}}</span>
                        </div>

                        <div>
                        <p> {{property.type}} /  {{property.tag}} </p>
                        </div>
                    </div>

                    <a :href="'/properties/'+property.property_id" class="filled-button">View</a>
                    </div>
                </div>
            <br>
            </div>
        </div>
    </div>    
    </div>
</template>

<script>
import axios from 'axios'
export default {
    props : {
        id : String
    },  
    data() {
        return {
            properties : [],
        }
    },
    methods: {
        fetchMyProperties(){
            axios.get(`/api/agent-properties/${this.id}`)
            .then((response)=>{
                this.properties = response.data
            })
            .catch((error)=>{
                console.log(error)
            })
        }
    },
    beforeMount() {
        this.fetchMyProperties()
    },
}
</script>