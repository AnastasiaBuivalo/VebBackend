<template>
    <li class="course_item">
    <router-link :to="{name: 'coursePage', params: {id: course.id}}">
    <!-- onclick="{this.$router.push(path = `/all_course/:${course.id}`)}" -->
            <div class='course_name'>
                <img src="logo512.png" alt="обложка"/>
            </div>
            
           
                <div class="course_name">{{course.title}}</div>
             
            <div>Описание</div>
            <div>{{course.descript.slice(0,120)+"..."}}</div>
            <div class="course_price">{{course.price}}</div>
        </router-link>
    </li>
</template>

<script>
    
    export default {
    name: 'CourseItem',
    components: {
        
    },
    props: {
        course: {
            type: Object,
            required: true,
        }
    }
    }
</script>