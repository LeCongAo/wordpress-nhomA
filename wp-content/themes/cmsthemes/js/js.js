var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: -34.397,
            lng: 150.644
        },
        zoom: 8
    });
}
$('.trigger-search').click(function() {
    $('.type-33').toggle('1500');
});
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    console.log(scroll);
    //>=, not <=
    if (scroll >= 300) {
        $('.no-response').hide();
        $('.responsive1').show();
    } else {
        $('.no-response').show();
        $('.responsive1').hide();
    }
});