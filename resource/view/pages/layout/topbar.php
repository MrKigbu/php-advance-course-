<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Example</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* Hover effects */
    .profile-icon:hover i {
      color: #0d6efd; /* Bootstrap blue */
      transform: scale(1.1);
      transition: all 0.3s ease;
    }

    .logout-icon:hover i {
      color: #dc3545; /* Bootstrap red */
      transform: scale(1.1);
      transition: all 0.3s ease;
    }
  </style>
</head>
<body>
  <ul class="navbar-nav justify-content-end">

    <!-- 🔹 Profile -->
    <li class="nav-item px-3 d-flex align-items-center">
      <a href="<?php echo url('user/profile')?>" 
         class="nav-link text-body p-0 profile-icon" 
         data-bs-toggle="tooltip" 
         data-bs-placement="bottom" 
         title="Profile">
          <i class="fa fa-user fixed-plugin-button-nav cursor-pointer"></i>
      </a>
    </li>

    <!-- 🔹 Logout -->
    <li class="nav-item d-flex align-items-center">
      <a href="<?php echo url('logout'); ?>" 
         class="nav-link text-body font-weight-bold px-0 logout-icon" 
         data-bs-toggle="tooltip" 
         data-bs-placement="bottom" 
         title="Sign out">
          <i class="fa fa-sign-out-alt me-sm-1"></i>
          <span class="d-sm-inline d-none">Sign out</span>
      </a>
    </li>
  </ul>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Enable Bootstrap tooltips globally
    document.addEventListener("DOMContentLoaded", function () {
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl)
      })
    });
  </script>
</body>
</html>
