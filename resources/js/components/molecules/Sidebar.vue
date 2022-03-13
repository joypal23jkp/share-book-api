<template>
    <div class="sidebar-container">
        <div class="inner-sidebar">
            <section v-for="(item, index) in items" :key="index">
                {{ item.title }}
            </section>
        </div>
    </div>
</template>
<script>
import { menus } from '../data/sidebar'
export default {
    data() {
        return {
            items: menus
        }
    },
    computed: {
    }
}
</script>
<style scoped lang="scss">
    .sidebar-container { position: fixed; left: 0; top: 0; width: 30%; height: 100vh; }
    .inner-sidebar { margin-left: 38px; margin-top: 20px;
        &:hover { color: black; font-size: 18px; }
        section { line-height: 2; }
    }
</style>
