<template>
    <div>
        <Input>
            <h2>Good Job</h2>
        </Input>
    </div>
</template>
<script>
import Input from "../components/perticles/Input";
import Sidebar from "../components/molecules/Sidebar"
export default {
    name : 'Dashboard',
    components: { Input, Sidebar },
    data: function (){
        return {
            user: null
        }
    },
    computed: {
        userComponent() {
            if(!this.user) return Input;
            return Sidebar;
        }
    }
}
</script>

<style scoped lang="scss">

.joy {
    background: red;
}

</style>
