<template>
<form className="form" @submit.prevent="create">
            <h2>Курс</h2>
            <label htmlFor="text">Название</label>
            <input v-model="this.course.name"
                id="name"
                name="name"
                type="text"            
            />
        

            <label htmlFor="text">Выберите фото для обложки курса: </label>
            <input type="file" name="AddImage" id="AddImage" accept="image/*" placeholder='фото профиля'/>

            <label htmlFor="text">Описание</label>
            <input
                id="description"
                name="description"
                as="textarea"
                v-model="this.course.descriptiion"
            />
            <label htmlFor="text">Длительность</label>
            <input
                id="duration"
                name="duration"
                type="text"
                v-model="this.course.duration"

            />

            <label htmlFor="text">Цена</label>
            <input
                id="name"
                name="price"
                type="text"
                v-model="this.course.price"
            />
            
             <div className='btns'>
                <button type="submit" className='btns_registration'>Создать</button>
            </div>
        </form>
</template>

<script>
import axios from 'axios'
import router from "@/router/router"
export default {
  name: 'CreateCourse',
  components: {
  
  },
  data(){
    return{
        course:{
            name: "",
            descriptiion:"",
            duration:"",
            price: "",
            img:""
        },
        inputError:""
    }
  },
  methods:{
    create(){
        if (!this.inputError) {
        //параметры проставить, добавить маршрут в апи, добавить функцию в контроллер
        axios.post('http://localhost/api/create_course', 
            {   title: this.course.name, 
                descript: this.course.descriptiion,
                duration:this.course.duration,
                price:this.course.price,
                lecturer_id: 2,
                img: "../../public/user.png"
                })
            .then(() => {
                console.log("/");
                // localStorage.setItem('user', response.data.token)
                // this.$store.commit('setToken', response.data.token)
                router.push({name: 'catalog'})
            })
            .catch((errors) => {console.log("error");this.inputError= errors})
      }
    }
  }
}
</script>

<style>
</style>