import Vue from 'vue'
import Router from 'vue-router';

import Designpanel from './views/Design/despanel.vue'
import DesignCurPro from './views/Design/DesignCurPro.vue'
import DesignCompletedProjects from './views/Design/DesignCompletedProjects.vue'
import AddnewProject from './views/Design/AddnewProject.vue'
import SendDesign from './views/Design/SendDesign.vue'
import Reports from './views/Design/Reports.vue'


import Login from './views/Common/Login.vue'
import rr from './views/Admin/rr.vue'
import register from './views/Admin/register.vue'


import Tester from './views/Test/Tester.vue'
import SignUp from './views/Common/SignUp.vue'
import Hm from './views/Common/Hm.vue'
import ProSuper from './views/Design/ProSuperv.vue'
import Propanel from './views/Production/Propanel.vue'
import ProSupDesigner from './views/Production/ProSupervForDesigner.vue'
import ProSup from './views/Production/ProSup.vue'

import Productiondata from './views/Production/productiondata.vue'


import TesterFeedback from './views/Test/TesterFeedback.vue'


import edit from './views/Test/edit.vue'

import workerProfile from './views/Worker/workerProfile.vue'
import workerpanel from './views/Worker/workerpanel.vue'
import workerReport from './views/Worker/workerReport.vue'

import Incentive_person from './views/Incentives/Incentive_person.vue'
import IRecentReports from './views/Incentives/IRecentReports.vue'
import Incentivecriteria from './views/Incentives/Incentivecriteria.vue'
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
            path:'/Reports',
            name:'Reports',
            component: Reports

         },
          

//login

          {
            path:'/',
            name:'Login',
            component: Login

         },
         

         {
            path:'/register',
            name:'register',
            component: register

        },
        
        {
            path:'/rr',
            name:'rr',
            component: rr

        },
        



        //Tester
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
           path:'/Hm',
           name:'Hm',
           component: Hm
       },

       {
           path:'/ProSuperv',
           name:'ProSuper',
           component: ProSuper
       },
       {
        path:'/Propanel',
        name:'Propanel',
        component: Propanel
         },
       {
           path:'/ProSupDesigner',
           name:'ProSupDesigner',
           component: ProSupDesigner
       },
       {
        path:'/ProSup',
        name:'ProSup',
        component: ProSup
    },
       {
        path:'/TesterFeedback',
        name:'TesterFeedback',
        component: TesterFeedback
    },


       {
        path:'/',
        name:'Productiondata',
        component: Productiondata
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
        path:'/Incentivecriteria',
        name:'Incentivecriteria',
        component: Incentivecriteria

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

     },
     
     {
        path:'/edit/:id',
        name:'edit',
        component: edit

     }

     //Home

     


    
    ]
})