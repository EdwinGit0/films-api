<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarFilmRequest;
use App\Http\Requests\ActualizarFilmRequest;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Http\Resources\FilmResource;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FilmResource::collection(Film::paginate(3)); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarFilmRequest $request)
    {
        /* Film::create($request->all());
        return response()->json([
            'status' => 'ok',
            'msg' => 'Successfully saved movie'
        ], 200); */

        return (new FilmResource(Film::create($request->all())))
                ->additional(['msg' => 'Successfully saved movie']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        /* return response()->json([
            'status' => 'ok',
            'result' => $film
        ], 200); */

        return new FilmResource($film);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarFilmRequest $request, Film $film)
    {
        $film->update($request->all());
        /* return response()->json([
            'status' => 'ok',
            'message' => 'Movie updated successfully'
        ], 200); */
        return (new FilmResouce($film))
                ->additional(['msg' => 'Movie updated successfully'])
                ->response()
                ->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();
        /* return response()->json([
            'status' => 'ok',
            'message' => 'Movie removed successfully'
        ], 200) */; 
        return (new FilmResouce($film))
                ->additional(['msg' => 'Movie removed successfully']);
    }
}
