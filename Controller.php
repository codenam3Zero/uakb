<?php

class Controller{
	
	public function loadmodel($model){
		if(file_exists('models/'.$model.'.php')){
			require_once('models/'.$model.'.php');
			$model = new $model;
		}
		return $model;
	}

	public function loadview($view, $data=null){
		if(file_exists('view/'.$view.'.php')){
			require_once('view/'.$view.'.php');
		}
	}
}

?>