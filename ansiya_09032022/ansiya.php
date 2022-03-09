<html>
    <head>
        <title>EXAM</title>
        <body bgcolor="yellow">
            <form>
                <center>
                    <table cellpadding="20%">
                        <tr>
                            <td>Enter your Name</td>
                            <td>:</td>
                            <td><input type="text" name="name" placeholder="Enter your name"></td>
</tr>
<tr>
    <td>Enter your Age</td>
    <td>:</td>
    <td><input type="number" name="age"></td>
</tr>
<tr>
    <td>Salary</td>
    <td>:</td>
    <td><input type="number" name="salary"></td>
</tr>
<tr>
    <td>job</td>
    <td>:</td>
    <td><input type="text" name="job"></td>   
    <tr><td><input type="submit" name="submit" value="reset">

<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $salary=$_POST['salary'];
    $job=$_POST['job'];
}
$conn=mysqli_connect("localhost","root","","data1");
if($conn)
{
    echo"connected successfully";
}
else
{
echo"error";
}
$query= "INSERT INTO tablea(name,age,salary,job) VALUES['{$name}','{$age}','{$salary}','{$job}']";
$db=mysqli_connect($conn,$query);
{
    echo" successfully inserted";
}
else
 {
    echo"error";
}
{
$search=SELECT* FROM tablea();
$result=mysqli_query($conn,$search);
while< $res=mysqli_fetch_assoc($result)
{
    echo ."<table>";
    echo."<tr>";
    echo."<td>" $res=$name."</td>";
    echo."<td>" $res=$age ."</td>";
    echo."<td>" $res=$salary ."</td>";
    echo."<td>" $res=$job ."</td>";
    echo."</tr>;
    echo."</table>";
}
?>
</body>
</html>



