<template>
  <div class="app">
    <img alt="Vue logo" src="./assets/logo.png" />
    <div v-if="loginType">
      <Login />
      <div class="top">
        <button v-on:click="change">註冊帳號</button>
      </div>
    </div>
    <Register v-else />
  </div>
</template>

<script>
import Login from "./components/Login.vue";
import Register from "./components/Register.vue";

export default {
  name: "App",
  components: {
    Login,
    Register,
  },
  data() {
    return {
      loginType: true,
    };
  },
  methods: {
    change() {
      this.loginType = false;
    },
  },
};
</script>

<style>
.app {
  text-align: center;
}
.top {
  margin: 50px 0px;
}
</style>
