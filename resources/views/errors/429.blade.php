<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>429 | Muitas requisições</title>
  @vite(['resources/css/app.css'])

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

  <div class="max-w-md w-full bg-white rounded-2xl shadow-lg p-8 text-center">

    <div class="flex justify-center mb-6">
      <div class="h-16 w-16 flex items-center justify-center rounded-full bg-red-100 text-red-600 text-3xl font-bold">
        429
      </div>
    </div>

    <h1 class="text-2xl font-semibold text-gray-800 mb-2">
      Muitas requisições
    </h1>

    <p class="text-gray-600 mb-6 leading-relaxed">
      Você fez muitas requisições em um curto período de tempo.
      Por favor, aguarde alguns instantes antes de tentar novamente.
    </p>

    <div class="flex flex-col sm:flex-row gap-3 justify-center">
      <a href="{{ url()->previous() }}" class="inline-flex items-center justify-center rounded-xl border border-gray-300 px-5 py-2.5 text-gray-700 hover:bg-gray-100 transition">
        Voltar
      </a>

      <a href="{{ url('/') }}" class="inline-flex items-center justify-center rounded-xl bg-gray-900 px-5 py-2.5 text-white hover:bg-gray-800 transition">
        Ir para o início
      </a>
    </div>

    <p class="text-xs text-gray-400 mt-6">
      Se o problema persistir, tente novamente mais tarde.
    </p>
  </div>

</body>
</html>
