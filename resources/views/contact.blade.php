<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="max-w-3xl mx-auto p-6 mt-10">
        <form action="" method="POST">
            <div class="grid grid-cols-1 gap-6">
                <h2 class="text-3xl font-semibold text-center  mb-6">Contact Us</h2>
                <div class="name">
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name"
                        class="w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter your name" required>
                </div>
                <div class="email">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" class="w-full px-4 py-3 border rounded-md"
                        placeholder="Enter your email" required>
                </div>
                <div class="msg">
                    <label for="message">Message: </label>
                    <textarea name="message" rows="5" class="w-full px-4 py-3 border rounded-md" placeholder="Your message here"
                        required></textarea>
                </div>
                <div class="btn">
                    <button type="submit"
                        class="px-4 py-3 bg-gray-600 text-white font-semibold rounded-md hover:bg-red-600">Submit!</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
