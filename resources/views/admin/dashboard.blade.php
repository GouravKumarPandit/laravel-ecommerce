@extends('admin/layout')
@section('page_title','Dashboard')
@section('dashboard_select','active')
@section('container')

<div class="row">
    <h1>Dashboard</h1>
</div>

<div class="row bg-white shadow-sm pt-4 mx-1 mt-4">
    <div class="col-md-4 mb-3">
        <div class="row ml-3">
            <div class="rounded ms-3" style="background-color: #fef9c1; width: 2.5rem !important; height: 2.5rem !important; display:flex; justify-content:center; align-items:center;">
                <i class="bi bi-people text-warning" style="font-size: 25px !important;"></i>
            </div>
            <div class="col-9">
                <div style="font-size: 15px !important; margin: 0px !important; padding: 0; line-height: 1em; color:rgb(54, 54, 54)">Customers</div>
                <div style="font-size: 22px !important; margin: 0px !important; padding: 0; line-height: 1.4em;" id="allOpenLeadsCount" class="fw-bolder" >@if($allCustomers){{$allCustomers}}@else 0 @endif</div>
            </div>
        </div>
        <div class="row ml-3">
            <p class="ps-3 text-muted">All Customer</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="rounded ms-3" style="background-color: #cce0ff; width: 2.5rem !important; height: 2.5rem !important; display:flex; justify-content:center; align-items:center;">
                <i class="bi bi-bag-fill text-primary" style="font-size: 25px !important;"></i>
            </div>
            <div class="col-9">
                <div style="font-size: 15px !important; margin: 0px !important; padding: 0; line-height: 1em; color:rgb(54, 54, 54)">Orders</div>
                <div style="font-size: 22px !important; margin: 0px !important; padding: 0; line-height: 1.4em;" id="allOpenStudentCount" class="fw-bolder" >@if($allOrders){{$allOrders}}@else 0 @endif</div>
            </div>
        </div>
        <div class="row">
            <p class="ps-3 text-muted">All Orders</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="rounded ms-3" style="background-color: rgb(222,246,254); width: 2.5rem !important; height: 2.5rem !important; display:flex; justify-content:center; align-items:center;">
                <i class="bi bi-card-checklist" style="font-size: 25px !important; color: rgb(0, 153, 204);"></i>
            </div>
            <div class="col-9">
                <div style="font-size: 15px !important; margin: 0px !important; padding: 0; line-height: 1em; color:rgb(54, 54, 54)">Products</div>
                <div style="font-size: 22px !important; margin: 0px !important; padding: 0; line-height: 1.4em;" id="allOpenApplicationCount" class="fw-bolder" >@if($allProducts){{$allProducts}}@else 0 @endif</div>
            </div>
        </div>
        <div class="row">
            <p class="ps-3 text-muted">All Products</p>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="shadow-sm border rounded py-2 px-2 h-100 bg-white px-4 pt-4">
            <h4 style="font-size: 14px !important; font-weight: bold;">Customers</h4>
            <canvas id="customersCreatedChart"></canvas>
            <p class="text-center text-muted pb-0 pt-3 mb-0" style="font-size: 12px !important;">Last 14 Days</p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="shadow-sm border rounded py-2 px-2 h-100 bg-white px-4 pt-4">
            <h4 style="font-size: 14px !important; font-weight: bold;">Orders</h4>
            <canvas id="ordersCreatedChart"></canvas>
            <p class="text-center text-muted pb-0 pt-3 mb-0" style="font-size: 12px !important;">Last 14 Days</p>
        </div>
    </div>
</div>

@endsection


@push('after-scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
	//FOR CUSTOMER CHARTS
	const ctx1 = document.getElementById('customersCreatedChart');
    new Chart(ctx1, {
        // type: 'line',
        type: 'bar',
        data: {
            labels: [{!!implode(",", $customers_created_labels)!!}],
            datasets: [{
				label: 'Customers',
                data: [{!!implode(",", $customers_created_data)!!}],
				borderWidth: 0,
                barThickness: 10,
                borderRadius: 5,
                borderSkipped: false,
				backgroundColor: "rgb(23,162,184)",
				borderColor: "rgb(23,162,184))",
				hoverBackgroundColor: "rgb(23,162,184)",
				pointStyle: 'circle',
				pointRadius: 2,
				fill: true,
				pointHoverRadius: 6,
				tension: 0.5
            }]
        },
        options: {
            scales: {
				x: {
					grid: {
						display: false,
					}
				},
                y: {
                    beginAtZero: true,	
					grid: {
						display: false,
					}			
                }
            },
			plugins: {
				legend: {
					display: false
				}
			}
        }
    });

    //FOR ORDERS CHARTS
	const ctx2 = document.getElementById('ordersCreatedChart');
    new Chart(ctx2, {
        // type: 'line',
        type: 'bar',
        data: {
            labels: [{!!implode(",", $orders_created_labels)!!}],
            datasets: [{
				label: 'Orders',
                data: [{!!implode(",", $orders_created_data)!!}],
				borderWidth: 0,
                barThickness: 10,
                borderRadius: 5,
                borderSkipped: false,
				backgroundColor: "rgb(23,162,184)",
				borderColor: "rgb(23,162,184))",
				hoverBackgroundColor: "rgb(23,162,184)",
				pointStyle: 'circle',
				pointRadius: 2,
				fill: true,
				pointHoverRadius: 6,
				tension: 0.5
            }]
        },
        options: {
            scales: {
				x: {
					grid: {
						display: false,
					}
				},
                y: {
                    beginAtZero: true,	
					grid: {
						display: false,
					}			
                }
            },
			plugins: {
				legend: {
					display: false
				}
			}
        }
    });

</script>
@endpush