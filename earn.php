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
        <h2>Add Earning Bill</h2>
        <div class="block"> 
         <?php
         if ($_SERVER['REQUEST_METHOD']=='POST') {

           $datetime  = $_POST['datetime'];

           $wde    = $_POST['wde'];
           $dme    = $_POST['dme'];
           $sde    = $_POST['sde'];
           $dandhos= $_POST['dandhos'];

         $totalbill = $_POST['wde'] + $_POST['dme'] + $_POST['sde'] + $_POST['dandhos'];

           $query ="INSERT INTO earn_report(nmd,webern,dme, sde,dominhosting,totlaeran)VALUES('$datetime','$wde','$dme','$sde','$dandhos','$totalbill')";
         $rasult = $db->insert($query);

          if ($rasult==true) {
           echo "Your Total Eran is = ".$totalbill;

         }

           }
   
  ?>           
  <!-- nmd,webern,dme, sde,dominhosting,totlaeran -->      
              
         <form action="" method="POST">
            <table class="form">					
                <tr>
                    <td>
                        <label>Name of Month and date </label>
                    </td>
                    <td>
                       <input type="datetime-local" placeholder="Enter Name of Month and date..."  name="datetime" class="medium" required="1" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>Web Development Earn </label>
                    </td>
                    <td>
                        <input type="number" placeholder="Web Development Earn" name="wde" class="medium" required="1" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Digital Marketing Earn</label>
                    </td>
                    <td>
                        <input type="number" placeholder="Digital Marketing Earn" name="dme" class="medium" required="" />
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Software Development Earn</label>
                    </td>
                    <td>
                        <input type="number" placeholder="Software Development Earn" name="sde" class="medium" required="" />
                    </td>
                </tr>
                     <tr>
                    <td>
                        <label>Domain & Hosting Earn</label>
                    </td>
                    <td>
                        <input type="number" placeholder="Domain & Hosting Earn" name="dandhos" class="medium" required="" />
                    </td>
                </tr>
				 
				 <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit" Value="Total Earn" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>