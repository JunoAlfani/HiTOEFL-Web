 <!-- Navbar Start -->
 <div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
      <a href="<?php echo e(route('site.home.getIndex')); ?>" class="navbar-brand font-weight-bold text-secondary" alt="LogoHiTOEFL" style="font-size: 50px">
        <img src="<?php echo e(asset('global')); ?>/img/logohitoefl.svg" style="width: 240px; height: 65px" />
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold py-0">
          <a href="<?php echo e(route('site.home.getIndex')); ?>" class="nav-item nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?> ">Home</a>
          <a href="<?php echo e(route('site.about.getIndex')); ?>" class="nav-item nav-link <?php echo e(Request::is('about') ? 'active' : ''); ?> ">About</a>
          <a href="<?php echo e(route('site.course.getIndex')); ?>" class="nav-item nav-link <?php echo e(Request::is('course') ? 'active' : ''); ?> ">Course</a>
          <a href="<?php echo e(route('site.test.getIndex')); ?>" class="nav-item nav-link <?php echo e(Request::is('test') ? 'active' : ''); ?> ">Test</a>
        </div>
        <a href="<?php echo e(route('login')); ?>" class="btn btn-third px-4 mx-2">Login/Register</a>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->
<?php /**PATH C:\dev\laratod\hitoefl\resources\views/site/layouts/header.blade.php ENDPATH**/ ?>