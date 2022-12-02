<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="" />
	<title></title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!-- end::Fonts -->

	<!-- begin::Bootstrap styles -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<!-- end::Bootstrap -->

	<!-- begin::font awesome -->
	<script src="https://kit.fontawesome.com/596c814fba.js" crossorigin="anonymous"></script>
	<!-- end::font awesome -->

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-toolbar-enabled="true" class="app-default">

	<div id="app_container">
		<!-- Begin::your code -->

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUiDemo">
			Click to launch Modal
		</button>

		<!-- Modal -->
		<div class="container-fluid">
			<div class="modal fade modal-xl" id="modalUiDemo" tabindex="-1" aria-labelledby="modalUiDemo" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable rounded">
					<div class="modal-content">

						<!-- no modal header -->

						<div class="modal-body">
							<!-- begin::header -->
							<div class="row bg-info">
								<div class="col-md-6 py-3">
									<span class="">PREVIEW</span>
								</div>
								<div class="col-md-6 py-3 border-start">
									<span class="">ACTIVITY</span>
								</div>
							</div>
							<!-- end:header -->



							<!-- begin:Content (2 columns) -->
							<div class="row mt-5">
								<div class="col-md-6">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-3">
													<i class="fa-solid fa-arrow-left"></i>
												</div>
												<div class="col-md-6">

												</div>
												<div class="col-md-3">
													<i class="fa-solid fa-arrow-right"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">

									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>




		<!-- end::Modal -->

		<div class="text-center mt-4 pt-5">
			This page Worked
		</div>

		<!-- End::your code -->
	</div>

	<!--begin::Javascript-->
	<script src="../js/bootstrap.bundle.js"></script>
	<!-- end::Javascript -->
</body>
<!--end::Body-->

</html>