<?php
ob_start();
include('Includes/header.php');
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
                    <select name="" id="select_category">
                        <option value="">All</option>
                        <option value="1">Sports</option>
                        <option value="2">Casual Wear</option>
                        <option value="3">Official Wear</option>
                        <option value="4">Accessories</option>
                    </select>
                    <button class="clear">Clear</button>
            </div>

        </div>
        <hr class="filter-hr">
    </div>
    <div class="cards_wrapper">
    </div>
    <input value='male' id="gender" type="hidden">
</section>
<?php
include('Includes/footer.php');
?>