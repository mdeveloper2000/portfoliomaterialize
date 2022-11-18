<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfólio - Cursos</title>        
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- Font-Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        
        <?php $page = "cursos"; ?>
        
        <div class="container">
            <nav>
                <h4 class="center-align" style="margin-top: 0; padding-top: 8px;">
                    Portfólio
                </h4> 
            </nav>
            <nav>
                <div class="nav-wrapper">                    
                    <?php include_once('navbar.php'); ?>
                </div>
            </nav>
            <div class="row">
                <div class="col s8" id="cursos">                           
                </div>
                <div class="col s4 center-align">
                    <?php include_once('propaganda.php'); ?>
                </div>
            </div>
        </div>
        
        <script src="../../js/cursos.js"></script>
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
        
    </body>
    
</html>