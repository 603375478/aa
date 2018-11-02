<template>
  <div>
    <router-link tag='button' to='/renzheng/grrz'>个人认证</router-link>
    <router-link tag='button' to='/renzheng/qyrz'>企业认证</router-link>
  </div>
</template>

<script>
export default {
  name: 'selectmethod',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
