<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Classes\Random;
use PDF;

class SpeakerController extends Controller
{
    private $Logger;
    private $random;

    public function __construct()
    {
        $this->random = new Random();
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['speakers'] = Speaker::get();

        //Logger
        $this->Logger->log('info', 'Listou os oradores');
        return view('admin.speaker.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em cadastrar um orador');
        return view('admin.speaker.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:2',
            'function' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'photo' => 'required|mimes:jpg,jpeg,png',
            'description' => 'nullable|string'
        ]);

        // RESIZE DA IMAGEM E GUARDAR NO DISCO CONFIGURADO (s3/minio)
        $img = Image::make($request->file('photo'))->resize(400, 400)->encode('jpg');
        $namefile = $this->random->AlphaNumeric(8) . '.jpg';
        $path = 'speakers/' . $namefile;
        Storage::put($path, (string) $img);
        $file = $path;

        $speaker = Speaker::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'function' => $request->function,
            'company' => $request->company,
            'photo' => $file,
            'description' => $request->description,
            'priority' => $request->priority,
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou um orador com o nome ' . $speaker->name);

        return redirect()->route("admin.speaker.show", $speaker->id)->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['speaker'] = Speaker::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar um orador com o identificador ' . $id);
        return view('admin.speaker.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['speaker'] = Speaker::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um orador com o identificador ' . $id);
        return view('admin.speaker.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:2',
            'function' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'photo' => 'mimes:jpg,jpeg,png',
            'description' => 'nullable|string',
            'type' => 'required|string|max:255',
            'status' => 'nullable|string|max:20',
        ]);

        if ($request->file('photo')) {
            $img = Image::make($request->file('photo'))->resize(400, 400)->encode('jpg');
            $namefile = $this->random->AlphaNumeric(8) . '.jpg';
            $path = 'speakers/' . $namefile;
            Storage::put($path, (string) $img);
            $file = $path;
        } else {
            $file = Speaker::find($id)->photo;
        }

        Speaker::find($id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'function' => $request->function,
            'company' => $request->company,
            'photo' => $file,
            'description' => $request->description,
            'priority' => $request->priority,
            'status' => $request->status,
        ]);

        //Logger
        $this->Logger->log('info', 'Editou uma pergunta frequente com o identificador ' . $id);
        return redirect()->route("admin.speaker.show", $id)->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um orador com o identificador ' . $id);
        Speaker::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

    public function list(Request $request)
    {
        $response['checkbox'] = $request->all();

        $response['speakers'] = Speaker::get();

        $pdf = PDF::loadView('pdf.speaker.index', $response);
        $pdf->setPaper('A4', 'landscape');

        //Logger
        $this->Logger->log('emergency', 'Imprimiu a lista Oradores');

        return $pdf->stream("Lista de Oradores.pdf");
    }
}
