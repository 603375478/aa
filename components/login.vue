<template>
  <div class="register">
    <div class="background" :style ="note">
      <div class="box">
      <img id="logo" src="../assets/logo.png">
      <div class="box-registers">
      <div class="box-register">
        <div class="least">
          <h2>登录</h2>
          <div class="verify">
          <el-input class="input" v-model="input" placeholder="手机号码"></el-input>
          <div class="imgs">
          <el-input v-model="picLyanzhengma" placeholder="图像验证" class="yanzhengma_input" @blur="checkLpicma"></el-input>
          <input type="button" id="code"  @click="createCode"  class="verification1 img" v-model="checkCode"/></div>
          </div>
          <div class="mse">
          <el-input class="input" v-model="input_2" placeholder="短信验证码"></el-input>
          <span class="securitycode" @click="verify" v-show="show">获取验证码</span>
          <span v-show="!show" class="securitycode">{{count}} s后获取</span>
          </div>
          <div class="securitycodes">{{iphonehint}}</div>
          <el-button class="button" type="primary" @click="logon">登录</el-button>
          <div class="enroll"><span>没有账号？</span><router-link to="/register">立即注册</router-link></div>
          <div class="third-party">
            <img src="../assets/wx.png" alt="">
            <img src="../assets/qq.png" alt="">
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</template>

