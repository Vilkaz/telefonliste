<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../vendor/components/jquery/jquery.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../lib/DataTables-1.10.12/media/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="../lib/DataTables-1.10.12/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>5d Telefonliste</title>

</head>
<body>
<table id="classList" class="table table-striped table-bordered table-responsive">
    <thead>
    <tr>
        <td>
            <span>Name</span>
        </td>
        <td>
            <span>Festnetz</span>
        </td>
        <td>
            <span>Mobile</span>
        </td>
        <td>
            <span>Adresse</span>
        </td>
        <td>
            <span>Sonstiges</span>
        </td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <span contenteditable='true'>b</span>
        </td>
        <td>
            <span contenteditable='true'>fdbe</span>
        </td>
        <td>
            <span contenteditable='true'>dfb</span>
        </td>
        <td>
            <span contenteditable='true'>dfb</span>
        </td>
        <td>
            <span contenteditable='true'>dfb</span>
        </td>
    </tr>
    <tr>
        <td>
            <span contenteditable='true'>dfbe</span>
        </td>
        <td>
            <span contenteditable='true'>dfb</span>
        </td>
        <td>
            <span contenteditable='true'>dfbere</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
    </tr>
    <tr>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
    </tr>
    <tr>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
    </tr>
    <tr>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
    </tr>
    <tr>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
    </tr>
    <tr>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
    </tr>
    <tr>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
    </tr>
    <tr>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
    </tr>
    <tr>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
        <td>
            <span contenteditable='true'>test here</span>
        </td>
    </tr>

    </tbody>
</table>

</body>
</html>
<script>
    $(document).ready(function () {
        $('#classList').dataTable(
            {
                "lengthChange": false,
                "order": [],
                "bInfo" : false
            }
        );
    });
</script>
