$(document).ready(function () {
    $('.video-contain').each(function () {
        var idVideoContain = $(this).attr('id');
        var players = {};

        function onYouTubePlayerAPIReady() {
            destroyOldPlayers();
            initializePlayers();
        }
        function destroyOldPlayers() {
            for (var playerId in players) {
                if (players.hasOwnProperty(playerId)) {
                    players[playerId].destroy();
                }
            }
            players = {}; // Reset the players object
        }
        function initializePlayers() {
            $('#' + idVideoContain + ' .video-player').each(function () {
                var videoId = $(this).attr('id');
                var playerId = $(this).find('.player').attr('id');

                players[playerId] = new YT.Player(playerId, {
                    videoId: videoId,
                    playerVars: {
                        autoplay: 0,
                    },
                });
                var playButton = $(this).find('.btn-youtube');
                var backgroundImage = $(this).find('.bg-video');

                playButton.off('click');

                playButton.on('click', function () {
                    playButton.addClass('d-none');
                    backgroundImage.addClass('d-none');
                    players[playerId].playVideo();
                });
            });
            $('#' + idVideoContain + ' .list-video').off('click');
            $('#' + idVideoContain + ' .list-video').on('click', function (event) {
                event.preventDefault();
                var targetVideoId = $(this).attr('data-target');
                for (var id in players) {
                    if (id !== targetVideoId) {
                        players[id].stopVideo();
                        $('#' + id + ' .btn-youtube').removeClass('d-none').addClass('d-block');
                        $('#' + id + ' .bg-video').removeClass('d-none').addClass('d-block');
                    }
                }
                $('#' + idVideoContain + ' .video-player').addClass('d-none');
                $('#' + targetVideoId).removeClass('d-none');

                $('#' + idVideoContain + ' .list-video').removeClass('active');
                $(this).addClass('active');

                // Thêm đoạn code sau để ẩn bg-video và btn-video khi chuyển sang danh mục khác
                $('.bg-video').addClass('d-block').removeClass('d-none');
                $('.btn-youtube').addClass('d-block').removeClass('d-none');
            });
        }
        function stopAllVideos() {
            for (var id in players) {
                players[id].stopVideo();
                $('#' + id + ' .btn-youtube').removeClass('d-none').addClass('d-block');
                $('#' + id + ' .bg-video').removeClass('d-none').addClass('d-block');
            }
        }
        initializePlayers();
        // Xử lý sự kiện chuyển tab
        $(".main-content__cate .cate-child__item").click(function () {
            stopAllVideos();
            var cateID = $(this).closest('.main-content__cate').attr('id'); // Lấy ID của phần tử cha gần nhất có class main-content__cate
            var itemId = $(this).attr("id");
            // Thêm đoạn code sau để ẩn bg-video và btn-video khi chuyển sang danh mục khác
            $('.bg-video').addClass('d-block').removeClass('d-none');
            $('.btn-youtube').addClass('d-block').removeClass('d-none');
            // VIDEO
            $("#" + cateID + " .video-contain").addClass("d-none");
            $("#" + cateID + " .video-contain").removeClass("d-flex");
            // Hiển thị swiper-content tương ứng với tab được click
            $("#" + itemId + ".video-contain").removeClass("d-none");
            $("#" + itemId + ".video-contain").addClass("d-flex");
        });
    });
});
