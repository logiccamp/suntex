<template>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="m-t-0 m-b-20">Hello wolrd</h4>
                            <hr>
                            <div class="media">
                                <div class="float-left">
                                    <div class="m-r-20"> <img class="rounded" src="" width="60" alt=""> </div>
                                </div>
                                <div class="media-body">
                                    <p class="m-b-0">
                                        <strong class="text-muted m-r-5">From:</strong>
                                        <a href="javascript:void(0);" class="text-default">woodwalton@orbaxter.com</a>
                                        <span class="text-muted text-sm float-right">16:54, 24.04.2017</span>
                                    </p>
                                    <p class="m-b-0">
                                        <strong class="text-muted m-r-10">To:</strong>Me
                                        <small class="text-muted float-right"><i class="zmdi zmdi-attachment m-r-5"></i>(2 files, 89.2 KB)</small>
                                    </p>
                                    <p class="m-b-0">
                                        <strong class="text-muted m-r-10">CC:</strong><a href="javascript:void(0);">timhank@gmail.com</a>, <a href="javascript:void(0);">timhank@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <p>printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrnturies, but also the leap into electronic typesetting, remaining essentially unchanged.</p>                                
                        </div>
                        <div class="col-md-12">
                        
                        </div>                   
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <strong>Click here to</strong> <a href="mail-compose.html">Reply</a> or <a href="mail-compose.html">Forward</a>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import axios from 'axios'
export default {
    props : ['id'],
    data() {
        return {
            
        }
    },
    methods: {
        getMessage(){
            axios.get(`/agent/notification/readapi/${this.id}`)
            .then((response)=>{
                console.log(response)
            })
        }
    },
    mounted() {
        this.getMessage()
    },
}
</script>