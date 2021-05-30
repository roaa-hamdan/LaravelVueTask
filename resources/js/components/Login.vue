<template>
     <div class= "main-container">
        <div >
            <div ><h1 class="text-style">Login to your account</h1></div>
            <div class="container" >
                <label for="email">Your e-mail</label>
                <input  class="input-style" placeholder="Email" type="email" v-model="form.email">
            </div>
            <div class="container">
                <label for="password">Password</label>
                <input class="input-style" placeholder="Password" type="password" v-model="form.password" name="password">
            </div>
            <div class="submit">
                <button @click.prevent="loginUser" type="submit">Login</button>
            </div>
        </div> 
    </div>
</template>
<script>
export default {
    data(){
        return{
            form:{
                email: '',
                password: ''
            },
            errors: []
        }
    },
    methods:{
         loginUser(){
             console.log(1);
             axios.post('/api/login', this.form).then(() =>{
                 this.$router.push({ name: "Dashboard"}); 
             }).catch((error) =>{
         this.errors = error.response.data.errors;
            })
         }
    }
}
</script>
<style scoped>

.submit{
    background-color:grey;
    border:solid 1px;
    border-radius:5px;
    text-align:center;
    margin-top: 20px;
    height: 35px;
}
.container{
  width: 150px;
  height:60px;
  margin-top:15px ;
}
.main-container{
display: flex;
justify-content: center;
align-content: center;
margin-top: 60px;
}
.input-style {
 border:solid 1px gray;
   width: 500px;
  height: 40px;
background-color: rgba(243,244,246,.8);
}
.text-style{
        font-family: cursive;
        font-size:30px

}
</style>