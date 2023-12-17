<script>
import router from "../router/router";

export default {
    name: "LogOut",
    created() {
        localStorage.removeItem('user')
        this.$store.commit('setToken', null)
        router.push({name: 'home'})
    }
}
</script>