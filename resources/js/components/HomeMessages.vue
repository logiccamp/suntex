<template>
<div>
    <div v-for="message in messages.slice().reverse()" :key="message.id" class="support-ticket media pb-1 mb-3">
        <img src="/agents/assets/img/users/user-1.png" class="user-img mt-2 mr-2" alt="">
        <div class="media-body ml-3">
            <div class="badge mt-2 badge-pill badge-danger mb-1 float-right" v-if="message.status == 'Open'">New</div>
            <p class="font-weight-bold m-0">#{{message.mailid}}</p>
            <a :href="'/agent/notification/read/'+message.mailid">{{message.subject}}</a>
            <small class="text-muted">Created by <span class="font-weight-bold font-13"></span>
            &nbsp;&nbsp; - 1 day ago</small>
        </div>
    </div>
</div>
</template>
 
<script>
import axios from 'axios'
export default {
    props: ['id'],
    data() {
        return {
            count : 0,
            messages : []
        }
    },
    methods: {
        fetchMessages(){
            axios.get(`/api/get-emails/${this.id}`)
            .then((response)=>{
                this.messages = response.data.all
            })
        }
    },
    mounted() {
        this.fetchMessages();
    },
}
</script>