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
        <h2>Billing Option</h2>
        <div class="block">


            <?php
         if ($_SERVER['REQUEST_METHOD']=='POST') {

           $millat  = $_POST['millat'];
           $Employee  = $_POST['Employee'];
           $Server    = $_POST['Server'];
           $Office    = $_POST['Office'];
           $totalbill = $_POST['Employee'] + $_POST['Server'] + $_POST['Office'];

           $query ="INSERT INTO   customer_bill(date_time,employeebill,serverbill,officebill,totalbill)VALUES('$millat','$Employee','$Server','$Office','$totalbill')";
         $rasult = $db->insert($query);

          if ($rasult==true) {
           echo "Your Total Bill is = ".$totalbill;

         }

           }
   
  ?>              


         <form action="" method="POST">
            <table class="form">					
                <tr>
                    <td>
                        <label>Name of Month and date </label>
                    </td>
                    <td>
                  <input type="datetime-local" placeholder="Enter Name of Month and date..."  name="millat" class="medium" required="1" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>Employee Bill</label>
                    </td>
                    <td>
                        <input type="number" placeholder="Enter Employee Bill..." name="Employee" class="medium" required="1" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Server Bill</label>
                    </td>
                    <td>
                        <input type="number" placeholder="Enter Server Bill..." name="Server" class="medium" required="1" />
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Office Bill</label>
                    </td>
                    <td>
                        <input type="number" placeholder="Enter Office Bill..." name="Office" class="medium" required="1" />
                    </td>
                </tr>
				 
				
				 <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit" Value="Count" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>