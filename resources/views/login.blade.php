<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link  rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script src="{{  asset('js/script.js')}}"></script>
</head>
<body>
    
<div class="container" id="container">
	<div class="form-container sign-in-container">

		@if(session('success'))
        <div style="color: green; padding: 10px; border: 1px solid green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Mensagem de erro -->
    @if(session('error'))
        <div style="color: red; padding: 10px; border: 1px solid red; margin-bottom: 10px;">
           {{ session('error') }}
        </div>
    @endif

		<form action="{{ route('login.process') }}" method="POST">
		@csrf
		@method('POST')
			<h1>Login</h1>
			<div class="social-container">
			</div>
			<span>Infome seu login</span>
			<input type="email" placeholder="E-mail" required name="email" id="email" value="{{ old(('email')) }}"/>
			<input type="password" @required(true) name="password" placeholder="Senha" />

			<button type="submit">Entrar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>E aí, operário!</h1>
				<p>Como tá os processos?</p>
			</div>
		</div>
	</div>
</div>

</body>
</html>