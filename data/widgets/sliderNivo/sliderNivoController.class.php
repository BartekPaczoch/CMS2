<?php
Class sliderNivoController extends widgetMainController
{		
	public function run() {
		$imagesDB = new imagesDB();	
		$pagesDB = new pagesDB();	
		return array("imagesDB" => $imagesDB,"pagesDB" => $pagesDB);
	}
}
?>