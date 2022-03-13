<template>
    <div>
        <AuthButton
            :buttonName="this.userName"
            @actionTriggered="actionTriggered"
        >
        </AuthButton>
        <GlobalAlert
            v-if="alertVisibility"
            :body="body"
            :title="this.userName"
        >
        </GlobalAlert>
        <vs-card>{{ this.$error }}</vs-card>
    </div>
</template>
<script>
import AuthButton from '../perticles/Button'
import GlobalAlert from "../perticles/GlobalAlert";

export default {
    name: 'AuthLayout',
    components: {
        GlobalAlert,
        AuthButton
    },
    props: {
        userName: {
            type: String,
            required: true
        }
    },
    data: function () {
        return{
            body: 'Alert Button Visible!',
            alertVisibility: true
        }
    },
    methods: {
        actionTriggered(){
            this.alertVisibility = !this.alertVisibility;
        }
    },
    inject: ['error']
}


</script>
