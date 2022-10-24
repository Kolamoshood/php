<?php
include('config.php');

if(isset($_POST['faculty'])){
    $faculty = $_POST['faculty'];
    $sql1 = "SELECT * FROM faculty WHERE faculty = '$faculty'";
    $res1 = mysqli_query($connection, $sql1);
    while ($row1 = mysqli_fetch_assoc($res1)){
        $faculty_id = $row1['id'];
    }

    $sql = "SELECT * FROM department WHERE faculty_id = '$faculty_id' ORDER BY department ASC ";
    $res = mysqli_query($connection, $sql);
    ?>

                            <div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Department</label>
									<select class="form-control" id="department" name="department" required >
                                    <option selected="selected">Select Department</option>
                                    <?php
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                        $id = $row['id'];
                                        $department = $row['department'];
                                        ?>
                                        <option value="<?php echo $department; ?>"> <?php echo $department ; ?> </option>
                                        <?php
                                    }
                                    ?>

                                    </select>
                        
    <?php
}

?>