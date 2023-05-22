
<?php   
              // include 'includes/sessions.php';
              include 'includes/header.php';   
              
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1> Product Form</h1>
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

              <!-- Floating Labels Form -->
              <form class="row g-3">

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="GlassName" placeholder="Glass name">
                    <label for="GlassName">Glass Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="Price" placeholder="Glass Price">
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

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php 
               include 'includes/footer.php';
  ?>