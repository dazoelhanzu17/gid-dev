@extends('layouts.frontend.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-md-2">
                    <div class="card mb-3" style="padding: 20px">
                            <div class="row no-gutters">
                            <ul class="list-unstyled">

                            @foreach ($beritas as $berita)
                      
                                    <li class="media">
                                        <a href="{{ route('berita.baca', ['id' => $berita->id]) }}">
                                          <img src="{{ asset($berita->image) }}" class="mr-3" alt="..." width="200" height="200">
                                        </a>
                                      <div class="media-body">
                                      <h5 class="mt-0 mb-1">{{ $berita->title }}</h5>
                                        {{ substr($berita->description, 20, 200) }} ...
                                        <br>
                                        <br>
                                        
                                      <a href="{{ route('berita.baca', ['id' => $berita->id]) }}"> <em> Selengkapnya</em></a>
                                      </div>

                                     
                                    </li>
                                    <hr>
                               @endforeach
                               <div class="">

                                 {{ $beritas->links() }}
                               </div>

                            </ul>
                            </div>
                    </div>
            </div>

            {{-- <div class="col-md-3">
                <div class="card">

                </div>
            </div> --}}
                
        </div>
    </div>
@endsection