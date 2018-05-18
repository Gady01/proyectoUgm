<?php

namespace App\Http\Controllers;
use App\T_equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
	public function index()
	{
   	$t_equipos=T_equipo::all();

   	return view('tquip.index', compact('t_equipos'));
   }

	public function create()
	{
		$dat=T_equipo::all();
		
   return view('tquip.create', compact('dat'));
	}
   
    
   public function store(Request $request)
   {
      $this->validate($request, ['nombre' => 'required'],['nombre.required'=>'Tipo requerido.']); 

   		$dat = new T_equipo();
   		$dat->nombre = $request->nombre;
   		$dat->save();
   		return redirect('t_equipo')->with('flash','Equipo registrado correctamente');
   } 
   public function edit(T_equipo $t_equipo)
   {
      return view('tquip.edit',compact('t_equipo'));
   }


   public function update(T_equipo $t_equipo, Request $request)
   {
       $this->validate($request, ['nombre' => 'required'],['nombre.required'=>'Tipo requerido.']); 
      $t_equipo->nombre = $request->nombre;
      $t_equipo->save();
      return redirect('t_equipo')->with('flash','Equipo actualizado correctamente');
    
   }
    public function destroy(T_equipo $t_equipo)
   {
      $t_equipo->delete();
      return redirect()->route('t_equipo');
   }
}
