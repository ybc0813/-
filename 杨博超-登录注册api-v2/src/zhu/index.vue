<template>
    <div class="apps">
        <div class="login">
            <p style="color:white">欢迎来到注册系统</p>
            <p><input type="text" placeholder="请输入姓名" name="name" v-model="name"></p>
            <p><input type="text" placeholder="请输入密码" name="pass" v-model="pass"></p>
            <p><button @click="backs">注册</button></p>
        </div>
    </div>
</template>

<script>
import "../login/index.css"
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
             backs(){
                 let name=this.name
                let pass=this.pass
                let url="http://localhost:8888/hello-world/api/1.php?name="+name+"&pass="+pass
                console.log(url)
                this.axios.get(url).then((res)=>{
                    console.log(res.data)
                    if(res.data.msg=="ok"){
                        console.log(res)
                        localStorage["token"]=res.data.token
                        alert('成功')
                           this.$router.push("/")
                    }
                })

                //  this.axios.get("http://localhost:8888/hello-world/api/1.php").then((res)=>{
                //      console.log(res.data)
                //  })
            //    this.$router.push("/")
            }
        }
    }
</script>