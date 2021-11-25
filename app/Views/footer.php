<button id="back-to-top" onclick="start('back-to-top')">Back</button>
</body>
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
<script src="/Javascript/jquery.js"></script>
<script src="/Javascript/pages.js"></script>

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