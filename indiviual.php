<?php
include('header.php');
?>
<?php 
                $conn= mysqli_connect("localhost","root","","student") ;
                $srch=$_GET['stdname'];
                $sql="SELECT * FROM student_info WHERE name = '$srch' ";
                $result = mysqli_query($conn,$sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class='row mt-3'>
                           <div class='col-4 mx-4'>
                              <h4>Student Name: <?php echo  $row["name"]; ?></h4>
                            </div>
                            <div class='col-4 mx-4'>
                              <h4>EmailId: <?php echo  $row["email"]; ?></h4>
                            </div>
                            <div class='col-4 mx-4'>
                               <h4>PhoneNumber: <?php echo  $row["phone_number"]; ?></h4>
                               </div>
                        </div>
                        <table class='table table-bordered  mt-4  mx-3' style='border-color: #131314;'> 
                                <tbody> 
                                    <tr>
                                    <th scope="row">Math</th>
                                    <td scope="col"style="font-weight: 700;font-size: large;"><?php echo $s1= $row["Math"]; ?></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Chemisty</th>
                                    <td scope="col" class='mark'><?php echo $s2= $row["chemisty"]; ?></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Physic</th>
                                    <td scope="col" class='mark'><?php echo  $s3=$row["physic"]; ?></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Computer</th>
                                    <td scope="col" class='mark'><?php echo $s4= $row["computer"]; ?></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Language</th>
                                    <td scope="col" class='mark'><?php echo $s5= $row["language"]; ?></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Total Marks</th>
                                    <td scope="col" class='mark' style='font-size: x-large;'><?php echo $s1+$s2+$s3+$s4+$s5 ; ?></td>
                                    </tr>
                            <tbody> 
                        </table>
                    <?php 
                    }
                }
                    ?>
            <div class="text-center">
             <button onclick='window.print();' class="btn btn-primary" id="print-btn">Print</button>
             </div>    

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
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

