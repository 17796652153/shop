import Vue from 'vue'
import Router from 'vue-router'
import update from '@/components/update/update'
import rank from '@/components/rank/rank'
import search from '@/components/search/search'
import register from '@/components/register/register'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      component: update
    },
    {
      path: '/update',
      component: update
    },
    {
      path: '/register',
      component: register
    },
    {
      path: '/rank',
      component: rank
    },
    {
      path: '/search',
      component: search
    }
  ]
})
