<?php

namespace App\Repositories\Gigs;


interface GigsInterface
{
    public function all();
    public function store($id);
    public function create($request);
    public function update($id,$request);
    public function delete($id);

}