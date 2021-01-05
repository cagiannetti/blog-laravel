<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate(); //hago la consulta y guadro en $cursos
        //return $cursos;
        return view('cursos.index', compact('cursos')); //llamo a la vista y le paso todos los cursos
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        //return $request->all(); //obtengo todos los datos que enviamos desde el formulario
        
        /*  Validación  */
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ]);

        //creamos un objeto y llenamos con datos recibidos, descartamos el token
        $curso=new Curso();
        $curso->nombre = $request->nombre;
        $curso->slug = $request->slug;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        
        $curso->save(); //grabamos en la bd

        return redirect()->route('cursos.show', $curso); //se puede omitir el id y laravel lo hace solo
    }

    public function show(Curso $curso){
        //return view('cursos.show', ['curso' => $curso]); es la forma tradicional de pasar parámetro a la vista también válida
        //$curso=Curso::find($id); //buscamos el curso deseado para obtener la info
        return view('cursos.show', compact('curso'));   
    }

    public function edit(Curso $curso){
         return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){ //crea una instancia de la clase curso y la guarda en $curso
        // return $request->all();
        // return $curso;

        /*  Validación  */
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        //al objeto recibido lo llenamos con nuevos datos
        $curso->nombre = $request->nombre;
        $curso->slug = $request->slug;
        $curso->descripcion = $request->descripcion;
        $curso->categoria=$request->categoria;

        $curso->save();
        
        return redirect()->route('cursos.show', $curso);
    } 

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
