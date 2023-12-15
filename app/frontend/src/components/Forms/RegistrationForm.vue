<script>
    
    export default {
    name: 'RegistrationForm',
    components: {
    
    }
    }
</script>

<template>
    <form @submit.prevent className="form" onSubmit={formik.handleChange}>
        <h2>Регистрация</h2>
        <label htmlFor="text">Ваше имя</label>
        <input
            id="name"
            name="name"
            type="text"
        />
        
        <label htmlFor="email">Ваша почта</label>
        <input
            id="email"
            name="email"
            type="email"

        />
       
        <label htmlFor="password">Пароль</label>
        <input
            id="password"
            name="password"
            type="password"

        />

        <label htmlFor="password">Повторите пароль</label>
        <input
            id="repeat_password"
            name="repeat_password"
            type="password"

        />              
         

        <label htmlFor="text">Выберите фото для своего профиля: </label>
        <input type="file" name="AddImage" id="AddImage" accept="image/*" placeholder='фото профиля' />

        <label htmlFor="role">Статус аккаунта</label> 
        <field
            id="role"
            name="role"
            as="select"
            >
                <option value="">Выберите роль</option>
                <option value="Ученик">Ученик</option>
                <option value="Преподаватель">Преподаватель</option>
        </field>
        <label htmlFor="text">О себе</label>
        <textarea
            id="text"
            name="text"
            as="textarea"
        />

        <label htmlFor="text">Специальность</label>
        <textarea 
                id="speciality"
                name="speciality"
                as="textarea"
            />
        <label htmlFor="text">Опыт</label>
        <textarea 
                id="experience"
                name="experience"
                as="textarea"

            />

        <label className="checkbox">
            <input name="terms" type="checkbox" />
            Соглашаетесь с политикой конфиденциальности?
        </label>
        

        <div className='btns'>
            <button type="submit" className='btns_registration' onClick={onRegistration}>Зарегестрироваться</button>
        </div>
    </form>
</template>



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
a {
    text-decoration: none; /* Убираем подчёркивание */
}
form .checkbox {
        display: flex;
        align-items: center;
}

input[type="checkbox"] {
        display: inline;
        font-size: 16px;
        width: 25px;
        height: 25px;
        margin-top: 0;
        margin-right: 15px;
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

textarea {
        height: 180px;
        width: 100%;
        margin-top: 15px;
        /* padding: 15px 20px; */
        font-size: 18px;
        background: #fff;
        border: 1px solid #e2e2e2;
        color: #353535;
        border-radius: 10px;
        resize:none;
        &:focus {
            outline: 1px solid #f57507;
        }
    }
</style>