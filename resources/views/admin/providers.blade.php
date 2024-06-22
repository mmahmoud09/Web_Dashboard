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
<link href="{{asset('assets/css/providers.css')}}" rel="stylesheet">

<script src="{{asset('assets/js/providers.js')}}"></script>


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
					<a href="javascript:void(0)" class="closebtn"
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


                        <table id="myTable">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Service Name</th>
                                <th>Service Name Ar</th>
                                <th>Area</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Table rows will be dynamically added here -->
                            </tbody>
                        </table>
                        <h2 class="text-dark text-muted">Service Provider Counts</h2>
                        <table id="countTable">
                            <tr>
                                <th>Service ID</th>
                                <th>Service Name</th>
                                <th>Provider Count</th>
                            </tr>
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
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function(event) {
			feather.replace();
		});
	</script>
	<!-- <script type="text/javascript">
		new Chart(document.getElementById("bar-chart"), {
			type : 'bar',
			data : {
				labels : [ "Africa", "Asia", "Europe", "Latin America",
						"North America" ],
				datasets : [ {
					label : "Population (millions)",
					backgroundColor : [ "#3e95cd", "#e20a0a", "#3cba9f",
							"#0f00f5", "#08a012" ],
					data : [ 2478, 5267, 734, 784, 433 ]
				} ]
			},
			options : {
				legend : {
					display : false
				},
				title : {
					display : true,
					text : 'Predicted world population (millions) in 2050'
				}
			}
		});
	</script>

	<script type="text/javascript">
		new Chart(document.getElementById("line-chart"),
				{
					type : 'line',
					data : {
						labels : [ 1500, 1600, 1700, 1750, 1800, 1850, 1900,
								1950, 1999, 2050 ],
						datasets : [
								{
									data : [ 86, 114, 106, 106, 107, 111, 133,
											221, 783, 2478 ],
									label : "Africa",
									borderColor : "#0f00f5",
									fill : false
								},
								{
									data : [ 282, 350, 411, 502, 635, 809, 947,
											1402, 3700, 5267 ],
									label : "Asia",
									borderColor : "#e20a0a",
									fill : false
								},
								{
									data : [ 168, 170, 178, 190, 203, 276, 408,
											547, 675, 734 ],
									label : "Europe",
									borderColor : "#08a012",
									fill : false
								},
								{
									data : [ 40, 20, 10, 16, 24, 38, 74, 167,
											508, 784 ],
									label : "Latin America",
									borderColor : "#ff5e00",
									fill : false
								},
								{
									data : [ 6, 3, 2, 2, 7, 26, 82, 172, 312,
											433 ],
									label : "North America",
									borderColor : "#c45850",
									fill : false
								} ]
					},
					options : {
						title : {
							display : true,
							text : 'World population per region (in millions)'
						}
					}
				});
	</script>
	<script type="text/javascript">
		new Chart(document.getElementById("pie-chart"), {
			type : 'pie',
			data : {
				labels : [ "Africa", "Asia", "Europe", "Latin America",
						"North America" ],
				datasets : [ {
					label : "Population (millions)",
					backgroundColor : [ "#3e95cd", "#e20a0a", "#3cba9f",
							"#e8c3b9", "#0f00f5" ],
					data : [ 2478, 5267, 734, 784, 433 ]
				} ]
			},
			options : {
				title : {
					display : true,
					text : 'Predicted world population (millions) in 2050'
				}
			}
		});
	</script>

	<script type="text/javascript">
		new Chart(document.getElementById("radar-chart"), {
			type : 'radar',
			data : {
				labels : [ "Africa", "Asia", "Europe", "Latin America",
						"North America" ],
				datasets : [ {
					label : "1950",
					fill : true,
					backgroundColor : "rgba(179,181,198,0.2)",
					borderColor : "rgba(179,181,198,1)",
					pointBorderColor : "#fff",
					pointBackgroundColor : "rgba(179,181,198,1)",
					data : [ 8.77, 55.61, 21.69, 6.62, 6.82 ]
				}, {
					label : "2050",
					fill : true,
					backgroundColor : "rgba(255,99,132,0.2)",
					borderColor : "rgba(255,99,132,1)",
					pointBorderColor : "#fff",
					pointBackgroundColor : "rgba(255,99,132,1)",
					pointBorderColor : "#fff",
					data : [ 25.48, 54.16, 7.61, 8.06, 4.45 ]
				} ]
			},
			options : {
				title : {
					display : true,
					text : 'Distribution in % of world population'
				}
			}
		});
	</script>

	<script type="text/javascript">
		new Chart(document.getElementById("polar-chart"), {
			type : 'polarArea',
			data : {
				labels : [ "Africa", "Asia", "Europe", "Latin America",
						"North America" ],
				datasets : [ {
					label : "Population (millions)",
					backgroundColor : [ "#3e95cd", "#e20a0a", "#3cba9f",
							"#e8c3b9", "#c45850" ],
					data : [ 2478, 5267, 734, 784, 433 ]
				} ]
			},
			options : {
				title : {
					display : true,
					text : 'Predicted world population (millions) in 2050'
				}
			}
		});
	</script>

	<script type="text/javascript">
		new Chart(document.getElementById("doughnut-chart"), {
			type : 'doughnut',
			data : {
				labels : [ "Africa", "Asia", "Europe", "Latin America",
						"North America" ],
				datasets : [ {
					label : "Population (millions)",
					backgroundColor : [ "#00a7e4", "#0f00f5", "#08a012",
							"#e8c3b9", "#e20a0a" ],
					data : [ 2478, 5267, 734, 784, 433 ]
				} ]
			},
			options : {
				title : {
					display : true,
					text : 'Predicted world population (millions) in 2050'
				}
			}
		});
	</script>

	<script type="text/javascript">
		new Chart(document.getElementById("bar-chart-horizontal"), {
			type : 'horizontalBar',
			data : {
				labels : [ "Africa", "Asia", "Europe", "Latin America",
						"North America" ],
				datasets : [ {
					label : "Population (millions)",
					backgroundColor : [ "#0f00f5", "#e20a0a", "#3cba9f",
							"#e8c3b9", "#08a012" ],
					data : [ 2478, 5267, 734, 784, 433 ]
				} ]
			},
			options : {
				legend : {
					display : false
				},
				title : {
					display : true,
					text : 'Predicted world population (millions) in 2050'
				}
			}
		});
	</script>

	<script type="text/javascript">
		new Chart(document.getElementById("bar-chart-grouped"), {
			type : 'bar',
			data : {
				labels : [ "1900", "1950", "1999", "2050" ],
				datasets : [ {
					label : "Africa",
					backgroundColor : "#0f00f5",
					data : [ 133, 221, 783, 2478 ]
				}, {
					label : "Europe",
					backgroundColor : "#08a012",
					data : [ 408, 547, 675, 734 ]
				} ]
			},
			options : {
				title : {
					display : true,
					text : 'Population growth (millions)'
				}
			}
		});
	</script>

	<script type="text/javascript">
		new Chart(document.getElementById("mixed-chart"), {
			type : 'bar',
			data : {
				labels : [ "1900", "1950", "1999", "2050" ],
				datasets : [ {
					label : "Europe",
					type : "line",
					borderColor : "#08a012",
					data : [ 408, 547, 675, 734 ],
					fill : false
				}, {
					label : "Africa",
					type : "line",
					borderColor : "#0f00f5",
					data : [ 133, 221, 783, 2478 ],
					fill : false
				}, {
					label : "Europe",
					type : "bar",
					backgroundColor : "rgba(0,0,0,0.2)",
					data : [ 408, 547, 675, 734 ],
				}, {
					label : "Africa",
					type : "bar",
					backgroundColor : "rgba(0,0,0,0.2)",
					backgroundColorHover : "#3e95cd",
					data : [ 133, 221, 783, 2478 ]
				} ]
			},
			options : {
				title : {
					display : true,
					text : 'Population growth (millions): Europe & Africa'
				},
				legend : {
					display : false
				}
			}
		});
	</script>

	<script type="text/javascript">
		new Chart(document.getElementById("bubble-chart"), {
			type : 'bubble',
			data : {
				labels : "Africa",
				datasets : [ {
					label : [ "China" ],
					backgroundColor : "rgba(255,221,50,0.2)",
					borderColor : "rgba(255,221,50,1)",
					data : [ {
						x : 21269017,
						y : 5.245,
						r : 15
					} ]
				}, {
					label : [ "Denmark" ],
					backgroundColor : "rgba(60,186,159,0.2)",
					borderColor : "rgba(60,186,159,1)",
					data : [ {
						x : 258702,
						y : 7.526,
						r : 10
					} ]
				}, {
					label : [ "Germany" ],
					backgroundColor : "rgba(0,0,0,0.2)",
					borderColor : "#000",
					data : [ {
						x : 3979083,
						y : 6.994,
						r : 15
					} ]
				}, {
					label : [ "Japan" ],
					backgroundColor : "rgba(193,46,12,0.2)",
					borderColor : "rgba(193,46,12,1)",
					data : [ {
						x : 4931877,
						y : 5.921,
						r : 15
					} ]
				} ]
			},
			options : {
				title : {
					display : true,
					text : 'Predicted world population (millions) in 2050'
				},
				scales : {
					yAxes : [ {
						scaleLabel : {
							display : true,
							labelString : "Happiness"
						}
					} ],
					xAxes : [ {
						scaleLabel : {
							display : true,
							labelString : "GDP (PPP)"
						}
					} ]
				}
			}
		});
	</script> -->


</body>

</html>
