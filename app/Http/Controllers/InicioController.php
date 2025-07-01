<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Mapa del sitio
        return view('inicio.mapasitio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function informacion()
    {
        $info = [
            'PHP Version'       => phpversion(),
            'Laravel Version'   => app()->version(),
            'Environment'       => app()->environment(),
            'Debug Mode'        => config('app.debug') ? 'On' : 'Off',
            'URL Base'          => config('app.url'),
            'Time Zone'         => config('app.timezone'),
            'Locale'            => config('app.locale'),
            'Database Driver'   => config('database.default'),
            'Cache Driver'      => config('cache.default'),
            'Session Driver'    => config('session.driver'),
            'Queue Driver'      => config('queue.default'),
            'OS'                => php_uname(),
        ];

        return view('inicio.info',compact('info'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
