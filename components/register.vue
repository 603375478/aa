<template>
  <div class="register">
    <div class="background" :style ="note">
      <button @clcik='hh'></button>
      <div class="box">
      <img id="logo" src="../assets/logo.png">
      <div class="box-register">
        <div class="least">
          <h2>注册</h2>
          <el-input class="input" v-model="tel" placeholder="手机号码"></el-input>
          <p>{{msg1}}</p>
          <el-input class="input" v-model="code" placeholder="图像验证">
            <p>{{msg2}}</p>
            <template slot="append" type='pp'>
              <div @click="generatecode()" class="changecode">
                <span v-for='(code,index) in codes'  :style="{'transform':codes[index].angle,'color':codes[index].color}">{{code.code}}</span>
              </div>
            </template>
          </el-input>
          <div>
            <el-input class="input" v-model="telcode" placeholder="短信验证码">
    
                <template slot="append" type='pp'><div :style='btn' @click="sendcode()" class="getcode text-warning">{{stauts}}</div></template>
     
            </el-input>  
          </div>
          <p>{{msg3}}</p>
          <el-checkbox v-model="checked" style="margin-bottom: 10px;">是否接受协议</el-checkbox>
          <el-button class="button" type="primary" @click='formcheck()'>注册</el-button>
          <div class="enroll"><span>已有账号？</span><router-link tag="span" to="/login">登录</router-link></div>
          <div class="third-party">
            <img src="../assets/wx.png" alt="">
            <img src="../assets/qq.png" alt="">
          </div>
        </div>
      </div>
      </div>
    </div>
      </div>
</template>
<script>
  import axios from '../../node_modules/axios/index.js'
export default {
  name: 'register',
  data () {
    return {
      note: {
            backgroundImage: "url(" + require("../assets/img/beijing.png") + ") ",
            backgroundPosition: "center center",
            backgroundRepeat: "no-repeat",
            backgroundSize: 'center',
    },
    msg1:'',
    msg2:'',
    msg3:'',
    checked:false,
    btn:'background:#409EFF',
    tel: '',
    code:'',
    telcode:'',
    visible: false,
    codes:[],
    getcode:'',
    stauts:'获取验证码'
  }
},
computed:{

},
created(){
  this.generatecode();
},
methods:{
  hh(){
    alert(1)
  },
    sendcode(){
      if (this.codecheck()&&this.telcheck()) {
        axios.get("http://xl813762858.gz01.bdysite.com/api/qcloudsms_php-master/src/index.php?phone=17858767730").then((res)=>{
          this.getcode=res.data.substr(res.data.length-4,res.data.length-1);
          this.btn='background:#d7d7d7';
          var time=60;
          this.stauts="剩余" +time+"秒";
          var clock=setInterval(()=>{
            this.stauts="剩余" +time+"秒";
            time--;
            if (time==0) {this.btn='background:#409EFF';this.stauts="获取验证码";clearInterval(clock)}
          },1000)
        })
      }       
    },
    generatecode(){
      this.codes=[];
      for(var i=0;i<4;i++){
        let code=Math.floor(Math.random()*58+65);
        let flag=Math.floor(Math.random()*2+1);
        if (flag%2==0) {
          if (code>=91&&code<=96) {code+=6;}
          code=String.fromCharCode(code);
        }
        else{
          code=code.toString()[1];
        }
        var color=this.generatecolor();
        var angle=this.transcontrol();
        var obj={color:color,code:code,angle:angle}
        this.codes.push(obj);
      } 
    },
    generatecolor(){
      let r=Math.floor(Math.random()*255)+"";
      let g=Math.floor(Math.random()*255)+"";
      let b=Math.floor(Math.random()*255)+"";
      return "rgb("+r+","+g+","+b+")";
    },
    transcontrol(){
      let s=Math.random()*1+0.8;
      let trans=Math.random()*30-15;
      return "scale("+s+") "+"rotateZ("+trans+"deg)";
    },
    telcheck(){
      var parttern=/^((13[0-9])|(14(5|7))|(15([0-3]|[5-9]))|(17[0-9])|(18[0,5-9]))\d{8}$/;
      if (parttern.test(this.tel)) {
        return true
      }else{
        alert("手机号码格式错误");
        this.msg1="手机号码格式错误"
        return false
      }
    },
    codecheck(){
      var code='';
      for(var el of this.codes){
        code+=el.code;
      }
      if (this.code.toLowerCase()==code.toLowerCase()) {
        return true
      }else{
        alert("图像验证码错误")
        this.msg2="图像验证码错误"
        return false
      }
    },
    telcodecheck(){
      if (this.telcode!=''&&this.telcode==this.getcode) {
        return true;
      }else{
        alert("短信验证码错误")
        this.msg3="短信验证码错误"
        return false;
      }
    },
    formcheck(){
      if (this.codecheck()&&this.telcheck()&&this.telcodecheck()) {
        axios.get("http://hr1256337851.gz01.bdysite.com/dist/static/api/registerSave.php?send=1&num="+this.tel).then(function(res){
          console.log(res.data);
        })
      }
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.changecode,.getcode{
  text-align: center;
  width: 70px;
  padding: 11px;
  background: #409EFF;
}
p{
  color: red;
}
span{
  margin: 0 5px;
  display: inline-block;
}
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
  width: 1200px;
  height: 1000px;
  margin: 0 auto;
}
.box-register{
  width: 641px;
  height: 661px;
  margin: 60px auto auto 280px;
  background: #ffffff;
  border-radius: 8px;
  box-shadow:1px 1px 2px #b9aeae
}
.least{
  width: 321px;
  height: 100%;
  margin: 0 auto;
}
.least h2{
  margin: 0;
  padding: 79px 0 60px 0;
  text-align: center;
  color: #333;
  letter-spacing:10px;
  font-weight: 700;
}
.least .input{
  margin-bottom: 30px;
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
</style>
