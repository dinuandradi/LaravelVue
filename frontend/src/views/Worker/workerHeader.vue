<template>
      <div>
    <b-navbar toggleable="lg" type="dark" variant="dark">
      <b-navbar-brand href="#">
          <img src="../../assets/ElastomericLogo1.png" width ="184" height="58" alt="Elastomeric">
      </b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav class="ml-auto">
          <b-nav-item href="#"><router-link to="/">Home</router-link></b-nav-item>
        
          <!--<b-nav-item-dropdown text="Projects" right>
            <b-dropdown-item href="#"><router-link to="/DesignCurPro"> current projects</router-link></b-dropdown-item>
            <b-dropdown-item href="#"><router-link to="/DesignCompletedProjects">completed projects</router-link></b-dropdown-item>
          </b-nav-item-dropdown>-->

          <b-nav-item-dropdown text="Reports" right>
            <b-dropdown-item href="#">Rececnt</b-dropdown-item>
            <b-dropdown-item href="#">All</b-dropdown-item>
          </b-nav-item-dropdown>  


        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          

          

          <b-nav-item-dropdown right>
            <!-- Using 'button-content' slot -->
            <template slot="button-content"><em>User</em></template>
            <b-dropdown-item href="#">Profile</b-dropdown-item>
            <b-dropdown-item href="#">Sign Out</b-dropdown-item>
          </b-nav-item-dropdown>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
    
  </div>
 
</template>

<script>


</script>

<style>

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 15px 10px;
}



</style>
