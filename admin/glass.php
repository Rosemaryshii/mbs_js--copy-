<?php
// include 'includes/sessions.php';
include 'includes/header.php';

// Check for error or success messages
if (isset($_GET['error'])) {
  $errorMessage = $_GET['error'];
}

if (isset($_GET['success'])) {
  // Display success message if needed
}
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Product Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Glass</li>
        <li class="breadcrumb-item active">Add-Glass</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Add New Glass</h5>

      <!-- Error message section -->
      <?php if (isset($errorMessage)): ?>
        <div id="error-message" class="alert alert-danger" role="alert">
          <?php echo $errorMessage; ?>
        </div>
        <script>
          setTimeout(function() {
            var errorMessage = document.getElementById('error-message');
            if (errorMessage) {
              errorMessage.style.display = 'none';
            }
          }, 5000); // Timeout after 5 seconds (adjust as needed)
        </script>
      <?php endif; ?>
      <!-- End error message section -->

      <!-- Floating Labels Form -->
      <form class="row g-3" method="POST" action="add-glass.php">
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" name="GlassName" id="GlassName" placeholder="Glass name">
            <label for="GlassName">Glass Name</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="number" class="form-control" name="Price" id="Price" placeholder="Glass Price">
            <label for="Price">Glass Price</label>
          </div>
        </div>
        <div class="text-center">
         <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End floating Labels Form -->
    </div>
  </div>
</main><!-- End #main -->