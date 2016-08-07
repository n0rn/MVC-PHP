<?php

include_once ROOT . '/models/News.php';

class NewsController {
    
    public function actionList(){
        
        $newsList = array();
        $newsList = News::getNewsList();
        
        return true;
    }
    public function actionView($category, $id){
        
        
      
        return true;
    }
}

