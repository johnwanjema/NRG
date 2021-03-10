import home from '../components/home.vue'
import main from '../components/main.vue'
import apply from '../components/apply.vue'
import dashboard from '../components/dashboard.vue'

export default [
    {
        path: '/mvps',
        redirect: '/mvps/home'
    },
    {
        path: '/mvps',
        component: main,
        name: 'main',
        children: [
            {
                path: 'home',
                component: home,
                name: 'home',
            },
            {
                path: 'apply/:station/:position',
                component: apply,
                name: 'apply',
                props: true
            },
            {
                path: 'dashboard',
                component: dashboard,
                name: 'dashboard',
                props: true
            },
        ]
    },
]