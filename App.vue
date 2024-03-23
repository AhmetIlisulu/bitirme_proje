<template>
  <div class="container" >
    <div class="row">
      <div class="col-md-12">
        <Sidebar />
        <div :style="{'margin-left': sidebarWidth}">
              <router-view></router-view>
        </div>
      </div>
    </div>
  </div>
  
</template>

<script>

import Sidebar from '@/components/sidebar/Sidebar'
import {sidebarWidth} from '@/components/sidebar/state'
export default {
  name: 'App',
  components: { Sidebar},
  setup() {
    return{sidebarWidth}
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}


</style>
