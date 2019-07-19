<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
class ChartController extends Controller
{
    public function chart(){
    	$chart = Charts::multi('bar','material')
         ->title('amr chart')
       // ->dimensions(150,400)
        ->template('material')
        ->colors(['red','green','blue','black'])
       ->dataset('element 1',[44,56,410,5])
       ->dataset('element 2',[44,5,40,5])
       ->dataset('element 3',[4,5,40,5])
       ->dataset('element 4',[4,5,40,5])
       ->labels(['One', 'Two', 'Three', 'Four']);
       return view('chart',compact('chart'));
    }
}
