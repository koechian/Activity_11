<script>
    var wallet_balance = 0
    fetchCart()
    getWalletbalance()


    function revealWallet() {
        $('.wallet-box').removeClass('hide').addClass('flex');

    }

    function hideWallet() {
        $('.wallet-box').removeClass('flex').addClass('hide');

    }

    function fetchCart() {
        var total_cost = 0
        var n = 0
        var user_data = {
            'userid': $('#userid').val()
        };
        $.ajax({
            url: "<?php echo base_url('Pages/fetchCart') ?>",
            method: 'post',
            data: user_data,
            success: function(result) {
                $('#cart-body').html('')
                $.each(result, function(key, value) {
                    console.log(user_data);
                    $.each(this, function(key, value) {
                        $(".reciept-body").append(
                            '  <div class="item"><div><img src = "' + this.product_image + '"></div><hr><div id = "cart-body"><span id = "item-name" > ' + this.product_name + '</span><br><br><br><br><span>' + this.unit_price + '</span><br><br><br><br><button class="remove-cart-item" data-id="' + this.product_id + '">Remove</button></div</div><hr>'
                        )
                        total_cost = total_cost + parseInt(this.unit_price, 10)
                    })
                })
                $('#total').html('');

                $('#total').html('Ksh&nbsp' + total_cost + '.00');
                $('#calculated-total').html('Ksh&nbsp' + total_cost * 1.1 + '.00');


            }
        })
    }
    $('.remove-cart-item').click(function() {
        removeItem($(this).data('id'))
    })

    function removeItem(product_id) {
        var data = {
            'userid': $('#userid').val(),
            'product_id': product_id
        };
        $.ajax({
            url: "<?php echo base_url('Items/removeItem') ?>",
            method: 'post',
            data: data,
            success: function(result) {
                if (result) {
                    console.log(result);
                    fetchCart()
                } else {
                    console.log('error');
                }
            }
        })
    }
    $('#wallet-button').click(function() {

    })


    function getWalletbalance() {
        $.ajax({
            url: "<?php echo base_url('Pages/getWalletbalance') ?>",
            method: 'POST',
            data: {
                userid: $("#userid").val()
            },
            success: function(response) {
                if (response == null) {
                    $('#wallet-balance').html('Ksh 00.00')
                } else {
                    $('#wallet-balance').html("")
                    wallet_balance = response.amount_available
                    $('#wallet-balance').html(wallet_balance + ".00")
                }

            }
        })
    }
    $('#make-deposit').click(function() {
        updateWalletbalance()
    });




    function updateWalletbalance() {
        data = {
            userid: $("#userid").val(),
            amount_available: parseInt($('#wallet-balance').html()) + parseInt($('#deposit-amount').val()),
        };
        $.ajax({
            method: 'post',
            url: "<?php echo base_url('Pages/updateWalletbalance') ?>",
            data: data,
            success: function(response) {
                getWalletbalance()
                $('#deposit-amount').html()
            }
        })

    }

    function updateWallet(amount) {
        data = {
            userid: $("#userid").val(),
            amount_available: amount
        };
        $.ajax({
            method: 'post',
            url: "<?php echo base_url('Pages/updateWalletbalance') ?>",
            data: data,
            success: function(response) {
                populateWallet()
            }
        })


    }

    function clearCart() {
        data = {
            user_id: $("#userid").val()
        };
        $.ajax({
            method: 'post',
            url: "<?php echo base_url('ProductHandler/clearCart') ?>",
            data: data,
            success: function(response) {
                // console.log(response);
            }

        })
    }

    var new_balance = 0


    function updateWalletbalanceAferPrchase(new_balance) {
        data = {
            userid: $("#userid").val(),
            amount_available: new_balance
        };
        $.ajax({
            method: 'post',
            url: "<?php echo base_url('User/updateWalletbalance') ?>",
            data: data,
            success: function(response) {
                $('#deposit-amount').val('')
                getWalletbalance()
            }
        })

    }

    function checkout() {
        var wallet_balance = 0
        var total_cost = 0
        var new_balance = 0

        function returnWallet() {
            $.ajax({
                url: "<?php echo base_url('Pages/getWalletbalance') ?>",
                method: 'POST',
                data: {
                    userid: $("#userid").val()
                },
                success: function(response) {
                    wallet_balance = response.amount_available

                }
            })

        }

        function calculateCost() {
            var user_data = {
                'userid': $('#userid').val()
            };
            $.ajax({
                url: "<?php echo base_url('Pages/fetchCart') ?>",
                method: 'post',
                data: user_data,
                success: function(result) {
                    $.each(result, function(key, value) {
                        $.each(this, function(key, value) {
                            total_cost = total_cost + parseInt(this.unit_price, 10)
                        })
                    })
                }
            })
        }
        if ((wallet_balance - total_cost) < 0) {
            alert('Please make a deposit to Continue')
        } else {
            var user_data = {
                'userid': $('#userid').val()
            }
            var purchase = []
            $.ajax({
                url: "<?php echo base_url('Pages/fetchCart') ?>",
                method: 'post',
                data: user_data,
                success: function(result) {
                    $.each(result, function(key, value) {
                        $.each(this, function(key, value) {
                            purchase.push({
                                userid: $('#userid').val(),
                                product_name: this.product_name,
                                unit_price: this.unit_price
                            })

                        })
                        new_balance = wallet_balance - total_cost
                        recordPurchase(purchase)
                        updateWalletbalanceAferPrchase(new_balance)

                    })
                }

            })
        }

    }

    function recordPurchase(purchase) {
        $.each(purchase, function(key, value) {
            $.ajax({
                url: "<?php echo base_url('Pages/purchase') ?>",
                method: 'post',
                data: this,
                success: function(response) {
                    alert('Thank you for your purchase')
                    setTimeout(function() {
                        window.location.reload()
                    }, 3000)
                }
            })
        })

    }
</script>
</script>