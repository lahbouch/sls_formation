@php
    $companyName = 'SLS Formation et Conseils';
    $siteUrl = config('app.url', url('/'));
    $defaultImage = asset('images/logo.png'); // You can set a default logo image
    $pageTitle = $pageTitle ?? 'Page';
    $pageDescription = $pageDescription ?? 'SLS Formation et Conseils - Votre partenaire de confiance pour la formation professionnelle et le conseil.';
    $pageKeywords = $pageKeywords ?? 'formation professionnelle, conseil, SLS, formation continue, développement professionnel';
    $imageUrl = $imageUrl ?? $defaultImage;
    $canonicalUrl = $canonicalUrl ?? url()->current();
@endphp

<!-- Primary Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $pageTitle }} | {{ $companyName }}</title>
<meta name="title" content="{{ $pageTitle }} | {{ $companyName }}">
<meta name="description" content="{{ $pageDescription }}">
@if(isset($pageKeywords) && !empty($pageKeywords))
<meta name="keywords" content="{{ $pageKeywords }}">
@endif
<meta name="author" content="{{ $companyName }}">
<meta name="robots" content="index, follow">
<meta name="language" content="French">
<meta name="revisit-after" content="7 days">
<link rel="canonical" href="{{ $canonicalUrl }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $ogType ?? 'website' }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:title" content="{{ $pageTitle }} | {{ $companyName }}">
<meta property="og:description" content="{{ $pageDescription }}">
<meta property="og:image" content="{{ $imageUrl }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="fr_FR">
<meta property="og:site_name" content="{{ $companyName }}">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $canonicalUrl }}">
<meta name="twitter:title" content="{{ $pageTitle }} | {{ $companyName }}">
<meta name="twitter:description" content="{{ $pageDescription }}">
<meta name="twitter:image" content="{{ $imageUrl }}">

<!-- Additional SEO -->
<meta name="theme-color" content="#113C66">
<meta name="msapplication-TileColor" content="#113C66">
