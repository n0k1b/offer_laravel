<?php
function getCategory($id){
    return \App\Model\Category::find($id);
}
function getSubCategory($id){
    $dat= \App\Model\Category::where('parent_id',$id)->get();
    return $dat;
}
function totalProduct($id){
$dat= \App\Model\Product::where('category_id',$id)->get()->count();
return $dat;
}
function allProduct(){
    $dat= \App\Model\Product::where('status',1)->get()->count();
    return $dat;
}
function mainCategory(){
    $main_category= \App\Model\Category::where('parent_id',0)->where('status',1)->get()->count();
    return $main_category;
}
function subCategory(){
    $sub= \App\Model\Category::where('parent_id','!=',0)->where('status',1)->get()->count();
    return $sub;
}
function allArticles(){
    $data= \App\Model\News::where('status',1)->get()->count();
    return $data;
}
function parentCategory($category_id){
    $dat= \App\Model\Category::find($category_id);
    if($dat->parent_id != 0 ){
        $dat = \App\Model\Category::find($dat->parent_id);
    }
    return $dat;
}
