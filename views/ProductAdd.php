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
                <form method="post" action="/admin/addproduct" enctype="multipart/form-data">
                  <div class="mb-3">
                    <!-- <input class="form-control" type="file" name="image"  id="image"/> -->
                    <label class="form-label" for="fileToUpload">image</label>
                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload"  >
                    <label class="form-label" for="fileToUpload"><?=$product->image?></label>
        
                    <p style="color: red;"><?=$msgError?></p>
                  </div>
                  <!-- Start: Error Example -->
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      id="title"
                      value="<?= $product->title ?>"
                      name="title"
                      placeholder="title"
                    />
                    <p style="color: red;"><?=$msgError?></p>
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
                        value="<?= $product->price ?>"
                        placeholder="price"
                      />
                      <p style="color: red;"><?=$msgError?></p>
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
                      value="<?= $product->description ?>"
                      placeholder="description"
                    />
                    <p style="color: red;"><?=$msgError?></p>
                  </div>
                  <div>
                    <?php
                      if (isset($_GET['id'])) {
                        echo '<input type="hidden" name="id" value="'.$_GET['id'].'">';
                      }
                    ?>
                  </div>
                  <!-- End: Error Example -->
                  <div>
                    <?php
                      isset($_GET['id']) ? $btn = "Update" : $btn = "Add";
                    ?>
                    <button class="btn btn-primary w-100" type="submit" name="submit" value="<?=$btn?>"><?=$btn?></button>
                    
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
