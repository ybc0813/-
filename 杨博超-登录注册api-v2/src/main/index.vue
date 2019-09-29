<template>
  <div class="main">
    <div class="top">
      <p>Window电脑官网</p>
      <p>首页</p>
    </div>
    <div class="bottom">
      <div class="left">
          <div class="img">
              <img src="t1.png" alt="">
          </div>
      <ul class="uu">
        <li>罗技科技</li>
        <li>华硕 ASUS</li>
        <li>三星</li>
        <li>联想 Lemone</li>
        <li>外星人</li>
        <li>ios</li>
        <li>平台管理</li>
        <li>设备管理</li>
        <li  @click="back()">退出</li>
      </ul>
      </div>
      <div class="right">
          <p><input type="text" placeholder="请输入姓名"><span>查询</span></p>
         <table>
             <thead>
                 <tr>
                     <th>编号</th>
                     <th>名称</th>
                     <th>图片</th>
                     <th>价格</th>
                     <th>操作</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>1001</td>
                     <td>华硕科技</td>
                     <td><img src="" alt=""></td>
                      <td>15</td>
                       <td>删除</td>
                 </tr>
             </tbody>
         </table>
      </div>
    </div>
  </div>
</template>

<script>
import "./index.css";
export default {
    name:"main",
    components:{

    },
    methods:{
        back(){
            this.$router.push("/")
        }
    }
};
</script>

<style lang="scss" scoped>

</style>