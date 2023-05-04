<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{page_title}}</div>

                    <div class="card-body">
                        {{page_content}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
    import { Link, Head } from '@inertiajs/vue3';
    defineProps({ page_title: Object, page_content: Object });
</script>
<script>
    export default {
        id:'landing',
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
