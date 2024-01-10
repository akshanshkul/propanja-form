<!-- ========== header end ========== -->
<?php

use App\form\GetData;

$dataObj = new GetData;
?>
<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title">
            <h2>Dashboard</h2>
          </div>
        </div>
        <!-- end col -->

      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row mt-10">
      <div class="col-lg-12">
        <div class="card-style mb-30">
          <h6 class="mb-10">Data Table</h6>
          <div class="table-wrapper table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>
                    <h6>#</h6>
                  </th>
                  <th>
                    <h6>Name</h6>
                  </th>
                  <th>
                    <h6>Contact Details</h6>
                  </th>
                  <th>
                    <h6>Weight</h6>
                  </th>
                  <th>
                    <h6>Pay Status</h6>
                  </th>
                  <th>
                    <h6>Ref Id</h6>
                  </th>
                  <th>
                    <h6>Payment Id</h6>
                  </th>
                  <th>
                    <h6>Action</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $playersListArray = $dataObj->getAllFormData();
                $i = 1;
                foreach ($playersListArray as $players) {
                  ?>
                  <tr>
                    <td class="min-width">
                      <p>
                      <h6 class="fw-semibold mb-1">
                        <p>
                          <?= $i; ?>

                        </p>
                      </h6>

                    </td>
                    <td class="min-width">
                      <p>
                      <h6 class="fw-semibold mb-1">
                        <p>
                          <?= $players['name'] ?>

                        </p>
                      </h6>

                    </td>
                    <td class="min-width">
                      <h6 class="fw-semibold mb-1">
                        <p>
                          <?= $players['email'] ?>
                        </p>
                      </h6>
                      <span class="fw-normal">
                        <p><a href="tel:<?= $players['phone'] ?>">
                            <?= $players['phone'] ?>
                          </a></p>
                      </span>
                    </td>
                    <td class="min-width">
                      <h6 class="fw-semibold mb-1">
                        <p>
                          <?php if ($players['weight'] == 1) {
                            echo "60 Kg";
                          } else if ($players['weight'] == 2) {
                            echo "70 Kg";
                          } else if ($players['weight'] == 3) {
                            echo "80 Kg";
                          } else if ($players['weight'] == 4) {
                            echo "80+ Kg";
                          }
                          ?>
                        </p>
                      </h6>
                    </td>
                    <td class="min-width">
                      <p>
                        <?= $players['payment_status'] ?>
                      </p>
                    </td>

                    <td class="min-width">
                      <h6 class="fw-semibold mb-1">
                        <p>
                          <?= $players['ref_id'] ?>
                        </p>
                      </h6>

                    </td>
                    <td class="min-width">
                      <h6 class="fw-semibold mb-1">
                        <p>
                          <?= $players['payment_id'] ?>

                        </p>
                      </h6>
                      <span class="fw-normal">
                        <p>
                        </p>
                      </span>

                    </td>

                  </tr>
                  <?php
                  $i++;

                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- ========== section end ========== -->