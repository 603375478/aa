import Vue from 'vue'
import Router from 'vue-router'
import login from '@/components/login'
import register from '@/components/register'
import selectmethod from '@/components/selectmethod'
import grrz from '@/components/grrz'
import qyrz from '@/components/qyrz'
import home from '@/components/home'
import renzheng from '@/components/renzheng'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'login',
      component: login
    },
    {
      path: '/login',
      name: 'login',
      component: login
    },
    {
   	  path: '/register',
      name: 'register',
      component: register
  	},
  	{
      path: '/home',
      name: 'home',
      component: home,
  	},
  	{
      path: '/selectmethod',
      name: 'selectmethod',
      component: selectmethod,
  	},
  	{
      path: '/renzheng',
      name: 'renzheng',
      component: renzheng,
      children:[
		{
	      path: '/renzheng/grrz',
	      name: 'grrz',
	      component: grrz,
	  	},
	  	{
	      path: '/renzheng/qyrz',
	      name: 'qyrz',
	      component: qyrz,
	  	}
      ]
  	} 	
  ]
})
