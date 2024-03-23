import { createRouter } from "vue-router";
import { createWebHistory } from "vue-router";
import LoginScreen from './Pages/LoginScreen.vue';
import SignupPages from './Pages/SignupPages.vue';
import mainPage from './Pages/mainPage.vue';
const routes = [
  {path:'/LoginScreen', component: LoginScreen},
  {path:'/SignupPages', component: SignupPages},
  {path:'/mainPage', component: mainPage}
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;