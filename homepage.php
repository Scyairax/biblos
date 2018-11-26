<?php
require_once('include/init.php');
require_once('include/controll_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="style/stile.css">
<!-- Latest compiled and minified JavaScript -->
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-right">
        <div class="form-group">
            <label>cerca per titolo</label>
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-warning">Cerca</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-9 tabellone">
        <table class="table table-fixed">
<thead>
<tr>
<th class="col-xs-1">#</th>
<th class="col-xs-5">President</th>
<th class="col-xs-3">Terms</th>
<th class="col-xs-3">Tenure</th>
</tr>
</thead>
<tbody>
<tr>
<td class="col-xs-1">1</td>
<td class="col-xs-5">George Washington</td>
<td class="col-xs-3">two</td>
<td class="col-xs-3">1789-1797</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
</tbody>
</table>
       </div>
        <div class="col-md-3">
              <hr>
            <div class="row">
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <div class="comandi"><button type="button" class="btn btn-primary">inserisci</button></div>
            <hr>
<!-- Indicates a successful or positive action -->
            <div class="comandi"><button type="button" class="btn btn-success">modifica</button></div>
            <hr>
<!-- Contextual button for informational alert messages -->
            <div class="comandi"><button type="button" class="btn btn-info">cancella</button></div>
            <hr>    
        </div>
            <div class="row">
            dovrei essere li sotto
            <div class="col-md-3">

        </div>
            </div>
    </div><!----chiude la colonna da 3---->
</div><!---chiude il row--->
    <div class="row footer">
    <form class="form-inline">
            
            <div class="form-group"> 
                 <div class="footer_insert"><input type="text" class="form-control" id="nome" placeholder="nome"></div>
             </div>
             <div class="form-group">
             <div class="footer_insert"><input type="text" class="form-control" id="cognome" placeholder="cognome"></div>
             </div>
             <div class="form-group"> 
             <div class="footer_insert"><input type="text" class="form-control" id="telefono" placeholder="telefono"></div>
             </div>
             <div class="form-group">  
             <div class="footer_insert">  <input type="text" class="form-control" id="villa" placeholder="villa"></div>
             </div>
             <div class="form-group">
             <div class="footer_insert"><input type="email" class="form-control" id="Email" placeholder="Email"></div>
             </div>
             <br>
             <div class="invio">
         <button id="invio" type="submit" class="btn btn-danger">INVIO</button>
         <button id="reset" class="btn btn-danger" type="reset" value="Reset">CANCELLA</button>
            </div>
        </form>
    </div>
</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>