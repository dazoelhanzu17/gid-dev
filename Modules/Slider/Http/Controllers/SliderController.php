<?php

namespace Modules\Slider\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Session;
use Modules\Slider\Entities\Slider;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    use ValidatesRequests;
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if(get_role(Auth::user()->id_user_group) != 'FALSE'){
            $role = get_role(Auth::user()->id_user_group);
            return view('slider::index')
                    ->with('sliders', Slider::paginate(10))
                    ->with('role', $role);


        }else{
            return redirect('forbidden');
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('slider::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_slider'   => 'required|max:100',
            'link'          => 'required|max:255',
            'filename'      => 'image|required|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $originalImage  = $request->file('filename');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath  = public_path().'/images/sliders/thumbnail/';
        $originalPath   = public_path().'/images/sliders/images/';
        $newName        = time().$originalImage->getClientOriginalName();
        $thumbnailImage->save($originalPath.$newName);
        $thumbnailImage->resize(500, 500);
        $thumbnailImage->save($thumbnailPath.$newName); 

        $slider = new Slider();
        $slider->gambar = $newName;
        $slider->link = $request->link;
        $slider->create_author = Auth::user()->name;
        $slider->slider_name = $request->nama_slider;
        $slider->publish  = $request->publish;
        // $slider->id_albumphoto  = $id;
        $slider->save();
        
        Session::flash('success', 'Slider Berhasil di Simpan');
        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('slider::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);

        return response()->json($slider);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_slider'   => 'required|max:100',
            'link'          => 'required|max:255',
            'filename'      => 'image|required|mimes:jpeg,png,jpg,gif,svg'
        ]);
        
        $slider = Slider::findOrFail($id);
        
        if($request->hasFile('filename')){
            if(file_exists('images/sliders/images/'.$slider->gambar)){
                unlink('images/sliders/images/'.$slider->gambar);
                unlink('images/sliders/thumbnail/'.$slider->gambar);
            }
    
            $originalImage  = $request->file('filename');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath  = public_path().'/images/sliders/thumbnail/';
            $originalPath   = public_path().'/images/sliders/images/';
            $newName        = time().$originalImage->getClientOriginalName();
            $thumbnailImage->save($originalPath.$newName);
            $thumbnailImage->resize(500, 500);
            $thumbnailImage->save($thumbnailPath.$newName); 
    
            // $slider = new Slider();
            $slider->gambar = $newName;

        }

        $slider->link = $request->link;
        $slider->create_author = Auth::user()->name;
        $slider->slider_name = $request->nama_slider;
        $slider->publish  = $request->publish;
        // $slider->id_albumphoto  = $id;
        $slider->save();
        
        Session::flash('success', 'Slider Berhasil di Update');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        unlink('images/sliders/images/'.$slider->gambar);
        unlink('images/sliders/thumbnail/'.$slider->gambar);
        
        $slider->delete();
        
        Session::flash('success', 'Slider Berhasil di Hapus');
        return redirect()->back();
        
    }
}
