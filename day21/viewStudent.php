<?php
require_once "vendor/autoload.php";
use App\Classes\Student;

$student = new Student();
$result = $student->viewStudentInfo();

?>
    <table border="1" width="500">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

            <?php /*if(mysqli_num_rows($result) > 0){*/
                while ($std = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $std['id']; ?></td>
                        <td><?php echo $std['name']; ?></td>
                        <td><?php echo $std['email']; ?></td>
                        <td><?php echo $std['phone']; ?></td>
                        <td>
                            <a href="editStudent.php?id=<?php echo $std['id']; ?>">Edit ||</a>
                            <a href="deleteStudent.php">Delete</a>
                        </td>
                    </tr>
            <?php
            }?>

    </table>
