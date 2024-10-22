<?php require_once("./layout/header.php")?>

<h1 class="text-center my-5" >Regrister!</h1>
        <div class="row" >
            <div class="col-6" >
                <div class="card" style="height: 400px;">
                    <img src="./img/uni.jpg" alt="university" style="width: 100%; height: 100%;">
                </div>
            </div>
            <div class="col-6" >
                <div class="card p-3" style="height:400px">
                    <?php if (isset($_REQUEST['success'])) {
                        echo "<div class='alert alert-success'>$_REQUEST[success]</div>";
                    }?>
                    <form action="./server.php" method="post">
                        <div class="form-group my-2">
                            <label for="roll" class="form-label">Roll Number</label>
                            <input type="text" name="roll" id="roll" class="form-control">
                        </div>
                        <div class="form-group my-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group my-2">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" name="age" id="age" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    
 <?php require_once("./layout/footer.php")?>   