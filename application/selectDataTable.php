<table border="1" width="900px" >
<tr>
<th>ID No.</th>
<th>Name</th>
<th>Telephone Number</th>
<th>Email Address</th>
<th>Mobile</th>
<th>Action</th>
</tr>
<?php 
$get_datas = $conn->prepare("SELECT * FROM crud");
$get_datas->execute();
if($get_datas->rowCount()>0){
$i=1;
while($res=$get_datas->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
<td align="center"><?php echo $i++; ?></td>
<td align="center"><?php echo $res['name']; ?></td>
<td align="center"><?php echo $res['telephone']; ?></td>
<td align="center"><?php echo $res['mobile']; ?></td>
<td align="center"><?php echo $res['email']; ?></td>
<td><a href="edit.php?id=<?php echo $res['id'];?>">Edit</a><br /><a href="delete.php?id=<?php echo $res['id'];?>">Delete</a></td>
</tr>
<?php } }else{
echo "<tr><td colspan='5'>Records not found</td></tr>";
} ?>
</table>