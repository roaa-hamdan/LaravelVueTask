<template>
      <div class= "main-container">
        <div >
            <div><h1 class="text-style">Register an account</h1></div>
            <div class="container" >
                <label  for="first_name">First Name</label>
                <input  class="input-style" placeholder="First Name" type="text" v-model="form.first_name" >
            </div>
               <div class="container" >
                <label  for="last_name">last Name</label>
                <input  class="input-style" placeholder=" Last Name" type="text" v-model="form.last_name" >
            </div>
            <div class="container">
                <label for="user_name">Your user_name</label>
                <input class="input-style"  placeholder="User Name" type="text" v-model="form.user_name">
            </div>

           <div class="container">
                <label for="phone">Your user_name</label>
                <input class="input-style"  placeholder="Phone" type="text" v-model="form.phone">
            </div>
             <div class="container">
                <label for="address">Your user_name</label>
                <input class="input-style"  placeholder="Adress" type="text" v-model="address">
            </div>
           
            <div class="container">
                <label for="password">Password</label>
                <input class="input-style"  placeholder="Password" type="password" v-model="form.password" >
            </div>
            <div class="container" >
                <label for="confirm_password">Confirm Password</label>
                <input class="input-style"   placeholder="Confirm Password" type="password" v-model="form.password_confirmation" >
            </div>
              <div class="container">
                <input type="radio" id="teacher" name="user-type" value="teacher"  v-model="form.type"/>
                                <label for="teacher">Teacher</label>

                <br />
                 <input type="radio" id="student" name="user-type" value="student"  v-model="form.type"/>
                                  <label for="student">Student</label>

                 <br />
            </div>
            <div class="submit">
                <button @click.prevent="saveForm" type="submit" >Register</button>
            </div>
        </div> 
    </div>
</template>
<script>
export default {
    data(){
        return{
            form:{
                name: '',
                email: '',
                password:'',
                password_confirmation:''
            },
            errors:[]
        }
    },
    methods:{
        saveForm(){
            console.log(this.form);
            axios.post('/api/register', this.form).then(() =>{
                console.log('saved');
            }).catch((error) =>{
                console.log('ddd');
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
