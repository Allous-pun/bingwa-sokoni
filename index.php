<?php
// Sample data (this can be updated with actual data later)
$items = [
    ['type' => 'bundle', 'name' => '250 mbs', 'amount' => '20', 'validity' => 'Valid 24 hours', 'icon' => 'wifi'],
    ['type' => 'minutes', 'name' => '50 Minutes', 'amount' => '51', 'validity' => 'Valid till midnight', 'icon' => 'phone'],
    ['type' => 'sms', 'name' => '20 SMS', 'amount' => '5', 'validity' => 'Daily', 'icon' => 'comment'],
    ['type' => 'bundle', 'name' => '1.25 GB', 'amount' => '55', 'validity' => 'Valid till midnight', 'icon' => 'wifi'],
    ['type' => 'minutes', 'name' => '50 Talk time', 'amount' => '22', 'validity' => 'Valid till midnight', 'icon' => 'phone'],
    ['type' => 'sms', 'name' => '200 SMS', 'amount' => '10', 'validity' => 'Daily', 'icon' => 'comment'],
    ['type' => 'bundle', 'name' => '350 mbs', 'amount' => '49', 'validity' => 'Valid 7 days', 'icon' => 'wifi'],
    ['type' => 'minutes', 'name' => '34 Minutes', 'amount' => '21', 'validity' => 'Valid 1 hour', 'icon' => 'phone'],
    ['type' => 'sms', 'name' => '1000 SMS', 'amount' => '30', 'validity' => 'Weekly', 'icon' => 'comment'],
    ['type' => 'bundle', 'name' => '1.5 GB', 'amount' => '50', 'validity' => 'Valid 3 hours', 'icon' => 'wifi'],
    ['type' => 'sms', 'name' => '1500 SMS', 'amount' => '100', 'validity' => 'monthly', 'icon' => 'comment'],
    ['type' => 'bundle', 'name' => '1 GB', 'amount' => '19', 'validity' => 'Valid 1 hour', 'icon' => 'wifi'],
    ['type' => 'bundle', 'name' => '1 GB', 'amount' => '99', 'validity' => 'Valid 24 hours', 'icon' => 'wifi'],
    ['type' => 'bundle', 'name' => '2.5 GB', 'amount' => '300', 'validity' => 'Valid 7 days', 'icon' => 'wifi'],
    ['type' => 'bundle', 'name' => '6 GB', 'amount' => '700', 'validity' => 'Valid 7 days', 'icon' => 'wifi'],
];

// Filter logic
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';

// Filter items based on the selected filter
function filterItems($items, $filter)
{
    if ($filter === 'all') {
        return $items;
    }
    return array_filter($items, function ($item) use ($filter) {
        return $item['type'] === $filter;
    });
}

// Get filtered items
$filteredItems = filterItems($items, $filter);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingwa Sokoni</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

    <!-- Include header -->
    <?php include 'includes/header.php'; ?>

    <!-- Description Section -->
    <div class="description">
        <p>Automated Bingwa Sokoni Packages</p>
        <p>Buy with or without Okoa Jahazi</p>
        <p>Data can be purchased only once, but multiple times for minutes and SMS</p>
    </div>

    <!-- Filter Buttons -->
    <div class="filter-container">
        <button class="filter-btn" data-filter="all">All</button>
        <button class="filter-btn" data-filter="bundle">Bundles</button>
        <button class="filter-btn" data-filter="minutes">Minutes</button>
        <button class="filter-btn" data-filter="sms">SMS</button>
    </div>

    <!-- Display filtered items -->
    <div class="items-list">
        <?php foreach ($filteredItems as $item) : ?>
            <div class="item-card">
                <i class="fas fa-<?= htmlspecialchars($item['icon']) ?>"></i>
                <h3><?= htmlspecialchars($item['name']) ?></h3>
                <p><strong>Validity: </strong><?= htmlspecialchars($item['validity']) ?></p>
                <p><strong>Price: </strong> Ksh.  <?= htmlspecialchars($item['amount']) ?></p>
                <form action="stk/index.php" method="POST">
                    <!-- Passing amount dynamically -->
                    <input type="hidden" name="amount" value="<?= htmlspecialchars($item['amount']) ?>">
                    <button type="submit" class="purchase-btn">Purchase</button>
                </form>


            </div>
        <?php endforeach; ?>
    </div>

    <!-- Include footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/index.js"></script>
</body>
</html>
