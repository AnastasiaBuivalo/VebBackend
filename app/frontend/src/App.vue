<template>
  <div class="app">
    <my-header></my-header>
    <router-view></router-view>
    <my-footer></my-footer>
  </div>
</template>

<script>
import MyHeader from "@/components/MyHeader.vue"
import MyFooter from "@/components/MyFooter.vue"

export default {
  name: 'App',
  components: {
    MyHeader,
    MyFooter
  },
  methods:{
  },
  created() {
      this.$store.commit('setToken', localStorage.getItem('user'))
  }
}
</script>

<style>
.app header{
    width: 100%;
    
}
.app .header nav{
    display: flex;
    justify-content: space-around;
    align-items: center; 
}

.app .menu ul{
    display: none;
    /* justify-content: space-between; */

}

.app .menu ul li{
    /* margin: 0 8px; */
    border: 2px solid #000000;
    border-radius: 5px;

    padding: 6px 10px 6px 10px;

}

.app .search-panel{
    margin-top: 30px;
    padding: 25px;
    box-shadow: 15px 15px 30px rgba(0, 0, 0, .15);

    border: 2px solid #000000;
    border-radius: 5px;
}

.app .search-input{

    box-sizing: border-box;

    position: absolute;
    width: 410px;
    height: 45px;
    left: calc(50% - 410px/2 - 352px);
    top: calc(50% - 45px/2 - 942.5px);

    background-color:#12847A;
    border: 2px solid #000000;
    border-radius: 5px;
}
.app .title{
    font-weight: bold;
    font-size: 28px;
    line-height: 37px;
}
.app {
    background-color:#12847A; 
    /* display: flex;
    flex-direction:column;
    justify-content: space-between; */
}

.main{
    
    height: 664px;
    left: 130px;
    top: 256px;
}


.container{
    display: flex;
    justify-content: center;
    background-color:#12847A;
    padding-top: 50px;
    padding-right:calc(50% - 410px/2 - 352px);
    padding-left: calc(50% - 410px/2 - 352px);
}

.container .text{
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    font-size: 100px;
    line-height: 136px;
        
    color: #000000;
}

.app img{

    width: 150px;
    height: 150px;
    object-fit: cover;

}

.main img{

width: 700px;
height: 700px;
left: 1025px;
top: 256px;
border-radius: 518.5px;

}


.footer{
    display: flex;
    justify-content: space-around;
    margin-top: 50px;
    /* position: absolute; */
    width: 100%;
    height: 219px;

    /* padding-top: 50px; */
    /* padding-right:calc(50% - 410px/2 - 352px);  */
    /* padding-left: calc(50% - 410px/2 - 352px); */
    /* // left: 0px;
    // top: 1112px; */

    background: #C7AA7F;
}

.footer .contacts{
    display: flex;
    flex-direction:column;
}



.dropdown{
    z-index: 1;
    width: 142px;
    height: 45px;
    position: relative;
}

.dropdown li, .dropdown button{
    box-sizing: border-box;
    background-color:#12847A;
    /* //position: absolute; */
    width: 142px;
    height: 45px;
    /* //left: 120px;
    //top: 35px; */
    border: 2px solid #000000;
    border-radius: 5px;
    list-style-type:none;
}

.dropdown .list{
    display: none;
    overflow: visible;
    padding-left: 0; 
    margin-top: 0;
    display:flex;
    flex-direction:column;
}

/* Изменение цвета выпадающих ссылок при наведении курсора */
.list li:hover {background-color: #ddd;}

/* Показать выпадающее меню при наведении курсора */
.dropdown:hover .list {display: block;}

/* Изменение цвета фона кнопки раскрывающегося списка при отображении содержимого раскрывающегося списка */
.dropdown:hover button {background-color: #C7AA7F;}
</style>
