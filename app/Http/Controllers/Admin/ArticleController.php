<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;


use Illuminate\Http\Request;

class ArticleController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields */


			$this->filter = \DataFilter::source(new \App\Article);
			$this->filter->add('title', 'Title', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Title');
			$this->grid->add('body', 'Body');
			$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields */
	
			$this->edit = \DataEdit::source(new \App\Article());

			$this->edit->label('Edit Article');

			$this->edit->add('title', 'Title', 'text')->rule('required');
		
			$this->edit->add('body', 'Body', 'redactor')->rule('required');

			$this->edit->add('image', 'Photo', 'image')->move(public_path()."/uploads/")->preview(200,200);


        return $this->returnEditView();
    }    
}
