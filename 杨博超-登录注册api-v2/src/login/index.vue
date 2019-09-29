<template>
    <div class="apps">
        <div class="login">
            <p style="color:white">欢迎来到登录系统</p>
            <p><input type="text" placeholder="请输入姓名" name="name" v-model="name"></p>
            <p><input type="text" placeholder="请输入密码" name="pass" v-model="pass"></p>
            <p><button @click="btn">登录</button></p>
            <p><button @click="reg">注册</button></p>
        </div>
    </div>
</template>

<script>
import "./index.css"
    export default {
        name:"app",
        data(){
           return{
            name:"",
            pass:""
           }
        },
         components: {
           
        },
        methods:{
             btn(){
                 let name=this.name
                 let pass=this.pass
                   let url="http://localhost:8888/hello-world/api/2.php?name="+name+"&pass="+pass+"&token="+localStorage["token"]
                this.axios.get(url).then((res)=>{
                    console.log(res.data)
                    if(res.data.msg=="loginOk"){
                        alert("登录成功")
                           this.$router.push("/main")
                    }else{
                        alert("登录失败")
                    }
                })
            },
            reg(){
                this.$router.push("/zhu")
            }
        }
    }
</script>