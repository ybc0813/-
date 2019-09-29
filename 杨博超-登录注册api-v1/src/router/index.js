import Vue from "vue"
import Router from "vue-router"
import Login from "../login/index.vue"
import Main from "../main/index.vue"
import Zhu from "../zhu/index.vue"
Vue.use(Router)
export default new Router({
    routes:[
        {
            path:"/",
            component:Login,
            name:"login"
        },{
            path:"/main",
            component:Main,
            name:"main"
        },{
            path:"/zhu",
            component:Zhu,
            name:"zhu"
        }
    ],
    redirect:"Login"
})