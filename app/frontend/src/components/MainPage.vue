<template>
      <section class="main container">
          <p class="text">Освой востребованную профессию</p>  
          <img src="banner.png">  
      </section>
  </template>
  
  <script>
  
  
  export default {
    name: 'App',
    components: {
    
    }
  }
  </script>
  
  <style>
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

    .container img{
        width: 500px;
        height: 500px;
        left: 1025px;
        top: 256px;
        border-radius: 518.5px;
    }

    .text{

      margin: 0;
      
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 300;
      font-size: 100px;
      line-height: 136px;
        
      color: #000000;
    }
  </style>
  