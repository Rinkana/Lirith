<?php
/**
 * Created by IntelliJ IDEA.
 * User: max
 * Date: 19-Dec-15
 * Time: 16:50
 */
use routing\Route;

//Todo: home different
//Todo: set default regex consts
return [
    Route::get(":page","Index")->setConstraints(["page" => ".+"]),
    Route::get("","Index")
];