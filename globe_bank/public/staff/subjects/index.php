<?php require_once('../../../private/initialize.php'); ?>

<?php
  $subjects = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
  ];
//$subjects array?>

<?php $page_title = 'Subjects';//page title ?>
<?php include(SHARED_PATH . '/staff_header.php');//staff header html path ?>

<div id="content">
  <div class="subjects listing">
    <h1>Subjects</h1>

    <div class="actions">
      <a class="action" href="">Create New Subject</a><!--button to create a new subject in table-->
    </div>

  	<table class="list"><!--start table-->
  	  <tr><!--table row-->
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr><!--end table row-->

      <?php foreach($subjects as $subject) { //for each loop takeing subjects array as $subject?>
        <tr>
          <td><?php echo $subject['id']; ?></td><!--table data-->
          <td><?php echo $subject['position']; ?></td><!--table data-->
          <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td><!--table data-->
    	  <td><?php echo $subject['menu_name']; ?></td><!--table data-->
          <td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id='.$subject['id']);?>">View</a></td><!--table data-->
          <td><a class="action" href="">Edit</a></td><!--table data-->
          <td><a class="action" href="">Delete</a></td><!--table data-->
    	  </tr>
      <?php } ?>
  	</table><!--end table-->

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php');//path to staff footer html ?>
