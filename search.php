<?php
include('header.php');
?>
<div class='text-center mx-5'>
  <h3> STUDENT INFORMATIONS AND RESULT<h3>
  </div>
<div class='row' id="print-btn" >
<form  action="search.php" method='GET'class="col-sm-3  mt-3" >
    <input class="form-control mr-auto" type="search" name="std_name" placeholder="Search By STUDENT NAME" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="srch">Search</button>
  </form>
  <form  action="search.php" method='GET'class="col-sm-3  mt-3">
    <input class="form-control mr-sm-2" type="search" name="phoneno" placeholder="Search By PHONE NUMBER" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="srch">Search</button>
  </form>
  <form  action="search.php" method='GET'class="col-sm-3  mt-3">
    <input class="form-control mr-sm-2" type="search" name="totalmark" placeholder="Having more Total Marks" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="srch">Search</button>
  </form>
  </div>
  <div class="table-responsive-sm">
           <table class='table table-bordered  mt-4 ' style='border-color: #131314;'>
                <thead class='table-warning'style='border-color: #131314;' >
                  <tr>
                    <th scope="col">Student Nmae</th>
                    <th scope="col">Student PhoneNumber</th>
                    <th scope="col">Student EmailId</th>
                    <th scope="col">Math</th>
                    <th scope="col">Chemisty</th>
                    <th scope="col">Physic</th>
                    <th scope="col">Computer</th>
                    <th scope="col">Language</th>
                    <th scope="col">Total Marks</th>
                  </tr>
                </thead>  
                <?php 
                $conn= mysqli_connect("localhost","root","","student") ;
                if(isset($_GET['std_name'])){
                    $srch=$_GET['std_name'];
                    $sql="SELECT * FROM student_info WHERE name LIKE '%$srch%' ";
                }
                elseif(isset($_GET['phoneno'])){
                    $srch=$_GET['phoneno'];
                    $sql="SELECT * FROM student_info WHERE phone_number = '$srch' ";
                }
                elseif(isset($_GET['totalmark'])){
                    $srch=$_GET['totalmark'];
                    $sql="SELECT * FROM student_info WHERE total_marks	 > '$srch' ";
                }
                $result = mysqli_query($conn,$sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tbody style="font-weight: 700;font-size: large;">
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["phone_number"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["Math"]; ?></td>
                        <td><?php echo  $row["chemisty"]; ?></td>
                        <td><?php echo  $row["physic"]; ?></td>
                        <td><?php echo  $row["computer"]; ?></td>
                        <td><?php echo  $row["language"]; ?></td>
                        <td><?php echo  $row["total_marks"]; ?></td>
                   <tbody> 
                    </tr>
                    <?php
                    }
                } else {
                    echo " <tr>
                    <td colspan='4'>No result fonud Visit .</td>
                </tr>";
                }
                ?>
            </table>
            </div>
        </div>
        <div class="text-center">
             <button onclick='window.print();' class="btn btn-primary" id="print-btn">Print</button>
         </div>   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

