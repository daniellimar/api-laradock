<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


use App\Models\Documentos_votantes;
use Illuminate\Http\Request;

class ApiDocController extends Controller
{
    public function getAllDocuments() {
      // logic to get all students goes here
      $documents = Documentos_votantes::get()->toJson(JSON_PRETTY_PRINT);
      return response($documents, 200);
        
    }

    public function createDocument(Request $request) {
      // logic to create a student record goes here
        $document = new Documentos_votantes();
        $document->votante_id = $request->votante_id;
        $document->votante_nome = $request->votante_nome;
        $document->votante_documento = $request->votante_documento;
        $document->votante_documento_tipo = $request->votante_documento_tipo;
        $document->save();

        return response()->json([
            "message" => "Documento criado com sucesso."
        ], 201);
    }

    public function getDocument($id) {
      // logic to get a student record goes here
    }

    public function updateDocument(Request $request, $id) {
      // logic to update a student record goes here
    }

    public function deleteDocument ($id) {
      // logic to delete a student record goes here
    }
}