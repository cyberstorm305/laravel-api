<?php
namespace App\Http\Controllers;

use App\Repositories\Gigs\GigsInterface;

/**
 * Class GigsController
 * @package App\Http\Controllers
 *
 * Admin Controller for the gigs, to create and update the gigs
 */
class GigsController extends Controller
{
    protected $gigs;

    public function __construct(GigsInterface $gigs)
    {
        $this->gigs = $gigs;
    }

    public function index(){
        return View('gigs.list');
    }

    public function show($id){
        $gig = $this->gigs->find($id);
        return View('gigs.show', ['gig' => $gig]);
    }

}