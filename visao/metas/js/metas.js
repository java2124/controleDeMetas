var cont = true;
var cont2 = true;
var fieldNumber = false;
var fieldCurrent = false;
var appendCurrent = false;
var appendNumber = false;
var title = '';
var description = '';

/*
$(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();
        window.location.href = '../metas/metas.php';
    });
});*/

$(function () {
    $(".buttonProgress").click(function (e) {
        e.preventDefault();
        $(".divButtonFooter").toggle();
        cont2 = false;

        if (cont) {
            $(".modal-footer").append('<div class= "progresso" style="width: 40%;"><p style="color: white; margin-top:10px;">Quanto você conquistou?</p></div> <div class="divButtonFooter2"><input type="number" class="form-control" id="metaProgresso" style="width : 80px;"></div><br>');
            $(".modal-content").append('<div style="display: flex;"> <div class="progresso" style="width: 50%;"><button class="btn backProgress">Voltar</button></div> <div class="progresso" style="width: 50%;"><button class="btn saveProgress" data-dismiss="modal">Salvar</button></div></div>');
            cont = false;
        } else {
            $(".progresso").toggle();
            $(".saveProgress").toggle();
            $(".backProgress").toggle();
            $(".divButtonFooter2").toggle();
        }
    });
});

$(function () {
    $(".modalCreateShow").click(function (e) {
        $("#modalCreate").modal("show");
    });
});

/* $(function () {
    $(".card-body").click(function (e) {
        $("#meuModal").modal("show");
    });
}); */

/* $(function () {
    $(document).on('click', '.saveProgress', function () {
        cont2 = true;
        $(".progresso").toggle();
        $(".saveProgress").toggle();
        $(".backProgress").toggle();
        $(".divButtonFooter2").toggle();
        $(".divButtonFooter").toggle();
        $('#metaProgresso').val("");
        $('.modal').modal('hide');
        $(".alerta").append('<div style= "display: flex; align-items: center" class="alert alert-success alert-dismissible fade show" role="alert" style="align-items: center; display: flex; padding-right: 0;"><div style="width: 90%;">Seu progresso foi salvo com sucesso!</div><div style="width: 10%; padding-right: 5px;"><button type="button" class="btn close" data-dismiss="alert" aria-label="Close"><img src = "img/close.svg"></button></div></div>');
    });
}); */
/* 
$(function () {
    $(document).on('click', '.backProgress', function () {
        cont2 = true;
        $(".progresso").toggle();
        $(".saveProgress").toggle();
        $(".backProgress").toggle();
        $(".divButtonFooter2").toggle();
        $(".divButtonFooter").toggle();
    });
}); */

/* $(function () {
    $(".close").click(function (e) {
        e.preventDefault();
        if (!cont2) {
            $(".divButtonFooter").toggle();
            $(".progresso").toggle();
            $(".saveProgress").toggle();
            $(".backProgress").toggle();
            $(".divButtonFooter2").toggle();
            cont2 = true;
        }
    });
});
 */
$(function () {
    $('#selectType').change(function () {
        var tipo = $(this).val();

        if (tipo == "number") {
            if (!appendNumber) {
                appendNumber = true;
                fieldNumber = true;
                $(".formulario").append('<div class="showNumber"><label>Qual o valor da meta?</label> <input type="number" id="progressNumber" name="progressCurrent" min="1" class = "form-control" style="width:30%;" required/></div>');
            } else {
                $("#progressNumber").attr('required', 'required');
                fieldNumber = true;
                $(".showNumber").toggle();
            }

            if (fieldCurrent) {
                $("#progressCurrent").removeAttr('required');
                $(".showCurrent").toggle();
                fieldCurrent = false;
            }
        } else if (tipo == "current") {
            if (!appendCurrent) {
                appendCurrent = true;
                fieldCurrent = true;
                $(".formulario").append('<div class="showCurrent"><label>Qual o valor da meta?</label> <input type="number" id="progressCurrent" name="progressCurrent" min="1.00" max="10000.00" step="0.50" class = "form-control" style="width:30%;" required/></div>');
            } else {
                $("#progressCurrent").attr('required', 'required');
                $(".showCurrent").toggle();
                fieldCurrent = true;
            }

            if (fieldNumber) {
                $("#progressNumber").removeAttr('required');
                $(".showNumber").toggle();
                fieldNumber = false;
            }
        } else {
            if (fieldNumber) {
                $("#progressNumber").removeAttr('required');
                $(".showNumber").toggle();
                fieldNumber = false;
            }

            if (fieldCurrent) {
                $("#progressCurrent").removeAttr('required');
                $(".showCurrent").toggle();
                fieldCurrent = false;
            }
        }
    });
});

/* $(function () {
    $('.metas').on('submit', function (e) {
        e.preventDefault();

        setTimeout(function () {
            $('#nameMeta').val();
            $('.modal').modal('hide');
            $('#nameMeta').val("");
            $('#selectType').val("");
            $('#description').val("");
            if (fieldNumber) {
                $("#progressNumber").removeAttr('required');
                $(".showNumber").toggle();
                fieldNumber = false;
            }

            if (fieldCurrent) {
                $("#progressCurrent").removeAttr('required');
                $(".showCurrent").toggle();
                fieldCurrent = false;
            }

            $(".alerta").append('<div style= "display: flex; align-items: center" class="alert alert-success alert-dismissible fade show" role="alert" style="align-items: center; display: flex; padding-right: 0;"><div style="width: 90%;">Sua meta foi cadastrada com sucesso!</div><div style="width: 10%; padding-right: 5px;"><button type="button" class="btn close" data-dismiss="alert" aria-label="Close"><img src = "img/close.svg"></button></div></div>');
        }, 10000);

    });
}); */
/* 
$(function () {
    $('.buttonDeleteSave').click(function () {
        $('.modal').modal('hide');
        $('#metaProgresso').val("");
        $(".alerta").append('<div style= "display: flex; align-items: center" class="alert alert-success alert-dismissible fade show" role="alert" style="align-items: center; display: flex; padding-right: 0;"><div style="width: 90%;">Sua meta foi deletada com sucesso!</div><div style="width: 10%; padding-right: 5px;"><button type="button" class="btn close" data-dismiss="alert" aria-label="Close"><img src = "img/close.svg"></button></div></div>');
    });
}); */

$(function () {
    $('.close').click(function () {
        $('.modal').modal('hide');
        $('#metaProgresso').val("");
        $('#nameMeta').val("");
        $('#selectType').val("");
        $('#description').val("");

        if (fieldNumber) {
            $("#progressNumber").removeAttr('required');
            $(".showNumber").toggle();
            fieldNumber = false;
        }

        if (fieldCurrent) {
            $("#progressCurrent").removeAttr('required');
            $(".showCurrent").toggle();
            fieldCurrent = false;
        }
    });
});
