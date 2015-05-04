<?php
Class ViewCountController extends widgetMainController
{		
	public function run() {
		$pagesDB = new pagesDB();
    $request = $this->request;
		$page = $pagesDB->getPageByUrlKeySmart($request->getVariable('urlKey'));
 		
		return array("pagesDB" => $pagesDB,"pageid"=>$page->id,"pageview"=>$page->views);
	}
}
?>
