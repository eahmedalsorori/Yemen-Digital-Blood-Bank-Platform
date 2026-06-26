<?php

//  echo 'enter ';exit();
if(isset($_SESSION['error']))
{
    // echo 'there is ';exit();
    ?>
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
  <strong>تحذير</strong> <?php echo $_SESSION['error']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
 unset($_SESSION['error']);
}

if(isset($_SESSION['success']))
{
  // echo 'there is ';exit();
    ?>
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  <strong>تنبية</strong> <?php echo $_SESSION['success']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
 unset($_SESSION['success']);
}


?>