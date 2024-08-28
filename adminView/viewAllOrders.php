<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Brand</th>
        <th>Price</th>
        <th>Product storage</th>
        <th>Product Color</th>
        <th>Quanitity</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>City</th>
        <th>Order date</th>
        <th>Total Price</th>
        
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from orders";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["order_id"]?></td>
          <td><?=$row["product_name"]?></td>
          <td><?=$row["product_brand"]?></td>
          <td><?=$row["price"]?></td>
          <td><?=$row["product_storage"]?></td>
          <td><?=$row["product_color"]?></td>
          <td><?=$row["quantity"]?></td>
          <td><?=$row["name"]?></td>
          <td><?=$row["email"]?></td>
          <td><?=$row["address"]?></td>
          <td><?=$row["city"]?></td>
          <td><?=$row["order_date"]?></td>
          <td><?=$row["total_price"]?></td>


        
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>