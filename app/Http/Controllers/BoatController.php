<?php

namespace App\Http\Controllers;

use App\Boat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BoatController extends Controller
{


    private $boat;

    /**
     * BoatController constructor.
     * @param $boat
     */
    public function __construct()
    {
        $this->boat = new Boat();
    }


    public function index()
    {

        $list_Boat = Boat::all();
        return view('boats.index',[
            'boats' => $list_Boat
    ]);

    }


    public function register(){

        return view("boats.cadastro");

    }

    public function store(Request $request)
    {

        $validacao = $this->validar($request->all());

        if($validacao->fails()){
            return redirect()->back()
                ->withErrors($validacao->errors())
                ->withInput($request->all());
        }

        Boat::create($request->all());
        return redirect("/barcos")->with("message","Barco cadastrado");

    }



    public function editarbarco($id)
    {

        return view("boats.edita",[
           'boats' => $this->getBoat($id)
        ]);

    }



    protected function getBoat($id)
    {
        return $this->boat->find($id);
    }


    public function update (Request $request)
    {
        $validacao = $this->validar($request->all());

        if($validacao->fails()){
            return redirect()->back()
                ->withErrors($validacao->errors())
                ->withInput($request->all());
        }


            $form = $this->getBoat($request->id);
            $form->update($request->all());
            return redirect("/barcos")->with("message","atualizado");

    }




    public function deletarbarco($id)

    {

        return view("boats.delete",[
            'boats' => $this->getBoat($id)
        ]);




    }

    public function destroy($id)
    {

            $this->getBoat($id)->delete();
        return redirect("/barcos")->with("message","atualizado");

    }


    private function validar($dataform)
    {

        $regra = [

            'nameBoat' => 'required',
            'price' => 'required|numeric',
            'cidade' => 'required',
            'boatSize' => 'required|numeric',
            'boatDescription' => 'required'

        ];


        $messagem = [

            'nameBoat.required' => 'Campo nome é obrigatorio',
            'price.required' => 'Campo preço é obrigatorio',
            'price.numeric' => 'somente valor numerico',
            'cidade.required' => 'Campo cidade é obrigatorio',
            'boatSize.required' => 'Campo tamanho é obrigatorio',
            'boatSize.numeric' => 'somente valor numerico',
            'boatDescription.required' => 'Campo descrição é obrigatorio',



        ];



        return  Validator::make($dataform,$regra,$messagem);




    }






}
