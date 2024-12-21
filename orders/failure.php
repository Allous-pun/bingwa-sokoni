<?php include('../includes/header.php'); ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<!-- Inline CSS inside the failure.php file -->
<style>
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        padding-top: 70px;
    }

    /* Error Message Section */
    .error-message {
        text-align: center;
        padding: 40px;
        margin: 20px;
        background-color: #f8d7da; /* Light red background */
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 90%; /* Make the message container responsive */
        margin-left: auto;
        margin-right: auto;
    }

    .error-message h2 {
        color: #721c24; /* Red color */
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .error-message p {
        color: #333;
        font-size: 1rem;
    }

    /* Link Style */
    .home-link {
        display: inline-flex;
        align-items: center;
        margin-top: 20px;
        color: #721c24; /* Red color */
        text-decoration: none;
        font-size: 1rem;
    }

    .home-link i {
        margin-left: 8px; /* Space between text and icon */
        font-size: 1.2rem;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .error-message {
            padding: 20px;
            max-width: 85%; /* Ensure the container doesn't stretch too wide on small screens */
        }

        .error-message h2 {
            font-size: 1.25rem; /* Slightly smaller font on mobile */
        }

        .error-message p {
            font-size: 0.9rem; /* Adjust the paragraph font size */
        }
    }

    @media (max-width: 480px) {
        .error-message {
            padding: 15px;
            max-width: 100%; /* Take full width on very small screens */
        }

        .error-message h2 {
            font-size: 1rem; /* Even smaller font size on very small screens */
        }

        .error-message p {
            font-size: 0.85rem; /* Further adjust the paragraph font size */
        }
    }
</style>

<div class="error-message">
    <h2>Transaction Failed!</h2>
    <p>Oops! Something went wrong. Please check the phone number format or ensure all fields are filled correctly.</p>

    <!-- Link to Index with Arrow Icon -->
    <a href="../index.php" class="home-link">
        Try Again <i class="fas fa-arrow-left"></i>
    </a>
</div>

<?php include('includes/footer.php'); ?>
