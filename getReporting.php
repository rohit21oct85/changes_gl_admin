<?php 
require_once('includes/DBInterface.php');
$db = new Database();
$db->connect();
date_default_timezone_set('Asia/Kolkata');
if(!empty($_REQUEST['role_id'])){
	$role_id = $_REQUEST['role_id'];
	$results_fun = $db->selectReporting($role_id);
	$results = json_decode($results_fun, true);
	?>
	<div class="col-md-9">
	<select class="form-control select2me" data-placeholder="Select State" name="report_to" id="report_to" required>
		<option value="">--Select Reporting--</option>
		<?php 
		foreach($results['ReportingList'] as $values){ ?>
		<option value="<?php echo $values['userId']; ?>"><?php echo strtoupper($values['userName']). " - ". $values['emp_code'] . "  [".strtoupper($values['roleName'])."]"; ?></option>
        <?php 
		
		} ?>
	</select>

	
	</div>
	<?php
}

?>