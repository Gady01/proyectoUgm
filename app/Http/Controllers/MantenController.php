<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Manten;
use App\T_equipo;
use DB;
use Illuminate\Http\Request;

class MantenController extends Controller
{
   public function index()
   {
      
      $mante=T_equipo::all();
      $mantenimientos=Manten::join('t_equipos','mantens.pc_id','=','t_equipos.id')
                           ->select('t_equipos.nombre','mantens.*')
                           ->get();

      return view('mantenpc.index', compact('mantenimientos','tipopc'));

   }

public function create()
   {
   	$proactivos=Manten::all();

      $tipopc = T_equipo::all();
       dd($tipopc);  ver si la variable esta funcionando

   return view('mantenpc.create', compact('proactivos', 'tipopc'));
   }
public function store(Request $request)
   {
   	$this->validate($request, ['t_equipo' => 'required'],['t_equipo.required'=>'Tipo de equipo requerido.']); 
      $this->validate($request, ['marca' => 'required'],['marca.required'=>'Se requiere marca.']);

      $this->validate($request, ['modelo' => 'required'],['modelo.required'=>'Modelo de pc requerido.']);
      $this->validate($request, ['n_serie' => 'required'],['n_serie.required'=>'Número de serie requerido.']); 
      $this->validate($request, ['fecha_manten' => 'required'],['fecha_manten.required'=>'Fecha requerida.']);   
   	 // codigo para validar campos


   		$proactivos = new Manten();
   		$proactivos->t_equipo = $request->t_equipo;
   		$proactivos->marca = $request->marca;
   		$proactivos->modelo = $request->modelo;
   		$proactivos->n_serie = $request->n_serie;
         $proactivos->pc_id = $request->pc_id;
   		$proactivos->fecha_manten = Carbon::parse($request->fecha_manten);
   		$proactivos->save();
   		return redirect('mantenimiento')->with('flash','Equipo registrado correctamente');
   } 

   public function edit(Manten $manten)
   {
   	return view('mantenpc.edit', compact('manten'));
   } 
   public function update(Manten $manten, Request $request)
   {
      $this->validate($request, ['t_equipo' => 'required'],['t_equipo.required'=>'Tipo de equipo requerido.']); 
      $this->validate($request, ['marca' => 'required'],['marca.required'=>'Se requiere marca.']);
      $this->validate($request, ['modelo' => 'required'],['modelo.required'=>'Modelo de pc requerido.']);
      $this->validate($request, ['n_serie' => 'required'],['n_serie.required'=>'Número de serie requerido.']); 
      $this->validate($request, ['fecha_manten' => 'required'],['fecha_manten.required'=>'Fecha requerida.']);   
       // codigo para validar campos
   		
   		$manten->t_equipo = $request->t_equipo;
   		$manten->marca = $request->marca;
   		$manten->modelo = $request->modelo;
   		$manten->n_serie = $request->n_serie;
   		$manten->fecha_manten = Carbon::parse($request->fecha_manten);
   		$manten->save();
   		return redirect('mantenimiento')->with('flash','Equipo actualizado correctamente');
   } 
   public function destroy(Manten $manten)
   {
   	$manten->delete();
   	return redirect()->route('mantenimiento');
   }

   	}

