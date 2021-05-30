@extends('layouts.app')
@section('content')
    <div >
        <div>
                     <div style="display:flex ;justify-content:center ; background-color:grey ; height : 50px ; padding:10px ;
                     opacity:.8
                      ">
                <router-link class="mr-4" to='/login' exact>Login</router-link>
                <router-link to='/register'>Register</router-link>
            </div>
        </div>
    </div>
    <div class="container mx-auto py-2">
        <router-view></router-view>
    </div>
    
@endsection