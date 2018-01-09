<?php
namespace App\Http\Controllers;

use App\Repositories\Organisations\OrganisationInterface;

/**
 * Class OrganisationController
 * @package App\Http\Controllers
 *
 * Admin Controller for the Organisations, to create and update the Organisations
 */
class OrganisationController extends Controller
{
    protected $organisation;

    public function __construct(OrganisationInterface $organisation)
    {
        $this->organisation = $organisation;
    }

    public function index(){
        return View('organisations.list');
    }

    public function show($id){
        $organisation = $this->organisation->find($id);
        return View('organisations.show', ['organisation' => $organisation]);
    }

}