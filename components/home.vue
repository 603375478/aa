<template>
  <div id="select">
   <div class="container">
   <div class="row" >
   <div class="offset-lg-2 a"><img src="../assets/logo.png"></div>
   <div class="col-lg-8 offset-lg-2 b">
     <ul>
       <li>
         <h6>个人认证</h6>
         <div v-on:click="a(borders,url)" v-bind:class="{border:borders}"></div>
         <p>施工队伍、工程机械、个人劳务求职</p>
         </li>
       <li>
         <h6>企业认证</h6>
         <div v-on:click="b(border,url)" v-bind:class="{border:border}"></div>
         <p>寻找优秀员工，优质完成工程</p>
       </li>
     </ul>
     <router-link tag='button' :to="url" class='start'>开始认证</router-link>
   <!-- <router-link tag='button' to='/renzheng/qyrz' v-bind:class="{ki:ki}">企业认证</router-link> -->
   </div>
   </div>
    </div>
  </div>
</template>
<script>

export default {
  name: 'home',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App',
      border:false,
      borders:true,
      url:"/renzheng/grrz"
    
     
    
  }
    
},
    methods:{
      a(borders,border,url){
     this.borders=!borders,
     this.border=!border,
     this.url='/renzheng/grrz'
    
      },
       b(border,borders,url){
         
     this.border=!border,
     this.borders=!borders,
      this.url='/renzheng/qyrz'
      this.tittle='开始'
       }
    }
      

}
 
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.start{
  display: block;
  margin: auto;
}
.ki{
  display: none;
}
#select{
  width: 100%;
  height:640px;
  background: url(../assets/background.png);
  background-size: 100% 100%;
}
.a{
  width: 143px;
  height: 50px;
  margin-top:20px;
  margin-bottom: 40px;
 
}
.a img{
  width: 100%;
  height: 100%;
  
}
.b{
  height: 480px;
  background: white;
   border-radius: 5px;
}
ul{
  list-style: none;
  display: flex;
  justify-content: space-around;
  text-align: center
}
ul li{
  float: left;
  margin-top: 75px
}
ul li h6{
  font-size:17px;
  color: #000;
  font-weight: bold;
  margin-bottom: 50px;

}
ul li div{
  width: 160px;
  height: 160px;
  margin: 0 auto;
  border-radius: 50%;
  border: 1px solid #b3b3b3;
  margin-bottom: 10px;
}
ul li:first-child div{
  background: url(../assets/1.png) no-repeat;
  background-size: 90% 110%;
  background-position:50% 15px;
}
ul li:last-child div{
   background: url(../assets/2.png) no-repeat;
  background-size: 80% 150%;
  background-position:-5px 15px;
}
/* ul li div img{
  width: 160px;
  height: 160px;
} */
ul li p{
  font-size: 10px;
  color: #999;
}
button{
  width: 155px;
  height: 35px;
  background: #3388ff;
  color: white;
  border: none;
  outline: none;
  border-radius: 5px;
  margin-top: 50px;
}
.border{
  border:1px solid #75aeff !important;
}
</style>
