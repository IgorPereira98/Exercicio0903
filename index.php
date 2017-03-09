<?php
$v1=$_GET['inputvalor1'];
$v2=$_GET['inputvalor2'];
$total=$v1+$v2;
?>
<!DOCTYPE html>
<html>
   <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap.min.css" rel="stylesheet">
  </head>
<body>
   <form class="form-horizontal">
  <fieldset>
    <legend><b>FORMULÁRIO</b></legend>
    <div class="form-group">
      <label for="valor1" class="col-lg-1 control-label">Valor 1</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputvalor1" id="inputvalor1" placeholder="Digite um número">
      </div>
      </div>

      <div class="form-group">
      <label for="valor2" class="col-lg-1 control-label">Valor 2</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="inputvalor" id="inputvalor2" placeholder="Digite um número">
      </div>
      </div>

      <div class="form-group">
      <label for="inputresult" class="col-lg-1 control-label"><?=$total;?></label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputresult">
      </div>
      </div>

      <div class="form-group">
      <div class="col-lg-4 col-lg-offset-1">
        <button type="submit" class="btn btn-primary">ENVIAR</button>
      </div>
    </div>
      
    </fieldset>
    </form>
</body>
</html>