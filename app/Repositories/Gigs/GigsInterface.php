<?php

namespace App\Repositories\Gigs;

/**
 * Interface GigsInterface
 * @package App\Repositories\Gigs
 *
 * Gigs interface for the gigs repository
 */
interface GigsInterface
{
    public function all();
    public function store($id);
    public function create($request);
    public function update($id,$request);
    public function delete($id);

}