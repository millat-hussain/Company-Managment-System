<!-- 

This Website Design And Development By MD.Millat Hussin 

All Link Socail Media;
=============================================
https://www.youtube.com/c/MHJBrothers
https://web.facebook.com/Developermillat/
https://twitter.com/FMillathussain
https://www.instagram.com/millat_hussain_/
https://github.com/millat-hussain
https://www.millat-hussain.github.io/me
https://www.linkedin.com/in/millat-hussain/
==============================================
 -->
<?php include 'inc/header.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Phone Nubmer </th>
							<th>Emile Address  </th>
							<th>Address </th>
							<th>Country </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

							<?php 
							// Delete Option

				if (isset($_GET['delete'])) {

					$deid=$_GET['delete'];

					$query ="DELETE FROM customer_list WHERE id='$deid'";
					$delcat = $db->delete($query);
					if ($delcat==true) {
						
						echo ' <p style="color:red">User List Delete </p>';

						
					}
					
				}



					 ?>


						<?php 

					
			           $getdata ="SELECT * FROM customer_list";
			           $storData =$db->select($getdata);
			           if ($storData) {
			             while ($rasult= $storData->fetch_assoc()) {
       					  ?>
						<tr class="odd gradeX">
							<td><?php echo $rasult['id'];?></td>
							<td><?php echo $rasult['name'];?></td>
							<td><?php echo $rasult['mobile'];?></td>
							<td><?php echo $rasult['emile'];?></td>
							<td><?php echo $rasult['address'];?></td>
							<td><?php echo $rasult['country'];?></td>
						
							<td>
							<a title="Update" href="updateuser.php?editeid=<?php echo $rasult['id']; ?>">Update</a>
|| 
							<a title="Delete" href="?delete=<?php echo $rasult['id']; ?>">Delete</a></td>
						</tr>

					<?php }} ?>
					
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
