<?php

namespace App\Http\Controllers\Api;

use App\Repositories\Organisations\OrganisationInterface;

/**
 * Class OrganisationController
 * @package App\Http\Controllers\Api
 *
 * Organisation Controller for the api to communicate with extends Api Base Controller
 */
class OrganisationController extends ApiController
{
    protected $organisation;

    public function __construct(OrganisationInterface $organisation)
    {
        $this->organisation = $organisation;
    }

    public function index()
    {
        return $this->organisation->all();
    }

    public function show($id)
    {
        return $this->organisation->find($id);
    }

    public function store(Request $request)
    {
        $this->organisation->store($request);
    }

    public function update($id, Request $request)
    {
        $this->organisation->update($id, $request);
    }

    public function delete(Request $request)
    {
        foreach($request->get('gigs') as $id){
            $this->organisation->delete($id);
        }
    }
}