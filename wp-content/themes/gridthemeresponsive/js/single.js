/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$( document ).ready(function() {
    
    $('#single-home').click(function ()
    {
        $("body, html").animate({scrollTop: $('#single-profile').position().top}, 'slow');
    });
    
    $('#single-news').click(function ()
    {
        $("body, html").animate({scrollTop: $('.single-news').position().top - 100}, 'slow');
    });

     $('#single-about').click(function ()
    {
        $("body, html").animate({scrollTop: $('.description').position().top - 100}, 'slow');
    });
    
    $('#single-contact').click(function ()
    {
        $("body, html").animate({scrollTop: $('#single-title').position().top - 100}, 'slow');
    });
    
    $(window).scroll(function()
    {
        if ($(window).scrollTop() >= 5) 
        {
            $('#single-header').addClass("hidden");
        }
        if ($(window).scrollTop() < 5) 
        {
            $('#single-header').removeClass("hidden");
        }
    });

   
});