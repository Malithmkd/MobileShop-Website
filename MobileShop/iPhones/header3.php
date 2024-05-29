<header class="header">

   <div class="flex">

      <a href="" class="logo">iPhones</a>

      <nav class="navbar">
         <!--<a href="#">add products</a>-->
        
         <a href="admin.php">Update</a>
         <a href="../admin.html">Admin Main</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      
      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>