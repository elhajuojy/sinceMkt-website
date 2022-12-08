<?php require "partials/admin.header.php" ?>
    <!-- End: Navbar Right Links -->
    <!-- Start: Contact Form Basic -->
    <section class="position-relative py-2 py-xl-0">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class="card mb-5">
              <div class="card-body p-sm-5">
                <h2 class="text-center mb-4">Add product</h2>
                <form method="post" action="/admin/addproduct">
                  <div class="mb-3">
                    <label class="form-label">image</label>
                    <input class="form-control" type="file" name="image" />
                  </div>
                  <!-- Start: Error Example -->
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      id="title"
                      name="title"
                      placeholder="title"
                    />
                  </div>
                  <!-- End: Error Example -->
                  <!-- Start: Success Example -->
  
                    <!-- End: Success Example -->
                    <!-- Start: Success Example -->
                    <div class="mb-3">
                      <input
                        class="form-control"
                        type="text"
                        id="name-3"
                        name="price"
                        placeholder="price"
                      />
                    </div>
                    <!-- End: Success Example -->
                  <!-- End: Success Example -->
                  <!-- Start: Error Example -->
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      id="description"
                      name="description"
                      placeholder="description"
                    />
                  </div>
                  <!-- End: Error Example -->
                  <div>
                    <button class="btn btn-primary d-block w-100" type="submit">
                      Add
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End: Contact Form Basic -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
