<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class ImageController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields */


			$this->filter = \DataFilter::source(new \App\Image);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			$this->grid->add('title', 'Title');
			$this->grid->add('description', 'Description');
			$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields */
	
			$this->edit = \DataEdit::source(new \App\Image());

			$this->edit->label('Edit Image');

			$this->edit->add('name', 'Name', 'text')->rule('required');
		
			$this->edit->add('title', 'Title', 'text');

			$this->edit->add('description','Description','text');

			$this->edit->add('name', 'Photo', 'image')->move(public_path()."/uploads/")->preview(200,200);

       
        return $this->returnEditView();
    }    
}
