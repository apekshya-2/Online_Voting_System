<?php
session_start();
if(!isset($_SESSION['login'])&& $_SESSION['login']==false){
    header("location:./index.php");//redirect to login page
}
include"./connection.php";
$sql="SELECT id,fname,lname,email,age,uname,state,district,city,gender,mstatus,photo  FROM voter";
$res=mysqli_query($conn,$sql);

include "./header-admin.php";?>
<span class="err">
    <?php echo isset($_SESSION['msg'])? $_SESSION['msg']:'';?>
</span>
   <div classs="data-box">
    <h1>All user </h1>
    <table border="1" cellspacing="0" cellpadding="6">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>age</th>
                <th>Username</th>
                <th>state</th>
                <th>district</th>
                <th>city</th>
                <th>gender</th>
                <th>maritalstatus</th>
                <th>Photo</th>
                <th>Action</th>
</tr>

</thead>
<tbody>
    <?php
    $i=0;
    while($row=mysqli_fetch_assoc($res)):
        $i++;?>
    <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['state'];?></td>
            <td><?php echo $row['district'];?></td>
            <td><?php echo $row['city'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['maritalstatus'];?></td>
            
            <td>
                <img src="./public/<?php echo $row['photo'];?>"  alt="" width="90" height="90">
        </td>
        <td><?php echo $row['photo'];?></td>
        
        <td>
            <a href="../edit.php ? id=<?php echo $row['id'];?>" class="btn btn--small">Edit</a>
            <a href="../delete.php ? id=<?php echo $row['id'];?>" class="btn btn--small btn--danger">Delete</a>

        </td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>
<?php include "./footer.php";
$_SESSION['msg']='';?>