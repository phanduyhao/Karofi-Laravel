
$(document).ready(function() {
    // Xử lý Click Thêm Active
    function addActive(event, selector) {
        // Xóa class 'active' khỏi tất cả các thẻ có class 'active'
        $(selector).removeClass('active');
        // Thêm class 'active' vào thẻ được click
        $(event.target).addClass('active');
    }
    $('.category-item').click(function(event) {
        addActive(event, '.category-item');
    });
    $('#water_health .cate-child__item').click(function(event) {
        addActive(event, '#water_health .cate-child__item');
    });
    $('#solution .cate-child__item').click(function(event) {
        addActive(event, '#solution .cate-child__item');
    });
    $('#introduce .cate-child__item').click(function(event) {
        addActive(event, '#introduce .cate-child__item');
    });
    $(' .list-video').click(function(event) {
        event.preventDefault()
        $(' .list-video').removeClass('active');
        $(this).addClass('active')
    });
});
