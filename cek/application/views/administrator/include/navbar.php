<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" target='_BLANK' href="<?php echo base_url(); ?>"> View Website</a>
    </li>
</ul>


<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
     
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url().$this->uri->segment(1); ?>/edit_manajemenuser/<?php echo $this->session->username; ?>"><i class="nav-icon fas fa-user-edit"></i></a></li>
    <li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-slide="true" target='_BLANK' href="<?php echo base_url(); ?>"><i
        class="fas fa-cog"></i></a>
    </li>
</ul>
