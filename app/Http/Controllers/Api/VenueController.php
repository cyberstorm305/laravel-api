<?php

namespace App\Http\Controllers\Api;

use App\Repositories\Venues\VenuesInterface;

/**
 * Class VenueController
 * @package App\Http\Controllers\Api
 *
 * Venue Controller for the api to communicate with extends Api Base Controller
 */
class VenueController extends ApiController
{
    protected $venues;

    public function __construct(VenuesInterface $venues)
    {
        $this->venues = $venues;
    }

    public function index()
    {
        return $this->venues->all();
    }

    public function show($id)
    {
        return $this->venues->find($id);
    }

    public function store(Request $request)
    {
        $this->venues->store($request);
    }

    public function update($id, Request $request)
    {
        $this->venues->update($id, $request);
    }

    public function delete(Request $request)
    {
        foreach($request->get('gigs') as $id){
            $this->venues->delete($id);
        }
    }
}