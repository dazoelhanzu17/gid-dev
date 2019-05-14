@extends('layouts.backend.master')

@section('title', 'Manage Galery')
@section('menu', 'Manage Galery')
@section('submenu', 'Galeri Photo')
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
						<h5 class="card-title"><i class="icon-images3"></i> Album Photo</h5>
						<div class="header-elements">

						@if($role['insert'] == "TRUE")
							<a href="{{ route('album_photo.create_album') }}" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round btn-class"><b><i class="icon-plus3"></i></b> Tambah</a>
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
                                    <th class="text-center">No</th>
									<th>Nama Album</th>
									<th class="text-center">Publish</th>
									<th>Created at</th>
									<th class="text-center">By</th>
									<th class="text-center" style="width: 162px;"><i class="icon-menu-open2"></i></th>
								</tr>
							</thead>
							<tbody>
                                @php    
                                    $no =1 ;
                                @endphp
								@foreach($album_photos as $album)
									<tr>
                                        <td class="text-center">{{ $no++ }}</td>
										<td>{{ substr($album->albumphoto_name, 0, 50) }} </td>
										<td class="text-center">{{ $album->publish }}</td>
										<td>{{ $album->created_at }}</td>
										<td class="text-center">{{ $album->create_author }}</td>
										<td class="text-center" style="display: inline-block">
                                                
												<a href="{{ route('album_photo.image_galleries', ['id' => $album->id]) }}" class="btn bg-info-400 btn-icon rounded-round" style="float: left;margin-right: 3px;"><i class="icon-images3"></i></a>     
                                                
                                                <a href="{{ route('album_photo.edit', ['id' => $album->id]) }}" class="btn bg-success-400 btn-icon rounded-round" style="float: left;margin-right: 3px;"><i class="icon-pencil7"></i></a>     

												<form method="POST" action="{{ route('album_photo.delete', ['id' => $album->id]) }}" style="float:left;">
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
											{{ $album_photos->links() }}
								
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
