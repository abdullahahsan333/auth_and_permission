@extends('layouts.backend')

@section('content')

                <!-- Start Body Content Area -->
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-xl-12 col-lg-5">
                        <div class="welcome-farol card bg-primary border-0 rounded-10 position-relative mb-4">
                            <div class="card-body p-4 my-2">
                                <div class="mw-350">
                                    <h3 class="text-white fw-semibold fs-20 mb-2">Welcome to Farol Dashboard !</h3>
                                    <p class="text-white fs-15">You have done 68% 😎 more sales today. Check your new badge in your profile.</p>
                                </div>
                            </div>

                            <img src="{{ asset('assets/images/welcome-shape.png') }}" class="position-absolute bottom-0 end-0" style="right: 10px !important; bottom: 10px !important;" alt="welcome-shape">
                        </div>

                        <div class="welcome-farol card bg-white border-0 rounded-10 mb-4 position-relative">
                            <div class="card-body p-4">
                                <ul class="ps-0 mb-0 mt-3 list-unstyled d-flex justify-content-between align-items-center">
                                    <li class="text-center">
                                        <div id="impression_share"></div>
                                        <span class="fw-semibold fs-14">Impression Share</span>
                                    </li>
                                    <li class="text-center">
                                        <div id="goal_completions"></div>
                                        <span class="fw-semibold fs-14">Goal Completions</span>
                                    </li>
                                    <li class="text-center">
                                        <div id="conversions"></div>
                                        <span class="fw-semibold fs-14">Conversions</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="visit-income-farol card bg-white border-0 rounded-10 mb-4 position-relative">
                            <div class="card-body p-4">
                                <ul class="ps-0 mb-0 mt-3 list-unstyled">
                                    <li class="d-sm-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="icon">
                                                    <i class="flaticon-pie-chart-3"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span>Visits by Day</span>
                                                <h3 class="body-font fs-3 mt-1 mb-0">1,802</h3>
                                            </div>
                                        </div>

                                        <div id="visits_by_day"></div>
                                    </li>
                                    <li class="d-sm-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="icon">
                                                    <i class="flaticon-pie-chart-1"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span>Net Income</span>
                                                <h3 class="body-font fs-3 mt-1 mb-0">$438.5k</h3>
                                            </div>
                                        </div>

                                        <div id="net_income"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-12 col-lg-7">
                        <div class="row justify-content-center">
                            <div class="col-xxl-4 col-xl-4 col-md-6 col-lg-6">
                                <div class="stats-box style-four card bg-white border-0 rounded-10 mb-4">
                                    <div class="card-body p-4">
                                        <div class="d-md-flex justify-content-between align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="icon transition">
                                                    <i class="flaticon-donut-chart"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                                                <span class="fs-15">Sessions</span>
                                                <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                                    <h3 class="body-font fw-bold fs-3 mb-0">24k</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="svg-success me-2">
                                                    <i data-feather="trending-up"></i>
                                                </div>
                                                <p class="fw-semibold fs-14"><span class="text-success">9.5%</span> new session</p>
                                            </div>

                                            <div id="stats_box_1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-md-6 col-lg-6">
                                <div class="stats-box style-four card bg-white border-0 rounded-10 mb-4">
                                    <div class="card-body p-4">
                                        <div class="d-md-flex justify-content-between align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="icon transition">
                                                    <i class="flaticon-goal"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                                                <span class="fs-15">Total Orders</span>
                                                <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                                    <h3 class="body-font fw-bold fs-3 mb-0">155k</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="svg-danger me-2">
                                                    <i data-feather="trending-down"></i>
                                                </div>
                                                <p class="fw-semibold fs-14"><span class="text-danger">7.5%</span> vs. previous month</p>
                                            </div>

                                            <div id="stats_box_2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-md-6 col-lg-6">
                                <div class="stats-box style-four card bg-white border-0 rounded-10 mb-4">
                                    <div class="card-body p-4">
                                        <div class="d-md-flex justify-content-between align-items-center mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="icon transition">
                                                    <i class="flaticon-award"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                                                <span class="fs-15">Total Earning</span>
                                                <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                                    <h3 class="body-font fw-bold fs-3 mb-0">16.2M</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="svg-success me-2">
                                                    <i data-feather="trending-up"></i>
                                                </div>
                                                <p class="fw-semibold fs-14"><span class="text-success">3.5%</span> bounce rate</p>
                                            </div>

                                            <div id="stats_box_3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Audience Overview</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="chevron-down"></i>
                                            <span>This Week</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="audience_overview"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xxl-8">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card bg-white border-0 rounded-10 mb-4">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                            <h4 class="fw-semibold fs-18 mb-0">Sales Analytics</h4>
                                            <div class="dropdown action-opt">
                                                <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="chevron-down"></i>
                                                    <span>This Week</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="clock"></i>
                                                            Today
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="pie-chart"></i>
                                                            Last 7 Days
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="rotate-cw"></i>
                                                            Last Month
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="calendar"></i>
                                                            Last 1 Year
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="bar-chart"></i>
                                                            All Time
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="eye"></i>
                                                            View
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="trash"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div id="sales_analytics"></div>
                                    </div>
                                </div>
                                <div class="card bg-white border-0 rounded-10 mb-4">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                            <h4 class="fw-semibold fs-18 mb-0">Revenue Report</h4>
                                            <div class="dropdown action-opt">
                                                <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="chevron-down"></i>
                                                    <span>This Week</span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="clock"></i>
                                                            Today
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="pie-chart"></i>
                                                            Last 7 Days
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="rotate-cw"></i>
                                                            Last Month
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="calendar"></i>
                                                            Last 1 Year
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="bar-chart"></i>
                                                            All Time
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="eye"></i>
                                                            View
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="trash"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div id="revenue_report"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-white border-0 rounded-10 mb-4">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                            <h4 class="fw-semibold fs-18 mb-0">Total Revenue</h4>
                                            <div class="dropdown action-opt">
                                                <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="clock"></i>
                                                            Today
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="pie-chart"></i>
                                                            Last 7 Days
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="rotate-cw"></i>
                                                            Last Month
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="calendar"></i>
                                                            Last 1 Year
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="bar-chart"></i>
                                                            All Time
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="eye"></i>
                                                            View
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="trash"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div id="total_revenue"></div>

                                        <ul class="ps-0 mb-0 list-unstyled">
                                            <li class="d-flex justify-content-between align-items-center border-bottom border-color-gray pb-10 mb-10">
                                                <span>Avg. session</span>
                                                <div class="d-flex align-content-center">
                                                    <span class="fs-16 fw-semibold me-3">972</span>
                                                    <span class="fs-14 d-flex align-items-center">
                                                        <i class="flaticon-trend text-success fs-16 mx-2" style="position: relative; top: 2px;"></i>
                                                        49%
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center border-bottom border-color-gray pb-10 mb-10">
                                                <span>Conversion Rate</span>
                                                <div class="d-flex align-content-center">
                                                    <span class="fs-16 fw-semibold me-3">1026</span>
                                                    <span class="fs-14 d-flex align-items-center">
                                                        <i class="flaticon-trend text-success fs-16 mx-2" style="position: relative; top: 2px;"></i>
                                                        18%
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center border-bottom border-color-gray pb-10 mb-10">
                                                <span>Avg. Duration</span>
                                                <div class="d-flex align-content-center">
                                                    <span class="fs-16 fw-semibold me-3">3m</span>
                                                    <span class="fs-14 d-flex align-items-center">
                                                        <i class="flaticon-trend text-success fs-16 mx-2" style="position: relative; top: 2px;"></i>
                                                        42%
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Weekly Earning</span>
                                                <div class="d-flex align-content-center">
                                                    <span class="fs-16 fw-semibold me-3">$972</span>
                                                    <span class="fs-14 d-flex align-items-center">
                                                        <i class="flaticon-trend text-success fs-16 mx-2" style="position: relative; top: 2px;"></i>
                                                        28%
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card bg-white border-0 rounded-10 mb-4">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                            <h4 class="fw-bold fs-18 mb-0">Activity Timeline</h4>

                                            <div class="dropdown action-opt">
                                                <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="clock"></i>
                                                            Today
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="pie-chart"></i>
                                                            Last 7 Days
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="rotate-cw"></i>
                                                            Last Month
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="calendar"></i>
                                                            Last 12 Months
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="bar-chart"></i>
                                                            All Time
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="eye"></i>
                                                            View
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:;">
                                                            <i data-feather="trash"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <ul class="ps-0 mb-0 list-unstyled activity-timeline max-h-402" data-simplebar>
                                            <li class="activity-item">
                                                <a href="notification.html" class="text-decoration-none">
                                                    <h4>8 Invoices have been paid</h4>

                                                    <div class="activity-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/pdf.svg" alt="pdf">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <p>Invoices have been paid to the company.</p>
                                                            </div>
                                                        </div>
                                                        <span>11:47 PM Wednesday</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="activity-item">
                                                <a href="notification.html" class="text-decoration-none">
                                                    <h4>Create a new project for client</h4>

                                                    <div class="activity-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/notifications-1.jpg" alt="notifications">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <p>Allow users to like products in your WooCommerce</p>
                                                            </div>
                                                        </div>
                                                        <span>April, 18</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="activity-item">
                                                <a href="notification.html" class="text-decoration-none">
                                                    <h4>Added new style collection</h4>

                                                    <div class="activity-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/notifications-2.jpg" alt="notifications">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <p>Product uploaded By Nesta Technologies</p>
                                                            </div>
                                                        </div>
                                                        <span>02:14 PM Today</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Sessions By Countries</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="sessions_by_countries"></div>
                            </div>
                        </div>
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Total Transactions</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="total_transactions"></div>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="row justify-content-center">
                    <div class="col-xxl-8">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Browser Used by Users & Transaction</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="default-table-area browser-list">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-primary">Browser</th>
                                                    <th scope="col" class="text-center">Users</th>
                                                    <th scope="col" class="text-center">Transactions</th>
                                                    <th scope="col" class="text-center">% Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h4 class="fs-16 fw-semibold mb-0">Safari Browser</h4>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <span class="fw-semibold">10853</span>
                                                            <div class="progress position-relative rounded-pill w-100 mx-3" role="progressbar" aria-label="Example with label" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar rounded-pill" style="width: 18%"></div>
                                                            </div>
                                                            <span class="count fs-14">18%</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-light text-center d-block"><span class="fw-semibold fs-15 fw-semibold text-body">43080 </span>(35%)</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold d-block">14.80% <i class="ri-arrow-up-s-fill"></i></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="fs-16 fw-semibold mb-0">UC Browser</h4>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <span class="fw-semibold">8075</span>
                                                            <div class="progress position-relative rounded-pill w-100 mx-3" role="progressbar" aria-label="Example with label" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar rounded-pill" style="width: 13%"></div>
                                                            </div>
                                                            <span class="count fs-14">13%</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-light text-center d-block"><span class="fw-semibold fs-15 fw-semibold text-body">5466 </span>(12%)</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold d-block">11.50% <i class="ri-arrow-up-s-fill"></i></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="fs-16 fw-semibold mb-0">Google Chrome</h4>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <span class="fw-semibold">59802</span>
                                                            <div class="progress position-relative rounded-pill w-100 mx-3" role="progressbar" aria-label="Example with label" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar rounded-pill" style="width: 38%"></div>
                                                            </div>
                                                            <span class="count fs-14">38%</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-light text-center d-block"><span class="fw-semibold fs-15 fw-semibold text-body">17654 </span>(19%)</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger bg-opacity-10 text-danger py-2 px-3 fw-semibold d-block">8.69% <i class="ri-arrow-down-s-fill"></i></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="fs-16 fw-semibold mb-0">Mozilla Firefox</h4>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <span class="fw-semibold">21854</span>
                                                            <div class="progress position-relative rounded-pill w-100 mx-3" role="progressbar" aria-label="Example with label" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar rounded-pill" style="width: 24%"></div>
                                                            </div>
                                                            <span class="count fs-14">24%</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-light text-center d-block"><span class="fw-semibold fs-15 fw-semibold text-body">87759 </span>(52%)</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold d-block">22.06% <i class="ri-arrow-up-s-fill"></i></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="fs-16 fw-semibold mb-0">Other Browser</h4>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <span class="fw-semibold">5907</span>
                                                            <div class="progress position-relative rounded-pill w-100 mx-3" role="progressbar" aria-label="Example with label" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar rounded-pill" style="width: 7%"></div>
                                                            </div>
                                                            <span class="count fs-14">7%</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-light text-center d-block"><span class="fw-semibold fs-15 fw-semibold text-body">4576 </span>(10%)</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger bg-opacity-10 text-danger py-2 px-3 fw-semibold d-block">16.25% <i class="ri-arrow-down-s-fill"></i></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-sm-flex justify-content-between align-items-center text-center">
                                        <span class="fs-14">Showing 1 To 5 Of 20 Entries</span>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link icon" href="analytics.html" aria-label="Previous">
                                                        <i data-feather="arrow-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link active" href="analytics.html">1</a></li>
                                                <li class="page-item"><a class="page-link" href="analytics.html">2</a></li>
                                                <li class="page-item"><a class="page-link" href="analytics.html">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link icon" href="analytics.html" aria-label="Next">
                                                        <i data-feather="arrow-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Terminals</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <ul class="ps-0 mb-0 list-unstyled terminals-chart position-relative text-center">
                                    <li class="earning position-relative">
                                        <div class="content position-absolute top-50 start-50 translate-middle">
                                            <h3 class="text-white body-font fs-3 mb-0">$27632</h3>
                                            <span class="text-white fs-14">Monthly Earning</span>
                                        </div>
                                    </li>
                                    <li class="users position-absolute bottom-0 start-0">
                                        <div class="content position-absolute top-50 start-50 translate-middle">
                                            <h3 class="text-white body-font fs-3 mb-0">82.9k</h3>
                                            <span class="text-white fs-14">Users</span>
                                        </div>
                                    </li>
                                    <li class="inactive position-absolute bottom-0 start-50 translate-middle-x">
                                        <div class="content position-absolute top-50 start-50 translate-middle">
                                            <h3 class="text-white body-font fs-3 mb-0">0.9k</h3>
                                            <span class="text-white">Inactive</span>
                                        </div>
                                    </li>
                                </ul>

                                <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center align-items-center terminals-legend">
                                    <li>Monthly Earning</li>
                                    <li>Users</li>
                                    <li>Inactive</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="row justify-content-center">
                    <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4 pb-0">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Sessions Device</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <ul class="ps-0 mb-0 list-unstyled sessions-content sessions ">
                                    <li class="d-flex justify-content-between align-items-center border-bottom border-color-gray2 pb-3 mb-3">
                                        <div>
                                            <span class="d-block fs-14 d-block mb-2">Mobile</span>
                                            <span class="fw-semibold fs-15 text-dark">36,868</span>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="flaticon-bar-chart-4 text-gray-light"></i>
                                            <span class="ms-2">40%</span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="d-block fs-14 d-block mb-2">Laptop</span>
                                            <span class="fw-semibold fs-15 text-dark">9,502</span>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="flaticon-bar-chart-4 text-gray-light"></i>
                                            <span class="ms-2">60%</span>
                                        </div>
                                    </li>
                                </ul>

                                <div id="sessions_device"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4 pb-0">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">New Vs. Returning</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <ul class="ps-0 mb-0 list-unstyled sessions-content new">
                                    <li class="d-flex justify-content-between align-items-center border-bottom border-color-gray2 pb-3 mb-3">
                                        <div>
                                            <span class="d-block fs-14 d-block mb-2">New</span>
                                            <span class="fw-semibold fs-15 text-dark">65,800</span>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="flaticon-bar-chart-4 text-gray-light"></i>
                                            <span class="ms-2">75%</span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="d-block fs-14 d-block mb-2">Returning</span>
                                            <span class="fw-semibold fs-15 text-dark">12,082</span>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="flaticon-bar-chart-4 text-gray-light"></i>
                                            <span class="ms-2">25%</span>
                                        </div>
                                    </li>
                                </ul>

                                <div id="new_vs_returning"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4 pb-0">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Language</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <ul class="ps-0 mb-0 list-unstyled sessions-content language">
                                    <li class="d-flex justify-content-between align-items-center border-bottom border-color-gray2 pb-3 mb-3">
                                        <div>
                                            <span class="d-block fs-14 d-block mb-2">English</span>
                                            <span class="fw-semibold fs-15 text-dark">12,090</span>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="flaticon-bar-chart-4 text-gray-light"></i>
                                            <span class="ms-2">74%</span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="d-block fs-14 d-block mb-2">Other</span>
                                            <span class="fw-semibold fs-15 text-dark">10,987</span>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="flaticon-bar-chart-4 text-gray-light"></i>
                                            <span class="ms-2">26%</span>
                                        </div>
                                    </li>
                                </ul>

                                <div id="language"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4 pb-0">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Gender</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <ul class="ps-0 mb-0 list-unstyled sessions-content gender">
                                    <li class="d-flex justify-content-between align-items-center border-bottom border-color-gray2 pb-3 mb-3">
                                        <div>
                                            <span class="d-block fs-14 d-block mb-2">Male</span>
                                            <span class="fw-semibold fs-15 text-dark">46,862</span>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="flaticon-bar-chart-4 text-gray-light"></i>
                                            <span class="ms-2">55%</span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="d-block fs-14 d-block mb-2">Female</span>
                                            <span class="fw-semibold fs-15 text-dark">32,980</span>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="flaticon-bar-chart-4 text-gray-light"></i>
                                            <span class="ms-2">45%</span>
                                        </div>
                                    </li>
                                </ul>

                                <div id="gender"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4 pb-0">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Visitors Age</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <ul class="ps-0 mb-0 list-unstyled sessions-content visitors">
                                    <li class="d-flex justify-content-between align-items-center border-bottom border-color-gray2 pb-3 mb-3">
                                        <div>
                                            <span class="d-block fs-14 d-block mb-2">Under 18</span>
                                            <span class="fw-semibold fs-15 text-dark">11,098</span>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="flaticon-bar-chart-4 text-gray-light"></i>
                                            <span class="ms-2">40%</span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="d-block fs-14 d-block mb-2">Above 18</span>
                                            <span class="fw-semibold fs-15 text-dark">35,098</span>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="flaticon-bar-chart-4 text-gray-light"></i>
                                            <span class="ms-2">65%</span>
                                        </div>
                                    </li>
                                </ul>

                                <div id="visitors_age"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Body Content Area -->

@endsection
