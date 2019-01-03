@extends('adminlte::layouts.app')
@section('main-content')
<!-- Main content -->

	<div class="box">
		<div class="box-header">
			<div class="row">
				<div class="col-sm-12">
					<div class="btn-group pull-right">
						<button id="limpiar" type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevoProducto"><span class="glyphicon glyphicon-plus" ></span> Nueva Sede</button>
					</div>
					<h3 class="box-title"><i class='fa fa-home'>&nbsp;</i>Listado de sedes</h3>
				</div>
				<div class="col-sm-4">

				</div>

				<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel-body">
								<div class="table-responsive">
									<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
										<thead>
											<tr role="row">

												<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">Nombre</th>
												<th  class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Dirección</th>
												<th class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Teléfono </th>
												<th class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Birthdate: activate to sort column ascending">WPágina web</th>
												<th  class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="HiredDate: activate to sort column ascending">Email</th>
												
											</tr>
										</thead>
										<tbody>
											@foreach ($sedes as $sede)
											<tr role="row" class="odd">

												<td class="sorting_1">{{ $sede->nombre}} </td>
												<td class="sorting_1">{{ $sede->direccion}} </td>
												<td class="sorting_1">{{ $sede->telefono}} </td>
												<td class="sorting_1">{{ $sede->web}} </td>
												<td class="sorting_1">{{ $sede->email}} </td>
												
											</tr>
											@endforeach
										</tbody>

									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5">
							<div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to entries</div>
						</div>
						<div class="col-sm-7">
							<div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.box-body -->
	</div>

<!-- /.content -->
@endsection
