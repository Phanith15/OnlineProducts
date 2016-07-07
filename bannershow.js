$(document).ready(function(){
    //hide all the images except the first one
    $("#photos img:gt(0)").hide();
    setInterval(function(){
        //get the current image it is the visible one
        var current = $('#photos img:visible');
        // get the immediate next image after the current if exists, otherwise find the first one.
        var next = current.next().length ? current.next(): $('#photos img:eq(0)');
        //Hide the current image
        current.fadeOut(2000);
       //Show the next one
        next.fadeIn(2000);
        },4000);
    });