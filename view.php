<?php require_once("./layout/header.php")?>

<h1 class="text-center my-5" >Welcome!</h1>
        <div class="row">
            <div class="col-6" >
                <div class="card" style="height: 390px;" >
                    <img src="./img/uni.jpg" alt="university" style="width: 100%; height: 100%;">
                </div>
            </div>
            <div class="col-6">
                <div class="card p-3" style="height: 390px;">
                <table >
                    <thead>
                        <tr>
                            <th>Roll Number</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $student=json_decode($_COOKIE['student'],true);
                        ?>
                        <tr>
                            <td><?=$student['roll']?></td>
                            <td><?=$student['name']?></td>
                            <td><?=$student['email']?></td>
                            <td><?=$student['age']?></td>

                        </tr>
                    </tbody>
                </table>        
                </div>
            </div>
        </div>
 <?php require_once("./layout/footer.php")?>   