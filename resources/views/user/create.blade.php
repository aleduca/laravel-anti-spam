<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anti-Spam</title>
  @vite(['resources/css/app.css'])
</head>
<body>
  <!DOCTYPE html>
  <html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <title>Create new User</title>
  </head>
  <body>

    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
      <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">
          Criar conta
        </h2>

        <form method="POST" action="{{ route('user.store') }}" class="space-y-5">
          @csrf

          {{-- Nome --}}
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">
              Nome
            </label>
            <input type="text" name="name" id="name" value="{{ old('name') ?? 'Alexandre Cardoso' }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('name')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Email --}}
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">
              E-mail
            </label>
            <input type="text" name="email" id="email" value="{{ old('email') ?? 'email@email.com.br' }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('email')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Senha --}}
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700">
              Senha
            </label>
            <input type="password" value="123" name="password" id="password" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('password')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
          </div>

          {{-- Botão --}}
          <button type="submit" class="w-full bg-indigo-600 text-white font-medium py-2.5 rounded-lg hover:bg-indigo-700 transition cursor-pointer">
            Criar conta
          </button>
        </form>

        <p class="text-sm text-center text-gray-500 mt-6">
          Já tem conta?
          <a href="#" class="text-indigo-600 hover:underline">
            Entrar
          </a>
        </p>
      </div>
    </div>

  </body>
  </html>
