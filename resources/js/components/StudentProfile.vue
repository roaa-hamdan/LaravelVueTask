<template>
    <div>
        Student Profile <br>
        <div v-if="student">
        Name: {{student.user_name}} <br>
        Phone: {{student.phone}}<br><br>
        <button @click.prevent="logout">Logout</button>
        </div>

    </div>
</template>
<script>
export default {
    data(){
        return{
            student: null
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
        axios.get('/api/student').then((res)=>{
            this.teacher = res.data
        })
    }
}
</script>