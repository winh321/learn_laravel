route 
Route::get('/user/{id?}/post/{article_name?}',function($id = null,$article_name = "no title"){
    return "$article_name is of $id";
})->whereNumber('id')->whereAlpha("article_name");
