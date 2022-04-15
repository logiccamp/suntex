<template>
<span>
<span class="badge headerBadge1">{{count}}</span>
<div v-if="showNotification" style="position: fixed; top: 50%; right: 0; margin-right: 20px; z-index: 999999999999999999"> 
    <a href="/agent/notifications">
        <span onclick="window.location.assign('/agent/notifications')" class="iconify" data-icon="ic:round-notification-add" style="color: red; font-size: 2em"></span>
    </a>
</div>
</span>
</template>

<script>
import axios from 'axios'
export default {
    props: ['id'],
    data() {
        return {
            count : 0,
            showNotification: true
        }
    },
    methods: {
        fetchMessages(){
            axios.get(`/api/get-emails/${this.id}`)
            .then((response)=>{
                this.count = response.data.unread.length
                if(response.data.unread.length > 0){
                    this.showNotification = true
                }
            })
        }
    },
    mounted() {
        this.fetchMessages()
    },
}
</script>