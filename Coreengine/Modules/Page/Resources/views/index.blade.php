@extends('layouts.backend.master')

@section('title', 'Manage Content Web')
@section('menu', 'Manage Content Web')
@section('submenu', 'Halaman Web')
@section('submenu2', '')

@section('content')
<div class="col-md-12">
		@if ($errors->any())
			<div class="alert alert-danger">
					<ul>
							@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
							@endforeach
					</ul>
			</div>
		@endif
    <div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title"><i class="icon-newspaper"></i> Halaman Web</h5>
						<div class="header-elements">

						@if($role['insert'] == "TRUE")
							<a href="{{ route('cms.pages.create') }}" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round btn-class"><b><i class="icon-plus3"></i></b> Tambah</a>
						@endif
							{{-- <div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div> --}}
	              </div>
					</div>

					<div class="card-body">
						
					</div>

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Gambar</th>
									<th>Judul</th>
									<th>Publish</th>
									<th>Created at</th>
									<th>By</th>
									<th class="text-center" style="width: 123px;"><i class="icon-menu-open2"></i></th>
								</tr>
							</thead>
							<tbody>
								@foreach($pages as $page)
									<tr>
									<td><img src="{{ asset($page->file_foto) }}" alt="" width="100" height=70></td>
										<td>{{ $page->pages_name }}</td>
										<td>{{ $page->publish }}</td>
										<td>{{ $page->created_at }}</td>
										<td>{{ $page->create_author }}</td>
										<td class="text-center" style="display: inline-block">
												<a href="{{ route('cms.page.edit', ['id' => $page->id]) }}" class="btn bg-success-400 btn-icon rounded-round"><i class="icon-pencil7"></i></a>     

												<form method="POST" action="{{ route('cms.page.delete', ['id' => $page->id]) }}" style="float:left;margin-right: 10px;">
														{!! csrf_field() !!}
														<button onclick="return confirm('Apakah anda yakin?')" type="submit" class="btn bg-danger-400 btn-icon rounded-round">
																<i class="icon-trash"></i>
														</button>
										</form>
												
										</td>
									</tr>
								@endforeach

								<tr>
									<td  colspan="8">
											{{ $pages->links() }}
								
									</td>
								</tr>
							
								
						
							</tbody>

					
						</table>

						
						<br>
					</div>
				</div>
		</div>
@stop

@section('script')
	

@stop
