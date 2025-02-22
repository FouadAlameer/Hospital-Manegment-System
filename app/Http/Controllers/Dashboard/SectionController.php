<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Sections\SectionRepositoryInterface; 

class SectionController extends Controller
{
    private $sections;
  
   public function __construct(SectionRepositoryInterface $sections)
   {
       $this->sections = $sections;
   }
    
    public function index()
    {
        $this->sections->index();
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
