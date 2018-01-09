<?php

namespace App\Repositories\Venues;

/**
 * Interface VenuesInterface
 * @package App\Repositories\Venues
 *
 * Venues interface for the Venues repository
 */
interface VenuesInterface
{
    public function all();
    public function store($id);
    public function create($request);
    public function update($id,$request);
    public function delete($id);

}