<?php

namespace Modules\MenuFrontend\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\API\BaseApiController as BaseController;

class TreeMenuFrontendController extends BaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('menufrontend::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('menufrontend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('menufrontend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('menufrontend::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function frontend_menu_nav(){
       
            $type = request()->segment(1);
            $type_user = 1;
            
            $menunav = '';
             $menus = DB::table('group_menus')
                    ->leftJoin('menus', 'menus.id', '=', 'group_menus.id_menu')
                    ->where('id_user_group', $type_user)
                    ->select('group_menus.*', 'menus.*')
                    ->orderBy('urutan', 'asc')
                    ->get();
          
              $i=0;
              foreach ($menus as $menu) {
               if(toogle($menu->id_menu, $type_user) > 0 && $menu->parrent == 0){
                  $menunav .= '<li class="nav-item nav-item-submenu">';
                  $menunav .= '<a href="#" class="nav-link">
                                  <i class="'.$menu->icon_menu.'"></i> 
                                  <span>
                                    '.$menu->nama_menu.'
                                    
                                    </span>
                               </a>';
          
                  $menunav .=	formatTree($menu->id_menu, $type_user);
                          $menunav .= "</li>";
                          
                          
               }else{
                 if($menu->parrent === 0){
                   $menunav .= '<li class="nav-item">';
                   $menunav .= '<a href="/'.$type.'/'.$menu->link.'" class="nav-link">
                                  <i class="nav-icon '.$menu->icon_menu.'"></i>
                                                          <span>
                                  '.$menu->nama_menu.'
                                  </span>
                                                          </a>';
                           $menunav .= "</li>";
                  }
               }
          
               $i++;
              }
              return $this->sendResponse((array)$menunav, 'Blog Retrieved successfully');
       
    }

    function toogle($id_menu, $user_id_group){   
        $menus = DB::table('menus')
                  ->leftJoin('group_menus', 'group_menus.id_menu', '=', 'menus.id')
                  ->where([
                            ['id_user_group', '=', $user_id_group],
                            ['parrent', '=', $id_menu],
                         ])
                  ->select('group_menus.*', 'menus.*')
                  ->get();
    
          return $menus->count();
    }

    function formatTree($id_parent,$user_id_group){
        $type = request()->segment(1);
      
        $menus = DB::table('menus')
                    ->leftJoin('group_menus', 'group_menus.id_menu', '=', 'menus.id')
                    ->where([
                              ['id_user_group', '=', $user_id_group],
                              ['parrent', '=', $id_parent],
                           ])
                    ->select('group_menus.*', 'menus.*')
                    ->orderBy('urutan', 'asc')
                    ->get();
      
        $menunav = '<ul class="nav nav-group-sub" data-submenu-title="Layouts">';
        foreach($menus as $item){
            if(toogle($item->id_menu, $user_id_group) > 0){
              $menunav .= '<li class="nav-item nav-item-submenu">';
              $menunav .= '<a href="#" class="nav-link">
                              <i class="nav-icon '.$item->icon_menu.'"></i>
                                <span>'.$item->nama_menu.'</span>
                           </a>';
              $menunav.= formatTree($item->id_menu,$user_id_group);
              $menunav.= "</li>";
      
            }else{
              $menunav .= '<li class="nav-item">';
              $menunav .= '<a href="/'.$type.'/'.$item->link.'" class="nav-link">';
              $menunav .= '<i class="'.$item->icon_menu.' nav-icon "></i><p>'.$item->nama_menu.'</p></a>';
              $menunav.= "</li>";
            }
        }
      
        $menunav.= "</ul>";
        return $menunav;
      }
      
    
}
