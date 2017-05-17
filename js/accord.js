$(document).ready(function(){
    $('ul.akkordeon li > p').click(function(){
        if(!$(this).hasClass('active')){	//если "кликнутый" пункт неактивный:
            $('ul.akkordeon li > p').removeClass('active').next('div').slideLeft(); //делаем неактивными все пункты и скрываем все блоки
            $(this).addClass('active');	//активируем "кликнутый" пункт
            $(this).next('div').slideRight(200);	//раскрываем следующий за ним блок с описанием
        } else {
            $(this).removeClass('active').next('div').slideLeft();	//скрываем данный пункт
        }
    });
});