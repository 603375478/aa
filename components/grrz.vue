<template>
	<div class="grrz" style="padding-top: 100px;">
		<!-- 头部三步骤 -->
		<ul >
		<li class="step">
			<h1>1 <span>step1 is the current state</span></h1>
			<p></p>
		</li>
		<li class="second">
			<h1>2 <span>step2 is undone</span></h1>
			<p class="secondp"></p>
		</li>
		<li class="third">
			<h1> 3 <span>step3 is undone</span></h1>
			<p class="thirdp"></p>
		</li>
		</ul>
		<!-- 认证三步骤 -->
		<ol>
			<li>初级认证</li>
			<li>中级认证</li>
			<li>资质认证</li>
		</ol>
		<div id="first">
		<div class="identity">
			<div class="title">
				<span></span><h3>身份证认证</h3>
			</div>
        <el-form :model="numberValidateForm" ref="numberValidateForm" label-width="100px" class="demo-ruleForm" id="elem">
               <el-form-item id="name" label="姓名" prop="name"
                 :rules="[
			         { required: true, message: '姓名不能为空', trigger: 'blur'},
			       
			         {
				        pattern:/^[\u4E00-\u9FA5]{2,4}$/,
				        message: '请输入中文且长度为2到4位'
				    },
				      // {  min: 2, max: 5, message: '长度在 2到 4 个字符', trigger: 'blur'}

			    ]"
               
               >
			    <el-input v-model="numberValidateForm.name" placeholder="请输入姓名"  id="border"></el-input>
			  </el-form-item>
			  <el-form-item
			    label="身份证号"
			    prop="age"
			    :rules="[
			         { required: true, message: '身份证号不能为空'},
			         { type: 'number', message: '身份证号必须为数字'},
			         {
				        pattern: /^\d{6}(18|19|20)?\d{2}(0[1-9]|1[012])(0[1-9]|[12]\d|3[01])\d{3}(\d|[xX])$/,
				        message: '身份证格式不正确'
				    }

			    ]"
			  >
			    <el-input type="age" v-model.number="numberValidateForm.age" autocomplete="off"  placeholder="请输入身份证号" style="border-radius:10px;"></el-input>
			  </el-form-item> 
			</el-form>
			<button type="button" @mousedown="check1('numberValidateForm')"><a :href="cardcheck?'#cardcheck':'javascript:;'">下一步</a></button>
