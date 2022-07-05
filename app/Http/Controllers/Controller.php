<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\posts;

class Controller extends BaseController
{
    

//////////////BLOG
public function savepost(Request $request){
        
        $titulo = $request->title;
        $slug = $request->slug;
        $parrafo1 = $request->parrafo1;
        $parrafo2 = $request->parrafo2;

        $image_path = $request->image;
        $image= $request->file('image');
        //NO MOVER
if( $request->hasFile('image')){ 
        //$image = $itemreq->file('image'); 
        $fileName = $image->getClientOriginalName();
    $fileExtension = $image->getClientOriginalExtension();
    $image->move(public_path("imagenes/blog/"),$fileName);
       // dd($fileName);
        //dd($image);
    } else {
        dd($image);
}

      // $image->move(public_path('img/posts'), $image_path);
        $newpost=new  posts;
       
        $newpost->titulo =$request->titulo;
        $newpost->slug =$request->slug;
        $newpost->parrafo1 =$request->parrafo1;
        $newpost->parrafo2 =$request->parrafo2;
        $newpost->parrafo3 =$request->parrafo3;
        $newpost->parrafo4 =$request->parrafo4;
        $newpost->image_path ="imagenes/blog/".$fileName;
        // $user->urlfoto      = $nombrearchivo;
        
        $newpost->save();

       // return $newuser;

return back()->with('archivo', 'Blog creado');

}
 public function blog()
 {
  $post = DB::select('SELECT * FROM posts ORDER BY updated_at DESC');
  return view('blog')
    ->with('post', $post);
 }
  public function blogN($id)
 {
    $cat = DB::select('SELECT * from posts where id = ?', [$id]);
  return  view('blogn')
  ->with ('cat' ,$cat);

 }


/////////////////////////Contacto
    public function contacto(Request $request) { 

///Mandar correo

        \Mail::send('contact_email',
             array(
                 'name' => $request->get('Nombre').$request->get('Apellidos'),
                 'email' => $request->get('Correo'),
                 'subject' => 'Nuevo cliente:'.$request->get('Apellidos'),
                 'area' => $request->get('Area'),
                 'telefono' => $request->get('Telefono'),
                 'estado' => $request->get('estado'),
             ), function($message) use ($request)
               {
                  $message->from('queonda2@bicislocas.club');
                  $message->to('manuelalcopar01@aragon.unam.mx');
                  $message -> subject('Nuevo mensaje de la pagina');
               });
        

/* 
//Escribir csv
       $data = [
	['Nombre', $request->Nombre],
	['Apellido', $request->Apellidos],
	['Estado', $request->estado],
	['Telefono', $request->Telefono],
	['Correo', $request->Correo],
	['Area de interes', $request->Area],
];

$filename ='Clientes.csv';

// open csv file for writing
$f = fopen($filename, 'w');
$data2 = [];

// open the file



if ($f === false) {
	die('Error opening the file ' . $filename);
}


// write each row at a time to a file
foreach ($data as $row) {
	fputcsv($f, $row);
}
foreach ($data2 as $row) {
	fputcsv($f, $row);
}
// close the file
fclose($f);
*/
//Meter los datos al sql
$curso = DB::select('INSERT INTO clientes (nombre, apellidos, telefono, correo, estado, area) VALUES ("'.$request->Nombre.'", "'.$request->Apellidos.'", "'.$request->Telefono.'", "'.$request->Correo.'", "'.$request->estado.'","'.$request->Area.'")');
return back()->with('success', '¡Gracias por contactarnos! Nos pondremos en contacto contigo lo mas pronto posible');
    }
public function contacto1(Request $request) { 

///Mandar correo

        \Mail::send('contact_email',
             array(
                 'name' => $request->get('Nombre')." ".$request->get('Apellidos'),
                 'email' => $request->get('Correo'),
                 'subject' => 'Nuevo cliente: '.$request->get('Apellidos'),
                 'area' => $request->get('Mensaje'),
             ), function($message) use ($request)
               {
                  $message->from('queonda2@bicislocas.club');
                  $message->to('compras@plasticositalianos.com.mx');
                  $message -> subject('Nuevo mensaje de la pagina');
               });
        

/* 
//Escribir csv
       $data = [
	['Nombre', $request->Nombre],
	['Apellido', $request->Apellidos],
	['Estado', $request->estado],
	['Telefono', $request->Telefono],
	['Correo', $request->Correo],
	['Area de interes', $request->Area],
];

$filename ='Clientes.csv';

// open csv file for writing
$f = fopen($filename, 'w');
$data2 = [];

// open the file



if ($f === false) {
	die('Error opening the file ' . $filename);
}


// write each row at a time to a file
foreach ($data as $row) {
	fputcsv($f, $row);
}
foreach ($data2 as $row) {
	fputcsv($f, $row);
}
// close the file
fclose($f);
*/
//Meter los datos al sql
$curso = DB::select('INSERT INTO clientes (nombre, apellidos, telefono, correo, estado, area) VALUES ("'.$request->Nombre.'", "'.$request->Apellidos.'", "'.$request->Telefono.'", "'.$request->Correo.'", "'.$request->estado.'","'.$request->Area.'")');
return back()->with('success', '¡Gracias por contactarnos! Nos pondremos en contacto contigo lo mas pronto posible');
    }

    public function crear(){
    	//Crea un archivo csv de la tabla clientes
    	//$query = $db->query("SELECT * FROM clientes ORDER BY id ASC"); 
    	$query= DB::SELECT("SELECT * FROM clientes ORDER BY id ASC");
 			
			if(count($query) > 0){ 

			    $delimiter = ","; 
			    $filename = "clientes.csv"; 
			     
			    // Create a file pointer 
			    $f = fopen($filename, 'w'); 
			     
			    // Set column headers 
			    $fields = array('ID', 'Nombre', 'Apellidos', 'Telefono', 'Correo', 'Estado', 'Area'); 
			    fputcsv($f, $fields); 
			   
			    foreach ($query as $query) {
			    	# code...
			    	$lineData = array($query->id, $query->nombre, $query->apellidos, $query->telefono, $query->correo, $query->estado, $query->area); 
			    	 fputcsv($f, $lineData);
			    }
			   
			    // Move back to beginning of file 
			    fseek($f, 0); 
			      
			    // Set headers to download file rather than displayed
			     
			    //header('Content-Type: text/csv'); 
			    //header('Content-Disposition: attachment; filename="' . $filename . '";'); 
			    
			    //output all remaining data on a file pointer 

			    //fpassthru($f); 

			    fclose($f);

			}
			// Initialize a file URL to the variable
    echo file_get_contents( $filename ); // get the contents, and echo it out.
			return back()->with('archivo', 'Excell creado, de click para descargar');
    }

}
