<template>
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
                <div
                  class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
                >
                    <div class="rounded-t mb-0 px-6 py-6">
                        <div class="text-center mb-3">
                          <h6 class="text-blueGray-500 text-sm font-bold">
                            Sign in with
                          </h6>
                        </div>
                        <div class="btn-wrapper text-center">
                          <button
                            class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                            type="button"
                          >
                            <img alt="..." class="w-5 mr-1" :src="assets.git" />
                            Github
                          </button>
                          <button
                            class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                            type="button"
                          >
                            <img alt="..." class="w-5 mr-1" :src="assets.google" />
                            Google
                          </button>
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300" />
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                        <div class="text-blueGray-400 text-center mb-3 font-bold">
                          <small>Or sign in with credentials</small>
                        </div>
                        <form>
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Email
                            </label>
                            <input
                              type="email"
                              class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                              placeholder="Email" v-model="user.email"
                            />
                            <span class="error" v-if="v$.user.email.$error"> {{ v$.user.email.$errors[0].$message }} </span>
                          </div>

                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Password
                            </label>
                            <input
                              type="password"
                              class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                              placeholder="Password" v-model="user.password"
                            />
                            <span class="error" v-if="v$.user.password.$error"> {{ v$.user.password.$errors[0].$message }} </span>
                          </div>
                          <div>
                            <label class="inline-flex items-center cursor-pointer">
                              <input
                                id="customCheckLogin"
                                type="checkbox"
                                class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                              />
                              <span class="ml-2 text-sm font-semibold text-blueGray-600">
                                Remember me
                              </span>
                            </label>
                          </div>

                          <div class="text-center mt-6">
                            <button
                              class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                              type="button" @click = "submitForm"
                            >
                              Sign In
                            </button>
                          </div>
                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap mt-6 relative">
                    <div class="w-1/2">
                      <a href="javascript:void(0)" class="text-blueGray-200">
                        <small>Forgot password?</small>
                      </a>
                    </div>
                    <div class="w-1/2 text-right">
                      <inertia-link href="/auth/register" class="text-blueGray-200">
                        <small>Create new account</small>
                      </inertia-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Layout from "@/layouts/Auth.vue";
    import github from "@/assets/img/github.svg";
    import google from "@/assets/img/google.svg";
  
    import useValidate from '@vuelidate/core'
    import { mapState } from 'vuex';
    import { required, email, sameAs, minLength } from '@vuelidate/validators'
    import { API_URL, ROUTE_URL } from "../../config/const.config";

    import { toast } from 'vue3-toastify';
    import 'vue3-toastify/dist/index.css';
    export default {
        layout: Layout,
        data() {
          return {
            v$: useValidate(),
            assets:{
              git:github,
              google:google,          
            },
            user:{
              email: "admin@gmail.com",
              password:"123456",
            }
          };
        },
        methods : {
          submitForm(){
            this.v$.$validate(); // checks all inputs
            if(!this.v$.$error){
              this.$store.dispatch('auth/login', this.user).then((res)=>{
                if(res.data.success){
                  this.$route.visit(ROUTE_URL + 'users');
                }else{
                  toast.error(res.data.msg);
                }
              })
            }
          }
        },
        validations(){
          return {
            user:{
              email : {required, email},
              password : {required, minLength: minLength(6)}
            }
          }
        }
    };
</script>
