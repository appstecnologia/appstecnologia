$(document).ready(function () {

    var teclas = []
    var but = document;

    but.onkeydown = function (e) {

        // console.log(e.keyCode);

        // if (e.keyCode == 70 && e.ctrlKey) {
        //     $("#dataTable_filter").find('.form-control').show().focus();
        //     e.preventDefault();
        // }

        //  console.log(e.keyCode)
        teclas.push(e.keyCode);
        t = '';
        $(teclas).each(function (index, teclas) {
            t = t + '' + '' + teclas

            if (t == '65808083') {
                $('#admmenu').show('show');
            }

        });


    }

    $(".underlinemouse").mouseover(function () {
        $(this).addClass('underlinemouseadd');
    });
    $(".underlinemouse").mouseout(function () {
        $(this).removeClass('underlinemouseadd');
    });
    $('#sobrenosmenu').addClass('menuselecionado');
    $('#sobrenosmenu').click(function () {
        $('#sobrenosmenu').addClass('menuselecionado');
        $('#servicosmenu').removeClass('menuselecionado');
        $('#aplicacoesmenu').removeClass('menuselecionado');
        $('#contatomenu').removeClass('menuselecionado');
        $('#sobrenos').show('swing');
        $('#servicos').hide('slow');
        $('#aplicacoes').hide('slow');
        $('#contato').hide('slow');
    });

    $('#servicosmenu').click(function () {
        $('#sobrenosmenu').removeClass('menuselecionado');
        $('#servicosmenu').addClass('menuselecionado');
        $('#aplicacoesmenu').removeClass('menuselecionado');
        $('#contatomenu').removeClass('menuselecionado');
        $('#sobrenos').hide('hide');
        $('#servicos').show('swing');
        $('#aplicacoes').hide('slow');
        $('#contato').hide('slow');

    });

    $('#aplicacoesmenu').click(function () {
        $('#sobrenosmenu').removeClass('menuselecionado');
        $('#servicosmenu').removeClass('menuselecionado');
        $('#aplicacoesmenu').addClass('menuselecionado');
        $('#contatomenu').removeClass('menuselecionado');
        $('#sobrenos').hide('hide');
        $('#servicos').hide('hide');
        $('#aplicacoes').show('swing');
        $('#contato').hide('slow');
    });

    $('#contatomenu').click(function () {
        $('#sobrenosmenu').removeClass('menuselecionado');
        $('#servicosmenu').removeClass('menuselecionado');
        $('#aplicacoesmenu').removeClass('menuselecionado');
        $('#contatomenu').addClass('menuselecionado');
        $('#sobrenos').hide('hide');
        $('#servicos').hide('hide');
        $('#aplicacoes').hide('hide');
        $('#contato').show('swing');
    });


});

