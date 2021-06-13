<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GeneroFormRequest;
use App\Models\Genero;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;
use DB;

class GeneroController extends Controller
{
    public function getAll(){
        $genero=Genero::all();
        return $genero;
    }

    public function deleteGenero($id){
        $gener= $this->getGenero($id);
        $gener->delete();
        return Redirect::to('generos/lista');
    }
    public function deleteGenero2($id){
        $gener= $this->getGenero($id);
        $gener->delete();
        return $gener;
    }
    public function getGenero($id){
        $gener=Genero::find($id);
        return $gener;
    }
    public function edit($id)
    {
        return view('editarGenero',["genero"=>Genero::findOrFail($id)]);
    }
    public function update(GeneroFormRequest $request,$id)
    {
        $genero = Genero::find($id);
        $genero->tipo_genero = $request->get('tipo_genero');

        $genero->update();
        return Redirect::to('generos/lista');

    }
    public function editgenero2($id, Request $request){
        $gener = $this->getGenero($id);
        $gener->fill($request->all())->save();
        return $gener;
    }
    public function registerGenero(){


        return view('registrarGenero');
    }
    public function showGenero(){


        $genero=DB::table('genero')->where('tipo_huesped','LIKE','%'.'%')
            ->orderBy('tipo_huesped','asc')
            ->paginate(7);
        return view('listaDeGeneros', compact('genero'));
    }
    public function saveGenero(Request $request){
        if($request->control=='form' || $request->control=='api') {
            //Validaciones del formulario
            $data = request()->validate([
                'tipo_genero' => 'required|max:75'

            ], [
                'tipo_genero.required' => 'El tipo de genero no debe estar vacio.',


                'tipo_genero.max' => 'El nombre no puede tener más 75 caracteres.',


            ]); // termina el bloque de validaciones

            try {
                //Guardar el genero
                $genero = Genero::create([
                    'tipo_genero' => $data['tipo_genero'],



                ]);

            } catch (QueryException $queryException) { //capturamos el error en el catch
                return redirect()->route('genero.index')->with('warning', 'Ocurrio un error al registrar el Genero. ');
            }
        }
        if($request->control=='form'){
            return redirect()->route('genero.index')->with('success', 'Registro realizado exitosamente');
        }elseif($request->control=='api'){
            return response()->json([
                'tipo_genero' => 'INGRESADO',

            ]);

        }
    }
}
