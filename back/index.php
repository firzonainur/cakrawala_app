<!doctype html>
<html lang="en">

<?php require 'layout/header.php'; ?>

<body>
  <div class="wrapper ">
    <?php require 'layout/sidebar.php'; ?>
    <div class="main-panel">

      <!-- navbar -->
      <?php require 'layout/navbar.php'; ?>
      <!-- end navbar -->

      <!-- Content Here -->
      <?php 
      if (isset($_GET['url'])){
      $url = $_GET['url'];

  switch ($url) {
    case 'dashboard':
      include 'layout/content_dashboard.php';
      break;

    case 'person':
      include 'layout/content_person.php';
      break;

    case 'tabel':
      include 'layout/content_tabel.php';
      break;

     case 'font':
      include 'layout/content_font.php';
      break;

     case 'icon':
      include 'layout/content_icon.php';
      break;

     case 'map':
      include 'layout/content_map.php';
      break;

     case 'notifikasi':
      include 'layout/content_notifikasi.php';
      break;

     case 'rtl':
      include 'layout/content_rtl.php';
      break;

     case 'upgrade':
      include 'layout/content_upgrade.php';
      break;

    case 'error':
      include 'layout/error.php';
      break;
    
    default:
      include 'layout/content_dashboard.php';
      break;
  }
} else{
  include 'layout/content_dashboard.php';
}



       ?>
      <!-- End Content Here -->

      <!-- footer here -->
      <?php require 'layout/footer.php'; ?>
      <!-- end footer here -->

       <!-- plugin here -->
      <?php require 'layout/plugin.php'; ?>
      <!-- end plugin here -->

    </div>
  </div>

  <!-- javascript -->
  <?php include 'layout/js.php'; ?>
</body>

</html>