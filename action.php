<?php
$conn = mysqli_connect("localhost","root","","php-api");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
$Id = $_POST['Id'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Level = $_POST['Level'];
$Fullname = $_POST['Fullname'];
$sql_insert= "INSERT INTO okta VALUES ('$Id','$Username','$Password','$Level','$Fullname')";
mysqli_query($conn, $sql_insert)or die(mysqli_error($conn));
echo '<script>
alert("Data Berhasil Disimpan");
location="index.php?"
</script>';
?>