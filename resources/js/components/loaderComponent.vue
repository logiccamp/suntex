<template>
    <div class="ownitload" id="ownitloader" v-if="showLoader">
        <div class="ownitloader-cont">
            <div class="ownitloader"></div>
        </div>
    </div>
</template>

<style>
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .ownitloader-cont {
        background: white;
        position: fixed;
        width: 100%;
        height: 100vh;
        top: 0;
        left: 0;
        z-index: 99999999999999;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .ownitloader {
        border: 16px solid #f3f3f3; /* Light grey */
        border-radius: 50%;
        width: 72px;
        height: 72px;
        animation: spin 2s linear infinite;
        border-top: 10px solid #009960;
        border-bottom: 10px solid #009960;
    }

</style>

<script>
export default {
    data() {
        return {
            showLoader : true
        }
    },
    mounted() {
        this.$root.$on('toggleLoader', (value) => {
            this.showLoader = value
        })
    },
}
</script>