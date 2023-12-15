<template>
            <div className="course_page">
            <!-- {course?( -->
             <div>
            <div className="promo">
                <img src="../../public/course_promo.jpeg"/>
                <div className="price">
                    <h2 >Цена</h2>
                    <h2>{{course.price}}</h2>
                </div>

                <div className="promo_favorite">
                    <button>Добавить в корзину</button>
                    <button>Избранное</button>
                </div>
                <div className='promo_buy'>
                    <button>Купить</button>
                </div>
            </div>
            <div className="infobox">
                <h1>{{course.title}}</h1>
                <!-- {/* <h1>Полное руководство по Python 3: от новичка до специалиста</h1> */} -->
                <p>{{course.descript}}</p>
                    <h2>Включает:</h2>
                <div className="items">
                    <div className="item">
                        <img alt='часы' src="../../public/clock.png"/>
                        <p>Длительность: {{course.duration}} часов</p>
                    </div>
                    <div className="item">
                        <img alt='Доп материалы' src = "../../public/book.png"/>
                        <p>Ресурсы</p>
                    </div>
                    <div className="item">
                        <img alt='Результат'  src="../../public/logo512.png"/>
                        <p>Сертификат</p>
                    </div>
                </div>
                <p>Дополнительное описание</p>
                <div className="lecturer">
                    <img alt='Фото преподавателя' src ="../../public/lector.png"/>
                    <div className='lecturer_inform'>
                        <h3>ФИО</h3>
                        <p>О себе</p>
                    </div>
                </div>
                </div>
            </div>
            <!-- ):PageError} -->
            
        </div>
</template>
<script>
import axios from "axios";
// import {book} from "../../public/book.png"
export default {
    name: 'CoursePage',
    components: {
        
    },
    data() {
        return {
            course: {}
        }
    },
    created() {
    this.id = this.$route.params.id
    axios.get(`http://localhost/api/all_course/${this.id}`, {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('user')
            }
        })
        .catch(function (error) {
            console.log(error.toJSON());
        })
        
          .then((response) => this.course = response.data)
  }
    
}
</script>


<style>
.course_page{
    display: flex;
    justify-content: center;

}

.price{
    display: flex;
    justify-content: center;
}

.promo_buy{
    display: flex;
    justify-content: center;
}
.promo img{
        width: 500px;
        height: 200px;
        object-fit: cover;
}
.promo_favorite{
        display: flex;
        justify-content: center;
}

.promo  button {
        width: 180px;
        padding: 15px;
        margin-top: 25px;
        margin-right: 15px;
        font-size: 18px;
        color: #fff;
        border: 0;
        border-radius: 10px;
        background-image: linear-gradient(257deg, #f59c07, #f57507);
}
.infobox{
    padding-left: 50px;
}
.items{
    display: flex;
    justify-content: space-around;
}

.item{
    width: 100px;
    padding-left: 8px;
    display: flex;
    justify-content: center;
}

.item img{
    /* display: flex;
    justify-content: center; */

    
    /* margin-right: 8px; */
    width: 50px;
    height: 50px;
    object-fit: cover;
}
.lecturer{
    /* display: flex;
    justify-content: center; */
    display: flex;
        justify-content: space-around;
}

.lecturer img{
    margin: 0;
        width: 150px;
        height: 150px;
        /* object-fit: cover; */
}

</style>