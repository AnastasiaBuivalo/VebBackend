<template>
    <div className="profile">
            <div className="profile_content">
                <div className="profile_menu ">
                    <div className="profile_menu_header">
                        <img src="../../public/user.png"/>
                        <!-- <p>{fcs_s||fcs_l}</p> -->
                    </div>
                    <ul className="profile_menu_ul">
                        <button >Мои курсы</button>
                        <button >Список желаний</button>
                        <button >Редактировать</button>
                        <button >Уведомления</button>
                        
                        <button>
                            <router-link :to="{path:'/logout'}"> Выйти</router-link>
                           
                        </button>
                        
                    </ul>
                </div>   
                 
            </div>
            <div className="profile_current_screen">
                <button>
                    <router-link :to="{path: '/create_course'}">Создать курс</router-link>
                </button>
            </div>   
        </div>
</template>

<script>
// import axios from "axios";

export default {
    name: "ProfilePage",
    // created() {
    //     if(localStorage.getItem('user'))
    //     axios.get('http://localhost/api/profile', {
    //         headers: {
    //             Authorization: 'Bearer ' + localStorage.getItem('user')
    //         }
    //     })
    //         .then((response) => {
    //             this.$store.commit('initProfile', response.data)
    //         })
    // }
}
</script>

<style>
.profile{
    display: flex;
    justify-content:center;
    position: absolute;
    width: 100%;
    min-height: 1250px;
    background-color:#12847A;

}

.profile_bg img{
    position: absolute;
    width: 800px;
    height: 800px;
    /* left: 100%-2000px;
    top: 500px; */
}

.profile_menu{
    box-sizing: border-box;
    background: #C7AA7F;
    border: 1px solid #000000;
    border-radius: 5px;
}

.profile_menu_header{
    display: flex;
    justify-content: left;
    align-items:center;
    width: 500px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;

    color: #000000;
    border: 2px solid #000000;
    border-radius: 5px;
}

.profile_menu_header img{
    width: 200px;
    height: 200px;
    border-radius: 267px;
}

.profile_menu_ul {
    padding-left: 0;
    margin-bottom: 0;
}

.profile_menu_ul button{
    display: flex;
    align-items:center;
    width: 100%;
    margin-top: 0;
    height: 100px;
    background: #C7AA7F;


    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    display: flex;


    color: #000000;

    border: 2px solid #000000;
    border-radius: 5px;
}


.profile_current_screen{
        box-sizing: border-box;


        display:flex;
        flex-flow: column;
        align-items: center;

        width: 500px;
        min-height: 722px;
        left: 120px;
        top: 241px;

        background: #C7AA7F;
        border: 1px solid #000000;
        border-radius: 5px;

        height:714px;

        /* background: url(../../public/decoration.png) right bottom no-repeat; 
    padding-right: 200px; */


}

.profile_current_screen button{
    width: 180px;
    padding: 15px;
    margin-top: 25px;
    margin-bottom: 35px;
    font-size: 18px;
    color: #fff;
    border: 0;
    border-radius: 10px;
    background-image: linear-gradient(257deg, #f59c07, #f57507);
}

/* .profile_content{
        display: flex;
        justify-content: center;
        width: 100%;
    } */

    a{
        color: #000000;
    }

</style>