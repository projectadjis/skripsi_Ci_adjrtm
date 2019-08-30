<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function indexHtml($folderRoot = NULL , $folder1 = NULL, $folder2 = NULL , $folder3 = NULL) 
  {
    ob_start();

    // Create the HTML page content
    print '<!DOCTYPE html>
          <html>
          <head>
            <title>
              403 forbidden access
            </title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

            <style>
	            i {
					color:red;
				}
            </style>
          </head>
          <body>
            <div class="container py-5">
	          	<div class="row">
	                <div class="col-md-2 text-center">
	                    <p><i class="fa fa-exclamation-triangle fa-5x"></i><br/>Status Code: 403</p>
	                </div>
	                <div class="col-md-10">
	                    <h3>Sorry...</h3>
	                    <p>
	                    	Sorry, your access is refused due to security reasons of our server and also our sensitive data.
	                    </p>
	                </div>
	          	</div>
	     	</div>



            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          </body>
          </html>'
  ;

    // At the end of the PHP script, write the buffered content to a file
    $content = ob_get_clean();
    $target  = $folderRoot.$folder1.$folder2.$folder3.'index.html';

    if (!file_exists($target)) {
    	file_put_contents($target, $content);
	}

    // Output the HTML to the browser
    // print $content;
  }

?>