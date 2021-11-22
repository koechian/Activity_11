<?php

ob_start();
include('nav.php');

$buffer = ob_get_contents();
ob_end_clean();

$title = "Procucts " . "  " . "  " . " | " . " " . "  " . " GUSHI";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

echo $buffer;
?>

<div class="main-container">
    <div class="greeting">
        <h1>Product Details</h1>
        <p>
            <script>
                document.write(new Date().toDateString());
            </script>
        </p>
    </div>
    <div class="category-display">
        <div class="categories-table">
            <h2>Categories</h2>
            <table class="table" id="category_table">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="category_data">
                </tbody>
            </table>
        </div>
        <div class="new-category">
            <h2>Add New Category</h2>
            <label for="">Category Name</label>
            <input id="category_name" name="category_name" type="text">
            <span id="error_name" class="category_name_error"></span>
            <button class="add-green" id="new-category">Add Category</button>
        </div>
    </div>
    <div class="products-display">
        <h2>Products</h2>
        <table class="table" id="products_table">
            <thead>
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Stock</th>
                    <th>Unit Price</th>
                    <th>Sub-Category Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="products_data"></tbody>
        </table>
    </div>
    <div class="new-product">
        <h2>Add New Product</h2>
        <label for="">Product Name</label>
        <input id="product_name" name="product_name" type="text">
        <label for="">Category Name</label>
        <input id="category_name" name="category_name" type="text">
        <label for="">Image Path</label>
        <input id="image_path" name="image_path" type="text">
        <label for="">Quantity</label>
        <input id="quantity" name="quantity" type="text">
        <label for="">Unit Price</label>
        <input id="unit_price" name="unit_price" type="text">
        <label for="">Sub-Category Id</label>
        <input id="sub_category_id" name="sub_category_id" type="text">
        <label for="">Product Description</label>
        <input id="product_description" name="product_description" type="text">

        <button class="add-green" id="new-caproduct">Create Product</button>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="/Javascript/jquery.js"></script>
<script>
    $(document).ready(function() {
        loadCategories();

        $("#new-category").click(function() {
            var category_name = $("#category_name").val();
            if (category_name == "") {
                $("#error_name").html("Please enter a Category Name");
            } else {
                var data = {
                    'category_name': category_name
                }
                $.ajax({
                    url: "<?php echo base_url('Admin/addCategories') ?>",
                    method: "POST",
                    data: {
                        category_name: category_name
                    },
                    success: function(response) {
                        if (response == 1) {
                            $("#error_name").html("");
                            $("#category_name").val("");

                            $('.category_data').html("");
                            loadCategories();
                            swal(
                                'Category Added',
                                'Category has been added to the database successfully.',
                                'success'
                            )
                        } else {
                            $("#error_name").html("Category already exists");
                        }
                    }

                });
            }
        });

        function loadCategories() {
            $.ajax({
                url: "<?php echo base_url('Admin/getCategories') ?>",
                method: "GET",
                success: function(response) {
                    $.each(response.categories, function(key, value) {
                        $('#category_table').append(
                            "<tr>" +
                            "<td>" + value.category_id + "</td>" +
                            "<td>" + value.category_name + "</td>" +
                            "<td><button id='delete_btn' class='delete'" + value.category_id + "'>Delete</button> &nbsp &nbsp<button id='edit' class='edit'" + value.category_id + "'>Edit</button></td>" +
                            "</tr>"
                        );

                    });
                }

            });
        }
        $(document).on('click', '#delete_btn', function() {
            var category_id = $(this).data('id');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        method: "POST",
                        url: "<?php echo base_url('Admin/deleteCategory') ?>",
                        data: {
                            category_id: category_id
                        },
                        success: function(response) {
                            if (response == 1) {
                                swal(
                                    'Deleted!',
                                    'The entry has been deleted.',
                                    'success'
                                )
                                $('.category_data').html("");
                                loadCategories();
                            } else {
                                swal(
                                    'Error',
                                    'Deletion Failed',
                                    'error'
                                )
                                loadCategories();
                            }
                        }

                    })
                }
            })

        })
    })
</script>
</body>

</html>