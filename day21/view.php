<?php
require_once "vendor/autoload.php";
use App\Classes\student;
    $msg = '';
if(isset($_POST['btn'])){
    $student = new Student();
    $msg = $student->saveStudentInfo($_POST);
}
?>

<table>
    <tr>
        <td><a href="view.php">Add student</a></td>
        <td><a href="viewStudent.php">View student</a></td>
    </tr>
</table>

<form action="" method="post">
    <h1><?php echo $msg; ?></h1>
    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name" value=""> </td>
        </tr>

        <tr>
            <td>email</td>
            <td><input type="text" name="email" value=""> </td>
        </tr>
        <tr>
            <td>phone</td>
            <td><input type="text" name="phone" value=""> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"> </td>
        </tr>
    </table>
</form>