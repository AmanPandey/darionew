  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand color-e" href="<?php echo base_url(); ?>"><img src="assets/img/logo.png" width="50" style="margin-top: -20px; margin-right:-15PX;"/>ARIO<span class="color-b"> REALTORS</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="<?php echo base_url('About-Us'); ?>">About Us</a>
              <a class="dropdown-item " href="<?php echo base_url('Listed-Properties'); ?>">Listed Properties</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buy</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="<?php echo base_url('Buy-Residential'); ?>">Residential</a>
              <a class="dropdown-item " href="<?php echo base_url('Buy-Commercial'); ?>">Commercial</a>
              <a class="dropdown-item " href="<?php echo base_url('Buy-Land'); ?>">Land</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sell</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="<?php echo base_url('Sell-Residential'); ?>">Residential</a>
              <a class="dropdown-item " href="<?php echo base_url('Sell-Commercial'); ?>">Commercial</a>
              <a class="dropdown-item " href="<?php echo base_url('Sell-Land'); ?>">Land</a>
            </div>
          </li>

          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rent</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="<?php echo base_url('Rent-Wanted'); ?>">Wanted</a>
              <a class="dropdown-item " href="<?php echo base_url('Rent-Offered'); ?>">Offered</a>
            </div>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="<?php echo base_url('Project-Completed'); ?>">Completed</a>
              <a class="dropdown-item " href="<?php echo base_url('Project-Ongoing'); ?>">Ongoing</a>
              <a class="dropdown-item " href="<?php echo base_url('Project-Upcoming'); ?>">Upcoming</a>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url('Swachh-Bharat-Mission'); ?>">Blog</a>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url('Contact'); ?>">Contact</a>
          </li>
        </ul>
      </div>

      <a href="<?php echo base_url('Enquire-Now'); ?>">
      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" style="border-radius: 25px;;">
        <span class="enow">Enquire Now</span>
        
        <span class="enow1"><i class="bi bi-pencil"></i></span>
      </button>
      </a>

    </div>
  </nav><!-- End Header/Navbar -->