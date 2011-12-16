<?php defined('SYSPATH') or die('No direct script access.');

class ORM extends Kohana_ORM {
    
    
    	/**
	 * Creates and returns a new model.
	 *
	 * @chainable
	 * @param   string  $model  Model name
	 * @param   mixed   $id     Parameter for find()
	 * @return  ORM
	 */
     
	public static function factory($model, $id = NULL)
	{
		// Set class name
		$model = 'Model_'.ucfirst($model);

		return new $model($id);
	}
    
}
