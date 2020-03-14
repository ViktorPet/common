<?php


      // Access request  via dependency injection

      public function store(Request $request){

        $name = $request->input('name');

      }

      // Access via ReflectionParameter

      public function update(Request $request. $id)
      {


      }

      // Reequest via route LuaClosure

      Route::get('/myroute', function(Request $request){

      });

      // Request the Path / just /my/path to resourse
      // also check if the path match given pattern


      $path = $request->path();

      if($request->is('/admin'))

      // Retrieve Url and fulUrl including query string


      $url = $request->url();

      $fullUrl = $request->$fullUrl();

      // RETIEVING psr 7 Request

    //       composer require symfony/psr-http-message-bridge
    // composer require nyholm/psr7
    // Once you have installed these libraries, you may obtain a PSR-7 request by type-hinting the request interface on your route Closure or controller method:

      use Psr\Http\Message\ServerRequestInterface;

      // Retrieve request _methods

      $method = $request->method();


      // Retrieve all input data as an array


      $all = $request->all()

      // Retrieve User Input::${1|get,has,all,only,except|}(

      $name = $request->input('name');


      // pass default value as second InvalidArgumentException

      $default = $request->input('name','Saly');




      // Retrieving data from form as an array using dot syntax

      $name = $request->input('products.0.name');

      $name = $request->input('products.*.name');


        // retrieve all users Input use input without any arguments

         $all = $request->input();

        // Accessing values in query string

        $myquery = $request->query('name');

        // if requested query value is not presented we can attach an default value(

      /  $name = $request->query('name','Vik');

        // Use query method without any arguments to retieve all values



        $all = $request->query();


        // accessing via dynamic KTaglib_MPEG_AudioProperties

        $name = $request->name // if one of the input field comatins name name http_post_fields


        // Retrieving json requested using dot stream_notification_callback

        $name = $request->input('user.name');


        // Retrievuing subset of input data use only and except as retieving single array or dynamic list of arguments


        $input = $request->only(['username', 'password'])

        $input = $request->except(['credit_card']);


        // determing if input field is presented


        $input = $request->has('name');

        // MultipleIterator
        $input = $request->has(['name','email'])

        // Flash to the Yaf_Session

        $request->flash()
