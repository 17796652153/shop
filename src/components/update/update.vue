<template>
     <div class="container">
        <div class="main">
            <div class="nav">
                <!--汉堡包+文字-->
                <div class="nav-toggle">
                    <i class="icon"></i>
                    <span>手机分类</span>
                </div>
                <div class="tellist">
                        <ul class="telul">
                                 <li>
                                    <a  @mouseover="doThis(i.falimy_id)"  v-for=" i in familys" :key="i.id" :class="i.falimy_id"  href="#">{{i.name}}</a>
                                    <div>
                                        <a href="#" v-for="item in family" :key="item.id"><img :src="require('../../common/'+item.pic)"><span>{{item.title}}</span></a><br>
                                    </div>
                                </li>
                                <li>
                                <div>华为手机2</div>
                                </li>
                        </ul>
                </div>
            </div>
            <div class="sales">
                <b>|热销单品</b>
                <div class="onef floor">
                    <!--<a href="">-->
                        <!--<img src="img/middle/m1a.jpg">-->
                        <!--<p>花湖</p>-->
                        <!--<p>实打实</p>-->
                        <!--<p><span>￥</span>湿哒哒</p>-->
                    <!--</a>-->
                </div>
                <b>|猜你喜欢</b>
                <div class="twof floor"></div>
                <b>|新品上市</b>
                <div class="threef floor"></div>
            </div>
        </div>
     </div>
</template>

<script>
/* eslint-disable */
// eslint-disable-next-line
import '@/common/css/index.css'
import '../../common/js/jquery-1.11.3.js'
import axios from 'axios'
export default {
     data(){
      return {
        familys: {},
        family:{}
      }
    },
    methods: {
        doThis(id){
            console.log(id);
            var url="http://127.0.0.1/sj/data/index/getfamilyde.php?fid="

             axios.get(url+id).then((res)=>{
                 console.log(res.data);
                this.family=res.data;
            }).catch((err)=>{
            console.log('异步请求失败', err);
            })
       
        }
    },
    mounted(){
        var url="http://127.0.0.1/sj/data/index/getfamily.php"
       axios.get(url).then((res)=>{
                this.familys=res.data;
         }).catch((err)=>{
           console.log('异步请求失败', err);
         })
       } 
    }
</script>

<style>

</style>