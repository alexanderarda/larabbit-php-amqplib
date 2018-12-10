<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_csrf" value="{{ csrf_token() }}">
    <title>Larabit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
</head>
<body>

    <div>
        <input id="message-body" type="text" placeholder="Your Message" />
        <button id="btn-add-message">Add Message</button>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script type="text/javascript">
        const newAxiosInstance = axios.create({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'X-Request-With': 'XMLHttpRequest',
            }
        })
        const sendMessage = function() {
            const text = document.getElementById('message-body');
            const textValue = text.value;

            if (textValue.length) {
                newAxiosInstance.post('/', { body: text.value });
            }
        }
        const btn = document.getElementById('btn-add-message');
        btn.addEventListener('click', sendMessage);
    </script>
</body>
</html>
