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
        <h2>Expense Report</h2>
        <div class="block">               
         <form>

         	<table style="border:1px solid">
         		<tr>
         			<th>Name of Month and date</th>
         			<th>Employee Bill	</th>
         			<th>Server Bill</th>
         			<th>Office Bill	</th>
         			<th>Total Bill</th>
         		</tr>

                <?php 

                    
                       $getdata ="SELECT * FROM customer_bill";
                       $storData =$db->select($getdata);
                       if ($storData) {
                         while ($rasult= $storData->fetch_assoc()) {
                          ?>
         		<tr>
                    <td><?php  echo $rasult['date_time']; ?></td>
                    <td><?php  echo $rasult['employeebill']; ?></td>
                    <td><?php  echo $rasult['serverbill']; ?></td>
                    <td><?php  echo $rasult['officebill']; ?></td>
         			<td><?php  echo $rasult['totalbill']; ?></td>
         
         		</tr>

            <?php }} ?>
         	</table>
           
         </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>