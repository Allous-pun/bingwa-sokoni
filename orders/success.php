<?php include('../includes/header.php'); ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<!-- Inline CSS inside the success.php file -->
<style>
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        padding-top: 70px;
    }

    /* Success Message Section */
    .success-message {
        text-align: center;
        padding: 40px;
        margin: 20px;
        background-color: #e0f7e0; /* Light green background */
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 90%; /* Make the message container responsive */
        margin-left: auto;
        margin-right: auto;
    }

    .success-message h2 {
        color: #388e3c; /* Green color */
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .success-message p {
        color: #333;
        font-size: 1rem;
    }

    /* Link Style */
    .home-link {
        display: inline-flex;
        align-items: center;
        margin-top: 20px;
        color: #388e3c; /* Green color */
        text-decoration: none;
        font-size: 1rem;
    }

    .home-link i {
        margin-left: 8px; /* Space between text and icon */
        font-size: 1.2rem;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .success-message {
            padding: 20px;
            max-width: 85%; /* Ensure the container doesn't stretch too wide on small screens */
        }

        .success-message h2 {
            font-size: 1.25rem; /* Slightly smaller font on mobile */
        }

        .success-message p {
            font-size: 0.9rem; /* Adjust the paragraph font size */
        }
    }

    @media (max-width: 480px) {
        .success-message {
            padding: 15px;
            max-width: 100%; /* Take full width on very small screens */
        }

        .success-message h2 {
            font-size: 1rem; /* Even smaller font size on very small screens */
        }

        .success-message p {
            font-size: 0.85rem; /* Further adjust the paragraph font size */
        }
    }
</style>

<div class="success-message">
    <h2>Successfully Purchased!</h2>
    <p>Your purchase has been successfully processed. Please wait while we deliver your package.</p>

    <!-- Link to Index with Arrow Icon -->
    <a href="../index.php" class="home-link">
        Go to Home <i class="fas fa-arrow-right"></i>
    </a>
</div>

<?php include('includes/footer.php'); ?>
