<!doctype html>

<html lang="en" class="h-100">

<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/Logo (1).png')}}">
<title>NS-dashboard</title>
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/addproviders.css')}}" rel="stylesheet">

<script src="{{asset('assets/js/addproviders.js')}}"></script>


</head>

<body class="d-flex flex-column h-100">
	<div id="page">

		<div class="wrapper">

			<nav id="sidebar" class="active">

				<div class="sidebar-header text-center">
					<img src="{{asset('assets/img/Logo (1).png')}}" alt="logo" class="app-logo">
					<h4 class="sidebar-title theme-item">NS</h4>
				</div>

				<ul class="list-unstyled components text-secondary">
					<li><a href="{{Route('admin.index')}}"><i
							class="data-feather theme-item" data-feather="home"></i> <span
							class="theme-item"> Dashboard</span></a></li>

					<li><a href="{{Route('admin.providers')}}"><i
							class="data-feather theme-item" data-feather="users"></i> <span
							class="theme-item"> Providers</span></a></li>
					<li><a href="{{Route('admin.services')}}"><i
							class="data-feather theme-item" data-feather="grid"></i> <span
							class="theme-item"> Services</span></a></li>
					<li><a href="{{Route('admin.users')}}"><i
							class="data-feather theme-item" data-feather="user"></i> <span
							class="theme-item"> Users</span></a></li>
					<li><a href="{{Route('admin.addservices')}}"><i class="data-feather theme-item"
							data-feather="settings"></i> <span class="theme-item">Add Service</span></a></li>
					<li><a href="{{Route('admin.addproviders')}}"><i
							class="data-feather theme-item" data-feather="plus"></i> <span
							class="data-feather theme-item"> Add Providers</span></a></li>
                    <li><a href="{{Route('admin.requests')}}"><i
                                class="data-feather theme-item" data-feather="dollar-sign"></i> <span
                                class="data-feather theme-item">Requests</span></a></li>
                </ul>

			</nav>

			<div id="bodywrapper" class="container-fluid showhidetoggle">

				<nav class="navbar navbar-expand-md navbar-white bg-white py-0"
					aria-label="navbarexample" id="navbar">
					<div class="container-fluid">
						<button type="button" id="sidebarCollapse"
							class="btn btn-light py-0">
							<i data-feather="menu"></i> <span></span>
						</button>
						<img src="{{asset('assets/img/Logo (1).png')}}" alt="logo"
							class="app-logo theme-item mx-2 navbrandarea1">
						<h4 class="sidebar-title theme-item mt-2 navbrandarea2">NS</h4>
						<button class="navbar-toggler py-0" type="button"
							data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
							aria-controls="navbarsExample04" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"><i data-feather="menu"></i></span>
						</button>

						<div class="collapse navbar-collapse mx-1" id="navbarsExample04">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">

								<li class="nav-item"><div class="nav-dropdown">
										<a class="nav-item nav-link active text-secondary py-0"
											aria-current="page" href="{{Route('admin.index')}}"><i
											class="data-feather theme-item" data-feather="home"></i> <span
											class="theme-item">Home </span></a>
									</div></li>

							</ul>



							<div class="usermenu">
								<div class="nav-dropdown py-0">
									<a href="#"
										class="nav-item nav-link dropdown-toggle text-secondary py-0"
										id="navbarDropdown3" role="button" data-bs-toggle="dropdown"
										aria-expanded="false"> <img class="theme-item user-avatar"
										src="{{asset('assets/img/earth.svg')}}" alt="User image"> <!--<i class="theme-item" -->
										<!--data-feather="user"></i> --> <span class="theme-item">Admin
											</span><i class="theme-item" data-feather="chevron-down"></i></a>
									<ul class="dropdown-menu dropdown-menu-end"
										aria-labelledby="navbarDropdown3">
										<!-- <li><a href="profile.html" class="dropdown-item mt-2"><i
												class="data-feather" data-feather="user"></i> Profile</a></li> -->

										<li><a href="#" class="dropdown-item mt-2"
											data-bs-toggle="modal" data-bs-target="#settingsModal"><i
												class="data-feather" data-feather="settings"></i> Settings</a></li>
										<!-- <li><a href="#" class="dropdown-item mt-2"><i
												class="data-feather" data-feather="log-out"></i> Logout</a></li> -->
									</ul>
								</div>
							</div>

						</div>
					</div>
				</nav>


				<div class="settings">
					<div class="modal fade" id="settingsModal"
						aria-labelledby="settingsModalTitle" aria-hidden="true"
						tabindex="-1">
						<!-- 				 data-bs-backdrop="static" data-bs-keyboard="false" -->
						<div class="modal-dialog modal-dialog-settings">
							<div class="modal-content">
								<div class="modal-header text-center">
									<h5 class="modal-title" id="exampleModalLabel">Settings</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">

									<section id="logincontent" class="shiftdown">

										<div class="row g-1 mb-1 mt-1">

											<div class="col-md-6">
												<h6 class="text-muted">Select Color</h6>
												<span onclick="changeColor('0')"
													class="btn btn-sm btn-primary rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('1')"
													class="btn btn-sm btn-success rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('2')"
													class="btn btn-sm btn-danger rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('3')"
													class="btn btn-sm btn-warning rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('4')"
													class="btn btn-sm btn-secondary rounded-circle"><span
													class="me-2"></span></span>

											</div>

										</div>
										<div class="row g-3 mb-3 mt-3">

											<div class="col-md-6">
												<h6 class="text-muted">View Size</h6>
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="flexRadioDefault" id="radioCompactView"> <label
														class="form-check-label" for="radioCompactView">
														Compact</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="flexRadioDefault" id="radioFullView"> <label
														class="form-check-label" for="radioFullView">
														Full-screen </label>
												</div>
											</div>
										</div>
										<hr />
										<button class="btn btn-sm btn-danger" data-bs-dismiss="modal"
											type="button">
											<i data-feather="check-circle" class="mr-1"></i> Ok
										</button>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="sidebarOverlayNav" class="screen-overlay float-end">
					<a href="{{asset('javascript:void(0)')}}" class="closebtn"
						onclick="closeOverlayNav()">&times;</a>
					<div class="screen-overlay-content text-secondary">
						<a href="#" class="active">About</a> <a href="#">Services</a> <a
							href="#">Clients</a> <a href="#">Contact</a>
					</div>
				</div>





				<div class="content">
					<div class="container-fluid">
						<div class="row mt-2">
							<div class="col-md-6 float-start">
								<h4 class="m-0 text-dark text-muted">Providers</h4>
							</div>

						</div>

                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">

                                {{ session('success') }}

                            </div>
                        @endif
						<table id="myTable" style="width: 100%">
							<form action="">
								<thead>
									<tr>
										<th>Id</th>
										<th>Name</th>
										<th>address</th>
										<th>Email</th>
										<th>Mobile Phone</th>
										<th>service</th>
										<th>personal photo</th>
										<th>operation</th>
									</tr>
								</thead>
								<tbody>
                                    @if($providers)
                                        @foreach ($providers as $provider)
									<tr>
										<td>{{$provider->id}}</td>
										<td>{{$provider->name}}</td>
										<td>{{$provider->location}}</td>
										<td>{{$provider->email}}</td>
										<td>{{$provider->phone_number}}</td>
										<td>{{$provider->service}}</td>
										<td id="image-td" >
                                            <div >
                                                <img src="{{asset($provider->picture)}}" id="thumbnail" alt="">

                                            </div>
                                        </td>

										<td>
                                            <div>
                                                <a href="{{route('admin.confirm')}}" class="confirm">Confirm</a>
                                                <a href="{{route('admin.reject',$provider->id)}}" class="reject  ">Reject</a>
                                            </div>
                                        </td>
									</tr>
                                    <div id="myModal" class="modal">
                                        <span class="close">&times;</span>
                                        <img class="modal-content" id="img01">
                                    </div>

                                    @endforeach
                                    @endif

								</tbody>

							</form>
						</table>

					</div>

				</div>

			</div>

		</div>
	</div>
	<footer class="footer container mt-auto py-1">
		<div
			class="d-sm-flex justify-content-center justify-content-sm-between">
			<span
				class="text-muted d-block text-center text-sm-left d-sm-inline-block">
				Copyright © N-S <script>
					document.write(new Date().getFullYear())
				</script>
			</span> <span
				class="float-none text-muted float-sm-right d-block mt-1 mt-sm-0 text-center">
				N-S dashboard
			</span>
		</div>
	</footer>
	<div id="loading" class="spinner-border text-primary align-middle"
		role="status"></div>

	<button class="btn btn-sm btn-primary rounded-circle"
		onclick="scrollToTopFunction()" id="scrollToTop" title="Scroll to top">
		<i data-feather="arrow-up-circle"></i>
	</button>



	<script src="{{asset('assets/js/feather.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/js/Chart.min.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>
	<script src="{{asset('assets/js/addproviders.js')}}"></script>
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function(event) {
			feather.replace();
		});
	</script>




</body>

</html>
