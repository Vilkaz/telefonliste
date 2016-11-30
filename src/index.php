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
    <link rel="stylesheet" href="../lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>5d Telefonliste</title>

</head>
<body>
<h4>Bitte nach einfügen/verändern der Daten auf "Speichern" klicken, sonst werden die Änderungen nicht übernommen ! </h4>
<table id="classList" class="table table-striped table-bordered table-responsive" contentEditable="true">

</table>
<button class="btn btn-default floatLeft" onclick="list.addNewLine()" ><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;Kind hinzuf&uumlgen</button>
<button class="btn btn-default" onclick="list.save()" ><i class="fa fa-floppy-o fa-2x" aria-hidden="true"></i>Speichern</button>

</body>
</html>
<script>
    list.init();
</script>
