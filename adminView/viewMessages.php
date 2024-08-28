<div >
  <h2>Contact</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Subject</th>
        <th class="text-center">Message</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from contact";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["co_name"]?></td>
      <td><?=$row["co_email"]?></td>
      <td><?=$row["co_subject"]?></td>
      <td><?=$row["co_message"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>