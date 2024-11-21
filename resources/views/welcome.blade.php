<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link rel="preconnect"
		href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
		rel="stylesheet" />

	<!-- Styles / Scripts -->
	@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
		@vite(['resources/css/app.css', 'resources/js/app.js'])
	@else
	@endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
	<div class="container mx-auto">
		<main class="mt-20">
			<h1 class="text-2xl font-bold text-neutral-200">
				Hello <span class="text-indigo-300">ElectricSQL</span>
			</h1>

			<p>
				<a class="text-indigo-300 hover:underline"
					href="postgresql://db:db@127.0.0.1:{{ env('DDEV_HOST_DB_PORT', 5432) }}/db?sslmode=disable">Database Url</a>
			</p>
		</main>
	</div>
</body>

</html>