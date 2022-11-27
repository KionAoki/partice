<template>
  <div>
    <h1>請註冊帳號</h1>
    <div>
      <p>請輸入帳號</p>
      <input v-model="ancount" />
      <p>請輸入密碼</p>
      <input type="password" v-model="password" />
    </div>
    <div class="top">
      <button>送出</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Register",
};
</script>

<style scoped>
.top {
  margin: 10px 0px;
}
</style>
