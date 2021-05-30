<template>
    <div>
        Class Details <br>
        <div v-if="classt">
        Name: {{classt.name}} <br>
        Phone: {{classt.c_id}}<br><br>
        <button @click.prevent="logout">Logout</button>
        </div>

    </div>
</template>
<script>
export default {
    data(){
        return{
            classt: null
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
        axios.get('/api/calsst').then((res)=>{
            this.classt = res.data
        })
    }
}
</script>