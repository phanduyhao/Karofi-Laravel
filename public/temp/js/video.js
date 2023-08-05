// Xử lý Nhúng video
var player;
// Hàm tạo video player từ YouTube Player API
function onYouTubePlayerAPIReady() {
    player = new YT.Player('player', {
        videoId: 'd11sg3Yb4S0', // Thay VIDEO_ID bằng mã video YouTube cần phát
        playerVars: {
            autoplay: 0, // Tắt tự động phát video
        },
    });
}
// Xử lý sự kiện click vào nút play
var btn_youtube = document.querySelector('.btn-youtube')
btn_youtube.addEventListener('click', function () {
    btn_youtube.classList.add('d-none')
    document.querySelector('.bg-video').classList.add('d-none')
    player.playVideo(); // Khi click vào nút, bắt đầu phát video
});
//Scroll Head Page
document.getElementById('backtotop').addEventListener('click', function() {
    // Cuộn lên đầu trang
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Hiệu ứng cuộn mượt (smooth scroll)
    });
});
