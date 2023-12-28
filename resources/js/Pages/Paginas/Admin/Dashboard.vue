<template>
    <Sidebar :user="user" ></Sidebar>
    
    <div class="p-4 sm:ml-64">
      <div
        class="p-4 my-10 mx-10 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
      >   
      
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table
            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
          >
            <thead
              class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
            >
              <tr>
                <th
                  scope="col"
                  class="px-6 py-3 text-sm font-medium text-gray-900 dark:text-white"
                >
                  ID
                </th>
                <th scope="col" class="px-6 py-3">
                  <label
                    for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >E-mail</label
                  >
                  <input
                    type="text"
                    id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Pesquisar"
                    v-model="searchEmail"
                  />
                </th>
                <th scope="col" class="px-6 py-3">
                  <label
                    for="name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Nome</label
                  >
                  <input
                    type="text"
                    id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Pesquisar"
                    v-model="searchName"
                  />
                </th>
                <th scope="col" class="px-6 py-3">
                  <label
                    for="city"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Cidade</label
                  >
                  <input
                    type="text"
                    id="city"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Pesquisar"
                    v-model="searchCity"
                  />
                </th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                v-for="(user, index) in users.data"
                :key="user.id"
                :users="users"
                :index="index"
              >
                <td class="px-6 py-4">
                  <Link
                    :href="'admin/usuarios-ver/' + user.id"
                    class="font-medium text-gray-900 whitespace-nowrap dark:text-blue-400"
                  >
                    {{ user.id }}
                  </Link>
                </td>
                <th
                  scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                  {{ user.email }}
                </th>
                <th
                  scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                  {{ user.profile?.name }}
                </th>
                <th
                  scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                  {{ user.address?.city }}
                </th>
                <th
                  scope="row"
                  class="pl-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                  <a
                    :href="'/admin/usuarios-ver/' + user.id"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >
                    Ver
                  </a>
                </th>
                <div  v-if=" admin_level === 1">
                <td
                  scope="row"
                  class="pl-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
              
                  <template v-if="!user.approved">
                    <form @submit.prevent="approveUser(user.id)">
                      <button
                        type="submit"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Ativar
                      </button>
                    </form>
                  </template>
                  <template v-else>
                    <form @submit.prevent="disapproveUser(user.id)">
                      <button
                        type="submit"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                      >
                        Desativar
                      </button>
                    </form>
                  </template>
          
                </td>
                <td
                  scope="row"
                  class="pl-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                  <a
                    :href="'/admin/usuarios-editar/' + user.id"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >
                    Editar
                  </a>
                </td>
  
                <td
                  scope="row"
                  class="pl-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                  <!-- <button
                    @click="deleteUser(user.id)"
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg mt-4"
                  >
                    Excluir Usuário
                  </button> -->
                  <a
                    @click.prevent="deleteUser(user.id)"
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg mt-4"
                  >
                    Excluir Usuário
                  </a>
                </td>
  
              </div>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="pl-5 pt-6 text-center">
          <TailwindPagination
            :data="users"
            :filters="filters"
            @pagination-change-page="(page) => getUsers(page, filters)"
          />
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import Sidebar from "@/Pages/Admin/Layout/Sidebar.vue";
  import { TailwindPagination } from "laravel-vue-pagination";
  import { ref, watchEffect, reactive, onMounted } from "vue";
  import { createStore } from "vuex";
  import axios from "axios";
  import { useToast } from "vue-toast-notification";
  import "vue-toast-notification/dist/theme-sugar.css";
  import { useForm } from "@inertiajs/vue3";
  import Swal from 'sweetalert2';
  import { defineProps } from 'vue';
  import { Field, Form, ErrorMessage } from "vee-validate";
  import { Link, router } from "@inertiajs/vue3";
  
  const props = defineProps({
    admin_level: Number,
    user: Object
  })
  
  const form = useForm({
    users: "",
  });
  
  
  const isUserFormVisible = ref(false);
  
  const showUserForm = () => {
    isUserFormVisible.value = true;
  };
  
  
  const users = ref({ data: [] });
  const searchEmail = ref(null);
  const searchName = ref(null);
  const searchCity = ref(null);
  
  const filters = reactive({
    email: "",
    name: "",
    city: "",
  });
  
  const setFilters = (filters) => {
    store.commit("setFilters", filters);
    getUsers();
  };
  
  const store = createStore({
    state: {
      filters: {
        email: "",
        name: "",
        city: "",
      },
    },
    mutations: {
      setFilters(state, filters) {
        state.filters = filters;
      },
    },
  });
  
  const getUsers = (page = 1, filters = store.state.filters) => {
    axios
      .get(`/api/users?page=${page}`, {
        params: filters,
      })
      .then((response) => {
        users.value = response.data.users;
      });
  };
  
  const approveUser = async (userId) => {
    try {
      const response = await axios.put(`/users/${userId}/approve`);
  
      if (response.status === 200) {
        const index = users.value.data.findIndex((user) => user.id === userId);
        if (index !== -1) {
          users.value.data[index].approved = true;
        }
      }
    } catch (error) {}
  };
  
  const disapproveUser = async (userId) => {
    try {
      const response = await axios.put(`/users/${userId}/disapprove`);
  
      if (response.status === 200) {
        const index = users.value.data.findIndex((user) => user.id === userId);
        if (index !== -1) {
          users.value.data[index].approved = false;
        }
      }
    } catch (error) {}
  };
  
  onMounted(() => {
    searchEmail.value = "";
    searchName.value = "";
    searchCity.value = "";
    setFilters(filters);
  });
  
  watchEffect(() => {
    filters.email = searchEmail.value;
    filters.name = searchName.value;
    filters.city = searchCity.value;
    store.commit("setFilters", filters);
    getUsers();
    setFilters(filters);
  });
  
  const toast = useToast();
  
  
  const deleteUser = async (id) => {
    
    const result = await Swal.fire({
      title: 'Tem certeza?',
      text: 'Você realmente deseja excluir este usuário?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Sim',
      cancelButtonText: 'Cancelar',
    });
  
    if (result.isConfirmed) {
    
      form.delete(route("admin.users.destroy", { id: id }), {
        preserveScroll: true,
      });
  
  
      toast.success("Usuário deletado com sucesso!", {
        position: "top-right",
        duration: 5000,
      });
  
      window.location.reload();
    }
  };
  
  </script>
  