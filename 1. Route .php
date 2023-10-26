route 
Route::get('/user/{id?}/post/{article_name?}',function($id = null,$article_name = "no title"){
    return "$article_name is of $id";
})->whereNumber('id')->whereAlpha("article_name");

to route
Route::get('/product',function(){
    return "This is product page";
})->name("product");

Route::get('/search',function(){
    return to_route("product");
});
