<?php

namespace App\Http\Controllers\Api;

use App\Repositories\Gigs\GigsInterface;

/**
 * Class GigController
 * @package App\Http\Controllers\Api
 *
 * Gigs Controller for the api to communicate with extends Api Base Controller
 */
class GigController extends ApiController
{
    protected $gigs;

    public function __construct(GigsInterface $gigs)
    {
        $this->gigs = $gigs;
    }

    public function index()
    {
        return $this->gigs->all();
    }

    public function show($id)
    {
        return $this->gigs->find($id);
    }

    public function store(Request $request)
    {
        $this->gigs->store($request);
    }

    public function update($id, Request $request)
    {
        $this->gigs->update($id, $request);
    }

    public function delete(Request $request)
    {
        foreach($request->get('gigs') as $id){
            $this->gigs->delete($id);
        }
    }
}