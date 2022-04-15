<<template>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Client Name</th>
                <th>Date</th>
                <th>Payment Method</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(deal, index) in deals.slice().reverse()" :key="index">
                <td>{{index + 1}}</td>
                <td>{{deal.buyer.firstname}} {{deal.buyer.lastname}}</td>
                <td>{{deal.date}}</td>
                <td>Card</td>
                <td>{{(deal.price).toLocaleString('en-us', {minimumFractionDigits: 2, maximumFractionDigits: 2})}}</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</template>



<script>
import axios from 'axios'
export default {
    props: ['id'],
    data() {
        return {
            deals : []
        }
    },
    methods: {
        fetchMessages(){
            axios.get(`/api/get-deals/${this.id}`)
            .then((response)=>{
                this.deals = response.data.deals
            })
        }
    },
    mounted() {
        this.fetchMessages();
    },
}
</script>