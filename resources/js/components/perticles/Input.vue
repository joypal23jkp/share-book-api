<template>
    <div class="input-component">
        <label for="input"/>
        <input id="input" :type="type" v-model="inputData">
        <vs-button @click.prevent="onGo">Go</vs-button>
        <slot></slot>
    </div>
</template>
<script>
export default {
    inheritAttrs: false,
    emits: {
        inFocus: null
    },
    props: {
        type: {
            type: String,
            default: "text"
        }
    },
    data() {
        return {
            inputData: 'something'
        }
    },
    watch: {
        inputData(newVal){
            this.$emit('changeValue', newVal);
        }
    },
    methods: {
        onGo() {
            this.$emit('inFocus');
        }
    }
}
</script>
