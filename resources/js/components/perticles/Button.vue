<template>
    <div>
        <vs-button
            v-on:click="triggerAction"
        >
           {{ this.buttonName }}
        </vs-button>
    </div>
</template>
<script>
export default {
    name: 'GlobalButton',
    props: {
        buttonName: {
            type: String,
            required: true
        },
    },
    data: function (){
      return{
          message: 0
      }
    },
    methods: {
        triggerAction(){
            this.$emit('actionTriggered')
        }
    }

}
</script>
