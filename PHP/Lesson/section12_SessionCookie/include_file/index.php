<?php
/*
  // Header website
  require 'inc/header.php'; ( Gọi phần giao diện dùng chung cho các webpage)
  //==================
  // THÂN WEBSITE
  //==================
  // Footer website
  require 'inc/footer.php'; ( Gọi phần giao diện dùng chung cho các webpage)
 */
?>
<?php
require 'lib/data.php';
require 'lib/template.php';
get_header();
?>
<div id="content">
    HOME
    <?php
    $data = array(1, 2, 3);
    show_array($data);
    ?>
</div>
<?php
get_footer();
?>

