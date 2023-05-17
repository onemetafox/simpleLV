<template>
    <Head title="Users" />
    <div v-for="user in users" :key="user.id">
      <Link :href="`/users/${user.id}`">
        {{ user.name }}
      </Link>
      <div>{{ user.email }}</div>
    </div>

</template>

<script>
    import Layout from "@/layouts/Admin.vue";

    export default {
        layout: Layout,
        
    }
</script>
