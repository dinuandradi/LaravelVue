import Vue from 'vue'
import Router from 'vue-router';

import Designpanel from './views/Design/despanel.vue'
import DesignCurPro from './views/Design/DesignCurPro.vue'
import DesignCompletedProjects from './views/Design/DesignCompletedProjects.vue'
import AddnewProject from './views/Design/AddnewProject.vue'
import SendDesign from './views/Design/SendDesign.vue'
import Login from './views/Common/Login.vue'
import register from './views/Admin/register.vue'
import Tester from './views/Test/Tester.vue'
import SignUp from './views/Common/SignUp.vue'
import Hm from './views/Common/Hm.vue'
import ProSup from './views/Production/ProSup.vue'


import workerProfile from './views/Worker/workerProfile.vue'
import workerpanel from './views/Worker/workerpanel.vue'
import workerReport from './views/Worker/workerReport.vue'

import Incentive_person from './views/Incentives/Incentive_person.vue'
import IRecentReports from './views/Incentives/IRecentReports.vue'
import Download from './views/Incentives/Download.vue'
import Calculate from './views/Incentives/Calculate.vue'
import publish from './views/Incentives/publish.vue'


Vue.use(Router);

export default new Router({

    routes:[

        {
            path:'/Designpanel',
            name:'Designpanel',
            component: Designpanel

        },
    
    
        {
            path:'/DesignCurPro',
            name:'DesignCurPro',
            component: DesignCurPro

        },
        
        {
            path:'/DesignCompletedProjects',
            name:'DesignCompletedProjects',
            component: DesignCompletedProjects

        },

    

         {
            path:'/AddnewProject',
           name:'AddnewProject',
           component: AddnewProject

         },

         {
             path:'/SendDesign',
             name:'SendDesign',
             component: SendDesign

          },
          {
            path:'/Login',
            name:'Login',
            component: Login

         },

         {
            path:'/register',
            name:'register',
            component: register

        },

        {
            path:'/Tester',
            name:'Tester',
            component: Tester
        },

        {
            path:'/SignUp',
            name:'SignUp',
            component: SignUp
        },

        {
           path:'/',
           name:'Hm',
           component: Hm
       },

       {
           path:'/ProSup',
           name:'ProSup',
           component: ProSup
       },

       

       //worker pages

       {
        path:'/workerpanel',
        name:'workerpanel',
        component: workerpanel

    },
    {
        path:'/workerProfile',
        name:'workerProfile',
        component: workerProfile

    },
    {
        path:'/workerReport',
        name:'workerReport',
        component: workerReport

    },

//incentive pages

    {
        path:'/Incentive_person',
        name:'Incentive_person',
        component: Incentive_person

     },
     {
        path:'/IRecentReports',
        name:'IRecentReports',
        component: IRecentReports

     },
     {
        path:'/Download',
        name:'Download',
        component: Download

     },
     {
        path:'/Calculate',
        name:'Calculate',
        component: Calculate

     },
     {
        path:'/publish',
        name:'publish',
        component: publish

     }


    
    ]
})