<script>
var code ; //在全局定义验证码
/*import img from './com/img.js'*/
import axios from 'axios'
export default {
  name: 'login',
  data () {
    return {
      note: {
            backgroundImage: "url(" + require("../assets/img/beijing.png") + ") ",
            backgroundPosition: "center center",
            backgroundRepeat: "no-repeat",
            backgroundSize: 'center'
    },
    input: '',
    input_1:'',
    input_2:'',
    id:'',
    verifyhint:'',
    iphonehint:'',
    msg:'',
    show: true,
    count: '',
    timer: null,
    picLyanzhengma:'',
    checkCode:''
  }
},
updated(){
  if(this.input!=""&&this.picLyanzhengma==''&&this.picLyanzhengma==''&&this.iphonehint!='请输入图形验证码'){
  if(/^13[123569]{1}\d{8}|15[1235689]\d{8}|188\d{8}$/.test(this.input)){
            axios.get('http://hr1256337851.gz01.bdysite.com/dist/static/api/loginSave.php?send=1&num='+this.input)
            .then(response=>{
                  this.tableData = response.data
                 this.iphonehint=this.tableData.message;
              })
              .catch(error=>{
                  console.log(error);
                  alert('网络错误，不能访问');
              })
  }else{
    this.iphonehint='手机号格式填写错误'
  };}    
},
created(){
},
mounted(){
      code = "";    
          var codeLength = 4;//验证码的长度   
          var random = new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R',   
           'S','T','U','V','W','X','Y','Z');//随机数   
          for(var i = 0; i < codeLength; i++) {//循环操作   
              var index = Math.floor(Math.random()*36);//取得随机数的索引（0~35）   
              code += random[index];//根据索引取得随机数加到code上   
          }   
              this.checkCode = code;//把code值赋给验证码   
},
methods:{
  verify(){
    if(/^13[123569]{1}\d{8}|15[1235689]\d{8}|188\d{8}$/.test(this.input)&&this.picLyanzhengma != ''){
      axios.get('http://hr1256337851.gz01.bdysite.com/dist/static/api/Autoloading/index.php?send=1&num='+this.input)
      .then(response=>{
         this.tableData = response.data
         this.verifyhint=this.tableData.verify;
         this.iphonehint=this.tableData.message;
         this.msg=this.tableData.message
         const TIME_COUNT = 60;
         if (!this.timer) {
                this.count = TIME_COUNT;
                this.show = false;
                this.timer = setInterval(() => {
                  if (this.count > 0 && this.count <= TIME_COUNT) {
                    this.count--;
                  } else {
                    this.show = true;
                    clearInterval(this.timer);
                    this.timer = null;
                  }
                }, 1000)
              }
      })
      .catch(error=>{
          console.log(error);
          alert('网络错误，不能访问');
      })
  }else{
    if(this.iphonehint!=''&&this.picLyanzhengma == ''){
          this.iphonehint="请输入图形验证码"
    }else{
      this.iphonehint='手机号未填写或格式错误，请检验'
    }
    
  }
  },
  // 图片验证码
      createCode(){
          code = "";    
          var codeLength = 4;//验证码的长度   
          var random = new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R',   
           'S','T','U','V','W','X','Y','Z');//随机数   
          for(var i = 0; i < codeLength; i++) {//循环操作   
              var index = Math.floor(Math.random()*36);//取得随机数的索引（0~35）   
              code += random[index];//根据索引取得随机数加到code上   
          }   
              this.checkCode = code;//把code值赋给验证码   
      },
      // 失焦验证图和密码
      checkLpicma(){  
          this.picLyanzhengma.toUpperCase();//取得输入的验证码并转化为大写         
          if(this.picLyanzhengma == '') {
               this.iphonehint="请输入图形验证码"
              // $(".login_content1 span:eq(2)").removeClass("disappear");
             
          }else if(this.picLyanzhengma.toUpperCase() != this.checkCode ) { //若输入的验证码与产生的验证码不一致时    
              console.log( this.picLyanzhengma.toUpperCase())
              console.log(code)           
               this.iphonehint="图形验证码不正确"
              // $(".login_content1 span:eq(2)").removeClass("disappear");
              this.createCode();//刷新验证码   
              this.picLyanzhengma = '';
          }else { //输入正确时   
              // $(".login_content1 span:eq(2)").addClass("disappear");
               this.iphonehint="图形验证码检验成功"
              return true;

          } 

      },
      logon(){
        if(this.input_2==this.verifyhint){
         //this.iphonehint='登录成功'
         console.log(this.$router);
         this.$router.push('/home')
        }else{
          if(this.iphonehint!=''){
              this.iphonehint='验证码错误，请重新输入！'
          }else{
            this.iphonehint='请您输入手机号！'
          }
        }
      }
}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
.background{
  height: 100%;
  
}
.register{
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.box{
  display: flex;
  flex-flow: column wrap;
  width: auto;
  height: 100%;
  margin: 0 auto;
}
.box-registers{
  display:relative;
  width: 100%;
  height: 60%;
  /* align-items: center;
  justify-content: center;
  align-items: center;
  justify-content: center; */
}
.box-register{
  display: flex;
  width: 100%;
  height: auto;
  align-items: center;
  justify-content: center;
  /* margin: 60px auto auto 280px; */
  background: #ffffff;
  border-radius: 8px;
  box-shadow:1px 1px 2px #b9aeae
}
.least{
  width: 30%;
}
.verify{
  display: flex;
  width: 100%;
  justify-content: center;
  align-items: center;
  flex-flow: column wrap;
}
.least h2{
  margin: 0;
  padding: 1.5625rem 0 1.5625rem;
  text-align: center;
  color: #333;
  letter-spacing:10px;
  font-weight: 700;
}
.least .input{
  height: 50px;
  margin-bottom: 25px;
}
.least .button{
  width: 100%;
  border-radius: 10px;
  height: 50px;
  letter-spacing:10px;
  font-size: 15px;
}
.enroll{
  width: 100%;
  height: 38px;
  text-align: center;
  line-height: 38px;
  margin-bottom: 35px;;
}
.enroll span:first-child{
    color: #333
}
.enroll span:last-child{
    color: rgb(35, 137, 233);
    cursor:pointer;
}
.third-party{
  text-align: center;
  letter-spacing:60px;
}
.securitycode{
  width: 100px;
  text-align: center;
  position: absolute;
  color: rgb(35, 137, 233);
  right: 0;
  top: 12%;
  font-size: 15px;
}
.securitycodes{
  position: relative;
  top:30%;
  text-align: center;
  color: rgb(233, 35, 167);
}
.mse{
  position: relative;
  display: flex;
  
}
#logo{
  display: flex;
  width: 192px;
  height: 70px;
  margin-bottom:5%
}
.input{
  width: 100%;
  margin: 0 auto;
}
.least{
  margin: 0 auto;
}
.img{
  position: absolute;
  right: 0;
  top: 7%;
  width: 100px;
  height: 30px;
}
.imgs{
  position: relative;
  width: 100%;
  margin-bottom: 30px;
}
</style>
