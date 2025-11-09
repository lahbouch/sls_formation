<!DOCTYPE html><html lang="fr" style=""><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ ucwords(strtolower($article->titre)) }} - Actualités</title>
  <style>a,abbr,acronym,address,applet,b,big,blockquote,button,caption,center,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,font,footer,form,h1,h2,h3,h4,h5,h6,header,i,iframe,img,ins,kbd,label,legend,li,nav,object,ol,p,pre,q,s,samp,section,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,title,tr,tt,u,ul,var{background:transparent;border:0;margin:0;outline:0;padding:0;vertical-align:baseline}body,html{background:transparent;border:0;margin:0;outline:0;padding:0;vertical-align:baseline}body{--scrollbar-width:0px;font-family:Arial,Helvetica,sans-serif;font-size:10px}body,html{height:100%}body{overflow-x:auto;overflow-y:scroll}</style>
</head>
<body class="">
<div id="SITE_CONTAINER"><div id="main_MF" class="main_MF"><div id="site-root" class="site-root"><div id="masterPage" class="mesh-layout masterPage css-editing-scope">
  <x-navbar></x-navbar>
  
  <main id="PAGES_CONTAINER" class="PAGES_CONTAINER" tabindex="-1" data-main-content="true">
    <div id="SITE_PAGES" class="JsJXaX SITE_PAGES">
      <div id="SITE_PAGES_TRANSITION_GROUP" class="AnQkDU">
        <div id="article-details-page" class="dBAkHi">
          <div class="PFkO7r wixui-page" data-testid="page-bg"></div>
          <div class="HT5ybB">
            <div id="Container-article-details" class="SPY_vo">
              <div data-mesh-id="Container-article-details-inlineContent" data-testid="inline-content" class="">
                <div data-mesh-id="Container-article-details-inlineContent-gridContainer" data-testid="mesh-container-content">
                  <section id="comp-article-section" tabindex="-1" class="Oqnisf comp-article-section wixui-section" data-block-level-container="ClassicSection">
                    <div id="bgLayers_comp-article-section" data-hook="bgLayers" data-motion-part="BG_LAYER comp-article-section" class="MW5IWV">
                      <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                      <div id="bgMedia_comp-article-section" data-motion-part="BG_MEDIA comp-article-section" class="VgO9Yg"></div>
                    </div>
                    <div data-mesh-id="comp-article-section-inlineContent" data-testid="inline-content" class="">
                      <div data-mesh-id="comp-article-section-inlineContent-gridContainer" data-testid="mesh-container-content" style="max-width: 980px; margin: 0 auto; padding: 40px 20px;">
                        <!-- Article Image -->
                        @if($article->image)
                          @php
                            $articleImageUrl = \Illuminate\Support\Facades\Storage::disk('public')->url($article->image);
                          @endphp
                          <div style="width: 100%; margin-bottom: 30px;">
                            <img src="{{ $articleImageUrl }}" alt="{{ $article->titre }}" style="width: 100%; height: auto; max-height: 500px; object-fit: cover; border-radius: 8px;">
                          </div>
                        @endif
                        
                        <!-- Article Category -->
                        @if($article->articleType)
                          <div class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx" data-testid="richTextElement" style="margin-bottom: 10px;">
                            <p class="font_8 wixui-rich-text__text" style="font-size: 14px; line-height: normal; color: #113c66;">
                              <span style="font-family: avenir-lt-w01_35-light1475496, avenir-lt-w05_35-light, sans-serif;" class="wixui-rich-text__text">
                                {{ ucwords(strtolower($article->articleType->nom)) }}
                              </span>
                            </p>
                          </div>
                        @endif
                        
                        <!-- Article Title -->
                        <div class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx" data-testid="richTextElement" style="margin-bottom: 20px;">
                          <h1 class="font_2 wixui-rich-text__text" style="font-size: 36px; line-height: 1.2em; color: #113c66;">
                            <span style="font-family: avenir-lt-w01_85-heavy1475544, avenir-lt-w05_85-heavy, sans-serif; font-weight: bold;" class="wixui-rich-text__text">
                              {{ ucwords(strtolower($article->titre)) }}
                            </span>
                          </h1>
                        </div>
                        
                        <!-- Article Date -->
                        @if($article->date_created)
                          <div class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx" data-testid="richTextElement" style="margin-bottom: 30px;">
                            <p class="font_8 wixui-rich-text__text" style="font-size: 14px; line-height: normal; color: #666;">
                              <span style="font-family: avenir-lt-w01_35-light1475496, avenir-lt-w05_35-light, sans-serif;" class="wixui-rich-text__text">
                                Publié le {{ $article->date_created->format('d/m/Y') }}
                              </span>
                            </p>
                          </div>
                        @endif
                        
                        <!-- Article Content -->
                        @if($article->content)
                          <div class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx" data-testid="richTextElement" style="margin-bottom: 40px;">
                            <div class="font_8 wixui-rich-text__text" style="font-size: 16px; line-height: 1.8em; color: #333;">
                              <span style="font-family: avenir-lt-w01_35-light1475496, avenir-lt-w05_35-light, sans-serif;" class="wixui-rich-text__text">
                                {!! $article->content !!}
                              </span>
                            </div>
                          </div>
                        @endif
                        
                        <!-- Back Button -->
                        <div class="KaEeLN" style="margin-top: 40px;">
                          <div class="uYj0Sg wixui-box" data-testid="container-bg"></div>
                          <div data-mesh-id="back-button-inlineContent" data-testid="inline-content" class="">
                            <div data-mesh-id="back-button-inlineContent-gridContainer" data-testid="mesh-container-content">
                              <div class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx" data-testid="richTextElement">
                                <h1 class="font_0 wixui-rich-text__text" style="font-size: 16px; line-height: normal;">
                                  <a href="{{ route('actualites') }}" target="_self" class="wixui-rich-text__text" style="text-decoration: none;">
                                    <span style="font-size: 16px;" class="wixui-rich-text__text">
                                      <span style="font-family: avenir-lt-w01_35-light1475496, avenir-lt-w05_35-light, sans-serif;" class="wixui-rich-text__text">
                                        <span class="color_11 wixui-rich-text__text" style="color: #113c66;">
                                          <span style="letter-spacing: normal;" class="wixui-rich-text__text">← Retour aux actualités</span>
                                        </span>
                                      </span>
                                    </span>
                                  </a>
                                </h1>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <div id="soapAfterPagesContainer" class="page-without-sosp soapAfterPagesContainer page-without-sosp">
    <div data-mesh-id="soapAfterPagesContainerinlineContent" data-testid="inline-content" class="">
      <div data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer" data-testid="mesh-container-content">
        <div id="comp-jn4hmzm6" style="display:none"></div>
        <div id="CONTROLLER_COMP_CUSTOM_ID" style="display:none"></div>
      </div>
    </div>
  </div>
</div></div></div>

<x-footer></x-footer>

</div>
</body>
</html>

