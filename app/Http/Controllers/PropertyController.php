<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Property;
use App\PropertyTel;

class PropertyController extends Controller
{   
    //Terminado
    public function index(){

        $usuarios = DB::table('usuarios')
        ->join('tel_usuarios', 'tel_usuarios.id', 'usuarios.id')
        ->get();

        return view('property.index')->with('usuarios', $usuarios);
    }

    //Terminado
    public function show($id){

        // var_dump($id);die;

        $property = DB::table('usuarios')
        //->join('tel_usuarios', 'usuarios.id', '=' ,'tel_usuarios.id')
        // -where('usuarios.id', '=' , $id)
            ->join('tel_usuarios', function($join) {
                $join->and('usuarios.id', '=' , 'tel_usuarios.id')
                    ->where('usuarios.id', '=' , 'usuarios_id');
            })
        ->get();

        if(!empty($property)){

            return view('property.show')->with('property', $property);
        }
        else{
            return redirect()->action('PropertyController@index');
        }

    }

    public function create(){
        return view('property.create');
    }


    //Terminado em Partes, falta a funcionalidade do telefone
    public function store(Request $request, $id){
        
        $property = [
            
            'nome'          => $request->nome,
            'sobrenome'     => $request->sobrenome,
            'email'         => $request->email,
            'dt_nascimento'   => $request->dt_nascimento,
            'cep'           => $request->cep,
            'rua'           => $request->rua,
            'numero'        => $request->numero,
            'bairro'        => $request->bairro,
            'cidade'        => $request->cidade,
            'estado'        => $request->estado
        ];

        $property_tel = [
            'id' => $request->$id,
            'telefone' => $request->telefone, 
        ];
        
        Property::create($property);

        PropertyTel::create($property_tel);

        return redirect()->action('PropertyController@index');

    }

    //Terminado
    public function edit($id){
        
        $user = Property::where('id', $id)->get();
        $user_tel = PropertyTel::where('id', $id)->get();
        // $usuario_teste = Property::where('id', $id)-get();
        // $property_tel_teste = PropertyTel::where('id', $id)-get();

         if(!empty($user) && !empty($user_tel)){
  
             return view('property.edit')->with('user, user_tel', $user,$user_tel);
         }
         else{
             return redirect()->action('PropertyController@index');
         }
    }

    public function update(Request $request, $id){
        
        // var_dump( $id, $request -> all());die;

        try{

            if(!empty ($id)){

                $usuario = Property::find($id);

                    $usuario->nome          = $request->nome;
                    $usuario->sobrenome     = $request->sobrenome;
                    $usuario->email         = $request->email;
                    $usuario->dt_nascimento = $request->dt_nascimento;
                    $usuario->cep           = $request->cep;
                    $usuario->rua           = $request->rua;
                    $usuario->numero        = $request->numero;
                    $usuario->bairro        = $request->bairro;
                    $usuario->cidade        = $request->cidade;
                    $usuario->estado        = $request->estado;

                    $usuario->save();

                $tel_usuario = PropertyTel::find($id);

                    $tel_usuario->telefone = $request->telefone;
                    $tel_usuario->save();

            }

            // if(!empty ($id)){

            //     $tel_usuario = PropertyTel::find($id);

            //         $tel_usuario->telefone = $request->telefone;
            //         $tel_usuario->save();

            // }

        }
        catch(Exception $e){
            report($e);
            return false;
        }

        return redirect()->action('PropertyController@index');

    }

    //Terminado
    public function destroy($id) {
        
        $usuario = DB::table('usuarios')
        ->join('tel_usuarios', 'tel_usuarios.id', 'usuarios.id')
        ->get();

        var_dump($usuario);die;

        if(!empty($usuario)){
            DB::delete(" DELETE FROM tel_usuarios WHERE id = ? ", [$property_tel->$id]);
        }

        return redirect()->action('PropertyController@index');
    }
}
