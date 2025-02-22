<?php   

namespace App\Repository\Sections;   

use App\Interfaces\Sections\SectionRepositoryInterface; 
use Illuminate\Database\Eloquent\Model;   

class SectionRepository implements SectionRepositoryInterface 
{     
    public function index(){
        return 'test';
    }
}