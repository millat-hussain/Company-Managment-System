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
                <h2>Update Customer</h2>
                <div class="block">               
               
                </div>
                <div class="useradd">
                    <form action="" method="POST">

               <?php 
                 if (isset($_GET['editeid'])) {
                  $editid=$_GET['editeid'];
             }
                   ?>
<?php 

  if ($_SERVER['REQUEST_METHOD']=='POST') {

           $name = $_POST['name'];
           $nubmer = $_POST['nubmer'];
           $emile = $_POST['emile'];
           $Address = $_POST['Address'];
           $Country = $_POST['Country'];
        

           if (empty($name)|| empty($nubmer) || empty($emile) || empty($Address) || empty($Country)) {
            echo "<p style='color:red'>Fild Must Not Be Empty !!!</p>";

           }
           else{

           $query ="UPDATE customer_list SET name='$name',mobile='$nubmer',emile='emile',address='',country='' WHERE id='$editid'";
            $rasult = $db->update($query);
            if ($rasult==true) {
                echo "<p style='color:green'>Data update  Successfully</p>";

                    }}
           }
  ?>

                  <?php 
           
                 $getdata ="SELECT * FROM customer_list where id='$editid'";
                 $storData =$db->select($getdata);
                 if ($storData) {
                   while ($rasult= $storData->fetch_assoc()) {

                  ?>

                	<div class="inputlevel">
                		<label>Name </label>
            
                		<input type="text" name="name" value="<?php echo $rasult['name'];?>" required="1">
                	</div>

                	<div class="inputlevel">
                		<label>Phone Nubmer </label>
                		<input type="nubmer" name="nubmer" value="<?php echo $rasult['mobile'];?>" required="1">
                	</div>
                	<div class="inputlevel">
                		<label>Emile Address </label>
                		<input type="emile" name="emile" value="<?php echo $rasult['emile'];?>" required="1">
                	</div>
                	  <div class="inputlevel">
                		<label>Address </label>
                		<input type="text" name="Address" value="<?php echo $rasult['address'];?>" required="1">
                	</div>

                	<div class="inputlevel">
                		<label>	Country </label>
                		<input type="text" name="Country" value="<?php echo $rasult['country'];?>" required="1">
                	</div>
                	<div class="inputlevel">
                		<input type="submit" name="submit" value="Update" >
                	</div>
                    <?php }} ?>
           
                    </form>
                	   
                	
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>