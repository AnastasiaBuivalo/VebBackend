<template>
      <section>
        <ul class="course_grid">
            <course-item
            v-for="course in courses"
            :course="course"
            :key="course.id"
            />        
        </ul>
      </section>
</template>

<script>
import CourseItem from "@/components/CourseItem.vue"
import axios from "axios";

// export default {
//   name: 'CourseList',
//   components: {
//     CourseItem
//   },

  

export default {
    name: "CourseList",
    components: {CourseItem},
    data() {
        return {
            courses: []
        }
    },
    created() {
        axios.get('http://localhost/api/all_course', {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('user')
            }
        })
        
          .then((response) => this.courses = response.data)
                // this.$store.commit('initCart', response.data)
    }

  // data(){
  //   return{
  //       courses:[
  //           {id: 1,name:"Название", description:"Описание", img:"logo512.png"},
  //           {id: 2,name:"Название", description:"Описание", img:"logo512.png"},
  //           {id: 3,name:"Название", description:"Описание", img:"logo512.png"}
  //       ]
  //   }
  // }
}
</script>


<style>
.course_grid {
    display: flex;
    flex-wrap: wrap;
    width: 1100px;
    max-width: 1100px;

    margin: 50px;
    padding-bottom: 100px;

}

.course_item{

    display: flex;
    flex-direction: column;
    justify-content: space-around;
        list-style-type: none;
        width: 300px;
        height: 400px;
        background-color: white;

        box-shadow: 25px 25px 10px #C7AA7F;
        padding: 15px;
        margin-top: 35px;
        margin-right: 35px;

        cursor: pointer;
        transition: 0.3s transform;

}

.course_name{
    display: flex;
    justify-content: center;
    
    font-weight: bold;
    font-size: 22px;
    line-height: 29px;
    text-transform: uppercase;
    color: #12847A;
}

.course_price{
    display: flex;
    justify-content: end;
    
    padding-right: 50px;
    font-weight: bold;
    font-size: 22px;
    line-height: 29px;
    text-transform: uppercase;
    color: #12847A;
}
</style>