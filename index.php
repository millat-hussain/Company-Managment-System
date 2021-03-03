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
                <h2>Add Customer </h2>
                <div class="block">               
               
                </div>
                <div class="useradd">
                    <form action="" method="POST">
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

            $query ="INSERT INTO  customer_list(name,mobile,emile,address,country)VALUES('$name','$nubmer','$emile','$Address','$Country')";
            $rasult = $db->insert($query);
            if ($rasult==true) {
                echo "<p style='color:green'>Data inserteat Successfully</p>";

                    }}

           }
   

         

  ?>
       

                	<div class="inputlevel">
                		<label>Name </label>
                		<input type="text" name="name" placeholder="Enter Your Name" required="1">
                	</div>

                	<div class="inputlevel">
                		<label>Phone Nubmer </label>
                		<input type="number" name="nubmer" placeholder="Enter Your Nubmer" required="1">
                	</div>
                	<div class="inputlevel">
                		<label>Emile Address </label>
                		<input type="emile" name="emile" placeholder="Enter Your Emile" required="1">
                	</div>
                	  <div class="inputlevel">
                		<label>Address </label>
                		<input type="text" name="Address" placeholder="Enter Your Address" required="1">
                	</div>

                	<div class="inputlevel">
                		<label>	Country </label>
                		<input type="text" name="Country" placeholder="Enter Your Country" required="1">
                	</div>
                	<div class="inputlevel">
                		<input type="submit" name="submit" value="Submit" id="btn-submit" >
                	</div>
                    </form>
                	
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>