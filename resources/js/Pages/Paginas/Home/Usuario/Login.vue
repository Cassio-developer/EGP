

<template>
  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

      <div class="container h-full p-10">
          <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
              <div class="w-full">
                  <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                      <div class="g-0 lg:flex lg:flex-wrap">

                          <div class="px-4 md:px-0 lg:w-6/12">
                              <div class="md:mx-6 md:p-12">

                                  <Logotipo />

                                  <form @submit.prevent="submit">
                                      <p class="mb-4">Login</p>

                                      <div class="relative mb-4">
                                          <LabelCampo for="email" value="Email"
                                              class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" />
                                          Usuario

                                          <InputTexto id="email" v-model="form.email" type="email"
                                              placeholder="Digite seu nome"
                                              class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                              required autofocus autocomplete="email" />
                                          <CampoError class="mt-2" :message="form.errors.email" />
                                      </div>

                                      <div class="relative mb-4">
                                          <LabelCampo for="password" value="password" />
                                          <InputTexto id="password" v-model="form.password" type="password"
                                              class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                              placeholder="Password" name="Password" required
                                              autocomplete="current-password" />
                                          <CampoError class="mt-2" :message="form.errors.password" />
                                          <div v-if="status" class="mt-2 text-sm text-red-600">
                                              {{ status }}
                                          </div>
                                      </div>

                                      <div class="mb-12 pb-1 pt-1 text-center">
                                          <BotaoEntrar :class="{ 'opacity-25': form.processing }" @click="submit"
                                              :disabled="form.processing">
                                              Entrar
                                          </BotaoEntrar>

                                          <a href="#!">Esqueceu a Senha ?</a>

                                      </div>
                                      <div class="flex items-center justify-between pb-6">
                                          <p class="mb-0 mr-2">Não possui conta?</p>
                                          <Botaoregistrar>

                                              Registre-se
                                          </Botaoregistrar>
                                      </div>
                                  </form>
                              </div>
                          </div>


                          <div class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
                              style="background: linear-gradient(to right, #2f59f0, #2949e1, #3665dd, #213ae1)">
                              <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                                  <h4 class="mb-6 text-xl font-semibold">
                                      Sobre
                                  </h4>
                                  <p class="text-sm">
                                      A EGP é responsável pelas atividades de formação, capacitação profissional e
                                      educação continuada dos/as servidores/as, contemplando todas as práticas
                                      relacionadas à aprendizagem no âmbito profissional, dentre elas, treinamento,
                                      desenvolvimento, qualificação, atualização, aperfeiçoamento, aprimoramento e
                                      educação
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>
</template>



<script setup>
import Logotipo from "@/Componentes/Logo-login.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";


import Botaoregistrar from "@/Componentes/Botao-registrar.vue";
import CampoError from "@/Componentes/Mensagem-erro-campo.vue";
import LabelCampo from "@/Componentes/Label-campo.vue";
import BotaoEntrar from "@/Componentes/Botao-Entrar.vue";
import InputTexto from "@/Componentes/Input-texto.vue";
import { useToast } from "vue-toast-notification";

defineProps({
  canResetPassword: Boolean,
  status: String,

});

const form = useForm({
  email: "",
  password: "",
  remember: false,
});

const toast = useToast();

const submit = () => {
  form
      .transform((data) => ({
          ...data,
          remember: form.remember ? "on" : "",
      }))
      .post(route("login"), {
          onFinish: () => form.reset("password"),
      });
};

</script>