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
        <h2>Monthly wise Profit </h2>
        <div class="block">               
        


<table>
  <tr>
    <th>Month Date  </th>
    <th>Month Bill </th>
    <th>Month Earn </th>
    <th>Profite</th>
  </tr>
  <tr>
  	 <?php 
           
   $getdata ="SELECT * FROM customer_bill";
   $storData =$db->select($getdata);
   if ($storData) {
     while ($rasult= $storData->fetch_assoc()) {
      ?>
      <td><?php echo  $help->formetDate($rasult['date_time']);?></td>

    <td><?php $bill = $rasult['totalbill'];  echo $bill ?></td>
<?php }} ?>

<?php 
 $getdata ="SELECT * FROM  earn_report";
   $storData =$db->select($getdata);
   if ($storData) {
     while ($rasult= $storData->fetch_assoc()) {
   
 ?>
    <td><?php  $earn = $rasult['totlaeran'];  echo $earn?></td>
<?php }} ?>
    <td>
    	<?php 

    	echo  $earn-$bill;

    	 ?>
    </td>
  </tr>
</table>

        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>