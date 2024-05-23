<!DOCTYPE html>
<html>
<head>
    <title>外语学习</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="text">
        @foreach(explode(' ', $text) as $word)
            <span class="word">{{ $word }}</span>
        @endforeach
    </div>

    <script>
        $(document).ready(function() {
            $('.word').click(function() {
                var word = $(this).text();
                var context = $(this).parent().text(); // 获取整个文本内容作为上下文

                $.ajax({
                    url: '/user/add-word',
                    method: 'POST',
                    data: {
                        word: word,
                        context: context,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        alert('生词已加入生词本');
                    }
                });
            });
        });
    </script>
</body>
</html>