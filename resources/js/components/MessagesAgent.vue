<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="box-body no-padding w-100">
                        <div class="mailbox-controls">
                            <!-- Check all button 
                                <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-close"></i></button>
                                <div class="btn-group">
                                <button class="btn btn-secondary btn-sm"><span class="iconify" data-icon="bi:trash"></span></button>
                                <button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-arrow-left"></i></button>
                                <button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-share-alt"></i></button>
                                </div>
                            -->
                            <button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-refresh"></i></button>
                            <div class="pull-right">
                            1-50/200
                            <div class="btn-group">
                                <button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-arrow-left"></i></button>
                                <button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-arrow-right"></i></button>
                            </div><!-- /.btn-group -->
                            </div><!-- /.pull-right -->
                        </div>
                        <hr>
                        <div class="table-responsive mailbox-messages w-100" >
                            <table class="table table-hover ">
                            <tbody>
                            <tr></tr>
                                <tr v-for="(message, index) in messages.slice().reverse()" :key="index" :class="message.status" style="margin: 5px 0 !important;">
                                    <td><input type="checkbox"></td>
                                        <td class="mailbox-star">
                                            <a href="#">
                                                <i class="fa fa-star text-danger"></i>
                                            </a>
                                        </td>
                                    <td class="mailbox-name">
                                        <a v-if="id == '6'" :href="'/management/admin/notification/read/'+message.mailid">{{message.mailid.substr(0, 5)}}</a>
                                        <a v-else :href="'/agent/notification/read/'+message.mailid">{{message.mailid.substr(0, 5)}}</a>
                                    </td>
                                    <td class="mailbox-subject">
                                        <a v-if="id == '6'" style="text-decoration: none;" :href="'/management/admin/notification/read/'+message.mailid">
                                            <b style="text-transform: capitalize">{{message.sender.firstname}}</b> - {{message.subject}}
                                        </a>
                                        <a v-else style="text-decoration: none;" :href="'/agent/notification/read/'+message.mailid">
                                            <b style="text-transform: capitalize">{{message.sender.firstname}}</b> - {{message.subject}}
                                        </a>
                                    </td>
                                    <td class="mailbox-attachment" v-if="message.attachment == 'true'"><i class="fa fa-paperclip"></i></td>
                                    <td class="mailbox-attachment" v-else></td>
                                    <td class="mailbox-date">5 mins ago</td>
                                </tr>
                            </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->
                        </div><!-- /.box-body -->
                        <hr>
                    </div><!-- /. box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
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


<style>
    .Open {
        background: #f6f6f6;
    }
</style>