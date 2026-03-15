@extends('autenticacion.app')
@section('titulo', 'Sistema - Cambiar Password')
@section('contenido')

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Recuperar contraseña</h2>
     @if(session('error'))
       <div class="text-xs text-red-700 font-medium block">
            <span>{{session('error')}}</span><br>
        </div>
    @endif

    <form class="space-y-4" action="{{route('password.update')}}" method="post">
    @csrf
      <input type="hidden" name="token" value="{{ $token }}">
    <div>
        <label for="resetEmail" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        @error('email')
            <div class="text-xs text-red-700 font-medium block">{{ $message }}</div>
        @enderror
        <input
          id="resetEmail"
          type="email"
          name="email"
          value="{{old('email')}}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="your@email.com"
        />
      </div>

      <div>
        <label for="resetPassword" class="block text-sm font-medium text-gray-700 mb-1">Nueva Contraseña</label>
        @error('password')
            <div class="text-xs text-red-700 font-medium block">{{ $message }}</div>
        @enderror
        <input
          id="resetPassword"
          type="password"
          name="password"
          type="password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="••••••••"
        />
      </div>

      <div>
        <label for="resetConfirmationPassword" class="block text-sm font-medium text-gray-700 mb-1">Confirmar Nueva Contraseña</label>
        @error('password_confirmation')
            <div class="text-xs text-red-700 font-medium block">{{ $message }}</div>
        @enderror
        <input
          id="resetConfirmationPassword"
          type="password"
          name="password_confirmation"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="••••••••"
        />
      </div>

      <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors">
        Actualizar Contraseña
      </button>
    </form>

  </div>
</div>
@endsection


