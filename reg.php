<?php
$e_roll = $e_name = $e_age = $e_email = '';
$roll = $name = $age = $email = '';
$success=false;
if (isset($_POST['roll'])) {
    $roll = $_POST["roll"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    if ($roll === '') {
        $e_roll = 'Roll Number must not be blank!';
    } else {
        if (!preg_match("/^SG-\d{3}$/", $roll)) {
            $e_roll = 'Invalid roll number format!';
        }
    }
    if ($name === '') {
        $e_name = 'Name must not be blank!';
    } else {
        if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
            $e_name = 'Name must be only string!';
        }
    }
    if ($age === '') {
        $e_age = 'Age must not be blank!';
    } else {
        if (!preg_match("/^\d+$/", $age)) {
            $e_age = 'Age must be only number!';
        }
    }
    if ($email === '') {
        $e_email = 'Email must not be blank!';
    } else {
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
            $e_email = 'Invalid email format!';
        }
    }
    if($e_roll=='' && $e_name==='' && $e_age==='' && $e_email===''){
        $student=['roll'=>$roll,'name'=>$name,'age'=>$age,'email'=>$email];
        setcookie('student',json_encode($student),time()+3600*24*14,'/');
        $success=true;
    }
}
?>
<?php require_once ("./layout/header.php") ?>
<h1 class="text-center my-5">Registration!</h1>
      <div class="row">
        <div class="col-7">
          <div class="card" style="height: 400px">
            <img src="./img/uni.jpg" alt="university" style="width: 100%;height: 100%;" />
          </div>
        </div>
        <div class="col-5">
          <div class="card" style="height: 400px">
            <div class="m-2">
                <?php if ($success) { ?>
                    <div class='alert alert-success'>Student saved</div>
                <?php } ?>
                <form action="" method="post">
                    <div class="form-group my-1">
                        <label for="roll" class="form-label">Roll Number</label>
                        <input type="text" name="roll" id="roll" class="form-control form-control-sm" value="<?= $roll ?>">
                        <div class="text-danger"><?= $e_roll ?></div>
                    </div>
                    <div class="form-group my-1">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control form-control-sm" value="<?= $name ?>">
                        <div class="text-danger"><?= $e_name ?></div>
                    </div>
                    <div class="form-group my-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control form-control-sm" value="<?= $email ?>">
                        <div class="text-danger"><?= $e_email ?></div>
                    </div>
                    <div class="form-group my-1">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" name="age" id="age" class="form-control form-control-sm" value="<?= $age ?>">
                        <div class="text-danger"><?= $e_age ?></div>
                    </div>
                    <button type="submit" class="btn btn-primary my-1">Submit</button>   
                </form>
            </div>
          </div>
        </div>
      </div>
<?php include_once ("./layout/footer.php") ?>