<template>
    <form @submit.prevent="onLogin" method="post" class ="form">
        <h2>Вход</h2>
        <label htmlFor="email">Ваша почта</label>
        <input v-model="login"
                id="email"
                name="email"
                type="email"/>
        <label htmlFor="password">Пароль</label>
        <input v-model="password"
            id="password"
            name="password"
            type="password"/>
        
        <div class='btns'>
            <button type="submit">Вход</button>
           <button> <a href = "\registration">Регистрация</a></button>
        </div>
    </form>
</template>

<script>
import axios from 'axios'
import router from '@/router/router'
export default {
  name: 'LogIn',
  components: {
  
  },
  data() {
    return {
      login: '',
      password: '',
      loginError: '',
      passwordError: ''
    }
  },
  methods: {
    onLogin() {
        
      this.loginError = ''
      this.passwordError = ''

      if (this.login.trim().length === 0) {
        this.loginError = 'Пожалуйста заполните Логин'
      }

      if (this.password.trim().length === 0) {
        this.passwordError = 'Пожалуйста заполните Пароль'
      }
  
    //   11111111
      if (!this.loginError && !this.passwordError) {
        
        axios.post('http://localhost/api/login', {email: this.login, password: this.password})
            .then((response) => {
                localStorage.setItem('user', response.data.token)
                this.$store.commit('setToken', response.data.token)
                router.push({name: 'home'})
            })
            .catch((errors) => this.loginError = errors.response.data.message)
      }
    }
  }
}
</script>

<style>
.form {
    margin: 0 auto;
    padding: 35px;
    width: 700px;
    min-height: 500px;
    background-color: #fff;
    border-radius: 3px;
    box-shadow: 0 9px 23px 0 rgb(0 0 0 / 3%);
}

.form h2{
    text-align: center;
    font-size: 28px;
    text-transform: uppercase;
}

.form label {
    display: block;
    margin-top: 25px;
    font-size: 18px;
    font-weight: bold;
}

.form input {
        width: 100%;
        height: 50px;
        margin-top: 15px;
        padding: 5px 15px;
        background: #fff;
        border: 1px solid #e2e2e2;
        color: #353535;
        border-radius: 10px;
        font-size: 22px;
}

.btns{
    display:flex;
    flex-flow: column nowrap;
    align-items:center;
}

.btns button{
    width: 200px;
    padding: 15px;
    margin-top: 25px;
    font-size: 18px;
    color: #fff;
    border: 0;
    border-radius: 10px;
    background-image: linear-gradient(257deg, #f59c07, #f57507);
}
</style>