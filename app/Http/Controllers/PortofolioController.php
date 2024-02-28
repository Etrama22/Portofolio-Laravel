<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    // For myportofolio
    public function myPortofolio(Request $request)
    {
        $search = new Request();
        $searchValue = $search->get('search');
        $p = Portofolio::paginate();

        $portofolio = DB::table('skills')
            ->where('skill', 'LIKE', '%' . $searchValue . '%')
            ->paginate($p->perPage());

        return view('welcome', compact('portofolio'))
            ->with('i', (request()->input('page', 1) - 1) * $p->perPage());
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = new Request();
        $searchValue = $search->get('search');
        $p = Portofolio::paginate();

        $portofolio = DB::table('skills')
            ->where('skill', 'LIKE', '%' . $searchValue . '%')
            ->paginate($p->perPage());

        return view('Portofolio.index', compact('portofolio'))
            ->with('i', (request()->input('page', 1) - 1) * $p->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Portofolio = new Portofolio();
        return view('Portofolio.create', compact('Portofolio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //cek validasi
        request()->validate(Portofolio::$rules);

        //mulai transaksi
        DB::beginTransaction();
        try {
            //simpan ke tabel kota
            DB::table('skills')->insert([
                'skill' => $request->skill
            ]);
            //jika tidak ada kesalahan commit/simpan
            DB::commit();
            return redirect()->route('Portofolio.index')
                ->with('success', 'New Skills created successfully.');

        } catch (\Throwable $e) {
            //jika terjadi kesalahan batalkan semua
            DB::rollback();
            return redirect()->route('Portofolio.index')
                ->with(
                    'success',
                    'Penyimpanan dibatalkan semua, ada kesalahan......'
                );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Portofolio = Portofolio::find($id);
        return view('Portofolio.show', compact('Portofolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Portofolio = Portofolio::find($id);
        return view('Portofolio.edit', compact('Portofolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate(Portofolio::$rules);
        //mulai transaksi

        DB::beginTransaction();
        try {
            DB::table('skills')->where('id', $id)->update([
                'skill' => $request->skill
            ]);
            DB::commit();
            return redirect()->route('Portofolio.index')
                ->with('success', 'Skill updated successfully');
        } catch (\Throwable $e) {

            //jika terjadi kesalahan batalkan semua
            DB::rollback();
            return redirect()->route('Portofolio.index')
                ->with(
                    'success',
                    'Tabel Pangkat Batal diubah, ada kesalahan'
                );
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //mulai transaksi
        DB::beginTransaction();
        try {
            //hapus rekaman tabel kota
            $Portofolio = Portofolio::find($id)->delete();
            DB::commit();
            return redirect()->route('Portofolio.index')
                ->with('success', 'Skill deleted successfully');
        } catch (\Throwable $e) {
            //jika terjadi kesalahan batalkan semua
            DB::rollback();
            return redirect()->route('Portofolio.index')
                ->with(
                    'success',
                    'Terjadi kesalahan batal menghapus... '
                );
        }
    }
}
