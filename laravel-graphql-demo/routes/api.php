<?php

use Illuminate\Support\Facades\Route;
use Rebing\GraphQL\GraphQLController;

// Support both GET and POST methods for GraphQL
//GET || http://127.0.0.1:8000/graphql?query={users{id,name,email}}
Route::match(['get', 'post'], '/graphql', [GraphQLController::class, 'query']);

//POST http://127.0.0.1:8000/graphql  body json || {
   // "query": "mutation { createUser(name: \"Xyz\", email: \"xyz@example.com\", password: \"secret\") { id name email } }"
//}

