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
    <img
      src="/images/wave.png"
      class="fixed hidden lg:block inset-0 h-full"
      style="z-index: -1;"
    />
    <div
      class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2"
    >
      <img
        src="/images/unlock.svg"
        class="hidden lg:block w-1/2 hover:scale-105 transition-all duration-500 transform mx-auto"
      />
      <form class="flex flex-col justify-center items-center w-1/2">
        <img src="/images/avatar.svg" class="w-32" />
        <h2
          class="my-8 font-display font-bold text-3xl text-gray-700 text-center"
        >
          Welcome to you
        </h2>
        <div class="relative">
          <i class="fa fa-user absolute text-[#F9A826] text-xl"></i>
          <input
            type="text"
            placeholder="username"
            class="pl-8 border-b-2 font-display focus:outline-none focus:border-[#F9A826] transition-all duration-500 capitalize text-lg"
          />
        </div>
        <div class="relative mt-8">
          <i class="fa fa-lock absolute text-[#F9A826] text-xl"></i>
          <input
            type="password"
            placeholder="password"
            class="pl-8 border-b-2 font-display focus:outline-none focus:border-[#F9A826] transition-all duration-500 capitalize text-lg"
          />
        </div>
        <a href="#" class="self-end mt-4 text-gray-600 font-bold"
          >Forgot password?</a
        >
        <a
          href="#"
          class="py-3 px-20 bg-[#F9A826] rounded-full text-white font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500"
          >Login</a
        >
      </form>
    </div>
  </body>
</html>