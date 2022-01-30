<button id="back-to-top" onclick="start('back-to-top')">Back</button>
<input id="userid" value="<?php $session = session();
                            echo ($session->get('userid')); ?>" type="hidden"></body>
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
<script src="/Javascript/jquery.js"></script>
<script src="/Javascript/pages.js"></script>
<script>
    $(document).ready(function() {
        loadProducts()

        function loadProducts() {
            var data = {
                identifier: $("#gender").val()
            }
            $.ajax({
                url: "<?php echo base_url('Admin/getProducts') ?>",
                method: "GET",
                data: data,
                success: function(response) {
                    if (response.products == "") {
                        $('.cards_wrapper').append(
                            "<div class='error_message'><h1>Sorry, It may seem our very incompetent Web Developer Ian has messed up somewhere again😒</div>");

                    } else {
                        $.each(response.products, function(key, value) {
                            $('.cards_wrapper').append(
                                "<div class='cards'><img loading='lazy' src='" + value.product_image + "'>" +
                                "<h4 id='product-name'>" + value.product_name + "</h4>" +
                                "<p>" + value.product_description + "</p>" +
                                "<span class='price_tag'>Ksh." + value.unit_price + " &nbsp</span>" +
                                "<button id='buy' class='buy' data-id='" + value.product_id + "'>Add to Cart</button>" +
                                "</div>"
                            );
                        });
                    }
                }
            });
        }
        $('#search').keyup(function() {
            $('#search_results').css('display', 'flex');
            var data = {
                data: $("#search").val(),
                identifier: $("#gender").val()
            }
            $.ajax({
                url: "<?php echo base_url('Pages/search') ?>",
                method: 'GET',
                data: data,
                success: function(response) {
                    $('#search_results').html('');
                    $('#search_results').css('display', 'flex');
                    if (response.res == "") {
                        $('#search_results').append(
                            "<div class='results'> <a>" +
                            "<h4>Sorry, We seem to not have that product in stock.  😢</h4>"
                        );

                    } else {
                        $.each(response.res, function(key, value) {

                            $('#search_results').append(
                                "<div class='results'> <a>" +
                                "<h4>" + value.product_name + "</h4>" +
                                "<p>" + value.product_description + "</p>" +
                                "</a></div>"
                            );

                        });

                    }

                }
            })
        });
        $('#search').focusout(function() {
            $('#search_results').css('display', 'none');
        })

        $('#logout').click(function() {
            console.log('hey');
            $.ajax({
                url: "<?php echo base_url('Login/logout') ?>",
                method: 'POST',
                data: null,
                success: function(result) {
                    if (result == 1) {
                        window.location.replace('Login.php');
                    }
                }
            })
        })
    })
    $(document).on('click', '#buy', function() {
        var details = {
            'productid': $(this).data('id'),
            'customer': $('#userid').val(),
            'product_name': $(this).parent().parent().find('#product-name').html()
        };
        console.log(details);
        $.ajax({
            url: "<?php echo base_url('Pages/addtoCart') ?>",
            method: 'post',
            data: details,
            success: function(result) {
                if (result == 1) {
                    alert('Product Added to Cart');
                } else if (result == 'duplicate') {
                    alert('This item has already been added to the cart');
                } else {
                    console.log(result)
                    alert('an unexpected error has been encountered');
                }

            }
        })
    })
</script>

</html>