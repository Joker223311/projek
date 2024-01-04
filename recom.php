<?php
function getTitleFromImage($imageURL) {
    // Extract product name from the image file name
    $imageName = pathinfo($imageURL, PATHINFO_FILENAME);

    // Replace underscores with spaces and capitalize the words
    $productName = ucwords(str_replace('_', ' ', $imageName));

    return $productName;
}

function getRandomImage() {
    // Array of image URLs corresponding to the product titles
    $imageURLs = [
        'assets/images/pecihd.png',
        'assets/images/tapis kain.jpg',
        'assets/images/gajahhd.png',
        'assets/images/kipasbali.png',
        'assets/images/kopiahya.jpg',
        // Add more image URLs as needed
    ];

    // Get a random index from the array
    $randomIndex = array_rand($imageURLs);

    // Return the random image URL
    return $imageURLs[$randomIndex];
}

// Example of usage
$numProducts = 3; // You need to define $numProducts somewhere in your code
?>