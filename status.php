<?
include('config.php');
    $id = $_SESSION['nrp'];
    $query = mysql_query("select * from pengguna where nrp='$id'") or die(mysql_error());
    $data = mysql_fetch_array($query);
    if($data['status'] == 0)
        header('location:vote.php');
?>