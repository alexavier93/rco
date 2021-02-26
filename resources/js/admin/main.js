(function ($) {
    "use strict";


    $(document).on('click', '.delete', function () {
        var id = $(this).attr('data-id');
        $('#id').val(id);
    });

    // Jquery Mask
    $('.money').mask("#.##0,00", { reverse: true });
    $('.cm').mask('##0,00', { reverse: true });
    $('.mes_ano').mask('00/0000');


    $('.summernote').summernote({
        lang: 'pt-BR',
        height: 200,
        fontNames: ['Noto Sans JP','Signika','Open Sans','Arial'],
        fontNamesIgnoreCheck: ['Nunito','Segoe UI'],
        fontSizeUnits: ['px', 'pt'],
        styleTags: [
            'p',
                { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
                'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
        toolbar: [
            ['style'],
            ['font', ['bold', 'underline', 'clear', 'font']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table'],
            ['insert', ['link']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:5,
        responsiveClass:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            1000:{
                items:1,
                loop:false
            }
        }
    });


    $('.select').select2({
        placeholder: "Selecione uma opção",
    });


    $(function($){       

        $("#geocompletecad").geocomplete({
            country: 'BR',
            map: "#mapa",
            details: "form",
            types: ["geocode", "establishment"],
        });

        $("#find").click(function(){
            $("#geocompletecad").trigger("geocode");
        }).click();

    });

})(jQuery, window, document);