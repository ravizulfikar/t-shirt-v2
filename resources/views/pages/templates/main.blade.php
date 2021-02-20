{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Image Templates
                    {{-- <div class="text-muted pt-2 font-size-sm">-</div> --}}
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                {{-- <div class="dropdown dropdown-inline mr-2">
                    <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>Export
                    </button>
                    <!--begin::Dropdown Menu-->
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <!--begin::Navigation-->
                        <ul class="navi flex-column navi-hover py-2">
                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="la la-print"></i>
                                                                </span>
                                    <span class="navi-text">Print</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="la la-copy"></i>
                                                                </span>
                                    <span class="navi-text">Copy</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="la la-file-excel-o"></i>
                                                                </span>
                                    <span class="navi-text">Excel</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="la la-file-text-o"></i>
                                                                </span>
                                    <span class="navi-text">CSV</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                                                <span class="navi-icon">
                                                                    <i class="la la-file-pdf-o"></i>
                                                                </span>
                                    <span class="navi-text">PDF</span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                    <!--end::Dropdown Menu-->
                </div> --}}
                <!--end::Dropdown-->
               <!--begin::Button-->

			   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
				<span class="svg-icon svg-icon-md">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24"/>
							<circle fill="#000000" cx="9" cy="15" r="6"/>
							<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
				New Record
			</button>
			<!--end::Button-->
			<!-- Modal-->
			<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah Template Gambar</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<i aria-hidden="true" class="ki ki-close"></i>
							</button>
						</div>
						<div class="modal-body">
							<form id="my-form" method="post" enctype="multipart/form-data" action="{{Route('store_templ')}}">

							@csrf

								<div class="form-group" >
									<label>Nama</label>
									<input type="text" class="form-control" name="name_templ"/>
								</div>
								

								<div class="form-group">
									<label>Gambar</label>
									<div></div>
									<div class="image-input image-input-outline" id="kt_image_1">
										<div class="image-input-wrapper" style="background-image: url(media/users/blank.png)"></div>
										
										<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
											<i class="fa fa-pen icon-sm text-muted"></i>
											<input type="file" name="img_templ" accept=".png, .jpg, .jpeg"/>
											<input type="hidden" name="img_templ_remove"/>
										</label>
										
										<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
											<i class="ki ki-bold-close icon-xs text-muted"></i>
										</span>
									</div>
								</div>
									
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
							<button type="submit" form="my-form" class="btn btn-primary font-weight-bold">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<!--end::Modal-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query"/>
                                    <span>
                                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                                </span>
                                </div>
                            </div>
                            {{-- <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                    <select class="form-control" id="kt_datatable_search_status">
                                        <option value="">All</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Delivered</option>
                                        <option value="3">Canceled</option>
                                        <option value="4">Success</option>
                                        <option value="5">Info</option>
                                        <option value="6">Danger</option>
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                    <select class="form-control" id="kt_datatable_search_type">
                                        <option value="">All</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                    </div> --}}
                </div>
            </div>
            <!--end::Search Form-->
            <!--end: Search Form-->
            <!--begin: Datatable-->
            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                <thead>
                <tr>
                    <th title="Field #1">Nama</th>
                    <th title="Field #2">Images Template</th>
                    <th title="Field #3">Aksi</th>
                    {{-- <th title="Field #4">Color</th>
                    <th title="Field #5">Deposit Paid</th>
                    <th title="Field #6">Order Date</th>
                    <th title="Field #7">Status</th>
                    <th title="Field #8">Type</th> --}}
                </tr>
                </thead>
                <tbody>
					@foreach($data as $row)
					<tr>
						<td>
							{{$row->name}}
						</td>
						<td>
							<div class="image-input image-input-outline">
								<div class="image-input-wrapper" style="background-image: url(media/upload/template/{{$row->image}})"></div>
							</div>
						</td>
						<td>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditData-{{$row->id}}">
								<i class="fa fa-edit"></i>
							</button>

							<a href="{{Route('delete_templ', $row->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					</tr>

					<div class="modal fade" id="EditData-{{$row->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Edit Template</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<i aria-hidden="true" class="ki ki-close"></i>
									</button>
								</div>
								<div class="modal-body">
									<form method="POST" enctype="multipart/form-data" action="{{Route('update_templ', $row->id)}}">
										@csrf
										
										<div class="form-group" >
											<label>Nama Template</label>
											<input type="text" class="form-control" name="name_templ" value="{{ $row->name }}"/>
										</div>

										<div class="form-group">
											<label>Gambar</label>
											<div></div>
											<div class="image-input image-input-outline" id="kt_image_edit_{{$row->id}}">
												<div class="image-input-wrapper" style="background-image: url(media/upload/template/{{$row->image}})"></div>
												
												<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
													<i class="fa fa-pen icon-sm text-muted"></i>
													<input type="file" name="img_templ" accept=".png, .jpg, .jpeg"/>
													<input type="hidden" name="img_templ_remove"/>
												</label>
												
												<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
													<i class="ki ki-bold-close icon-xs text-muted"></i>
												</span>
											</div>
										</div>
										
										<button type="submit" name="button" class="btn btn-success btn-block">Update</button>
									</form>
								</div>
								{{-- <div class="modal-footer">
									<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
								</div> --}}
							</div>
						</div>
					</div>
					@endforeach
                {{-- <tr>
                    <td>0006-3629</td>
                    <td>Land Rover</td>
                    <td>Range Rover</td>
                    <td>Orange</td>
                    <td>$22672.60</td>
                    <td>2016-11-28</td>
                    <td align="right">3</td>
                    <td align="right">3</td>
                </tr> --}}
                
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>

@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
	<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
	<script>
		var avatar1 = new KTImageInput('kt_image_1');
		@foreach($data as $js)
			var avatar_{{$js->id}} = new KTImageInput('kt_image_edit_{{$js->id}}');
		@endforeach
	</script>
@endsection
