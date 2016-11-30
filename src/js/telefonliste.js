/**
 * Created by Vilkas on 29/11/2016.
 */

var list = {

    headers: [],

    init: function () {
        var parent = this;
        $.ajax({
            url: "data/read.php",
            type: 'GET',
            success: function (data) {
                parent.fillTable(data);
            }

        });

    },
    getData: function () {
        var parent = this;
        $.ajax({
            url: "data/read.php",
            type: "GET",
            data: {
                action: "getData"
            },
            success: parent.fillTable(data),
            dataType: JSON
        });
    },
    fillTable: function (JsonString) {
        var data = JSON.parse(JsonString);
        console.log(data);
        $(document).ready(function () {
                $('#classList').dataTable(
                    {
                        "lengthChange": false,
                        "order": [],
                        "bInfo": false,
                        data: data.adressen,
                        columns: data.columns
                    }
                );
            }
        );
    },
    initHeaders: function () {
        if (this.headers.length==0){
            var parent = this;
            $.each($('#classList thead th'), function () {
                parent.headers.push(this.outerText)
            });
        }
    },
    getRows: function () {
        var rows = [];
        $.each($('#classList tbody tr'), function () {
            rows.push(this)
        });
        return rows;
    },
    getDataAsJson: function () {
        this.initHeaders();
        var rows = this.getRows();
        var adressen = [];
        var parent = this;
        $.each(rows, function (key, value) {
            var adress = {};
            for (var i = 0; i < parent.headers.length; i++) {
                adress[parent.headers[i]] = value.cells[i].outerText;
            }
            adressen.push(adress);
        })
        var data = {
            "adressen": adressen,
            "columns": []
        }
        $.each(parent.headers, function (key, value) {
            data.columns.push(
                {
                    "data": value,
                    "title": value
                }
            )
        })
        return data;
    },
    save: function () {
        var data = this.getDataAsJson();
        $.post("data/save.php", {action: "save", data: data}, function (data) {
            console.log(data);
        });
    },
    clearFreshLineContent: function () {
        var counter = 0;
        var parent = this;
        if (this.headers.length==0){
            parent.initHeaders();
        }
        $.each($("tr:last td"), function (key, value) {
            value.innerText = "";
            value.placeholder = "ASDASDASD"
            if (counter++>=parent.headers.length-1){
                value.innerText = ".";
            }
        })
    }, addNewLine: function () {
        var lastRow = $("tr:last");
        $(lastRow).clone().insertAfter(lastRow);
        this.clearFreshLineContent();
    }

}

