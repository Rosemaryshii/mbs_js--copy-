<?php include 'includes/header.php'; ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>All Glasses Available</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <!-- Table with stripped rows -->
            <table class="table table-striped table-bordered datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Glass Name</th>
                  <th scope="col">Glass Price</th>

                  <th scope="col">Actions</th> <!-- New header for actions -->
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Designer</td>

                  <td>
                    <button class="btn btn-primary edit-btn btn-sm" data-bs-toggle="modal" data-bs-target="#editglass">Edit</button> <!-- Edit button -->
                    <button class="btn btn-danger delete-btn btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td>Developer</td>

                  <td>
                    <button class="btn btn-primary edit-btn btn-sm">Edit</button>
                    <button class="btn btn-danger delete-btn btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td>Finance</td>

                  <td>
                    <button class="btn btn-primary edit-btn btn-sm">Edit</button>
                    <button class="btn btn-danger delete-btn btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>HR</td>

                  <td>
                    <button class="btn btn-primary edit-btn btn-sm">Edit</button>
                    <button class="btn btn-danger delete-btn btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>Dynamic Division </td>

                  <td>
                    <button class="btn btn-primary edit-btn btn-sm">Edit</button>
                    <button class="btn btn-danger delete-btn btn-sm">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

            <!-- EDIT MODAL -->

            <div class="modal fade" id="editglass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-80 font-weight-bold">Edit Glass</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                      <input type="text" id="defaultForm-email" class="form-control validate">
                      <label data-error="wrong" data-success="right" for="defaultForm-email">Glass Name</label>
                    </div>

                    <div class="md-form mb-4">
                      <input type="number" id="defaultForm-pass" class="form-control validate">
                      <label data-error="wrong" data-success="right" for="defaultForm-pass">Glass Price</label>
                    </div>

                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-info">Submit</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- EDIT MODAL -->

            <!-- Delete Modal Start-->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to delete this item?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Delete Modal End -->

          </div>
        </div>
      </div>
    </div>
  </section>



</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include 'includes/footer.php'; ?>