<?php

class CategoryController extends BaseController{
	
	public function getAddNewCategory(){
		return View::make('partials.add_new_category');
	}

	public function postAddNewCategory(){
		$name = Input::get("name");
		$manufacturer = Input::get("manufacturer");
		$warning_quantity = Input::get("warning_quantity");
		
		DB::table('categories')->insert(
   			 array(
   			 	'name'					=> $name, 
   			 	'manufacturer'			=> $manufacturer,
   			 	'warning_quantity'		=> $warning_quantity
   			 	)
		);

		return Redirect::route('getAddNewCategory')->with('msg', 'Category has been added successfully');
	}

	public function getLowStockCategory(){
		return View::make('partials.low_stock');
	}

}