<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Keluarga;

//return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeluargaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $keluarga = Keluarga::latest()->get();
        $user = Auth()->id();
        // $datas = Keluarga::sum('jumlah');
        // $jum = Keluarga::count();

        $datas = Keluarga::where('id_user', $user)->sum('jumlah');
        $jum = Keluarga::where('id_user', $user)->count();

        $proposal = Keluarga::where('id_user', $user)->latest()->get();
        //render view with posts
        return view('keluarga.kelu', compact('proposal', 'datas', 'jum',));
    }


    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        $user = Auth()->id();
        return view('keluarga.create', compact('user'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'jumlah'   => 'required'
        ]);

        Keluarga::create([
            'nama' => request('nama'),
            'jumlah' => request('jumlah'),
            'id_user' => Auth()->id()
        ]);
        //create post

        //redirect to index
        return redirect()->route('keluarga.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Keluarga::findOrFail($id);

        //render view with post
        return view('keluarga.edit', compact('post'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
       //validate form
       $this->validate($request, [
        'nama'     => 'required',
        'jumlah'     => 'required'
        
    ]);

        //get post by ID
        $post = Keluarga::findOrFail($id);

        //update post without image
        $post->update([
            'nama'     => $request->nama,
            'jumlah'   => $request->jumlah

        ]);

        //redirect to index
        return redirect()->route('keluarga.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
