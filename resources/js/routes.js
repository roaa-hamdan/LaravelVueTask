import Register from './components/Register';
import Login from './components/Login';
import Dashboard from './components/Dashboard';
import NotFound from './components/NotFound';
import TeacherProfile from './components/TeacherProfile';
import StudentProfile from './components/StudentProfile';
import ClassDetails from './components/ClassDetails';


export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [
     {
         path:'*',
         component:NotFound,
         name:'NotFound'
     },
        {
            path: '/',
            component: Login,
            name: "Login"
        },
        {
            path: 'TeacherProfile',
            component: TeacherProfile,
            name: "TeacherProfile",
            beforeEnter: (to, form, next) =>{
                axios.get('/api/athenticated').then(()=>{
                    next()
                }).catch(()=>{
                    return next({ name: 'Login'})
                })
            }
        },
        
        {
            path: 'ClassDetails',
            component: ClassDetails,
            name: "ClassDetails",
            beforeEnter: (to, form, next) =>{
                axios.get('/api/athenticated').then(()=>{
                    next()
                }).catch(()=>{
                    return next({ name: 'Login'})
                })
            }
        },
             
        {
            path: '/register',
            component: Register
        },
        {
            path: '/StudentProfile',
            component: StudentProfile,
            name: "StudentProfile",
            beforeEnter: (to, form, next) =>{
                axios.get('/api/athenticated').then(()=>{
                    next()
                }).catch(()=>{
                    return next({ name: 'Login'})
                })
            }

        },
        {
            path: '/register',
            component: Register
        },
        {
            path: '/login',
            component: Login,
            name: 'Login'
        },
   
        {
            path: "/dashboard",
            name: "Dashboard",
            component: Dashboard,
           beforeEnter: (to, form, next) =>{
               axios.get('/api/athenticated').then(()=>{
                   next()
               }).catch(()=>{
                   return next({ name: 'Login'})
               })
           }
       
          }
          
    ]
}