</div>
</div>


   <div id="first">
		<div class="identity card">
			<div class="title">
				<span></span><h3 id="cardcheck">银行卡认证</h3>
			</div>
        <el-form :model="numberValidateForm" ref="numberValidateForm" label-width="100px" class="demo-ruleForm" id="elem">
               <el-form-item id="name" label="姓名" prop="cardname"
                 :rules="[
			         { required: true, message: '姓名不能为空', trigger: 'blur'},
			       
			         {
				        pattern:/^[\u4E00-\u9FA5]{2,4}$/,
				        message: '请输入中文且长度为2到4位'
				    },
				      // {  min: 2, max: 5, message: '长度在 2到 4 个字符', trigger: 'blur'}

			    ]"
               
              >
			    <el-input v-model="numberValidateForm.cardname" placeholder="请输入姓名"  id="border"></el-input>
			  </el-form-item>
			  <el-form-item id="name"
			    label="身份证号"
			    prop="cardage"
			    :rules="[
			         { required: true, message: '身份证号不能为空'},
			         { type: 'number', message: '身份证号必须为数字'},
			         {
				        pattern: /^\d{6}(18|19|20)?\d{2}(0[1-9]|1[012])(0[1-9]|[12]\d|3[01])\d{3}(\d|[xX])$/,
				        message: '身份证格式不正确'
				    }

			    ]"
			  >
			    <el-input type="cardage" v-model.number="numberValidateForm.cardage" autocomplete="off"  placeholder="请输入身份证号"></el-input>
			  </el-form-item> 
			   <el-form-item id="name"
			    label="银行卡号"
			    prop="card"
			    :rules="[
			         { required: true, message: '银行卡号不能为空'},
			         { type: 'number', message: '银行卡号必须为数字'},
			         {
				        pattern:  /^([1-9]{1})(\d{14}|\d{18})$/,
				        message: '银行卡号不正确（15到18）'
				    }

			    ]"
			  >
			    <el-input type="card" v-model.number="numberValidateForm.card" autocomplete="off"  placeholder="请输入银行卡号" ></el-input>
			  </el-form-item> 
			   <el-form-item
			    label="开户行"
			    prop="open"
			    :rules="[
			         { required: true, message: '开户行名不能为空'},
			         {
				        pattern: /^[\u4E00-\u9FA5]{0,8}$/,
				        message: '开户行名格式不正确（中文） '
				    }

			    ]"
			  >
			    <el-input type="open" v-model.number="numberValidateForm.open" autocomplete="off"  placeholder="请输入开户行名"></el-input>
			  </el-form-item> 
			</el-form>
			<button type="button" @mousedown='check2'><a :href="zmxy?'#zmxy':'javascript:;'">下一步</a></button>
		</div>
		</div>
         

         <div id="first">
		<div class="identity card seed">
			<div class="title">
				<span></span><h3 id="zmxy">芝麻信用</h3>
			</div>
       
			<button type="button" @click='getscore'>{{score}}</button>
		</div>
		</div>

         
   <div id="first">
		<div class="senior">
			<div class="title">
				<span></span><h3 id="zzrz">资质认证</h3>
			</div>
			<div class="book" style="margin: 0 auto 20px auto;display: flex;justify-content: center;">
				<label class="el-form-item__label">证书名称：</label>			
				<el-input v-model="book" placeholder="请输入证书" style="width: 250px;"></el-input>
			</div>
		<div id="onload" :style="{'display':show}" style="position: relative;justify-content: center;left: -40px;">
			<label class="el-form-item__label">证书图片：</label>	
			<el-upload
			  class="avatar-uploader"
			  action="https://jsonplaceholder.typicode.com/posts/"
			  :show-file-list="false"
			  :on-success="handleAvatarSuccess"
			  :before-upload="beforeAvatarUpload">
			  <img v-if="imageUrl" :src="imageUrl" class="avatar">
			  <i v-else class="el-icon-plus avatar-uploader-icon"></i>
			</el-upload>
			<span style="position: absolute;font-size: 12px;color: #ddd;right: 40px;bottom: 0;">请上传证书拍摄图片或扫描文件</span>
		</div>
               <h4 style="text-align: center;position: relative;justify-content: center;" :style="{'display':show}"><img src="../assets/jia.png" alt="" style="width:25px;margin-top: 10px;position: absolute;left: 20px;"> 添加资质证书</h4>

			<button type="button" id="complete">完成认证</button>
		</div>
		</div>
          

	</div>

</template>

		<script>
		 export default {
			    data() {
			      return {
			        numberValidateForm: {
			          age: '',
			          name: '',
			          card:'',
			          open:'',
			          cardage:'',
			          cardname:'',
			          
			        },
			        book:'',
			        show:'flex',
			        score:'点击获取芝麻信用',
			        cardcheck:false,
			        zmxy:false,
			         imageUrl: '',
			      };
			    },
			    methods: {
			    	getscore(){
			    		this.score="755分"
			    	},
			    	check1(formname){
			    		if (this.numberValidateForm.name!=''&&this.numberValidateForm.age!='') {this.cardcheck=true}
			    			console.log(this.numberValidateForm,this.cardcheck)
			    	},
			    	check2(){
			    		if (this.numberValidateForm.card!=''&&this.numberValidateForm.cardage!=''&&this.numberValidateForm.cardname!=''&&this.numberValidateForm.open!='') {this.zmxy=true}
			    	},
			    	handleAvatarSuccess(res, file) {
        this.imageUrl = URL.createObjectURL(file.raw);
      },
		      beforeAvatarUpload(file) {
		        const isJPG = file.type === 'image/jpeg';
		        const isLt2M = file.size / 1024 / 1024 < 2;

		        if (!isJPG) {
		          this.$message.error('上传头像图片只能是 JPG 格式!');
		        }
		        if (!isLt2M) {
		          this.$message.error('上传头像图片大小不能超过 2MB!');
		        }
		        return isJPG && isLt2M;
		      }
			     }
			  }
</script>


