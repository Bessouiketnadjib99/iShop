
function showProductItems(){  
    $.ajax({
        url:"./adminView/viewAllProducts.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showCategory(){  
    $.ajax({
        url:"./adminView/viewCategories.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}



function showMessages(){
    $.ajax({
        url:"./adminView/viewMessages.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showOrders(){
    $.ajax({
        url:"./adminView/viewAllOrders.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}




//add product data
function addItems(){
    var p_name=$('#p_name').val();
    var p_brand=$('#p_brand').val();
    var p_color=$('#p_color').val();
    var p_storage=$('#p_storage').val();
    var p_desc=$('#p_desc').val();
    var p_url=$('#p_url').val();
    var p_price=$('#p_price').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('p_name', p_name);
    fd.append('p_brand', p_brand);
    fd.append('p_color', p_color);
    fd.append('p_storage', p_storage);
    fd.append('p_desc', p_desc);
    fd.append('p_url', p_url);
    fd.append('p_price', p_price);
    fd.append('category', category);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showProductItems(); 
        }
    });
}

//edit product data
function itemEditForm(id){
    $.ajax({
        url:"./adminView/editItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
// Update product after submission
function updateItems() {
    var product_id = $('#product_id').val();
    var p_name = $('#p_name').val();
    var p_brand = $('#p_brand').val();
    var p_color = $('#p_color').val();
    var p_storage = $('#p_storage').val();
    var p_desc = $('#p_desc').val();
    var p_price = $('#p_price').val();
    var category = $('#category').val();

    var fd = new FormData();
    fd.append('product_id', product_id);
    fd.append('p_name', p_name);
    fd.append('p_brand', p_brand);
    fd.append('p_color', p_color);
    fd.append('p_storage', p_storage);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('category', category);

    $.ajax({
        url: './controller/updateItemController.php',
        method: 'post',
        data: fd,
        processData: false,
        contentType: false,
        success: function(data) {
            alert('Data Update Success.');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}

//delete product data
function itemDelete(id){
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}







//delete category data
function categoryDelete(id){
    $.ajax({
        url:"./controller/catDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Category Successfully deleted');
            $('form').trigger('reset');
            showCategory();
        }
    });
}







