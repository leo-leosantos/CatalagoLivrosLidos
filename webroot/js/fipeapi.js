const IdDropDownMarcas = "marcas";
const IdInputVeiculos = "modelo";
const IdDropDownAnoModelo = "anomodelo";
const IdInputPreco = "preco-fipe";
var autoCompleteValues;
var IdVeiculo;

function getMarcas(tipo) {
    $.ajax({
        type: 'GET',
        dataType: "json",
        url: 'http://fipeapi.appspot.com/api/1/' + tipo + '/marcas.json',
        success: function (data) {
            buildDropdown(
                data, IdDropDownMarcas
            );
        }
    });

    $('#' + IdDropDownMarcas).change(function () {
        var value = $('#' + IdDropDownMarcas).val();
        if ((value != undefined) && (value != "")) {
            getVeiculosByMarcas(value);
        }
    });
}

function getVeiculosByMarcas(idMarca) {
    if (document.getElementById('tipo-veiculo').value != null) {
        var tipoveiculo = document.getElementById('tipo-veiculo').value;
    }
    else {
        var tipoveiculo = "carros";
    }
    $.ajax({
        type: 'GET',
        dataType: "json",
        url: 'http://fipeapi.appspot.com/api/1/' + tipoveiculo + '/veiculos/' + idMarca + '.json',
        success: function (data) {
            autoCompleteValues = data;
            buildAutoComplete(
                data, IdInputVeiculos
            );
        }
    });

    $('#' + IdDropDownAnoModelo).one('click', function () {
        var value = $('#' + IdInputVeiculos).val();
        if ((value != undefined) && (value != "")) {
            $.each(autoCompleteValues, function (k, v) {
                if (v.name == value)
                    getAnoModelosByVeiculosAndMarcas($('#' + IdDropDownMarcas).val(), v.id);
            });
        }
    });
}

function getAnoModelosByVeiculosAndMarcas(idMarca, idVeiculo) {
    if (document.getElementById('tipo-veiculo').value != null) {
        var tipoveiculo = document.getElementById('tipo-veiculo').value;
    }
    else {
        var tipoveiculo = "carros";
    }
    $.ajax({
        type: 'GET',
        dataType: "json",
        url: 'http://fipeapi.appspot.com/api/1/' + tipoveiculo + '/veiculo/' + idMarca + '/' + idVeiculo + ".json",
        success: function (data) {
            buildDropdown(
                data, IdDropDownAnoModelo
            );
        }
    });

    IdVeiculo = idVeiculo;

    $('#' + IdDropDownAnoModelo).change(function () {
        var value = $('#' + IdDropDownAnoModelo).val();
        if ((value != undefined) && (value != "")) {
            getPrecoVeiculo($('#' + IdDropDownMarcas).val(), IdVeiculo, value);
        }
    });
}

function getPrecoVeiculo(idMarca, idVeiculo, idAnoModelo) {
    if (document.getElementById('tipo-veiculo').value != null) {
        var tipoveiculo = document.getElementById('tipo-veiculo').value;
    }
    else {
        var tipoveiculo = "carros";
    }
    if (idAnoModelo != "Selecione...") {
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: 'http://fipeapi.appspot.com/api/1/' + tipoveiculo + '/veiculo/' + idMarca + '/' + idVeiculo + '/' +
                idAnoModelo + '.json',
            success: function (data) {
                $('#' + IdInputPreco).val(data.preco);
            }
        });
    }
}

/* Métodos de manipulação dos controles na tela */
function buildDropdown(data, idDropDown) {
    var dropdown = $('#' + idDropDown);
    dropdown.empty();
    dropdown.append('<option>Selecione...</option>');
    if (data != '') {
        $.each(data, function (k, v) {
            dropdown.append('<option value="' + v.id + '">' + v.name + '</option>');
        });
    }
}

function buildAutoComplete(data, idInput) {
    var array = [];
    $.each(data, function (k, v) {
        array.push(v.name);
    });
    autocomplete(document.getElementById(idInput), array);
}

function getSelectValue() {

    if ((document.getElementById('tipo-veiculo').value) != undefined && (document.getElementById('tipo-veiculo').value) != null) {
        getMarcas(document.getElementById('tipo-veiculo').value);
    }
}
