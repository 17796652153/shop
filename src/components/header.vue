<template>
<div class="container">
            <div class="top">
                <div class="tleft">
                    欢迎&nbsp;
                </div>
                 <a href="#">用户中心</a>
                <ul class="tright">
                    <li><router-link to="/search">
                        手机商城
                    </router-link></li>
                    <li class="res"><router-link to="/register">注册</router-link></li>
                    <li>
                        <router-link id="bitout" to="/rank">注销</router-link>
                    </li>
                    <li><router-link to="/rank">登录</router-link></li>
                </ul>
            </div>
        <div class="bottom ">
            <div class="search">
                <input type="text" placeholder="请输入要搜索的内容" class="search-box"/>
                <router-link to="/update"></router-link>
            </div>
            <div class="cart">
                <i></i>
                <span>购物车</span>
                (<span class="total">0</span>)
            </div>
        </div>
</div>
</template>

<script>
import 'common/css/header.css'
export default {

}
</script>

<style>

</style>