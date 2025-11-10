<!-- SEO Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $pageTitle ?? 'Page' }}</title>
<meta name="description" content="{{ $pageDescription ?? '' }}">
@if(isset($pageKeywords) && !empty($pageKeywords))
<meta name="keywords" content="{{ $pageKeywords }}">
@endif
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url()->current() }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $pageTitle ?? 'Page' }}">
<meta property="og:description" content="{{ $pageDescription ?? '' }}">
<meta property="og:locale" content="fr_FR">
@if(isset($imageUrl) && !empty($imageUrl))
<meta property="og:image" content="{{ $imageUrl }}">
@endif

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="{{ $pageTitle ?? 'Page' }}">
<meta property="twitter:description" content="{{ $pageDescription ?? '' }}">
@if(isset($imageUrl) && !empty($imageUrl))
<meta property="twitter:image" content="{{ $imageUrl }}">
@endif

