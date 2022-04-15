<<template>
    <div class="col-md-4">
        <div class="service-item">
            <img :src="'storage/'+property.image" alt="">
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
</template>

<script>
export default {
    props: {
        property : Object
    }
}
</script>