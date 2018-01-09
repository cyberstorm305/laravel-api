<?php
namespace App\Http\Controllers;

use App\Repositories\Venues\VenuesInterface;

/**
 * Class VenuesController
 * @package App\Http\Controllers
 *
 * Admin Controller for the Venues, to create and update the Venues
 */
class VenuesController extends Controller
{
    protected $venues;

    public function __construct(VenuesInterface $venues)
    {
        $this->venues = $venues;
    }

    public function index(){
        return View('venues.list');
    }

    public function show($id){
        $venue = $this->gigs->find($id);
        return View('venues.show', ['venue' => $venue]);
    }
}