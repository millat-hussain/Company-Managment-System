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
        <h2>Earning Report</h2>
        <div class="block"> 


        <table style="border:1px solid">
         		<tr>
         			<th>Name of Month and date</th>
         			<th>Web Development Earn</th>
         			<th>Digital Marketing Earn</th>
         			<th>Software Development Earn</th>
         			<th>Domain & Hosting Earn</th>
         			<th>Total Earning </th>
         		</tr>

                <?php 

                    







                       $getdata ="SELECT * FROM  earn_report";
                       $storData =$db->select($getdata);
                       if ($storData) {
                         while ($rasult= $storData->fetch_assoc()) {
                          ?>
         		<tr>
                    <td><?php  echo $help->formetDate($rasult['nmd']);?></td>
                    <td><?php  echo $rasult['webern']; ?></td>
                    <td><?php  echo $rasult['dme']; ?></td>
                    <td><?php  echo $rasult['sde']; ?></td>
         			<td><?php  echo $rasult['dominhosting']; ?></td>
         			<td><?php  echo $rasult['totlaeran']; ?></td>
         
         		</tr>

            <?php }} ?>
         	</table>              
         



        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>