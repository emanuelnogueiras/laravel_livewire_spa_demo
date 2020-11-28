<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemsController extends Controller
{
    // Muestra la lista de items
    public function index()
    {
        return view("items.index");
    }

    // Muestra el formulario de crear nuevo
    public function create()
    {
        return view("items.form");
    }

    // Muestra el formulario editar 
    // (que en realidad es el mismo que para crear nuevo)
    public function edit($id)
    {
        $item = Items::find($id);

        return view("items.form-edit", [
            "item" => $item
        ]);
    }

    // Muestra los detalles de uno
    public function show($id)
    {
        // Este sleep de un segundo, ayuda  avisualizar el efecto 
        // que se produce cuando la pagina tarda en cargar
        // (se ve una barra verde de progreso en la parte superior izquierda)
        sleep(1);
        
        return view("items.show", ["id" => $id]);
    }    

    // Elimina un item por id
    public function delete($id)
    {
        Items::destroy($id);
        return redirect("/");
    }

}
