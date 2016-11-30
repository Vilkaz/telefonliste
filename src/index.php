<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../vendor/components/jquery/jquery.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../lib/DataTables-1.10.12/media/js/jquery.dataTables.js"></script>
    <script src="../src/js/telefonliste.js"></script>
    <link rel="stylesheet" type="text/css" href="../lib/DataTables-1.10.12/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>5d Telefonliste</title>

</head>
<body>
<table id="classList" class="table table-striped table-bordered table-responsive" contentEditable="true">

</table>
<button class="btn btn-default" onclick="list.addNewLine()" >Kind hinzuf&uumlgen</button>
<button class="btn btn-default" onclick="list.init()" >Laden</button>
<button class="btn btn-default" onclick="list.save()" >Speichern</button>

</body>
</html>
<script>
    list.init();
</script>
