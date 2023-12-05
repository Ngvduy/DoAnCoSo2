<?php
function checkuser ($user, $pass){
$conn-connectdb();
$stmt = $conn->prepare("SELECT * FROM tbl_user WHERE _user='".$user."' AND $stmt->execute();
$result = $stmt->setFetchMode (PDO::FETCH_ASSOC);
$kq=$stmt->fetchAll();
return $kq[0]['role'];
}
?>