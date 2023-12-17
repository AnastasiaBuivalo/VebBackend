import {createRouter, createWebHistory} from "vue-router";

import CourseList from "@/components/CourseList"
import MainPage from "@/components/MainPage"
import LogIn from "@/components/Forms/LogIn"
import RegistrationForm from "@/components/Forms/RegistrationForm"
import PageError from "@/components/PageError"
import CoursePage from "@/components/CoursePage"
import ProfilePage from '@/components/ProfilePage'
import LogOut from "@/components/LogOut"
import CreateCourse from "@/components/CreateCourse"

const routes = [
  {
    path: '/',
    name:'home',
    component: MainPage,
  },
  {
    path: "/all_course",
    name: "catalog",
    component: CourseList
  },
  {
    path: "/all_course/:id",
    name: 'coursePage',
    component: CoursePage
  },
  {
    path: "/login",
    component: LogIn
  },
  {
    path: "/registration",
    component: RegistrationForm
  },
  {
    path: "/profile",
    name: "profile",
    component: ProfilePage
  },
  {
    path: '/logout',
    name: 'logout',
    component: LogOut
},
{
  path: '/create_course',
  name: 'createcourse',
  component: CreateCourse
},

  {
    path: "/page404",
    component: PageError
  }
];

const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
})

export default router;