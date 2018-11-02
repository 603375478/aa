<template>
   <ul class="msul">
            <li>
               <div class="mitem">
                 <div class="mnav">
                  <div class="mnavbg">
                    <img src="../assets/Group 5.png" height="47" width="720">
                  </div>
                  <div class="mnavtitle">
                    <div>初级认证</div>
                    <div>中级认证</div>
                    <div>资质认证</div>
                  </div>
                 </div>
                 <div class="mbody">
                  <div class="mbody-t">
                    <span></span>
                    <p>身份证认证</p>
                  </div>
                  <div class="mbody-c">
                    <div>
                      <span>公司全称：</span>
                      <input type="text" name="公司全称" id="name" placeholder="请输入你的公司名称"
                      >
                    </div>
                                <div class=" hint"></div>
                    <div>
                      <span>信用代码：</span>
                      <input type="text" name="信用代码" id="idcard" placeholder="请输入你公司的信用代码">
                    </div>
                                <div class="hint"></div>
                                <div class="permit-wrap">
                                  <span>营业执照：</span>
                                  <div class="permit">
                                    <div class="permit-l">
                                      
                                    </div>
                                    <div class="permit-r">
                                      <p>1.请提供有效年检内的《企业法人营业执照副本》</p>
                                      <p>2.请确保营业执照公司名称与公司全称一致</p>
                                      <p>3.请确保所有信息清晰完整</p>
                                      <p>4.不接受电子版执照</p>
                                      <p>5.支持png、jpg格式</p>
                                    </div>
                                  </div>
                                </div>
                    <button>下一步</button>
                   </div>
                 </div>
                       
               </div>
            </li>
            <li>
                  <div class="mitem">
                   <div class="mbody">
                      <div class="mbody-t">
                        <span></span>
                        <p>银行卡认证：</p>
                      </div>
                      <div class="mbody-c">
                        <div>
                          <span>公司全称：</span>
                          <input type="text" name="公司全称" id="name" placeholder="请输入你的公司名称"
                          >
                        </div>
                        <div class=" hint"></div>
                        <div>
                          <span>银行卡号：</span>
                          <input type="text" name="银行卡号" id="idcard" placeholder="请输入你的银行卡号">
                        </div>
                        <div class="hint"></div>
                        <div>
                          <span>开户行：</span>
                          <input type="text" name="开户行" id="blankcard" placeholder="自动获取">
                        </div>
                        <div class="hint"></div>
                        <div>
                          <span>对公打款金额：</span>
                          <input type="text" name="对公打款金额" id="account" placeholder="请输入对公打款金额">
                        </div>
                        <div class="hint"></div>
                        <button class="remit">对公打款</button>
                        <button>下一步</button>
                       </div>
                     </div> 
                    </div>   
                </li>
            <li>
                   <div class="mitem">
                     <div class="mbody">
                      <div class="mbody-t">
                        <span></span>
                        <p>芝麻信任</p>
                      </div>
                      <div class="mbody-c">
                        <button id="credit">{{msg}}</button>
                      </div>
                    </div>
                   </div>    
                </li>
            <li>
                   <div class="mitem">
                     <div class="mbody">
                      <div class="mbody-t">
                        <span></span>
                        <p>资质认证</p>
                      </div>
                      <div class="mbody-c">
                        <label id="realBtn" class="btn btn-info">
                   <input type="file" id="fileInput1" name="file" class="mFileInput" style="left:-9999px;position:absolute;">
                   <span>+ 添加资质证书</span>
              </label>
                        <button class="finish">认证完成</button>
                      </div>
                    </div>
                   </div>      
                </li>
          </ul>
</template>

<script>
export default {
name: 'qyrz',
props:{
    users:[]
  },
data () {
    return {
     msg:"752分",
        msg1:"添加资质证书",
        isActive:false,
         tysrc:''
    }
  },
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
