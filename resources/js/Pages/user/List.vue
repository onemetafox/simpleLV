<template>
    <div 
        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded  bg-white"
    >
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-lg text-blueGray-700">
                        {{page_info.detail}}
                    </h3>
                </div>
            </div>
        </div>
        <div class="block w-full overflow-x-auto">
            <table class="items-center w-full bg-transparent border-collapse">
                <thead>
                    <tr>
                        <th 
                            class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-leftbg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                            No
                        </th>
                        <th
                            class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-leftbg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                            User Name
                        </th>
                        <th
                            class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-leftbg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                            User Email
                        </th>
                        <th
                            class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-leftbg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                            Created Date
                        </th>
                        <th
                            class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-leftbg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                            Status
                        </th>
                        <th
                            class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-leftbg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for = "(user, index) in users">
                        <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                            <span class="ml-3 font-bold text-blueGray-600"> {{index +1}}</span>
                        </td>
                        <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                            <span class="ml-3 font-bold text-blueGray-600"> {{user.name}} </span>
                        </td>
                        <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                            <span class="ml-3 font-bold text-blueGray-600">{{user.email}}</span>
                        </td>
                        <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                            <span class="ml-3 font-bold text-blueGray-600"> {{user.created_date}} </span>
                            
                        </td>
                        <td>
                            <span class="ml-3 font-bold text-blueGray-600"> status </span>
                            
                        </td>
                        <td
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right"
                        >
                            <table-dropdown />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
    defineProps({users: Object, page_info: Object})
</script>

<script>
    import TableDropdown from "@/components/Dropdowns/TableDropdown.vue";
    import Layout from "@/layouts/Admin.vue";

    export default {
        layout : Layout,
        data() {
            return {
                
            };
        },
        components: {
            TableDropdown,
        },
        props: {
            color: {
                default: "light",
                validator: function (value) {
                    return ["light", "dark"].indexOf(value) !== -1;
                },
            },
        },
    };
</script>
