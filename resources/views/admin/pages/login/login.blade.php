<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>

    @if (session() -> has ('loginError'))
    <div class="flex absolute right-[50%] translate-x-[50%] p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">Danger alert!</span> Invalid Username or Password.
        </div>
    </div>
    @endif

    <!-- <img src="/images/wave3.png" class="fixed hidden lg:block inset-0 h-full"> -->
    <img
      src="/images/wave.png"
      class="fixed hidden lg:block inset-0 h-full"/>
    <img
      src="/images/wave-mini.png"
      class="fixed hidden bottom-0  lg:block"/>
    <div class="w-screen h-screen flex flex-col justify-center items-center">
        <form class="flex flex-col justify-center items-center z-50" action="/admin/login" method="post">
            @csrf
            <img src="/images/avatar.svg" class="w-32">
            <h2 class="my-8 font-display font-bold text-3xl text-gray-700 text-center">welcome To You</h2>
            <div class="relative">
                <i class="fa fa-user absolute text-[#595cff] text-xl"></i>
                <input type="text" placeholder="Username" name="username" class="pl-8 border-b-2 font-display text-lg focus:outline-none focus:border-[#595cff] transition ease-in-out duration-500 @error('username')border-red-500 @enderror" autofocus required value="{{ old ('username') }}">
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
            <a href="#" class="place-self-end text-gray-600 font-bold mt-4">Forget Password</a>
            <button type="submit" class="py-3 px-20 bg-gradient-to-r from-[#595cff] to-[#54b8ff] rounded-full text-white font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500">Login </button>
        </form>
    </div>
</body>
</html>