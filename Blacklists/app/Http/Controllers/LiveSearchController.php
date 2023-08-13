<?php
namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Teacher;
use DB;
use Illuminate\Http\Request;

class LiveSearchController extends Controller
{
    function index()
    {
    
    $teacher = Teacher::all();
      return view ('live_search')->with('teacher', $teacher);
      
     return view ('live_search');
       
     }
    
    



public function search(Request $request)
{
    $output = "";
   $teacher = Teacher::where('name', 'like', '%' . $request -> search. '%')->orWhere('university_id', 'like', '%' . $request -> search. '%')->get();

   foreach($teacher as $teacher)
   {
    $output.=
    '<tr>
    
    <td> '.$teacher->name.'</td>
    
    <td> '.$teacher->lastname.'</td>
    <td> '.$teacher->address.'</td>

    <td> '.$teacher->university_id.'</td>
    <td> '.$teacher->mobile.'</td>
    <td> '.$teacher->status.'</td>
    <td> '.'<a href="/teacher/edit" class="btn btn-primary btn-sm"> '.'Edit </a>'.'
    <a href="/teacher/delete " class="btn btn-primary btn-sm"> '.'Delete </a>'.'</td>
    
    </tr>';
   }
   return response($output);
}
}
//

