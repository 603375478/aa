<template>
   <div class="gr-wrap">
    <div class="logo">
      <div class="container">
        <img src="../assets/top.png" height="71" width="192">
        <div class="city">杭州 <span>[切换城市]</span></div>
      </div>      
    </div>
 
    <div class="content-bg">
      <div class="container">
        <div class="ms-plank">
         
            <router-view></router-view>
          
        </div>
      </div> 
      <!-- 清除浮动 -->
      <div class="clear"></div>           
    </div>
    <div class="content-blank"></div>
  </div>
</template>

<script>
export default {
  name: 'renzheng',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
p{
  margin: 0;
}
.clear{
  clear: both;
}
.gr-wrap{
  width: 100%;
  min-width: 1200px;
}
.container{
  width: 1200px;
  margin: 0 auto;
  position: relative;
  overflow: hidden;
}
.head-tip{
  background: #f2f2f2;
  padding: 5px 0;
}
.head-tip p{
  margin: 0;
}
.logo>div{
   height: 71px;
   margin: 20px auto 17px;
}
.city{
  position: absolute;
  bottom: 0;
  left:215px;
  color: #3388ff;
   }
 .city span{
  color: #2c3e50;
 }
 .content-bg{
  height: 220px;
  background: #3388ff;
 }
 .content-bg .container{
  width: 1210px;
  min-height: 1885px;
 }
 .ms-blank{
  background: #fcfcfd;  
  padding: 5px 5px;
 }
 .ms-plank{
    width: 1200px;
  margin: 40px auto 0;
    height: 100%;
  background: #ffffff;
 }
 .msul{
  list-style: none;
  margin: 0;
  padding: 0;
    overflow: hidden;  
    box-shadow: 0 2px 5px #ccc;
 }
 .msul li{
  border-bottom: 1px dashed #e5e5e5;
 }
  .msul li:nth-child(1){
    margin: 130px auto 0;
  }
 .mitem{
  width: 720px;
  margin: 0 auto;
 }
 .mnavtitle{
  overflow: hidden;
 }
 .mnavtitle div{
  display: inline-block;
  margin: 45px 80px 70px;
  font-weight: bold;
 }
 .mnavtitle div:first-child{
  font-size: 24px;
 }

.mbody button{
  width: 160px;
  line-height: 40px;
  padding: 0;
  border: 0;
  background: #3388ff;
  color: #fff;
  border-radius: 10px;
  margin: 30px auto 40px;
  outline: none;
 }
 .mbody-c{
  /*margin: 0 auto;*/
  padding: 0 170px;
  width: 400px;
  text-align: center;
 }
 .mbody-c div{
  overflow: hidden;
 }
 .mbody-c span{
  width: 120px;
   line-height: 42px;
  text-align: right;
  float: left;
 }
 .mbody-c input{
  float: right;
  width: 250px;
  height: 40px;
  border-radius: 10px;
  padding: 0;
  outline: none;
  border: 1px solid #999999;
  text-indent: 20px;
 }
.mbody-t{
     overflow: hidden;
     margin: 50px auto;
 }
.mbody-t span{
   width: 15px;
   height: 20px;
   background: #3388ff;
   float: left;
   margin-right: 20px;
}
.mbody-t p{
  float: left;
}
.hint{
  width: 250px;
  height: 21px;
  margin-left: 125px;
  color: red;
  font-size: 14px;
}
#credit{
  margin: 0 auto 40px;
}
.mbody-c #credential{
  float: none;
  width: 190px;
  height: 50px;
  margin: 0 auto 50px;

}
.finish{
  display: block;
}

.permit-l{
  width: 160px;
  height: 130px;
  background: url(../assets/ziliao.png) no-repeat;
}
.permit-wrap{
  width: 100%;
}
.mbody-c{
  position: relative;
}
.permit{
  
  padding-left: 30px;
}
.permit-r{
  position: absolute;
    top: 125px;
    left:490px;
    font-size: 13px;
    text-align: left;
}
.permit-r p{
  margin: 0 auto 6px;
  color: #999999;
}
.mbody .remit{
  position: absolute;
  width: 80px;
  height: 40px;
  top: 160px;
  left: 590px;
}
#realBtn{
  display: block;
  width: 190px;
  height: 50px;
    margin: 0 auto;
    color: #999999;
    border: 1px solid #999999;
    border-radius: 10px;
    font-size: 17px;
    margin: 0 auto 80px;
}
#realBtn span{
  width: 100%;
  line-height: 52px;
    text-align: center;
}
</style>
