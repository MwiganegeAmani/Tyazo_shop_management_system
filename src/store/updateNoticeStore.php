<?php

session_start();
$id = $_POST['id'];
$updatedby = $_SESSION['admin_name'];

include '../../src/common/DBConnection.php';
include '../../src/common/conn.php';
$conn=new DBConnection();

    $noticeSubject=$_POST['noticeSubject'];
    $noticeDate=$_POST['noticeDate'];
    $noticeTime=$_POST['noticeTime'];
    $noticeDesc=$_POST['noticeDesc'];

    $result=$conn->execute("update notices set subject = '$noticeSubject',notice_date = '$noticeDate', notice_time = '$noticeTime',description = '$noticeDesc',update_by = '$updatedby',update_date = CURRENT_TIMESTAMP WHERE id = $id");

    if($result) {
        header("Location: " ."../../views/admin/updatenotice.php?message=success");
        die();
    } else {
        header("Location: " ."../../views/admin/updatenotice.php?message=failed");
        die();
    }

class NoticeStore
{

}