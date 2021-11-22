<?php
ob_start();
include('header.php');
$buffer = ob_get_contents();
ob_end_clean();

$title = "For the Men " . "  " . "  " . " | " . " " . "  " . " GUSHI";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

echo $buffer;
?>
<section class="main">
    <div class="heading">
        <h1>Men's Wear</h1>

        <hr>
        <div class="filters">
            <div class="list-group">
                <h5>Price: &nbsp</h5>
                <select name="" id="">
                    <option value="">All</option>
                    <option value="ascending">Lowest to Highest</option>
                    <option value="descending">Highest to Lowest</option>

                </select>
            </div>

            <div>
                <h5>Date Added:&nbsp</h6>
                    <select name="" id="">
                        <option value="">All</option>
                        <option value="1">Newest First</option>
                        <option value="10">Oldest First</option>
                    </select>
            </div>
            <div>
                <h5>Sub-Category:&nbsp</h6>
                    <select name="" id="">
                        <option value="">All</option>
                        <option value="1">Sports</option>
                        <option value="2">Casual Wear</option>
                        <option value="3">Official Wear</option>
                        <option value="4">Accessories</option>
                        <option value="5">Underwear</option>
                    </select>
            </div>

        </div>
        <hr class="filter-hr">
    </div>
    <div class="cards_wrapper">

    </div>
</section>
<button id="back-to-top" onclick="start('back-to-top')">Back</button>
</body>
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
<script src="/Javascript/pages.js"></script>
<script src="/Javascript/jquery.js"></script>
<script>
    $(document).ready(function() {
        loadProducts()

        function loadProducts() {
            $.ajax({
                url: "<?php echo base_url('Admin/getProducts') ?>",
                method: "GET",
                success: function(response) {
                    $.each(response.products, function(key, value) {
                        $('.cards_wrapper').append(
                            "<div class='cards'><img src='" + value.product_image + "'>" +
                            "<h4>" + value.product_name + "</h4>" +
                            "<p>" + value.product_description + "</p>" +
                            "<span class='price_tag'>Ksh." + value.unit_price + " &nbsp</span>" +
                            "<button id='buy' class='buy' data-id='" + value.product_id + "'>Add to Cart</button>" +
                            "</div>"
                        );

                    });
                }

            });
        }
    })
</script>


</html>