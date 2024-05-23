<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <p id="text-to-select">This is an example sentence. Select the part you want to add to the vocabulary list.</p>
    <button id="add-selected-word">Add Selected Word</button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const button = document.getElementById('add-selected-word');

            button.addEventListener('click', function() {
                const selectedText = window.getSelection().toString().trim();

                if (selectedText) {
                    fetch('/user/add-word', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            word: selectedText,
                            definition: 'Definition here' // 或者你可以添加一个输入框，让用户输入定义
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(errorData => {
                                console.error('Validation errors:', errorData.errors);
                                throw new Error('Validation failed');
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Success:', data);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                } else {
                    alert('Please select some text to add.');
                }
            });
        });
    </script>
</body>
</html>
