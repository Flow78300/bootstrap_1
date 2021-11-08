<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Bootstrap the CDN way</title>

    
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">
   
</head>
<body>
    
     
     <div class="container">
        
        
        <style type="text/css"> 
        
        .row{ 
            height : 3rem;
           } 
        .col-1.bg-orange{
            background-color: var(--orange) !important;
        }
        .col-2.bg-orange{
            background-color: var(--orange) !important;
        }
           </style>
       

        <div class="row ">
            <div class="col-1 bg-dark"></div>
            <div class="offset-9"></div>
            <div class="col-1 bg-dark"></div>
        </div>
        
        <div class="row">
            <div class="col-1 bg-dark"></div>
            <div class="offset-3"></div>
            <div class="col-1 bg-orange"></div>
            <div class="col-1 bg-warning"></div>
            <div class="col-1 bg-orange"></div>
            <div class="offset-3"></div>
            <div class="col-1 bg-dark"></div>
        </div>

        <div class="row">
            <div class="col-1 bg-dark"></div>
            <div class="offset-2"></div>
            <div class="col-1 bg-orange"></div>
            <div class="col-1 bg-warning"></div>
            <div class="col-1 bg-dark"></div>
            <div class="col-1 bg-warning"></div>
            <div class="col-1 bg-orange"></div>
            <div class="offset-2"></div>
            <div class="col-1 bg-dark"></div>
        </div>

        <div class="row">
            <div class="col-2 bg-dark"></div>
            <div class="col-2 bg-orange"></div>
            <div class="col-1 bg-warning"></div>
            <div class="col-1 bg-dark"></div>
            <div class="col-1 bg-warning"></div>
            <div class="col-2 bg-orange"></div>
            <div class="col-2 bg-dark"></div>
        </div>

        <div class="row">
            <div class="col-2 bg-dark"></div>
            <div class="offset-1"></div>
            <div class="col-1 bg-orange"></div>
            <div class="col-1 bg-warning"></div>
            <div class="col-1 bg-dark"></div>
            <div class="col-1 bg-warning"></div>
            <div class="col-1 bg-orange"></div>
            <div class="offset-1"></div>
            <div class="col-2 bg-dark"></div>
        </div>

        <div class="row">
            <div class="col-3 bg-dark"></div>
            <div class="offset-1"></div>
            <div class="col-1 bg-orange"></div>
            <div class="col-1 bg-warning"></div>
            <div class="col-1 bg-orange"></div>
            <div class="offset-1"></div>
            <div class="col-3 bg-dark"></div>
        </div>

        <div class="row">
            <div class="offset-1"></div>
            <div class="col-3 bg-dark"></div>
            <div class="offset-3"></div>
            <div class="col-3 bg-dark"></div>
            <div class="offset-1"></div>
        </div>

        <div class="row">
            <div class="offset-2"></div>
            <div class="col-7 bg-dark"></div>
            <div class="offset-2"></div>
        </div>

        <div class="row">
            <div class="offset-3"></div>
            <div class="col-5 bg-dark"></div>
            <div class="offset-3"></div>
        </div>

        <div class="row">
            <div class="offset-4"></div>
            <div class="col-3 bg-dark"></div>
            <div class="offset-4"></div>
        </div>

        <div class="row">
            <div class="offset-4"></div>
            <div class="col-3 bg-dark"></div>
            <div class="offset-4"></div>
        </div>
    </div>
    

     
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"crossorigin="anonymous"></script>
    </body>
</html>