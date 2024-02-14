$(function(){
    $('#btVeiculos').click(()=>{
        $('#btOutros').removeClass('btSelected');
        $('#btVeiculos').addClass('btSelected');

        $('#contOutros').fadeOut(50);
        setTimeout(() => {
            $('#contVeiculos').fadeIn(50);
        }, 50);
    })
    $('#btOutros').click(()=>{
        $('#btVeiculos').removeClass('btSelected');
        $('#btOutros').addClass('btSelected');

        $('#contVeiculos').fadeOut(50);
        setTimeout(() => {
            $('#contOutros').fadeIn(50);
        }, 50);
    })
})