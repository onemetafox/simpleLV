<template>
  <div class="flex flex-wrap">
    <div class="w-full lg:w-12/12 px-4">
      <CardSettings />
    </div>
  </div>
</template>
<script>
import CardSettings from "@/components/Cards/CardSettings.vue";
// import CardProfile from "@/components/Cards/CardProfile.vue";
import Layout from "@/layouts/Admin.vue";

export default {
    layout : Layout,
    components: {
        CardSettings,
        // CardProfile,
    },
};
</script>
