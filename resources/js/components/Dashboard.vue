<template>
    <div>
        Dashboard <br>
        <div v-if="teacher">
        Name: {{teacher.name}} <br>
        Phone: {{teacher.phone}}<br><br>
        <button @click.prevent="logout">Logout</button>
        </div>

    </div>
</template>
<script>
export default {
    data(){
        return{
            teacher: null
        }
    },
    methods:{
        logout(){
            axios.post('/api/logout').then(()=>{
                this.$router.push({ name: "Login"})
            })
        }
    },
    mounted(){
        axios.get('/api/teacher').then((res)=>{
            this.teacher = res.data
        })
    }
}
</script>