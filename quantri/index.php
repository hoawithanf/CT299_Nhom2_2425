<?php 
require('includes/header.php');
?>



            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800"><b>TỔNG QUAN</b></h1>
              <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i>Tạo Báo Cáo
              </a
              >
            </div>

            <!-- Content Row -->
            <div class="row">
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                        >
                          Doanh Thu (Tháng)
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          445.881.023 VND
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-success text-uppercase mb-1"
                        >
                          Doanh Thu (Năm)
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          7.193.627.559 VND
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-info text-uppercase mb-1"
                        >
                          Công Việc
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div
                              class="h5 mb-0 mr-3 font-weight-bold text-gray-800"
                            >
                              70%
                            </div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div
                                class="progress-bar bg-info"
                                role="progressbar"
                                style="width: 70%"
                                aria-valuenow="70"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i
                          class="fas fa-clipboard-list fa-2x text-gray-300"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-warning text-uppercase mb-1"
                        >
                          Yêu Cầu Chờ Xử Lí
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          18
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content Row -->

            <div class="row">
              <!-- Area Chart -->
              <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-primary">
                      Tổng Quan Doanh Thu
                    </h6>
                    <div class="dropdown no-arrow">
                      <a
                        class="dropdown-toggle"
                        href="#"
                        role="button"
                        id="dropdownMenuLink"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i
                          class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"
                        ></i>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink"
                      >
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="myAreaChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pie Chart -->
              <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-primary">
                      Nguồn Thu
                    </h6>
                    <div class="dropdown no-arrow">
                      <a
                        class="dropdown-toggle"
                        href="#"
                        role="button"
                        id="dropdownMenuLink"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i
                          class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"
                        ></i>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink"
                      >
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </div>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                      <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                      <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Shopee Mall
                      </span>
                      <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Lazada Mall
                      </span>
                      <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> TikTok Shop
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content Row -->
            <div class="row">
              <!-- Content Column -->
              <div class="col-lg-6 mb-4">
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Dự Án</h6>
                  </div>
                  <div class="card-body">
                    <h4 class="small font-weight-bold">
                      Chuyển Đổi Server <span class="float-right">20%</span>
                    </h4>
                    <div class="progress mb-4">
                      <div
                        class="progress-bar bg-danger"
                        role="progressbar"
                        style="width: 20%"
                        aria-valuenow="20"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <h4 class="small font-weight-bold">
                      Theo Dõi Doanh Số <span class="float-right">40%</span>
                    </h4>
                    <div class="progress mb-4">
                      <div
                        class="progress-bar bg-warning"
                        role="progressbar"
                        style="width: 40%"
                        aria-valuenow="40"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <h4 class="small font-weight-bold">
                      Cơ Sở Dữ Liệu Khách Hàng <span class="float-right">60%</span>
                    </h4>
                    <div class="progress mb-4">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 60%"
                        aria-valuenow="60"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <h4 class="small font-weight-bold">
                      Chi Trả Lương <span class="float-right">80%</span>
                    </h4>
                    <div class="progress mb-4">
                      <div
                        class="progress-bar bg-info"
                        role="progressbar"
                        style="width: 80%"
                        aria-valuenow="80"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <h4 class="small font-weight-bold">
                      Tạo Mới Tài Khoản <span class="float-right">100%</span>
                    </h4>
                    <div class="progress">
                      <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 100%"
                        aria-valuenow="100"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>

                <!-- Color System -->
                <div class="row">
                  <div class="col-lg-6 mb-4">
                    <div class="card bg-primary text-white shadow">
                      <div class="card-body">
                        Quản Trị Viên
                        <div class="text-white-50 small">#4e73df</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="card bg-success text-white shadow">
                      <div class="card-body">
                        Phòng Kĩ Thuật
                        <div class="text-white-50 small">#1cc88a</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                      <div class="card-body">
                        Phòng Kế Toán
                        <div class="text-white-50 small">#36b9cc</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="card bg-warning text-white shadow">
                      <div class="card-body">
                        Phòng Sale
                        <div class="text-white-50 small">#f6c23e</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="card bg-danger text-white shadow">
                      <div class="card-body">
                        Phòng Lãnh Đạo
                        <div class="text-white-50 small">#e74a3b</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="card bg-secondary text-white shadow">
                      <div class="card-body">
                        Phòng Nhân Sự
                        <div class="text-white-50 small">#858796</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="card bg-light text-black shadow">
                      <div class="card-body">
                        Phòng Marketing
                        <div class="text-black-50 small">#f8f9fc</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="card bg-dark text-white shadow">
                      <div class="card-body">
                        Phòng CSVC
                        <div class="text-white-50 small">#5a5c69</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mb-4">
                <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                      Giá Trị Cốt Lỗi
                    </h6>
                  </div>
                  <div class="card-body">
                    <div class="text-center">
                      <img
                        class="img-fluid px-3 px-sm-4 mt-3 mb-4"
                        style="width: 25rem"
                        src="img/undraw_posting_photo.svg"
                        alt="..."
                      />
                    </div>
                    <p>
                      Chúng tôi là 3 con ngựa màu hồng bán mỹ phẩm!
                    </p>
                    <a target="_blank" rel="nofollow" href="index.php"
                      >Pink Pony Cosmetics &rarr;</a
                    >
                  </div>
                </div>

                <!-- Approach -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                      Phương Châm Phát Triển
                    </h6>
                  </div>
                  <div class="card-body">
                    <p>
                      Bán sản phẩm chất lương
                    </p>
                    <p class="mb-0">
                      Đặt uy tín lên hàng đầu
                    </p>
                  </div>
                </div>
              </div>
            </div>
         

      
<?php
require('includes/footer.php');
?>