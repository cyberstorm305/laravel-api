<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class ApiController
 * @package App\Http\Controllers\Api
 *
 * Api Base Controller, This stops unknown routes
 */
class ApiController extends Controller
{
    public function index()
    {
        App::abort('404');
    }

    public function show($id)
    {
        App::abort('404');
    }

    public function store(Request $request)
    {
        App::abort('404');
    }

    public function update($id, Request $request)
    {
        App::abort('404');
    }

    public function delete(Request $request)
    {
        App::abort('404');
    }
}