<template>
  <div id="app">
    <router-view/>
  </div>
</template>

<script>
  
export default {
  name: 'App'

}
</script>

<style>
 .el-input-group__append{
    cursor: pointer;
    background: transparent;
    border: 0;
    color: white;
    padding: 0;
  }
*{
  margin: 0;
  padding: 0;
}
a{
  text-decoration: none;
}
ul{
  list-style: none;
}
</style>
