<script>
    
    export default {
    name: 'PageError',
    components: {
    
    },

    created() {
    this.id = this.$route.params.id
  }
    }

    
</script>

<template>
    <div class = 'error'>
        <img src = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fpngtree.com%2Fso%2F404-page&psig=AOvVaw3Pp00R-VKhG3yXfV-pf3HK&ust=1697315628414000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCOjS0M3v84EDFQAAAAAdAAAAABAv" alt = 'Error'/>
        <p>Page doesn't exist</p>
        <a href="/">Back to main page</a>
    </div>
</template>

<style>
    .error{
        height:100%
    }
    img{
        display: block;
        width: 250px;
        height: 250px;
        object-fit: contain; 
        margin: 0 auto
    }

    .error p{
        text-align: center;
        font-weight: bold;
        font-size: 24px
    }

    .error a{
        display: block;
        text-align: center;
        font-weight: bold;
        font-size: 24px; 
        margin-top: 30px
    }


</style>