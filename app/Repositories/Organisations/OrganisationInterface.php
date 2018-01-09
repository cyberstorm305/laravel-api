<?php

namespace App\Repositories\Organisations;

/**
 * Interface OrganisationInterface
 * @package App\Repositories\Organisations
 *
 * Organisation interface for the Organisations repository
 */
interface OrganisationInterface
{
    public function all();
    public function store($id);
    public function create($request);
    public function update($id,$request);
    public function delete($id);

}