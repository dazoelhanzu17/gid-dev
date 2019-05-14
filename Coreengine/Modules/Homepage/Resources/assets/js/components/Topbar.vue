<template>
   <div id="topbar" class="d-none d-xl-block d-lg-block">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="topbar-dropdown">                  
                      <a class="title">English <i class="fa fa-caret-down"></i></a>
                      <div class="dropdown-list">
                          <a class="list-entry" href="#">French</a>
                          <a class="list-entry" href="#">Spanish</a>
                      </div>
                  </div>
                  <div class="topbar-dropdown">
                      <div class="title"><i class="fa fa-user"></i><a href="#">Login</a></div>
                      <div class="topbar-form">
                          <form>
                              <div class="form-group">
                                  <label class="sr-only">Username or Email</label>
                                  <input type="text" placeholder="Username or Email" class="form-control">

                              </div>
                              <div class="form-group">
                                  <label class="sr-only">Password</label>
                                  <input type="password" placeholder="Password" class="form-control">
                              </div>
                              <div class="form-inline form-group">
                                  <div class="form-check">
                                      <label>
                                          <input type="checkbox">
                                          <small class="m-l-10"> Remember me</small> </label>
                                  </div>
                                  <button type="button" class="btn btn-primary btn-block">Login</button>
                              </div>
                          </form>
                      </div>
                  </div>
                  <div class="topbar-dropdown">
                      <div class="title"><i class="fa fa-sun-o"></i>Melburne 15°</div>
                  </div>
              </div>
              <div class="col-md-6 d-none d-sm-block">
                  <div class="social-icons social-icons-colored-hover">
                      <ul>
                          <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                         
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('top mounted.')
        }
    }
</script>