<style scoped>
button{
	margin: auto;
	display: block;
}
ol li{
	text-align: center;
}
button a{
	display: block;
	color: white;
	height: 100%;
	width: 100%;
	line-height: 34px;
}
.el-message__content{
	position: absolute;
	left: 0;
	width: 100%;
	font-size: 16px;
	z-index: 999;
}

		*{ 
		   margin:0;
		   padding:0;
		}
		.grrz{
            height: auto;
		}
		/*头部三步骤*/
		.step{
			border-radius:10px 0 0 10px;
		}
		ul{
			border-radius:10px 0 0 10px;
			display: flex;
			width: 720px;
			height: 50px;
			margin: 0 auto;
		}
		
		 ul li:first-child{
          background: #418ffb;
		}
		ul li{
			width:33.3%;
			list-style: none;
			position: relative;
		}
		h1{
			color: #fff;
			text-align:center;
			line-height: 50px;
		}
		h1 span{
			font-size:15px;

		}
		 p{
			width: 0px;
			height: 0px;
			border-top: 25px solid transparent;
			border-left: 25px solid #418ffb;
			border-bottom: 25px solid transparent;
			position: absolute;
			right: -25px;
			top: 0px;
			z-index: 999;
		} 
		.second{
			background: #919293;
		}
		.secondp{
			border-left: 25px solid #919293;
		}
		.third{
			background: #919293;
		}
		.thirdp{
			border-left: 25px solid #919293;
		}
		/*认证三步骤*/

        ol{
        	width:720px;
        	height: 50px;
        	margin: 0 auto;
        	display: flex;
        	list-style: none;
        	margin-top:40px;
        	margin-bottom:90px;

        }
         ol li:first-child{
         	color: #333;
         	font-size: 28px;
         	margin-top: 0px;
         	font-weight: bold;

         }
        ol li{
        	width:33.3%;
        	color: #999999;
        	margin-top: 10px;
        }

     /*   身份认证*/
         #first{
         	border-bottom: 2px dotted #aca9a9;
         }

          .identity{
          	width: 720px;
          	height: 314px;
          	margin: 0 auto;

          }
           .title {
           	width: 720px;
           	height: 70px;
           }
          .title span{
          	display: inline-block;
          	float: left;
             width: 16px;
             height: 20px;
             background:#418ffb;
             margin-right: 20px;
          }
          .title h3{
            font-size:15px;
          	float: left;
          	font-weight: normal;
          }
        /*input*/

        #elem{
			width: 350px;
			height:auto;
			margin: 0 auto;
		}
		input{
			width: 260px;
			height: 40px;
		}
		.el-form-item__content{
			margin-bottom: 27px;
		}
		#name{
			margin-bottom: 27px;
		}
		/*按钮下一步*/
         button{
         	width: 160px;
         	height: 36px;
         	border-radius: 8px;
         	list-style: none;
         	background:#418ffb;
         	border: 1px solid #418ffb;
         	margin-top: 45px;
         	font-size: 16px;
         	color: #fff;
         }
         /*银行卡认证*/
         .card{
         	height: 430px;
         }
         .card .title{
         	margin-top: 50px;
         }
         /*芝麻信用*/
        .seed{
        	height: 198px;
        }
        /*资质认证*/
        .senior{
        	width: 720px;
        	height: auto;
        	margin: 0 auto;
        	margin-bottom:30px;
        }
        .senior .title{
        	margin-top: 50px;
        }
        
        h4{
        	width: 190px;
        	height: 50px;
        	border: 1px solid #666;
        	margin: 0 auto;
        	border-radius: 8px;
        	line-height: 50px;
        	font-size: 12px;
        	color: #666;
        	margin-top: 30px;
        }
        /*上传图片*/
		
</style>
<style>
	.el-upload {
		    border: 1px dashed #d9d9d9;
		    border-radius: 6px;
		    cursor: pointer;
		    position: relative;
		    overflow: hidden;
		    display: block;
		    width: 178px;
		    height: 178px;
		  }
		  .avatar-uploader .el-upload:hover {
		    border-color: #409EFF;
		  }
		  .avatar-uploader-icon {
		    font-size: 28px;
		    color: #8c939d;
		    width: 178px;
		    height: 178px;
		    line-height: 178px;
		    text-align: center;
		  }
		  .avatar {
		    width: 178px;
		    height: 178px;
		    display: block;
		  }
</style>