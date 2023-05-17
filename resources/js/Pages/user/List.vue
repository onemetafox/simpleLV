<template>
    <li v-for="user in users">
        {{ user.name }} ::: {{ user.email }}
    </li>
</template>

<script setup>
    defineProps({ users: Object })
</script>
<script>
    import Layout from "@/layouts/Admin.vue";

    export default {
        layout: Layout,
        
    }
</script>
