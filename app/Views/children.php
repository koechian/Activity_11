    <?php ob_start();
    include('Includes/header.php');
    $buffer = ob_get_contents();
    ob_end_clean();

    $title = "For the Kids " . "  " . "  " . " | " . " " . "  " . " GUSHI";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer; ?>
    <section class="cards">
        <div class="heading">
            <h1>Children's Wear</h1>
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
                    <h5>Gender: &nbsp</h6>
                        <select name="" id="">
                            <option value="">All</option>
                            <option value="male">Girls</option>
                            <option value="female">Boys</option>
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

            </div>
            <hr class="filter-hr">
        </div>
        <input id="gender" value="children" type="hidden">
        <div class="cards_wrapper">
        </div>
    </section>
    <?php
    include('Includes/footer.php');
    ?>