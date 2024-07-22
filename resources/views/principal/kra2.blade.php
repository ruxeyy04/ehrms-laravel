<x-app-layout>
  <div class="container-fluid">
    <!-- Page title & breadcrumb -->
    <x-breadcrumb/>
    <div class="row">
	<div class="fx-card card-default product-list">
							<div class="fx-card-content ">
					<div class="col-md-12">
					<a href="{{ route('principal.opcrf')}}"><button type="button" class="btn btn-secondary btn-sm mb-3"><i class="ri-arrow-go-back-line"></i> back</button></a>
								<div class="table-responsive">
									<table id="product_list" class="table" style="width:100%">
										<thead>
											<tr>
												<th>Objective No.</th>
												<th>Objectives</th>
												<th>Weight</th>
												<th>Action</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>2.1</td>
												<td>2.1 Supplemented and reinforced teachers’ teaching and learners’ learning by establishing and maintaining a functional School Learning Resource Center (SLRC) with available digitized and printed Learning Resources (LRs) in all learning areas, for all grade levels, per grading period.</td>
												<td>.05</td>
												<td>
													<div class="d-flex justify-content-center">
														<button type="button"
															class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static">
															<span class="sr-only"><i
																	class="ri-settings-3-line"></i></span>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Edit</a>
															<a class="dropdown-item" href="#">Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>2.2</td>
												<td>2.2 Implemented Project CAre for Nor-Min Readers by SY 2019-2020.</td>
												<td>.02</td>
												<td>
													<div class="d-flex justify-content-center">
														<button type="button"
															class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static">
															<span class="sr-only"><i
																	class="ri-settings-3-line"></i></span>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Edit</a>
															<a class="dropdown-item" href="#">Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>2.3</td>
												<td>2.3 Established a safe, secure and friendly learning environment through consistent implementation of policies, guidelines and procedures as stipulated in DepEd Orders, Memoranda during the SY (2019-2020). • SBM • DRRM • CPP • OK sa DepEd</td>
												<td>.06</td>
												<td>
													<div class="d-flex justify-content-center">
														<button type="button"
															class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static">
															<span class="sr-only"><i
																	class="ri-settings-3-line"></i></span>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Edit</a>
															<a class="dropdown-item" href="#">Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>2.4</td>
												<td>2.4 Ensured the safety of learners by conducting school building/classroom inspection / inventory at least twice within SY 2019-2020 and school-based repair and rehabilitation (major/minor).</td>
												<td>.04</td>
												<td>
													<div class="d-flex justify-content-center">
														<button type="button"
															class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static">
															<span class="sr-only"><i
																	class="ri-settings-3-line"></i></span>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Edit</a>
															<a class="dropdown-item" href="#">Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>2.5</td>
												<td>2.5 Established and implemented clear property accountability and supply management system in the school for an equitable and transparent distribution and utilization of materials, supply and equipment during SY 2019-2020.</td>
												<td>.03</td>
												<td>
													<div class="d-flex justify-content-center">
														<button type="button"
															class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static">
															<span class="sr-only"><i
																	class="ri-settings-3-line"></i></span>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Edit</a>
															<a class="dropdown-item" href="#">Delete</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
</div>
</x-app-layout>