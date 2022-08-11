<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    <!-- <img src="/images/wave3.png" class="fixed hidden lg:block inset-0 h-full"> -->
    <img
      src="/images/wave.png"
      class="fixed hidden lg:block inset-0 h-full"/>
    <img
      src="/images/wave-mini.png"
      class="fixed hidden bottom-0  lg:block"/>
    <div class="w-screen h-screen flex flex-col justify-center items-center">
        <form action="/admin/register" method="post" class="flex flex-col justify-center items-center  z-50">
            @csrf
            <img src="/images/avatar.svg" class="w-32">
            <h2 class="my-8 font-display font-bold text-3xl text-gray-700 text-center">welcome To You</h2>
            <div class="relative">
                <i class="fa fa-user absolute text-[#595cff] text-xl"></i>
                <input type="text" placeholder="Name" name="name" class="pl-8 border-b-2 font-display capitalize text-lg focus:outline-none focus:border-[#595cff] transition ease-in-out duration-500 @error('name')border-red-500 @enderror">
                @error('name')
                    <div class="invalid-feedback text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="relative mt-8">
                <i class="fa fa-user absolute text-[#595cff] text-xl"></i>
                <input type="text" placeholder="Username" name="username" class="pl-8 border-b-2 font-display capitalize text-lg focus:outline-none focus:border-[#595cff] transition ease-in-out duration-500 @error('username')border-red-500 @enderror">
                @error('username')
                    <div class="invalid-feedback text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="relative mt-8">
                <i class="fa fa-lock absolute text-[#595cff] text-xl"></i>
                <input type="Password" placeholder="Password" name="password" class="pl-8 border-b-2 font-display capitalize text-lg focus:outline-none focus:border-[#595cff] transition ease-in-out duration-500 @error('password')border-red-500 @enderror">
                @error('password')
                    <div class="invalid-feedback text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/admin/login" class="place-self-end mt-4 text-gray-600 font-bold">Login</a>
            <a href="#" class="place-self-end text-gray-600 font-bold">Forget Password</a>
            <button type="submit" class="py-3 px-20 bg-gradient-to-r from-[#595cff] to-[#54b8ff] rounded-full text-white font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500">Register </button>
        </form>
    </div>
</body>
</html>