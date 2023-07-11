  <div class="top-bar"></div>
  <header class="sticky">
    <div class="container">
      <nav class="animenu">
      <ul class="animenu_nav">
            <li> <a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
            <li><a href="<?php echo e(URL::to('restaurants')); ?>">HomeCooks</a></li>

            <?php if(Auth::check() and Auth::user()->usertype=='User'): ?>

             <li> <a href="javascript:void(0);">My Account<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="<?php echo e(URL::to('profile')); ?>">Edit Profile</a></li>
                <li><a href="<?php echo e(URL::to('change_pass')); ?>">Change Password</a></li>
                <li><a href="<?php echo e(URL::to('myorder')); ?>">My Order</a></li>
                <li><a href="<?php echo e(URL::to('logout')); ?>">Logout</a></li>                
              </ul>
            </li>
            <?php elseif(Auth::check() and Auth::user()->usertype=='Owner'): ?>
              <li> <a href="javascript:void(0);">My Account<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="<?php echo e(URL::to('admin/dashboard')); ?>">Dashboard</a></li>
                <li><a href="<?php echo e(URL::to('logout')); ?>">Logout</a></li>                
              </ul>
            </li>
            <?php elseif(Auth::check() and Auth::user()->usertype=='Admin'): ?>
              <li> <a href="javascript:void(0);">My Account<i class="icon-down-open-mini"></i></a>
              <ul class="animenu_nav_child">
                <li><a href="<?php echo e(URL::to('admin/dashboard')); ?>">Dashboard</a></li>
                <li><a href="<?php echo e(URL::to('logout')); ?>">Logout</a></li>                
              </ul>
            </li>

              
            <?php else: ?>
 
            <li><a href="<?php echo e(URL::to('login')); ?>">Login</a></li>
            <li><a href="<?php echo e(URL::to('register')); ?>">Register</a></li>

            <?php endif; ?>

            <li><a href="<?php echo e(URL::to('about')); ?>">About us</a></li>
            <li><a href="<?php echo e(URL::to('contact')); ?>">Contact</a></li>              
          </ul>
    </nav>
    </div>
  </header>
   <?php /**PATH C:\laragon\www\Ghoroa_baburchi\resources\views/_particles/header.blade.php ENDPATH**/ ?>