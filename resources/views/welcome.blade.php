<!DOCTYPE html>
<html lang="fr" style="">
  <head>
    <!-- Safari Pinned Tab Icon -->
    <!-- <link rel="mask-icon" href="https://www.wix.com/favicon.ico"> -->

    <!-- Original trials -->

    <!-- Segmenter Polyfill -->

    <!-- Legacy Polyfills -->

    <!-- Performance API Polyfills -->

    <!-- Globals Definitions -->

    <!-- Essential Viewer Model -->

    <!-- BEGIN handleAccessTokens bundle -->

    <!-- END handleAccessTokens bundle -->

    <!-- BEGIN overrideGlobals bundle -->

    <!-- END overrideGlobals bundle -->

    <!-- Initial CSS -->
    <style>
      @keyframes slide-horizontal-new {
        0% {
          transform: translateX(100%);
        }
      }
      @keyframes slide-horizontal-old {
        80% {
          opacity: 1;
        }
        to {
          opacity: 0;
          transform: translateX(-100%);
        }
      }
      @keyframes slide-vertical-new {
        0% {
          transform: translateY(-100%);
        }
      }
      @keyframes slide-vertical-old {
        80% {
          opacity: 1;
        }
        to {
          opacity: 0;
          transform: translateY(100%);
        }
      }
      @keyframes out-in-new {
        0% {
          opacity: 0;
        }
      }
      @keyframes out-in-old {
        to {
          opacity: 0;
        }
      }
      :root:active-view-transition {
        view-transition-name: none;
      }
      ::view-transition {
        pointer-events: none;
      }
      :root:active-view-transition::view-transition-new(page-group),
      :root:active-view-transition::view-transition-old(page-group) {
        animation-duration: 0.6s;
        cursor: wait;
        pointer-events: all;
      }
      :root:active-view-transition-type(SlideHorizontal)::view-transition-old(
          page-group
        ) {
        animation: slide-horizontal-old 0.6s cubic-bezier(0.83, 0, 0.17, 1)
          forwards;
        mix-blend-mode: normal;
      }
      :root:active-view-transition-type(SlideHorizontal)::view-transition-new(
          page-group
        ) {
        animation: slide-horizontal-new 0.6s cubic-bezier(0.83, 0, 0.17, 1)
          backwards;
        mix-blend-mode: normal;
      }
      :root:active-view-transition-type(SlideVertical)::view-transition-old(
          page-group
        ) {
        animation: slide-vertical-old 0.6s cubic-bezier(0.83, 0, 0.17, 1)
          forwards;
        mix-blend-mode: normal;
      }
      :root:active-view-transition-type(SlideVertical)::view-transition-new(
          page-group
        ) {
        animation: slide-vertical-new 0.6s cubic-bezier(0.83, 0, 0.17, 1)
          backwards;
        mix-blend-mode: normal;
      }
      :root:active-view-transition-type(OutIn)::view-transition-old(
          page-group
        ) {
        animation: out-in-old 0.35s cubic-bezier(0.64, 0, 0.78, 0) forwards;
      }
      :root:active-view-transition-type(OutIn)::view-transition-new(
          page-group
        ) {
        animation: out-in-new 0.35s cubic-bezier(0.22, 1, 0.36, 1) 0.35s
          backwards;
      }
      @media (prefers-reduced-motion: reduce) {
        ::view-transition-group(*),
        ::view-transition-new(*),
        ::view-transition-old(*) {
          animation: none !important;
        }
      }
      body,
      html {
        background: transparent;
        border: 0;
        margin: 0;
        outline: 0;
        padding: 0;
        vertical-align: baseline;
      }
      body {
        --scrollbar-width: 0px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
      }
      body,
      html {
        height: 100%;
      }
      body {
        overflow-x: auto;
        overflow-y: scroll;
      }
      body:not(.responsive) #site-root {
        min-width: var(--site-width);
        width: 100%;
      }
      body:not([data-js-loaded]) [data-hide-prejs] {
        visibility: hidden;
      }
      wix-interact-element {
        display: contents;
      }
      #SITE_CONTAINER {
        position: relative;
      }
      :root {
        --one-unit: 1vw;
        --section-max-width: 9999px;
        --spx-stopper-max: 9999px;
        --spx-stopper-min: 0px;
        --browser-zoom: 1;
      }
      @supports (-webkit-appearance: none) and (stroke-color: transparent) {
        :root {
          --safari-sticky-fix: opacity;
          --experimental-safari-sticky-fix: translateZ(0);
        }
      }
      @supports (container-type: inline-size) {
        :root {
          --one-unit: 1cqw;
        }
      }
      [id^="oldHoverBox-"] {
        mix-blend-mode: plus-lighter;
        transition: opacity 0.5s ease, visibility 0.5s ease;
      }
      [data-mesh-id$="inlineContent-gridContainer"]:has(
          > [id^="oldHoverBox-"]
        ) {
        isolation: isolate;
      }
    </style>
    <style>
      a,
      abbr,
      acronym,
      address,
      applet,
      b,
      big,
      blockquote,
      button,
      caption,
      center,
      cite,
      code,
      dd,
      del,
      dfn,
      div,
      dl,
      dt,
      em,
      fieldset,
      font,
      footer,
      form,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      header,
      i,
      iframe,
      img,
      ins,
      kbd,
      label,
      legend,
      li,
      nav,
      object,
      ol,
      p,
      pre,
      q,
      s,
      samp,
      section,
      small,
      span,
      strike,
      strong,
      sub,
      sup,
      table,
      tbody,
      td,
      tfoot,
      th,
      thead,
      title,
      tr,
      tt,
      u,
      ul,
      var {
        background: transparent;
        border: 0;
        margin: 0;
        outline: 0;
        padding: 0;
        vertical-align: baseline;
      }
      input,
      select,
      textarea {
        box-sizing: border-box;
        font-family: Helvetica, Arial, sans-serif;
      }
      ol,
      ul {
        list-style: none;
      }
      blockquote,
      q {
        quotes: none;
      }
      ins {
        text-decoration: none;
      }
      del {
        text-decoration: line-through;
      }
      table {
        border-collapse: collapse;
        border-spacing: 0;
      }
      a {
        cursor: pointer;
        text-decoration: none;
      }
      .testStyles {
        overflow-y: hidden;
      }
      .reset-button {
        -webkit-appearance: none;
        background: none;
        border: 0;
        color: inherit;
        font: inherit;
        line-height: normal;
        outline: 0;
        overflow: visible;
        padding: 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
      }
      :focus {
        outline: none;
      }
      body.device-mobile-optimized:not(.disable-site-overflow) {
        overflow-x: hidden;
        overflow-y: scroll;
      }
      body.device-mobile-optimized:not(.responsive) #SITE_CONTAINER {
        margin-left: auto;
        margin-right: auto;
        overflow-x: visible;
        position: relative;
        width: 320px;
      }
      body.device-mobile-optimized:not(.responsive):not(.blockSiteScrolling)
        #SITE_CONTAINER {
        margin-top: 0;
      }
      body.device-mobile-optimized > * {
        max-width: 100% !important;
      }
      body.device-mobile-optimized #site-root {
        overflow-x: hidden;
        overflow-y: hidden;
      }
      @supports (overflow: clip) {
        body.device-mobile-optimized #site-root {
          overflow-x: clip;
          overflow-y: clip;
        }
      }
      body.device-mobile-non-optimized #SITE_CONTAINER #site-root {
        overflow-x: clip;
        overflow-y: clip;
      }
      body.device-mobile-non-optimized.fullScreenMode {
        background-color: #5f6360;
      }
      body.device-mobile-non-optimized.fullScreenMode #MOBILE_ACTIONS_MENU,
      body.device-mobile-non-optimized.fullScreenMode #SITE_BACKGROUND,
      body.device-mobile-non-optimized.fullScreenMode #site-root,
      body.fullScreenMode #WIX_ADS {
        visibility: hidden;
      }
      body.fullScreenMode {
        overflow-x: hidden !important;
        overflow-y: hidden !important;
      }
      body.fullScreenMode.device-mobile-optimized #TINY_MENU {
        opacity: 0;
        pointer-events: none;
      }
      body.fullScreenMode-scrollable.device-mobile-optimized {
        overflow-x: hidden !important;
        overflow-y: auto !important;
      }
      body.fullScreenMode-scrollable.device-mobile-optimized #masterPage,
      body.fullScreenMode-scrollable.device-mobile-optimized #site-root {
        overflow-x: hidden !important;
        overflow-y: hidden !important;
      }
      body.fullScreenMode-scrollable.device-mobile-optimized #SITE_BACKGROUND,
      body.fullScreenMode-scrollable.device-mobile-optimized #masterPage {
        height: auto !important;
      }
      body.fullScreenMode-scrollable.device-mobile-optimized
        #masterPage.mesh-layout {
        height: 0 !important;
      }
      body.blockSiteScrolling,
      body.siteScrollingBlocked {
        position: fixed;
        width: 100%;
      }
      body.blockSiteScrolling #SITE_CONTAINER {
        margin-top: calc(var(--blocked-site-scroll-margin-top) * -1);
      }
      #site-root {
        margin: 0 auto;
        min-height: 100%;
        position: relative;
        top: var(-height);
      }
      #site-root img:not([src]) {
        visibility: hidden;
      }
      #site-root svg img:not([src]) {
        visibility: visible;
      }
      .auto-generated-link {
        color: inherit;
      }
      #SCROLL_TO_BOTTOM,
      #SCROLL_TO_TOP {
        height: 0;
      }
      .has-click-trigger {
        cursor: pointer;
      }
      .fullScreenOverlay {
        bottom: 0;
        display: flex;
        justify-content: center;
        left: 0;
        overflow-y: hidden;
        position: fixed;
        right: 0;
        top: -60px;
        z-index: 1005;
      }
      .fullScreenOverlay > .fullScreenOverlayContent {
        bottom: 0;
        left: 0;
        margin: 0 auto;
        overflow: hidden;
        position: absolute;
        right: 0;
        top: 60px;
        transform: translateZ(0);
      }
      [data-mesh-id$="centeredContent"],
      [data-mesh-id$="form"],
      [data-mesh-id$="inlineContent"] {
        pointer-events: none;
        position: relative;
      }
      [data-mesh-id$="-gridWrapper"],
      [data-mesh-id$="-rotated-wrapper"] {
        pointer-events: none;
      }
      [data-mesh-id$="-gridContainer"] > *,
      [data-mesh-id$="-rotated-wrapper"] > *,
      [data-mesh-id$="inlineContent"] > :not([data-mesh-id$="-gridContainer"]) {
        pointer-events: auto;
      }
      .device-mobile-optimized
        #masterPage.mesh-layout
        #SOSP_CONTAINER_CUSTOM_ID {
        grid-area: 2/1/3/2;
        -ms-grid-row: 2;
        position: relative;
      }
      #masterPage.mesh-layout {
        -ms-grid-rows: max-content max-content min-content max-content;
        -ms-grid-columns: 100%;
        align-items: start;
        display: -ms-grid;
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: max-content max-content min-content max-content;
        justify-content: stretch;
      }
      #masterPage.mesh-layout #PAGES_CONTAINER,
      #masterPage.mesh-layout #SITE_FOOTER-placeholder,
      #masterPage.mesh-layout #SITE_FOOTER_WRAPPER,
      #masterPage.mesh-layout #SITE_HEADER-placeholder,
      #masterPage.mesh-layout #SITE_HEADER_WRAPPER,
      #masterPage.mesh-layout
        #SOSP_CONTAINER_CUSTOM_ID[data-state~="mobileView"],
      #masterPage.mesh-layout #soapAfterPagesContainer,
      #masterPage.mesh-layout #soapBeforePagesContainer {
        -ms-grid-row-align: start;
        -ms-grid-column-align: start;
        -ms-grid-column: 1;
      }
      #masterPage.mesh-layout #PAGES_CONTAINER,
      #masterPage.mesh-layout #soapAfterPagesContainer,
      #masterPage.mesh-layout #soapBeforePagesContainer {
        grid-area: 3/1/4/2;
        -ms-grid-row: 3;
      }
      #masterPage.mesh-layout #soapAfterPagesContainer,
      #masterPage.mesh-layout #soapBeforePagesContainer {
        width: 100%;
      }
      #masterPage.mesh-layout #PAGES_CONTAINER {
        align-self: stretch;
      }
      #masterPage.mesh-layout main#PAGES_CONTAINER {
        display: block;
      }
      #masterPage.mesh-layout #SITE_FOOTER-placeholder,
      #masterPage.mesh-layout #SITE_FOOTER_WRAPPER {
        grid-area: 4/1/5/2;
        -ms-grid-row: 4;
      }
      #masterPage.mesh-layout #SITE_PAGES,
      #masterPage.mesh-layout [data-mesh-id="PAGES_CONTAINERcenteredContent"],
      #masterPage.mesh-layout [data-mesh-id="PAGES_CONTAINERinlineContent"] {
        height: 100%;
      }
      #masterPage.mesh-layout.desktop > * {
        width: 100%;
      }
      #masterPage.mesh-layout #PAGES_CONTAINER,
      #masterPage.mesh-layout #SITE_FOOTER,
      #masterPage.mesh-layout #SITE_FOOTER_WRAPPER,
      #masterPage.mesh-layout #SITE_HEADER,
      #masterPage.mesh-layout #SITE_HEADER_WRAPPER,
      #masterPage.mesh-layout #SITE_PAGES,
      #masterPage.mesh-layout #masterPageinlineContent {
        position: relative;
      }
      #masterPage.mesh-layout #SITE_HEADER {
        grid-area: 1/1/2/2;
      }
      #masterPage.mesh-layout #SITE_FOOTER {
        grid-area: 4/1/5/2;
      }
      #masterPage.mesh-layout.overflow-x-clip #SITE_FOOTER,
      #masterPage.mesh-layout.overflow-x-clip #SITE_HEADER {
        overflow-x: clip;
      }
      [data-z-counter] {
        z-index: 0;
      }
      [data-z-counter="0"] {
        z-index: auto;
      }
      .wixSiteProperties {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      :root {
        --wst-button-color-fill-primary: rgb(var(--color_48));
        --wst-button-color-border-primary: rgb(var(--color_49));
        --wst-button-color-text-primary: rgb(var(--color_50));
        --wst-button-color-fill-primary-hover: rgb(var(--color_51));
        --wst-button-color-border-primary-hover: rgb(var(--color_52));
        --wst-button-color-text-primary-hover: rgb(var(--color_53));
        --wst-button-color-fill-primary-disabled: rgb(var(--color_54));
        --wst-button-color-border-primary-disabled: rgb(var(--color_55));
        --wst-button-color-text-primary-disabled: rgb(var(--color_56));
        --wst-button-color-fill-secondary: rgb(var(--color_57));
        --wst-button-color-border-secondary: rgb(var(--color_58));
        --wst-button-color-text-secondary: rgb(var(--color_59));
        --wst-button-color-fill-secondary-hover: rgb(var(--color_60));
        --wst-button-color-border-secondary-hover: rgb(var(--color_61));
        --wst-button-color-text-secondary-hover: rgb(var(--color_62));
        --wst-button-color-fill-secondary-disabled: rgb(var(--color_63));
        --wst-button-color-border-secondary-disabled: rgb(var(--color_64));
        --wst-button-color-text-secondary-disabled: rgb(var(--color_65));
        --wst-color-fill-base-1: rgb(var(--color_36));
        --wst-color-fill-base-2: rgb(var(--color_37));
        --wst-color-fill-base-shade-1: rgb(var(--color_38));
        --wst-color-fill-base-shade-2: rgb(var(--color_39));
        --wst-color-fill-base-shade-3: rgb(var(--color_40));
        --wst-color-fill-accent-1: rgb(var(--color_41));
        --wst-color-fill-accent-2: rgb(var(--color_42));
        --wst-color-fill-accent-3: rgb(var(--color_43));
        --wst-color-fill-accent-4: rgb(var(--color_44));
        --wst-color-fill-background-primary: rgb(var(--color_11));
        --wst-color-fill-background-secondary: rgb(var(--color_12));
        --wst-color-text-primary: rgb(var(--color_15));
        --wst-color-text-secondary: rgb(var(--color_14));
        --wst-color-action: rgb(var(--color_18));
        --wst-color-disabled: rgb(var(--color_39));
        --wst-color-title: rgb(var(--color_45));
        --wst-color-subtitle: rgb(var(--color_46));
        --wst-color-line: rgb(var(--color_47));
        --wst-font-style-h2: var(--font_2);
        --wst-font-style-h3: var(--font_3);
        --wst-font-style-h4: var(--font_4);
        --wst-font-style-h5: var(--font_5);
        --wst-font-style-h6: var(--font_6);
        --wst-font-style-body-large: var(--font_7);
        --wst-font-style-body-medium: var(--font_8);
        --wst-font-style-body-small: var(--font_9);
        --wst-font-style-body-x-small: var(--font_10);
        --wst-color-custom-1: rgb(var(--color_13));
        --wst-color-custom-2: rgb(var(--color_16));
        --wst-color-custom-3: rgb(var(--color_17));
        --wst-color-custom-4: rgb(var(--color_19));
        --wst-color-custom-5: rgb(var(--color_20));
        --wst-color-custom-6: rgb(var(--color_21));
        --wst-color-custom-7: rgb(var(--color_22));
        --wst-color-custom-8: rgb(var(--color_23));
        --wst-color-custom-9: rgb(var(--color_24));
        --wst-color-custom-10: rgb(var(--color_25));
        --wst-color-custom-11: rgb(var(--color_26));
        --wst-color-custom-12: rgb(var(--color_27));
        --wst-color-custom-13: rgb(var(--color_28));
        --wst-color-custom-14: rgb(var(--color_29));
        --wst-color-custom-15: rgb(var(--color_30));
        --wst-color-custom-16: rgb(var(--color_31));
        --wst-color-custom-17: rgb(var(--color_32));
        --wst-color-custom-18: rgb(var(--color_33));
        --wst-color-custom-19: rgb(var(--color_34));
        --wst-color-custom-20: rgb(var(--color_35));
      }
      .wix-presets-wrapper {
        display: contents;
      }
    </style>

    <!--pageHtmlEmbeds.head start-->

    <!--pageHtmlEmbeds.head end-->

    <!-- head performance data start -->

    <!-- head performance data end -->

    <!-- render-head end -->

    <style>
      .VUs9VM {
        margin: 0 10px;
        opacity: 0.6;
      }
      .m48Yht {
        height: auto !important;
      }
      .fIxawB {
        direction: var(--direction);
      }
      .Ur5Vmd {
        direction: var(--item-direction);
        justify-content: var(--menu-item-align, var(--text-align, flex-start));
      }
      .A47Z2B {
        direction: var(--sub-menu-item-direction);
        justify-content: var(
          --sub-menu-item-align,
          var(--text-align, flex-start)
        );
      }
      .IOfTmr .Z7cwZn {
        height: 100%;
        position: relative;
        width: 100%;
      }
      .IOfTmr .E_2Q_U {
        min-width: 100%;
        position: absolute;
        visibility: hidden;
        z-index: 999;
      }
      .IOfTmr .E_2Q_U.uf9Zs0 {
        left: calc(100% + var(--SKINS_submenuMargin, 8px) - var(--brw, 1px));
      }
      .IOfTmr .E_2Q_U.pYmDZK {
        right: calc(100% + var(--SKINS_submenuMargin, 8px) - var(--brw, 1px));
      }
      .IOfTmr .E_2Q_U.OSGBAh {
        bottom: 0;
      }
      .IOfTmr .E_2Q_U.F8Lkq5 {
        top: 0;
      }
      .IOfTmr .E_2Q_U:before {
        content: " ";
        height: 100%;
        left: var(--sub-menu-open-direction-left, 0);
        margin-left: calc(-1 * var(--SKINS_submenuMargin, 8px));
        margin-right: calc(-1 * var(--SKINS_submenuMargin, 8px));
        position: absolute;
        right: var(--sub-menu-open-direction-right, auto);
        top: 0;
        width: var(--SKINS_submenuMargin, 8px);
      }
      .IOfTmr .YGlZMx {
        background-color: rgba(
          var(--bg, var(--color_11, color_11)),
          var(--alpha-bg, 1)
        );
        border: solid var(--brw, 1px)
          rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
        border-radius: var(--rd, 0);
        box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, 0.6));
        box-sizing: border-box;
        height: calc(
          var(--item-height, 50px) - var(--separator-height-adjusted, 0px)
        );
        transition: var(--itemBGColorTrans, background-color 0.4s ease 0s);
      }
      .IOfTmr .YGlZMx.amuh9Z > .DzUZFw > .a50_l6 {
        cursor: default;
      }
      .IOfTmr .YGlZMx.lBccMF {
        background-color: rgba(
          var(--bgs, var(--color_15, color_15)),
          var(--alpha-bgs, 1)
        );
      }
      .IOfTmr .YGlZMx.lBccMF > .DzUZFw > .a50_l6 {
        color: rgb(var(--txts, var(--color_13, color_13)));
      }
      .IOfTmr .YGlZMx.F95vTA > .E_2Q_U {
        visibility: visible;
      }
      .IOfTmr .YGlZMx.F95vTA:not(.amuh9Z) {
        background-color: rgba(
          var(--bgh, var(--color_15, color_15)),
          var(--alpha-bgh, 1)
        );
      }
      .IOfTmr .YGlZMx.F95vTA:not(.amuh9Z) > .DzUZFw > .a50_l6 {
        color: rgb(var(--txth, var(--color_13, color_13)));
      }
      .IOfTmr .E_2Q_U .YGlZMx {
        background-color: rgba(
          var(--SKINS_bgSubmenu, var(--color_11, color_11)),
          var(--alpha-SKINS_bgSubmenu, 1)
        );
        border-radius: var(--SKINS_submenuBR, 0);
      }
      .IOfTmr .a50_l6 {
        align-items: center;
        box-sizing: border-box;
        color: rgb(var(--txt, var(--color_15, color_15)));
        cursor: pointer;
        display: flex;
        font: var(--fnt, var(--font_1));
        height: 100%;
        padding-left: var(--textSpacing, 10px);
        padding-right: var(--textSpacing, 10px);
        position: relative;
        white-space: nowrap;
      }
      .IOfTmr .a50_l6,
      .IOfTmr .a50_l6:after {
        background-color: transparent;
        width: 100%;
      }
      .IOfTmr .a50_l6:after {
        content: " ";
        height: var(--separator-height-adjusted, 0);
        left: 0;
        position: absolute;
        top: 100%;
      }
      .IOfTmr .Z7cwZn .YGlZMx .a50_l6 {
        line-height: calc(
          var(--item-height, 50px) - var(--separator-height-adjusted, 0px)
        );
      }
      .IOfTmr .E_2Q_U .a50_l6 {
        font: var(--SKINS_fntSubmenu, var(--font_1));
      }
      .IOfTmr .MfQCD7 {
        height: var(--separator-height-adjusted, 0);
        min-height: 0;
        width: 100%;
      }
      .xyNFD3 {
        margin: 0 10px;
        opacity: 0.6;
      }
      .gxChTi {
        height: auto !important;
      }
      .J5AcBQ .ADkeoY {
        border: solid var(--brw, 1px)
          rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
        border-radius: var(--rd, 0);
        box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, 0.6));
      }
      .J5AcBQ .ybGdqG {
        border-bottom: solid var(--sepw, 1px)
          rgba(var(--sep, var(--color_15, color_15)), var(--alpha-sep, 1));
        height: 100%;
        position: relative;
        width: 100%;
      }
      .J5AcBQ .ybGdqG:last-child {
        border-bottom: 0;
      }
      .J5AcBQ .niKtuR {
        border: solid var(--brw, 1px)
          rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
        border-radius: var(--SKINS_submenuBR, 0);
        box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, 0.6));
        box-sizing: border-box;
        min-width: 100%;
        position: absolute;
        visibility: hidden;
        z-index: 999;
      }
      .J5AcBQ .niKtuR.pLtej1 {
        left: calc(100% + var(--SKINS_submenuMargin, 8px));
      }
      .J5AcBQ .niKtuR.UPEerR {
        right: calc(100% + var(--SKINS_submenuMargin, 8px));
      }
      .J5AcBQ .niKtuR.sKAPJX {
        bottom: var(--brw, 1px);
      }
      .J5AcBQ .niKtuR.asC21j {
        top: calc(-1 * var(--brw, 1px));
      }
      .J5AcBQ .niKtuR:before {
        content: " ";
        height: 100%;
        left: var(--sub-menu-open-direction-left, 0);
        margin-left: calc(-1 * var(--SKINS_submenuMargin, 8px));
        margin-right: calc(-1 * var(--SKINS_submenuMargin, 8px));
        position: absolute;
        right: var(--sub-menu-open-direction-right, auto);
        top: 0;
        width: var(--SKINS_submenuMargin, 8px);
      }
      .J5AcBQ .i4bvwx {
        background-color: rgba(
          var(--bg, var(--color_11, color_11)),
          var(--alpha-bg, 1)
        );
        height: var(--item-height, 50px);
        transition: var(--itemBGColorTrans, background-color 0.4s ease 0s);
      }
      .J5AcBQ .i4bvwx.yL5MMl > .qFH5R7 > .kFPGSw {
        cursor: default;
      }
      .J5AcBQ .i4bvwx.iLEOZ6 {
        background-color: rgba(
          var(--bgs, var(--color_15, color_15)),
          var(--alpha-bgs, 1)
        );
      }
      .J5AcBQ .i4bvwx.iLEOZ6 > .qFH5R7 > .kFPGSw {
        color: rgb(var(--txts, var(--color_13, color_13)));
      }
      .J5AcBQ .i4bvwx.Bf9iOm > .niKtuR {
        visibility: visible;
      }
      .J5AcBQ .i4bvwx.Bf9iOm:not(.yL5MMl) {
        background-color: rgba(
          var(--bgh, var(--color_15, color_15)),
          var(--alpha-bgh, 1)
        );
      }
      .J5AcBQ .i4bvwx.Bf9iOm:not(.yL5MMl) > .qFH5R7 > .kFPGSw {
        color: rgb(var(--txth, var(--color_13, color_13)));
      }
      .J5AcBQ .niKtuR .i4bvwx {
        background-color: rgba(
          var(--SKINS_bgSubmenu, var(--color_11, color_11)),
          var(--alpha-SKINS_bgSubmenu, 1)
        );
      }
      .J5AcBQ .niKtuR .ybGdqG .i4bvwx {
        border-radius: 0;
      }
      .J5AcBQ .ybGdqG:first-child .i4bvwx {
        border-radius: var(--rd, 0);
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
      }
      .J5AcBQ .ybGdqG:last-child .i4bvwx {
        border-bottom: 0 solid transparent;
        border-radius: var(--rd, 0);
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
      .J5AcBQ .kFPGSw {
        box-sizing: border-box;
        color: rgb(var(--txt, var(--color_15, color_15)));
        cursor: pointer;
        display: flex;
        font: var(--fnt, var(--font_1));
        height: 100%;
        padding-left: var(--textSpacing, 10px);
        padding-right: var(--textSpacing, 10px);
        position: relative;
        white-space: nowrap;
      }
      .J5AcBQ .kFPGSw,
      .J5AcBQ .kFPGSw:after {
        background-color: transparent;
        width: 100%;
      }
      .J5AcBQ .kFPGSw:after {
        content: " ";
        cursor: default;
        height: var(--sepw, 1px);
        left: 0;
        position: absolute;
        top: 100%;
      }
      .J5AcBQ .ybGdqG .i4bvwx .kFPGSw {
        line-height: var(--item-height, 50px);
      }
      .J5AcBQ .niKtuR .kFPGSw {
        font: var(--SKINS_fntSubmenu, var(--font_1));
      }
    </style>
    <style>
      .cwL6XW {
        cursor: pointer;
      }
      .sNF2R0 {
        opacity: 0;
      }
      .hLoBV3 {
        transition: opacity var(--transition-duration)
          cubic-bezier(0.37, 0, 0.63, 1);
      }
      .Rdf41z,
      .hLoBV3 {
        opacity: 1;
      }
      .ftlZWo {
        transition: opacity var(--transition-duration)
          cubic-bezier(0.37, 0, 0.63, 1);
      }
      .ATGlOr,
      .ftlZWo {
        opacity: 0;
      }
      .KQSXD0 {
        transition: opacity var(--transition-duration)
          cubic-bezier(0.64, 0, 0.78, 0);
      }
      .KQSXD0,
      .pagQKE {
        opacity: 1;
      }
      ._6zG5H {
        opacity: 0;
        transition: opacity var(--transition-duration)
          cubic-bezier(0.22, 1, 0.36, 1);
      }
      .BB49uC {
        transform: translateX(100%);
      }
      .j9xE1V {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .ICs7Rs,
      .j9xE1V {
        transform: translateX(0);
      }
      .DxijZJ {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .B5kjYq,
      .DxijZJ {
        transform: translateX(-100%);
      }
      .cJijIV {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .cJijIV,
      .hOxaWM {
        transform: translateX(0);
      }
      .T9p3fN {
        transform: translateX(100%);
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .qDxYJm {
        transform: translateY(100%);
      }
      .aA9V0P {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .YPXPAS,
      .aA9V0P {
        transform: translateY(0);
      }
      .Xf2zsA {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .Xf2zsA,
      .y7Kt7s {
        transform: translateY(-100%);
      }
      .EeUgMu {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .EeUgMu,
      .fdHrtm {
        transform: translateY(0);
      }
      .WIFaG4 {
        transform: translateY(100%);
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      body:not(.responsive) .JsJXaX {
        overflow-x: clip;
      }
      :root:active-view-transition .JsJXaX {
        view-transition-name: page-group;
      }
      .AnQkDU {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
        height: 100%;
      }
      .AnQkDU > div {
        align-self: stretch !important;
        grid-area: 1/1/2/2;
        justify-self: stretch !important;
      }
      .StylableButton2545352419__root {
        -archetype: box;
        border: none;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 100%;
        min-height: 10px;
        min-width: 10px;
        padding: 0;
        touch-action: manipulation;
        width: 100%;
      }
      .StylableButton2545352419__root[disabled] {
        pointer-events: none;
      }
      .StylableButton2545352419__root:not(:hover):not(
          [disabled]
        ).StylableButton2545352419--hasBackgroundColor {
        background-color: var(--corvid-background-color) !important;
      }
      .StylableButton2545352419__root:hover:not(
          [disabled]
        ).StylableButton2545352419--hasHoverBackgroundColor {
        background-color: var(--corvid-hover-background-color) !important;
      }
      .StylableButton2545352419__root:not(
          :hover
        )[disabled].StylableButton2545352419--hasDisabledBackgroundColor {
        background-color: var(--corvid-disabled-background-color) !important;
      }
      .StylableButton2545352419__root:not(:hover):not(
          [disabled]
        ).StylableButton2545352419--hasBorderColor {
        border-color: var(--corvid-border-color) !important;
      }
      .StylableButton2545352419__root:hover:not(
          [disabled]
        ).StylableButton2545352419--hasHoverBorderColor {
        border-color: var(--corvid-hover-border-color) !important;
      }
      .StylableButton2545352419__root:not(
          :hover
        )[disabled].StylableButton2545352419--hasDisabledBorderColor {
        border-color: var(--corvid-disabled-border-color) !important;
      }
      .StylableButton2545352419__root.StylableButton2545352419--hasBorderRadius {
        border-radius: var(--corvid-border-radius) !important;
      }
      .StylableButton2545352419__root.StylableButton2545352419--hasBorderWidth {
        border-width: var(--corvid-border-width) !important;
      }
      .StylableButton2545352419__root:not(:hover):not(
          [disabled]
        ).StylableButton2545352419--hasColor,
      .StylableButton2545352419__root:not(:hover):not(
          [disabled]
        ).StylableButton2545352419--hasColor
        .StylableButton2545352419__label {
        color: var(--corvid-color) !important;
      }
      .StylableButton2545352419__root:hover:not(
          [disabled]
        ).StylableButton2545352419--hasHoverColor,
      .StylableButton2545352419__root:hover:not(
          [disabled]
        ).StylableButton2545352419--hasHoverColor
        .StylableButton2545352419__label {
        color: var(--corvid-hover-color) !important;
      }
      .StylableButton2545352419__root:not(
          :hover
        )[disabled].StylableButton2545352419--hasDisabledColor,
      .StylableButton2545352419__root:not(
          :hover
        )[disabled].StylableButton2545352419--hasDisabledColor
        .StylableButton2545352419__label {
        color: var(--corvid-disabled-color) !important;
      }
      .StylableButton2545352419__link {
        -archetype: box;
        box-sizing: border-box;
        color: #000;
        text-decoration: none;
      }
      .StylableButton2545352419__container {
        align-items: center;
        display: flex;
        flex-basis: auto;
        flex-direction: row;
        flex-grow: 1;
        height: 100%;
        justify-content: center;
        overflow: hidden;
        transition: all 0.2s ease, visibility 0s;
        width: 100%;
      }
      .StylableButton2545352419__label {
        -archetype: text;
        -controller-part-type: LayoutChildDisplayDropdown,
          LayoutFlexChildSpacing(first);
        max-width: 100%;
        min-width: 1.8em;
        overflow: hidden;
        text-align: center;
        text-overflow: ellipsis;
        transition: inherit;
        white-space: nowrap;
      }
      .StylableButton2545352419__root.StylableButton2545352419--isMaxContent
        .StylableButton2545352419__label {
        text-overflow: unset;
      }
      .StylableButton2545352419__root.StylableButton2545352419--isWrapText
        .StylableButton2545352419__label {
        min-width: 10px;
        overflow-wrap: break-word;
        white-space: break-spaces;
        word-break: break-word;
      }
      .StylableButton2545352419__icon {
        -archetype: icon;
        -controller-part-type: LayoutChildDisplayDropdown,
          LayoutFlexChildSpacing(last);
        flex-shrink: 0;
        height: 50px;
        min-width: 1px;
        transition: inherit;
      }
      .StylableButton2545352419__icon.StylableButton2545352419--override {
        display: block !important;
      }
      .StylableButton2545352419__icon svg,
      .StylableButton2545352419__icon > span {
        display: flex;
        height: inherit;
        width: inherit;
      }
      .StylableButton2545352419__root:not(:hover):not(
          [disalbed]
        ).StylableButton2545352419--hasIconColor
        .StylableButton2545352419__icon
        svg {
        fill: var(--corvid-icon-color) !important;
        stroke: var(--corvid-icon-color) !important;
      }
      .StylableButton2545352419__root:hover:not(
          [disabled]
        ).StylableButton2545352419--hasHoverIconColor
        .StylableButton2545352419__icon
        svg {
        fill: var(--corvid-hover-icon-color) !important;
        stroke: var(--corvid-hover-icon-color) !important;
      }
      .StylableButton2545352419__root:not(
          :hover
        )[disabled].StylableButton2545352419--hasDisabledIconColor
        .StylableButton2545352419__icon
        svg {
        fill: var(--corvid-disabled-icon-color) !important;
        stroke: var(--corvid-disabled-icon-color) !important;
      }
      .aeyn4z {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
      }
      .qQrFOK {
        cursor: pointer;
      }
      .VDJedC {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        fill: var(--corvid-fill-color, var(--fill));
        fill-opacity: var(--fill-opacity);
        stroke: var(--corvid-stroke-color, var(--stroke));
        stroke-opacity: var(--stroke-opacity);
        stroke-width: var(--stroke-width);
        filter: var(--drop-shadow, none);
        opacity: var(--opacity);
        transform: var(--flip);
      }
      .VDJedC,
      .VDJedC svg {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
      }
      .VDJedC svg {
        height: var(--svg-calculated-height, 100%);
        margin: auto;
        padding: var(--svg-calculated-padding, 0);
        width: var(--svg-calculated-width, 100%);
      }
      .VDJedC svg:not([data-type="ugc"]) {
        overflow: visible;
      }
      .l4CAhn * {
        vector-effect: non-scaling-stroke;
      }
      .Z_l5lU {
        -webkit-text-size-adjust: 100%;
        -moz-text-size-adjust: 100%;
        text-size-adjust: 100%;
      }
      ol.font_100,
      ul.font_100 {
        color: #080808;
        font-family: "Arial, Helvetica, sans-serif", serif;
        font-size: 10px;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        letter-spacing: normal;
        line-height: normal;
        margin: 0;
        text-decoration: none;
      }
      ol.font_100 li,
      ul.font_100 li {
        margin-bottom: 12px;
      }
      ol.wix-list-text-align,
      ul.wix-list-text-align {
        list-style-position: inside;
      }
      ol.wix-list-text-align h1,
      ol.wix-list-text-align h2,
      ol.wix-list-text-align h3,
      ol.wix-list-text-align h4,
      ol.wix-list-text-align h5,
      ol.wix-list-text-align h6,
      ol.wix-list-text-align p,
      ul.wix-list-text-align h1,
      ul.wix-list-text-align h2,
      ul.wix-list-text-align h3,
      ul.wix-list-text-align h4,
      ul.wix-list-text-align h5,
      ul.wix-list-text-align h6,
      ul.wix-list-text-align p {
        display: inline;
      }
      .HQSswv {
        cursor: pointer;
      }
      .yi6otz {
        clip: rect(0 0 0 0);
        border: 0;
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }
      .zQ9jDz [data-attr-richtext-marker="true"] {
        display: block;
      }
      .zQ9jDz [data-attr-richtext-marker="true"] table {
        border-collapse: collapse;
        margin: 15px 0;
        width: 100%;
      }
      .zQ9jDz [data-attr-richtext-marker="true"] table td {
        padding: 12px;
        position: relative;
      }
      .zQ9jDz [data-attr-richtext-marker="true"] table td:after {
        border-bottom: 1px solid currentColor;
        border-left: 1px solid currentColor;
        bottom: 0;
        content: "";
        left: 0;
        opacity: 0.2;
        position: absolute;
        right: 0;
        top: 0;
      }
      .zQ9jDz [data-attr-richtext-marker="true"] table tr td:last-child:after {
        border-right: 1px solid currentColor;
      }
      .zQ9jDz [data-attr-richtext-marker="true"] table tr:first-child td:after {
        border-top: 1px solid currentColor;
      }
      @supports (-webkit-appearance: none) and (stroke-color: transparent) {
        .qvSjx3 > * > :first-child {
          vertical-align: top;
        }
      }
      @supports (-webkit-touch-callout: none) {
        .qvSjx3 > * > :first-child {
          vertical-align: top;
        }
      }
      .LkZBpT
        :is(
          p,
          h1,
          h2,
          h3,
          h4,
          h5,
          h6,
          ul,
          ol,
          span[data-attr-richtext-marker],
          blockquote,
          div
        )
        [class$="rich-text__text"],
      .LkZBpT
        :is(
          p,
          h1,
          h2,
          h3,
          h4,
          h5,
          h6,
          ul,
          ol,
          span[data-attr-richtext-marker],
          blockquote,
          div
        )[class$="rich-text__text"] {
        color: var(--corvid-color, currentColor);
      }
      .LkZBpT
        :is(
          p,
          h1,
          h2,
          h3,
          h4,
          h5,
          h6,
          ul,
          ol,
          span[data-attr-richtext-marker],
          blockquote,
          div
        )
        span[style*="color"] {
        color: var(--corvid-color, currentColor) !important;
      }
      .Kbom4H {
        direction: var(--text-direction);
        min-height: var(--min-height);
        min-width: var(--min-width);
      }
      .Kbom4H .upNqi2 {
        word-wrap: break-word;
        height: 100%;
        overflow-wrap: break-word;
        position: relative;
        width: 100%;
      }
      .Kbom4H .upNqi2 ul {
        list-style: disc inside;
      }
      .Kbom4H .upNqi2 li {
        margin-bottom: 12px;
      }
      .MMl86N blockquote,
      .MMl86N div,
      .MMl86N h1,
      .MMl86N h2,
      .MMl86N h3,
      .MMl86N h4,
      .MMl86N h5,
      .MMl86N h6,
      .MMl86N p {
        letter-spacing: normal;
        line-height: normal;
      }
      .gYHZuN {
        min-height: var(--min-height);
        min-width: var(--min-width);
      }
      .gYHZuN .upNqi2 {
        word-wrap: break-word;
        height: 100%;
        overflow-wrap: break-word;
        position: relative;
        width: 100%;
      }
      .gYHZuN .upNqi2 ol,
      .gYHZuN .upNqi2 ul {
        letter-spacing: normal;
        line-height: normal;
        margin-inline-start: 0.5em;
        padding-inline-start: 1.3em;
      }
      .gYHZuN .upNqi2 ul {
        list-style-type: disc;
      }
      .gYHZuN .upNqi2 ol {
        list-style-type: decimal;
      }
      .gYHZuN .upNqi2 ol ul,
      .gYHZuN .upNqi2 ul ul {
        line-height: normal;
        list-style-type: circle;
      }
      .gYHZuN .upNqi2 ol ol ul,
      .gYHZuN .upNqi2 ol ul ul,
      .gYHZuN .upNqi2 ul ol ul,
      .gYHZuN .upNqi2 ul ul ul {
        line-height: normal;
        list-style-type: square;
      }
      .gYHZuN .upNqi2 li {
        font-style: inherit;
        font-weight: inherit;
        letter-spacing: normal;
        line-height: inherit;
      }
      .gYHZuN .upNqi2 h1,
      .gYHZuN .upNqi2 h2,
      .gYHZuN .upNqi2 h3,
      .gYHZuN .upNqi2 h4,
      .gYHZuN .upNqi2 h5,
      .gYHZuN .upNqi2 h6,
      .gYHZuN .upNqi2 p {
        letter-spacing: normal;
        line-height: normal;
        margin-block: 0;
        margin: 0;
      }
      .gYHZuN .upNqi2 a {
        color: inherit;
      }
      .MMl86N,
      .ku3DBC {
        word-wrap: break-word;
        direction: var(--text-direction);
        min-height: var(--min-height);
        min-width: var(--min-width);
        mix-blend-mode: var(--blendMode, normal);
        overflow-wrap: break-word;
        pointer-events: none;
        text-align: start;
        text-shadow: var(--textOutline, 0 0 transparent),
          var(--textShadow, 0 0 transparent);
        text-transform: var(--textTransform, "none");
      }
      .MMl86N > *,
      .ku3DBC > * {
        pointer-events: auto;
      }
      .MMl86N li,
      .ku3DBC li {
        font-style: inherit;
        font-weight: inherit;
        letter-spacing: normal;
        line-height: inherit;
      }
      .MMl86N ol,
      .MMl86N ul,
      .ku3DBC ol,
      .ku3DBC ul {
        letter-spacing: normal;
        line-height: normal;
        margin-inline-end: 0;
        margin-inline-start: 0.5em;
      }
      .MMl86N:not(.Vq6kJx) ol,
      .MMl86N:not(.Vq6kJx) ul,
      .ku3DBC:not(.Vq6kJx) ol,
      .ku3DBC:not(.Vq6kJx) ul {
        padding-inline-end: 0;
        padding-inline-start: 1.3em;
      }
      .MMl86N ul,
      .ku3DBC ul {
        list-style-type: disc;
      }
      .MMl86N ol,
      .ku3DBC ol {
        list-style-type: decimal;
      }
      .MMl86N ol ul,
      .MMl86N ul ul,
      .ku3DBC ol ul,
      .ku3DBC ul ul {
        list-style-type: circle;
      }
      .MMl86N ol ol ul,
      .MMl86N ol ul ul,
      .MMl86N ul ol ul,
      .MMl86N ul ul ul,
      .ku3DBC ol ol ul,
      .ku3DBC ol ul ul,
      .ku3DBC ul ol ul,
      .ku3DBC ul ul ul {
        list-style-type: square;
      }
      .MMl86N blockquote,
      .MMl86N div,
      .MMl86N h1,
      .MMl86N h2,
      .MMl86N h3,
      .MMl86N h4,
      .MMl86N h5,
      .MMl86N h6,
      .MMl86N p,
      .ku3DBC blockquote,
      .ku3DBC div,
      .ku3DBC h1,
      .ku3DBC h2,
      .ku3DBC h3,
      .ku3DBC h4,
      .ku3DBC h5,
      .ku3DBC h6,
      .ku3DBC p {
        margin-block: 0;
        margin: 0;
      }
      .MMl86N a,
      .ku3DBC a {
        color: inherit;
      }
      .Vq6kJx li {
        margin-inline-end: 0;
        margin-inline-start: 1.3em;
      }
      .Vd6aQZ {
        overflow: hidden;
        padding: 0;
        pointer-events: none;
        white-space: nowrap;
      }
      .mHZSwn {
        display: none;
      }
      .QJjwEo {
        transform: translateY(-100%);
        transition: 0.2s ease-in;
      }
      .kdBXfh {
        transition: 0.2s;
      }
      .MP52zt {
        opacity: 0;
        transition: 0.2s ease-in;
      }
      .MP52zt.Bhu9m5 {
        z-index: -1 !important;
      }
      .LVP8Wf {
        opacity: 1;
        transition: 0.2s;
      }
      .jhxvbR {
        display: block;
        height: 100%;
        width: 100%;
      }
      .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
      }
      .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
      }
      .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
      }
      .big2ZD {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
        height: calc(100% - var(-height));
        left: 0;
        margin-top: var(-height);
        position: fixed;
        top: 0;
        width: 100%;
      }
      .SHHiV9,
      .big2ZD {
        pointer-events: none;
        z-index: var(
          --pinned-layer-in-container,
          var(--above-all-in-container)
        );
      }
    </style>
    <style>
      .aVng1S {
        border-top: var(--lnw, 2px) solid
          rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
        box-sizing: border-box;
        height: 0;
      }
    </style>
    <style>
      .z3SJ3E {
        color: var(
          --arrow-bg-color,
          rgb(var(--fillcolor, var(--color_18, color_18)))
        );
        display: var(--arrow-display, none);
        flex-shrink: 0;
        padding-left: 7px;
        padding-right: 7px;
      }
      .c4iU97 {
        height: var(--arrow-size, 14px);
        width: var(--arrow-size, 14px);
      }
      .Cg44ot {
        display: flex;
        height: 100%;
        width: 100%;
      }
      .Cg44ot:before {
        background-color: currentColor;
        content: " ";
        display: block;
        height: 100%;
        -webkit-mask-image: var(
          --arrow-icon,
          url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26 26'%3E%3Cpath d='M13 20.4 0 7.4l1.8-1.8L13 16.8 24.2 5.6 26 7.4z'/%3E%3C/svg%3E")
        );
        mask-image: var(
          --arrow-icon,
          url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26 26'%3E%3Cpath d='M13 20.4 0 7.4l1.8-1.8L13 16.8 24.2 5.6 26 7.4z'/%3E%3C/svg%3E")
        );
        -webkit-mask-position: center;
        mask-position: center;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        width: 100%;
      }
      .dVkVf7 {
        display: flex;
        height: 100%;
        width: 100%;
      }
      .dVkVf7:before {
        background-color: currentColor;
        content: " ";
        display: block;
        height: 100%;
        -webkit-mask-image: var(
          --arrow-icon,
          url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26 26'%3E%3Cpath d='M13 20.4 0 7.4l1.8-1.8L13 16.8 24.2 5.6 26 7.4z'/%3E%3C/svg%3E")
        );
        mask-image: var(
          --arrow-icon,
          url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26 26'%3E%3Cpath d='M13 20.4 0 7.4l1.8-1.8L13 16.8 24.2 5.6 26 7.4z'/%3E%3C/svg%3E")
        );
        -webkit-mask-position: center;
        mask-position: center;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        width: 100%;
      }
      .aeyn4z {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
      }
      .qQrFOK {
        cursor: pointer;
      }
      .VDJedC {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        fill: var(--corvid-fill-color, var(--fill));
        fill-opacity: var(--fill-opacity);
        stroke: var(--corvid-stroke-color, var(--stroke));
        stroke-opacity: var(--stroke-opacity);
        stroke-width: var(--stroke-width);
        filter: var(--drop-shadow, none);
        opacity: var(--opacity);
        transform: var(--flip);
      }
      .VDJedC,
      .VDJedC svg {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
      }
      .VDJedC svg {
        height: var(--svg-calculated-height, 100%);
        margin: auto;
        padding: var(--svg-calculated-padding, 0);
        width: var(--svg-calculated-width, 100%);
      }
      .VDJedC svg:not([data-type="ugc"]) {
        overflow: visible;
      }
      .l4CAhn * {
        vector-effect: non-scaling-stroke;
      }
      .zS8yv5 {
        align-items: center;
        aspect-ratio: 1;
        display: flex;
        justify-content: center;
        letter-spacing: 0;
        overflow: hidden;
        position: relative;
        text-align: center;
      }
      .zS8yv5:before {
        font-family: Madefor, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo,
          ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
        font-weight: 500;
      }
      .EJYIOZ:before {
        align-items: center;
        content: attr(data-initials);
        display: flex;
        justify-content: center;
      }
      .EJYIOZ:before,
      .JdvX72:before {
        height: 100%;
        position: absolute;
        width: 100%;
      }
      .JdvX72:before {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg id='Layer_1' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'%3E%3Cdefs%3E%3Cstyle%3E.cls-anonymous-icon{fill:%23969696}%3C/style%3E%3C/defs%3E%3Cellipse class='cls-anonymous-icon' cx='103.7' cy='74.3' rx='38.3' ry='38.7'/%3E%3Cpath style='fill:none' d='M0 0h200v200H0z'/%3E%3Cpath class='cls-anonymous-icon' d='M188.4 200c-7.4-43.6-44.2-76.8-88.4-76.8S19 156.4 11.6 200Z'/%3E%3C/svg%3E");
        content: "";
      }
      .Tj01hh,
      .jhxvbR {
        display: block;
        height: 100%;
        width: 100%;
      }
      .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
      }
      .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
      }
      .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
      }
      .V8gwZj {
        fill: var(
          --avatar-fill-color,
          rgba(
            var(--fillcolor, var(--color_18, color_18)),
            var(--alpha-fillcolor, 1)
          )
        );
        fill-opacity: var(--alpha-fillcolor);
        border-radius: var(--avatarCornerRadius, 100px);
        display: var(--logged-in-avatar-display, block);
        flex-shrink: 0;
        margin-left: 7px;
        margin-right: 7px;
        overflow: hidden;
        position: inherit;
      }
      .V8gwZj.CiSb4N {
        border: var(--avatarAndArrowStrokeWidth, 0) solid
          rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
      }
      .V8gwZj .aBATL4 {
        position: static;
      }
      .V8gwZj img,
      .V8gwZj svg {
        display: block;
        position: static !important;
      }
      .V8gwZj .ZeCqr2,
      .V8gwZj img,
      .V8gwZj svg {
        height: var(--icon-size, 26px) !important;
        width: var(--icon-size, 26px) !important;
      }
      .V8gwZj .ZeCqr2 {
        background-color: var(
          --avatar-fill-color,
          rgba(
            var(--fillcolor, var(--color_18, color_18)),
            var(--alpha-fillcolor, 1)
          )
        );
      }
      .V8gwZj .ZeCqr2:before {
        color: #fff;
        font-size: calc(var(--icon-size, 26px) * 0.5) !important;
        line-height: var(--icon-size, 26px) !important;
      }
      .V8gwZj.b2cSkJ {
        display: var(--logged-out-avatar-display, block);
        height: var(--logged-out-icon-size, 26px);
      }
      .V8gwZj.b2cSkJ .ZeCqr2,
      .V8gwZj.b2cSkJ img,
      .V8gwZj.b2cSkJ svg {
        height: var(--logged-out-icon-size, 26px) !important;
        width: var(--logged-out-icon-size, 26px) !important;
      }
      .V8gwZj.b2cSkJ .ZeCqr2:before {
        font-size: calc(var(--logged-out-icon-size, 26px) * 0.5) !important;
        line-height: var(--logged-out-icon-size, 26px) !important;
      }
      .Awml3x {
        fill: rgba(
          var(--fillcolor, var(--color_0, color_0)),
          var(--alpha-fillcolor, 1)
        );
        fill-opacity: var(--alpha-fillcolor);
        display: var(--logged-in-avatar-display, block);
        flex-shrink: 0;
        height: var(--icon-size, 26px);
        padding-left: 7px;
        padding-right: 7px;
        position: inherit;
      }
      .Awml3x.GodvU2 {
        height: calc(
          var(--icon-size, 26px) + var(--avatarAndArrowStrokeWidth, 0px)
        );
      }
      .Awml3x.GodvU2 .H3TGaA,
      .Awml3x.GodvU2 img,
      .Awml3x.GodvU2 svg {
        border: var(--avatarAndArrowStrokeWidth, 0) solid
          rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
        border-radius: var(--avatarCornerRadius, 100px);
      }
      .Awml3x .ZSUPFt {
        position: static;
      }
      .Awml3x img,
      .Awml3x svg {
        display: block;
        position: static !important;
      }
      .Awml3x .H3TGaA,
      .Awml3x img,
      .Awml3x svg {
        height: var(--icon-size, 26px) !important;
        width: var(--icon-size, 26px) !important;
      }
      .Awml3x .H3TGaA {
        background-color: rgba(
          var(--fillcolor, var(--color_18, color_18)),
          var(--alpha-fillcolor, 1)
        );
      }
      .Awml3x .H3TGaA:before {
        color: #fff;
        font-size: calc(var(--icon-size, 26px) * 0.5) !important;
        line-height: var(--icon-size, 26px) !important;
      }
      .Awml3x.p6L7cw {
        display: var(--logged-out-avatar-display, block);
        height: var(--logged-out-icon-size, 26px);
      }
      .Awml3x.p6L7cw.GodvU2 {
        height: calc(
          var(--logged-out-icon-size, 26px) +
            var(--avatarAndArrowStrokeWidth, 0px)
        );
      }
      .Awml3x.p6L7cw .H3TGaA,
      .Awml3x.p6L7cw img,
      .Awml3x.p6L7cw svg {
        height: var(--logged-out-icon-size, 26px) !important;
        width: var(--logged-out-icon-size, 26px) !important;
      }
      .Awml3x.p6L7cw .H3TGaA:before {
        font-size: calc(var(--logged-out-icon-size, 26px) * 0.5) !important;
        line-height: var(--logged-out-icon-size, 26px) !important;
      }
      .p6HTCy {
        background-color: rgba(
          var(--bg-dd, var(--color_11, color_11)),
          var(--alpha-bg-dd, 1)
        );
        border: var(--brw-dd, 1px) solid
          rgba(var(--brd-dd, var(--color_15, color_15)), var(--alpha-brd-dd, 1));
        border-radius: var(--rd-dd, 0);
        box-shadow: var(--shd-dd, 0 0 0 transparent);
        box-sizing: border-box;
        display: none;
        font: var(--fnt, var(--font_8));
        font-size: var(--fnt-size-dd, 15px);
        inset-inline-end: 14px;
        max-width: 300px;
        min-width: 100px;
        padding: 10px 0;
        position: absolute;
        z-index: 99999;
      }
      .p6HTCy:not(.RZMHje) {
        top: calc(100% + var(--brw, 0px));
      }
      .p6HTCy.RZMHje {
        opacity: 0;
      }
      .p6HTCy.RZMHje.KXBgPq {
        opacity: 1;
      }
      .p6HTCy.jO2Fxa {
        display: block;
      }
      .p6HTCy hr {
        margin: 5px 20px;
        opacity: 0.4;
      }
      .s01nH_ {
        --force-state-metadata: selected;
      }
      .lsOYYV {
        border-radius: var(--rd-dd, 0);
        color: rgb(var(--txt-dd, var(--color_15, color_15)));
        cursor: pointer;
        display: flex;
        justify-content: var(--menu-items-alignment, flex-start);
        line-height: 260%;
        padding: 0 20px;
      }
      .lsOYYV.s01nH_ {
        color: rgb(var(--txt-slct-dd, var(--color_19, color_19)));
      }
      .lsOYYV:hover {
        color: rgb(var(--txth-dd, var(--color_19, color_19)));
      }
      .lsOYYV .HZf5Ym {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }
      .lsOYYV .e1wX6W {
        opacity: 0.6;
      }
      .e1wX6W {
        padding-inline-start: 12px;
      }
      .XVPL8q {
        align-self: center;
        display: flex;
        flex-shrink: 0;
        padding-bottom: 6px;
        padding-inline-end: 3px;
        padding-top: 6px;
        padding-inline-start: 14px;
      }
      .XVPL8q ._3sKSe {
        height: 21px;
        position: relative;
        width: 21px;
      }
      .XVPL8q ._3sKSe svg {
        fill: rgba(
          var(--fillcolor, var(--color_0, color_0)),
          var(--alpha-fillcolor, 1)
        );
        fill-opacity: var(--alpha-fillcolor);
        height: 21px;
        width: 21px;
      }
      .XVPL8q ._SWmiG {
        margin-inline-end: 10px;
      }
      .XVPL8q .NUcgT6 {
        inset-inline-start: 50%;
      }
      .NUcgT6 {
        background-color: rgba(
          var(--badge-bg, 226, 28, 33),
          var(--alpha-badge-bg, 1)
        );
        border-radius: 10px;
        color: rgb(var(--badge-txt, var(--color_11, color_11)));
        display: block;
        height: 18px;
        letter-spacing: 1px;
        line-height: 18px;
        padding-left: 6px;
        padding-right: 6px;
        pointer-events: none;
        position: absolute;
        text-align: center;
        top: 0;
      }
      .YkbuRz {
        align-items: center;
        display: flex;
        height: 100%;
        max-width: 100%;
        position: relative;
      }
      .G6GNlz {
        display: var(--icons-display, block);
      }
      .bLcQyE .K0sbQf {
        padding-inline-start: var(--user-section-padding-start, 7px);
      }
      .K0sbQf {
        align-items: center;
        cursor: pointer;
        display: flex;
        min-width: 0;
        padding: 6px 7px;
        position: relative;
        text-align: center;
        white-space: nowrap;
      }
      .K0sbQf,
      .K0sbQf .ukB2Bd {
        color: rgb(var(--txt, var(--color_18, color_18)));
        font: var(--fnt, var(--font_8));
      }
      .K0sbQf .ukB2Bd {
        display: var(--logged-in-text-display, block);
        min-width: 60px;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      .K0sbQf .ukB2Bd,
      .K0sbQf .zhlV_J {
        padding-left: 7px;
        padding-right: 7px;
      }
      .K0sbQf .zhlV_J {
        color: rgb(var(--fillcolor, var(--color_18, color_18)));
        display: var(--arrow-display, none);
        flex-shrink: 0;
      }
      .K0sbQf .zhlV_J .m11Au3 {
        height: var(--arrow-size, 14px);
        width: var(--arrow-size, 14px);
      }
      .K0sbQf:hover .m11Au3,
      .K0sbQf:hover .ukB2Bd {
        color: rgb(var(--txth, var(--color_19, color_19)));
      }
      .Vc2GM7 {
        display: var(--greeting-text-display, none);
      }
      .eUGVn8 {
        align-items: center;
        border-radius: var(--rd, 0);
        color: rgb(var(--txt, var(--color_18, color_18)));
        cursor: pointer;
        display: flex;
        font: var(--fnt, var(--font_8));
        min-width: 0;
        padding: 6px 7px;
        position: relative;
        white-space: nowrap;
      }
      .eUGVn8 .LcZX5c {
        display: var(--logged-out-text-display, block);
        padding-left: 7px;
        padding-right: 7px;
      }
      .eUGVn8:hover .LcZX5c {
        opacity: 0.7;
      }
      .pGZMn2 {
        --display: flex;
        --line-arrow-icon: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 26 26'%3E%3Cpath d='M13 20.4 0 7.4l1.8-1.8L13 16.8 24.2 5.6 26 7.4z'/%3E%3C/svg%3E");
        --full-arrow-icon: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26"><path d="M13 18.7 26 7.3H0z"/></svg>');
        align-items: center;
        background-color: rgba(
          var(--bg, var(--color_11, color_11)),
          var(--alpha-bg, 1)
        );
        border: var(--brw, 0) solid
          rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1));
        border-radius: var(--rd, 0);
        box-shadow: var(--shd, 0 0 0 transparent);
        box-sizing: border-box;
        display: var(--display);
      }
    </style>
    <style>
      .PlZyDq {
        touch-action: manipulation;
      }
      .uDW_Qe {
        align-items: center;
        box-sizing: border-box;
        display: flex;
        justify-content: var(--label-align);
        min-width: 100%;
        text-align: initial;
        width: -moz-max-content;
        width: max-content;
      }
      .uDW_Qe:before {
        max-width: var(--margin-start, 0);
      }
      .uDW_Qe:after,
      .uDW_Qe:before {
        align-self: stretch;
        content: "";
        flex-grow: 1;
      }
      .uDW_Qe:after {
        max-width: var(--margin-end, 0);
      }
      .FubTgk {
        height: 100%;
      }
      .FubTgk .uDW_Qe {
        border-radius: var(--corvid-border-radius, var(--rd, 0));
        bottom: 0;
        box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, 0.6));
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: var(
          --trans1,
          border-color 0.4s ease 0s,
          background-color 0.4s ease 0s
        );
      }
      .FubTgk .uDW_Qe:link,
      .FubTgk .uDW_Qe:visited {
        border-color: transparent;
      }
      .FubTgk .l7_2fn {
        color: var(--corvid-color, rgb(var(--txt, var(--color_15, color_15))));
        font: var(--fnt, var(--font_5));
        margin: 0;
        position: relative;
        transition: var(--trans2, color 0.4s ease 0s);
        white-space: nowrap;
      }
      .FubTgk[aria-disabled="false"] .uDW_Qe {
        background-color: var(
          --corvid-background-color,
          rgba(var(--bg, var(--color_17, color_17)), var(--alpha-bg, 1))
        );
        border: solid
          var(
            --corvid-border-color,
            rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1))
          )
          var(--corvid-border-width, var(--brw, 0));
        cursor: pointer !important;
      }
      :host(.device-mobile-optimized)
        .FubTgk[aria-disabled="false"]:active
        .uDW_Qe,
      body.device-mobile-optimized
        .FubTgk[aria-disabled="false"]:active
        .uDW_Qe {
        background-color: var(
          --corvid-hover-background-color,
          rgba(var(--bgh, var(--color_18, color_18)), var(--alpha-bgh, 1))
        );
        border-color: var(
          --corvid-hover-border-color,
          rgba(var(--brdh, var(--color_15, color_15)), var(--alpha-brdh, 1))
        );
      }
      :host(.device-mobile-optimized)
        .FubTgk[aria-disabled="false"]:active
        .l7_2fn,
      body.device-mobile-optimized
        .FubTgk[aria-disabled="false"]:active
        .l7_2fn {
        color: var(
          --corvid-hover-color,
          rgb(var(--txth, var(--color_15, color_15)))
        );
      }
      :host(:not(.device-mobile-optimized))
        .FubTgk[aria-disabled="false"]:hover
        .uDW_Qe,
      body:not(.device-mobile-optimized)
        .FubTgk[aria-disabled="false"]:hover
        .uDW_Qe {
        background-color: var(
          --corvid-hover-background-color,
          rgba(var(--bgh, var(--color_18, color_18)), var(--alpha-bgh, 1))
        );
        border-color: var(
          --corvid-hover-border-color,
          rgba(var(--brdh, var(--color_15, color_15)), var(--alpha-brdh, 1))
        );
      }
      :host(:not(.device-mobile-optimized))
        .FubTgk[aria-disabled="false"]:hover
        .l7_2fn,
      body:not(.device-mobile-optimized)
        .FubTgk[aria-disabled="false"]:hover
        .l7_2fn {
        color: var(
          --corvid-hover-color,
          rgb(var(--txth, var(--color_15, color_15)))
        );
      }
      .FubTgk[aria-disabled="true"] .uDW_Qe {
        background-color: var(
          --corvid-disabled-background-color,
          rgba(var(--bgd, 204, 204, 204), var(--alpha-bgd, 1))
        );
        border-color: var(
          --corvid-disabled-border-color,
          rgba(var(--brdd, 204, 204, 204), var(--alpha-brdd, 1))
        );
        border-style: solid;
        border-width: var(--corvid-border-width, var(--brw, 0));
      }
      .FubTgk[aria-disabled="true"] .l7_2fn {
        color: var(--corvid-disabled-color, rgb(var(--txtd, 255, 255, 255)));
      }
      .uUxqWY {
        align-items: center;
        box-sizing: border-box;
        display: flex;
        justify-content: var(--label-align);
        min-width: 100%;
        text-align: initial;
        width: -moz-max-content;
        width: max-content;
      }
      .uUxqWY:before {
        max-width: var(--margin-start, 0);
      }
      .uUxqWY:after,
      .uUxqWY:before {
        align-self: stretch;
        content: "";
        flex-grow: 1;
      }
      .uUxqWY:after {
        max-width: var(--margin-end, 0);
      }
      .Vq4wYb[aria-disabled="false"] .uUxqWY {
        cursor: pointer;
      }
      :host(.device-mobile-optimized)
        .Vq4wYb[aria-disabled="false"]:active
        .wJVzSK,
      body.device-mobile-optimized
        .Vq4wYb[aria-disabled="false"]:active
        .wJVzSK {
        color: var(
          --corvid-hover-color,
          rgb(var(--txth, var(--color_15, color_15)))
        );
        transition: var(--trans, color 0.4s ease 0s);
      }
      :host(:not(.device-mobile-optimized))
        .Vq4wYb[aria-disabled="false"]:hover
        .wJVzSK,
      body:not(.device-mobile-optimized)
        .Vq4wYb[aria-disabled="false"]:hover
        .wJVzSK {
        color: var(
          --corvid-hover-color,
          rgb(var(--txth, var(--color_15, color_15)))
        );
        transition: var(--trans, color 0.4s ease 0s);
      }
      .Vq4wYb .uUxqWY {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
      }
      .Vq4wYb .wJVzSK {
        color: var(--corvid-color, rgb(var(--txt, var(--color_15, color_15))));
        font: var(--fnt, var(--font_5));
        transition: var(--trans, color 0.4s ease 0s);
        white-space: nowrap;
      }
      .Vq4wYb[aria-disabled="true"] .wJVzSK {
        color: var(--corvid-disabled-color, rgb(var(--txtd, 255, 255, 255)));
      }
      :host(:not(.device-mobile-optimized)) .CohWsy,
      body:not(.device-mobile-optimized) .CohWsy {
        display: flex;
      }
      :host(:not(.device-mobile-optimized)) .V5AUxf,
      body:not(.device-mobile-optimized) .V5AUxf {
        -moz-column-gap: var(--margin);
        column-gap: var(--margin);
        direction: var(--direction);
        display: flex;
        margin: 0 auto;
        position: relative;
        width: calc(100% - var(--padding) * 2);
      }
      :host(:not(.device-mobile-optimized)) .V5AUxf > *,
      body:not(.device-mobile-optimized) .V5AUxf > * {
        direction: ltr;
        flex: var(--column-flex) 1 0%;
        left: 0;
        margin-bottom: var(--padding);
        margin-top: var(--padding);
        min-width: 0;
        position: relative;
        top: 0;
      }
      :host(.device-mobile-optimized) .V5AUxf,
      body.device-mobile-optimized .V5AUxf {
        display: block;
        padding-bottom: var(--padding-y);
        padding-left: var(--padding-x, 0);
        padding-right: var(--padding-x, 0);
        padding-top: var(--padding-y);
        position: relative;
      }
      :host(.device-mobile-optimized) .V5AUxf > *,
      body.device-mobile-optimized .V5AUxf > * {
        margin-bottom: var(--margin);
        position: relative;
      }
      :host(.device-mobile-optimized) .V5AUxf > :first-child,
      body.device-mobile-optimized .V5AUxf > :first-child {
        margin-top: var(--firstChildMarginTop, 0);
      }
      :host(.device-mobile-optimized) .V5AUxf > :last-child,
      body.device-mobile-optimized .V5AUxf > :last-child {
        margin-bottom: var(--lastChildMarginBottom);
      }
      .LIhNy3 {
        backface-visibility: hidden;
      }
      .jhxvbR,
      .mtrorN {
        display: block;
        height: 100%;
        width: 100%;
      }
      .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
      }
      .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
      }
      .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
      }
      .if7Vw2 {
        height: 100%;
        left: 0;
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100%);
        mask-size: var(--mask-size, 100%);
        overflow: hidden;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: absolute;
        top: 0;
        width: 100%;
      }
      .if7Vw2.f0uTJH {
        clip: rect(0, auto, auto, 0);
      }
      .if7Vw2 .i1tH8h {
        height: 100%;
        position: absolute;
        top: 0;
        width: 100%;
      }
      .if7Vw2 .DXi4PB {
        height: var(--fill-layer-image-height, 100%);
        opacity: var(--fill-layer-image-opacity);
      }
      .if7Vw2 .DXi4PB img {
        height: 100%;
        width: 100%;
      }
      @supports (-webkit-hyphens: none) {
        .if7Vw2.f0uTJH {
          clip: auto;
          -webkit-clip-path: inset(0);
        }
      }
      .wG8dni {
        height: 100%;
      }
      .tcElKx {
        background-color: var(--bg-overlay-color);
        background-image: var(--bg-gradient);
        transition: var(--inherit-transition);
      }
      .ImALHf,
      .Ybjs9b {
        opacity: var(--fill-layer-video-opacity);
      }
      .UWmm3w {
        bottom: var(--media-padding-bottom);
        height: var(--media-padding-height);
        position: absolute;
        top: var(--media-padding-top);
        width: 100%;
      }
      .Yjj1af {
        transform: scale(var(--scale, 1));
        transition: var(--transform-duration, transform 0s);
      }
      .ImALHf {
        height: 100%;
        position: relative;
        width: 100%;
      }
      .KCM6zk {
        opacity: var(
          --fill-layer-video-opacity,
          var(--fill-layer-image-opacity, 1)
        );
      }
      .KCM6zk .DXi4PB,
      .KCM6zk .ImALHf,
      .KCM6zk .Ybjs9b {
        opacity: 1;
      }
      ._uqPqy {
        clip-path: var(--fill-layer-clip);
      }
      ._uqPqy,
      .eKyYhK {
        position: absolute;
        top: 0;
      }
      ._uqPqy,
      .eKyYhK,
      .x0mqQS img {
        height: 100%;
        width: 100%;
      }
      .pnCr6P {
        opacity: 0;
      }
      .blf7sp,
      .pnCr6P {
        position: absolute;
        top: 0;
      }
      .blf7sp {
        height: 0;
        left: 0;
        overflow: hidden;
        width: 0;
      }
      .rWP3Gv {
        left: 0;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: var(--fill-layer-background-media-position);
      }
      .Tr4n3d,
      .rWP3Gv,
      .wRqk6s {
        height: 100%;
        top: 0;
        width: 100%;
      }
      .wRqk6s {
        position: absolute;
      }
      .Tr4n3d {
        background-color: var(--fill-layer-background-overlay-color);
        opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
        position: var(--fill-layer-background-overlay-position);
        transform: var(--fill-layer-background-overlay-transform);
      }
      @supports (mix-blend-mode: overlay) {
        .Tr4n3d {
          mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
          opacity: var(--fill-layer-background-overlay-blend-opacity, 1);
        }
      }
      .VXAmO2 {
        --divider-pin-height__: min(
          1,
          calc(var(--divider-layers-pin-factor__) + 1)
        );
        --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
        --divider-pin-border__: min(
          1,
          calc(var(--divider-layers-pin-factor__) / -1 + 1)
        );
        height: calc(
          var(--divider-height__) + var(--divider-pin-height__) *
            var(--divider-layers-size__) * var(--divider-layers-y__)
        );
      }
      .VXAmO2,
      .VXAmO2 .dy3w_9 {
        left: 0;
        position: absolute;
        width: 100%;
      }
      .VXAmO2 .dy3w_9 {
        --divider-layer-i__: var(--divider-layer-i, 0);
        background-position: left
          calc(
            50% + var(--divider-offset-x__) + var(--divider-layers-x__) *
              var(--divider-layer-i__)
          )
          bottom;
        background-repeat: repeat-x;
        border-bottom-style: solid;
        border-bottom-width: calc(
          var(--divider-pin-border__) * var(--divider-layer-i__) *
            var(--divider-layers-y__)
        );
        height: calc(
          var(--divider-height__) + var(--divider-pin-layer-height__) *
            var(--divider-layer-i__) * var(--divider-layers-y__)
        );
        opacity: calc(
          1 - var(--divider-layer-i__) / (var(--divider-layer-i__) + 1)
        );
      }
      .UORcXs {
        --divider-height__: var(--divider-top-height, auto);
        --divider-offset-x__: var(--divider-top-offset-x, 0px);
        --divider-layers-size__: var(--divider-top-layers-size, 0);
        --divider-layers-y__: var(--divider-top-layers-y, 0px);
        --divider-layers-x__: var(--divider-top-layers-x, 0px);
        --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
        border-top: var(--divider-top-padding, 0) solid
          var(--divider-top-color, currentColor);
        opacity: var(--divider-top-opacity, 1);
        top: 0;
        transform: var(--divider-top-flip, scaleY(-1));
      }
      .UORcXs .dy3w_9 {
        background-image: var(--divider-top-image, none);
        background-size: var(--divider-top-size, contain);
        border-color: var(--divider-top-color, currentColor);
        bottom: 0;
        filter: var(--divider-top-filter, none);
      }
      .UORcXs .dy3w_9[data-divider-layer="1"] {
        display: var(--divider-top-layer-1-display, block);
      }
      .UORcXs .dy3w_9[data-divider-layer="2"] {
        display: var(--divider-top-layer-2-display, block);
      }
      .UORcXs .dy3w_9[data-divider-layer="3"] {
        display: var(--divider-top-layer-3-display, block);
      }
      .Io4VUz {
        --divider-height__: var(--divider-bottom-height, auto);
        --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
        --divider-layers-size__: var(--divider-bottom-layers-size, 0);
        --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
        --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
        --divider-layers-pin-factor__: var(
          --divider-bottom-layers-pin-factor,
          0
        );
        border-bottom: var(--divider-bottom-padding, 0) solid
          var(--divider-bottom-color, currentColor);
        bottom: 0;
        opacity: var(--divider-bottom-opacity, 1);
        transform: var(--divider-bottom-flip, none);
      }
      .Io4VUz .dy3w_9 {
        background-image: var(--divider-bottom-image, none);
        background-size: var(--divider-bottom-size, contain);
        border-color: var(--divider-bottom-color, currentColor);
        bottom: 0;
        filter: var(--divider-bottom-filter, none);
      }
      .Io4VUz .dy3w_9[data-divider-layer="1"] {
        display: var(--divider-bottom-layer-1-display, block);
      }
      .Io4VUz .dy3w_9[data-divider-layer="2"] {
        display: var(--divider-bottom-layer-2-display, block);
      }
      .Io4VUz .dy3w_9[data-divider-layer="3"] {
        display: var(--divider-bottom-layer-3-display, block);
      }
      .YzqVVZ {
        overflow: visible;
        position: relative;
      }
      .mwF7X1 {
        backface-visibility: hidden;
      }
      .YGilLk {
        cursor: pointer;
      }
      .Tj01hh {
        display: block;
      }
      .MW5IWV,
      .Tj01hh {
        height: 100%;
        width: 100%;
      }
      .MW5IWV {
        left: 0;
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100%);
        mask-size: var(--mask-size, 100%);
        overflow: hidden;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: absolute;
        top: 0;
      }
      .MW5IWV.N3eg0s {
        clip: rect(0, auto, auto, 0);
      }
      .MW5IWV .Kv1aVt {
        height: 100%;
        position: absolute;
        top: 0;
        width: 100%;
      }
      .MW5IWV .dLPlxY {
        height: var(--fill-layer-image-height, 100%);
        opacity: var(--fill-layer-image-opacity);
      }
      .MW5IWV .dLPlxY img {
        height: 100%;
        width: 100%;
      }
      @supports (-webkit-hyphens: none) {
        .MW5IWV.N3eg0s {
          clip: auto;
          -webkit-clip-path: inset(0);
        }
      }
      .VgO9Yg {
        height: 100%;
      }
      .LWbAav {
        background-color: var(--bg-overlay-color);
        background-image: var(--bg-gradient);
        transition: var(--inherit-transition);
      }
      .K_YxMd,
      .yK6aSC {
        opacity: var(--fill-layer-video-opacity);
      }
      .NGjcJN {
        bottom: var(--media-padding-bottom);
        height: var(--media-padding-height);
        position: absolute;
        top: var(--media-padding-top);
        width: 100%;
      }
      .mNGsUM {
        transform: scale(var(--scale, 1));
        transition: var(--transform-duration, transform 0s);
      }
      .K_YxMd {
        height: 100%;
        position: relative;
        width: 100%;
      }
      wix-media-canvas {
        display: block;
        height: 100%;
      }
      .I8xA4L {
        opacity: var(
          --fill-layer-video-opacity,
          var(--fill-layer-image-opacity, 1)
        );
      }
      .I8xA4L .K_YxMd,
      .I8xA4L .dLPlxY,
      .I8xA4L .yK6aSC {
        opacity: 1;
      }
      .bX9O_S {
        clip-path: var(--fill-layer-clip);
      }
      .Z_wCwr,
      .bX9O_S {
        position: absolute;
        top: 0;
      }
      .Jxk_UL img,
      .Z_wCwr,
      .bX9O_S {
        height: 100%;
        width: 100%;
      }
      .K8MSra {
        opacity: 0;
      }
      .K8MSra,
      .YTb3b4 {
        position: absolute;
        top: 0;
      }
      .YTb3b4 {
        height: 0;
        left: 0;
        overflow: hidden;
        width: 0;
      }
      .SUz0WK {
        left: 0;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: var(--fill-layer-background-media-position);
      }
      .FNxOn5,
      .SUz0WK,
      .m4khSP {
        height: 100%;
        top: 0;
        width: 100%;
      }
      .FNxOn5 {
        position: absolute;
      }
      .m4khSP {
        background-color: var(--fill-layer-background-overlay-color);
        opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
        position: var(--fill-layer-background-overlay-position);
        transform: var(--fill-layer-background-overlay-transform);
      }
      @supports (mix-blend-mode: overlay) {
        .m4khSP {
          mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
          opacity: var(--fill-layer-background-overlay-blend-opacity, 1);
        }
      }
      ._C0cVf {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
      }
      .hFwGTD {
        transform: translateY(-100%);
        transition: 0.2s ease-in;
      }
      .IQgXoP {
        transition: 0.2s;
      }
      .Nr3Nid {
        opacity: 0;
        transition: 0.2s ease-in;
      }
      .Nr3Nid.l4oO6c {
        z-index: -1 !important;
      }
      .iQuoC4 {
        opacity: 1;
        transition: 0.2s;
      }
      .CJF7A2 {
        height: auto;
      }
      .CJF7A2,
      .U4Bvut {
        position: relative;
        width: 100%;
      }
      :host(:not(.device-mobile-optimized)) .G5K6X8,
      body:not(.device-mobile-optimized) .G5K6X8 {
        margin-left: calc((100% - var(--site-width)) / 2);
        width: var(--site-width);
      }
      .xU8fqS[data-focuscycled="active"] {
        outline: 1px solid transparent;
      }
      .xU8fqS[data-focuscycled="active"]:not(:focus-within) {
        outline: 2px solid transparent;
        transition: outline 0.01s ease;
      }
      .xU8fqS ._4XcTfy {
        background-color: var(
          --screenwidth-corvid-background-color,
          rgba(var(--bg, var(--color_11, color_11)), var(--alpha-bg, 1))
        );
        border-bottom: var(--brwb, 0) solid
          var(
            --screenwidth-corvid-border-color,
            rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1))
          );
        border-top: var(--brwt, 0) solid
          var(
            --screenwidth-corvid-border-color,
            rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1))
          );
        bottom: 0;
        box-shadow: var(--shd, 0 0 5px rgba(0, 0, 0, 0.7));
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
      }
      .xU8fqS .gUbusX {
        background-color: rgba(
          var(--bgctr, var(--color_11, color_11)),
          var(--alpha-bgctr, 1)
        );
        border-radius: var(--rd, 0);
        bottom: var(--brwb, 0);
        top: var(--brwt, 0);
      }
      .xU8fqS .G5K6X8,
      .xU8fqS .gUbusX {
        left: 0;
        position: absolute;
        right: 0;
      }
      .xU8fqS .G5K6X8 {
        bottom: 0;
        top: 0;
      }
      :host(.device-mobile-optimized) .xU8fqS .G5K6X8,
      body.device-mobile-optimized .xU8fqS .G5K6X8 {
        left: 10px;
        right: 10px;
      }
      .SPY_vo {
        pointer-events: none;
      }
      .BmZ5pC {
        min-height: calc(100vh - var(-height));
        min-width: var(--site-width);
        position: var(--bg-position);
        top: var(-height);
      }
      .BmZ5pC,
      .nTOEE9 {
        height: 100%;
        width: 100%;
      }
      .nTOEE9 {
        overflow: hidden;
        position: relative;
      }
      .nTOEE9.sqUyGm:hover {
        cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAAH6ji2bAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODM3MEUzMUU4OTAyMTFFMzk3Q0FCMkFEODdDNzUzMjQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODM3MEUzMUQ4OTAyMTFFMzk3Q0FCMkFEODdDNzUzMjQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk0ZTkyMTRlLThiNDQtNjc0My04MWZiLTZlYjIzYTA2ZjcwNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4bqsJgAAACF0lEQVR42mJgQAd8fHz/gdRvRigfxGEACCA4YvwPBMgCbgABBGOAJP6LiooiZBUUFMCC7969Awk6AQQQA1bAxMTUOnXq1P8/f/78j2zdf5BDQDgoKAgiyMgItv0/1AkozlgJlHwPpDWB+AhAACFL1EJVwvBPIGZHd8P/OXPmgI0F2YdmxXQUhX///sVQqK2tDVL4DFkhF8zK2NjY/4aGhshOOMJAJAB5ZjdAADGQCpiB4Cear3uwKQR74vv372BPLFq0CKZ4GnLcdMGiFtnXmzZtQo0Bdnb2r/b29nBFMIwUjkxghby8vHfFxMQwTMQWp0YggZcvX/5HBpqamhgKQdafAQnq6en9j4+P/4/me150nzsCPfYOKrkWKvYCymcjJozPgqIYIMAYcUjKAnEcELsDbVECOpkNiO8B+buAeCEQ3yUqFllYWNYh+4Obm/u/ubn5f0tLy//QPIqM90ATHVagDHTJH5BCfn7+/xcvXvyPC9y7d+8/KHqghv4FYj0M04BxeAOkQEhI6P+vX79QDECOeBj49+/ffzk5OZih91FyP4gAGiIDooH5hIGVlRUsAXQpGMMAMh+Y1xksLCzg5QxGrAFzwAxY2GzYsIGgC48cOYIclsuwBiIbG9sCmCJFRcX/+/fvxwi/EydOwIoDGH6JLQEiA26ga1egxSY2vAUpkcKKEV5iCwVOIObBU8w8RzLYgYHaAAACg5CxaxSLgwAAAABJRU5ErkJggg==),
          auto;
      }
      .nTOEE9.C_JY0G:hover {
        cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAAH6ji2bAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0I4QkNGQTI4OTAyMTFFMzg0RDlBRkM5NDA5QjczRTEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0I4QkNGQTE4OTAyMTFFMzg0RDlBRkM5NDA5QjczRTEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk0ZTkyMTRlLThiNDQtNjc0My04MWZiLTZlYjIzYTA2ZjcwNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpmMWUzNTlkMS1hYjZhLTNkNDctYmM0ZC03MWMyZDYyMWNmNDgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7hiSPZAAACGklEQVR42mJgQAd8fHz/gdRvRigfxGEACCA4YvwPBMgCbgABBGOAJP6LiooiZBUUFMCC7969Awk6AQQQA1bAxMTUOnXq1P8/f/78j2zdf5BDQDgoKAgiyMgItv0/1AkozlgJlHwPpDWB+AhAACFL1EJVwvBPIGZHd8P/OXPm/EcHUA3TURT+/fsXQ6G2tjZI4TNkhVwwK2NjY/8bGhoiO+EIA5EA5JndAAHEQCpgBoKfaL7uwaYQHLrfv38He2LRokUwxdOQ46YLFrXIYNOmTagxwM7O/tXe3h4sCYs3EEYKRyawQl5e3rtiYmL/sQH0ODUCCbx8+RJFkaamJoZCkPVnQIJ6enr/4+Pj/6P5nhfd545Aj72DSq6Fir2A8tmICeOzoCgGCDBGHJKyQBwHxO5AW5SATmYD4ntA/i4gXgjEd4mKRRYWlnXI/uDm5v5vbm7+39LS8j80jyLjPdBEhxUoA13yB6SQn5///8WLF//jAvfu3fsPih6ooX+BWA/DNGAc3gApEBIS+v/r16//hMC/f//+y8nJwQy9j2wWC4gAGiIDooH5hIGVlRUsAXQpVq98/PgRVBAwWFhYMDx69AhczkBj7RdyFpgBC5sNGzYQdOGRI0eQw3IZVpvZ2NgWwBQpKir+379/P4ZBJ06cgBUHMPwSWwJEBtxA165Ai01seAtSIoUVI7zEFgqcQMyDp5h5jmSwAwO1AQBU5q033XYWQwAAAABJRU5ErkJggg==),
          auto;
      }
      .RZQnmg {
        background-color: rgb(var(--color_11));
        border-radius: 50%;
        bottom: 12px;
        height: 40px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        right: 12px;
        width: 40px;
      }
      .RZQnmg path {
        fill: rgb(var(--color_15));
      }
      .RZQnmg:focus {
        cursor: auto;
        opacity: 1;
        pointer-events: auto;
      }
      .rYiAuL {
        cursor: pointer;
      }
      .gSXewE {
        height: 0;
        left: 0;
        overflow: hidden;
        top: 0;
        width: 0;
      }
      .OJQ_3L,
      .gSXewE {
        position: absolute;
      }
      .OJQ_3L {
        background-color: rgb(var(--color_11));
        border-radius: 300px;
        bottom: 0;
        cursor: pointer;
        height: 40px;
        margin: 16px 16px;
        opacity: 0;
        pointer-events: none;
        right: 0;
        width: 40px;
      }
      .OJQ_3L path {
        fill: rgb(var(--color_12));
      }
      .OJQ_3L:focus {
        cursor: auto;
        opacity: 1;
        pointer-events: auto;
      }
      .j7pOnl {
        box-sizing: border-box;
        height: 100%;
        width: 100%;
      }
      .BI8PVQ {
        min-height: var(--image-min-height);
        min-width: var(--image-min-width);
      }
      .BI8PVQ img,
      img.BI8PVQ {
        filter: var(--filter-effect-svg-url);
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100% 100%);
        mask-size: var(--mask-size, 100% 100%);
        -o-object-position: var(--object-position);
        object-position: var(--object-position);
      }
      .MazNVa {
        left: var(--left, auto);
        position: var(--position-fixed, static);
        top: var(--top, auto);
        z-index: var(--z-index, auto);
      }
      .MazNVa .BI8PVQ img {
        box-shadow: 0 0 0 #000;
        position: static;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .MazNVa .j7pOnl {
        display: block;
        overflow: hidden;
      }
      .MazNVa .BI8PVQ {
        overflow: hidden;
      }
      .c7cMWz {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
      }
      .FVGvCX {
        height: auto;
        position: relative;
        width: 100%;
      }
      body:not(.responsive) .zK7MhX {
        align-self: start;
        grid-area: 1/1/1/1;
        height: 100%;
        justify-self: stretch;
        left: 0;
        position: relative;
      }
      :host(:not(.device-mobile-optimized)) .c7cMWz,
      body:not(.device-mobile-optimized) .c7cMWz {
        margin-left: calc((100% - var(--site-width)) / 2);
        width: var(--site-width);
      }
      .fEm0Bo .c7cMWz {
        background-color: rgba(
          var(--bg, var(--color_11, color_11)),
          var(--alpha-bg, 1)
        );
        overflow: hidden;
      }
      :host(.device-mobile-optimized) .c7cMWz,
      body.device-mobile-optimized .c7cMWz {
        left: 10px;
        right: 10px;
      }
      .PFkO7r {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
      }
      .HT5ybB {
        height: auto;
        position: relative;
        width: 100%;
      }
      body:not(.responsive) .dBAkHi {
        align-self: start;
        grid-area: 1/1/1/1;
        height: 100%;
        justify-self: stretch;
        left: 0;
        position: relative;
      }
      :host(:not(.device-mobile-optimized)) .PFkO7r,
      body:not(.device-mobile-optimized) .PFkO7r {
        margin-left: calc((100% - var(--site-width)) / 2);
        width: var(--site-width);
      }
      :host(.device-mobile-optimized) .PFkO7r,
      body.device-mobile-optimized .PFkO7r {
        left: 10px;
        right: 10px;
      }
    </style>
    <style>
      .cwL6XW {
        cursor: pointer;
      }
      .KaEeLN {
        --container-corvid-border-color: rgba(
          var(--brd, var(--color_15, color_15)),
          var(--alpha-brd, 1)
        );
        --container-corvid-border-size: var(--brw, 1px);
        --container-corvid-background-color: rgba(
          var(--bg, var(--color_11, color_11)),
          var(--alpha-bg, 1)
        );
        --backdrop-filter: $backdrop-filter;
      }
      .uYj0Sg {
        -webkit-backdrop-filter: var(--backdrop-filter, none);
        backdrop-filter: var(--backdrop-filter, none);
        background-color: var(
          --container-corvid-background-color,
          rgba(var(--bg, var(--color_11, color_11)), var(--alpha-bg, 1))
        );
        background-image: var(--bg-gradient, none);
        border: var(--container-corvid-border-width, var(--brw, 1px)) solid
          var(
            --container-corvid-border-color,
            rgba(var(--brd, var(--color_15, color_15)), var(--alpha-brd, 1))
          );
        border-radius: var(--rd, 5px);
        bottom: 0;
        box-shadow: var(--shd, 0 1px 4px rgba(0, 0, 0, 0.6));
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
      }
    </style>
    <style>
      :host(:not(.device-mobile-optimized)) .CohWsy,
      body:not(.device-mobile-optimized) .CohWsy {
        display: flex;
      }
      :host(:not(.device-mobile-optimized)) .V5AUxf,
      body:not(.device-mobile-optimized) .V5AUxf {
        -moz-column-gap: var(--margin);
        column-gap: var(--margin);
        direction: var(--direction);
        display: flex;
        margin: 0 auto;
        position: relative;
        width: calc(100% - var(--padding) * 2);
      }
      :host(:not(.device-mobile-optimized)) .V5AUxf > *,
      body:not(.device-mobile-optimized) .V5AUxf > * {
        direction: ltr;
        flex: var(--column-flex) 1 0%;
        left: 0;
        margin-bottom: var(--padding);
        margin-top: var(--padding);
        min-width: 0;
        position: relative;
        top: 0;
      }
      :host(.device-mobile-optimized) .V5AUxf,
      body.device-mobile-optimized .V5AUxf {
        display: block;
        padding-bottom: var(--padding-y);
        padding-left: var(--padding-x, 0);
        padding-right: var(--padding-x, 0);
        padding-top: var(--padding-y);
        position: relative;
      }
      :host(.device-mobile-optimized) .V5AUxf > *,
      body.device-mobile-optimized .V5AUxf > * {
        margin-bottom: var(--margin);
        position: relative;
      }
      :host(.device-mobile-optimized) .V5AUxf > :first-child,
      body.device-mobile-optimized .V5AUxf > :first-child {
        margin-top: var(--firstChildMarginTop, 0);
      }
      :host(.device-mobile-optimized) .V5AUxf > :last-child,
      body.device-mobile-optimized .V5AUxf > :last-child {
        margin-bottom: var(--lastChildMarginBottom);
      }
      .LIhNy3 {
        backface-visibility: hidden;
      }
      .jhxvbR,
      .mtrorN {
        display: block;
        height: 100%;
        width: 100%;
      }
      .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
      }
      .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
      }
      .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
      }
      .if7Vw2 {
        height: 100%;
        left: 0;
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100%);
        mask-size: var(--mask-size, 100%);
        overflow: hidden;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: absolute;
        top: 0;
        width: 100%;
      }
      .if7Vw2.f0uTJH {
        clip: rect(0, auto, auto, 0);
      }
      .if7Vw2 .i1tH8h {
        height: 100%;
        position: absolute;
        top: 0;
        width: 100%;
      }
      .if7Vw2 .DXi4PB {
        height: var(--fill-layer-image-height, 100%);
        opacity: var(--fill-layer-image-opacity);
      }
      .if7Vw2 .DXi4PB img {
        height: 100%;
        width: 100%;
      }
      @supports (-webkit-hyphens: none) {
        .if7Vw2.f0uTJH {
          clip: auto;
          -webkit-clip-path: inset(0);
        }
      }
      .wG8dni {
        height: 100%;
      }
      .tcElKx {
        background-color: var(--bg-overlay-color);
        background-image: var(--bg-gradient);
        transition: var(--inherit-transition);
      }
      .ImALHf,
      .Ybjs9b {
        opacity: var(--fill-layer-video-opacity);
      }
      .UWmm3w {
        bottom: var(--media-padding-bottom);
        height: var(--media-padding-height);
        position: absolute;
        top: var(--media-padding-top);
        width: 100%;
      }
      .Yjj1af {
        transform: scale(var(--scale, 1));
        transition: var(--transform-duration, transform 0s);
      }
      .ImALHf {
        height: 100%;
        position: relative;
        width: 100%;
      }
      wix-media-canvas {
        display: block;
        height: 100%;
      }
      .KCM6zk {
        opacity: var(
          --fill-layer-video-opacity,
          var(--fill-layer-image-opacity, 1)
        );
      }
      .KCM6zk .DXi4PB,
      .KCM6zk .ImALHf,
      .KCM6zk .Ybjs9b {
        opacity: 1;
      }
      ._uqPqy {
        clip-path: var(--fill-layer-clip);
      }
      ._uqPqy,
      .eKyYhK {
        position: absolute;
        top: 0;
      }
      ._uqPqy,
      .eKyYhK,
      .x0mqQS img {
        height: 100%;
        width: 100%;
      }
      .pnCr6P {
        opacity: 0;
      }
      .blf7sp,
      .pnCr6P {
        position: absolute;
        top: 0;
      }
      .blf7sp {
        height: 0;
        left: 0;
        overflow: hidden;
        width: 0;
      }
      .rWP3Gv {
        left: 0;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: var(--fill-layer-background-media-position);
      }
      .Tr4n3d,
      .rWP3Gv,
      .wRqk6s {
        height: 100%;
        top: 0;
        width: 100%;
      }
      .wRqk6s {
        position: absolute;
      }
      .Tr4n3d {
        background-color: var(--fill-layer-background-overlay-color);
        opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
        position: var(--fill-layer-background-overlay-position);
        transform: var(--fill-layer-background-overlay-transform);
      }
      @supports (mix-blend-mode: overlay) {
        .Tr4n3d {
          mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
          opacity: var(--fill-layer-background-overlay-blend-opacity, 1);
        }
      }
      .VXAmO2 {
        --divider-pin-height__: min(
          1,
          calc(var(--divider-layers-pin-factor__) + 1)
        );
        --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
        --divider-pin-border__: min(
          1,
          calc(var(--divider-layers-pin-factor__) / -1 + 1)
        );
        height: calc(
          var(--divider-height__) + var(--divider-pin-height__) *
            var(--divider-layers-size__) * var(--divider-layers-y__)
        );
      }
      .VXAmO2,
      .VXAmO2 .dy3w_9 {
        left: 0;
        position: absolute;
        width: 100%;
      }
      .VXAmO2 .dy3w_9 {
        --divider-layer-i__: var(--divider-layer-i, 0);
        background-position: left
          calc(
            50% + var(--divider-offset-x__) + var(--divider-layers-x__) *
              var(--divider-layer-i__)
          )
          bottom;
        background-repeat: repeat-x;
        border-bottom-style: solid;
        border-bottom-width: calc(
          var(--divider-pin-border__) * var(--divider-layer-i__) *
            var(--divider-layers-y__)
        );
        height: calc(
          var(--divider-height__) + var(--divider-pin-layer-height__) *
            var(--divider-layer-i__) * var(--divider-layers-y__)
        );
        opacity: calc(
          1 - var(--divider-layer-i__) / (var(--divider-layer-i__) + 1)
        );
      }
      .UORcXs {
        --divider-height__: var(--divider-top-height, auto);
        --divider-offset-x__: var(--divider-top-offset-x, 0px);
        --divider-layers-size__: var(--divider-top-layers-size, 0);
        --divider-layers-y__: var(--divider-top-layers-y, 0px);
        --divider-layers-x__: var(--divider-top-layers-x, 0px);
        --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
        border-top: var(--divider-top-padding, 0) solid
          var(--divider-top-color, currentColor);
        opacity: var(--divider-top-opacity, 1);
        top: 0;
        transform: var(--divider-top-flip, scaleY(-1));
      }
      .UORcXs .dy3w_9 {
        background-image: var(--divider-top-image, none);
        background-size: var(--divider-top-size, contain);
        border-color: var(--divider-top-color, currentColor);
        bottom: 0;
        filter: var(--divider-top-filter, none);
      }
      .UORcXs .dy3w_9[data-divider-layer="1"] {
        display: var(--divider-top-layer-1-display, block);
      }
      .UORcXs .dy3w_9[data-divider-layer="2"] {
        display: var(--divider-top-layer-2-display, block);
      }
      .UORcXs .dy3w_9[data-divider-layer="3"] {
        display: var(--divider-top-layer-3-display, block);
      }
      .Io4VUz {
        --divider-height__: var(--divider-bottom-height, auto);
        --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
        --divider-layers-size__: var(--divider-bottom-layers-size, 0);
        --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
        --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
        --divider-layers-pin-factor__: var(
          --divider-bottom-layers-pin-factor,
          0
        );
        border-bottom: var(--divider-bottom-padding, 0) solid
          var(--divider-bottom-color, currentColor);
        bottom: 0;
        opacity: var(--divider-bottom-opacity, 1);
        transform: var(--divider-bottom-flip, none);
      }
      .Io4VUz .dy3w_9 {
        background-image: var(--divider-bottom-image, none);
        background-size: var(--divider-bottom-size, contain);
        border-color: var(--divider-bottom-color, currentColor);
        bottom: 0;
        filter: var(--divider-bottom-filter, none);
      }
      .Io4VUz .dy3w_9[data-divider-layer="1"] {
        display: var(--divider-bottom-layer-1-display, block);
      }
      .Io4VUz .dy3w_9[data-divider-layer="2"] {
        display: var(--divider-bottom-layer-2-display, block);
      }
      .Io4VUz .dy3w_9[data-divider-layer="3"] {
        display: var(--divider-bottom-layer-3-display, block);
      }
    </style>
    <style>
      .ytGGBw {
        width: 100%;
      }
      .ytGGBw.U3zsen {
        --display: none;
        display: var(--display);
      }
      .ytGGBw.wDEwXV {
        display: block;
        visibility: visible;
      }
      .ytGGBw .RMGHU6 {
        direction: rtl;
      }
      .ytGGBw .ZdV7_s {
        direction: ltr;
      }
      .ytGGBw.czJOIz {
        position: fixed;
        top: 0;
        z-index: var(--above-all-z-index);
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW01-35Thin;
        src: url("/fonts/56be84de-9d60-4089-8df0-0ea6ec786b84.eot");
        src: url("/fonts/56be84de-9d60-4089-8df0-0ea6ec786b84.eot")
            format("eot"),
          url("/fonts/50d35bbc-dfd4-48f1-af16-cf058f69421d.woff") format("woff"),
          url("/fonts/278bef59-6be1-4800-b5ac-1f769ab47430.ttf")
            format("truetype"),
          url("/fonts/2e309b1b-08b8-477f-bc9e-7067cf0af0b3.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW01-45Ligh;
        src: url("/fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot");
        src: url("/fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot")
            format("eot"),
          url("/fonts/530dee22-e3c1-4e9f-bf62-c31d510d9656.woff") format("woff"),
          url("/fonts/688ab72b-4deb-4e15-a088-89166978d469.ttf")
            format("truetype"),
          url("/fonts/7816f72f-f47e-4715-8cd7-960e3723846a.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW01-55Roma;
        src: url("/fonts/b7693a83-b861-4aa6-85e0-9ecf676bc4d6.eot");
        src: url("/fonts/b7693a83-b861-4aa6-85e0-9ecf676bc4d6.eot")
            format("eot"),
          url("/fonts/bcf54343-d033-41ee-bbd7-2b77df3fe7ba.woff") format("woff"),
          url("/fonts/b0ffdcf0-26da-47fd-8485-20e4a40d4b7d.ttf")
            format("truetype"),
          url("/fonts/da09f1f1-062a-45af-86e1-2bbdb3dd94f9.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW01-65Medi;
        font-weight: 700;
        src: url("/fonts/07fe0fec-b63f-4963-8ee1-535528b67fdb.eot");
        src: url("/fonts/07fe0fec-b63f-4963-8ee1-535528b67fdb.eot")
            format("eot"),
          url("/fonts/60be5c39-863e-40cb-9434-6ebafb62ab2b.woff") format("woff"),
          url("/fonts/4c6503c9-859b-4d3b-a1d5-2d42e1222415.ttf")
            format("truetype"),
          url("/fonts/36c182c6-ef98-4021-9b0d-d63122c2bbf5.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW02-35Thin;
        src: url("/fonts/30b6ffc3-3b64-40dd-9ff8-a3a850daf535.eot");
        src: url("/fonts/30b6ffc3-3b64-40dd-9ff8-a3a850daf535.eot")
            format("eot"),
          url("/fonts/775a65da-14aa-4634-be95-6724c05fd522.woff") format("woff"),
          url("/fonts/988eaaa7-5565-4f65-bb17-146b650ce9e9.ttf")
            format("truetype"),
          url("/fonts/3503a1a6-91c3-4c42-8e66-2ea7b2b57541.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW02-45Ligh;
        src: url("/fonts/88fcd49a-13c7-4d0c-86b1-ad1e258bd75d.eot");
        src: url("/fonts/88fcd49a-13c7-4d0c-86b1-ad1e258bd75d.eot")
            format("eot"),
          url("/fonts/9a2e4855-380f-477f-950e-d98e8db54eac.woff") format("woff"),
          url("/fonts/fa82d0ee-4fbd-4cc9-bf9f-226ad1fcbae2.ttf")
            format("truetype"),
          url("/fonts/48d599a6-92b5-4d43-a4ac-8959f6971853.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW02-55Roma;
        src: url("/fonts/0b3a3fca-0fad-402b-bd38-fdcbad1ef776.eot");
        src: url("/fonts/0b3a3fca-0fad-402b-bd38-fdcbad1ef776.eot")
            format("eot"),
          url("/fonts/d5af76d8-a90b-4527-b3a3-182207cc3250.woff") format("woff"),
          url("/fonts/1d238354-d156-4dde-89ea-4770ef04b9f9.ttf")
            format("truetype"),
          url("/fonts/b68875cb-14a9-472e-8177-0247605124d7.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW02-65Medi;
        font-weight: 700;
        src: url("/fonts/55f60419-09c3-42bd-b81f-1983ff093852.eot");
        src: url("/fonts/55f60419-09c3-42bd-b81f-1983ff093852.eot")
            format("eot"),
          url("/fonts/5b4a262e-3342-44e2-8ad7-719998a68134.woff") format("woff"),
          url("/fonts/4a3ef5d8-cfd9-4b96-bd67-90215512f1e5.ttf")
            format("truetype"),
          url("/fonts/58ab5075-53ea-46e6-9783-cbb335665f88.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW10-35Thin;
        src: url("/fonts/93b6bf6a-418e-4a8f-8f79-cb9c99ef3e32.eot");
        src: url("/fonts/93b6bf6a-418e-4a8f-8f79-cb9c99ef3e32.eot")
            format("eot"),
          url("/fonts/c881c21b-4148-4a11-a65d-f35e42999bc8.woff") format("woff"),
          url("/fonts/03634cf1-a9c9-4e13-b049-c90d830423d4.ttf")
            format("truetype"),
          url("/fonts/1bc99c0a-298b-46f9-b325-18b5e5169795.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW10-45Ligh;
        src: url("/fonts/5b85c7cc-6ad4-4226-83f5-9d19e2974123.eot");
        src: url("/fonts/5b85c7cc-6ad4-4226-83f5-9d19e2974123.eot")
            format("eot"),
          url("/fonts/835e7b4f-b524-4374-b57b-9a8fc555fd4e.woff") format("woff"),
          url("/fonts/2c694ef6-9615-473e-8cf4-d8d00c6bd973.ttf")
            format("truetype"),
          url("/fonts/3fc84193-a13f-4fe8-87f7-238748a4ac54.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW10-65Medi;
        font-weight: 700;
        src: url("/fonts/7092fdcc-7036-48ce-ae23-cfbc9be2e3b0.eot");
        src: url("/fonts/7092fdcc-7036-48ce-ae23-cfbc9be2e3b0.eot")
            format("eot"),
          url("/fonts/5b29e833-1b7a-40ab-82a5-cfd69c8650f4.woff") format("woff"),
          url("/fonts/b0298148-2d59-44d1-9ec9-1ca6bb097603.ttf")
            format("truetype"),
          url("/fonts/ae1dea8c-a953-4845-b616-74a257ba72e6.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: wixFreemiumFontW10-55Roma;
        src: url("/fonts/f1feaed7-6bce-400a-a07e-a893ae43a680.eot");
        src: url("/fonts/f1feaed7-6bce-400a-a07e-a893ae43a680.eot")
            format("eot"),
          url("/fonts/8ac9e38d-29c6-41ea-8e47-4ae4d2b1a4e1.woff") format("woff"),
          url("/fonts/4bd09087-655e-4abb-844c-dccdeb68003d.ttf")
            format("truetype"),
          url("/fonts/df234d87-eada-4058-aa80-5871e7fbe1c3.svg") format("svg");
      }
      @font-face {
        font-display: swap;
        font-display: swap;
        font-family: Madefor-Text;
        font-weight: 400;
        src: url("/fonts/WixMadeforTextVF_W_Wght.woff2")
            format("woff2-variations"),
          url("/fonts/WixMadeforText_W_Rg.woff2") format("woff2"),
          url("/fonts/WixMadeforText_W_Rg.woff") format("woff");
      }
      .o9Ik1k {
        width: 100%;
      }
      .o9Ik1k.piZFU2 {
        --display: none;
        display: var(--display);
      }
      .o9Ik1k.UoQ5EU {
        display: block;
        visibility: visible;
      }
      .o9Ik1k .OjFIih {
        direction: rtl;
      }
      .o9Ik1k .onAlzG {
        direction: ltr;
      }
      .o9Ik1k.WXq0H5 {
        position: fixed;
        top: 0;
        z-index: var(--above-all-z-index);
      }
      .MyEGHM .q6N3mD {
        align-items: center;
        background: #eff1f2;
        border-bottom: 1px solid #166aea;
        box-sizing: border-box;
        display: flex;
        height: 50px;
        justify-content: center;
        width: 100%;
      }
      .MyEGHM .q6N3mD.u53c4q {
        background-color: red;
        border: none;
      }
      .MyEGHM .q6N3mD:focus {
        box-shadow: 0 0 0 1px #116dff, inset -2px 2px 0 0 #116dff,
          inset 2px 2px 0 0 #116dff !important;
      }
      .MyEGHM .q6N3mD > .HW1JeT {
        align-items: center;
        display: flex;
      }
      .MyEGHM .q6N3mD > .HW1JeT .LIzdTp {
        color: #20303c;
        display: flex;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
      }
      .MyEGHM .q6N3mD > .HW1JeT .LIzdTp,
      .MyEGHM .q6N3mD > .HW1JeT ._ollQ6 {
        flex-shrink: 0;
        font-family: Madefor-Text, Helvetica Neue, Helvetica, Arial, メイリオ,
          meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
      }
      .MyEGHM .q6N3mD > .HW1JeT ._ollQ6 {
        align-items: center;
        border: 1px solid #166aea;
        border-radius: 17px;
        color: #166aea;
        display: inline-flex;
        font-size: 14px;
        height: 25px;
        justify-content: center;
        text-align: center;
        width: 112px;
      }
      .MyEGHM .q6N3mD > .HW1JeT ._ollQ6.onAlzG {
        margin-left: 16px;
      }
      .MyEGHM .q6N3mD > .HW1JeT ._ollQ6.OjFIih {
        margin-right: 16px;
      }
      .MyEGHM .q6N3mD > .HW1JeT .FAeSJk {
        direction: ltr;
        display: inline-flex;
        margin: 0 10px;
      }
      .MyEGHM .q6N3mD > .HW1JeT .bbyQBf {
        align-items: center;
        border-right: 1px solid #000;
        display: flex;
        padding-right: 8px;
      }
      .MyEGHM .q6N3mD:not(.u53c4q):hover {
        cursor: pointer;
      }
      .MyEGHM .q6N3mD:not(.u53c4q):hover ._ollQ6 {
        background-color: #166aea;
        color: #fff;
      }
    </style>
    <style>
      .LHrbPP {
        background: #fff;
        border-radius: 24px;
        color: #116dff;
        cursor: pointer;
        font-family: Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3,
          hiragino kaku gothic pro, sans-serif;
        font-size: 14px;
        height: 0;
        left: 50%;
        margin-left: -94px;
        opacity: 0;
        padding: 0 24px 0 24px;
        pointer-events: none;
        position: absolute;
        top: 60px;
        width: 0;
        z-index: 9999;
      }
      .LHrbPP:focus {
        border: 2px solid;
        height: 40px;
        opacity: 1;
        pointer-events: auto;
        width: auto;
      }
    </style>
    <style>
      .StylableButton2545352419__root {
        -archetype: box;
        border: none;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 100%;
        min-height: 10px;
        min-width: 10px;
        padding: 0;
        touch-action: manipulation;
        width: 100%;
      }
      .StylableButton2545352419__root[disabled] {
        pointer-events: none;
      }
      .StylableButton2545352419__root:not(:hover):not(
          [disabled]
        ).StylableButton2545352419--hasBackgroundColor {
        background-color: var(--corvid-background-color) !important;
      }
      .StylableButton2545352419__root:hover:not(
          [disabled]
        ).StylableButton2545352419--hasHoverBackgroundColor {
        background-color: var(--corvid-hover-background-color) !important;
      }
      .StylableButton2545352419__root:not(
          :hover
        )[disabled].StylableButton2545352419--hasDisabledBackgroundColor {
        background-color: var(--corvid-disabled-background-color) !important;
      }
      .StylableButton2545352419__root:not(:hover):not(
          [disabled]
        ).StylableButton2545352419--hasBorderColor {
        border-color: var(--corvid-border-color) !important;
      }
      .StylableButton2545352419__root:hover:not(
          [disabled]
        ).StylableButton2545352419--hasHoverBorderColor {
        border-color: var(--corvid-hover-border-color) !important;
      }
      .StylableButton2545352419__root:not(
          :hover
        )[disabled].StylableButton2545352419--hasDisabledBorderColor {
        border-color: var(--corvid-disabled-border-color) !important;
      }
      .StylableButton2545352419__root.StylableButton2545352419--hasBorderRadius {
        border-radius: var(--corvid-border-radius) !important;
      }
      .StylableButton2545352419__root.StylableButton2545352419--hasBorderWidth {
        border-width: var(--corvid-border-width) !important;
      }
      .StylableButton2545352419__root:not(:hover):not(
          [disabled]
        ).StylableButton2545352419--hasColor,
      .StylableButton2545352419__root:not(:hover):not(
          [disabled]
        ).StylableButton2545352419--hasColor
        .StylableButton2545352419__label {
        color: var(--corvid-color) !important;
      }
      .StylableButton2545352419__root:hover:not(
          [disabled]
        ).StylableButton2545352419--hasHoverColor,
      .StylableButton2545352419__root:hover:not(
          [disabled]
        ).StylableButton2545352419--hasHoverColor
        .StylableButton2545352419__label {
        color: var(--corvid-hover-color) !important;
      }
      .StylableButton2545352419__root:not(
          :hover
        )[disabled].StylableButton2545352419--hasDisabledColor,
      .StylableButton2545352419__root:not(
          :hover
        )[disabled].StylableButton2545352419--hasDisabledColor
        .StylableButton2545352419__label {
        color: var(--corvid-disabled-color) !important;
      }
      .StylableButton2545352419__link {
        -archetype: box;
        box-sizing: border-box;
        color: #000;
        text-decoration: none;
      }
      .StylableButton2545352419__container {
        align-items: center;
        display: flex;
        flex-basis: auto;
        flex-direction: row;
        flex-grow: 1;
        height: 100%;
        justify-content: center;
        overflow: hidden;
        transition: all 0.2s ease, visibility 0s;
        width: 100%;
      }
      .StylableButton2545352419__label {
        -archetype: text;
        -controller-part-type: LayoutChildDisplayDropdown,
          LayoutFlexChildSpacing(first);
        max-width: 100%;
        min-width: 1.8em;
        overflow: hidden;
        text-align: center;
        text-overflow: ellipsis;
        transition: inherit;
        white-space: nowrap;
      }
      .StylableButton2545352419__root.StylableButton2545352419--isMaxContent
        .StylableButton2545352419__label {
        text-overflow: unset;
      }
      .StylableButton2545352419__root.StylableButton2545352419--isWrapText
        .StylableButton2545352419__label {
        min-width: 10px;
        overflow-wrap: break-word;
        white-space: break-spaces;
        word-break: break-word;
      }
      .StylableButton2545352419__icon {
        -archetype: icon;
        -controller-part-type: LayoutChildDisplayDropdown,
          LayoutFlexChildSpacing(last);
        flex-shrink: 0;
        height: 50px;
        min-width: 1px;
        transition: inherit;
      }
      .StylableButton2545352419__icon.StylableButton2545352419--override {
        display: block !important;
      }
      .StylableButton2545352419__icon svg,
      .StylableButton2545352419__icon > span {
        display: flex;
        height: inherit;
        width: inherit;
      }
      .StylableButton2545352419__root:not(:hover):not(
          [disalbed]
        ).StylableButton2545352419--hasIconColor
        .StylableButton2545352419__icon
        svg {
        fill: var(--corvid-icon-color) !important;
        stroke: var(--corvid-icon-color) !important;
      }
      .StylableButton2545352419__root:hover:not(
          [disabled]
        ).StylableButton2545352419--hasHoverIconColor
        .StylableButton2545352419__icon
        svg {
        fill: var(--corvid-hover-icon-color) !important;
        stroke: var(--corvid-hover-icon-color) !important;
      }
      .StylableButton2545352419__root:not(
          :hover
        )[disabled].StylableButton2545352419--hasDisabledIconColor
        .StylableButton2545352419__icon
        svg {
        fill: var(--corvid-disabled-icon-color) !important;
        stroke: var(--corvid-disabled-icon-color) !important;
      }
    </style>
    <style>
      .MW5IWV {
        height: 100%;
        left: 0;
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100%);
        mask-size: var(--mask-size, 100%);
        overflow: hidden;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: absolute;
        top: 0;
        width: 100%;
      }
      .MW5IWV.N3eg0s {
        clip: rect(0, auto, auto, 0);
      }
      .MW5IWV .Kv1aVt {
        height: 100%;
        position: absolute;
        top: 0;
        width: 100%;
      }
      .MW5IWV .dLPlxY {
        height: var(--fill-layer-image-height, 100%);
        opacity: var(--fill-layer-image-opacity);
      }
      .MW5IWV .dLPlxY img {
        height: 100%;
        width: 100%;
      }
      @supports (-webkit-hyphens: none) {
        .MW5IWV.N3eg0s {
          clip: auto;
          -webkit-clip-path: inset(0);
        }
      }
      .VgO9Yg {
        height: 100%;
      }
      .LWbAav {
        background-color: var(--bg-overlay-color);
        background-image: var(--bg-gradient);
        transition: var(--inherit-transition);
      }
      .K_YxMd,
      .yK6aSC {
        opacity: var(--fill-layer-video-opacity);
      }
      .NGjcJN {
        bottom: var(--media-padding-bottom);
        height: var(--media-padding-height);
        position: absolute;
        top: var(--media-padding-top);
        width: 100%;
      }
      .mNGsUM {
        transform: scale(var(--scale, 1));
        transition: var(--transform-duration, transform 0s);
      }
      .K_YxMd {
        height: 100%;
        position: relative;
        width: 100%;
      }
      wix-media-canvas {
        display: block;
        height: 100%;
      }
      .I8xA4L {
        opacity: var(
          --fill-layer-video-opacity,
          var(--fill-layer-image-opacity, 1)
        );
      }
      .I8xA4L .K_YxMd,
      .I8xA4L .dLPlxY,
      .I8xA4L .yK6aSC {
        opacity: 1;
      }
      .Oqnisf {
        overflow: visible;
      }
      .Oqnisf > .MW5IWV .LWbAav {
        background-color: var(
          --section-corvid-background-color,
          var(--bg-overlay-color)
        );
      }
      .cM88eO {
        backface-visibility: hidden;
      }
      .YtfWHd {
        left: 0;
        top: 0;
      }
      .YtfWHd,
      .mj3xJ8 {
        position: absolute;
      }
      .mj3xJ8 {
        clip: rect(0 0 0 0);
        background-color: #fff;
        border-radius: 50%;
        bottom: 3px;
        color: #000;
        display: grid;
        height: 24px;
        outline: 1px solid #000;
        place-items: center;
        pointer-events: none;
        right: 3px;
        width: 24px;
        z-index: 9999;
      }
      .mj3xJ8:active,
      .mj3xJ8:focus {
        clip: auto;
        pointer-events: auto;
      }
      .Tj01hh,
      .jhxvbR {
        display: block;
        height: 100%;
        width: 100%;
      }
      .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
      }
      .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
      }
      .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
      }
      .bX9O_S {
        clip-path: var(--fill-layer-clip);
      }
      .Z_wCwr,
      .bX9O_S {
        position: absolute;
        top: 0;
      }
      .Jxk_UL img,
      .Z_wCwr,
      .bX9O_S {
        height: 100%;
        width: 100%;
      }
      .K8MSra {
        opacity: 0;
      }
      .K8MSra,
      .YTb3b4 {
        position: absolute;
        top: 0;
      }
      .YTb3b4 {
        height: 0;
        left: 0;
        overflow: hidden;
        width: 0;
      }
      .SUz0WK {
        left: 0;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: var(--fill-layer-background-media-position);
      }
      .FNxOn5,
      .SUz0WK,
      .m4khSP {
        height: 100%;
        top: 0;
        width: 100%;
      }
      .FNxOn5 {
        position: absolute;
      }
      .m4khSP {
        background-color: var(--fill-layer-background-overlay-color);
        opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
        position: var(--fill-layer-background-overlay-position);
        transform: var(--fill-layer-background-overlay-transform);
      }
      @supports (mix-blend-mode: overlay) {
        .m4khSP {
          mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
          opacity: var(--fill-layer-background-overlay-blend-opacity, 1);
        }
      }
      .dkukWC {
        --divider-pin-height__: min(
          1,
          calc(var(--divider-layers-pin-factor__) + 1)
        );
        --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
        --divider-pin-border__: min(
          1,
          calc(var(--divider-layers-pin-factor__) / -1 + 1)
        );
        height: calc(
          var(--divider-height__) + var(--divider-pin-height__) *
            var(--divider-layers-size__) * var(--divider-layers-y__)
        );
      }
      .dkukWC,
      .dkukWC .FRCqDF {
        left: 0;
        position: absolute;
        width: 100%;
      }
      .dkukWC .FRCqDF {
        --divider-layer-i__: var(--divider-layer-i, 0);
        background-position: left
          calc(
            50% + var(--divider-offset-x__) + var(--divider-layers-x__) *
              var(--divider-layer-i__)
          )
          bottom;
        background-repeat: repeat-x;
        border-bottom-style: solid;
        border-bottom-width: calc(
          var(--divider-pin-border__) * var(--divider-layer-i__) *
            var(--divider-layers-y__)
        );
        height: calc(
          var(--divider-height__) + var(--divider-pin-layer-height__) *
            var(--divider-layer-i__) * var(--divider-layers-y__)
        );
        opacity: calc(
          1 - var(--divider-layer-i__) / (var(--divider-layer-i__) + 1)
        );
      }
      .xnZvZH {
        --divider-height__: var(--divider-top-height, auto);
        --divider-offset-x__: var(--divider-top-offset-x, 0px);
        --divider-layers-size__: var(--divider-top-layers-size, 0);
        --divider-layers-y__: var(--divider-top-layers-y, 0px);
        --divider-layers-x__: var(--divider-top-layers-x, 0px);
        --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
        border-top: var(--divider-top-padding, 0) solid
          var(--divider-top-color, currentColor);
        opacity: var(--divider-top-opacity, 1);
        top: 0;
        transform: var(--divider-top-flip, scaleY(-1));
      }
      .xnZvZH .FRCqDF {
        background-image: var(--divider-top-image, none);
        background-size: var(--divider-top-size, contain);
        border-color: var(--divider-top-color, currentColor);
        bottom: 0;
        filter: var(--divider-top-filter, none);
      }
      .xnZvZH .FRCqDF[data-divider-layer="1"] {
        display: var(--divider-top-layer-1-display, block);
      }
      .xnZvZH .FRCqDF[data-divider-layer="2"] {
        display: var(--divider-top-layer-2-display, block);
      }
      .xnZvZH .FRCqDF[data-divider-layer="3"] {
        display: var(--divider-top-layer-3-display, block);
      }
      .MBOSCN {
        --divider-height__: var(--divider-bottom-height, auto);
        --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
        --divider-layers-size__: var(--divider-bottom-layers-size, 0);
        --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
        --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
        --divider-layers-pin-factor__: var(
          --divider-bottom-layers-pin-factor,
          0
        );
        border-bottom: var(--divider-bottom-padding, 0) solid
          var(--divider-bottom-color, currentColor);
        bottom: 0;
        opacity: var(--divider-bottom-opacity, 1);
        transform: var(--divider-bottom-flip, none);
      }
      .MBOSCN .FRCqDF {
        background-image: var(--divider-bottom-image, none);
        background-size: var(--divider-bottom-size, contain);
        border-color: var(--divider-bottom-color, currentColor);
        bottom: 0;
        filter: var(--divider-bottom-filter, none);
      }
      .MBOSCN .FRCqDF[data-divider-layer="1"] {
        display: var(--divider-bottom-layer-1-display, block);
      }
      .MBOSCN .FRCqDF[data-divider-layer="2"] {
        display: var(--divider-bottom-layer-2-display, block);
      }
      .MBOSCN .FRCqDF[data-divider-layer="3"] {
        display: var(--divider-bottom-layer-3-display, block);
      }
    </style>
    <style>
      .W2bcb7 {
        border-radius: 50%;
        cursor: pointer;
        height: 24px;
        width: 24px;
      }
      .JMUd8Z.mDzRgi,
      .QodGTM.mDzRgi {
        --display: grid;
        background-color: transparent;
        box-sizing: border-box;
        display: var(--display);
        min-height: 50px;
        position: relative;
      }
      .JMUd8Z.mDzRgi .XvQ3FE,
      .QodGTM.mDzRgi .XvQ3FE {
        align-self: center;
        cursor: pointer;
        display: var(--nav-button-display);
        grid-area: 1/1/1/1;
        margin: 0 var(--nav-button-offset);
        position: absolute;
        width: var(--nav-button-width);
        z-index: 1;
      }
      .JMUd8Z.mDzRgi .XvQ3FE.CdshHv,
      .QodGTM.mDzRgi .XvQ3FE.CdshHv {
        justify-self: var(--nav-button-prev-self-justify);
      }
      .JMUd8Z.mDzRgi .XvQ3FE.Qinjwp,
      .QodGTM.mDzRgi .XvQ3FE.Qinjwp {
        justify-self: var(--nav-button-next-self-justify);
      }
      .JMUd8Z.mDzRgi .hDJzl4,
      .QodGTM.mDzRgi .hDJzl4 {
        grid-area: 1/1/1/1;
        height: 100%;
        overflow: var(--slides-overflow);
        position: absolute;
        width: 100%;
      }
      .JMUd8Z.mDzRgi .hDJzl4.tAoGqR,
      .QodGTM.mDzRgi .hDJzl4.tAoGqR {
        overflow: var(--transition-overflow, var(--slides-overflow));
      }
      .JMUd8Z.mDzRgi .hDJzl4 > *,
      .QodGTM.mDzRgi .hDJzl4 > * {
        overflow: var(--slides-overflow);
      }
      .JMUd8Z.mDzRgi .T23gn7.hDJzl4,
      .QodGTM.mDzRgi .T23gn7.hDJzl4 {
        height: auto;
        position: relative;
      }
      .JMUd8Z.mDzRgi .T23gn7.hDJzl4 > *,
      .QodGTM.mDzRgi .T23gn7.hDJzl4 > * {
        top: 0;
      }
      .JMUd8Z.mDzRgi .T23gn7.hDJzl4 > :not(:first-child),
      .QodGTM.mDzRgi .T23gn7.hDJzl4 > :not(:first-child) {
        --force-state-metadata: false;
        position: absolute !important;
      }
      .JMUd8Z.mDzRgi .N2NGoO,
      .QodGTM.mDzRgi .N2NGoO {
        border-radius: var(--rd, 0);
        bottom: 0;
        box-shadow: var(--shd, 0 0 0 rgba(0, 0, 0, 0.6));
        left: 0;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
      }
      .JMUd8Z.mDzRgi .lZ5yqT,
      .QodGTM.mDzRgi .lZ5yqT {
        align-self: end;
        direction: var(--nav-dot-direction);
        display: var(--nav-dot-section-display);
        grid-area: 1/1/1/1;
        justify-self: center;
        margin-bottom: var(--nav-dot-section-bottom-margin);
        position: absolute;
        transform: translateY(50%);
      }
      .JMUd8Z.mDzRgi .lZ5yqT .dZxZOk,
      .QodGTM.mDzRgi .lZ5yqT .dZxZOk {
        align-items: center;
        display: flex;
        justify-content: center;
        pointer-events: none;
        position: relative;
        width: 100%;
      }
      .JMUd8Z.mDzRgi .lZ5yqT .ZVUGJp,
      .QodGTM.mDzRgi .lZ5yqT .ZVUGJp {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: var(--nav-dot-size);
        margin: 0 var(--nav-dot-margin);
        pointer-events: auto;
        position: relative;
        width: var(--nav-dot-size);
      }
      .JMUd8Z.mDzRgi .lZ5yqT .ZVUGJp.Ale4Rm,
      .QodGTM.mDzRgi .lZ5yqT .ZVUGJp.Ale4Rm {
        height: var(--nav-dot-size-selected);
        width: var(--nav-dot-size-selected);
      }
      .JMUd8Z.mDzRgi .W44q6c,
      .QodGTM.mDzRgi .W44q6c {
        bottom: 0;
        position: absolute;
        right: 0;
        z-index: var(--above-all-in-container, 49);
      }
      .JMUd8Z .XvQ3FE:hover,
      .QodGTM .XvQ3FE:hover {
        opacity: 0.6;
      }
      .JMUd8Z .XvQ3FE.Qinjwp,
      .QodGTM .XvQ3FE.Qinjwp {
        transform: scaleX(var(--nav-button-next-scaleX-transform));
      }
      .JMUd8Z .XvQ3FE.CdshHv,
      .QodGTM .XvQ3FE.CdshHv {
        transform: scaleX(var(--nav-button-prev-scaleX-transform));
      }
      .JMUd8Z .XvQ3FE svg,
      .QodGTM .XvQ3FE svg {
        fill: rgba(
          var(--arrowColor, var(--color_12, color_12)),
          var(--alpha-arrowColor, 1)
        );
        stroke: rgba(
          var(--arrowColor, var(--color_12, color_12)),
          var(--alpha-arrowColor, 1)
        );
        stroke-width: 1px;
      }
      .JMUd8Z .ZVUGJp {
        background-color: rgba(
          var(--dotsColor, var(--color_12, color_12)),
          var(--alpha-dotsColor, 1)
        );
        border-radius: 50%;
      }
      .JMUd8Z .ZVUGJp.Ale4Rm {
        background-color: rgba(
          var(--dotsSelectedColor, var(--color_11, color_11)),
          var(--alpha-dotsSelectedColor, 1)
        );
      }
      .QodGTM .ZVUGJp {
        background-color: rgba(
          var(--dotsColor, var(--color_12, color_12)),
          var(--alpha-dotsColor, 1)
        );
        border-radius: 50%;
      }
      .QodGTM .ZVUGJp.Ale4Rm {
        background-color: transparent;
        border: 2px solid
          rgba(
            var(--dotsColor, var(--color_12, color_12)),
            var(--alpha-dotsColor, 1)
          );
      }
      .ENJ6Ca.mDzRgi {
        --display: grid;
        background-color: transparent;
        box-sizing: border-box;
        display: var(--display);
        min-height: 50px;
        position: relative;
      }
      .ENJ6Ca.mDzRgi .XvQ3FE {
        align-self: center;
        cursor: pointer;
        display: var(--nav-button-display);
        grid-area: 1/1/1/1;
        margin: 0 var(--nav-button-offset);
        position: absolute;
        width: var(--nav-button-width);
        z-index: 1;
      }
      .ENJ6Ca.mDzRgi .XvQ3FE.CdshHv {
        justify-self: var(--nav-button-prev-self-justify);
      }
      .ENJ6Ca.mDzRgi .XvQ3FE.Qinjwp {
        justify-self: var(--nav-button-next-self-justify);
      }
      .ENJ6Ca.mDzRgi .hDJzl4 {
        grid-area: 1/1/1/1;
        height: 100%;
        overflow: var(--slides-overflow);
        position: absolute;
        width: 100%;
      }
      .ENJ6Ca.mDzRgi .hDJzl4.tAoGqR {
        overflow: var(--transition-overflow, var(--slides-overflow));
      }
      .ENJ6Ca.mDzRgi .hDJzl4 > * {
        overflow: var(--slides-overflow);
      }
      .ENJ6Ca.mDzRgi .T23gn7.hDJzl4 {
        height: auto;
        position: relative;
      }
      .ENJ6Ca.mDzRgi .T23gn7.hDJzl4 > * {
        top: 0;
      }
      .ENJ6Ca.mDzRgi .T23gn7.hDJzl4 > :not(:first-child) {
        --force-state-metadata: false;
        position: absolute !important;
      }
      .ENJ6Ca.mDzRgi .N2NGoO {
        border-radius: var(--rd, 0);
        bottom: 0;
        box-shadow: var(--shd, 0 0 0 rgba(0, 0, 0, 0.6));
        left: 0;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
      }
      .ENJ6Ca.mDzRgi .lZ5yqT {
        align-self: end;
        direction: var(--nav-dot-direction);
        display: var(--nav-dot-section-display);
        grid-area: 1/1/1/1;
        justify-self: center;
        margin-bottom: var(--nav-dot-section-bottom-margin);
        position: absolute;
        transform: translateY(50%);
      }
      .ENJ6Ca.mDzRgi .lZ5yqT .dZxZOk {
        align-items: center;
        display: flex;
        justify-content: center;
        pointer-events: none;
        position: relative;
        width: 100%;
      }
      .ENJ6Ca.mDzRgi .lZ5yqT .ZVUGJp {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: var(--nav-dot-size);
        margin: 0 var(--nav-dot-margin);
        pointer-events: auto;
        position: relative;
        width: var(--nav-dot-size);
      }
      .ENJ6Ca.mDzRgi .lZ5yqT .ZVUGJp.Ale4Rm {
        height: var(--nav-dot-size-selected);
        width: var(--nav-dot-size-selected);
      }
      .ENJ6Ca.mDzRgi .W44q6c {
        bottom: 0;
        position: absolute;
        right: 0;
        z-index: var(--above-all-in-container, 49);
      }
      .ENJ6Ca .XvQ3FE:hover {
        opacity: 0.6;
      }
      .ENJ6Ca .XvQ3FE.CdshHv {
        transform: scaleX(var(--nav-button-prev-circle-scaleX-transform));
      }
      .ENJ6Ca .XvQ3FE.Qinjwp {
        transform: scaleX(var(--nav-button-next-circle-scaleX-transform));
      }
      .ENJ6Ca .XvQ3FE svg {
        fill: rgba(
          var(--arrowColor, var(--color_12, color_12)),
          var(--alpha-arrowColor, 1)
        );
      }
      .ENJ6Ca .ZVUGJp {
        background-color: rgba(
          var(--dotsColor, var(--color_12, color_12)),
          var(--alpha-dotsColor, 1)
        );
        border-radius: 50%;
      }
      .ENJ6Ca .ZVUGJp.Ale4Rm {
        background-color: transparent;
        border: 2px solid
          rgba(
            var(--dotsColor, var(--color_12, color_12)),
            var(--alpha-dotsColor, 1)
          );
      }
      .ghJlnq.mDzRgi {
        --display: grid;
        background-color: transparent;
        box-sizing: border-box;
        display: var(--display);
        min-height: 50px;
        position: relative;
      }
      .ghJlnq.mDzRgi .XvQ3FE {
        align-self: center;
        cursor: pointer;
        display: var(--nav-button-display);
        grid-area: 1/1/1/1;
        margin: 0 var(--nav-button-offset);
        position: absolute;
        width: var(--nav-button-width);
        z-index: 1;
      }
      .ghJlnq.mDzRgi .XvQ3FE.CdshHv {
        justify-self: var(--nav-button-prev-self-justify);
      }
      .ghJlnq.mDzRgi .XvQ3FE.Qinjwp {
        justify-self: var(--nav-button-next-self-justify);
      }
      .ghJlnq.mDzRgi .hDJzl4 {
        grid-area: 1/1/1/1;
        height: 100%;
        overflow: var(--slides-overflow);
        position: absolute;
        width: 100%;
      }
      .ghJlnq.mDzRgi .hDJzl4.tAoGqR {
        overflow: var(--transition-overflow, var(--slides-overflow));
      }
      .ghJlnq.mDzRgi .hDJzl4 > * {
        overflow: var(--slides-overflow);
      }
      .ghJlnq.mDzRgi .T23gn7.hDJzl4 {
        height: auto;
        position: relative;
      }
      .ghJlnq.mDzRgi .T23gn7.hDJzl4 > * {
        top: 0;
      }
      .ghJlnq.mDzRgi .T23gn7.hDJzl4 > :not(:first-child) {
        --force-state-metadata: false;
        position: absolute !important;
      }
      .ghJlnq.mDzRgi .N2NGoO {
        border-radius: var(--rd, 0);
        bottom: 0;
        box-shadow: var(--shd, 0 0 0 rgba(0, 0, 0, 0.6));
        left: 0;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
      }
      .ghJlnq.mDzRgi .lZ5yqT {
        align-self: end;
        direction: var(--nav-dot-direction);
        display: var(--nav-dot-section-display);
        grid-area: 1/1/1/1;
        justify-self: center;
        margin-bottom: var(--nav-dot-section-bottom-margin);
        position: absolute;
        transform: translateY(50%);
      }
      .ghJlnq.mDzRgi .lZ5yqT .dZxZOk {
        align-items: center;
        display: flex;
        justify-content: center;
        pointer-events: none;
        position: relative;
        width: 100%;
      }
      .ghJlnq.mDzRgi .lZ5yqT .ZVUGJp {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: var(--nav-dot-size);
        margin: 0 var(--nav-dot-margin);
        pointer-events: auto;
        position: relative;
        width: var(--nav-dot-size);
      }
      .ghJlnq.mDzRgi .lZ5yqT .ZVUGJp.Ale4Rm {
        height: var(--nav-dot-size-selected);
        width: var(--nav-dot-size-selected);
      }
      .ghJlnq.mDzRgi .W44q6c {
        bottom: 0;
        position: absolute;
        right: 0;
        z-index: var(--above-all-in-container, 49);
      }
      .ghJlnq .XvQ3FE:hover {
        opacity: 0.6;
      }
      .ghJlnq .XvQ3FE.CdshHv {
        transform: scaleX(var(--nav-button-prev-scaleX-transform));
      }
      .ghJlnq .XvQ3FE.Qinjwp {
        transform: scaleX(var(--nav-button-next-scaleX-transform));
      }
      .ghJlnq .XvQ3FE svg path:first-child {
        fill: rgba(
          var(--arrowContainerColor, var(--color_11, color_11)),
          var(--alpha-arrowContainerColor, 1)
        );
      }
      .ghJlnq .XvQ3FE svg path:last-child {
        fill: rgba(
          var(--arrowColor, var(--color_12, color_12)),
          var(--alpha-arrowColor, 1)
        );
      }
      .ghJlnq .ZVUGJp {
        background-color: rgba(
          var(--dotsColor, var(--color_12, color_12)),
          var(--alpha-dotsColor, 1)
        );
      }
      .ghJlnq .ZVUGJp.Ale4Rm {
        background-color: rgba(
          var(--dotsSelectedColor, var(--color_11, color_11)),
          var(--alpha-dotsSelectedColor, 1)
        );
      }
      .XVHXq_.mDzRgi {
        --display: grid;
        background-color: transparent;
        box-sizing: border-box;
        display: var(--display);
        min-height: 50px;
        position: relative;
      }
      .XVHXq_.mDzRgi .XvQ3FE {
        align-self: center;
        cursor: pointer;
        display: var(--nav-button-display);
        grid-area: 1/1/1/1;
        margin: 0 var(--nav-button-offset);
        position: absolute;
        width: var(--nav-button-width);
        z-index: 1;
      }
      .XVHXq_.mDzRgi .XvQ3FE.CdshHv {
        justify-self: var(--nav-button-prev-self-justify);
      }
      .XVHXq_.mDzRgi .XvQ3FE.Qinjwp {
        justify-self: var(--nav-button-next-self-justify);
      }
      .XVHXq_.mDzRgi .hDJzl4 {
        grid-area: 1/1/1/1;
        height: 100%;
        overflow: var(--slides-overflow);
        position: absolute;
        width: 100%;
      }
      .XVHXq_.mDzRgi .hDJzl4.tAoGqR {
        overflow: var(--transition-overflow, var(--slides-overflow));
      }
      .XVHXq_.mDzRgi .hDJzl4 > * {
        overflow: var(--slides-overflow);
      }
      .XVHXq_.mDzRgi .T23gn7.hDJzl4 {
        height: auto;
        position: relative;
      }
      .XVHXq_.mDzRgi .T23gn7.hDJzl4 > * {
        top: 0;
      }
      .XVHXq_.mDzRgi .T23gn7.hDJzl4 > :not(:first-child) {
        --force-state-metadata: false;
        position: absolute !important;
      }
      .XVHXq_.mDzRgi .N2NGoO {
        border-radius: var(--rd, 0);
        bottom: 0;
        box-shadow: var(--shd, 0 0 0 rgba(0, 0, 0, 0.6));
        left: 0;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
      }
      .XVHXq_.mDzRgi .lZ5yqT {
        align-self: end;
        direction: var(--nav-dot-direction);
        display: var(--nav-dot-section-display);
        grid-area: 1/1/1/1;
        justify-self: center;
        margin-bottom: var(--nav-dot-section-bottom-margin);
        position: absolute;
        transform: translateY(50%);
      }
      .XVHXq_.mDzRgi .lZ5yqT .dZxZOk {
        align-items: center;
        display: flex;
        justify-content: center;
        pointer-events: none;
        position: relative;
        width: 100%;
      }
      .XVHXq_.mDzRgi .lZ5yqT .ZVUGJp {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: var(--nav-dot-size);
        margin: 0 var(--nav-dot-margin);
        pointer-events: auto;
        position: relative;
        width: var(--nav-dot-size);
      }
      .XVHXq_.mDzRgi .lZ5yqT .ZVUGJp.Ale4Rm {
        height: var(--nav-dot-size-selected);
        width: var(--nav-dot-size-selected);
      }
      .XVHXq_.mDzRgi .W44q6c {
        bottom: 0;
        position: absolute;
        right: 0;
        z-index: var(--above-all-in-container, 49);
      }
      .XVHXq_.mDzRgi {
        min-height: unset;
      }
      .sNF2R0 {
        opacity: 0;
      }
      .hLoBV3 {
        transition: opacity var(--transition-duration)
          cubic-bezier(0.37, 0, 0.63, 1);
      }
      .Rdf41z,
      .hLoBV3 {
        opacity: 1;
      }
      .ftlZWo {
        transition: opacity var(--transition-duration)
          cubic-bezier(0.37, 0, 0.63, 1);
      }
      .ATGlOr,
      .ftlZWo {
        opacity: 0;
      }
      .KQSXD0 {
        transition: opacity var(--transition-duration)
          cubic-bezier(0.64, 0, 0.78, 0);
      }
      .KQSXD0,
      .pagQKE {
        opacity: 1;
      }
      ._6zG5H {
        opacity: 0;
        transition: opacity var(--transition-duration)
          cubic-bezier(0.22, 1, 0.36, 1);
      }
      .BB49uC {
        transform: translateX(100%);
      }
      .j9xE1V {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .ICs7Rs,
      .j9xE1V {
        transform: translateX(0);
      }
      .DxijZJ {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .B5kjYq,
      .DxijZJ {
        transform: translateX(-100%);
      }
      .cJijIV {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .cJijIV,
      .hOxaWM {
        transform: translateX(0);
      }
      .T9p3fN {
        transform: translateX(100%);
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .qDxYJm {
        transform: translateY(100%);
      }
      .aA9V0P {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .YPXPAS,
      .aA9V0P {
        transform: translateY(0);
      }
      .Xf2zsA {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .Xf2zsA,
      .y7Kt7s {
        transform: translateY(-100%);
      }
      .EeUgMu {
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
      .EeUgMu,
      .fdHrtm {
        transform: translateY(0);
      }
      .WIFaG4 {
        transform: translateY(100%);
        transition: transform var(--transition-duration)
          cubic-bezier(0.87, 0, 0.13, 1);
      }
    </style>
    <style>
      .imK94d .eF_jBL {
        border-radius: var(--rd, 0);
        will-change: var(--corners-overflow-fix-will-change, initial);
      }
      .imK94d .wfm0FO {
        border: var(--brw, 0) solid
          rgba(var(--brd, var(--color_11, color_11)), var(--alpha-brd, 1));
        border-radius: var(--rd, 0);
        bottom: 0;
        left: 0;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
      }
      .Tj01hh,
      .jhxvbR {
        display: block;
        height: 100%;
        width: 100%;
      }
      .jhxvbR img {
        max-width: var(--wix-img-max-width, 100%);
      }
      .jhxvbR[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
      }
      .jhxvbR[data-animate-blur] img[data-load-done] {
        filter: none;
      }
      .MW5IWV {
        height: 100%;
        left: 0;
        -webkit-mask-image: var(--mask-image, none);
        mask-image: var(--mask-image, none);
        -webkit-mask-position: var(--mask-position, 0);
        mask-position: var(--mask-position, 0);
        -webkit-mask-repeat: var(--mask-repeat, no-repeat);
        mask-repeat: var(--mask-repeat, no-repeat);
        -webkit-mask-size: var(--mask-size, 100%);
        mask-size: var(--mask-size, 100%);
        overflow: hidden;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: absolute;
        top: 0;
        width: 100%;
      }
      .MW5IWV.N3eg0s {
        clip: rect(0, auto, auto, 0);
      }
      .MW5IWV .Kv1aVt {
        height: 100%;
        position: absolute;
        top: 0;
        width: 100%;
      }
      .MW5IWV .dLPlxY {
        height: var(--fill-layer-image-height, 100%);
        opacity: var(--fill-layer-image-opacity);
      }
      .MW5IWV .dLPlxY img {
        height: 100%;
        width: 100%;
      }
      @supports (-webkit-hyphens: none) {
        .MW5IWV.N3eg0s {
          clip: auto;
          -webkit-clip-path: inset(0);
        }
      }
      .VgO9Yg {
        height: 100%;
      }
      .LWbAav {
        background-color: var(--bg-overlay-color);
        background-image: var(--bg-gradient);
        transition: var(--inherit-transition);
      }
      .K_YxMd,
      .yK6aSC {
        opacity: var(--fill-layer-video-opacity);
      }
      .NGjcJN {
        bottom: var(--media-padding-bottom);
        height: var(--media-padding-height);
        position: absolute;
        top: var(--media-padding-top);
        width: 100%;
      }
      .mNGsUM {
        transform: scale(var(--scale, 1));
        transition: var(--transform-duration, transform 0s);
      }
      .K_YxMd {
        height: 100%;
        position: relative;
        width: 100%;
      }
      wix-media-canvas {
        display: block;
        height: 100%;
      }
      .I8xA4L {
        opacity: var(
          --fill-layer-video-opacity,
          var(--fill-layer-image-opacity, 1)
        );
      }
      .I8xA4L .K_YxMd,
      .I8xA4L .dLPlxY,
      .I8xA4L .yK6aSC {
        opacity: 1;
      }
      .bX9O_S {
        clip-path: var(--fill-layer-clip);
      }
      .Z_wCwr,
      .bX9O_S {
        position: absolute;
        top: 0;
      }
      .Jxk_UL img,
      .Z_wCwr,
      .bX9O_S {
        height: 100%;
        width: 100%;
      }
      .K8MSra {
        opacity: 0;
      }
      .K8MSra,
      .YTb3b4 {
        position: absolute;
        top: 0;
      }
      .YTb3b4 {
        height: 0;
        left: 0;
        overflow: hidden;
        width: 0;
      }
      .SUz0WK {
        left: 0;
        pointer-events: var(--fill-layer-background-media-pointer-events);
        position: var(--fill-layer-background-media-position);
      }
      .FNxOn5,
      .SUz0WK,
      .m4khSP {
        height: 100%;
        top: 0;
        width: 100%;
      }
      .FNxOn5 {
        position: absolute;
      }
      .m4khSP {
        background-color: var(--fill-layer-background-overlay-color);
        opacity: var(--fill-layer-background-overlay-blend-opacity-fallback, 1);
        position: var(--fill-layer-background-overlay-position);
        transform: var(--fill-layer-background-overlay-transform);
      }
      @supports (mix-blend-mode: overlay) {
        .m4khSP {
          mix-blend-mode: var(--fill-layer-background-overlay-blend-mode);
          opacity: var(--fill-layer-background-overlay-blend-opacity, 1);
        }
      }
    </style>
    <style>
      .OQ8Tzd,
      .nKphmK {
        overflow: hidden;
      }
      .nKphmK {
        height: 100%;
        position: relative;
        width: 100%;
      }
      .nKphmK:-ms-fullscreen {
        min-height: auto !important;
      }
      .nKphmK:fullscreen {
        min-height: auto !important;
      }
      .pvlz2w {
        visibility: hidden;
      }
    </style>
    <style>
      .hRdzm4 {
        direction: var(--direction);
        display: flex;
        flex-wrap: wrap;
        justify-content: var(--justify-content);
        margin-bottom: var(--margin-bottom);
        margin-top: var(--margin-top);
        margin-inline-end: var(--margin-inline-end);
        margin-inline-start: var(--margin-inline-start);
        position: relative;
      }
      .T7n0L6 {
        direction: ltr;
        margin: var(--item-margin);
      }
      .E6jjcn,
      .cGWabE {
        display: flex;
        flex-direction: column;
      }
      .E6jjcn {
        direction: var(--direction);
        justify-content: var(--justify-content);
        margin-bottom: var(--margin-bottom);
        margin-top: var(--margin-top);
        margin-inline-end: var(--margin-inline-end);
        margin-inline-start: var(--margin-inline-start);
        position: relative;
      }
      .aT7wGr > * {
        width: 100%;
      }
      .VM7gjN {
        display: flex;
        justify-content: space-between;
      }
      .aT7wGr {
        direction: ltr;
        margin: var(--item-margin);
      }
    </style>
    <style>
      .TWFxr5 {
        height: auto !important;
      }
      .May50y {
        overflow: hidden !important;
      }
    </style>
    <title>Acceuil | SLS Formation</title>

    <style rel="stylesheet">
      .sY_6mf6.oiayxcI--madefor {
        --wbu-font-stack: var(--wix-font-stack);
        --wbu-font-weight-regular: var(--wix-font-weight-regular);
        --wbu-font-weight-medium: var(--wix-font-weight-medium);
        --wbu-font-weight-bold: var(--wix-font-weight-bold);
      }
      .sLrmSa4 {
        --wbu-color-blue-0: #0f2ccf;
        --wbu-color-blue-100: #2f5dff;
        --wbu-color-blue-200: #597dff;
        --wbu-color-blue-300: #acbeff;
        --wbu-color-blue-400: #d5dfff;
        --wbu-color-blue-500: #eaefff;
        --wbu-color-blue-600: #f5f7ff;
        --wbu-color-black-0: #151414;
        --wbu-color-black-100: #383838;
        --wbu-color-black-200: #525150;
        --wbu-color-black-300: #767574;
        --wbu-color-black-400: #a8a6a5;
        --wbu-color-black-500: #e0dfdf;
        --wbu-color-black-600: #f1f0ef;
        --wbu-color-red-0: #9c2426;
        --wbu-color-red-100: #df3336;
        --wbu-color-red-200: #e55c5e;
        --wbu-color-red-300: #ed8f90;
        --wbu-color-red-400: #f4b8b9;
        --wbu-color-red-500: #f9d6d7;
        --wbu-color-red-600: #fcebeb;
        --wbu-color-green-0: #0d4f3d;
        --wbu-color-green-100: #4b916d;
        --wbu-color-green-200: #97c693;
        --wbu-color-green-300: #bde2a7;
        --wbu-color-green-400: #daf3c0;
        --wbu-color-green-500: #effae5;
        --wbu-color-green-600: #f1f5ed;
        --wbu-color-yellow-0: #d49341;
        --wbu-color-yellow-100: #f9ad4d;
        --wbu-color-yellow-200: #fabd71;
        --wbu-color-yellow-300: #fcd29d;
        --wbu-color-yellow-400: #fdead2;
        --wbu-color-yellow-500: #fef3e5;
        --wbu-color-yellow-600: #fef6ed;
        --wbu-color-orange-0: #ae3e09;
        --wbu-color-orange-100: #ff8044;
        --wbu-color-orange-200: #fe9361;
        --wbu-color-orange-300: #fda77f;
        --wbu-color-orange-400: #fbcfbb;
        --wbu-color-orange-500: #fbe3d9;
        --wbu-color-orange-600: #fdf1ec;
        --wbu-color-purple-0: #5000aa;
        --wbu-color-purple-100: #7200f3;
        --wbu-color-purple-200: #8b2df5;
        --wbu-color-purple-300: #be89f9;
        --wbu-color-purple-400: #d7b7fb;
        --wbu-color-purple-500: #f1e5fe;
        --wbu-color-purple-600: #f8f2ff;
        --wbu-color-ai-0: #4d3dd0;
        --wbu-color-ai-100: #5a48f5;
        --wbu-color-ai-200: #7b6df7;
        --wbu-color-ai-300: #a59bfa;
        --wbu-color-ai-400: #d6d1fc;
        --wbu-color-ai-500: #e7e4fe;
        --wbu-color-ai-600: #eeecfe;
        --wbu-heading-font-stack: "Madefor Display", "Helvetica Neue", Helvetica,
          Arial, "\E3\192\A1\E3\201A\A4\E3\192\AA\E3\201A\AA", "meiryo",
          "\E3\192\2019\E3\192\A9\E3\201A\AE\E3\192\17D\E8\A7\2019\E3\201A\B4  pro w3",
          "hiragino kaku gothic pro", sans-serif;
        --wbu-text-tiny-size: 10px;
        --wbu-text-tiny-line-height: 12px;
        --wbu-text-small-size: 12px;
        --wbu-text-small-line-height: 12px;
        --wbu-text-medium-size: 14px;
        --wbu-text-medium-line-height: 16px;
        --wbu-text-large-size: 16px;
        --wbu-text-large-line-height: 18px;
        --wbu-heading-h1-font-size: 32px;
        --wbu-heading-h1-line-height: 40px;
        --wbu-heading-h1-letter-spacing: -0.5px;
        --wbu-heading-h1-font-weight: 400;
        --wbu-heading-h2-font-size: 24px;
        --wbu-heading-h2-line-height: 32px;
        --wbu-heading-h2-letter-spacing: -0.5px;
        --wbu-heading-h2-font-weight: 500;
        --wbu-heading-h3-font-size: 16px;
        --wbu-heading-h3-line-height: 24px;
        --wbu-heading-h3-letter-spacing: -0.5px;
        --wbu-heading-h3-font-weight: 700;
        --wbu-heading-h4-font-size: 14px;
        --wbu-heading-h4-line-height: 18px;
        --wbu-heading-h4-letter-spacing: 0px;
        --wbu-heading-h4-font-weight: 500;
        --wbu-heading-h5-font-size: 12px;
        --wbu-heading-h5-line-height: 18px;
        --wbu-heading-h5-letter-spacing: 0px;
        --wbu-heading-h5-font-weight: 600;
      }
      .surRtQa.oqkwS1j--madefor {
        --wbu-font-stack: var(--wix-font-stack);
        --wbu-font-weight-regular: var(--wix-font-weight-regular);
        --wbu-font-weight-medium: var(--wix-font-weight-medium);
        --wbu-font-weight-bold: var(--wix-font-weight-bold);
      }
      .snU6ghj > :first-child > :first-child {
        z-index: 100000 !important;
      }
      .KeZzT6 {
        animation: U4gKpz 1s linear infinite;
        color: hsla(0, 0%, 100%, 0.9);
        display: inline-block;
        overflow: hidden;
        position: relative;
        transform-origin: 100% 50%;
      }
      .KeZzT6:after,
      .KeZzT6:before {
        animation: DjtvJd 0.5s linear infinite alternate;
        border: 1px solid currentColor;
        border-color: currentColor transparent transparent currentColor;
        border-radius: 50%;
        bottom: 0;
        color: currentColor;
        content: "";
        inset-inline-end: -100%;
        inset-inline-start: 0;
        position: absolute;
        top: 0;
        transform: rotate(-45deg);
      }
      .KeZzT6:after {
        opacity: 0;
      }
      @keyframes DjtvJd {
        to {
          opacity: 1;
          transform: rotate(115deg);
        }
      }
      @keyframes U4gKpz {
        0% {
          transform: rotate(180deg);
        }
        45% {
          transform: rotate(198deg);
        }
        55% {
          transform: rotate(234deg);
        }
        to {
          transform: rotate(540deg);
        }
      }
      .KeZzT6.BAhs0Y {
        height: 30px;
        margin-inline-end: 15px;
        width: 15px;
      }
      .KeZzT6.vUtskN {
        height: 60px;
        margin-inline-end: 30px;
        width: 30px;
      }
      .KeZzT6.RLHjMI {
        height: 80px;
        margin-inline-end: 40px;
        width: 40px;
      }
      .jbFJUT {
        align-items: center;
        display: flex;
        justify-content: center;
      }
      .AnkhXt {
        color: var(--wix-color-5);
      }
    </style>
    <style rel="stylesheet">
      .sw_ETg7.oRBwNer--madefor {
        --wbu-font-stack: var(--wix-font-stack);
        --wbu-font-weight-regular: var(--wix-font-weight-regular);
        --wbu-font-weight-medium: var(--wix-font-weight-medium);
        --wbu-font-weight-bold: var(--wix-font-weight-bold);
      }
      .sik9K3A {
        --wbu-color-blue-0: #0f2ccf;
        --wbu-color-blue-100: #2f5dff;
        --wbu-color-blue-200: #597dff;
        --wbu-color-blue-300: #acbeff;
        --wbu-color-blue-400: #d5dfff;
        --wbu-color-blue-500: #eaefff;
        --wbu-color-blue-600: #f5f7ff;
        --wbu-color-black-0: #151414;
        --wbu-color-black-100: #383838;
        --wbu-color-black-200: #525150;
        --wbu-color-black-300: #767574;
        --wbu-color-black-400: #a8a6a5;
        --wbu-color-black-500: #e0dfdf;
        --wbu-color-black-600: #f1f0ef;
        --wbu-color-red-0: #9c2426;
        --wbu-color-red-100: #df3336;
        --wbu-color-red-200: #e55c5e;
        --wbu-color-red-300: #ed8f90;
        --wbu-color-red-400: #f4b8b9;
        --wbu-color-red-500: #f9d6d7;
        --wbu-color-red-600: #fcebeb;
        --wbu-color-green-0: #0d4f3d;
        --wbu-color-green-100: #4b916d;
        --wbu-color-green-200: #97c693;
        --wbu-color-green-300: #bde2a7;
        --wbu-color-green-400: #daf3c0;
        --wbu-color-green-500: #effae5;
        --wbu-color-green-600: #f1f5ed;
        --wbu-color-yellow-0: #d49341;
        --wbu-color-yellow-100: #f9ad4d;
        --wbu-color-yellow-200: #fabd71;
        --wbu-color-yellow-300: #fcd29d;
        --wbu-color-yellow-400: #fdead2;
        --wbu-color-yellow-500: #fef3e5;
        --wbu-color-yellow-600: #fef6ed;
        --wbu-color-orange-0: #ae3e09;
        --wbu-color-orange-100: #ff8044;
        --wbu-color-orange-200: #fe9361;
        --wbu-color-orange-300: #fda77f;
        --wbu-color-orange-400: #fbcfbb;
        --wbu-color-orange-500: #fbe3d9;
        --wbu-color-orange-600: #fdf1ec;
        --wbu-color-purple-0: #5000aa;
        --wbu-color-purple-100: #7200f3;
        --wbu-color-purple-200: #8b2df5;
        --wbu-color-purple-300: #be89f9;
        --wbu-color-purple-400: #d7b7fb;
        --wbu-color-purple-500: #f1e5fe;
        --wbu-color-purple-600: #f8f2ff;
        --wbu-color-ai-0: #4d3dd0;
        --wbu-color-ai-100: #5a48f5;
        --wbu-color-ai-200: #7b6df7;
        --wbu-color-ai-300: #a59bfa;
        --wbu-color-ai-400: #d6d1fc;
        --wbu-color-ai-500: #e7e4fe;
        --wbu-color-ai-600: #eeecfe;
        --wbu-heading-font-stack: "Madefor Display", "Helvetica Neue", Helvetica,
          Arial, "\E3\192\A1\E3\201A\A4\E3\192\AA\E3\201A\AA", "meiryo",
          "\E3\192\2019\E3\192\A9\E3\201A\AE\E3\192\17D\E8\A7\2019\E3\201A\B4  pro w3",
          "hiragino kaku gothic pro", sans-serif;
        --wbu-text-tiny-size: 10px;
        --wbu-text-tiny-line-height: 12px;
        --wbu-text-small-size: 12px;
        --wbu-text-small-line-height: 12px;
        --wbu-text-medium-size: 14px;
        --wbu-text-medium-line-height: 16px;
        --wbu-text-large-size: 16px;
        --wbu-text-large-line-height: 18px;
        --wbu-heading-h1-font-size: 32px;
        --wbu-heading-h1-line-height: 40px;
        --wbu-heading-h1-letter-spacing: -0.5px;
        --wbu-heading-h1-font-weight: 400;
        --wbu-heading-h2-font-size: 24px;
        --wbu-heading-h2-line-height: 32px;
        --wbu-heading-h2-letter-spacing: -0.5px;
        --wbu-heading-h2-font-weight: 500;
        --wbu-heading-h3-font-size: 16px;
        --wbu-heading-h3-line-height: 24px;
        --wbu-heading-h3-letter-spacing: -0.5px;
        --wbu-heading-h3-font-weight: 700;
        --wbu-heading-h4-font-size: 14px;
        --wbu-heading-h4-line-height: 18px;
        --wbu-heading-h4-letter-spacing: 0px;
        --wbu-heading-h4-font-weight: 500;
        --wbu-heading-h5-font-size: 12px;
        --wbu-heading-h5-line-height: 18px;
        --wbu-heading-h5-letter-spacing: 0px;
        --wbu-heading-h5-font-weight: 600;
      }
      .slahaCO.oeuq_WU--madefor {
        --wbu-font-stack: var(--wix-font-stack);
        --wbu-font-weight-regular: var(--wix-font-weight-regular);
        --wbu-font-weight-medium: var(--wix-font-weight-medium);
        --wbu-font-weight-bold: var(--wix-font-weight-bold);
      }
      .vpm41p {
        height: 1px;
      }
      .JNxVBA {
        align-items: center;
        display: flex;
        flex: 0 0 auto;
        justify-content: center;
      }
      .mnxIuN {
        border-radius: 100%;
        display: inline-block;
        height: 10px;
        margin: 18px 2px;
        opacity: 0;
        width: 10px;
      }
      .mnxIuN:first-child {
        animation: xDDB8S 1s ease-in-out infinite;
      }
      .mnxIuN:nth-child(2) {
        animation: xDDB8S 1s ease-in-out 0.33s infinite;
      }
      .mnxIuN:nth-child(3) {
        animation: xDDB8S 1s ease-in-out 0.66s infinite;
      }
      @keyframes xDDB8S {
        0%,
        to {
          opacity: 0;
        }
        60% {
          opacity: 1;
        }
      }
      .woUe2C .mABNle {
        justify-content: center;
      }
      .woUe2C .Bt5sQV {
        align-items: flex-start;
        display: grid;
        grid-template-columns: 1fr 5fr 1fr;
      }
      .woUe2C .Bt5sQV .dXvq5u {
        flex-direction: column;
        grid-column: 2;
        margin: unset;
        max-width: 100%;
        min-width: 0;
        place-self: center;
      }
      .woUe2C .Bt5sQV .dXvq5u .H_gEjP {
        margin-bottom: 5px;
      }
      .woUe2C .Bt5sQV .dXvq5u .htMcyB {
        align-items: center;
        padding: unset;
      }
      .woUe2C .Bt5sQV .bhsfaV {
        justify-self: right;
        padding-top: 5px;
      }
      .woUe2C .JGhsWK {
        align-items: center;
      }
      .woUe2C .HhgCcE,
      .woUe2C .JGhsWK {
        text-align: center;
      }
      .woUe2C .qikwPI .bhsfaV {
        justify-self: left;
      }
      .woUe2C .UjX6YI {
        justify-content: center;
      }
      .mW_sDH .mABNle {
        justify-content: end;
      }
      .mW_sDH .Bt5sQV {
        display: flex;
        justify-content: space-between;
      }
      .mW_sDH .Bt5sQV .dXvq5u {
        margin: unset;
      }
      .mW_sDH .Bt5sQV .dXvq5u .H_gEjP {
        margin-inline-start: 10px;
      }
      .mW_sDH .Bt5sQV .dXvq5u .htMcyB {
        align-items: flex-end;
        padding: unset;
      }
      .mW_sDH .Bt5sQV,
      .mW_sDH .bhsfaV,
      .mW_sDH .dXvq5u {
        flex-direction: row-reverse;
      }
      .mW_sDH .JGhsWK {
        align-items: flex-end;
        text-align: end;
      }
      .mW_sDH .HhgCcE {
        text-align: end;
      }
      .mW_sDH .UjX6YI {
        justify-content: flex-end;
      }
      .RiOfiW {
        background: #fff;
        border-radius: 0;
        cursor: default;
        display: block;
        margin-inline-end: 0;
        margin-inline-start: 0;
      }
      .RiOfiW.FnDyW0 {
        direction: rtl;
      }
      .RiOfiW.ac4Ofz.JlQ2sc {
        padding-top: 30px;
      }
      .RiOfiW.UUSLFD,
      .RiOfiW.hKl06e,
      .RiOfiW.i_25UC,
      .RiOfiW.jDqjOt,
      .RiOfiW.lyd6fK,
      .RiOfiW.x_FPRX,
      .RiOfiW.yWOr1I {
        display: flex;
        flex-direction: column;
        height: 100%;
      }
      .app-desktop .RiOfiW {
        border-style: solid;
        border-width: 1px;
      }
      .RiOfiW .EfvfyL,
      .RiOfiW .NAWdyL,
      .RiOfiW .PoYsMP {
        display: block;
      }
      .RiOfiW.EfvfyL,
      .RiOfiW.NAWdyL,
      .RiOfiW.PoYsMP,
      .RiOfiW.TBrkhx,
      .RiOfiW.g8vcTX,
      .RiOfiW.ivAnV0 {
        display: flex;
      }
      .RiOfiW.EfvfyL.ac4Ofz,
      .RiOfiW.NAWdyL.ac4Ofz,
      .RiOfiW.PoYsMP.ac4Ofz,
      .RiOfiW.TBrkhx.ac4Ofz,
      .RiOfiW.g8vcTX.ac4Ofz,
      .RiOfiW.ivAnV0.ac4Ofz {
        height: auto;
      }
      @media (max-width: 685px) {
        .use-media-queries .RiOfiW.EfvfyL,
        .use-media-queries .RiOfiW.NAWdyL,
        .use-media-queries .RiOfiW.PoYsMP,
        .use-media-queries .RiOfiW.TBrkhx,
        .use-media-queries .RiOfiW.g8vcTX,
        .use-media-queries .RiOfiW.ivAnV0 {
          flex-direction: column;
        }
      }
      .lt-sm .RiOfiW.EfvfyL,
      .lt-sm .RiOfiW.NAWdyL,
      .lt-sm .RiOfiW.PoYsMP,
      .lt-sm .RiOfiW.TBrkhx,
      .lt-sm .RiOfiW.g8vcTX,
      .lt-sm .RiOfiW.ivAnV0 {
        flex-direction: column;
      }
      .RiOfiW.EfvfyL,
      .RiOfiW.NAWdyL,
      .RiOfiW.PoYsMP,
      .RiOfiW.TBrkhx,
      .RiOfiW.g8vcTX {
        height: 100%;
      }
      .UUSLFD .ITPCIq,
      .hKl06e .ITPCIq,
      .i_25UC .ITPCIq,
      .jDqjOt .ITPCIq,
      .lyd6fK .ITPCIq,
      .x_FPRX .ITPCIq,
      .yWOr1I .ITPCIq {
        height: 165px;
        padding-bottom: 0;
      }
      .RiOfiW.hKl06e {
        position: absolute;
        width: 100%;
      }
      .feQY6g .ITPCIq {
        height: 400px;
      }
      .EfvfyL .ITPCIq,
      .NAWdyL .ITPCIq,
      .PoYsMP .ITPCIq,
      .TBrkhx .ITPCIq,
      .feQY6g .ITPCIq,
      .g8vcTX .ITPCIq,
      .ivAnV0 .ITPCIq {
        padding-bottom: 0;
      }
      .EfvfyL .ITPCIq,
      .EfvfyL .pccjOy,
      .NAWdyL .ITPCIq,
      .NAWdyL .pccjOy,
      .PoYsMP .ITPCIq,
      .PoYsMP .pccjOy,
      .TBrkhx .ITPCIq,
      .TBrkhx .pccjOy,
      .g8vcTX .ITPCIq,
      .g8vcTX .pccjOy,
      .ivAnV0 .ITPCIq,
      .ivAnV0 .pccjOy {
        bottom: 0;
        inset-inline-end: 0;
        inset-inline-start: 0;
        position: absolute;
        top: 0;
      }
      .iSTCpN {
        padding: 30px 18px 25px;
        width: 100%;
      }
      .app-mobile .iSTCpN.QlVZyW {
        box-shadow: 0 1px rgba(0, 0, 0, 0.1);
      }
      .iSTCpN.WdRrHJ.JufO9Q,
      .iSTCpN.glhtJc.JufO9Q {
        padding: 30px 18px;
      }
      .iSTCpN.WdRrHJ.JlQ2sc,
      .iSTCpN.glhtJc.JlQ2sc {
        padding-bottom: 0;
      }
      .iSTCpN.G1V6el {
        padding: 23px;
      }
      .iSTCpN.G1V6el.JufO9Q {
        padding-bottom: 7px;
      }
      .iSTCpN.KwFkyo,
      .iSTCpN.x_FPRX {
        padding: 24px 29px;
      }
      .iSTCpN.KwFkyo.JufO9Q,
      .iSTCpN.x_FPRX.JufO9Q {
        padding-bottom: 7px;
      }
      .iSTCpN.feQY6g {
        padding: 42px 47px 37px 47px;
      }
      .iSTCpN.feQY6g.JufO9Q {
        padding: 42px 47px 13px 47px;
      }
      .iSTCpN.UUSLFD,
      .iSTCpN.i_25UC,
      .iSTCpN.jDqjOt,
      .iSTCpN.lyd6fK,
      .iSTCpN.x_FPRX,
      .iSTCpN.yWOr1I {
        display: flex;
        flex-direction: column;
        height: 100%;
        min-height: 0;
        padding: var(--blog-pl-common-padding-top) 24px
          var(--blog-pl-common-padding-bottom);
      }
      .iSTCpN.hKl06e {
        display: flex;
        flex-direction: column;
        height: 100%;
        min-height: 0;
        padding: var(--blog-pl-slider-padding-top) 16px
          var(--blog-pl-slider-padding-bottom);
      }
      .iSTCpN.UUSLFD.ac4Ofz,
      .iSTCpN.UUSLFD.ac4Ofz.JufO9Q,
      .iSTCpN.hKl06e.ac4Ofz,
      .iSTCpN.hKl06e.ac4Ofz.JufO9Q,
      .iSTCpN.jDqjOt.ac4Ofz,
      .iSTCpN.jDqjOt.ac4Ofz.JufO9Q,
      .iSTCpN.lyd6fK.ac4Ofz,
      .iSTCpN.lyd6fK.ac4Ofz.JufO9Q {
        height: 100%;
      }
      .iSTCpN.ivAnV0 {
        display: flex;
        flex-direction: column;
        padding: 40px 48px 37px;
      }
      @media (min-width: 686px) and (max-width: 980px) {
        .use-media-queries .iSTCpN.ivAnV0 {
          padding: calc(40px + (var(--root-width) - 981px) / 19)
            calc(48px + (var(--root-width) - 981px) / 19);
        }
      }
      .w686-980 .iSTCpN.ivAnV0 {
        padding: calc(40px + (var(--root-width) - 981px) / 19)
          calc(48px + (var(--root-width) - 981px) / 19);
      }
      @media (max-width: 685px) {
        .use-media-queries .iSTCpN.ivAnV0 {
          padding: 24px;
        }
      }
      .lt-sm .iSTCpN.ivAnV0 {
        padding: 24px;
      }
      .iSTCpN.TBrkhx,
      .iSTCpN.g8vcTX {
        display: flex;
        flex: 1;
        flex-direction: column;
        overflow: hidden;
        padding-bottom: 24px;
        padding-top: 24px;
      }
      .iSTCpN.EfvfyL,
      .iSTCpN.NAWdyL,
      .iSTCpN.PoYsMP {
        padding: 0;
      }
      .iSTCpN.sCkhyN {
        display: inline-block;
        height: 100%;
        inset-inline-start: 0;
        padding: 27px 24px;
        position: absolute;
        top: 0;
        width: 100%;
      }
      .iSTCpN.sCkhyN.ac4Ofz {
        padding: 32px 24px;
      }
      .iSTCpN.sCkhyN.KEL4fK {
        background-color: rgba(0, 0, 0, 0.45);
      }
      .iSTCpN.FK1tXh,
      .iSTCpN.JnzaaY,
      .iSTCpN.hp0NoL {
        display: flex;
        flex-direction: column;
      }
      .iSTCpN.LdmkLw {
        display: inline-block;
        inset-inline-start: 0;
        position: absolute;
        top: 0;
      }
      .iSTCpN.FK1tXh,
      .iSTCpN.JnzaaY,
      .iSTCpN.LdmkLw,
      .iSTCpN.hp0NoL {
        height: 100%;
        padding: 27px 24px;
        width: 100%;
      }
      .iSTCpN.FK1tXh.KEL4fK,
      .iSTCpN.JnzaaY.KEL4fK,
      .iSTCpN.LdmkLw.KEL4fK,
      .iSTCpN.hp0NoL.KEL4fK {
        background-color: rgba(0, 0, 0, 0.45);
      }
      .iSTCpN.FK1tXh.ac4Ofz,
      .iSTCpN.JnzaaY.ac4Ofz,
      .iSTCpN.LdmkLw.ac4Ofz,
      .iSTCpN.hp0NoL.ac4Ofz {
        padding: 32px 24px;
      }
      .O16KGI {
        display: block;
      }
      .JMCi2v,
      .O16KGI {
        color: inherit;
        font: inherit;
      }
      .JMCi2v {
        box-sizing: content-box;
        flex: 1 1 auto;
        margin: -3px;
        overflow: hidden;
        padding: 3px;
        width: 100%;
      }
      .JMCi2v.pu51Xe {
        text-align: start;
      }
      .JMCi2v.jDqjOt.mqysW5.ZBB0ua {
        margin-top: -19px;
      }
      .JMCi2v.UUSLFD.mqysW5.ZBB0ua {
        margin-top: -48px;
      }
      .JMCi2v.hKl06e.mqysW5.ZBB0ua,
      .JMCi2v.i_25UC.mqysW5.ZBB0ua,
      .JMCi2v.lyd6fK.mqysW5.ZBB0ua,
      .JMCi2v.yWOr1I.mqysW5.ZBB0ua {
        margin-top: -36px;
      }
      .JMCi2v.x_FPRX.mqysW5.ZBB0ua {
        margin-top: -25px;
      }
      .JMCi2v.TBrkhx,
      .JMCi2v.g8vcTX,
      .JMCi2v.ivAnV0 {
        display: flex;
        flex-direction: column;
      }
      .JMCi2v.TBrkhx.ac4Ofz,
      .JMCi2v.g8vcTX.ac4Ofz,
      .JMCi2v.ivAnV0.ac4Ofz {
        padding-inline-end: 0;
      }
      .JMCi2v.TBrkhx.ZBB0ua,
      .JMCi2v.g8vcTX.ZBB0ua,
      .JMCi2v.ivAnV0.ZBB0ua {
        margin-top: -43px;
      }
      .JMCi2v.TBrkhx.xs2MeC.ZBB0ua,
      .JMCi2v.g8vcTX.xs2MeC.ZBB0ua,
      .JMCi2v.ivAnV0.xs2MeC.ZBB0ua {
        margin-top: -23px;
      }
      .JMCi2v.jDqjOt.ZBB0ua {
        position: relative;
        top: -29px;
      }
      .JMCi2v.UUSLFD.ZBB0ua {
        margin-top: -29px;
      }
      .JMCi2v.hKl06e.ZBB0ua,
      .JMCi2v.i_25UC.ZBB0ua,
      .JMCi2v.lyd6fK.ZBB0ua,
      .JMCi2v.yWOr1I.ZBB0ua {
        margin-top: -13px;
      }
      .JMCi2v.x_FPRX.ZBB0ua {
        margin-top: -6px;
      }
      .JMCi2v.FK1tXh,
      .JMCi2v.JnzaaY,
      .JMCi2v.hp0NoL {
        height: 100%;
      }
      .JMCi2v.FK1tXh.I5nSmk,
      .JMCi2v.JnzaaY.I5nSmk,
      .JMCi2v.hp0NoL.I5nSmk {
        flex-grow: 0;
        height: unset;
      }
      .JMCi2v.hKl06e {
        white-space: normal;
      }
      .hrftIZ.glhtJc.ZBB0ua {
        margin-top: -28px;
        margin-inline-end: 12px;
      }
      .FbwBsX {
        margin-bottom: var(--blog-pl-default-title-margin);
      }
      .FbwBsX.hKl06e p {
        margin-top: var(--blog-pl-slider-title-margin-top);
      }
      .FbwBsX.EfvfyL.ZBB0ua,
      .FbwBsX.NAWdyL.ZBB0ua,
      .FbwBsX.PoYsMP.ZBB0ua,
      .FbwBsX.TBrkhx.ZBB0ua,
      .FbwBsX.UUSLFD.ZBB0ua,
      .FbwBsX.g8vcTX.ZBB0ua,
      .FbwBsX.hKl06e.ZBB0ua,
      .FbwBsX.i_25UC.ZBB0ua,
      .FbwBsX.lyd6fK.ZBB0ua,
      .FbwBsX.x_FPRX.ZBB0ua,
      .FbwBsX.yWOr1I.ZBB0ua {
        margin-inline-end: 30px;
      }
      .FbwBsX.EfvfyL.xs2MeC.ZBB0ua,
      .FbwBsX.NAWdyL.xs2MeC.ZBB0ua,
      .FbwBsX.PoYsMP.xs2MeC.ZBB0ua,
      .FbwBsX.TBrkhx.xs2MeC.ZBB0ua,
      .FbwBsX.UUSLFD.xs2MeC.ZBB0ua,
      .FbwBsX.g8vcTX.xs2MeC.ZBB0ua,
      .FbwBsX.hKl06e.xs2MeC.ZBB0ua,
      .FbwBsX.i_25UC.xs2MeC.ZBB0ua,
      .FbwBsX.lyd6fK.xs2MeC.ZBB0ua,
      .FbwBsX.x_FPRX.xs2MeC.ZBB0ua,
      .FbwBsX.yWOr1I.xs2MeC.ZBB0ua {
        margin-inline-end: 0;
      }
      @media (min-width: 660px) {
        .use-media-queries .FbwBsX {
          margin-bottom: 20px;
        }
        .use-media-queries .FbwBsX.G1V6el {
          margin-bottom: 11px;
        }
        .use-media-queries .FbwBsX.G1V6el.ZBB0ua {
          margin-bottom: -14px;
          margin-top: -13px;
          max-width: 209px;
          position: relative;
          top: -24px;
        }
        .use-media-queries .FbwBsX.G1V6el.ZBB0ua.CzG_Nm {
          max-width: 189px;
        }
        .use-media-queries .FbwBsX.G1V6el.xs2MeC.ZBB0ua {
          margin-top: 12px;
          max-width: none;
        }
        .use-media-queries .FbwBsX.G1V6el.xs2MeC.ZBB0ua.CzG_Nm {
          max-width: none-20px;
        }
        .use-media-queries .FbwBsX.KwFkyo {
          margin-bottom: 10px;
        }
        .use-media-queries .FbwBsX.KwFkyo.ZBB0ua {
          margin-bottom: -13px;
          margin-top: -13px;
          max-width: 359px;
          position: relative;
          top: -24px;
        }
        .use-media-queries .FbwBsX.KwFkyo.ZBB0ua.CzG_Nm {
          max-width: 339px;
        }
        .use-media-queries .FbwBsX.KwFkyo.xs2MeC.ZBB0ua {
          margin-top: 17px;
          max-width: none;
        }
        .use-media-queries .FbwBsX.KwFkyo.xs2MeC.ZBB0ua.CzG_Nm {
          max-width: none-20px;
        }
        .use-media-queries .FbwBsX.x_FPRX {
          margin-bottom: 10px;
        }
        .use-media-queries .FbwBsX.feQY6g {
          margin-bottom: 9px;
          max-width: 740px;
        }
        .use-media-queries .FbwBsX.feQY6g.ZBB0ua {
          margin-bottom: -12px;
          margin-top: -6px;
          position: relative;
          top: -31px;
        }
        .use-media-queries .FbwBsX.feQY6g.xs2MeC.ZBB0ua {
          margin-top: 12px;
          max-width: none;
        }
        .use-media-queries .FbwBsX.feQY6g.xs2MeC.ZBB0ua.CzG_Nm {
          max-width: none-20px;
        }
        .use-media-queries .FbwBsX.jDqjOt {
          margin-bottom: var(--blog-pl-common-title-margin);
        }
        .use-media-queries .FbwBsX.jDqjOt.ZBB0ua {
          max-width: 207px;
        }
        .use-media-queries .FbwBsX.jDqjOt.ZBB0ua.CzG_Nm {
          max-width: 187px;
        }
        .use-media-queries .FbwBsX.jDqjOt.xs2MeC.ZBB0ua {
          max-width: none;
        }
        .use-media-queries .FbwBsX.jDqjOt.xs2MeC.ZBB0ua.CzG_Nm {
          max-width: none-20px;
        }
        .use-media-queries .FbwBsX.UUSLFD,
        .use-media-queries .FbwBsX.hKl06e,
        .use-media-queries .FbwBsX.i_25UC,
        .use-media-queries .FbwBsX.lyd6fK,
        .use-media-queries .FbwBsX.yWOr1I {
          margin-bottom: var(--blog-pl-common-title-margin);
        }
        .use-media-queries .FbwBsX.EfvfyL.ZBB0ua,
        .use-media-queries .FbwBsX.NAWdyL.ZBB0ua,
        .use-media-queries .FbwBsX.PoYsMP.ZBB0ua,
        .use-media-queries .FbwBsX.TBrkhx.ZBB0ua,
        .use-media-queries .FbwBsX.UUSLFD.ZBB0ua,
        .use-media-queries .FbwBsX.g8vcTX.ZBB0ua,
        .use-media-queries .FbwBsX.hKl06e.ZBB0ua,
        .use-media-queries .FbwBsX.i_25UC.ZBB0ua,
        .use-media-queries .FbwBsX.lyd6fK.ZBB0ua,
        .use-media-queries .FbwBsX.yWOr1I.ZBB0ua {
          margin-inline-end: 30px;
        }
        .use-media-queries .FbwBsX.EfvfyL.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.NAWdyL.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.PoYsMP.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.TBrkhx.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.UUSLFD.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.g8vcTX.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.hKl06e.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.i_25UC.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.lyd6fK.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.yWOr1I.xs2MeC.ZBB0ua {
          margin-inline-end: 0;
        }
        .use-media-queries .FbwBsX.EfvfyL.ac4Ofz.ZBB0ua,
        .use-media-queries .FbwBsX.NAWdyL.ac4Ofz.ZBB0ua,
        .use-media-queries .FbwBsX.PoYsMP.ac4Ofz.ZBB0ua,
        .use-media-queries .FbwBsX.TBrkhx.ac4Ofz.ZBB0ua,
        .use-media-queries .FbwBsX.g8vcTX.ac4Ofz.ZBB0ua,
        .use-media-queries .FbwBsX.ivAnV0.ac4Ofz.ZBB0ua {
          max-width: 342px;
        }
        .use-media-queries .FbwBsX.EfvfyL.ac4Ofz.ZBB0ua.CzG_Nm,
        .use-media-queries .FbwBsX.NAWdyL.ac4Ofz.ZBB0ua.CzG_Nm,
        .use-media-queries .FbwBsX.PoYsMP.ac4Ofz.ZBB0ua.CzG_Nm,
        .use-media-queries .FbwBsX.TBrkhx.ac4Ofz.ZBB0ua.CzG_Nm,
        .use-media-queries .FbwBsX.g8vcTX.ac4Ofz.ZBB0ua.CzG_Nm,
        .use-media-queries .FbwBsX.ivAnV0.ac4Ofz.ZBB0ua.CzG_Nm {
          max-width: 322px;
        }
        .use-media-queries .FbwBsX.EfvfyL.ac4Ofz.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.NAWdyL.ac4Ofz.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.PoYsMP.ac4Ofz.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.TBrkhx.ac4Ofz.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.g8vcTX.ac4Ofz.xs2MeC.ZBB0ua,
        .use-media-queries .FbwBsX.ivAnV0.ac4Ofz.xs2MeC.ZBB0ua {
          max-width: none;
        }
        .use-media-queries .FbwBsX.EfvfyL.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm,
        .use-media-queries .FbwBsX.NAWdyL.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm,
        .use-media-queries .FbwBsX.PoYsMP.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm,
        .use-media-queries .FbwBsX.TBrkhx.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm,
        .use-media-queries .FbwBsX.g8vcTX.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm,
        .use-media-queries .FbwBsX.ivAnV0.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm {
          max-width: none-20px;
        }
        .use-media-queries .FbwBsX.ZpmKeC {
          margin-bottom: 6px;
        }
        .use-media-queries .FbwBsX.sCkhyN {
          margin-bottom: 12px;
        }
        .use-media-queries .FbwBsX.sCkhyN.JufO9Q {
          bottom: 0;
          margin-bottom: 30px;
        }
        .use-media-queries .FbwBsX.FK1tXh,
        .use-media-queries .FbwBsX.JnzaaY,
        .use-media-queries .FbwBsX.LdmkLw,
        .use-media-queries .FbwBsX.hp0NoL {
          margin-bottom: 18px;
        }
        .use-media-queries .FbwBsX.FK1tXh.JufO9Q,
        .use-media-queries .FbwBsX.JnzaaY.JufO9Q,
        .use-media-queries .FbwBsX.LdmkLw.JufO9Q,
        .use-media-queries .FbwBsX.hp0NoL.JufO9Q {
          bottom: 0;
          margin-bottom: 36px;
        }
        .use-media-queries .FbwBsX.FK1tXh.JufO9Q,
        .use-media-queries .FbwBsX.JnzaaY.JufO9Q,
        .use-media-queries .FbwBsX.hp0NoL.JufO9Q {
          margin-bottom: 0;
          padding-bottom: 0;
        }
      }
      .gt-xs .FbwBsX {
        margin-bottom: 20px;
      }
      .gt-xs .FbwBsX.G1V6el {
        margin-bottom: 11px;
      }
      .gt-xs .FbwBsX.G1V6el.ZBB0ua {
        margin-bottom: -14px;
        margin-top: -13px;
        max-width: 209px;
        position: relative;
        top: -24px;
      }
      .gt-xs .FbwBsX.G1V6el.ZBB0ua.CzG_Nm {
        max-width: 189px;
      }
      .gt-xs .FbwBsX.G1V6el.xs2MeC.ZBB0ua {
        margin-top: 12px;
        max-width: none;
      }
      .gt-xs .FbwBsX.G1V6el.xs2MeC.ZBB0ua.CzG_Nm {
        max-width: none-20px;
      }
      .gt-xs .FbwBsX.KwFkyo {
        margin-bottom: 10px;
      }
      .gt-xs .FbwBsX.KwFkyo.ZBB0ua {
        margin-bottom: -13px;
        margin-top: -13px;
        max-width: 359px;
        position: relative;
        top: -24px;
      }
      .gt-xs .FbwBsX.KwFkyo.ZBB0ua.CzG_Nm {
        max-width: 339px;
      }
      .gt-xs .FbwBsX.KwFkyo.xs2MeC.ZBB0ua {
        margin-top: 17px;
        max-width: none;
      }
      .gt-xs .FbwBsX.KwFkyo.xs2MeC.ZBB0ua.CzG_Nm {
        max-width: none-20px;
      }
      .gt-xs .FbwBsX.x_FPRX {
        margin-bottom: 10px;
      }
      .gt-xs .FbwBsX.feQY6g {
        margin-bottom: 9px;
        max-width: 740px;
      }
      .gt-xs .FbwBsX.feQY6g.ZBB0ua {
        margin-bottom: -12px;
        margin-top: -6px;
        position: relative;
        top: -31px;
      }
      .gt-xs .FbwBsX.feQY6g.xs2MeC.ZBB0ua {
        margin-top: 12px;
        max-width: none;
      }
      .gt-xs .FbwBsX.feQY6g.xs2MeC.ZBB0ua.CzG_Nm {
        max-width: none-20px;
      }
      .gt-xs .FbwBsX.jDqjOt {
        margin-bottom: var(--blog-pl-common-title-margin);
      }
      .gt-xs .FbwBsX.jDqjOt.ZBB0ua {
        max-width: 207px;
      }
      .gt-xs .FbwBsX.jDqjOt.ZBB0ua.CzG_Nm {
        max-width: 187px;
      }
      .gt-xs .FbwBsX.jDqjOt.xs2MeC.ZBB0ua {
        max-width: none;
      }
      .gt-xs .FbwBsX.jDqjOt.xs2MeC.ZBB0ua.CzG_Nm {
        max-width: none-20px;
      }
      .gt-xs .FbwBsX.UUSLFD,
      .gt-xs .FbwBsX.hKl06e,
      .gt-xs .FbwBsX.i_25UC,
      .gt-xs .FbwBsX.lyd6fK,
      .gt-xs .FbwBsX.yWOr1I {
        margin-bottom: var(--blog-pl-common-title-margin);
      }
      .gt-xs .FbwBsX.EfvfyL.ZBB0ua,
      .gt-xs .FbwBsX.NAWdyL.ZBB0ua,
      .gt-xs .FbwBsX.PoYsMP.ZBB0ua,
      .gt-xs .FbwBsX.TBrkhx.ZBB0ua,
      .gt-xs .FbwBsX.UUSLFD.ZBB0ua,
      .gt-xs .FbwBsX.g8vcTX.ZBB0ua,
      .gt-xs .FbwBsX.hKl06e.ZBB0ua,
      .gt-xs .FbwBsX.i_25UC.ZBB0ua,
      .gt-xs .FbwBsX.lyd6fK.ZBB0ua,
      .gt-xs .FbwBsX.yWOr1I.ZBB0ua {
        margin-inline-end: 30px;
      }
      .gt-xs .FbwBsX.EfvfyL.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.NAWdyL.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.PoYsMP.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.TBrkhx.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.UUSLFD.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.g8vcTX.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.hKl06e.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.i_25UC.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.lyd6fK.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.yWOr1I.xs2MeC.ZBB0ua {
        margin-inline-end: 0;
      }
      .gt-xs .FbwBsX.EfvfyL.ac4Ofz.ZBB0ua,
      .gt-xs .FbwBsX.NAWdyL.ac4Ofz.ZBB0ua,
      .gt-xs .FbwBsX.PoYsMP.ac4Ofz.ZBB0ua,
      .gt-xs .FbwBsX.TBrkhx.ac4Ofz.ZBB0ua,
      .gt-xs .FbwBsX.g8vcTX.ac4Ofz.ZBB0ua,
      .gt-xs .FbwBsX.ivAnV0.ac4Ofz.ZBB0ua {
        max-width: 342px;
      }
      .gt-xs .FbwBsX.EfvfyL.ac4Ofz.ZBB0ua.CzG_Nm,
      .gt-xs .FbwBsX.NAWdyL.ac4Ofz.ZBB0ua.CzG_Nm,
      .gt-xs .FbwBsX.PoYsMP.ac4Ofz.ZBB0ua.CzG_Nm,
      .gt-xs .FbwBsX.TBrkhx.ac4Ofz.ZBB0ua.CzG_Nm,
      .gt-xs .FbwBsX.g8vcTX.ac4Ofz.ZBB0ua.CzG_Nm,
      .gt-xs .FbwBsX.ivAnV0.ac4Ofz.ZBB0ua.CzG_Nm {
        max-width: 322px;
      }
      .gt-xs .FbwBsX.EfvfyL.ac4Ofz.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.NAWdyL.ac4Ofz.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.PoYsMP.ac4Ofz.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.TBrkhx.ac4Ofz.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.g8vcTX.ac4Ofz.xs2MeC.ZBB0ua,
      .gt-xs .FbwBsX.ivAnV0.ac4Ofz.xs2MeC.ZBB0ua {
        max-width: none;
      }
      .gt-xs .FbwBsX.EfvfyL.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm,
      .gt-xs .FbwBsX.NAWdyL.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm,
      .gt-xs .FbwBsX.PoYsMP.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm,
      .gt-xs .FbwBsX.TBrkhx.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm,
      .gt-xs .FbwBsX.g8vcTX.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm,
      .gt-xs .FbwBsX.ivAnV0.ac4Ofz.xs2MeC.ZBB0ua.CzG_Nm {
        max-width: none-20px;
      }
      .gt-xs .FbwBsX.ZpmKeC {
        margin-bottom: 6px;
      }
      .gt-xs .FbwBsX.sCkhyN {
        margin-bottom: 12px;
      }
      .gt-xs .FbwBsX.sCkhyN.JufO9Q {
        bottom: 0;
        margin-bottom: 30px;
      }
      .gt-xs .FbwBsX.FK1tXh,
      .gt-xs .FbwBsX.JnzaaY,
      .gt-xs .FbwBsX.LdmkLw,
      .gt-xs .FbwBsX.hp0NoL {
        margin-bottom: 18px;
      }
      .gt-xs .FbwBsX.FK1tXh.JufO9Q,
      .gt-xs .FbwBsX.JnzaaY.JufO9Q,
      .gt-xs .FbwBsX.LdmkLw.JufO9Q,
      .gt-xs .FbwBsX.hp0NoL.JufO9Q {
        bottom: 0;
        margin-bottom: 36px;
      }
      .gt-xs .FbwBsX.FK1tXh.JufO9Q,
      .gt-xs .FbwBsX.JnzaaY.JufO9Q,
      .gt-xs .FbwBsX.hp0NoL.JufO9Q {
        margin-bottom: 0;
        padding-bottom: 0;
      }
      .FbwBsX.glhtJc {
        margin-bottom: 0;
      }
      .FbwBsX.WdRrHJ.AkO1lZ,
      .FbwBsX.glhtJc.AkO1lZ {
        margin-bottom: 18px;
      }
      .FbwBsX.WdRrHJ.ySFpqx,
      .FbwBsX.glhtJc.ySFpqx {
        margin-bottom: 0;
      }
      .FbwBsX.WdRrHJ.ZBB0ua,
      .FbwBsX.glhtJc.ZBB0ua {
        margin-top: -43px;
        max-width: 263px;
      }
      .FbwBsX.WdRrHJ.ZBB0ua.CzG_Nm,
      .FbwBsX.glhtJc.ZBB0ua.CzG_Nm {
        max-width: 243px;
      }
      .FbwBsX.WdRrHJ.xs2MeC.ZBB0ua,
      .FbwBsX.glhtJc.xs2MeC.ZBB0ua {
        margin-top: -19px;
        max-width: none;
      }
      .FbwBsX.WdRrHJ.xs2MeC.ZBB0ua.CzG_Nm,
      .FbwBsX.glhtJc.xs2MeC.ZBB0ua.CzG_Nm {
        max-width: none-20px;
      }
      .FbwBsX.WdRrHJ.I5nSmk,
      .FbwBsX.WdRrHJ.xs2MeC.I5nSmk,
      .FbwBsX.glhtJc.I5nSmk,
      .FbwBsX.glhtJc.xs2MeC.I5nSmk {
        margin-top: 0;
      }
      .FbwBsX.TBrkhx,
      .FbwBsX.g8vcTX,
      .FbwBsX.ivAnV0 {
        border-bottom: 12px solid transparent;
        margin: 0;
      }
      .FbwBsX.EfvfyL,
      .FbwBsX.NAWdyL,
      .FbwBsX.PoYsMP {
        border-bottom: 8px solid transparent;
        margin: 0;
      }
      .nebVix {
        padding-bottom: 18px;
      }
      @media (min-width: 660px) {
        .use-media-queries .nebVix {
          padding-bottom: 23px;
        }
      }
      .gt-xs .nebVix {
        padding-bottom: 23px;
      }
      .nebVix.glhtJc {
        margin-top: 10px;
      }
      .nebVix.WdRrHJ.JufO9Q,
      .nebVix.glhtJc.JufO9Q {
        padding-bottom: 0;
      }
      .nebVix.feQY6g {
        max-width: 740px;
      }
      .nebVix.EfvfyL,
      .nebVix.NAWdyL,
      .nebVix.PoYsMP,
      .nebVix.TBrkhx,
      .nebVix.g8vcTX,
      .nebVix.ivAnV0 {
        display: flex;
        flex: 1;
        overflow: hidden;
        padding: 0;
      }
      .sCkhyN {
        color: #fff;
      }
      .sCkhyN.RiOfiW {
        display: inline-block;
        height: 292px;
        width: 292px;
      }
      .sCkhyN .ITPCIq,
      .sCkhyN .pccjOy,
      .sCkhyN.RiOfiW.pu51Xe {
        height: 100%;
        width: 100%;
      }
      .sCkhyN.JMCi2v {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }
      .sCkhyN.FbwBsX {
        bottom: 60px;
        position: absolute;
        width: calc(100% - 48px);
      }
      .sCkhyN.NPsER6 {
        bottom: 27px;
        display: inline-block;
        inset-inline-end: 24px;
        inset-inline-start: 24px;
        position: absolute;
      }
      .LdmkLw.FbwBsX {
        bottom: 60px;
        position: absolute;
        width: calc(100% - 48px);
      }
      .FK1tXh.FbwBsX,
      .JnzaaY.FbwBsX,
      .hp0NoL.FbwBsX {
        padding-bottom: 30px;
      }
      .FK1tXh.FbwBsX.p8Uk20,
      .JnzaaY.FbwBsX.p8Uk20,
      .hp0NoL.FbwBsX.p8Uk20 {
        margin: 0;
        padding: 0;
      }
      .FK1tXh,
      .JnzaaY,
      .LdmkLw,
      .hp0NoL {
        color: #fff;
      }
      .FK1tXh.RiOfiW,
      .JnzaaY.RiOfiW,
      .LdmkLw.RiOfiW,
      .hp0NoL.RiOfiW {
        display: inline-block;
        height: 454px;
        width: 454px;
      }
      .FK1tXh .ITPCIq,
      .FK1tXh .pccjOy,
      .FK1tXh.RiOfiW.pu51Xe,
      .JnzaaY .ITPCIq,
      .JnzaaY .pccjOy,
      .JnzaaY.RiOfiW.pu51Xe,
      .LdmkLw .ITPCIq,
      .LdmkLw .pccjOy,
      .LdmkLw.RiOfiW.pu51Xe,
      .hp0NoL .ITPCIq,
      .hp0NoL .pccjOy,
      .hp0NoL.RiOfiW.pu51Xe {
        height: 100%;
        width: 100%;
      }
      .FK1tXh.JMCi2v,
      .JnzaaY.JMCi2v,
      .LdmkLw.JMCi2v,
      .hp0NoL.JMCi2v {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }
      .FK1tXh.NPsER6,
      .JnzaaY.NPsER6,
      .LdmkLw.NPsER6,
      .hp0NoL.NPsER6 {
        bottom: 27px;
        display: inline-block;
        inset-inline-end: 24px;
        inset-inline-start: 24px;
        position: absolute;
      }
      .n9F1tl {
        fill: #fff;
      }
      .VMF9AQ {
        color: #fff;
      }
      .BVf6py {
        background-color: #fff;
      }
      .TE7que {
        height: 1px;
        opacity: 0.2;
      }
      @media (min-width: 660px) {
        .use-media-queries .TE7que {
          margin-bottom: 12px;
        }
      }
      .gt-xs .TE7que {
        margin-bottom: 12px;
      }
      .TE7que:not(.iD0LEx) {
        margin-bottom: var(--blog-pl-footer-separator-margin);
      }
      .TE7que.iD0LEx {
        margin-top: 24px;
      }
      .TE7que.iD0LEx.vxAOcp {
        margin-top: 18px;
      }
      .FK1tXh .TE7que,
      .JnzaaY .TE7que,
      .LdmkLw .TE7que,
      .hp0NoL .TE7que,
      .sCkhyN .TE7que {
        opacity: 1;
      }
      .NPsER6.TBrkhx,
      .NPsER6.g8vcTX {
        margin-top: auto;
      }
      .NPsER6.TBrkhx.kzwb6t,
      .NPsER6.g8vcTX.kzwb6t {
        padding-top: 12px;
      }
      @media (max-width: 685px) {
        .use-media-queries .NPsER6.TBrkhx,
        .use-media-queries .NPsER6.g8vcTX {
          padding-top: 12px;
        }
      }
      .lt-sm .NPsER6.TBrkhx,
      .lt-sm .NPsER6.g8vcTX {
        padding-top: 12px;
      }
      .NPsER6.ivAnV0 {
        margin-top: auto;
      }
      .NPsER6.ivAnV0.kzwb6t {
        padding-top: 36px;
      }
      @media (max-width: 685px) {
        .use-media-queries .NPsER6.ivAnV0 {
          padding-top: 36px;
        }
      }
      .lt-sm .NPsER6.ivAnV0 {
        padding-top: 36px;
      }
      .NPsER6.UUSLFD,
      .NPsER6.hKl06e,
      .NPsER6.i_25UC,
      .NPsER6.jDqjOt,
      .NPsER6.lyd6fK,
      .NPsER6.yWOr1I {
        margin-top: auto;
        padding-top: 12px;
      }
      .NPsER6.i_25UC.zwuMcM,
      .NPsER6.lyd6fK.zwuMcM,
      .NPsER6.yWOr1I.zwuMcM {
        padding-top: var(--blog-pl-footer-padding-top);
      }
      .GGI4XB {
        display: block;
        margin: 15px 0 -11px;
      }
      .app-desktop .GGI4XB {
        display: none;
      }
      .NtnM8D {
        opacity: 0.6;
      }
      .tFEVbz {
        flex: 0 0 50%;
      }
      .QP8OH2 {
        padding-top: 75%;
        position: relative;
        width: 100%;
      }
      .Gf88Ln {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      @media (min-width: 686px) {
        .use-media-queries .Gf88Ln {
          -webkit-line-clamp: 1;
        }
      }
      .gt-s .Gf88Ln {
        -webkit-line-clamp: 1;
      }
      @media (min-width: 740px) {
        .use-media-queries .Gf88Ln {
          -webkit-line-clamp: 2;
        }
      }
      .gt-740 .Gf88Ln {
        -webkit-line-clamp: 2;
      }
      @media (min-width: 886px) {
        .use-media-queries .Gf88Ln {
          -webkit-line-clamp: 3;
        }
      }
      .gt-886 .Gf88Ln {
        -webkit-line-clamp: 3;
      }
      .so9KdE.TBrkhx,
      .so9KdE.g8vcTX {
        -webkit-mask-image: linear-gradient(0deg, transparent, #000 30px);
        mask-image: linear-gradient(0deg, transparent, #000 30px);
      }
      .hMB1wk {
        display: inline;
      }
      .CHRJex {
        cursor: pointer;
      }
      ._UH27m {
        position: relative !important;
      }
      .EQ1O0U {
        display: flex !important;
        margin: 14px 0;
      }
      .EQ1O0U.xczrBK {
        --full-icon-color: var(
          --post-homepage-ratingFilledStarColor,
          var(--wix-color-8)
        );
        --empty-icon-color: var(
          --post-homepage-ratingUnfilledStarColor,
          var(--wix-color-3)
        );
        color: rgb(var(--post-homepage-ratingFontColor, var(--wix-color-5)));
        font: var(--post-homepage-ratingFont, var(--wix-font-Body-M));
        font-size: var(--post-homepage-ratingFont-size, 14px);
        -webkit-text-decoration: var(
          --post-homepage-ratingFont-text-decoration
        );
        text-decoration: var(--post-homepage-ratingFont-text-decoration);
      }
      .EQ1O0U.xczrBK.amZSNe {
        --full-icon-color: var(
          --post-homepage-TOI-ratingFilledStarColor,
          var(--wix-color-8)
        );
        --empty-icon-color: var(
          --post-homepage-TOI-ratingUnfilledStarColor,
          var(--wix-color-3)
        );
        color: rgb(
          var(--post-homepage-TOI-ratingFontColor, var(--wix-color-5))
        );
      }
      .EQ1O0U.hrftIZ {
        --full-icon-color: var(
          --post-category-ratingFilledStarColor,
          var(--wix-color-8)
        );
        --empty-icon-color: var(
          --post-category-ratingUnfilledStarColor,
          var(--wix-color-3)
        );
        color: rgb(var(--post-category-ratingFontColor, var(--wix-color-5)));
        font: var(--post-category-ratingFont, var(--wix-font-Body-M));
        font-size: var(--post-category-ratingFont-size, 14px);
        -webkit-text-decoration: var(
          --post-category-ratingFont-text-decoration
        );
        text-decoration: var(--post-category-ratingFont-text-decoration);
      }
      .EQ1O0U.hrftIZ.amZSNe {
        --full-icon-color: var(
          --post-category-TOI-ratingFilledStarColor,
          var(--wix-color-8)
        );
        --empty-icon-color: var(
          --post-category-TOI-ratingUnfilledStarColor,
          var(--wix-color-3)
        );
        color: rgb(
          var(--post-category-TOI-ratingFontColor, var(--wix-color-5))
        );
      }
      .EQ1O0U.zwuMcM {
        --full-icon-color: var(
          --post-post-list-ratingFilledStarColor,
          var(--wix-color-8)
        );
        --empty-icon-color: var(
          --post-post-list-ratingUnfilledStarColor,
          var(--wix-color-3)
        );
        color: rgb(var(--post-post-list-ratingFontColor, var(--wix-color-5)));
        font: var(--post-post-list-ratingFont, var(--wix-font-Body-M));
        font-size: var(--post-post-list-ratingFont-size, 14px);
        -webkit-text-decoration: var(
          --post-post-list-ratingFont-text-decoration
        );
        text-decoration: var(--post-post-list-ratingFont-text-decoration);
      }
      .EQ1O0U.zwuMcM.amZSNe {
        --full-icon-color: var(
          --post-post-list-TOI-ratingFilledStarColor,
          var(--wix-color-8)
        );
        --empty-icon-color: var(
          --post-post-list-TOI-ratingUnfilledStarColor,
          var(--wix-color-3)
        );
        color: rgb(
          var(--post-post-list-TOI-ratingFontColor, var(--wix-color-5))
        );
      }
      .EQ1O0U.NAWdyL {
        margin: 8px 0;
      }
      .EQ1O0U.TBrkhx,
      .EQ1O0U.g8vcTX,
      .EQ1O0U.ivAnV0 {
        margin-bottom: 2px;
      }
      .EQ1O0U.FK1tXh.JufO9Q,
      .EQ1O0U.JnzaaY.JufO9Q,
      .EQ1O0U.LdmkLw.JufO9Q,
      .EQ1O0U.hp0NoL.JufO9Q {
        margin-bottom: 0;
      }
      .G5Aa3J {
        cursor: pointer;
        height: 19px;
        vertical-align: middle;
        width: 19px;
      }
      .G5Aa3J,
      .G5Aa3J svg {
        display: inline-block;
        position: relative;
      }
      .G5Aa3J svg {
        fill: transparent;
        stroke: #e84a43;
        stroke-width: 1.5px;
        transition: fill 0.25s;
      }
      .G5Aa3J .X22cAo {
        display: none;
      }
      .G5Aa3J.jSxrNf svg {
        fill: #e84a43;
        stroke: none;
        opacity: 1;
      }
      .G5Aa3J.jSxrNf .X22cAo {
        border: 3px solid #e84a43;
        border-radius: 100%;
        height: 24px;
        inset-inline-start: -3px;
        top: -3px;
        width: 24px;
      }
      .G5Aa3J.jSxrNf .X22cAo,
      .G5Aa3J.jSxrNf .zkv91u {
        display: inline-block;
        opacity: 0;
        position: absolute;
      }
      .G5Aa3J.jSxrNf .zkv91u {
        background-color: #e84a43;
        border-radius: 100%;
        height: 4px;
        inset-inline-start: 8px;
        top: 7px;
        width: 4px;
      }
      .G5Aa3J.FfDJdv.jSxrNf svg {
        animation: AgCb8e 0.5s;
      }
      .G5Aa3J.FfDJdv.jSxrNf .X22cAo {
        animation: EN90Pa 0.3s;
      }
      .G5Aa3J.FfDJdv.jSxrNf .zkv91u {
        animation: JVoWJX 0.5s;
        animation-delay: 0.1s;
      }
      .Eu1LNI,
      .PxeFnW,
      .YfFkQX,
      .y5oGWU {
        display: inline-block;
        height: 6px;
        inset-inline-start: 8px;
        position: absolute;
        top: 7px;
        width: 6px;
      }
      .YfFkQX {
        transform: rotate(0deg);
      }
      .y5oGWU {
        transform: rotate(144deg);
      }
      .Eu1LNI {
        transform: rotate(216deg);
      }
      .PxeFnW {
        transform: rotate(288deg);
      }
      @keyframes AgCb8e {
        0% {
          transform: scale(0.1);
        }
        40% {
          transform: scale(1.3);
        }
        70% {
          transform: scale(0.9);
        }
        90% {
          transform: scale(1.1);
        }
        to {
          transform: scale(1);
        }
      }
      @keyframes EN90Pa {
        0% {
          opacity: 0.1;
          transform: scale(0.1);
        }
        20% {
          opacity: 1;
        }
        to {
          opacity: 0;
          transform: scale(1.5);
        }
      }
      @keyframes JVoWJX {
        0% {
          opacity: 0;
          transform: translateX(5px) scale(1);
        }
        20% {
          opacity: 1;
        }
        to {
          opacity: 0;
          transform: translateX(17px) scale(0);
        }
      }
      .Kh5HMz {
        background: none;
        border: 0;
        color: inherit;
        font: inherit;
        font-size: inherit !important;
        line-height: 1;
        padding: 0;
      }
      .Kh5HMz,
      .h7K_lu {
        vertical-align: middle;
      }
      .h7K_lu {
        align-items: center;
        display: inline-flex;
      }
      .FYRNvd {
        padding-inline-end: 5px;
      }
      .p9gct4 {
        flex-direction: row-reverse;
      }
      .p9gct4 .FYRNvd {
        padding-inline-end: 0;
        padding-inline-start: 5px;
      }
      .laz8E8 {
        clip: rect(1px, 1px, 1px, 1px) !important;
        border: 0 !important;
        clip-path: inset(50%) !important;
        height: 1px !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        white-space: nowrap !important;
        width: 1px !important;
      }
      .t66ylj {
        align-items: center;
        display: inline-flex;
        padding-inline-end: 2px;
        vertical-align: middle;
      }
      .eYQJQu:not(:first-child) {
        margin-inline-start: 6px;
      }
      .bEeZ1_ {
        align-items: baseline;
        display: flex;
        inline-size: var(--width, 300px);
      }
      .bEeZ1_:before {
        animation: xxdw6w 2s infinite;
        background: currentColor;
        block-size: 10px;
        border-radius: 100px;
        content: "";
        display: block;
        flex: 1;
        inline-size: 100%;
        -webkit-mask-image: linear-gradient(
          270deg,
          #000 -100%,
          #000 0,
          #000 40%,
          transparent 50%,
          transparent 0,
          #000 60%,
          #000 100%,
          #000 200%
        );
        mask-image: linear-gradient(
          270deg,
          #000 -100%,
          #000 0,
          #000 40%,
          transparent 50%,
          transparent 0,
          #000 60%,
          #000 100%,
          #000 200%
        );
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-size: 400%;
        mask-size: 400%;
        opacity: 0.12;
        overflow: hidden;
        position: relative;
      }
      @keyframes xxdw6w {
        0% {
          -webkit-mask-position: 100% 50%;
          mask-position: 100% 50%;
        }
        to {
          -webkit-mask-position: 0 50%;
          mask-position: 0 50%;
        }
      }
      .E54HWO {
        align-items: center;
        display: flex;
        white-space: nowrap;
      }
      .E54HWO > * + * {
        margin-inline-start: 16px;
      }
      .lkXNhM {
        color: inherit;
        display: inline-flex;
        font: inherit;
      }
      .NT9zC5 {
        display: flex;
        font-size: 12px !important;
        height: var(--blog-pl-footer-content-height);
        justify-content: space-between;
        line-height: 1.5;
      }
      .NT9zC5.KToN9P,
      .NT9zC5.T6pLzn,
      .NT9zC5.eJayAP {
        justify-content: flex-start;
      }
      .zGPuSQ {
        font-size: inherit !important;
      }
      .PsEy9r {
        display: flex;
        margin-inline-end: 16px;
      }
      .L2cuMO {
        align-items: center;
        display: flex;
        justify-content: flex-end;
      }
      .tmHsxH {
        display: block;
        height: 1px;
        opacity: 0.2;
      }
      .Dgf2Op {
        flex: 0 0 1px;
        flex-shrink: 0;
        height: 100%;
        opacity: 0.2;
        width: 1px;
      }
      .Ki_0_s {
        align-self: center;
        border-radius: 50%;
        display: block;
        height: 2px;
        width: 2px;
      }
      .Ym42pV {
        display: inline-block;
        max-width: -moz-min-content;
        max-width: min-content;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%;
      }
      .CS4xCt {
        font-size: 0;
        line-height: 1.2;
        margin: 0 0 var(--blog-pl-category-label-margin-bottom);
      }
      .pratMU {
        display: inline-block;
      }
      .d7TwYL,
      .g99UQY,
      .u0T9F0 {
        margin-top: 4px;
      }
      .TRcECH {
        margin-bottom: var(--blog-pl-slider-category-label-margin-bottom);
      }
      .TpXFK4,
      .dU7Co_,
      .ewnq0g,
      .sEWsEY {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        justify-content: flex-end;
      }
      @media (max-width: 659px) {
        .use-media-queries .TpXFK4,
        .use-media-queries .dU7Co_,
        .use-media-queries .ewnq0g,
        .use-media-queries .sEWsEY {
          margin-bottom: 0;
        }
      }
      .lt-s .TpXFK4,
      .lt-s .dU7Co_,
      .lt-s .ewnq0g,
      .lt-s .sEWsEY {
        margin-bottom: 0;
      }
      .dqpczu {
        background-color: rgb(
          var(--category-label-button-backgroundColor, var(--wix-color-8))
        );
        border-color: rgb(
          var(--category-label-button-borderColor, var(--wix-color-8))
        );
        border-radius: calc(var(--category-label-button-cornerRadius, 0) * 1px);
        border-style: solid;
        border-width: calc(var(--category-label-button-borderWidth, 0) * 1px);
        color: rgb(var(--category-label-button-textColor, var(--wix-color-1)));
        font: var(--category-label-button-textFont, var(--wix-font-Body-M));
        font-size: var(--category-label-button-textFont-size, 14px);
        padding: calc(var(--category-label-button-verticalPadding, 6) * 1px)
          calc(var(--category-label-button-horizontalPadding, 12) * 1px);
        -webkit-text-decoration: var(
          --category-label-button-textFont-text-decoration
        );
        text-decoration: var(--category-label-button-textFont-text-decoration);
      }
      .dqpczu:hover {
        background-color: rgb(
          var(--category-label-button-backgroundColorHover, var(--wix-color-8))
        );
        border-color: rgb(
          var(--category-label-button-borderColorHover, var(--wix-color-8))
        );
        color: rgb(
          var(--category-label-button-textColorHover, var(--wix-color-1))
        );
      }
      .SkWvPq {
        color: rgb(var(--category-label-text-textColor, var(--wix-color-8)));
        font: var(--category-label-text-textFont, var(--wix-font-Body-M));
        -webkit-text-decoration: var(
          --category-label-text-textFont-text-decoration
        );
        text-decoration: var(--category-label-text-textFont-text-decoration);
      }
      .SkWvPq:hover {
        color: rgb(
          var(--category-label-text-textColorHover, var(--wix-color-8))
        );
      }
      .iT3c03.dqpczu {
        background-color: rgb(
          var(
            --category-label-button-mobile-backgroundColor,
            var(--wix-color-8)
          )
        );
        border-color: rgb(
          var(--category-label-button-mobile-borderColor, var(--wix-color-8))
        );
        border-radius: calc(
          var(--category-label-button-mobile-cornerRadius, 0) * 1px
        );
        border-style: solid;
        border-width: calc(
          var(--category-label-button-mobile-borderWidth, 0) * 1px
        );
        color: rgb(
          var(--category-label-button-mobile-textColor, var(--wix-color-1))
        );
        font: var(
          --category-label-button-mobile-textFont,
          var(--wix-font-Body-M)
        );
        padding: calc(
            var(--category-label-button-mobile-verticalPadding, 6) * 1px
          )
          calc(var(--category-label-button-mobile-horizontalPadding, 12) * 1px);
      }
      .iT3c03.SkWvPq {
        color: rgb(
          var(--category-label-text-mobile-textColor, var(--wix-color-8))
        );
        font: var(
          --category-label-text-mobile-textFont,
          var(--wix-font-Body-M)
        );
      }
      .tQ0Q1A {
        display: block;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }
      @media print {
        .tQ0Q1A {
          color: #000 !important;
        }
      }
      .xUuoH9 {
        align-items: center;
        display: flex;
        list-style: none;
        margin: 0;
        max-width: 100%;
        padding: 0;
        text-overflow: ellipsis;
        white-space: nowrap;
      }
      .rmqd9q {
        margin: 0 8px;
      }
      .F4tRtJ {
        min-width: 0;
      }
      .MBUSKJ {
        font-size: inherit !important;
      }
      .UZa2Xr:nth-child(3) {
        overflow: hidden;
        text-overflow: ellipsis;
      }
      .dZs5e3 {
        display: flex;
        flex-direction: column;
        font-size: 12px !important;
        max-width: 100%;
        padding-inline-start: 10px;
      }
      .dZs5e3:first-child {
        padding-inline-start: 0;
      }
      .dZs5e3.krCqqh {
        font-size: inherit;
      }
      @media (min-width: 980px) {
        .use-media-queries .mtJpOF .dZs5e3 {
          padding-inline-start: 18px;
        }
      }
      .gt-sm .mtJpOF .dZs5e3 {
        padding-inline-start: 18px;
      }
      .dZs5e3.PZIDK7 ul {
        line-height: 19px;
      }
      .mJ89ha {
        font-size: inherit !important;
      }
      .taLqKM {
        align-items: center;
        display: flex;
        height: 19px;
        max-width: 100%;
      }
      .lR3yj5 {
        border-radius: 50%;
        display: block;
        -o-object-fit: cover;
        object-fit: cover;
        overflow: hidden;
      }
      .TI1b5D,
      .dDcMfv,
      .lR3yj5 {
        height: 100%;
        width: 100%;
      }
      .TI1b5D {
        display: block;
      }
      .TI1b5D img {
        max-width: var(--wix-img-max-width, 100%);
      }
      .TI1b5D[data-animate-blur] img {
        filter: blur(9px);
        transition: filter 0.8s ease-in;
      }
      .TI1b5D[data-animate-blur] img[data-load-done] {
        filter: none;
      }
      .ERF5R1 {
        display: inline-block;
        height: 32px;
        position: relative;
        width: 32px;
      }
      @media (min-width: 660px) {
        .use-media-queries .ERF5R1.A9WFUN {
          height: 40px;
          width: 40px;
        }
      }
      .gt-xs .ERF5R1.A9WFUN {
        height: 40px;
        width: 40px;
      }
      @media (min-width: 660px) {
        .use-media-queries .ERF5R1.A0qBRg {
          height: 92px;
          width: 92px;
        }
      }
      .gt-xs .ERF5R1.A0qBRg {
        height: 92px;
        width: 92px;
      }
      .ERF5R1.zI70HL {
        height: 80px;
        width: 80px;
      }
      @media (min-width: 660px) {
        .use-media-queries .ERF5R1.zI70HL {
          height: 100px;
          width: 100px;
        }
      }
      .gt-xs .ERF5R1.zI70HL {
        height: 100px;
        width: 100px;
      }
      .ERF5R1.pozZSb {
        height: 40px;
        width: 40px;
      }
      @media (min-width: 660px) {
        .use-media-queries .ERF5R1.pozZSb {
          height: 80px;
          width: 80px;
        }
      }
      .gt-xs .ERF5R1.pozZSb {
        height: 80px;
        width: 80px;
      }
      .ERF5R1.Zcb_uj {
        height: 30px;
        width: 30px;
      }
      .ERF5R1.bCACxF {
        height: 20px;
        width: 20px;
      }
      @media (min-width: 660px) {
        .use-media-queries .ERF5R1.bCACxF {
          height: 40px;
          width: 40px;
        }
      }
      .gt-xs .ERF5R1.bCACxF {
        height: 40px;
        width: 40px;
      }
      .ERF5R1.C3KamW {
        height: 20px;
        width: 20px;
      }
      @media (min-width: 660px) {
        .use-media-queries .ERF5R1.C3KamW {
          height: 30px;
          width: 30px;
        }
      }
      .gt-xs .ERF5R1.C3KamW {
        height: 30px;
        width: 30px;
      }
      .lBv2XN {
        align-items: center;
        display: flex;
      }
      .dlINDG {
        padding-inline-start: 12px;
      }
      .dlINDG:first-child {
        padding-inline-start: 0;
      }
      .WmZAIu {
        display: flex;
        height: 100%;
        position: relative;
        width: 100%;
      }
      .Bvf4SR {
        background: none;
        border: none;
        font-size: 0;
        padding: 0;
      }
      ._EA3Ke {
        align-items: center;
        cursor: pointer;
        display: flex;
        height: 24px;
        justify-content: center;
        position: relative;
        width: 24px;
      }
      .Z9ijf3 {
        box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 5px;
        max-width: 300px;
        min-width: 200px;
        position: absolute;
        z-index: 900;
      }
      .hUiNwc {
        align-items: center;
        display: flex;
      }
      .OpTnhP {
        display: block;
      }
      .SbjQym {
        align-items: center;
        display: flex;
        justify-content: flex-end;
      }
      @media (min-width: 980px) {
        .use-media-queries .SbjQym {
          padding-bottom: 12px;
        }
      }
      .gt-sm .SbjQym {
        padding-bottom: 12px;
      }
      .SbjQym.IStc0y {
        padding-bottom: 18px;
      }
      .SbjQym.YD6Z1G,
      .SbjQym._dR9OP {
        padding-bottom: 12px;
      }
      .SbjQym.Nn0z1D,
      .SbjQym.SoK2Wc {
        padding-bottom: 24px;
      }
      .SbjQym.AwRwmV,
      .SbjQym.DKNKji,
      .SbjQym.Ij__Zw,
      .SbjQym.MLEYRZ,
      .SbjQym.jc3Fi0,
      .SbjQym.kAgxB9,
      .SbjQym.otAa9D,
      .SbjQym.rA58nq {
        padding-bottom: 12px;
      }
      .SbjQym.otAa9D.Fsmreb,
      .SbjQym.wjdRtO:not(.kAgxB9) {
        padding-bottom: 0;
      }
      .SbjQym.wjdRtO:not(.kAgxB9).TjmPXo {
        margin-bottom: var(--blog-pl-header-margin-bottom);
      }
      .SbjQym.wjdRtO:not(.kAgxB9).TjmPXo.vL7wf0 {
        margin-bottom: 0;
      }
      .SbjQym.wjdRtO:not(.kAgxB9).TjmPXo.YVAddP {
        margin-bottom: auto;
      }
      .SbjQym.Mo4mKl {
        font-size: inherit;
        padding: 0;
      }
      @media (min-width: 980px) {
        .use-media-queries .SbjQym.Mo4mKl {
          padding: 11px 11px 24px;
        }
      }
      .gt-sm .SbjQym.Mo4mKl {
        padding: 11px 11px 24px;
      }
      .V_aJB6 {
        align-items: center;
        display: flex;
        flex: 1 1 auto;
        font-size: 14px;
        margin-inline-end: auto;
        max-inline-size: calc(100% - 42px);
        min-block-size: var(--blog-pl-header-height);
      }
      .V_aJB6.CH7asw {
        max-inline-size: calc(100% - 54px);
      }
      .Mo4mKl .V_aJB6 {
        font-size: inherit;
      }
      @media (min-width: 980px) {
        .use-media-queries .G1sD4r .V_aJB6,
        .use-media-queries .PVEWzt .V_aJB6,
        .use-media-queries .eOIH_4 .V_aJB6,
        .use-media-queries .otAa9D .V_aJB6 {
          font-size: 12px;
        }
      }
      .gt-sm .G1sD4r .V_aJB6,
      .gt-sm .PVEWzt .V_aJB6,
      .gt-sm .eOIH_4 .V_aJB6,
      .gt-sm .otAa9D .V_aJB6 {
        font-size: 12px;
      }
      .pWST8_ .V_aJB6,
      .rDlcKq .V_aJB6,
      .vL7wf0 .V_aJB6 {
        height: auto;
      }
      .YiEou4 {
        display: none;
      }
      @media (min-width: 980px) {
        .use-media-queries .YiEou4 {
          display: inline-block;
          margin-inline-start: auto;
        }
      }
      .gt-sm .YiEou4 {
        display: inline-block;
        margin-inline-start: auto;
      }
      .YfT_t7 {
        opacity: 0.6;
      }
      .Dgs_GX {
        align-items: center;
        display: flex;
        margin-inline-end: 3px;
      }
      .YiEou4 + .Dgs_GX {
        margin-inline-start: 12px;
      }
      .GygROR {
        margin: 0;
        margin-inline-end: -9px;
      }
      .GygROR.pWST8_,
      .GygROR.rDlcKq {
        margin-inline-end: -18px;
      }
      @media (min-width: 980px) {
        .use-media-queries .Mo4mKl .GygROR {
          margin-inline-end: 0;
        }
      }
      .gt-sm .Mo4mKl .GygROR {
        margin-inline-end: 0;
      }
      .Q8iQIg,
      .dtYGur {
        opacity: 0.1;
        overflow-y: hidden;
        transform: scale3d(0.1, 0.1, 1);
      }
      .EhKyap,
      .VL02DE {
        opacity: 1;
        transform: scaleX(1);
        transition: all 0.4s ease-in;
      }
      .Z0hXe1 {
        display: flex;
      }
      .j1Y_aa {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      @supports not (-webkit-line-clamp: 1) {
        .j1Y_aa {
          display: block;
          white-space: nowrap;
        }
      }
      .wR7PET {
        flex-grow: 1;
        height: 100%;
        line-height: 1.5;
        overflow: hidden;
        word-break: break-word;
      }
      .DxQ8C1 {
        -webkit-line-clamp: 3;
        line-clamp: 3;
        height: 100%;
        text-overflow: ellipsis;
      }
      .BOlnTh,
      .DxQ8C1 {
        -webkit-box-orient: vertical;
        display: -webkit-box;
      }
      .BOlnTh {
        overflow: hidden;
      }
      .JMAXlV {
        --full: rgb(var(--full-icon-color, $black-rgb));
        --empty: rgb(var(--empty-icon-color, $gray-rgb));
        display: block;
        position: relative;
      }
      .fbd51l {
        clip: rect(0, 0, 0, 0);
        border: 0;
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        white-space: nowrap;
        width: 1px;
      }
      .hhO2ky {
        display: flex;
      }
      .JMAXlV .hhO2ky {
        gap: 0 6px;
      }
      .siwre6 {
        color: var(--full);
      }
      .MKPjdi {
        color: var(--empty);
      }
      .TbC84K {
        display: flex;
        position: relative;
      }
      .j6jO4F .MrH3GO {
        display: block;
      }
      .j6jO4F {
        clip-path: inset(0 50% 0 0);
      }
      .MrH3GO,
      [dir="rtl"] .j6jO4F {
        clip-path: inset(0 0 0 50%);
      }
      .MrH3GO {
        position: absolute;
      }
      [dir="rtl"] .MrH3GO {
        clip-path: inset(0 50% 0 0);
      }
      .TYUuco {
        transition: color 0.3s ease-in;
      }
      .A6pgue {
        align-items: center;
        display: flex;
      }
      .KJeQ3_ {
        line-height: 1;
        margin-inline-start: 12px;
      }
      .T5ArNO .KJeQ3_ {
        animation: M5aq50 0.3s ease-in;
      }
      .TW0XHJ .KJeQ3_,
      .z8kPtl .KJeQ3_ {
        margin-inline-start: 7px;
      }
      @keyframes M5aq50 {
        0% {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .T5UMT5 {
        font-size: 22px;
        font-weight: inherit;
        line-height: 30px;
        margin-top: 18px;
        overflow-wrap: break-word;
        word-break: break-word;
      }
      .T5UMT5.AreR2k,
      .T5UMT5.I9XQQf,
      .T5UMT5.LMmmGm,
      .T5UMT5.Qr0HYQ,
      .T5UMT5.WD_8WI,
      .T5UMT5.mjh3Ex,
      .T5UMT5.tMAW2P,
      .T5UMT5.xwfLlB,
      .T5UMT5.zKj_nc {
        margin-top: 0;
      }
      @media (min-width: 660px) {
        .use-media-queries .T5UMT5.tMAW2P {
          line-height: 24px !important;
        }
      }
      .gt-xs .T5UMT5.tMAW2P {
        line-height: 24px !important;
      }
      .T5UMT5.PW6Nzn,
      .T5UMT5.v0TP18 {
        margin-top: 0;
      }
      @media (max-width: 659px) {
        .use-media-queries .T5UMT5.PW6Nzn,
        .use-media-queries .T5UMT5.v0TP18 {
          line-height: 1.4 !important;
        }
      }
      .lt-s .T5UMT5.PW6Nzn,
      .lt-s .T5UMT5.v0TP18 {
        line-height: 1.4 !important;
      }
      .T5UMT5.ML3wIh._wPn3X,
      .T5UMT5.SmUSYw._wPn3X,
      .T5UMT5.nOu63e._wPn3X,
      .T5UMT5.xAtwHK._wPn3X {
        margin-top: 12px;
      }
      @media (min-width: 660px) {
        .use-media-queries .T5UMT5.ML3wIh._wPn3X,
        .use-media-queries .T5UMT5.SmUSYw._wPn3X,
        .use-media-queries .T5UMT5.nOu63e._wPn3X,
        .use-media-queries .T5UMT5.xAtwHK._wPn3X {
          margin-top: 0;
        }
      }
      .gt-xs .T5UMT5.ML3wIh._wPn3X,
      .gt-xs .T5UMT5.SmUSYw._wPn3X,
      .gt-xs .T5UMT5.nOu63e._wPn3X,
      .gt-xs .T5UMT5.xAtwHK._wPn3X {
        margin-top: 0;
      }
      .T5UMT5 .fcPJ4D:not(.iFTNPs):active {
        cursor: pointer;
        opacity: 0.5;
      }
      @media (min-width: 660px) {
        .use-media-queries .T5UMT5 {
          font-size: inherit;
          line-height: inherit;
          margin-top: 1px;
        }
        .use-media-queries .T5UMT5.AreR2k,
        .use-media-queries .T5UMT5.I9XQQf,
        .use-media-queries .T5UMT5.LMmmGm,
        .use-media-queries .T5UMT5.Qr0HYQ,
        .use-media-queries .T5UMT5.xwfLlB {
          line-height: 1.4;
        }
      }
      .gt-xs .T5UMT5 {
        font-size: inherit;
        line-height: inherit;
        margin-top: 1px;
      }
      .gt-xs .T5UMT5.AreR2k,
      .gt-xs .T5UMT5.I9XQQf,
      .gt-xs .T5UMT5.LMmmGm,
      .gt-xs .T5UMT5.Qr0HYQ,
      .gt-xs .T5UMT5.xwfLlB {
        line-height: 1.4;
      }
      .T5UMT5.SSbNRm,
      .T5UMT5.zEYAqe {
        line-height: 1.4 !important;
      }
      .KNiaIk {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
      }
      .bD0vt9 {
        font: inherit;
      }
      .uYL9xS {
        display: flex;
        flex: 1;
        flex-direction: column-reverse;
        height: 0;
      }
      .Bzea4H {
        height: 100%;
        inset: 0;
        position: absolute;
        z-index: -1;
      }
      div.pro-gallery
        .gallery-item-container.main-color-on-hover:not(.hide-hover)
        .gallery-item-content
        .gallery-item {
        transition: opacity 0.4s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.main-color-on-hover:not(
          .hide-hover
        ).simulate-hover
        .gallery-item-content
        .gallery-item,
      div.pro-gallery
        .gallery-item-container.main-color-on-hover:not(.hide-hover):hover
        .gallery-item-content
        .gallery-item {
        opacity: 0;
      }
      div.pro-gallery
        .gallery-item-container.zoom-in-on-hover:not(.hide-hover)
        .gallery-item-content,
      div.pro-gallery
        .gallery-item-container.zoom-in-on-hover:not(.hide-hover)
        .gallery-item-hover:not(.hide-hover),
      div.pro-gallery
        .gallery-item-container.zoom-in-on-hover:not(.hide-hover)
        .hover-info-element {
        transition: transform 2.2s cubic-bezier(0.14, 0.4, 0.09, 0.99) !important;
      }
      div.pro-gallery
        .gallery-item-container.zoom-in-on-hover:not(.hide-hover).simulate-hover
        .gallery-item-content,
      div.pro-gallery
        .gallery-item-container.zoom-in-on-hover:not(.hide-hover):hover
        .gallery-item-content {
        transform: scale(1.1);
      }
      div.pro-gallery
        .gallery-item-container.zoom-in-on-hover:not(.hide-hover).simulate-hover
        .gallery-item-hover:not(.hide-hover),
      div.pro-gallery
        .gallery-item-container.zoom-in-on-hover:not(.hide-hover):hover
        .gallery-item-hover:not(.hide-hover) {
        transform: scale(1.11);
      }
      div.pro-gallery
        .gallery-item-container.zoom-in-on-hover:not(.hide-hover).simulate-hover
        .gallery-item-hover:not(.hide-hover)
        .hover-info-element,
      div.pro-gallery
        .gallery-item-container.zoom-in-on-hover:not(.hide-hover):hover
        .gallery-item-hover:not(.hide-hover)
        .hover-info-element {
        transform: scale(0.9009009009);
      }
      div.pro-gallery
        .gallery-item-container.tilt-on-hover:not(.hide-hover)
        .gallery-item-content,
      div.pro-gallery
        .gallery-item-container.tilt-on-hover:not(.hide-hover)
        .gallery-item-hover:not(.hide-hover),
      div.pro-gallery
        .gallery-item-container.tilt-on-hover:not(.hide-hover)
        .hover-info-element {
        transition: transform 1.2s cubic-bezier(0.14, 0.4, 0.09, 0.99) !important;
      }
      div.pro-gallery
        .gallery-item-container.tilt-on-hover:not(.hide-hover).simulate-hover
        .gallery-item-content,
      div.pro-gallery
        .gallery-item-container.tilt-on-hover:not(.hide-hover):hover
        .gallery-item-content {
        transform: scale(0.845) rotate(calc(var(--tiltAngleValue) * 1deg));
      }
      div.pro-gallery
        .gallery-item-container.blur-on-hover:not(.hide-hover)
        .gallery-item-content {
        transition: filter 0.4s linear !important;
      }
      div.pro-gallery
        .gallery-item-container.blur-on-hover:not(.hide-hover).simulate-hover
        .gallery-item-content
        .gallery-item,
      div.pro-gallery
        .gallery-item-container.blur-on-hover:not(.hide-hover):hover
        .gallery-item-content
        .gallery-item {
        filter: blur(6px);
      }
      div.pro-gallery
        .gallery-item-container.grayscale-on-hover:not(.hide-hover)
        .gallery-item-content {
        transition: filter 0.6s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.grayscale-on-hover:not(
          .hide-hover
        ).simulate-hover
        .gallery-item-content,
      div.pro-gallery
        .gallery-item-container.grayscale-on-hover:not(.hide-hover):hover
        .gallery-item-content {
        filter: grayscale(1);
      }
      div.pro-gallery .gallery-item-container.shrink-on-hover:not(.hide-hover) {
        transition: background-color 0.4s ease !important;
        transition: transform 0.4s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.shrink-on-hover:not(.hide-hover).simulate-hover,
      div.pro-gallery
        .gallery-item-container.shrink-on-hover:not(.hide-hover):hover {
        transform: scale(0.985);
      }
      div.pro-gallery
        .gallery-item-container.shrink-on-hover:not(.hide-hover).simulate-hover
        div,
      div.pro-gallery
        .gallery-item-container.shrink-on-hover:not(.hide-hover):hover
        div {
        transform: none !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-on-hover:not(.hide-hover)
        .gallery-item-content {
        transition: filter 0.6s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-on-hover:not(.hide-hover).simulate-hover
        .gallery-item-content,
      div.pro-gallery
        .gallery-item-container.invert-on-hover:not(.hide-hover):hover
        .gallery-item-content {
        filter: invert(1);
      }
      div.pro-gallery
        .gallery-item-container.color-in-on-hover
        .gallery-item-content {
        filter: grayscale(1);
        transition: filter 0.6s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.color-in-on-hover.simulate-hover:not(
          .hide-hover
        )
        .gallery-item-content,
      div.pro-gallery
        .gallery-item-container.color-in-on-hover:hover:not(.hide-hover)
        .gallery-item-content {
        filter: grayscale(0);
      }
      div.pro-gallery
        .gallery-item-container.darkened-on-hover
        .gallery-item-content {
        filter: brightness(1);
        transition: filter 0.6s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.darkened-on-hover.simulate-hover:not(
          .hide-hover
        )
        .gallery-item-content,
      div.pro-gallery
        .gallery-item-container.darkened-on-hover:hover:not(.hide-hover)
        .gallery-item-content {
        filter: brightness(0.7);
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover)
        .gallery-item-hover {
        transition: none;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover)
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover)
        .gallery-item-hover:before {
        opacity: 0;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover)
        .gallery-item-hover.force-hover,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover):hover
        .gallery-item-hover:not(.hide-hover) {
        transition: none;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover)
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover):hover
        .gallery-item-hover:not(.hide-hover):before {
        background: rgba(8, 8, 8, 0.75);
        opacity: 1;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover)
        .gallery-item-hover.force-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover)
        .gallery-item-hover.force-hover
        .info-member:not(.hidden),
      div.pro-gallery
        .gallery-item-container:not(.invert-hover):hover
        .gallery-item-hover:not(.hide-hover)
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover):hover
        .gallery-item-hover:not(.hide-hover)
        .info-member:not(.hidden) {
        opacity: 1 !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-fade-in
        .gallery-item-hover {
        transition: filter 0.4s ease, opacity 0.4s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-fade-in
        .gallery-item-hover:before {
        filter: opacity(0);
        transition: filter 0.4s ease, opacity 0.4s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-fade-in
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-fade-in
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-fade-in
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-fade-in:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-expand
        .gallery-item-hover {
        transition: transform 0.4s ease, filter 0.2s ease, opacity 0.2s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-expand
        .gallery-item-hover:before {
        filter: opacity(0);
        transform: scale(0.9);
        transition: transform 0.4s ease, filter 0.2s ease, opacity 0.2s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-expand
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-expand
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.2s ease;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-expand
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-expand:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
        transform: scale(1);
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-up
        .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-up
        .gallery-item-hover:before {
        filter: opacity(0);
        transform: translateY(100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-up
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-up
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-up
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container:not(
          .invert-hover
        ).hover-animation-slide-up:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
        transform: translateY(0);
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-right
        .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-right
        .gallery-item-hover:before {
        filter: opacity(0);
        transform: translateX(-100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-right
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-right
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-right
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container:not(
          .invert-hover
        ).hover-animation-slide-right:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
        transform: translateX(0);
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-left
        .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-left
        .gallery-item-hover:before {
        filter: opacity(0);
        transform: translateX(100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-left
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-left
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-left
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container:not(
          .invert-hover
        ).hover-animation-slide-left:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
        transform: translateX(0);
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-down
        .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-down
        .gallery-item-hover:before {
        filter: opacity(0);
        transform: translateY(-100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-down
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-down
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
      }
      div.pro-gallery
        .gallery-item-container:not(.invert-hover).hover-animation-slide-down
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container:not(
          .invert-hover
        ).hover-animation-slide-down:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(1);
        transform: translateY(0);
      }
      div.pro-gallery .gallery-item-container.invert-hover .gallery-item-hover {
        transition: none;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover
        .gallery-item-hover:before {
        background: rgba(8, 8, 8, 0.75);
        opacity: 1;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover
        .gallery-item-hover
        .gallery-item-hover-inner {
        opacity: 1;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container.invert-hover
        .gallery-item-hover
        .info-member:not(.hidden) {
        opacity: 1 !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover
        .gallery-item-hover.force-hover,
      div.pro-gallery
        .gallery-item-container.invert-hover:hover
        .gallery-item-hover:not(.hide-hover) {
        transition: none;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container.invert-hover:hover
        .gallery-item-hover:not(.hide-hover):before {
        opacity: 0;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover
        .gallery-item-hover.force-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container.invert-hover
        .gallery-item-hover.force-hover
        .info-member:not(.hidden),
      div.pro-gallery
        .gallery-item-container.invert-hover:hover
        .gallery-item-hover:not(.hide-hover)
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container.invert-hover:hover
        .gallery-item-hover:not(.hide-hover)
        .info-member:not(.hidden) {
        opacity: 0 !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-fade-in
        .gallery-item-hover {
        transition: filter 0.4s ease, opacity 0.4s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-fade-in
        .gallery-item-hover:before {
        filter: opacity(1);
        transition: filter 0.4s ease, opacity 0.4s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-fade-in
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-fade-in
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-fade-in
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-fade-in:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-expand
        .gallery-item-hover {
        transition: transform 0.4s ease, filter 0.2s ease, opacity 0.2s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-expand
        .gallery-item-hover:before {
        filter: opacity(1);
        transform: scale(1);
        transition: transform 0.4s ease, filter 0.2s ease, opacity 0.2s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-expand
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-expand
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.2s ease;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-expand
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-expand:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
        transform: scale(0.9);
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-up
        .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-up
        .gallery-item-hover:before {
        filter: opacity(1);
        transform: translateY(0);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-up
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-up
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-up
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-up:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
        transform: translateY(100%);
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-right
        .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-right
        .gallery-item-hover:before {
        filter: opacity(1);
        transform: translateX(0);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-right
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-right
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-right
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-right:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
        transform: translateX(-100%);
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-left
        .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-left
        .gallery-item-hover:before {
        filter: opacity(1);
        transform: translateX(100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-left
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-left
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-left
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-left:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
        transform: translateX(0);
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-down
        .gallery-item-hover {
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-down
        .gallery-item-hover:before {
        filter: opacity(1);
        transform: translateY(-100%);
        transition: transform 0.4s cubic-bezier(0.3, 0.13, 0.12, 1),
          filter 0.5s ease, opacity 0.5s ease !important;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-down
        .gallery-item-hover
        .gallery-item-hover-inner,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-down
        .gallery-item-hover
        .info-member:not(.hidden) {
        transition: opacity 0.4s ease;
      }
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-down
        .gallery-item-hover.force-hover:before,
      div.pro-gallery
        .gallery-item-container.invert-hover.hover-animation-slide-down:hover
        .gallery-item-hover:not(.hide-hover):before {
        filter: opacity(0);
        transform: translateY(0);
      }
      .animation-slide {
        transition: width 0.4s ease, height 0.4s ease, top 0.4s ease,
          left 0.4s ease;
      }
      .item-with-secondary-media-container .secondary-media-item.hide {
        opacity: 0;
      }
      .item-with-secondary-media-container .secondary-media-item.show {
        opacity: 1;
      }
      [data-collapsed="true"] .pro-gallery-parent-container .gallery-item,
      [data-hidden="true"] .pro-gallery-parent-container .gallery-item {
        background-image: none !important;
      }
      html.pro-gallery {
        height: auto;
        width: 100%;
      }
      body.pro-gallery {
        transition: opacity 2s ease;
      }
      #gallery-loader {
        position: fixed;
        top: 50%;
      }
      .show-more-container {
        line-height: 138px;
        text-align: center;
      }
      .show-more-container i.show-more {
        color: #5d5d61;
        cursor: pointer;
        font-size: 40px;
        margin-top: -3px;
      }
      .show-more-container button.show-more {
        background: transparent;
        border: 2px solid #5d5d61;
        border-radius: 0;
        color: #5d5d61;
        cursor: pointer;
        display: inline-block;
        font-family: HelveticaNeueW01-45Ligh, HelveticaNeueW02-45Ligh,
          HelveticaNeueW10-45Ligh, sans-serif;
        font-size: 12px;
        padding: 11px 29px;
      }
      .show-more-container button.show-more:hover {
        background: rgba(0, 0, 0, 0.1);
      }
      .more-items-loader {
        color: #116dff;
        display: block;
        font-size: 30px;
        line-height: 50px;
        text-align: center;
        width: 100%;
      }
      .version-header {
        background: hsla(0, 0%, 100%, 0.8);
        color: #e03939;
        font-family: Consolas, monospace;
        font-size: 13px;
        height: 100px;
        left: 0;
        line-height: 30px;
        position: absolute;
        text-align: left;
        top: 0;
        width: 320px;
        z-index: 100;
      }
      .auto-slideshow-button {
        cursor: pointer;
        height: 28px;
        margin-top: 19px;
        padding: 5px;
        width: 20px;
      }
      .auto-slideshow-button,
      .auto-slideshow-counter {
        display: flex;
        left: auto;
        opacity: 0.9;
        position: absolute;
        text-align: center;
        z-index: 1;
      }
      .auto-slideshow-counter {
        font-size: 15px;
        line-height: normal;
        margin-top: 24px;
      }
      @keyframes wNW36F {
        0% {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .mouse-cursor {
        display: flex;
        position: absolute;
        width: 100%;
      }
      .follow-mouse-cursor {
        position: absolute;
        transition: all 0.2s ease;
      }
      .follow-mouse-cursor > div {
        pointer-events: none;
      }
      .follow-mouse-cursor > div,
      .nav-arrows-container {
        align-items: center;
        display: flex;
        justify-content: center;
      }
      .nav-arrows-container {
        background: transparent;
        border: none;
        cursor: pointer;
        left: auto;
        opacity: 0.9;
        position: absolute;
        text-align: center;
      }
      .nav-arrows-container:hover {
        opacity: 1;
      }
      .nav-arrows-container.shadow svg {
        filter: drop-shadow(0 1px 0.15px #b2b2b2);
      }
      .nav-arrows-container .slideshow-arrow {
        flex-shrink: 0;
      }
      .nav-arrows-container:focus {
        box-shadow: inset 0 0 0 1px #fff, inset 0 0 1px 4px #116dff !important;
      }
      .arrow-portal-container span {
        align-items: center;
        animation: fadeIn 0.1s ease-in-out;
        display: flex;
        justify-content: center;
        position: fixed;
        transition: top 50ms, left 50ms;
      }
      div.gallery-slideshow .gallery-column,
      div.gallery-slideshow div.pro-gallery {
        box-sizing: content-box !important;
      }
      div.gallery-slideshow .gallery-group,
      div.gallery-slideshow .gallery-item-container,
      div.gallery-slideshow .gallery-item-wrapper {
        overflow: visible !important;
      }
      div.gallery-slideshow.streched .gallery-slideshow-info {
        padding-left: 50px !important;
        padding-right: 50px !important;
      }
      @media (max-width: 500px) {
        div.gallery-slideshow div.pro-gallery .gallery-slideshow-info {
          padding-left: 20px;
          padding-right: 20px;
        }
      }
      div.gallery-slideshow
        div.pro-gallery
        .gallery-item-container
        .gallery-slideshow-info {
        bottom: -220px;
        box-sizing: border-box;
        display: flex;
        height: 220px;
        padding-top: 0;
        position: absolute;
        width: 100%;
        z-index: 15;
      }
      .gallery-thumbnails
        div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item-hover {
        padding: 30px 60px;
      }
      .gallery-slider
        div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item-hover {
        padding: 30px 10px 50px;
      }
      .gallery-columns
        div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item-hover {
        padding: 30px;
      }
      div.pro-gallery {
        height: 100%;
        width: 100%;
      }
      div.pro-gallery,
      div.pro-gallery .gallery-column {
        backface-visibility: hidden;
        overflow: hidden;
        position: relative;
      }
      div.pro-gallery .gallery-column {
        float: left;
        transform-style: preserve-3d;
      }
      div.pro-gallery .gallery-column .gallery-left-padding {
        display: inline-block;
        height: 100%;
      }
      div.pro-gallery .gallery-column .gallery-top-padding {
        display: block;
        width: 100%;
      }
      div.pro-gallery .gallery-group {
        backface-visibility: hidden;
        box-sizing: border-box;
        float: left;
        font-family: HelveticaNeueW01-45Ligh, HelveticaNeueW02-45Ligh,
          HelveticaNeueW10-45Ligh, sans-serif;
        font-size: 11px;
        overflow: hidden;
        padding: 0;
        position: relative;
        transform-style: preserve-3d;
      }
      div.pro-gallery .gallery-group.debug.gallery-group-gone {
        background: #cdcdd0;
      }
      div.pro-gallery .gallery-group.debug.gallery-group-visible {
        background: #c1f0c1;
      }
      div.pro-gallery .gallery-group.debug.gallery-group-hidden {
        background: #f99;
      }
      div.pro-gallery .gallery-item-container {
        backface-visibility: hidden;
        border: none;
        border-radius: 0;
        box-sizing: border-box;
        color: inherit;
        cursor: default;
        display: inline-block;
        font-family: HelveticaNeueW01-45Ligh, HelveticaNeueW02-45Ligh,
          HelveticaNeueW10-45Ligh, sans-serif;
        font-size: 11px;
        outline: none;
        overflow: hidden;
        padding: 0;
        position: absolute;
        scroll-snap-align: center;
        text-decoration: none;
        transform-style: preserve-3d;
        vertical-align: top;
        will-change: top, left, width, height;
      }
      div.pro-gallery .gallery-item-container .item-action {
        height: 1px;
        overflow: hidden;
        pointer-events: none;
        position: absolute;
        width: 1px;
        z-index: -1;
      }
      div.pro-gallery .gallery-item-container .item-action:focus {
        --focus-ring-box-shadow: none !important;
        box-shadow: none !important;
        outline: none !important;
      }
      div.pro-gallery .gallery-item-container:hover .gallery-item-common-info {
        cursor: pointer;
      }
      div.pro-gallery
        .gallery-item-container:hover
        .gallery-item-common-info
        button {
        cursor: pointer;
        text-decoration: underline;
      }
      div.pro-gallery .gallery-item-container.visible {
        transform: translateZ(0);
      }
      div.pro-gallery .gallery-item-container.clickable {
        cursor: pointer;
      }
      div.pro-gallery .gallery-item-container .gallery-item-wrapper {
        height: 100%;
        overflow: hidden;
        position: relative;
        width: 100%;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .item-with-secondary-media-container
        .secondary-media-item {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 1;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .item-with-secondary-media-container
        .secondary-media-item
        .gallery-item {
        -o-object-fit: cover;
        object-fit: cover;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .item-with-secondary-media-container
        .secondary-media-item
        .text-item
        > div {
        height: 100% !important;
        width: 100% !important;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper.cube-type-fit,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper.transparent {
        background: transparent;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item-preload {
        display: none;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper.cube-type-fit
        .gallery-item {
        background: transparent;
        -o-object-fit: contain;
        object-fit: contain;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item {
        border-radius: 0;
        height: 100%;
        left: 0;
        margin: 0;
        -o-object-fit: cover;
        object-fit: cover;
        overflow: hidden;
        position: absolute;
        top: 0;
        width: 100%;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box; /*! autoprefixer: ignore next */
        white-space: normal;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        .te-pro-gallery-text-item {
        letter-spacing: normal !important;
        line-height: normal !important;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        > div {
        background: initial !important;
        box-sizing: border-box;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        div,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        h1,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        h2,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        h3,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        h4,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        h5,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        h6,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        i,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        p,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.text-item
        span {
        margin: 0;
        padding: 0;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item
        .pro-circle-preloader {
        height: 30px;
        left: 50%;
        opacity: 0.4;
        top: 50%;
        width: 15px;
        z-index: -1;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item
        img.gallery--placeholder-item {
        height: 100% !important;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
        width: 100% !important;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-loaded {
        animation: none !important;
        background-color: transparent;
        opacity: 1 !important;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-loaded.image-item:after {
        display: none !important;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-loaded
        ~ .pro-circle-preloader {
        display: none;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.error {
        opacity: 0 !important;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-preloaded {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-preloaded.grid-fit {
        background-size: contain;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder.three-d-loaded
        img {
        opacity: 0;
        pointer-events: none;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder.three-d-loading
        img {
        opacity: 1;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        img {
        transition: opacity 0.2s ease;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video {
        overflow: hidden;
        text-align: center;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        iframe {
        left: 0;
        top: 0;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video.playedOnce
        ~ .image-item {
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s ease;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder.playing
        button,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder.playing
        i,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video.playing
        button,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video.playing
        i,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem.playing
        button,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem.playing
        i {
        display: none;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        button,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        i,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        button,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        i,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        button,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        i {
        -webkit-font-smoothing: antialiased;
        background: #080808;
        border-radius: 50px;
        color: #fff;
        display: inline-block;
        height: 60px;
        left: 50%;
        margin: -30px 0 0 -30px;
        opacity: 0.7;
        position: absolute;
        text-align: center;
        text-rendering: auto; /*! autoprefixer: ignore next */
        top: 50%;
        z-index: 11;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        button.play-triangle,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        i.play-triangle,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        button.play-triangle,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        i.play-triangle,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        button.play-triangle,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        i.play-triangle {
        opacity: 1;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        button.play-background,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        button.play-triangle,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        i.play-background,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        i.play-triangle,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        button.play-background,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        button.play-triangle,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        i.play-background,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        i.play-triangle,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        button.play-background,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        button.play-triangle,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        i.play-background,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        i.play-triangle {
        font-size: 26px;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        button:hover,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        i:hover,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        button:hover,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        i:hover,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        button:hover,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        i:hover {
        opacity: 0.9;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        button:before,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-3d-placeholder
        i:before,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        button:before,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.gallery-item-video
        i:before,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        button:before,
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item.thumbnailItem
        i:before {
        font-size: 2.3em;
        opacity: 1;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item-info {
        bottom: -220px;
        box-sizing: border-box;
        display: flex;
        height: 220px;
        position: absolute;
        width: 100%;
        z-index: 15;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item-info
        > div {
        height: 100%;
        width: 100%;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item-hover {
        border-radius: 0;
        box-sizing: border-box;
        height: 100%;
        left: 0;
        margin: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        white-space: normal;
        width: 100%;
        z-index: 15;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item-hover
        .gallery-item-hover-inner {
        height: 100%;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item-hover.no-hover-bg:before {
        opacity: 0 !important;
      }
      div.pro-gallery
        .gallery-item-container
        .gallery-item-wrapper
        .gallery-item-hover:before {
        box-sizing: border-box;
        content: " ";
        height: 100%;
        left: 0;
        margin: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: -1;
      }
      div.pro-gallery .gallery-item-container .gallery-item-common-info {
        box-sizing: border-box;
        cursor: pointer;
      }
      div.pro-gallery .thumbnailItem.playing button,
      div.pro-gallery .thumbnailItem.playing i {
        display: none;
      }
      div.pro-gallery .thumbnailItem button,
      div.pro-gallery .thumbnailItem i {
        -webkit-font-smoothing: antialiased;
        background: #080808;
        border-radius: 100%;
        color: #fff;
        display: inline-block;
        height: 28px;
        left: 50%;
        margin: -16px -1px 0 -16px;
        opacity: 0.7;
        position: absolute;
        text-align: center;
        text-rendering: auto; /*! autoprefixer: ignore next */
        top: 50%;
        width: 28px;
        z-index: 11;
      }
      div.pro-gallery .thumbnailItem button.play-triangle,
      div.pro-gallery .thumbnailItem i.play-triangle {
        opacity: 1;
      }
      div.pro-gallery .thumbnailItem button:before,
      div.pro-gallery .thumbnailItem i:before {
        font-size: 2.3em;
        opacity: 1;
      }
      div.pro-gallery.one-row {
        float: left;
        white-space: nowrap;
      }
      div.pro-gallery.one-row .gallery-column {
        float: none;
        white-space: nowrap;
        width: 100%;
      }
      div.pro-gallery.one-row .gallery-column .gallery-group {
        display: inline-block;
        float: none;
      }
      div.pro-gallery.one-row.slider .gallery-column {
        overflow-x: scroll;
      }
      div.pro-gallery.one-row.slider .gallery-column.scroll-snap {
        -ms-scroll-snap-type: x mandatory;
        scroll-snap-type: x mandatory;
      }
      div.pro-gallery.one-row .gallery-horizontal-scroll-inner {
        position: relative;
        will-change: transform;
      }
      div.pro-gallery.thumbnails-gallery {
        float: left;
        overflow: hidden;
      }
      div.pro-gallery.thumbnails-gallery .galleryColumn {
        overflow: visible;
        position: relative;
      }
      div.pro-gallery.thumbnails-gallery .thumbnailItem {
        background-color: #fff;
        background-position: 50%;
        background-size: cover;
        border-radius: 0;
        cursor: pointer;
        overflow-y: inherit;
        position: absolute;
      }
      div.pro-gallery.thumbnails-gallery
        .thumbnailItem.pro-gallery-highlight:after {
        background-color: hsla(0, 0%, 100%, 0.6);
        content: "";
        display: block;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
      }
      @media (max-width: 500px) {
        div.pro-gallery.thumbnails-gallery {
          overflow: visible;
        }
      }
      div.pro-gallery :focus {
        box-shadow: none;
      }
      div.pro-gallery.accessible
        button:not(.nav-arrows-container, .has-custom-focus):focus,
      div.pro-gallery.accessible i:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 1px 2px #116dff;
      }
      div.pro-gallery.accessible .has-custom-focus:focus {
        box-shadow: inset 0 0 0 1px #fff, inset 0 0 1px 4px #116dff;
      }
      div.pro-gallery.accessible .gallery-item-hover button:focus,
      div.pro-gallery.accessible .gallery-item-hover i:focus {
        box-shadow: none;
      }
      div.pro-gallery.accessible .thumbnailItem.pro-gallery-highlight:after {
        box-shadow: inset 0 0 1px 2px #116dff, inset 0 0 7px 0 #fff,
          0 0 10px -5px #116dff;
      }
      div.pro-gallery.accessible
        .gallery-item-container:has(.item-action:focus):after {
        border-radius: inherit;
        box-shadow: inset 0 0 1px 2px #116dff, inset 0 0 7px 0 #fff,
          inset 0 0 10px -5px #116dff;
        content: " ";
        height: 100%;
        left: 0;
        pointer-events: none;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 15;
      }
      div.pro-gallery.accessible .pro-gallery-thumbnails-highlighted:before {
        box-shadow: inset 0 0 1px 2px #116dff, inset 0 0 7px 0 #fff,
          inset 0 0 10px -5px #116dff;
      }
      div.pro-gallery.accessible .pro-gallery-thumbnails-highlighted:after {
        border-radius: inherit;
        box-shadow: inset 0 0 1px 2px #116dff, inset 0 0 7px 0 #fff,
          0 0 10px -5px #116dff;
        content: " ";
        height: 100%;
        left: 0;
        pointer-events: none;
        position: absolute;
        top: 0;
        width: 100%;
      }
      div.pro-gallery .hide-scrollbars {
        -ms-overflow-style: none;
        overflow: -moz-scrollbars-none;
        scrollbar-width: none;
      }
      div.pro-gallery .hide-scrollbars ::-webkit-scrollbar,
      div.pro-gallery .hide-scrollbars::-webkit-scrollbar {
        height: 0 !important;
        width: 0 !important;
      }
      div.pro-gallery .rtl {
        direction: rtl;
      }
      div.pro-gallery .ltr {
        direction: ltr;
      }
      .sr-only.out-of-view-component {
        border: 0;
        clip-path: circle(0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }
      .screen-logs {
        word-wrap: break-word;
        background: #fff;
        font-size: 10px;
        width: 280px;
      }
      .fade {
        display: block;
        transition: opacity 0.6s ease;
      }
      .fade-visible {
        opacity: 1;
      }
      .fade-hidden {
        opacity: 0;
      }
      .deck-before {
        transform: translateX(-100%);
      }
      .deck-before,
      .deck-before-rtl {
        display: block;
        transition: transform 0.6s ease;
        z-index: 1;
      }
      .deck-before-rtl {
        transform: translateX(100%);
      }
      .deck-current {
        display: block;
        transform: translateX(0);
        transition: transform 0.6s ease;
        z-index: 0;
      }
      .deck-current .override {
        transition: transform 0.6s ease, opacity 0.1s ease 0.2s !important;
      }
      .deck-after {
        display: block;
        opacity: 0;
        transition: opacity 0.2s ease 0.6s;
        z-index: -1;
      }
      .deck-after .override {
        transition: opacity 0.1s ease 0s !important;
      }
      .disabled-transition {
        transition: none !important;
      }
      @keyframes JqqXMV {
        0% {
          background-color: hsla(0, 0%, 95%, 0.2);
        }
        50% {
          background-color: hsla(0, 0%, 95%, 0.8);
        }
        to {
          background-color: hsla(0, 0%, 95%, 0.2);
        }
      }
      .pro-gallery-parent-container.gallery-slideshow
        [data-hook="group-view"]:before,
      .pro-gallery-parent-container:not(.gallery-slideshow)
        [data-hook="group-view"]
        .item-link-wrapper:before {
        content: "";
        height: 1px;
        left: var(--group-left);
        pointer-events: none;
        position: absolute;
        right: var(--group-right);
        scroll-snap-align: center;
        top: var(--group-top);
        width: var(--group-width);
      }
      .gallery-item-container {
        scroll-snap-align: none !important;
      }
      .gallery-slideshow .gallery-item-container:not(.clickable) a {
        cursor: default;
      }
      ._SIYmI .gallery-item-video-play-background.play-background {
        color: #000 !important;
        opacity: 0.3 !important;
      }
      ._SIYmI .play-triangle {
        color: #fff !important;
        z-index: 17 !important;
      }
      ._SIYmI.homepage {
        --border-color: rgb(
          var(--post-homepage-borderColor, var(--wix-color-2))
        );
        --border-width: calc(var(--post-homepage-borderWidth, 1) * 1px);
        --border-radius: calc(var(--post-homepage-postRadius, 0) * 1px);
      }
      ._SIYmI.homepage.is-mobile {
        --border-color: rgb(
          var(
            --post-homepage-mobile-borderColor,
            var(--post-homepage-borderColor, var(--wix-color-2))
          )
        );
        --border-width: calc(
          var(
              --post-homepage-mobile-borderWidth,
              var(--post-homepage-borderWidth, 1)
            ) * 1px
        );
        --border-radius: calc(
          var(
              --post-homepage-mobile-postRadius,
              var(--post-homepage-postRadius, 0)
            ) * 1px
        );
      }
      ._SIYmI.category {
        --border-color: rgb(
          var(--post-category-borderColor, var(--wix-color-2))
        );
        --border-width: calc(var(--post-category-borderWidth, 1) * 1px);
        --border-radius: calc(var(--post-category-postRadius, 0) * 1px);
      }
      ._SIYmI.category.is-mobile {
        --border-color: rgb(
          var(
            --post-category-mobile-borderColor,
            var(--post-category-borderColor, var(--wix-color-2))
          )
        );
        --border-width: calc(
          var(
              --post-category-mobile-borderWidth,
              var(--post-category-borderWidth, 1)
            ) * 1px
        );
        --border-radius: calc(
          var(
              --post-category-mobile-postRadius,
              var(--post-category-postRadius, 0)
            ) * 1px
        );
      }
      ._SIYmI.tags {
        --border-color: rgb(var(--post-tags-borderColor, var(--wix-color-2)));
        --border-width: calc(var(--post-tags-borderWidth, 1) * 1px);
        --border-radius: calc(var(--post-tags-postRadius, 0) * 1px);
      }
      ._SIYmI.tags.is-mobile {
        --border-color: rgb(
          var(
            --post-tags-mobile-borderColor,
            var(--post-tags-borderColor, var(--wix-color-2))
          )
        );
        --border-width: calc(
          var(--post-tags-mobile-borderWidth, var(--post-tags-borderWidth, 1)) *
            1px
        );
        --border-radius: calc(
          var(--post-tags-mobile-postRadius, var(--post-tags-postRadius, 0)) *
            1px
        );
      }
      ._SIYmI.post-list {
        --border-color: rgb(
          var(--post-post-list-borderColor, var(--wix-color-2))
        );
        --border-width: calc(var(--post-post-list-borderWidth, 1) * 1px);
        --border-radius: calc(var(--post-post-list-postRadius, 0) * 1px);
      }
      ._SIYmI.post-list.is-mobile {
        --border-color: rgb(
          var(
            --post-post-list-mobile-borderColor,
            var(--post-post-list-borderColor, var(--wix-color-2))
          )
        );
        --border-width: calc(
          var(
              --post-post-list-mobile-borderWidth,
              var(--post-post-list-borderWidth, 1)
            ) * 1px
        );
        --border-radius: calc(
          var(
              --post-post-list-mobile-postRadius,
              var(--post-post-list-postRadius, 0)
            ) * 1px
        );
      }
      ._SIYmI.related-posts {
        --border-color: rgb(
          var(--post-related-posts-borderColor, var(--wix-color-2))
        );
        --border-width: calc(var(--post-related-posts-borderWidth, 1) * 1px);
        --border-radius: calc(var(--post-related-posts-postRadius, 0) * 1px);
      }
      ._SIYmI.related-posts.is-mobile {
        --border-color: rgb(
          var(
            --post-related-posts-mobile-borderColor,
            var(--post-related-posts-borderColor, var(--wix-color-2))
          )
        );
        --border-width: calc(
          var(
              --post-related-posts-mobile-borderWidth,
              var(--post-related-posts-borderWidth, 1)
            ) * 1px
        );
        --border-radius: calc(
          var(
              --post-related-posts-mobile-postRadius,
              var(--post-related-posts-postRadius, 0)
            ) * 1px
        );
      }
      ._SIYmI.my-posts {
        --border-color: rgb(
          var(--post-my-posts-borderColor, var(--wix-color-2))
        );
        --border-width: calc(var(--post-my-posts-borderWidth, 1) * 1px);
        --border-radius: calc(var(--post-my-posts-postRadius, 0) * 1px);
      }
      ._SIYmI.my-posts.is-mobile {
        --border-color: rgb(
          var(
            --post-my-posts-mobile-borderColor,
            var(--post-my-posts-borderColor, var(--wix-color-2))
          )
        );
        --border-width: calc(
          var(
              --post-my-posts-mobile-borderWidth,
              var(--post-my-posts-borderWidth, 1)
            ) * 1px
        );
        --border-radius: calc(
          var(
              --post-my-posts-mobile-postRadius,
              var(--post-my-posts-postRadius, 0)
            ) * 1px
        );
      }
      ._SIYmI .gallery-item-hover:before {
        background: unset !important;
      }
      ._SIYmI .gallery-item-container {
        border-radius: var(--border-radius) !important;
        scroll-snap-align: center !important;
      }
      [dir="rtl"]
        ._SIYmI.post-list-pro-gallery-list.gallery-right-align
        .gallery-item-container,
      [dir="rtl"]
        ._SIYmI.post-list-pro-gallery-pg-side-by-side.gallery-right-align
        .gallery-item-container {
        display: flex !important;
        flex-direction: row !important;
      }
      [dir="rtl"] ._SIYmI.post-list-pro-gallery-list .gallery-item-container,
      [dir="rtl"]
        ._SIYmI.post-list-pro-gallery-pg-side-by-side
        .gallery-item-container {
        display: flex !important;
        flex-direction: row-reverse !important;
      }
      [dir="rtl"]
        ._SIYmI.post-list-pro-gallery-list
        .gallery-item-container
        .gallery-item-left-info,
      [dir="rtl"]
        ._SIYmI.post-list-pro-gallery-pg-side-by-side
        .gallery-item-container
        .gallery-item-left-info {
        left: auto;
        right: 0;
      }
      [dir="rtl"]
        ._SIYmI.post-list-pro-gallery-list
        .gallery-item-container
        .gallery-item-right-info,
      [dir="rtl"]
        ._SIYmI.post-list-pro-gallery-pg-side-by-side
        .gallery-item-container
        .gallery-item-right-info {
        left: 0;
        right: auto;
      }
      ._SIYmI.post-list-pro-gallery-list-large.gallery-right-align
        .gallery-item-wrapper,
      ._SIYmI.post-list-pro-gallery-list-medium.gallery-right-align
        .gallery-item-wrapper,
      ._SIYmI.post-list-pro-gallery-list.gallery-right-align
        .gallery-item-wrapper {
        right: 13px; /*!rtl:end:ignore*/
        top: 13px; /*!rtl:begin:ignore*/
      }
      ._SIYmI.post-list-pro-gallery-list-large.gallery-left-align
        .gallery-item-wrapper,
      ._SIYmI.post-list-pro-gallery-list-medium.gallery-left-align
        .gallery-item-wrapper,
      ._SIYmI.post-list-pro-gallery-list.gallery-left-align
        .gallery-item-wrapper {
        left: 13px; /*!rtl:end:ignore*/
        top: 13px; /*!rtl:begin:ignore*/
      }
      ._SIYmI.post-list-pro-gallery-list .gallery-item-container,
      ._SIYmI.post-list-pro-gallery-list-large .gallery-item-container,
      ._SIYmI.post-list-pro-gallery-list-medium .gallery-item-container {
        background-color: rgb(
          var(--post-post-list-backgroundColor, var(--wix-color-1))
        ) !important;
      }
      ._SIYmI.post-list-pro-gallery-list
        .gallery-item-container.pro-gallery-mobile-indicator,
      ._SIYmI.post-list-pro-gallery-list-large
        .gallery-item-container.pro-gallery-mobile-indicator,
      ._SIYmI.post-list-pro-gallery-list-medium
        .gallery-item-container.pro-gallery-mobile-indicator {
        background-color: rgb(
          var(--post-post-list-mobile-backgroundColor, var(--wix-color-1))
        ) !important;
      }
      ._SIYmI.post-list-pro-gallery-list .gallery-item-common-info,
      ._SIYmI.post-list-pro-gallery-list-large .gallery-item-common-info,
      ._SIYmI.post-list-pro-gallery-list-medium .gallery-item-common-info {
        overflow: visible !important;
      }
      ._SIYmI.post-list-pro-gallery-slider {
        border-color: var(--border-color);
        border-radius: var(--border-radius);
        border-style: solid;
        border-width: var(--border-width);
        overflow: hidden;
      }
      ._SIYmI.post-list-pro-gallery-slider .gallery-item-container {
        border-radius: revert !important;
      }
      ._SIYmI.post-list-pro-gallery-slider
        .gallery-slideshow
        .pro-gallery
        .gallery-slideshow-info {
        padding-inline-end: 0 !important;
        padding-inline-start: 0 !important;
      }
      ._SIYmI[class^="post-list-pro-gallery"] .gallery-item-wrapper {
        cursor: pointer;
      }
      ._SIYmI.post-list-pro-gallery-flat
        #pro-gallery-container
        .gallery-item-container {
        transform-style: flat;
        will-change: top, left, width, height;
      }
      ._SIYmI.post-list-pro-gallery-pg-grid.no-border .gallery-item-container {
        overflow: visible !important;
      }
      ._SIYmI [data-hook="item-action"] {
        display: none;
      }
      .IeY3vx,
      .KhVdjt,
      .acbUIp,
      .gwgQCb,
      .lfi41p,
      .sI4Nnn {
        line-height: 1;
      }
      .wR7lgz {
        display: flex;
      }
      .wR7lgz .sI4Nnn {
        cursor: inherit;
        opacity: 1;
      }
      .wR7lgz .RcfyI6,
      .wR7lgz .ixAZGX {
        cursor: pointer;
        font-size: 14px;
        margin-inline-end: 48px;
      }
      .wR7lgz .ixAZGX {
        opacity: 0.8;
      }
      .ynW8KF {
        align-items: center;
        display: flex;
        font-family: system-ui, sans-serif;
        font-size: 16px;
        height: 100%;
      }
      @media only screen and (max-width: 300px) {
        .ynW8KF {
          max-width: 100%;
          overflow: hidden;
        }
      }
      .KhVdjt,
      .RcfyI6,
      .fOICak {
        align-items: center;
        display: flex;
        justify-content: center;
      }
      .KhVdjt,
      .RcfyI6 {
        color: inherit;
        cursor: pointer;
        margin: 0 3px;
        min-height: 36px;
        min-width: 36px;
      }
      .IZ6Wrl .KhVdjt,
      .IZ6Wrl .RcfyI6 {
        margin: 0 6px;
      }
      @media only screen and (max-width: 300px) {
        .IZ6Wrl .KhVdjt,
        .IZ6Wrl .RcfyI6 {
          margin: 0;
        }
      }
      .BCQZoR,
      .sI4Nnn {
        cursor: default;
      }
      .BCQZoR {
        opacity: 0.4;
      }
      .fOICak {
        margin: 0 6px;
        min-width: 48px;
      }
      .aq_u4p {
        align-items: center;
        display: flex;
        justify-content: center;
        margin: 16px 0 30px;
      }
      .aq_u4p.HcArW_ {
        margin: 1px 0 0;
        min-height: 68px;
      }
      .arh2qf {
        align-items: center;
        display: flex;
        flex: 1;
        flex-direction: column;
        justify-content: center;
        padding: 36px 30px;
        text-align: center;
      }
      @media (min-width: 980px) {
        .use-media-queries .arh2qf {
          height: 450px;
          padding: 0;
        }
      }
      .gt-sm .arh2qf {
        height: 450px;
        padding: 0;
      }
      .cJscj1 {
        font-size: 24px;
        line-height: 34px;
        margin-bottom: 12px;
      }
      @media (min-width: 980px) {
        .use-media-queries .cJscj1 {
          font-size: 32px;
          line-height: 1.5;
          margin-bottom: 12px;
          max-width: 620px;
        }
      }
      .gt-sm .cJscj1 {
        font-size: 32px;
        margin-bottom: 12px;
        max-width: 620px;
      }
      .cTdFFO,
      .gt-sm .cJscj1 {
        line-height: 1.5;
      }
      @media (min-width: 980px) {
        .use-media-queries .cTdFFO {
          max-width: 620px;
        }
      }
      .gt-sm .cTdFFO {
        max-width: 620px;
      }
      .clf9mN {
        font-size: 16px;
      }
      .wdbmEY {
        font-size: 18px;
        margin-top: 18px;
      }
      @media (min-width: 980px) {
        .use-media-queries .wdbmEY {
          margin-top: 48px;
        }
      }
      .gt-sm .wdbmEY {
        margin-top: 48px;
      }
      .zVjbZW {
        margin-bottom: 0;
        padding-bottom: 20px;
      }
      .t1YWug {
        min-height: 100%;
        position: relative;
      }
      :where(.t1YWug) {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        box-sizing: border-box;
      }
      :where(.t1YWug) * {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      }
      :where(.t1YWug) *,
      :where(.t1YWug) :after,
      :where(.t1YWug) :before {
        box-sizing: inherit;
      }
      :where(.t1YWug) :where(a),
      :where(.t1YWug) :where(a:visited) {
        text-decoration: none;
      }
      :where(.t1YWug) :where(textarea) {
        font-family: inherit;
      }
      .qHpbsu {
        position: relative;
      }
      .medium-gap .qHpbsu {
        padding-top: 50px;
      }
      .large-gap .qHpbsu {
        padding-top: 100px;
      }
      html {
        height: 100%;
        touch-action: manipulation;
      }
      body,
      html {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        margin: 0;
        padding: 0;
      }
      body {
        -webkit-text-size-adjust: none;
        -webkit-highlight: none;
      }
      #root {
        margin: 0;
        padding: 0;
      }
      a {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      }
      .gallery-item-common-info.gallery-item-right-info {
        position: absolute; /*!rtl:begin:ignore*/
        right: 0; /*!rtl:end:ignore*/
      }
      .gallery-item-common-info.gallery-item-left-info {
        left: 0; /*!rtl:end:ignore*/
        position: absolute; /*!rtl:begin:ignore*/
      }
      #pro-gallery-container button.nav-arrows-container {
        box-sizing: border-box;
      }
      .post-list-pro-gallery-pg-grid .pro-gallery,
      .post-list-pro-gallery-pg-grid .pro-gallery .gallery-item-common-info {
        overflow: visible !important;
      }
      .sXdULV {
        background-color: rgb(var(--postListWidgetBackgroundColor, 0, 0, 0, 0));
      }
      :where(.sXdULV) {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        box-sizing: border-box;
      }
      :where(.sXdULV) * {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      }
      :where(.sXdULV) *,
      :where(.sXdULV) :after,
      :where(.sXdULV) :before {
        box-sizing: inherit;
      }
      :where(.sXdULV) :where(a),
      :where(.sXdULV) :where(a:visited) {
        text-decoration: none;
      }
      :where(.sXdULV) :where(textarea) {
        font-family: inherit;
      }
      .b79EPn {
        background-color: rgb(
          var(--postListWidgetBackgroundColorMobile, 0, 0, 0, 0)
        );
      }
      :where(.b79EPn) {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        box-sizing: border-box;
      }
      :where(.b79EPn) * {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      }
      :where(.b79EPn) *,
      :where(.b79EPn) :after,
      :where(.b79EPn) :before {
        box-sizing: inherit;
      }
      :where(.b79EPn) :where(a),
      :where(.b79EPn) :where(a:visited) {
        text-decoration: none;
      }
      :where(.b79EPn) :where(textarea) {
        font-family: inherit;
      }
      .c3VDPV .nav-arrows-container svg {
        fill: rgb(var(--postListWidgetSliderArrowsColor, var(--wix-color-15)));
        stroke: rgb(
          var(--postListWidgetSliderArrowsColor, var(--wix-color-15))
        );
      }
      .c3VDPV .mobile-slider-arrow-color .nav-arrows-container svg {
        fill: rgb(
          var(--postListWidgetSliderArrowsColorMobile, var(--wix-color-15))
        );
        stroke: rgb(
          var(--postListWidgetSliderArrowsColorMobile, var(--wix-color-15))
        );
      }
      .c3VDPV .blog-post-post-list-title-font {
        font: var(--post-post-list-titleFont, var(--wix-font-Page-title));
        font-size: var(--post-post-list-titleFont-size, 22px);
        line-height: normal;
        -webkit-text-decoration: var(
          --post-post-list-titleFont-text-decoration
        );
        text-decoration: var(--post-post-list-titleFont-text-decoration);
      }
      .c3VDPV .post-list-pro-gallery-list .blog-post-post-list-title-font {
        font: var(--post-post-list-titleFont, var(--wix-font-Page-title));
        font-size: var(--post-post-list-titleFont-size, 14px);
      }
      .c3VDPV .blog-post-post-list-description-style-font {
        -webkit-text-decoration: var(
          --post-post-list-descriptionFont-text-decoration
        );
        text-decoration: var(--post-post-list-descriptionFont-text-decoration);
      }
      .c3VDPV .blog-post-post-list-description-font,
      .c3VDPV .blog-post-post-list-description-style-font {
        font: var(--post-post-list-descriptionFont, var(--wix-font-Body-M));
        font-size: var(--post-post-list-descriptionFont-size, 12px);
        line-height: normal;
      }
      .c3VDPV .blog-post-post-list-description-font {
        font-style: inherit;
        font-weight: inherit;
        text-decoration: inherit;
      }
      .c3VDPV .blog-post-post-list-mobile-post-container .blog-post-text-font,
      .c3VDPV .blog-post-post-list-post-container .blog-post-text-font {
        font: var(--post-post-list-descriptionFont, var(--wix-font-Page-title));
        font-size: var(--post-post-list-descriptionFont-size, 12px);
        line-height: normal;
      }
      .c3VDPV .blog-post-list-pagination-active {
        color: rgb(var(--post-post-list-linkHashtagColor, var(--wix-color-8)));
      }
      .c3VDPV .blog-post-list-mobile-pagination-active {
        color: rgb(
          var(--post-post-list-mobile-linkHashtagColor, var(--wix-color-8))
        );
      }
      .c3VDPV .blog-post-post-list-title-color {
        color: rgb(var(--post-post-list-titleColor, var(--wix-color-5)));
      }
      .c3VDPV .blog-post-post-list-mobile-title-color {
        color: rgb(var(--post-post-list-mobile-titleColor, var(--wix-color-5)));
      }
      .c3VDPV .blog-post-post-list-TOI-title-color {
        color: rgb(var(--post-post-list-TOI-titleColor, var(--wix-color-1)));
      }
      .c3VDPV .blog-post-post-list-TOI-mobile-title-color {
        color: rgb(
          var(--post-post-list-TOI-mobile-titleColor, var(--wix-color-1))
        );
      }
      .c3VDPV .blog-post-post-list-description-color {
        color: rgb(var(--post-post-list-descriptionColor, var(--wix-color-5)));
      }
      .c3VDPV .blog-post-post-list-mobile-description-color {
        color: rgb(
          var(--post-post-list-mobile-descriptionColor, var(--wix-color-5))
        );
      }
      .c3VDPV .blog-post-post-list-description-fill {
        fill: rgb(var(--post-post-list-descriptionColor, var(--wix-color-5)));
      }
      .c3VDPV .blog-post-post-list-mobile-description-fill {
        fill: rgb(
          var(--post-post-list-mobile-descriptionColor, var(--wix-color-5))
        );
      }
      .c3VDPV .blog-post-post-list-description-background-color {
        background-color: rgb(
          var(--post-post-list-descriptionColor, var(--wix-color-5))
        );
      }
      .c3VDPV .blog-post-post-list-mobile-description-background-color {
        background-color: rgb(
          var(--post-post-list-mobile-descriptionColor, var(--wix-color-5))
        );
      }
      .c3VDPV .blog-post-post-list-TOI-description-color {
        color: rgb(
          var(--post-post-list-TOI-descriptionColor, var(--wix-color-1))
        );
      }
      .c3VDPV .blog-post-post-list-TOI-mobile-description-color {
        color: rgb(
          var(--post-post-list-TOI-mobile-descriptionColor, var(--wix-color-1))
        );
      }
      .c3VDPV .blog-post-post-list-TOI-description-fill {
        fill: rgb(
          var(--post-post-list-TOI-descriptionColor, var(--wix-color-1))
        );
      }
      .c3VDPV .blog-post-post-list-TOI-mobile-description-fill {
        fill: rgb(
          var(--post-post-list-TOI-mobile-descriptionColor, var(--wix-color-1))
        );
      }
      .c3VDPV .blog-post-post-list-TOI-description-background-color {
        background-color: rgb(
          var(--post-post-list-TOI-descriptionColor, var(--wix-color-1))
        );
      }
      .c3VDPV .blog-post-post-list-TOI-mobile-description-background-color {
        background-color: rgb(
          var(--post-post-list-TOI-mobile-descriptionColor, var(--wix-color-1))
        );
      }
      .c3VDPV .blog-post-post-list-border-color {
        border-color: rgb(
          var(--post-post-list-borderColor, var(--wix-color-2))
        );
      }
      .c3VDPV .blog-post-post-list-mobile-border-color {
        border-color: rgb(
          var(--post-post-list-mobile-borderColor, var(--wix-color-2))
        );
      }
      .c3VDPV .blog-post-post-list-overlay-background-color {
        background-color: rgb(
          var(--post-post-list-overlayColor, 0, 0, 0, 0.55)
        );
      }
      .c3VDPV .blog-post-post-list-mobile-overlay-background-color {
        background-color: rgb(
          var(--post-post-list-mobile-overlayColor, 0, 0, 0, 0.55)
        );
      }
      .c3VDPV .blog-post-post-list-link-hashtag-hover-color:hover {
        color: rgb(var(--post-post-list-linkHashtagColor, var(--wix-color-8)));
      }
      .c3VDPV .blog-post-post-list-mobile-link-hashtag-hover-color:hover {
        color: rgb(
          var(--post-post-list-mobile-linkHashtagColor, var(--wix-color-8))
        );
      }
      .c3VDPV .blog-post-post-list-link-hashtag-hover-fill:hover {
        fill: rgb(var(--post-post-list-linkHashtagColor, var(--wix-color-8)));
      }
      .c3VDPV .blog-post-post-list-mobile-link-hashtag-hover-fill:hover {
        fill: rgb(
          var(--post-post-list-mobile-linkHashtagColor, var(--wix-color-8))
        );
      }
      .c3VDPV
        .blog-post-post-list-link-hashtag-hover-color:hover
        .blog-post-post-list-title-color {
        color: rgb(var(--post-post-list-linkHashtagColor, var(--wix-color-8)));
      }
      .c3VDPV
        .blog-post-post-list-mobile-link-hashtag-hover-color:hover
        .blog-post-post-list-mobile-title-color {
        color: rgb(
          var(--post-post-list-mobile-linkHashtagColor, var(--wix-color-8))
        );
      }
      .c3VDPV
        .blog-post-post-list-link-hashtag-hover-color:hover
        .blog-post-post-list-TOI-title-color {
        color: rgb(var(--post-post-list-linkHashtagColor, var(--wix-color-8)));
      }
      .c3VDPV
        .blog-post-post-list-mobile-link-hashtag-hover-color:hover
        .blog-post-post-list-TOI-mobile-title-color {
        color: rgb(
          var(--post-post-list-mobile-linkHashtagColor, var(--wix-color-8))
        );
      }
      .c3VDPV .blog-post-post-list-background-color {
        background-color: rgb(
          var(--post-post-list-backgroundColor, var(--wix-color-1))
        ) !important;
      }
      .c3VDPV .blog-post-post-list-mobile-background-color {
        background-color: rgb(
          var(--post-post-list-mobile-backgroundColor, var(--wix-color-1))
        );
      }
      .c3VDPV .blog-post-post-list-TOI-background-color {
        background-color: rgb(
          var(--post-post-list-TOI-backgroundColor, var(--wix-color-5))
        );
      }
      .c3VDPV .blog-post-post-list-TOI-mobile-background-color {
        background-color: rgb(
          var(--post-post-list-TOI-mobile-backgroundColor, var(--wix-color-5))
        );
      }
      .c3VDPV
        .blog-post-post-list-hover-container:hover
        .blog-hover-container-element-color {
        color: rgb(var(--post-post-list-linkHashtagColor, var(--wix-color-8)));
      }
      .c3VDPV
        .blog-post-post-list-mobile-hover-container:hover
        .blog-hover-container-element-color {
        color: rgb(
          var(--post-post-list-mobile-linkHashtagColor, var(--wix-color-8))
        );
      }
      .c3VDPV
        .blog-post-post-list-hover-container:hover
        .blog-hover-container-element-fill {
        fill: rgb(var(--post-post-list-linkHashtagColor, var(--wix-color-8)));
      }
      .c3VDPV
        .blog-post-post-list-mobile-hover-container:hover
        .blog-hover-container-element-fill {
        fill: rgb(
          var(--post-post-list-mobile-linkHashtagColor, var(--wix-color-8))
        );
      }
      .c3VDPV .blog-post-post-list-post-container .blog-link-hashtag-color {
        color: rgb(var(--post-post-list-linkHashtagColor, var(--wix-color-8)));
      }
      .c3VDPV
        .blog-post-post-list-mobile-post-container
        .blog-link-hashtag-color {
        color: rgb(
          var(--post-post-list-mobile-linkHashtagColor, var(--wix-color-8))
        );
      }
      .c3VDPV .blog-post-post-list-post-container .blog-post-text-color {
        color: rgb(var(--post-post-list-descriptionColor, var(--wix-color-5)));
      }
      .c3VDPV .blog-post-post-list-mobile-post-container .blog-post-text-color {
        color: rgb(
          var(--post-post-list-mobile-descriptionColor, var(--wix-color-5))
        );
      }
      .c3VDPV .blog-post-post-list-post-container .blog-icon-fill {
        fill: rgb(var(--post-post-list-descriptionColor, var(--wix-color-5)));
      }
      .c3VDPV .blog-post-post-list-mobile-post-container .blog-icon-fill {
        fill: rgb(
          var(--post-post-list-mobile-descriptionColor, var(--wix-color-5))
        );
      }
      .c3VDPV .blog-post-post-list-post-container .blog-link-hover-color:hover {
        color: rgb(var(--post-post-list-linkHashtagColor, var(--wix-color-8)));
      }
      .c3VDPV
        .blog-post-post-list-mobile-post-container
        .blog-link-hover-color:hover {
        color: rgb(
          var(--post-post-list-mobile-linkHashtagColor, var(--wix-color-8))
        );
      }
      .c3VDPV .blog-post-post-list-post-container .blog-link-hover-fill:hover {
        fill: rgb(var(--post-post-list-linkHashtagColor, var(--wix-color-8)));
      }
      .c3VDPV
        .blog-post-post-list-mobile-post-container
        .blog-link-hover-fill:hover {
        fill: rgb(
          var(--post-post-list-mobile-linkHashtagColor, var(--wix-color-8))
        );
      }
    </style>
    <style id="css_masterPage">
      @font-face {
        font-display: swap;
        font-family: "avenir-lt-w01_35-light1475496";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/avenir-lt-w05_35-light.woff2") format("woff2");
        unicode-range: U+0100-012B, U+012E-0130, U+0132-0137, U+0139-0149,
          U+014C-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+0218-021B,
          U+02C9, U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0,
          U+1E9E, U+20B9-20BA, U+20BC-20BD, U+2113, U+2126, U+212E, U+2202,
          U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B,
          U+2248, U+2260, U+2264-2265, U+25CA, U+F8FF, U+FB01-FB02;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "avenir-lt-w01_35-light1475496";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/avenir-lt-w01_35-light1475496.woff2") format("woff2");
        unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-00FF, U+0131,
          U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+0237,
          U+02C6-02C7, U+02DA, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E,
          U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "din-next-w01-light";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/din-next-w10-light.woff2") format("woff2");
        unicode-range: U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F,
          U+0490-0491, U+2116;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "din-next-w01-light";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/din-next-w02-light.woff2") format("woff2");
        unicode-range: U+000D, U+0100-010F, U+0111-0130, U+0132-0151,
          U+0154-015F, U+0162-0177, U+0179-017C, U+01FA-01FF, U+0218-021B,
          U+0237, U+02C9, U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03C0,
          U+1E80-1E85, U+1EF2-1EF3, U+2070, U+2074-2079, U+2080-2089, U+2113,
          U+2126, U+212E, U+2153-2154, U+215B-215E, U+2202, U+2206, U+220F,
          U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260,
          U+2264-2265, U+25CA, U+F8FF, U+FB00-FB04;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "din-next-w01-light";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/din-next-w01-light.woff2") format("woff2");
        unicode-range: U+0020-007E, U+00A0-00FF, U+0110, U+0131, U+0152-0153,
          U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6-02C7, U+02DA, U+02DC,
          U+03BC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026,
          U+2030, U+2039-203A, U+2044, U+20AC, U+2122;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "helvetica-w01-light";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/helvetica-w02-light.woff2") format("woff2");
        unicode-range: U+0100-012B, U+012E-0137, U+0139-0149, U+014C-0151,
          U+0154-015F, U+0162-0177, U+0179-017C, U+0218-021B, U+0237, U+02C7,
          U+02C9, U+02D8-02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0, U+2044,
          U+2113, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215,
          U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA,
          U+E002, U+E004, U+E006, U+E008-E009, U+E00D, U+E00F, U+E011, U+E013,
          U+E015, U+E017, U+E01A, U+FB01-FB02;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "helvetica-w01-light";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/helvetica-w01-light.woff2") format("woff2");
        unicode-range: U+000D, U+0020-007E, U+00A0-00FF, U+0152-0153,
          U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6, U+02DC, U+2013-2014,
          U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A,
          U+20AC, U+2122;
        font-display: swap;
      }
      #masterPage:not(.landingPage) #PAGES_CONTAINER {
        margin-top: 0px;
        margin-bottom: 0px;
      }
      #masterPage.landingPage #comp-jn4hmzm6 {
        display: none;
      }
      #masterPage.landingPage #CONTROLLER_COMP_CUSTOM_ID {
        display: none;
      }
      #masterPage.landingPage #SOSP_CONTAINER_CUSTOM_ID {
        display: none;
      }
      #masterPage.landingPage #SITE_FOOTER {
        display: none;
      }
      #masterPage.landingPage #SITE_FOOTER-placeholder {
        display: none;
      }
      #SITE_CONTAINER.focus-ring-active
        :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus,
      #SITE_CONTAINER.focus-ring-active
        :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus
        ~ .wixSdkShowFocusOnSibling {
        --focus-ring-box-shadow: 0 0 0 2px #116dff;
        box-shadow: var(--focus-ring-box-shadow) !important;
        z-index: 1;
      }
      .has-inner-focus-ring {
        --focus-ring-box-shadow: 0 0 0 2px #116dff !important;
      }
      #masterPage {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }
      #SITE_HEADER {
        --pinned-layer-in-container: 50;
        --above-all-in-container: 49;
      }
      #PAGES_CONTAINER {
        --pinned-layer-in-container: 51;
        --above-all-in-container: 49;
      }
      #comp-jn4hmzm6 {
        --pinned-layer-in-container: 52;
        --above-all-in-container: 49;
      }
      #CONTROLLER_COMP_CUSTOM_ID {
        --pinned-layer-in-container: 53;
        --above-all-in-container: 49;
      }
      #SOSP_CONTAINER_CUSTOM_ID {
        --pinned-layer-in-container: 54;
        --above-all-in-container: 49;
      }
      #SITE_FOOTER {
        --pinned-layer-in-container: 55;
        --above-all-in-container: 49;
      }
      #comp-kemk5dij-pinned-layer {
        z-index: calc(var(--pinned-layers-in-page, 0) + 56);
        --above-all-in-container: 10000;
      }
      [id="soapAfterPagesContainer"].page-without-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent"] {
        height: auto;
        width: 100%;
        position: static;
        min-height: auto;
        padding-bottom: 0px;
        box-sizing: border-box;
      }
      [id="soapAfterPagesContainer"].page-without-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
        > [id="comp-jn4hmzm6"],
      [id="soapAfterPagesContainer"].page-without-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-jn4hmzm6"] {
        position: absolute;
        top: 20px;
        left: 102px;
        margin-left: calc((100% - 980px) * 0.5);
      }
      [id="soapAfterPagesContainer"].page-without-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
        > [id="CONTROLLER_COMP_CUSTOM_ID"],
      [id="soapAfterPagesContainer"].page-without-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
        > wix-interact-element
        > [id="CONTROLLER_COMP_CUSTOM_ID"] {
        position: absolute;
        top: 15px;
        left: 20px;
        margin-left: calc((100% - 980px) * 0.5);
      }
      [id="soapAfterPagesContainer"].page-with-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent"] {
        height: auto;
        width: 100%;
      }
      [id="soapAfterPagesContainer"].page-with-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        margin-top: -54px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
        padding-bottom: 0px;
        box-sizing: border-box;
      }
      [id="soapAfterPagesContainer"].page-with-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
        > [id="comp-jn4hmzm6"],
      [id="soapAfterPagesContainer"].page-with-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-jn4hmzm6"] {
        position: absolute;
        top: 20px;
        left: 102px;
        margin-left: calc((100% - 980px) * 0.5);
      }
      [id="soapAfterPagesContainer"].page-with-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
        > [id="CONTROLLER_COMP_CUSTOM_ID"],
      [id="soapAfterPagesContainer"].page-with-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
        > wix-interact-element
        > [id="CONTROLLER_COMP_CUSTOM_ID"] {
        position: absolute;
        top: 15px;
        left: 20px;
        margin-left: calc((100% - 980px) * 0.5);
      }
      [id="soapAfterPagesContainer"].page-with-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
        > [id="SOSP_CONTAINER_CUSTOM_ID"],
      [id="soapAfterPagesContainer"].page-with-sosp
        [data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"]
        > wix-interact-element
        > [id="SOSP_CONTAINER_CUSTOM_ID"] {
        position: relative;
        margin: 190px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-kemk5dij {
        justify-self: end;
        align-self: end;
        position: absolute;
        grid-area: 1 / 1 / 2 / 2;
        pointer-events: auto;
      }
      :root,
      :host,
      .spxThemeOverride,
      .max-width-container,
      #root {
        --color_0: 255, 255, 255;
        --color_1: 255, 255, 255;
        --color_2: 0, 0, 0;
        --color_3: 237, 28, 36;
        --color_4: 0, 136, 203;
        --color_5: 255, 203, 5;
        --color_6: 114, 114, 114;
        --color_7: 176, 176, 176;
        --color_8: 255, 255, 255;
        --color_9: 114, 114, 114;
        --color_10: 176, 176, 176;
        --color_11: 255, 255, 255;
        --color_12: 213, 213, 213;
        --color_13: 170, 170, 170;
        --color_14: 128, 128, 128;
        --color_15: 85, 85, 85;
        --color_16: 190, 196, 216;
        --color_17: 149, 156, 178;
        --color_18: 105, 113, 139;
        --color_19: 52, 63, 100;
        --color_20: 26, 32, 50;
        --color_21: 182, 232, 227;
        --color_22: 141, 209, 202;
        --color_23: 65, 186, 174;
        --color_24: 43, 124, 116;
        --color_25: 22, 62, 58;
        --color_26: 184, 242, 231;
        --color_27: 147, 230, 213;
        --color_28: 61, 217, 186;
        --color_29: 41, 145, 124;
        --color_30: 20, 72, 62;
        --color_31: 243, 229, 209;
        --color_32: 232, 204, 167;
        --color_33: 174, 153, 125;
        --color_34: 116, 102, 84;
        --color_35: 58, 51, 42;
        --color_36: 255, 255, 255;
        --color_37: 85, 85, 85;
        --color_38: 213, 213, 213;
        --color_39: 170, 170, 170;
        --color_40: 128, 128, 128;
        --color_41: 105, 113, 139;
        --color_42: 85, 85, 85;
        --color_43: 170, 170, 170;
        --color_44: 255, 255, 255;
        --color_45: 85, 85, 85;
        --color_46: 85, 85, 85;
        --color_47: 213, 213, 213;
        --color_48: 105, 113, 139;
        --color_49: 105, 113, 139;
        --color_50: 255, 255, 255;
        --color_51: 255, 255, 255;
        --color_52: 105, 113, 139;
        --color_53: 105, 113, 139;
        --color_54: 170, 170, 170;
        --color_55: 170, 170, 170;
        --color_56: 255, 255, 255;
        --color_57: 255, 255, 255;
        --color_58: 105, 113, 139;
        --color_59: 255, 255, 255;
        --color_60: 105, 113, 139;
        --color_61: 105, 113, 139;
        --color_62: 255, 255, 255;
        --color_63: 255, 255, 255;
        --color_64: 170, 170, 170;
        --color_65: 170, 170, 170;
        --font_0: normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --font_1: normal normal normal 16px/1.4em din-next-w01-light, sans-serif;
        --font_2: normal normal normal 26px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --font_3: normal normal normal 70px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --font_4: normal normal bold 50px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --font_5: normal normal normal 24px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --font_6: normal normal normal 22px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --font_7: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --font_8: normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --font_9: normal normal normal 12px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --font_10: normal normal normal 12px/1.4em din-next-w01-light,
          sans-serif;
        -height: 50px;
        --sticky-offset: 50px;
        -top-height: 50px;
        --site-width: 980px;
        --above-all-z-index: 100000;
        --portals-z-index: 100001;
        --wix-opt-in-direction: ltr;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        --minViewportSize: 320;
        --maxViewportSize: 1920;
        --theme-spx-ratio: 1px;
        --full-viewport: 100 * var(--one-unit) * var(--browser-zoom);
        --scaling-factor: min(var(--full-viewport), var(--section-max-width));
        --customScaleViewportLimit: clamp(
          var(--minViewportSize) * 1px,
          var(--full-viewport),
          min(var(--section-max-width), var(--maxViewportSize) * 1px)
        );
      }
      .font_0 {
        font: var(--font_0);
        color: rgb(var(--color_19));
        letter-spacing: 0em;
      }
      .font_1 {
        font: var(--font_1);
        color: rgb(var(--color_14));
        letter-spacing: 0em;
      }
      .font_2 {
        font: var(--font_2);
        color: rgb(var(--color_19));
        letter-spacing: 0em;
      }
      .font_3 {
        font: var(--font_3);
        color: rgb(var(--color_19));
        letter-spacing: 0em;
      }
      .font_4 {
        font: var(--font_4);
        color: rgb(var(--color_19));
        letter-spacing: 0em;
      }
      .font_5 {
        font: var(--font_5);
        color: rgb(var(--color_19));
        letter-spacing: 0em;
      }
      .font_6 {
        font: var(--font_6);
        color: rgb(var(--color_19));
        letter-spacing: 0em;
      }
      .font_7 {
        font: var(--font_7);
        color: rgb(var(--color_19));
        letter-spacing: 0em;
      }
      .font_8 {
        font: var(--font_8);
        color: rgb(var(--color_19));
        letter-spacing: 0em;
      }
      .font_9 {
        font: var(--font_9);
        color: rgb(var(--color_19));
        letter-spacing: 0em;
      }
      .font_10 {
        font: var(--font_10);
        color: rgb(var(--color_14));
        letter-spacing: 0em;
      }
      .color_0 {
        color: rgb(var(--color_0));
      }
      .color_1 {
        color: rgb(var(--color_1));
      }
      .color_2 {
        color: rgb(var(--color_2));
      }
      .color_3 {
        color: rgb(var(--color_3));
      }
      .color_4 {
        color: rgb(var(--color_4));
      }
      .color_5 {
        color: rgb(var(--color_5));
      }
      .color_6 {
        color: rgb(var(--color_6));
      }
      .color_7 {
        color: rgb(var(--color_7));
      }
      .color_8 {
        color: rgb(var(--color_8));
      }
      .color_9 {
        color: rgb(var(--color_9));
      }
      .color_10 {
        color: rgb(var(--color_10));
      }
      .color_11 {
        color: rgb(var(--color_11));
      }
      .color_12 {
        color: rgb(var(--color_12));
      }
      .color_13 {
        color: rgb(var(--color_13));
      }
      .color_14 {
        color: rgb(var(--color_14));
      }
      .color_15 {
        color: rgb(var(--color_15));
      }
      .color_16 {
        color: rgb(var(--color_16));
      }
      .color_17 {
        color: rgb(var(--color_17));
      }
      .color_18 {
        color: rgb(var(--color_18));
      }
      .color_19 {
        color: rgb(var(--color_19));
      }
      .color_20 {
        color: rgb(var(--color_20));
      }
      .color_21 {
        color: rgb(var(--color_21));
      }
      .color_22 {
        color: rgb(var(--color_22));
      }
      .color_23 {
        color: rgb(var(--color_23));
      }
      .color_24 {
        color: rgb(var(--color_24));
      }
      .color_25 {
        color: rgb(var(--color_25));
      }
      .color_26 {
        color: rgb(var(--color_26));
      }
      .color_27 {
        color: rgb(var(--color_27));
      }
      .color_28 {
        color: rgb(var(--color_28));
      }
      .color_29 {
        color: rgb(var(--color_29));
      }
      .color_30 {
        color: rgb(var(--color_30));
      }
      .color_31 {
        color: rgb(var(--color_31));
      }
      .color_32 {
        color: rgb(var(--color_32));
      }
      .color_33 {
        color: rgb(var(--color_33));
      }
      .color_34 {
        color: rgb(var(--color_34));
      }
      .color_35 {
        color: rgb(var(--color_35));
      }
      .color_36 {
        color: rgb(var(--color_36));
      }
      .color_37 {
        color: rgb(var(--color_37));
      }
      .color_38 {
        color: rgb(var(--color_38));
      }
      .color_39 {
        color: rgb(var(--color_39));
      }
      .color_40 {
        color: rgb(var(--color_40));
      }
      .color_41 {
        color: rgb(var(--color_41));
      }
      .color_42 {
        color: rgb(var(--color_42));
      }
      .color_43 {
        color: rgb(var(--color_43));
      }
      .color_44 {
        color: rgb(var(--color_44));
      }
      .color_45 {
        color: rgb(var(--color_45));
      }
      .color_46 {
        color: rgb(var(--color_46));
      }
      .color_47 {
        color: rgb(var(--color_47));
      }
      .color_48 {
        color: rgb(var(--color_48));
      }
      .color_49 {
        color: rgb(var(--color_49));
      }
      .color_50 {
        color: rgb(var(--color_50));
      }
      .color_51 {
        color: rgb(var(--color_51));
      }
      .color_52 {
        color: rgb(var(--color_52));
      }
      .color_53 {
        color: rgb(var(--color_53));
      }
      .color_54 {
        color: rgb(var(--color_54));
      }
      .color_55 {
        color: rgb(var(--color_55));
      }
      .color_56 {
        color: rgb(var(--color_56));
      }
      .color_57 {
        color: rgb(var(--color_57));
      }
      .color_58 {
        color: rgb(var(--color_58));
      }
      .color_59 {
        color: rgb(var(--color_59));
      }
      .color_60 {
        color: rgb(var(--color_60));
      }
      .color_61 {
        color: rgb(var(--color_61));
      }
      .color_62 {
        color: rgb(var(--color_62));
      }
      .color_63 {
        color: rgb(var(--color_63));
      }
      .color_64 {
        color: rgb(var(--color_64));
      }
      .color_65 {
        color: rgb(var(--color_65));
      }
      .backcolor_0 {
        background-color: rgb(var(--color_0));
      }
      .backcolor_1 {
        background-color: rgb(var(--color_1));
      }
      .backcolor_2 {
        background-color: rgb(var(--color_2));
      }
      .backcolor_3 {
        background-color: rgb(var(--color_3));
      }
      .backcolor_4 {
        background-color: rgb(var(--color_4));
      }
      .backcolor_5 {
        background-color: rgb(var(--color_5));
      }
      .backcolor_6 {
        background-color: rgb(var(--color_6));
      }
      .backcolor_7 {
        background-color: rgb(var(--color_7));
      }
      .backcolor_8 {
        background-color: rgb(var(--color_8));
      }
      .backcolor_9 {
        background-color: rgb(var(--color_9));
      }
      .backcolor_10 {
        background-color: rgb(var(--color_10));
      }
      .backcolor_11 {
        background-color: rgb(var(--color_11));
      }
      .backcolor_12 {
        background-color: rgb(var(--color_12));
      }
      .backcolor_13 {
        background-color: rgb(var(--color_13));
      }
      .backcolor_14 {
        background-color: rgb(var(--color_14));
      }
      .backcolor_15 {
        background-color: rgb(var(--color_15));
      }
      .backcolor_16 {
        background-color: rgb(var(--color_16));
      }
      .backcolor_17 {
        background-color: rgb(var(--color_17));
      }
      .backcolor_18 {
        background-color: rgb(var(--color_18));
      }
      .backcolor_19 {
        background-color: rgb(var(--color_19));
      }
      .backcolor_20 {
        background-color: rgb(var(--color_20));
      }
      .backcolor_21 {
        background-color: rgb(var(--color_21));
      }
      .backcolor_22 {
        background-color: rgb(var(--color_22));
      }
      .backcolor_23 {
        background-color: rgb(var(--color_23));
      }
      .backcolor_24 {
        background-color: rgb(var(--color_24));
      }
      .backcolor_25 {
        background-color: rgb(var(--color_25));
      }
      .backcolor_26 {
        background-color: rgb(var(--color_26));
      }
      .backcolor_27 {
        background-color: rgb(var(--color_27));
      }
      .backcolor_28 {
        background-color: rgb(var(--color_28));
      }
      .backcolor_29 {
        background-color: rgb(var(--color_29));
      }
      .backcolor_30 {
        background-color: rgb(var(--color_30));
      }
      .backcolor_31 {
        background-color: rgb(var(--color_31));
      }
      .backcolor_32 {
        background-color: rgb(var(--color_32));
      }
      .backcolor_33 {
        background-color: rgb(var(--color_33));
      }
      .backcolor_34 {
        background-color: rgb(var(--color_34));
      }
      .backcolor_35 {
        background-color: rgb(var(--color_35));
      }
      .backcolor_36 {
        background-color: rgb(var(--color_36));
      }
      .backcolor_37 {
        background-color: rgb(var(--color_37));
      }
      .backcolor_38 {
        background-color: rgb(var(--color_38));
      }
      .backcolor_39 {
        background-color: rgb(var(--color_39));
      }
      .backcolor_40 {
        background-color: rgb(var(--color_40));
      }
      .backcolor_41 {
        background-color: rgb(var(--color_41));
      }
      .backcolor_42 {
        background-color: rgb(var(--color_42));
      }
      .backcolor_43 {
        background-color: rgb(var(--color_43));
      }
      .backcolor_44 {
        background-color: rgb(var(--color_44));
      }
      .backcolor_45 {
        background-color: rgb(var(--color_45));
      }
      .backcolor_46 {
        background-color: rgb(var(--color_46));
      }
      .backcolor_47 {
        background-color: rgb(var(--color_47));
      }
      .backcolor_48 {
        background-color: rgb(var(--color_48));
      }
      .backcolor_49 {
        background-color: rgb(var(--color_49));
      }
      .backcolor_50 {
        background-color: rgb(var(--color_50));
      }
      .backcolor_51 {
        background-color: rgb(var(--color_51));
      }
      .backcolor_52 {
        background-color: rgb(var(--color_52));
      }
      .backcolor_53 {
        background-color: rgb(var(--color_53));
      }
      .backcolor_54 {
        background-color: rgb(var(--color_54));
      }
      .backcolor_55 {
        background-color: rgb(var(--color_55));
      }
      .backcolor_56 {
        background-color: rgb(var(--color_56));
      }
      .backcolor_57 {
        background-color: rgb(var(--color_57));
      }
      .backcolor_58 {
        background-color: rgb(var(--color_58));
      }
      .backcolor_59 {
        background-color: rgb(var(--color_59));
      }
      .backcolor_60 {
        background-color: rgb(var(--color_60));
      }
      .backcolor_61 {
        background-color: rgb(var(--color_61));
      }
      .backcolor_62 {
        background-color: rgb(var(--color_62));
      }
      .backcolor_63 {
        background-color: rgb(var(--color_63));
      }
      .backcolor_64 {
        background-color: rgb(var(--color_64));
      }
      .backcolor_65 {
        background-color: rgb(var(--color_65));
      }
      @view-transition {
        navigation: auto;
        types: OutIn;
      }
      #masterPage:not(.landingPage) {
        --top-offset: 0px;
        --header-height: 54px;
      }
      #masterPage.landingPage {
        --top-offset: 0px;
      }
      #comp-kjgrk1fo {
        --bg: 0, 0, 0;
        --alpha-bg: 0;
        --brw: 0px;
        --brd: var(--color_15);
        --rd: 0px;
        --shd: none;
        --bg-dd: var(--color_32);
        --alpha-bg-dd: 1;
        --brw-dd: 0px;
        --brd-dd: var(--color_15);
        --rd-dd: 0px;
        --shd-dd: none;
        --fnt: var(--font_8);
        --fnt-size-dd: 15px;
        --txt-dd: var(--color_19);
        --alpha-txt-dd: 1;
        --txt-slct-dd: var(--color_20);
        --alpha-txt-slct-dd: 1;
        --txth-dd: var(--color_20);
        --alpha-txth-dd: 1;
        --txth: var(--color_19);
        --alpha-txth: 1;
        --txt: var(--color_19);
        --alpha-txt: 1;
        --avatarCornerRadius: 100px;
        --avatarAndArrowStrokeWidth: 0px;
        --badge-bg: 226, 28, 33;
        --alpha-badge-bg: 1;
        --badge-txt: var(--color_11);
        --alpha-badge-txt: 1;
        --fillcolor: var(--color_16);
        --alpha-fillcolor: 1;
        --alpha-brd: 1;
        --alpha-brd-dd: 0.2;
        --boxShadowToggleOn-shd: none;
        --boxShadowToggleOn-shd-dd: none;
      }
      #comp-kjgrk1fo {
        width: 120px;
        height: 30px;
      }
      #comp-kjgrk1fo {
        justify-content: flex-end;
        direction: ltr;
        --icon-size: 23px;
        --fnt: normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --logged-in-avatar-display: block;
        --logged-in-text-display: none;
        --logged-out-avatar-display: block;
        --logged-out-text-display: block;
        --logged-out-icon-size: 23px;
        --arrow-display: block;
        --arrow-icon: var(--line-arrow-icon);
        --arrow-size: 14px;
        --greeting-text-display: none;
        --icons-display: block;
        --user-section-padding-start: 0px;
        --menu-items-alignment: flex-start;
        --avatarAndArrowStrokeWidth: 0px;
      }
      #PAGES_CONTAINER {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }
      #SITE_PAGES {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }
      #SITE_PAGES {
        --transition-duration: 700ms;
      }
      #CONTROLLER_COMP_CUSTOM_ID {
        --bgh: 43, 104, 156;
        --rd: 20px;
        --txth: 255, 255, 255;
        --alpha-bg: 1;
        --bg: 61, 155, 233;
        --txt: 255, 255, 255;
        --brw: 0px;
        --fnt: normal normal normal 14px/1.4em raleway;
        --brd: 43, 104, 156;
        --brdh: 61, 155, 233;
        --alpha-bgh: 1;
        --alpha-brd: 1;
        --alpha-brdh: 1;
        --alpha-txt: 1;
        --alpha-txth: 1;
        --boxShadowToggleOn-shd: none;
        --shd: 0 1px 4px rgba(0, 0, 0, 0.6);
      }
      #SOSP_CONTAINER_CUSTOM_ID {
        --brw: 0px;
        --brd: var(--color_15);
        --bg: var(--color_1);
        --rd: 0px;
        --shd: none;
        --gradient: none;
        --alpha-bg: 0;
        --alpha-brd: 1;
        --boxShadowToggleOn-shd: none;
        --bg-gradient: none;
      }
      #SOSP_CONTAINER_CUSTOM_ID {
        width: 291px;
      }
      [data-mode="hover"] #SOSP_CONTAINER_CUSTOM_ID {
        width: 291px;
      }
      [data-mesh-id="SOSP_CONTAINER_CUSTOM_IDinlineContent"] {
        height: auto;
        width: 291px;
      }
      [data-mesh-id="SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer"]
        > [id="comp-kjgrk29o"],
      [data-mesh-id="SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-kjgrk29o"] {
        position: relative;
        margin: 60px 0px 30px 0;
        left: 20px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer"]
        > [id="comp-kjgsh3cg"],
      [data-mesh-id="SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-kjgsh3cg"] {
        position: relative;
        margin: 0px 0px 25px 0;
        left: 20px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      #SOSP_CONTAINER_CUSTOM_ID {
        --shc-mutated-brightness: 128, 128, 128;
      }
      #comp-kjgrk29o {
        width: 250px;
        height: 254px;
      }
      .comp-kjgrk29o {
        --wix-direction: ltr;
        --profileLayout: 0;
        --pictureStyle: 0;
        --profileAlignment: 0;
        --profileImageSize: 90px;
        --badge-layout: 0;
        --badge-size: 0;
        --badge-corner-radius: 10;
        --border-width-1: 1;
        --pw-cover-photo-opacity: 60;
        --pw-cover-photo-opacity-desktop: 60;
        --profileWidgetHeight: 250px;
        --pw-button-border-width: 1;
        --pw-button-responsive-border-width: 1;
        --pw-button-text-font-size-mobile: 16;
        --pw-button-corner-radius: 0;
        --pw-button-responsive-corner-radius: 0;
        --vertical-pw-corner-radius: 0;
        --badge-font: normal normal normal 14px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --text-secondary-font: normal normal normal 14px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --pw-responsive-name-font: normal normal normal 28px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --pw-name-font-mobile: normal normal normal 20px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --title-font: normal normal normal 14px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --title-responsive-font: normal normal normal 20px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --title-mobile-font: normal normal normal 16px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --pw-responsive-ff-font: normal normal normal 16px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --pw-ff-font-mobile: normal normal normal 12px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --pw-responsive-button-font: normal normal normal 16px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --pw-button-font-mobile: normal normal normal 16px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --text-color-primary: 52, 63, 100;
        --text-color-primary-rgb: 52, 63, 100;
        --text-color-primary-opacity: 1;
        --text-color-secondary: 85, 85, 85;
        --text-color-secondary-rgb: 85, 85, 85;
        --text-color-secondary-opacity: 1;
        --button-opacity-and-color: 52, 63, 100;
        --button-opacity-and-color-rgb: 52, 63, 100;
        --button-opacity-and-color-opacity: 1;
        --box-color: 255, 255, 255;
        --box-color-rgb: 255, 255, 255;
        --box-color-opacity: 1;
        --border-color: 52, 63, 100;
        --border-color-rgb: 52, 63, 100;
        --border-color-opacity: 1;
        --pw-name-color-mobile: 52, 63, 100;
        --pw-name-color-mobile-rgb: 52, 63, 100;
        --pw-name-color-mobile-opacity: 1;
        --pw-responsive-name-color: 255, 255, 255;
        --pw-responsive-name-color-rgb: 255, 255, 255;
        --pw-responsive-name-color-opacity: 1;
        --title-color: 85, 85, 85;
        --title-color-rgb: 85, 85, 85;
        --title-color-opacity: 1;
        --title-responsive-color: 255, 255, 255;
        --title-responsive-color-rgb: 255, 255, 255;
        --title-responsive-color-opacity: 1;
        --title-mobile-color: 85, 85, 85;
        --title-mobile-color-rgb: 85, 85, 85;
        --title-mobile-color-opacity: 1;
        --pw-responsive-ff-color: 255, 255, 255;
        --pw-responsive-ff-color-rgb: 255, 255, 255;
        --pw-responsive-ff-color-opacity: 1;
        --pw-ff-color-mobile: 85, 85, 85;
        --pw-ff-color-mobile-rgb: 85, 85, 85;
        --pw-ff-color-mobile-opacity: 1;
        --pw-responsive-button-color: 255, 255, 255;
        --pw-responsive-button-color-rgb: 255, 255, 255;
        --pw-responsive-button-color-opacity: 1;
        --pw-responsive-button-color-mobile: 255, 255, 255;
        --pw-responsive-button-color-mobile-rgb: 255, 255, 255;
        --pw-responsive-button-color-mobile-opacity: 1;
        --pw-cover-color: 105, 113, 139;
        --pw-cover-color-rgb: 105, 113, 139;
        --pw-cover-color-opacity: 1;
        --pw-cover-color-desktop: 105, 113, 139;
        --pw-cover-color-desktop-rgb: 105, 113, 139;
        --pw-cover-color-desktop-opacity: 1;
        --pw-cover-color-mobile: 105, 113, 139;
        --pw-cover-color-mobile-rgb: 105, 113, 139;
        --pw-cover-color-mobile-opacity: 1;
        --pw-button-font-color: 255, 255, 255;
        --pw-button-font-color-rgb: 255, 255, 255;
        --pw-button-font-color-opacity: 1;
        --pw-button-responsive-font-color: 105, 113, 139;
        --pw-button-responsive-font-color-rgb: 105, 113, 139;
        --pw-button-responsive-font-color-opacity: 1;
        --pw-button-border-color: 52, 63, 100;
        --pw-button-border-color-rgb: 52, 63, 100;
        --pw-button-border-color-opacity: 1;
        --pw-button-responsive-border-color: 255, 255, 255;
        --pw-button-responsive-border-color-rgb: 255, 255, 255;
        --pw-button-responsive-border-color-opacity: 1;
        --text-primary-font: normal normal normal 14px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --text-primary-font-style: normal;
        --text-primary-font-variant: normal;
        --text-primary-font-weight: normal;
        --text-primary-font-size: 14px;
        --text-primary-font-line-height: 1.4em;
        --text-primary-font-family: avenir-lt-w01_35-light1475496, sans-serif;
        --text-primary-font-text-decoration: none;
        --button-font: normal normal normal 14px/17px helvetica-w01-light,
          sans-serif;
        --button-font-style: normal;
        --button-font-variant: normal;
        --button-font-weight: normal;
        --button-font-size: 14px;
        --button-font-line-height: 17px;
        --button-font-family: helvetica-w01-light, sans-serif;
        --button-font-text-decoration: none;
        --badge-font-style: normal;
        --badge-font-variant: normal;
        --badge-font-weight: normal;
        --badge-font-size: 14px;
        --badge-font-line-height: 1.4em;
        --badge-font-family: avenir-lt-w01_35-light1475496, sans-serif;
        --badge-font-text-decoration: none;
        --text-secondary-font-style: normal;
        --text-secondary-font-variant: normal;
        --text-secondary-font-weight: normal;
        --text-secondary-font-size: 14px;
        --text-secondary-font-line-height: 1.4em;
        --text-secondary-font-family: avenir-lt-w01_35-light1475496, sans-serif;
        --text-secondary-font-text-decoration: none;
        --pw-responsive-name-font-style: normal;
        --pw-responsive-name-font-variant: normal;
        --pw-responsive-name-font-weight: normal;
        --pw-responsive-name-font-size: 28px;
        --pw-responsive-name-font-line-height: 1.4em;
        --pw-responsive-name-font-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --pw-responsive-name-font-text-decoration: none;
        --pw-name-font-mobile-style: normal;
        --pw-name-font-mobile-variant: normal;
        --pw-name-font-mobile-weight: normal;
        --pw-name-font-mobile-size: 20px;
        --pw-name-font-mobile-line-height: 1.4em;
        --pw-name-font-mobile-family: avenir-lt-w01_35-light1475496, sans-serif;
        --pw-name-font-mobile-text-decoration: none;
        --title-font-style: normal;
        --title-font-variant: normal;
        --title-font-weight: normal;
        --title-font-size: 14px;
        --title-font-line-height: 1.4em;
        --title-font-family: avenir-lt-w01_35-light1475496, sans-serif;
        --title-font-text-decoration: none;
        --title-responsive-font-style: normal;
        --title-responsive-font-variant: normal;
        --title-responsive-font-weight: normal;
        --title-responsive-font-size: 20px;
        --title-responsive-font-line-height: 1.4em;
        --title-responsive-font-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --title-responsive-font-text-decoration: none;
        --title-mobile-font-style: normal;
        --title-mobile-font-variant: normal;
        --title-mobile-font-weight: normal;
        --title-mobile-font-size: 16px;
        --title-mobile-font-line-height: 1.4em;
        --title-mobile-font-family: avenir-lt-w01_35-light1475496, sans-serif;
        --title-mobile-font-text-decoration: none;
        --pw-responsive-ff-font-style: normal;
        --pw-responsive-ff-font-variant: normal;
        --pw-responsive-ff-font-weight: normal;
        --pw-responsive-ff-font-size: 16px;
        --pw-responsive-ff-font-line-height: 1.4em;
        --pw-responsive-ff-font-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --pw-responsive-ff-font-text-decoration: none;
        --pw-ff-font-mobile-style: normal;
        --pw-ff-font-mobile-variant: normal;
        --pw-ff-font-mobile-weight: normal;
        --pw-ff-font-mobile-size: 12px;
        --pw-ff-font-mobile-line-height: 1.4em;
        --pw-ff-font-mobile-family: avenir-lt-w01_35-light1475496, sans-serif;
        --pw-ff-font-mobile-text-decoration: none;
        --pw-responsive-button-font-style: normal;
        --pw-responsive-button-font-variant: normal;
        --pw-responsive-button-font-weight: normal;
        --pw-responsive-button-font-size: 16px;
        --pw-responsive-button-font-line-height: 1.4em;
        --pw-responsive-button-font-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --pw-responsive-button-font-text-decoration: none;
        --pw-button-font-mobile-style: normal;
        --pw-button-font-mobile-variant: normal;
        --pw-button-font-mobile-weight: normal;
        --pw-button-font-mobile-size: 16px;
        --pw-button-font-mobile-line-height: 1.4em;
        --pw-button-font-mobile-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --pw-button-font-mobile-text-decoration: none;
        --profileImageDisplay: block;
        --profileImageBorderRadius: 50%;
        --coverButtonsBoxMarginLeft: initial;
        --coverButtonsBoxPosition: initial;
        --coverButtonsBoxTop: initial;
        --coverButtonsBoxInsetInlineEnd: initial;
        --coverButtonsBoxMarginTop: 38px;
        --repositionModeButtonsFlexDirection: row;
        --repositionModeButtonsMarginInlineStart: 34px;
        --repositionModeButtonsMarginInlineEnd: initial;
        --coverPhotoContainerInsetInlineStart: 24px;
        --coverPhotoContainerInsetInlineEnd: initial;
        --contentLayoutPosition: relative;
        --contentLayoutFlexDirection: row;
        --contentLayoutAlignItems: initial;
        --contentLayoutPaddingInlineStart: 30px;
        --contentLayoutPaddingInlineEnd: 16px;
        --contentAlignItems: flex-end;
        --contentMarginBottom: 30px;
        --contentMarginInlineEnd: initial;
        --contentMarginInlineStart: 24px;
        --contentJustifyContent: space-between;
        --contentWidth: initial;
        --contentFlexDirection: row;
        --detailsAndPhotoFlexDirection: initial;
        --detailsAndPhotoAlignItems: initial;
        --memberDetailsPaddingInlineStart: initial;
        --memberDetailsPaddingInlineEnd: initial;
        --memberDetailsMarginTop: initial;
        --memberDetailsAlignItems: initial;
        --memberDetailsMaxWidth: 500px;
        --memberDetailsMarginBottom: initial;
        --profilePhotoMarginRight: initial;
        --profilePhotoMarginLeft: initial;
        --badgeListContainerJustifyContent: initial;
        --badgeListJustifyContent: center;
        --numbersBoxPosition: initial;
        --numbersBoxJustifyContent: flex-start;
        --nameContainerMaxWidth: initial;
        --nameContainerWidth: initial;
        --nameContainerJustifyContent: flex-start;
        --nameBoxTextMaxWidth: 470px;
        --titleContainerTextAlign: initial;
        --titleContainerDisplay: initial;
        --titleContainerFlexDirection: initial;
        --titleMaxWidth: 470px;
        --buttonsBoxPosition: initial;
        --buttonsBoxTop: initial;
        --buttonsBoxInsetInlineEnd: initial;
        --moreActionsMarginLeft: initial;
        --moreActionsMarginRight: -14px;
        --badgeFont: avenir-lt-w01_35-light1475496, sans-serif;
        --badgeIconHeight: 12px;
        --badgeIconWidth: initial;
        --badgeIconMaxWidth: 30px;
        --badgeIconMargin: 0 4px 0 0;
        --remainderWrapperHeight: 20px;
        --remainderWrapperMinWidth: 30px;
        --badgeWrapperHeight: 20px;
        --badgeWrapperWidth: initial;
        --badgeWrapperPadding: 0 8px;
        --badgeTextDisplay: initial;
        --badgeIconDisplay: flex;
        --badgeDefaultIconDisplay: none;
        --remainderBadgeColor: rgba(52, 63, 100, 1);
        --wix-color-1: 255, 255, 255;
        --wix-color-2: 213, 213, 213;
        --wix-color-3: 170, 170, 170;
        --wix-color-4: 128, 128, 128;
        --wix-color-5: 85, 85, 85;
        --wix-color-6: 190, 196, 216;
        --wix-color-7: 149, 156, 178;
        --wix-color-8: 105, 113, 139;
        --wix-color-9: 52, 63, 100;
        --wix-color-10: 26, 32, 50;
        --wix-color-11: 182, 232, 227;
        --wix-color-12: 141, 209, 202;
        --wix-color-13: 65, 186, 174;
        --wix-color-14: 43, 124, 116;
        --wix-color-15: 22, 62, 58;
        --wix-color-16: 184, 242, 231;
        --wix-color-17: 147, 230, 213;
        --wix-color-18: 61, 217, 186;
        --wix-color-19: 41, 145, 124;
        --wix-color-20: 20, 72, 62;
        --wix-color-21: 243, 229, 209;
        --wix-color-22: 232, 204, 167;
        --wix-color-23: 174, 153, 125;
        --wix-color-24: 116, 102, 84;
        --wix-color-25: 58, 51, 42;
        --wix-color-26: 255, 255, 255;
        --wix-color-27: 85, 85, 85;
        --wix-color-28: 213, 213, 213;
        --wix-color-29: 170, 170, 170;
        --wix-color-30: 128, 128, 128;
        --wix-color-31: 105, 113, 139;
        --wix-color-32: 85, 85, 85;
        --wix-color-33: 170, 170, 170;
        --wix-color-34: 255, 255, 255;
        --wix-color-35: 85, 85, 85;
        --wix-color-36: 85, 85, 85;
        --wix-color-37: 213, 213, 213;
        --wix-color-38: 105, 113, 139;
        --wix-color-39: 105, 113, 139;
        --wix-color-40: 255, 255, 255;
        --wix-color-41: 255, 255, 255;
        --wix-color-42: 105, 113, 139;
        --wix-color-43: 105, 113, 139;
        --wix-color-44: 170, 170, 170;
        --wix-color-45: 170, 170, 170;
        --wix-color-46: 255, 255, 255;
        --wix-color-47: 255, 255, 255;
        --wix-color-48: 105, 113, 139;
        --wix-color-49: 255, 255, 255;
        --wix-color-50: 105, 113, 139;
        --wix-color-51: 105, 113, 139;
        --wix-color-52: 255, 255, 255;
        --wix-color-53: 255, 255, 255;
        --wix-color-54: 170, 170, 170;
        --wix-color-55: 170, 170, 170;
        --wix-font-Title: normal normal normal 14px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Title-style: normal;
        --wix-font-Title-variant: normal;
        --wix-font-Title-weight: normal;
        --wix-font-Title-size: 14px;
        --wix-font-Title-line-height: 1.4em;
        --wix-font-Title-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Title-text-decoration: none;
        --wix-font-Menu: normal normal normal 16px/1.4em din-next-w01-light,
          sans-serif;
        --wix-font-Menu-style: normal;
        --wix-font-Menu-variant: normal;
        --wix-font-Menu-weight: normal;
        --wix-font-Menu-size: 16px;
        --wix-font-Menu-line-height: 1.4em;
        --wix-font-Menu-family: din-next-w01-light, sans-serif;
        --wix-font-Menu-text-decoration: none;
        --wix-font-Page-title: normal normal normal 26px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Page-title-style: normal;
        --wix-font-Page-title-variant: normal;
        --wix-font-Page-title-weight: normal;
        --wix-font-Page-title-size: 26px;
        --wix-font-Page-title-line-height: 1.4em;
        --wix-font-Page-title-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Page-title-text-decoration: none;
        --wix-font-Heading-XL: normal normal normal 70px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Heading-XL-style: normal;
        --wix-font-Heading-XL-variant: normal;
        --wix-font-Heading-XL-weight: normal;
        --wix-font-Heading-XL-size: 70px;
        --wix-font-Heading-XL-line-height: 1.4em;
        --wix-font-Heading-XL-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-XL-text-decoration: none;
        --wix-font-Heading-L: normal normal bold 50px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Heading-L-style: normal;
        --wix-font-Heading-L-variant: normal;
        --wix-font-Heading-L-weight: bold;
        --wix-font-Heading-L-size: 50px;
        --wix-font-Heading-L-line-height: 1.4em;
        --wix-font-Heading-L-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-L-text-decoration: none;
        --wix-font-Heading-M: normal normal normal 24px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Heading-M-style: normal;
        --wix-font-Heading-M-variant: normal;
        --wix-font-Heading-M-weight: normal;
        --wix-font-Heading-M-size: 24px;
        --wix-font-Heading-M-line-height: 1.4em;
        --wix-font-Heading-M-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-M-text-decoration: none;
        --wix-font-Heading-S: normal normal normal 22px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Heading-S-style: normal;
        --wix-font-Heading-S-variant: normal;
        --wix-font-Heading-S-weight: normal;
        --wix-font-Heading-S-size: 22px;
        --wix-font-Heading-S-line-height: 1.4em;
        --wix-font-Heading-S-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-S-text-decoration: none;
        --wix-font-Body-L: normal normal normal 16px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Body-L-style: normal;
        --wix-font-Body-L-variant: normal;
        --wix-font-Body-L-weight: normal;
        --wix-font-Body-L-size: 16px;
        --wix-font-Body-L-line-height: 1.4em;
        --wix-font-Body-L-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Body-L-text-decoration: none;
        --wix-font-Body-M: normal normal normal 14px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Body-M-style: normal;
        --wix-font-Body-M-variant: normal;
        --wix-font-Body-M-weight: normal;
        --wix-font-Body-M-size: 14px;
        --wix-font-Body-M-line-height: 1.4em;
        --wix-font-Body-M-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Body-M-text-decoration: none;
        --wix-font-Body-S: normal normal normal 12px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Body-S-style: normal;
        --wix-font-Body-S-variant: normal;
        --wix-font-Body-S-weight: normal;
        --wix-font-Body-S-size: 12px;
        --wix-font-Body-S-line-height: 1.4em;
        --wix-font-Body-S-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Body-S-text-decoration: none;
        --wix-font-Body-XS: normal normal normal 12px/1.4em din-next-w01-light,
          sans-serif;
        --wix-font-Body-XS-style: normal;
        --wix-font-Body-XS-variant: normal;
        --wix-font-Body-XS-weight: normal;
        --wix-font-Body-XS-size: 12px;
        --wix-font-Body-XS-line-height: 1.4em;
        --wix-font-Body-XS-family: din-next-w01-light, sans-serif;
        --wix-font-Body-XS-text-decoration: none;
        --wix-font-LIGHT: normal normal normal 12px/1.4em
          HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-style: normal;
        --wix-font-LIGHT-variant: normal;
        --wix-font-LIGHT-weight: normal;
        --wix-font-LIGHT-size: 12px;
        --wix-font-LIGHT-line-height: 1.4em;
        --wix-font-LIGHT-family: HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-text-decoration: none;
        --wix-font-MEDIUM: normal normal normal 12px/1.4em
          HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-style: normal;
        --wix-font-MEDIUM-variant: normal;
        --wix-font-MEDIUM-weight: normal;
        --wix-font-MEDIUM-size: 12px;
        --wix-font-MEDIUM-line-height: 1.4em;
        --wix-font-MEDIUM-family: HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-text-decoration: none;
        --wix-font-STRONG: normal normal normal 12px/1.4em
          HelveticaNeueW01-65Medi;
        --wix-font-STRONG-style: normal;
        --wix-font-STRONG-variant: normal;
        --wix-font-STRONG-weight: normal;
        --wix-font-STRONG-size: 12px;
        --wix-font-STRONG-line-height: 1.4em;
        --wix-font-STRONG-family: HelveticaNeueW01-65Medi;
        --wix-font-STRONG-text-decoration: none;
      }
      #comp-kjgsh3cg {
        --brw: 1px;
        --brd: var(--color_19);
        --shd: none;
        --rd: 0px;
        --sepw: 1px;
        --sep: var(--color_19);
        --itemBGColorTrans: background-color 0.4s ease 0s;
        --bgh: var(--color_11);
        --txth: var(--color_18);
        --alpha-txth: 1;
        --bgs: var(--color_11);
        --txts: var(--color_18);
        --alpha-txts: 1;
        --textSpacing: 20px;
        --bg: var(--color_11);
        --fnt: var(--font_8);
        --txt: var(--color_19);
        --alpha-txt: 1;
        --subMenuOpacityTrans: opacity 0.4s ease 0s;
        --SKINS_submenuBR: 0px;
        --SKINS_bgSubmenu: 255, 255, 255;
        --SKINS_fntSubmenu: var(--font_8);
        --SKINS_submenuMargin: 3px;
        --subItemAlterAlignPad: 10px;
        --separatorHeight: 1px;
        --dropdownMarginReal: 3px;
        --alpha-SKINS_bgSubmenu: 1;
        --alpha-bg: 1;
        --alpha-bgh: 1;
        --alpha-bgs: 1;
        --alpha-brd: 1;
        --alpha-sep: 1;
        --boxShadowToggleOn-shd: none;
      }
      #comp-kjgsh3cg {
        width: 250px;
        height: 250px;
      }
      #comp-kjgsh3cg {
        --item-height: 41px;
        --item-align: start;
        --sub-menu-open-direction-right: auto;
        --sub-menu-open-direction-left: 0;
        --separator-height-adjusted: 0px;
        --text-align: start;
        --direction: var(--wix-opt-in-direction, ltr);
        --item-direction: inherit;
        --sub-menu-item-direction: inherit;
      }
      #SITE_FOOTER {
        --bg: 17, 60, 102;
        --shd: none;
        --brwt: 0px;
        --brd: 47, 46, 46;
        --brwb: 0px;
        --bgctr: 255, 255, 255;
        --rd: 0px;
        --alpha-bg: 1;
        --alpha-bgctr: 0;
        --alpha-brd: 1;
        --boxShadowToggleOn-shd: none;
      }
      #SITE_FOOTER {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }
      [data-mesh-id="SITE_FOOTERinlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-imuzwbnd-rotated-wrapper"] > [id="comp-imuzwbnd"],
      [data-mesh-id="comp-imuzwbnd-rotated-wrapper"]
        > wix-interact-element
        > [id="comp-imuzwbnd"] {
        position: relative;
        left: 328px;
        top: 14px;
      }
      [data-mesh-id="comp-imuzsyc4-rotated-wrapper"] > [id="comp-imuzsyc4"],
      [data-mesh-id="comp-imuzsyc4-rotated-wrapper"]
        > wix-interact-element
        > [id="comp-imuzsyc4"] {
        position: relative;
        left: 641px;
        top: 13px;
      }
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > [id="comp-imomo2yb"],
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-imomo2yb"] {
        position: relative;
        margin: 15px 0px 7px calc((100% - 980px) * 0.5);
        left: 124px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > [id="comp-ilt416ak"],
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-ilt416ak"] {
        position: relative;
        margin: 1px 0px 35px calc((100% - 980px) * 0.5);
        left: 44px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > [id="comp-imk75o5m"],
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-imk75o5m"] {
        position: relative;
        margin: 15px 0px 7px calc((100% - 980px) * 0.5);
        left: 397px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-imuzwbnd-rotated-wrapper"] {
        position: static;
        height: 33px;
        width: 0;
        margin: 8px 0px 40px calc((100% - 980px) * 0.5);
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > [id="comp-imk772sx"],
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-imk772sx"] {
        position: relative;
        margin: 1px 0px 35px calc((100% - 980px) * 0.5);
        left: 409px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > [id="comp-iltg1qd3"],
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-iltg1qd3"] {
        position: relative;
        margin: 15px 0px 6px calc((100% - 980px) * 0.5);
        left: 715px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-imuzsyc4-rotated-wrapper"] {
        position: static;
        height: 30px;
        width: 0;
        margin: 0px 0px 51px calc((100% - 980px) * 0.5);
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > [id="comp-iltg4r5c"],
      [data-mesh-id="SITE_FOOTERinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-iltg4r5c"] {
        position: relative;
        margin: 1px 0px 35px calc((100% - 980px) * 0.5);
        left: 727px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      #SITE_FOOTER {
        --shc-mutated-brightness: 9, 30, 51;
        --bg-overlay-color: transparent;
        --bg-gradient: none;
      }
      #comp-imomo2yb {
        width: 76px;
        height: 22px;
      }
      #comp-imomo2yb {
        --item-size: 22px;
        --item-margin-block: 0;
        --item-margin-inline: 0px 5px;
        --item-display: inline-block;
        --direction: var(--wix-opt-in-direction, ltr);
        width: 76px;
        height: 22px;
      }
      #comp-ilt416ak {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-ilt416ak {
        width: 234px;
        height: auto;
      }
      #comp-ilt416ak {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-imk75o5m {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-imk75o5m {
        width: 197px;
        height: auto;
      }
      #comp-imk75o5m {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-imuzwbnd {
        --lnw: 1px;
        --brd: var(--color_17);
        --alpha-brd: 1;
      }
      #comp-imuzwbnd {
        width: 33px;
        height: 5px;
        transform: rotate(90deg);
        --comp-rotate-z: 90deg;
      }
      #comp-imuzwbnd {
        transform-origin: center 0.5px;
      }
      #comp-imk772sx {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-imk772sx {
        width: 172px;
        height: auto;
      }
      #comp-imk772sx {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-iltg1qd3 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-iltg1qd3 {
        width: 218px;
        height: auto;
      }
      #comp-iltg1qd3 {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-imuzsyc4 {
        --lnw: 1px;
        --brd: var(--color_17);
        --alpha-brd: 1;
      }
      #comp-imuzsyc4 {
        width: 30px;
        height: 5px;
        transform: rotate(90deg);
        --comp-rotate-z: 90deg;
      }
      #comp-imuzsyc4 {
        transform-origin: center 0.5px;
      }
      #comp-iltg4r5c {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-iltg4r5c {
        width: 190px;
        height: auto;
      }
      #comp-iltg4r5c {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-kemk5dij {
        width: 94px;
        height: 94px;
      }
    </style>
    <style id="css_iijbr">
      @font-face {
        font-display: swap;
        font-family: "avenir-lt-w01_85-heavy1475544";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/avenir-lt-w05_85-heavy.woff2") format("woff2");
        unicode-range: U+0100-012B, U+012E-0130, U+0132-0137, U+0139-0149,
          U+014C-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+0218-021B,
          U+02C9, U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0,
          U+1E9E, U+20B9-20BA, U+20BC-20BD, U+2113, U+2126, U+212E, U+2202,
          U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B,
          U+2248, U+2260, U+2264-2265, U+25CA, U+F8FF, U+FB01-FB02;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "avenir-lt-w01_85-heavy1475544";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/avenir-lt-w01_85-heavy1475544.woff2") format("woff2");
        unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-00FF, U+0131,
          U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+0237,
          U+02C6-02C7, U+02DA, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E,
          U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins-semibold";
        font-style: normal;
        font-weight: 700;
        src: url("/fonts/aDjpMND83pDErGXlVEr-Sfk_vArhqVIZ0nv9q090hN8.woff2")
          format("woff2");
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins-semibold";
        font-style: italic;
        font-weight: 700;
        src: url("/fonts/c4FPK8_hIFKoX59qcGwdChUOjZSKWg4xBWp_C_qQx0o.woff2")
          format("woff2");
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins-semibold";
        font-style: italic;
        font-weight: 400;
        src: url("/fonts/RbebACOccNN-5ixkDIVLjRUOjZSKWg4xBWp_C_qQx0o.woff2")
          format("woff2");
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins-semibold";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/9VWMTeb5jtXkNoTv949Npfk_vArhqVIZ0nv9q090hN8.woff2")
          format("woff2");
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins";
        font-style: italic;
        font-weight: 700;
        src: url("/fonts/pxiDyp8kv8JHgFVrJJLmy15VGdeOYktMqlap.woff2")
          format("woff2");
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
          U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
          U+A720-A7FF;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins";
        font-style: italic;
        font-weight: 400;
        src: url("/fonts/pxiGyp8kv8JHgFVrJJLufntAOvWDSHFF.woff2")
          format("woff2");
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
          U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
          U+A720-A7FF;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/pxiEyp8kv8JHgFVrJJnecnFHGPezSQ.woff2") format("woff2");
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
          U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
          U+A720-A7FF;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins";
        font-style: normal;
        font-weight: 700;
        src: url("/fonts/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2")
          format("woff2");
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
          U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
          U+A720-A7FF;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins";
        font-style: italic;
        font-weight: 700;
        src: url("/fonts/pxiDyp8kv8JHgFVrJJLmy15VF9eOYktMqg.woff2")
          format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
          U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins";
        font-style: italic;
        font-weight: 400;
        src: url("/fonts/pxiGyp8kv8JHgFVrJJLucHtAOvWDSA.woff2") format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
          U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2") format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
          U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "poppins";
        font-style: normal;
        font-weight: 700;
        src: url("/fonts/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2") format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
          U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "avenir-lt-w01_35-light1475496";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/avenir-lt-w05_35-light.woff2") format("woff2");
        unicode-range: U+0100-012B, U+012E-0130, U+0132-0137, U+0139-0149,
          U+014C-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+0218-021B,
          U+02C9, U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0,
          U+1E9E, U+20B9-20BA, U+20BC-20BD, U+2113, U+2126, U+212E, U+2202,
          U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B,
          U+2248, U+2260, U+2264-2265, U+25CA, U+F8FF, U+FB01-FB02;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "avenir-lt-w01_35-light1475496";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/avenir-lt-w01_35-light1475496.woff2") format("woff2");
        unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-00FF, U+0131,
          U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+0237,
          U+02C6-02C7, U+02DA, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E,
          U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "helvetica-w01-light";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/helvetica-w02-light.woff2") format("woff2");
        unicode-range: U+0100-012B, U+012E-0137, U+0139-0149, U+014C-0151,
          U+0154-015F, U+0162-0177, U+0179-017C, U+0218-021B, U+0237, U+02C7,
          U+02C9, U+02D8-02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0, U+2044,
          U+2113, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215,
          U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA,
          U+E002, U+E004, U+E006, U+E008-E009, U+E00D, U+E00F, U+E011, U+E013,
          U+E015, U+E017, U+E01A, U+FB01-FB02;
        font-display: swap;
      }
      @font-face {
        font-display: swap;
        font-family: "helvetica-w01-light";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/helvetica-w01-light.woff2") format("woff2");
        unicode-range: U+000D, U+0020-007E, U+00A0-00FF, U+0152-0153,
          U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6, U+02DC, U+2013-2014,
          U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A,
          U+20AC, U+2122;
        font-display: swap;
      }
      #iijbr {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }
      #masterPage {
        --pinned-layers-in-page: 0;
      }
      [data-mesh-id="ContaineriijbrinlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="ContaineriijbrinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 40px;
        grid-template-rows: repeat(2, min-content) 1fr;
        grid-template-columns: 100%;
        padding-bottom: 0px;
        box-sizing: border-box;
      }
      ,
   
      [data-mesh-id="ContaineriijbrinlineContent-gridContainer"]
        > [id="comp-lc96qudb"],
      [data-mesh-id="ContaineriijbrinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lc96qudb"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="ContaineriijbrinlineContent-gridContainer"]
        > [id="comp-lc96qudc"],
      [data-mesh-id="ContaineriijbrinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lc96qudc"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-lc96quda {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }
      
      [data-mesh-id="comp-lc96qudainlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        margin-top: -3px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-lc96qudainlineContent-gridContainer"]
        > [id="comp-laryd934"],
      [data-mesh-id="comp-lc96qudainlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-laryd934"] {
        position: relative;
        margin: 0px 0px 0px calc((100% - 980px) * 0.5);
        left: -219px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-laryd934 {
        --shd: 0 0 0 rgba(0, 0, 0, 0.6);
        --dotsColor: 255, 255, 255;
        --arrowColor: 255, 255, 255;
        --rd: 0px;
        --brw: 0px;
        --brd: var(--color_11);
        --alpha-brd: 1;
        --alpha-dotsColor: 1;
        --alpha-arrowColor: 1;
      }
      #comp-laryd934 {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
        height: 609px;
      }
      #comp-laryd985 {
        width: 1419px;
      }
      [data-mesh-id="comp-laryd985inlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="comp-laryd985inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 609px;
        grid-template-rows: repeat(2, min-content) 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-laryd985inlineContent-gridContainer"]
        > [id="comp-lb3ibpd5"],
      [data-mesh-id="comp-laryd985inlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lb3ibpd5"] {
        position: relative;
        margin: 154px 0px 31px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-laryd985inlineContent-gridContainer"]
        > [id="comp-laryd988"],
      [data-mesh-id="comp-laryd985inlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-laryd988"] {
        position: relative;
        margin: 0px 0px 11px calc((100% - 980px) * 0.5);
        left: 65px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-laryd985inlineContent-gridContainer"]
        > [id="comp-larzfavx"],
      [data-mesh-id="comp-laryd985inlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-larzfavx"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 980px) * 0.5);
        left: 370px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
      }
      /* Slide 2 Styles */
      #comp-laryd985-slide2 {
        width: 1419px;
      }
      [data-mesh-id="comp-laryd985-slide2-inlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="comp-laryd985-slide2-inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 609px;
        grid-template-rows: repeat(2, min-content) 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-laryd985-slide2-inlineContent-gridContainer"]
        > [id="comp-lb3ibpd5-slide2"],
      [data-mesh-id="comp-laryd985-slide2-inlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lb3ibpd5-slide2"] {
        position: relative;
        margin: 154px 0px 31px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-laryd985-slide2-inlineContent-gridContainer"]
        > [id="comp-laryd988-slide2"],
      [data-mesh-id="comp-laryd985-slide2-inlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-laryd988-slide2"] {
        position: relative;
        margin: 0px 0px 11px calc((100% - 980px) * 0.5);
        left: 65px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-laryd985-slide2-inlineContent-gridContainer"]
        > [id="comp-larzfavx-slide2"],
      [data-mesh-id="comp-laryd985-slide2-inlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-larzfavx-slide2"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 980px) * 0.5);
        left: 370px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-lb3ibpd5-slide2 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-lb3ibpd5-slide2 {
        width: 209px;
        height: auto;
      }
      #comp-laryd988-slide2 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-laryd988-slide2:not([data-motion-enter="done"]) {
          opacity: 0;
        }
      }
      #comp-laryd988-slide2 {
        width: 849px;
        height: auto;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-larzfavx-slide2:not([data-motion-enter="done"]) {
          opacity: 0;
        }
      }
      #comp-larzfavx-slide2 {
        width: 239px;
        height: 49px;
      }
      /* Slide 3 Styles */
      #comp-laryd985-slide3 {
        width: 1419px;
      }
      [data-mesh-id="comp-laryd985-slide3-inlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="comp-laryd985-slide3-inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 609px;
        grid-template-rows: repeat(2, min-content) 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-laryd985-slide3-inlineContent-gridContainer"]
        > [id="comp-lb3ibpd5-slide3"],
      [data-mesh-id="comp-laryd985-slide3-inlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lb3ibpd5-slide3"] {
        position: relative;
        margin: 154px 0px 31px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-laryd985-slide3-inlineContent-gridContainer"]
        > [id="comp-laryd988-slide3"],
      [data-mesh-id="comp-laryd985-slide3-inlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-laryd988-slide3"] {
        position: relative;
        margin: 0px 0px 11px calc((100% - 980px) * 0.5);
        left: 65px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-laryd985-slide3-inlineContent-gridContainer"]
        > [id="comp-larzfavx-slide3"],
      [data-mesh-id="comp-laryd985-slide3-inlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-larzfavx-slide3"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 980px) * 0.5);
        left: 370px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-lb3ibpd5-slide3 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-lb3ibpd5-slide3 {
        width: 209px;
        height: auto;
      }
      #comp-laryd988-slide3 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-laryd988-slide3:not([data-motion-enter="done"]) {
          opacity: 0;
        }
      }
      #comp-laryd988-slide3 {
        width: 849px;
        height: auto;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-larzfavx-slide3:not([data-motion-enter="done"]) {
          opacity: 0;
        }
      }
      #comp-larzfavx-slide3 {
        width: 239px;
        height: 49px;
      }
      #comp-lb3ibpd5 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-lb3ibpd5 {
        width: 209px;
        height: auto;
      }
      #comp-laryd988 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-laryd988:not([data-motion-enter="done"]) {
          opacity: 0;
        }
      }
      #comp-laryd988 {
        width: 849px;
        height: auto;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-larzfavx:not([data-motion-enter="done"]) {
          opacity: 0;
        }
      }
      #comp-larzfavx {
        width: 239px;
        height: 49px;
      }
      #comp-laryd97p {
        width: 1459px;
      }
      [data-mesh-id="comp-laryd97pinlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="comp-laryd97pinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 609px;
        grid-template-rows: repeat(2, min-content) 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-laryd97pinlineContent-gridContainer"]
        > [id="comp-laryd97v"],
      [data-mesh-id="comp-laryd97pinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-laryd97v"] {
        position: relative;
        margin: 185px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-laryd97pinlineContent-gridContainer"]
        > [id="comp-larzim1q"],
      [data-mesh-id="comp-laryd97pinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-larzim1q"] {
        position: relative;
        margin: 0px 0px 29px calc((100% - 980px) * 0.5);
        left: 1px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-laryd97pinlineContent-gridContainer"]
        > [id="comp-larzim54"],
      [data-mesh-id="comp-laryd97pinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-larzim54"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 980px) * 0.5);
        left: 683px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-laryd97v {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-laryd97v {
        width: 209px;
        height: auto;
      }
      #comp-larzim1q {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-larzim1q:not([data-motion-enter="done"]) {
          opacity: 0;
        }
      }
      #comp-larzim1q {
        width: 898px;
        height: auto;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-larzim54:not([data-motion-enter="done"]) {
          opacity: 0;
        }
      }
      #comp-larzim54 {
        width: 239px;
        height: 49px;
      }
      #comp-laryd98c {
        width: 1459px;
      }
      [data-mesh-id="comp-laryd98cinlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="comp-laryd98cinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 609px;
        grid-template-rows: repeat(2, min-content) 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-laryd98cinlineContent-gridContainer"]
        > [id="comp-lb3iccls"],
      [data-mesh-id="comp-laryd98cinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lb3iccls"] {
        position: relative;
        margin: 179px 0px 0 calc((100% - 980px) * 0.5);
        left: 1px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-laryd98cinlineContent-gridContainer"]
        > [id="comp-larz9j8n"],
      [data-mesh-id="comp-laryd98cinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-larz9j8n"] {
        position: relative;
        margin: 0px 0px 49px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-laryd98cinlineContent-gridContainer"]
        > [id="comp-larz9jc5"],
      [data-mesh-id="comp-laryd98cinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-larz9jc5"] {
        position: relative;
        margin: 0px 0px 10px calc((100% - 980px) * 0.5);
        left: 727px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-lb3iccls {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-lb3iccls {
        width: 209px;
        height: auto;
      }
      #comp-larz9j8n {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-larz9j8n:not([data-motion-enter="done"]) {
          opacity: 0;
        }
      }
      #comp-larz9j8n {
        width: 931px;
        height: auto;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-larz9jc5:not([data-motion-enter="done"]) {
          opacity: 0;
        }
      }
      #comp-larz9jc5 {
        width: 239px;
        height: 49px;
      }
      #comp-lc96qudb {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }
      [data-mesh-id="comp-lc96qudbinlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="comp-lc96qudbinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-lc96qudbinlineContent-gridContainer"]
        > [id="comp-lamqvuzb"],
      [data-mesh-id="comp-lc96qudbinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lamqvuzb"] {
        position: relative;
        margin: 0px 0px 0px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-lamqvuzb {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 980px;
      }
      [data-mesh-id="comp-lamqvv0yinlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="comp-lamqvv0yinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-lamqvv0yinlineContent-gridContainer"]
        > [id="comp-lamry8wk"],
      [data-mesh-id="comp-lamqvv0yinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lamry8wk"] {
        position: relative;
        margin: 60px 0px 53px calc((100% - 980px) * 0.5);
        left: 1px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-lamqvv0yinlineContent-gridContainer"]
        > [id="comp-lamqvxen"],
      [data-mesh-id="comp-lamqvv0yinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lamqvxen"] {
        position: relative;
        margin: 0px 0px 62px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-lamqvv0y {
        width: 980px;
      }
      #comp-lamry8wk {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-lamry8wk {
        width: 980px;
        height: auto;
      }
      #comp-lamqvxen {
        --brw: 0px;
        --brd: 50, 65, 88;
        --bg: 61, 155, 233;
        --rd: 0px;
        --shd: none;
        --gradient: none;
        --alpha-brd: 0;
        --alpha-bg: 0;
        --boxShadowToggleOn-shd: none;
        --bg-gradient: none;
      }
      #comp-lamqvxen {
        width: 980px;
      }
      [id^="comp-lamqvxfv1__"]:not(.is-animating) {
        transition: all 0.4s ease-in-out 0s, visibility 0s;
        --transition: all 0.4s ease-in-out 0s, visibility 0s;
      }
      [id^="comp-lamqvxfv1__"]:not(.is-animating) {
        transform-origin: 50% 50%;
      }
      [id^="comp-lamqvxfv1__"]:hover {
        z-index: 1;
        transform: translateX(0) translateY(0) scaleX(1.1) scaleY(1.1)
          rotate(0deg) skewX(0deg) skewY(0deg);
        --comp-rotate-z: 0deg;
      }
      [id^="comp-lamqvxfv1__"] {
        width: 277px;
      }
      [data-mesh-id^="comp-lamqvxfv1__"][data-mesh-id$="inlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id^="comp-lamqvxfv1__"][data-mesh-id$="inlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id^="comp-lamqvxfv1__"] > [id^="comp-lamqvxg32__"],
      [data-mesh-id^="comp-lamqvxfv1__"]
        > wix-interact-element
        > [id^="comp-lamqvxg32__"] {
        position: relative;
        margin: 191px 0px 0px 0;
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [id^="comp-lamqvxfv1__"]:hover [id^="comp-lamqvxg32__"] {
        --color: var(--color_32);
        --alpha-color: 1;
      }
      [id^="comp-lamqvxg32__"] {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      [id^="comp-lamqvxg32__"]:not(.is-animating) {
        transition: all 0.4s ease-in-out 0s, visibility 0s;
        --transition: all 0.4s ease-in-out 0s, visibility 0s;
      }
      [id^="comp-lamqvxg32__"]:not(.is-animating) :not(.is-animating) {
        transition: all 0.4s ease-in-out 0s, visibility 0s;
        --transition: all 0.4s ease-in-out 0s, visibility 0s;
      }
      [id^="comp-lamqvxfv1__"]:hover [id^="comp-lamqvxg32__"],
      [id^="comp-lamqvxfv1__"]:hover
        [id^="comp-lamqvxg32__"]
        :not(.is-animating) {
        transition: all 0.4s ease-in-out 0s, visibility 0s;
        --transition: all 0.4s ease-in-out 0s, visibility 0s;
      }
      [id^="comp-lamqvxfv1__"]:hover [id^="comp-lamqvxg32__"],
      [id^="comp-lamqvxfv1__"]:hover
        [id^="comp-lamqvxg32__"]
        :not(.is-animating)
        :not(.is-animating) {
        transition: all 0.4s ease-in-out 0s, visibility 0s;
        --transition: all 0.4s ease-in-out 0s, visibility 0s;
      }
      [id^="comp-lamqvxg32__"]:not(.is-animating) {
        transform-origin: 50% 50%;
      }
      [id^="comp-lamqvxfv1__"]:hover [id^="comp-lamqvxg32__"] {
        transform: translateX(0) translateY(0) scaleX(1.1) scaleY(1.1)
          rotate(0deg) skewX(0deg) skewY(0deg);
        --comp-rotate-z: 0deg;
      }
      [id^="comp-lamqvxg32__"] {
        width: 277px;
        height: auto;
      }
      #comp-lc96qudc {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }
      [data-mesh-id="comp-lc96qudcinlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="comp-lc96qudcinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-lc96qudcinlineContent-gridContainer"]
        > [id="comp-lamrzcyn"],
      [data-mesh-id="comp-lc96qudcinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lamrzcyn"] {
        position: relative;
        margin: 0px 0px 0px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-lamrzcyn {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 980px;
      }
      [data-mesh-id="comp-lamrzczoinlineContent"] {
        height: auto;
        width: 100%;
      }
      [data-mesh-id="comp-lamrzczoinlineContent-gridContainer"] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: repeat(2, min-content) 1fr;
        grid-template-columns: 100%;
      }
      [data-mesh-id="comp-lamrzczoinlineContent-gridContainer"]
        > [id="comp-lamrzn37"],
      [data-mesh-id="comp-lamrzczoinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lamrzn37"] {
        position: relative;
        margin: 0px 0px 33px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-lamrzczoinlineContent-gridContainer"]
        > [id="comp-lamrzn46"],
      [data-mesh-id="comp-lamrzczoinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lamrzn46"] {
        position: relative;
        margin: 0px 0px 40px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }
      [data-mesh-id="comp-lamrzczoinlineContent-gridContainer"]
        > [id="comp-lams11d3"],
      [data-mesh-id="comp-lamrzczoinlineContent-gridContainer"]
        > wix-interact-element
        > [id="comp-lams11d3"] {
        position: relative;
        margin: 0px 0px 60px calc((100% - 980px) * 0.5);
        left: 379px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
      }
      #comp-lamrzczo {
        width: 980px;
      }
      #comp-lamrzn37 {
        --backgroundColor: 0, 0, 0;
        --alpha-backgroundColor: 0;
        --blendMode: normal;
        --textShadow: 0px 0px transparent;
        --textOutline: 0px 0px transparent;
      }
      #comp-lamrzn37 {
        width: 980px;
        height: auto;
      }
      #comp-lamrzn46 {
        width: 980px;
        height: 332px;
      }
      #comp-lams11d3 {
        --rd: 0px;
        --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
        --shd: none;
        --fnt: normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        --trans2: color 0.4s ease 0s;
        --txt: var(--color_32);
        --brw: 1px;
        --bg: 17, 60, 102;
        --brd: 29, 29, 54;
        --bgh: 92, 90, 219;
        --brdh: 255, 255, 255;
        --txth: 255, 255, 255;
        --bgd: 204, 204, 204;
        --alpha-bgd: 1;
        --brdd: 204, 204, 204;
        --alpha-brdd: 1;
        --txtd: 255, 255, 255;
        --alpha-txtd: 1;
        --alpha-bg: 1;
        --alpha-bgh: 0;
        --alpha-brd: 1;
        --alpha-brdh: 1;
        --alpha-txt: 1;
        --alpha-txth: 1;
        --boxShadowToggleOn-shd: none;
      }
      @media (prefers-reduced-motion: no-preference) {
        #comp-lams11d3:not([data-motion-enter="done"]) {
          opacity: var(--comp-opacity, 1);
        }
      }
      #comp-lams11d3 {
        width: 222px;
        height: 46px;
      }
    </style>
    <style id="stylableCss_iijbr">
      /* END STYLABLE DIRECTIVE RULES */

      #comp-larzfavx .style-las8o0wn__root {
        -st-extends: StylableButton;
        transition: all 0.2s ease, visibility 0s;
        box-shadow: 0 1px 0 rgba(14, 24, 33, 0);
        border-radius: 80px;
        background: #113c66;
      }

      /* START STYLABLE DIRECTIVE RULES */

      #comp-larzfavx .style-las8o0wn__root:hover {
        box-shadow: 0 1px 0 rgba(14, 24, 33, 0);
        background: #e8cca7;
      }

      #comp-larzfavx
        .style-las8o0wn__root:hover
        .StylableButton2545352419__label {
        letter-spacing: 0em;
        color: #343f64;
      }

      #comp-larzfavx .style-las8o0wn__root:disabled {
        background: #e2e2e2;
      }

      #comp-larzfavx
        .style-las8o0wn__root:disabled
        .StylableButton2545352419__label {
        color: #8f8f8f;
      }

      #comp-larzfavx
        .style-las8o0wn__root:disabled
        .StylableButton2545352419__icon {
        fill: #8f8f8f;
      }

      #comp-larzfavx
        .style-las8o0wn__root
        .StylableButton2545352419__container {
        transition: inherit;
        flex-direction: row;
        justify-content: center;
      }

      #comp-larzfavx .style-las8o0wn__root .StylableButton2545352419__label {
        transition: inherit;
        font-family: poppins-semibold, poppins, sans-serif;
        font-weight: 700;
        letter-spacing: 0em;
        color: #ffffff;
        font-size: 20px;
      }

      #comp-larzfavx .style-las8o0wn__root .StylableButton2545352419__icon {
        transition: inherit;
        fill: #000000;
        width: 11px;
        height: 11px;
        display: none;
      }

      @media screen and (min-width: 1px) and (max-width: 0px) {
        #comp-larzfavx .style-las8o0wn__root .StylableButton2545352419__label {
          font-size: 16px;
        }
      } /* END STYLABLE DIRECTIVE RULES */

      /* Slide 2 Button Styles - Same as Slide 1 */
      #comp-larzfavx-slide2 .style-las8o0wn__root {
        -st-extends: StylableButton;
        transition: all 0.2s ease, visibility 0s;
        box-shadow: 0 1px 0 rgba(14, 24, 33, 0);
        border-radius: 80px;
        background: #113c66;
      }

      /* START STYLABLE DIRECTIVE RULES */

      #comp-larzfavx-slide2 .style-las8o0wn__root:hover {
        box-shadow: 0 1px 0 rgba(14, 24, 33, 0);
        background: #e8cca7;
      }

      #comp-larzfavx-slide2
        .style-las8o0wn__root:hover
        .StylableButton2545352419__label {
        letter-spacing: 0em;
        color: #343f64;
      }

      #comp-larzfavx-slide2 .style-las8o0wn__root:disabled {
        background: #e2e2e2;
      }

      #comp-larzfavx-slide2
        .style-las8o0wn__root:disabled
        .StylableButton2545352419__label {
        color: #8f8f8f;
      }

      #comp-larzfavx-slide2
        .style-las8o0wn__root:disabled
        .StylableButton2545352419__icon {
        fill: #8f8f8f;
      }

      #comp-larzfavx-slide2
        .style-las8o0wn__root
        .StylableButton2545352419__container {
        transition: inherit;
        flex-direction: row;
        justify-content: center;
      }

      #comp-larzfavx-slide2 .style-las8o0wn__root .StylableButton2545352419__label {
        transition: inherit;
        font-family: poppins-semibold, poppins, sans-serif;
        font-weight: 700;
        letter-spacing: 0em;
        color: #ffffff;
        font-size: 20px;
      }

      #comp-larzfavx-slide2 .style-las8o0wn__root .StylableButton2545352419__icon {
        transition: inherit;
        fill: #000000;
        width: 11px;
        height: 11px;
        display: none;
      }

      @media screen and (min-width: 1px) and (max-width: 0px) {
        #comp-larzfavx-slide2 .style-las8o0wn__root .StylableButton2545352419__label {
          font-size: 16px;
        }
      } /* END STYLABLE DIRECTIVE RULES */

      /* Slide 3 Button Styles - Same as Slide 1 and 2 */
      #comp-larzfavx-slide3 .style-las8o0wn__root {
        -st-extends: StylableButton;
        transition: all 0.2s ease, visibility 0s;
        box-shadow: 0 1px 0 rgba(14, 24, 33, 0);
        border-radius: 80px;
        background: #113c66;
      }

      /* START STYLABLE DIRECTIVE RULES */

      #comp-larzfavx-slide3 .style-las8o0wn__root:hover {
        box-shadow: 0 1px 0 rgba(14, 24, 33, 0);
        background: #e8cca7;
      }

      #comp-larzfavx-slide3
        .style-las8o0wn__root:hover
        .StylableButton2545352419__label {
        letter-spacing: 0em;
        color: #343f64;
      }

      #comp-larzfavx-slide3 .style-las8o0wn__root:disabled {
        background: #e2e2e2;
      }

      #comp-larzfavx-slide3
        .style-las8o0wn__root:disabled
        .StylableButton2545352419__label {
        color: #8f8f8f;
      }

      #comp-larzfavx-slide3
        .style-las8o0wn__root:disabled
        .StylableButton2545352419__icon {
        fill: #8f8f8f;
      }

      #comp-larzfavx-slide3
        .style-las8o0wn__root
        .StylableButton2545352419__container {
        transition: inherit;
        flex-direction: row;
        justify-content: center;
      }

      #comp-larzfavx-slide3 .style-las8o0wn__root .StylableButton2545352419__label {
        transition: inherit;
        font-family: poppins-semibold, poppins, sans-serif;
        font-weight: 700;
        letter-spacing: 0em;
        color: #ffffff;
        font-size: 20px;
      }

      #comp-larzfavx-slide3 .style-las8o0wn__root .StylableButton2545352419__icon {
        transition: inherit;
        fill: #000000;
        width: 11px;
        height: 11px;
        display: none;
      }

      @media screen and (min-width: 1px) and (max-width: 0px) {
        #comp-larzfavx-slide3 .style-las8o0wn__root .StylableButton2545352419__label {
          font-size: 16px;
        }
      } /* END STYLABLE DIRECTIVE RULES */

      #comp-larzim54 .style-las8uxpk__root {
        -st-extends: StylableButton;
        transition: all 0.2s ease, visibility 0s;
        box-shadow: 0 1px 0 rgba(14, 24, 33, 0);
        border-radius: 80px;
        background: #113c66;
      }

      /* START STYLABLE DIRECTIVE RULES */

      #comp-larzim54 .style-las8uxpk__root:hover {
        box-shadow: 0 1px 0 rgba(14, 24, 33, 0);
        background: #08341c;
      }

      #comp-larzim54
        .style-las8uxpk__root:hover
        .StylableButton2545352419__label {
        letter-spacing: 0em;
      }

      #comp-larzim54 .style-las8uxpk__root:disabled {
        background: #e2e2e2;
      }

      #comp-larzim54
        .style-las8uxpk__root:disabled
        .StylableButton2545352419__label {
        color: #8f8f8f;
      }

      #comp-larzim54
        .style-las8uxpk__root:disabled
        .StylableButton2545352419__icon {
        fill: #8f8f8f;
      }

      #comp-larzim54
        .style-las8uxpk__root
        .StylableButton2545352419__container {
        transition: inherit;
        flex-direction: row;
        justify-content: center;
      }

      #comp-larzim54 .style-las8uxpk__root .StylableButton2545352419__label {
        transition: inherit;
        font-family: poppins-semibold, poppins, sans-serif;
        font-weight: 700;
        letter-spacing: 0em;
        color: #ffffff;
        font-size: 20px;
      }

      #comp-larzim54 .style-las8uxpk__root .StylableButton2545352419__icon {
        transition: inherit;
        fill: #000000;
        width: 11px;
        height: 11px;
        display: none;
      }

      @media screen and (min-width: 1px) and (max-width: 0px) {
        #comp-larzim54 .style-las8uxpk__root .StylableButton2545352419__label {
          font-size: 16px;
        }
      } /* END STYLABLE DIRECTIVE RULES */

      #comp-larz9jc5 .style-las8x6mx__root {
        -st-extends: StylableButton;
        transition: all 0.2s ease, visibility 0s;
        box-shadow: 0 1px 0 rgba(14, 24, 33, 0);
        border-radius: 80px;
        background: #113c66;
      }

      /* START STYLABLE DIRECTIVE RULES */

      #comp-larz9jc5 .style-las8x6mx__root:hover {
        box-shadow: 0 1px 0 rgba(14, 24, 33, 0);
        background: #08341c;
      }

      #comp-larz9jc5
        .style-las8x6mx__root:hover
        .StylableButton2545352419__label {
        letter-spacing: 0em;
      }

      #comp-larz9jc5 .style-las8x6mx__root:disabled {
        background: #e2e2e2;
      }

      #comp-larz9jc5
        .style-las8x6mx__root:disabled
        .StylableButton2545352419__label {
        color: #8f8f8f;
      }

      #comp-larz9jc5
        .style-las8x6mx__root:disabled
        .StylableButton2545352419__icon {
        fill: #8f8f8f;
      }

      #comp-larz9jc5
        .style-las8x6mx__root
        .StylableButton2545352419__container {
        transition: inherit;
        flex-direction: row;
        justify-content: center;
      }

      #comp-larz9jc5 .style-las8x6mx__root .StylableButton2545352419__label {
        transition: inherit;
        font-family: poppins-semibold, poppins, sans-serif;
        font-weight: 700;
        letter-spacing: 0em;
        color: #ffffff;
        font-size: 20px;
      }

      #comp-larz9jc5 .style-las8x6mx__root .StylableButton2545352419__icon {
        transition: inherit;
        fill: #000000;
        width: 11px;
        height: 11px;
        display: none;
      }

      @media screen and (min-width: 1px) and (max-width: 0px) {
        #comp-larz9jc5 .style-las8x6mx__root .StylableButton2545352419__label {
          font-size: 16px;
        }
      }
    </style>
    <style id="compCssMappers_iijbr">
      #iijbr {
        width: auto;
        min-height: 40px;
      }
      #pageBackground_iijbr {
        --bg-position: absolute;
        --bg-overlay-color: rgb(255, 255, 255);
        --bg-gradient: none;
      }
      #comp-lc96quda {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        min-width: 980px;
      }
      #comp-laryd934 {
        height: 609px;
        --nav-dot-direction: ltr;
        --nav-dot-section-display: none;
        --nav-dot-section-bottom-margin: 50px;
        --nav-dot-margin: 6px;
        --nav-dot-size: 6px;
        --nav-dot-size-selected: 9px;
        --nav-button-prev-self-justify: start;
        --nav-button-next-self-justify: end;
        --nav-button-prev-scaleX-transform: 1;
        --nav-button-next-scaleX-transform: -1;
        --nav-button-prev-circle-scaleX-transform: -1;
        --nav-button-next-circle-scaleX-transform: 1;
        --nav-button-width: 25px;
        --nav-button-offset: 100px;
        --nav-button-display: block;
        --slides-overflow: clip;
        --transition-duration: 1000ms;
      }
      #comp-laryd985 {
        position: absolute;
        width: 100%;
        height: 100%;
        --fill-layer-image-opacity: 1;
        --bg-overlay-color: rgb(248, 179, 137);
        --bg-gradient: none;
      }
      #comp-laryd985-slide2 {
        position: absolute;
        width: 100%;
        height: 100%;
        --fill-layer-image-opacity: 1;
        --bg-overlay-color: rgb(204, 200, 241);
        --bg-gradient: none;
      }
      #comp-lb3ibpd5 {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-laryd988 {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-laryd97p {
        position: absolute;
        width: 100%;
        height: 100%;
        --fill-layer-image-opacity: 1;
        --bg-overlay-color: rgb(204, 200, 241);
        --bg-gradient: none;
      }
      #comp-laryd97v {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-larzim1q {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-laryd98c {
        position: absolute;
        width: 100%;
        height: 100%;
        --fill-layer-image-opacity: 1;
        --bg-overlay-color: rgb(123, 160, 165);
        --bg-gradient: none;
      }
      #comp-lb3iccls {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-larz9j8n {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-lc96qudb {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        min-width: 980px;
      }
      #comp-lamqvuzb {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        --padding: 0px;
        --margin: 0px;
        min-width: 980px;
        --firstChildMarginTop: -1px;
        --lastChildMarginBottom: -1px;
        --direction: ltr;
      }
      #comp-lamqvv0y {
        --bg-overlay-color: rgb(255, 255, 255);
        --bg-gradient: none;
        width: 100%;
        --column-width: 980px;
        --column-flex: 980;
      }
      #comp-lamry8wk {
        --text-direction: var(--wix-opt-in-direction);
      }
      #comp-lamqvxen {
        --direction: var(--wix-opt-in-direction);
        --justify-content: space-between;
        --item-margin: 17px 0px;
        --margin-top: -17px;
        --margin-bottom: -17px;
        --margin-inline-start: 0px;
        --margin-inline-end: 0px;
      }
      [id^="comp-lamqvxfv1__"] {
        --fill-layer-image-opacity: 1;
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        border-width: 0 0 0 0;
        border-style: solid solid solid solid;
        border-color: rgba(176, 169, 134, 1) rgba(176, 169, 134, 1)
          rgba(176, 169, 134, 1) rgba(176, 169, 134, 1);
        border-radius: 0 0 0 0;
        overflow: clip;
        transform: translateZ(0);
        margin: -0px;
      }
      [id="comp-lamqvxfv1__item-lamqwrmp"] {
        --fill-layer-image-opacity: 1;
        --bg-overlay-color: rgb(221, 232, 235);
        --bg-gradient: none;
        border-width: 0 0 0 0;
        border-style: solid solid solid solid;
        border-color: rgba(176, 169, 134, 1) rgba(176, 169, 134, 1)
          rgba(176, 169, 134, 1) rgba(176, 169, 134, 1);
        border-radius: 0 0 0 0;
        overflow: clip;
        transform: translateZ(0);
        margin: -0px;
      }
      [id="comp-lamqvxfv1__item-lamrwad7"] {
        --fill-layer-image-opacity: 1;
        --bg-overlay-color: rgb(221, 232, 235);
        --bg-gradient: none;
        border-width: 0 0 0 0;
        border-style: solid solid solid solid;
        border-color: rgba(176, 169, 134, 1) rgba(176, 169, 134, 1)
          rgba(176, 169, 134, 1) rgba(176, 169, 134, 1);
        border-radius: 0 0 0 0;
        overflow: clip;
        transform: translateZ(0);
        margin: -0px;
      }
      [id="comp-lamqvxfv1__item2"] {
        --fill-layer-image-opacity: 1;
        --scale: 1;
        --bg-overlay-color: rgb(255, 255, 255);
        --bg-gradient: none;
        border-width: 0 0 0 0;
        border-style: solid solid solid solid;
        border-color: rgba(176, 169, 134, 1) rgba(176, 169, 134, 1)
          rgba(176, 169, 134, 1) rgba(176, 169, 134, 1);
        border-radius: 0 0 0 0;
        overflow: clip;
        transform: translateZ(0);
        margin: -0px;
      }
      [id="comp-lamqvxfv1__item3"] {
        --fill-layer-image-opacity: 1;
        --scale: 1;
        --bg-overlay-color: rgb(255, 255, 255);
        --bg-gradient: none;
        border-width: 0 0 0 0;
        border-style: solid solid solid solid;
        border-color: rgba(176, 169, 134, 1) rgba(176, 169, 134, 1)
          rgba(176, 169, 134, 1) rgba(176, 169, 134, 1);
        border-radius: 0 0 0 0;
        overflow: clip;
        transform: translateZ(0);
        margin: -0px;
      }
      [id="comp-lamqvxfv1__item-lamr08p5"] {
        --fill-layer-image-opacity: 1;
        --scale: 1;
        --bg-overlay-color: rgb(255, 255, 255);
        --bg-gradient: none;
        border-width: 0 0 0 0;
        border-style: solid solid solid solid;
        border-color: rgba(176, 169, 134, 1) rgba(176, 169, 134, 1)
          rgba(176, 169, 134, 1) rgba(176, 169, 134, 1);
        border-radius: 0 0 0 0;
        overflow: clip;
        transform: translateZ(0);
        margin: -0px;
      }
      [id^="comp-lamqvxfv1__"]:hover [id^="comp-lamqvxg32__"] {
        --min-height: 55px;
        --text-direction: var(--wix-opt-in-direction);
      }
      [id^="comp-lamqvxg32__"] {
        --min-height: 55px;
        --text-direction: var(--wix-opt-in-direction);
      }
      [id^="comp-lamqvxfv1__"]:hover
        [id^="comp-lamqvxg32__"]
        :is(p, h1, h2, h3, h4, h5, h6, ul, ol, span, blockquote, div) {
        color: #e8cca7 !important;
        background-color: transparent !important;
      }
      [id^="comp-lamqvxfv1__"]:hover
        [id^="comp-lamqvxg32__"]
        [class$="rich-text__text"]:is(
          p,
          h1,
          h2,
          h3,
          h4,
          h5,
          h6,
          ul,
          ol,
          span[data-attr-richtext-marker],
          blockquote,
          div
        ) {
        color: var(--corvid-color, #e8cca7 !important);
      }
      #comp-lc96qudc {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        min-width: 980px;
      }
      #comp-lamrzcyn {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        --padding: 0px;
        --margin: 0px;
        min-width: 980px;
        --firstChildMarginTop: -1px;
        --lastChildMarginBottom: -1px;
        --direction: ltr;
      }
      #comp-lamrzczo {
        --bg-overlay-color: rgb(255, 255, 255);
        --bg-gradient: none;
        width: 100%;
        --column-width: 980px;
        --column-flex: 980;
      }
      #comp-lamrzn37 {
        --text-direction: var(--wix-opt-in-direction);
      }
      .comp-lamrzn46 {
        --wix-direction: ltr;
        --layout-post-list-layoutType: 13;
        --layout-post-list-pg-text-on-image-medium-sidesPadding: 24;
        --layout-post-list-list-imageRatio: 3;
        --layout-post-list-pg-text-on-image-medium-layoutPostSize: 292;
        --category-label-layoutType: 0;
        --layout-mobile-post-list-layoutType: 13;
        --postListWidgetPaginationType: 0;
        --postListWidgetEntityCount: 3;
        --postListWidgetPostsPerPage: 3;
        --layout-post-list-list-imageCropType: 0;
        --layout-mobile-post-list-pg-grid-imageCropType: 0;
        --layout-mobile-post-list-list-imageCropType: 0;
        --layout-post-list-pg-grid-imageCropType: 0;
        --layout-post-list-pg-side-by-side-imageCropType: 0;
        --layout-mobile-post-list-pg-grid-imageRatio: 2;
        --layout-mobile-post-list-list-imageRatio: 2;
        --layout-mobile-post-list-pg-text-on-image-medium-imageRatio: 2;
        --layout-mobile-post-list-slider-imageRatio: 2;
        --layout-post-list-pg-grid-imageRatio: 2;
        --layout-post-list-slider-imageRatio: 2;
        --layout-post-list-pg-side-by-side-imageRatio: 2;
        --layout-post-list-pg-text-on-image-medium-imageRatio: 3;
        --contentAlignment: 0;
        --contentAlignmentMobile: 0;
        --layout-post-list-list-imageAlignment: 1;
        --layout-mobile-post-list-list-imageAlignment: 1;
        --layout-post-list-pg-side-by-side-imageAlignment: 1;
        --layout-post-list-list-imageProportions: 25;
        --layout-mobile-post-list-list-imageProportions: 25;
        --layout-post-list-pg-side-by-side-imageProportions: 50;
        --postListWidgetSliderPauseTime: 4;
        --postListWidgetSliderPauseTimeMobile: 4;
        --postListWidgetSliderArrowsPosition: 0;
        --postListWidgetSliderArrowsPositionMobile: 0;
        --postListWidgetSliderArrowsSize: 18;
        --postListWidgetSliderArrowsSizeMobile: 18;
        --layout-post-list-list-layoutCardsRowType: 0;
        --layout-post-list-list-layoutPostSize: 292;
        --layout-post-list-list-layoutPostsPerRow: 3;
        --layout-mobile-post-list-pg-grid-layoutCardsRowType: 0;
        --layout-mobile-post-list-pg-grid-layoutPostSize: 292;
        --layout-mobile-post-list-pg-grid-layoutPostsPerRow: 3;
        --layout-mobile-post-list-list-layoutCardsRowType: 0;
        --layout-mobile-post-list-list-layoutPostSize: 292;
        --layout-mobile-post-list-list-layoutPostsPerRow: 3;
        --layout-mobile-post-list-pg-text-on-image-medium-layoutCardsRowType: 0;
        --layout-mobile-post-list-pg-text-on-image-medium-layoutPostSize: 292;
        --layout-mobile-post-list-pg-text-on-image-medium-layoutPostsPerRow: 3;
        --layout-post-list-pg-grid-layoutCardsRowType: 0;
        --layout-post-list-pg-grid-layoutPostSize: 292;
        --layout-post-list-pg-grid-layoutPostsPerRow: 3;
        --layout-post-list-pg-text-on-image-medium-layoutCardsRowType: 0;
        --layout-post-list-pg-text-on-image-medium-layoutPostsPerRow: 3;
        --layout-post-list-list-layoutSpacing: 12;
        --layout-mobile-post-list-pg-grid-layoutSpacing: 20;
        --layout-mobile-post-list-list-layoutSpacing: 20;
        --layout-mobile-post-list-pg-text-on-image-medium-layoutSpacing: 20;
        --layout-post-list-pg-grid-layoutSpacing: 32;
        --layout-post-list-pg-side-by-side-layoutSpacing: 32;
        --layout-post-list-pg-text-on-image-medium-layoutSpacing: 32;
        --layout-post-list-pg-one-column-layoutSpacing: 32;
        --layout-post-list-list-contentHeightType: 0;
        --layout-post-list-list-contentHeight: 156;
        --layout-mobile-post-list-pg-grid-contentHeight: 350;
        --layout-mobile-post-list-pg-grid-contentHeightType: 0;
        --layout-mobile-post-list-list-contentHeight: 350;
        --layout-mobile-post-list-slider-contentHeight: 350;
        --layout-mobile-post-list-slider-contentHeightType: 0;
        --layout-post-list-pg-grid-contentHeightType: 1;
        --layout-post-list-pg-grid-contentHeight: 156;
        --layout-post-list-slider-contentHeightType: 1;
        --layout-post-list-slider-contentHeight: 156;
        --layout-post-list-pg-one-column-contentHeightType: 1;
        --layout-post-list-pg-one-column-contentHeight: 156;
        --layout-post-list-list-sidesPadding: 16;
        --layout-mobile-post-list-pg-grid-sidesPadding: 24;
        --layout-mobile-post-list-list-sidesPadding: 12;
        --layout-mobile-post-list-pg-text-on-image-medium-sidesPadding: 12;
        --layout-mobile-post-list-slider-sidesPadding: 24;
        --layout-post-list-pg-grid-sidesPadding: 16;
        --layout-post-list-slider-sidesPadding: 16;
        --layout-post-list-pg-side-by-side-sidesPadding: 16;
        --layout-post-list-pg-one-column-sidesPadding: 16;
        --layout-post-list-list-titleLineCount: 3;
        --layout-mobile-post-list-pg-grid-titleLineCount: 2;
        --layout-mobile-post-list-pg-grid-descriptionLineCount: 3;
        --layout-mobile-post-list-list-titleLineCount: 2;
        --layout-mobile-post-list-pg-text-on-image-medium-titleLineCount: 2;
        --layout-mobile-post-list-slider-titleLineCount: 2;
        --layout-mobile-post-list-slider-descriptionLineCount: 3;
        --layout-post-list-pg-grid-titleLineCount: 3;
        --layout-post-list-slider-titleLineCount: 3;
        --layout-post-list-pg-side-by-side-titleLineCount: 3;
        --layout-post-list-pg-text-on-image-medium-titleLineCount: 3;
        --layout-post-list-pg-one-column-titleLineCount: 3;
        --layout-post-list-pg-grid-descriptionLineCount: 1;
        --layout-post-list-slider-descriptionLineCount: 1;
        --layout-post-list-pg-side-by-side-descriptionLineCount: 1;
        --layout-post-list-pg-one-column-descriptionLineCount: 1;
        --post-slider-post-list-mobile-titleFontSize: 22;
        --post-list-post-list-mobile-titleFontSize: 14;
        --post-pg-text-on-image-medium-post-list-mobile-titleFontSize: 22;
        --post-pg-grid-post-list-mobile-titleFontSize: 22;
        --post-pg-grid-post-list-mobile-descriptionFontSize: 16;
        --post-post-list-borderWidth: 1;
        --post-post-list-mobile-borderWidth: 1;
        --post-post-list-postRadius: 0;
        --post-post-list-mobile-postRadius: 0;
        --category-label-button-horizontalPadding: 12;
        --category-label-button-verticalPadding: 6;
        --category-label-button-cornerRadius: 0;
        --category-label-button-borderWidth: 0;
        --post-list-video-play: 0;
        --post-list-video-playbackSpeed: 2;
        --post-post-list-ratingFont: normal normal normal 14px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-post-list-ratingFont: normal normal normal 14px/19.599999999999998px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-post-list-ratingFont: normal normal normal 14px/19.599999999999998px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-one-column-post-list-ratingFont: normal normal normal 14px/19.599999999999998px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-side-by-side-post-list-ratingFont: normal normal normal 14px/19.599999999999998px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-medium-post-list-ratingFont: normal normal
            normal 14px/19.599999999999998px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-slider-post-list-ratingFont: normal normal normal 14px/19.599999999999998px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-medium-post-list-ratingFont: normal normal normal 14px/19.599999999999998px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-large-post-list-ratingFont: normal normal normal 14px/19.599999999999998px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-intermediate-post-list-ratingFont: normal normal normal
            14px/19.599999999999998px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-large-post-list-ratingFont: normal normal normal 14px/19.599999999999998px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-medium-post-list-ratingFont: normal normal normal 14px/19.599999999999998px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-side-by-side-right-post-list-ratingFont: normal normal normal
            14px/19.599999999999998px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-large-post-list-ratingFont: normal normal normal
            14px/19.599999999999998px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-small-post-list-ratingFont: normal normal normal
            14px/19.599999999999998px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-post-list-backgroundColor: 255, 255, 255;
        --post-post-list-backgroundColor-rgb: 255, 255, 255;
        --post-post-list-backgroundColor-opacity: 1;
        --post-post-list-linkHashtagColor: 232, 204, 167;
        --post-post-list-linkHashtagColor-rgb: 232, 204, 167;
        --post-post-list-linkHashtagColor-opacity: 1;
        --post-post-list-titleColor: 85, 85, 85;
        --post-post-list-titleColor-rgb: 85, 85, 85;
        --post-post-list-titleColor-opacity: 1;
        --post-post-list-borderColor: 213, 213, 213;
        --post-post-list-borderColor-rgb: 213, 213, 213;
        --post-post-list-borderColor-opacity: 1;
        --post-post-list-descriptionColor: 85, 85, 85;
        --post-post-list-descriptionColor-rgb: 85, 85, 85;
        --post-post-list-descriptionColor-opacity: 1;
        --postListWidgetBackgroundColor: 255, 255, 255, 0;
        --postListWidgetBackgroundColor-rgb: 255, 255, 255;
        --postListWidgetBackgroundColor-opacity: 0;
        --post-post-list-TOI-mobile-titleColor: 255, 255, 255;
        --post-post-list-TOI-mobile-titleColor-rgb: 255, 255, 255;
        --post-post-list-TOI-mobile-titleColor-opacity: 1;
        --post-post-list-TOI-mobile-descriptionColor: 255, 255, 255;
        --post-post-list-TOI-mobile-descriptionColor-rgb: 255, 255, 255;
        --post-post-list-TOI-mobile-descriptionColor-opacity: 1;
        --post-post-list-mobile-linkHashtagColor: 105, 113, 139;
        --post-post-list-mobile-linkHashtagColor-rgb: 105, 113, 139;
        --post-post-list-mobile-linkHashtagColor-opacity: 1;
        --post-post-list-mobile-overlayColor: 0, 0, 0, 0.55;
        --post-post-list-mobile-overlayColor-rgb: 0, 0, 0;
        --post-post-list-mobile-overlayColor-opacity: 0.55;
        --postListWidgetBackgroundColorMobile: 85, 85, 85;
        --postListWidgetBackgroundColorMobile-rgb: 85, 85, 85;
        --postListWidgetBackgroundColorMobile-opacity: 1;
        --postListWidgetSliderArrowsColor: 85, 85, 85;
        --postListWidgetSliderArrowsColor-rgb: 85, 85, 85;
        --postListWidgetSliderArrowsColor-opacity: 1;
        --post-post-list-TOI-titleColor: 255, 255, 255;
        --post-post-list-TOI-titleColor-rgb: 255, 255, 255;
        --post-post-list-TOI-titleColor-opacity: 1;
        --post-post-list-TOI-descriptionColor: 255, 255, 255;
        --post-post-list-TOI-descriptionColor-rgb: 255, 255, 255;
        --post-post-list-TOI-descriptionColor-opacity: 1;
        --post-post-list-overlayColor: 0, 0, 0, 0.45;
        --post-post-list-overlayColor-rgb: 0, 0, 0;
        --post-post-list-overlayColor-opacity: 0.45;
        --category-label-text-textColor: 232, 204, 167;
        --category-label-text-textColor-rgb: 232, 204, 167;
        --category-label-text-textColor-opacity: 1;
        --category-label-text-textColorHover: 105, 113, 139, 0.7;
        --category-label-text-textColorHover-rgb: 105, 113, 139;
        --category-label-text-textColorHover-opacity: 0.7;
        --category-label-button-textColor: 255, 255, 255;
        --category-label-button-textColor-rgb: 255, 255, 255;
        --category-label-button-textColor-opacity: 1;
        --category-label-button-backgroundColor: 105, 113, 139;
        --category-label-button-backgroundColor-rgb: 105, 113, 139;
        --category-label-button-backgroundColor-opacity: 1;
        --category-label-button-borderColor: 105, 113, 139;
        --category-label-button-borderColor-rgb: 105, 113, 139;
        --category-label-button-borderColor-opacity: 1;
        --category-label-button-textColorHover: 255, 255, 255;
        --category-label-button-textColorHover-rgb: 255, 255, 255;
        --category-label-button-textColorHover-opacity: 1;
        --category-label-button-backgroundColorHover: 105, 113, 139, 0.7;
        --category-label-button-backgroundColorHover-rgb: 105, 113, 139;
        --category-label-button-backgroundColorHover-opacity: 0.7;
        --category-label-button-borderColorHover: 105, 113, 139, 0.7;
        --category-label-button-borderColorHover-rgb: 105, 113, 139;
        --category-label-button-borderColorHover-opacity: 0.7;
        --post-post-list-mobile-titleColor: 85, 85, 85;
        --post-post-list-mobile-titleColor-rgb: 85, 85, 85;
        --post-post-list-mobile-titleColor-opacity: 1;
        --post-post-list-mobile-descriptionColor: 85, 85, 85;
        --post-post-list-mobile-descriptionColor-rgb: 85, 85, 85;
        --post-post-list-mobile-descriptionColor-opacity: 1;
        --post-post-list-mobile-borderColor: 213, 213, 213, 0.75;
        --post-post-list-mobile-borderColor-rgb: 213, 213, 213;
        --post-post-list-mobile-borderColor-opacity: 0.75;
        --post-post-list-mobile-backgroundColor: 255, 255, 255;
        --post-post-list-mobile-backgroundColor-rgb: 255, 255, 255;
        --post-post-list-mobile-backgroundColor-opacity: 1;
        --postListWidgetSliderArrowsColorMobile: 85, 85, 85;
        --postListWidgetSliderArrowsColorMobile-rgb: 85, 85, 85;
        --postListWidgetSliderArrowsColorMobile-opacity: 1;
        --post-post-list-ratingFilledStarColor: 105, 113, 139;
        --post-post-list-ratingFilledStarColor-rgb: 105, 113, 139;
        --post-post-list-ratingFilledStarColor-opacity: 1;
        --post-post-list-ratingUnfilledStarColor: 170, 170, 170;
        --post-post-list-ratingUnfilledStarColor-rgb: 170, 170, 170;
        --post-post-list-ratingUnfilledStarColor-opacity: 1;
        --post-post-list-TOI-ratingFilledStarColor: 255, 255, 255;
        --post-post-list-TOI-ratingFilledStarColor-rgb: 255, 255, 255;
        --post-post-list-TOI-ratingFilledStarColor-opacity: 1;
        --post-post-list-TOI-ratingUnfilledStarColor: 170, 170, 170;
        --post-post-list-TOI-ratingUnfilledStarColor-rgb: 170, 170, 170;
        --post-post-list-TOI-ratingUnfilledStarColor-opacity: 1;
        --post-post-list-ratingFontColor: 85, 85, 85;
        --post-post-list-ratingFontColor-rgb: 85, 85, 85;
        --post-post-list-ratingFontColor-opacity: 1;
        --post-post-list-TOI-ratingFontColor: 255, 255, 255;
        --post-post-list-TOI-ratingFontColor-rgb: 255, 255, 255;
        --post-post-list-TOI-ratingFontColor-opacity: 1;
        --post-pg-text-on-image-medium-post-list-titleFont: normal normal normal
            26px/32px avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-text-on-image-medium-post-list-titleFont-style: normal;
        --post-pg-text-on-image-medium-post-list-titleFont-variant: normal;
        --post-pg-text-on-image-medium-post-list-titleFont-weight: normal;
        --post-pg-text-on-image-medium-post-list-titleFont-size: 26px;
        --post-pg-text-on-image-medium-post-list-titleFont-line-height: 32px;
        --post-pg-text-on-image-medium-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-text-on-image-medium-post-list-titleFont-text-decoration: none;
        --post-pg-text-on-image-medium-post-list-descriptionFont: normal normal
            normal 16px/20px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-medium-post-list-descriptionFont-style: normal;
        --post-pg-text-on-image-medium-post-list-descriptionFont-variant: normal;
        --post-pg-text-on-image-medium-post-list-descriptionFont-weight: normal;
        --post-pg-text-on-image-medium-post-list-descriptionFont-size: 16px;
        --post-pg-text-on-image-medium-post-list-descriptionFont-line-height: 20px;
        --post-pg-text-on-image-medium-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-medium-post-list-descriptionFont-text-decoration: none;
        --category-label-text-textFont: normal normal normal 14px/17px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --category-label-text-textFont-style: normal;
        --category-label-text-textFont-variant: normal;
        --category-label-text-textFont-weight: normal;
        --category-label-text-textFont-size: 14px;
        --category-label-text-textFont-line-height: 17px;
        --category-label-text-textFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --category-label-text-textFont-text-decoration: none;
        --category-label-button-textFont: normal normal normal 14px/17px
            helvetica-w01-light,
          sans-serif;
        --category-label-button-textFont-style: normal;
        --category-label-button-textFont-variant: normal;
        --category-label-button-textFont-weight: normal;
        --category-label-button-textFont-size: 14px;
        --category-label-button-textFont-line-height: 17px;
        --category-label-button-textFont-family: helvetica-w01-light, sans-serif;
        --category-label-button-textFont-text-decoration: none;
        --post-post-list-titleFont: normal normal normal 26px/32px
            avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-post-list-titleFont-style: normal;
        --post-post-list-titleFont-variant: normal;
        --post-post-list-titleFont-weight: normal;
        --post-post-list-titleFont-size: 26px;
        --post-post-list-titleFont-line-height: 32px;
        --post-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-post-list-titleFont-text-decoration: none;
        --post-pg-medium-post-list-titleFont: normal normal normal 26px/32px
            avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-medium-post-list-titleFont-style: normal;
        --post-pg-medium-post-list-titleFont-variant: normal;
        --post-pg-medium-post-list-titleFont-weight: normal;
        --post-pg-medium-post-list-titleFont-size: 26px;
        --post-pg-medium-post-list-titleFont-line-height: 32px;
        --post-pg-medium-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-medium-post-list-titleFont-text-decoration: none;
        --post-pg-side-by-side-post-list-titleFont: normal normal normal 28px/35px
            avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-side-by-side-post-list-titleFont-style: normal;
        --post-pg-side-by-side-post-list-titleFont-variant: normal;
        --post-pg-side-by-side-post-list-titleFont-weight: normal;
        --post-pg-side-by-side-post-list-titleFont-size: 28px;
        --post-pg-side-by-side-post-list-titleFont-line-height: 35px;
        --post-pg-side-by-side-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-side-by-side-post-list-titleFont-text-decoration: none;
        --post-pg-grid-post-list-titleFont: normal normal normal 22px/27px
            avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-grid-post-list-titleFont-style: normal;
        --post-pg-grid-post-list-titleFont-variant: normal;
        --post-pg-grid-post-list-titleFont-weight: normal;
        --post-pg-grid-post-list-titleFont-size: 22px;
        --post-pg-grid-post-list-titleFont-line-height: 27px;
        --post-pg-grid-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-grid-post-list-titleFont-text-decoration: none;
        --post-pg-one-column-post-list-titleFont: normal normal normal 28px/35px
            avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-one-column-post-list-titleFont-style: normal;
        --post-pg-one-column-post-list-titleFont-variant: normal;
        --post-pg-one-column-post-list-titleFont-weight: normal;
        --post-pg-one-column-post-list-titleFont-size: 28px;
        --post-pg-one-column-post-list-titleFont-line-height: 35px;
        --post-pg-one-column-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-one-column-post-list-titleFont-text-decoration: none;
        --post-slider-post-list-titleFont: normal normal normal 22px/27px
            avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-slider-post-list-titleFont-style: normal;
        --post-slider-post-list-titleFont-variant: normal;
        --post-slider-post-list-titleFont-weight: normal;
        --post-slider-post-list-titleFont-size: 22px;
        --post-slider-post-list-titleFont-line-height: 27px;
        --post-slider-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-slider-post-list-titleFont-text-decoration: none;
        --post-list-post-list-titleFont: normal normal normal 14px/17px
            avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-list-post-list-titleFont-style: normal;
        --post-list-post-list-titleFont-variant: normal;
        --post-list-post-list-titleFont-weight: normal;
        --post-list-post-list-titleFont-size: 14px;
        --post-list-post-list-titleFont-line-height: 17px;
        --post-list-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-list-post-list-titleFont-text-decoration: none;
        --post-pg-grid-intermediate-post-list-titleFont: normal normal normal
            22px/27px avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-grid-intermediate-post-list-titleFont-style: normal;
        --post-pg-grid-intermediate-post-list-titleFont-variant: normal;
        --post-pg-grid-intermediate-post-list-titleFont-weight: normal;
        --post-pg-grid-intermediate-post-list-titleFont-size: 22px;
        --post-pg-grid-intermediate-post-list-titleFont-line-height: 27px;
        --post-pg-grid-intermediate-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-grid-intermediate-post-list-titleFont-text-decoration: none;
        --post-pg-grid-large-post-list-titleFont: normal normal normal 22px/27px
            avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-grid-large-post-list-titleFont-style: normal;
        --post-pg-grid-large-post-list-titleFont-variant: normal;
        --post-pg-grid-large-post-list-titleFont-weight: normal;
        --post-pg-grid-large-post-list-titleFont-size: 22px;
        --post-pg-grid-large-post-list-titleFont-line-height: 27px;
        --post-pg-grid-large-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-grid-large-post-list-titleFont-text-decoration: none;
        --post-pg-side-by-side-right-post-list-titleFont: normal normal normal
            28px/35px avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-side-by-side-right-post-list-titleFont-style: normal;
        --post-pg-side-by-side-right-post-list-titleFont-variant: normal;
        --post-pg-side-by-side-right-post-list-titleFont-weight: normal;
        --post-pg-side-by-side-right-post-list-titleFont-size: 28px;
        --post-pg-side-by-side-right-post-list-titleFont-line-height: 35px;
        --post-pg-side-by-side-right-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-side-by-side-right-post-list-titleFont-text-decoration: none;
        --post-pg-text-on-image-small-post-list-titleFont: normal normal normal
            22px/27px avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-text-on-image-small-post-list-titleFont-style: normal;
        --post-pg-text-on-image-small-post-list-titleFont-variant: normal;
        --post-pg-text-on-image-small-post-list-titleFont-weight: normal;
        --post-pg-text-on-image-small-post-list-titleFont-size: 22px;
        --post-pg-text-on-image-small-post-list-titleFont-line-height: 27px;
        --post-pg-text-on-image-small-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-text-on-image-small-post-list-titleFont-text-decoration: none;
        --post-pg-text-on-image-large-post-list-titleFont: normal normal normal
            28px/35px avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-text-on-image-large-post-list-titleFont-style: normal;
        --post-pg-text-on-image-large-post-list-titleFont-variant: normal;
        --post-pg-text-on-image-large-post-list-titleFont-weight: normal;
        --post-pg-text-on-image-large-post-list-titleFont-size: 28px;
        --post-pg-text-on-image-large-post-list-titleFont-line-height: 35px;
        --post-pg-text-on-image-large-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-pg-text-on-image-large-post-list-titleFont-text-decoration: none;
        --post-list-medium-post-list-titleFont: normal normal normal 18px/22px
            avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-list-medium-post-list-titleFont-style: normal;
        --post-list-medium-post-list-titleFont-variant: normal;
        --post-list-medium-post-list-titleFont-weight: normal;
        --post-list-medium-post-list-titleFont-size: 18px;
        --post-list-medium-post-list-titleFont-line-height: 22px;
        --post-list-medium-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-list-medium-post-list-titleFont-text-decoration: none;
        --post-list-large-post-list-titleFont: normal normal normal 22px/27px
            avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-list-large-post-list-titleFont-style: normal;
        --post-list-large-post-list-titleFont-variant: normal;
        --post-list-large-post-list-titleFont-weight: normal;
        --post-list-large-post-list-titleFont-size: 22px;
        --post-list-large-post-list-titleFont-line-height: 27px;
        --post-list-large-post-list-titleFont-family: avenir-lt-w01_85-heavy1475544,
          sans-serif;
        --post-list-large-post-list-titleFont-text-decoration: none;
        --post-post-list-descriptionFont: normal normal normal 16px/20px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-post-list-descriptionFont-style: normal;
        --post-post-list-descriptionFont-variant: normal;
        --post-post-list-descriptionFont-weight: normal;
        --post-post-list-descriptionFont-size: 16px;
        --post-post-list-descriptionFont-line-height: 20px;
        --post-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-post-list-descriptionFont-text-decoration: none;
        --post-pg-medium-post-list-descriptionFont: normal normal normal 16px/20px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-medium-post-list-descriptionFont-style: normal;
        --post-pg-medium-post-list-descriptionFont-variant: normal;
        --post-pg-medium-post-list-descriptionFont-weight: normal;
        --post-pg-medium-post-list-descriptionFont-size: 16px;
        --post-pg-medium-post-list-descriptionFont-line-height: 20px;
        --post-pg-medium-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-medium-post-list-descriptionFont-text-decoration: none;
        --post-pg-side-by-side-post-list-descriptionFont: normal normal normal
            16px/20px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-side-by-side-post-list-descriptionFont-style: normal;
        --post-pg-side-by-side-post-list-descriptionFont-variant: normal;
        --post-pg-side-by-side-post-list-descriptionFont-weight: normal;
        --post-pg-side-by-side-post-list-descriptionFont-size: 16px;
        --post-pg-side-by-side-post-list-descriptionFont-line-height: 20px;
        --post-pg-side-by-side-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-side-by-side-post-list-descriptionFont-text-decoration: none;
        --post-pg-grid-post-list-descriptionFont: normal normal normal 16px/20px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-post-list-descriptionFont-style: normal;
        --post-pg-grid-post-list-descriptionFont-variant: normal;
        --post-pg-grid-post-list-descriptionFont-weight: normal;
        --post-pg-grid-post-list-descriptionFont-size: 16px;
        --post-pg-grid-post-list-descriptionFont-line-height: 20px;
        --post-pg-grid-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-post-list-descriptionFont-text-decoration: none;
        --post-pg-one-column-post-list-descriptionFont: normal normal normal
            16px/20px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-one-column-post-list-descriptionFont-style: normal;
        --post-pg-one-column-post-list-descriptionFont-variant: normal;
        --post-pg-one-column-post-list-descriptionFont-weight: normal;
        --post-pg-one-column-post-list-descriptionFont-size: 16px;
        --post-pg-one-column-post-list-descriptionFont-line-height: 20px;
        --post-pg-one-column-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-one-column-post-list-descriptionFont-text-decoration: none;
        --post-slider-post-list-descriptionFont: normal normal normal 16px/20px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-slider-post-list-descriptionFont-style: normal;
        --post-slider-post-list-descriptionFont-variant: normal;
        --post-slider-post-list-descriptionFont-weight: normal;
        --post-slider-post-list-descriptionFont-size: 16px;
        --post-slider-post-list-descriptionFont-line-height: 20px;
        --post-slider-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-slider-post-list-descriptionFont-text-decoration: none;
        --post-list-post-list-descriptionFont: normal normal normal 14px/17px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-post-list-descriptionFont-style: normal;
        --post-list-post-list-descriptionFont-variant: normal;
        --post-list-post-list-descriptionFont-weight: normal;
        --post-list-post-list-descriptionFont-size: 14px;
        --post-list-post-list-descriptionFont-line-height: 17px;
        --post-list-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-post-list-descriptionFont-text-decoration: none;
        --post-pg-grid-intermediate-post-list-descriptionFont: normal normal
            normal 16px/20px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-intermediate-post-list-descriptionFont-style: normal;
        --post-pg-grid-intermediate-post-list-descriptionFont-variant: normal;
        --post-pg-grid-intermediate-post-list-descriptionFont-weight: normal;
        --post-pg-grid-intermediate-post-list-descriptionFont-size: 16px;
        --post-pg-grid-intermediate-post-list-descriptionFont-line-height: 20px;
        --post-pg-grid-intermediate-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-intermediate-post-list-descriptionFont-text-decoration: none;
        --post-pg-grid-large-post-list-descriptionFont: normal normal normal
            16px/20px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-large-post-list-descriptionFont-style: normal;
        --post-pg-grid-large-post-list-descriptionFont-variant: normal;
        --post-pg-grid-large-post-list-descriptionFont-weight: normal;
        --post-pg-grid-large-post-list-descriptionFont-size: 16px;
        --post-pg-grid-large-post-list-descriptionFont-line-height: 20px;
        --post-pg-grid-large-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-large-post-list-descriptionFont-text-decoration: none;
        --post-pg-side-by-side-right-post-list-descriptionFont: normal normal
            normal 16px/20px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-side-by-side-right-post-list-descriptionFont-style: normal;
        --post-pg-side-by-side-right-post-list-descriptionFont-variant: normal;
        --post-pg-side-by-side-right-post-list-descriptionFont-weight: normal;
        --post-pg-side-by-side-right-post-list-descriptionFont-size: 16px;
        --post-pg-side-by-side-right-post-list-descriptionFont-line-height: 20px;
        --post-pg-side-by-side-right-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-side-by-side-right-post-list-descriptionFont-text-decoration: none;
        --post-pg-text-on-image-small-post-list-descriptionFont: normal normal
            normal 16px/20px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-small-post-list-descriptionFont-style: normal;
        --post-pg-text-on-image-small-post-list-descriptionFont-variant: normal;
        --post-pg-text-on-image-small-post-list-descriptionFont-weight: normal;
        --post-pg-text-on-image-small-post-list-descriptionFont-size: 16px;
        --post-pg-text-on-image-small-post-list-descriptionFont-line-height: 20px;
        --post-pg-text-on-image-small-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-small-post-list-descriptionFont-text-decoration: none;
        --post-pg-text-on-image-large-post-list-descriptionFont: normal normal
            normal 16px/20px avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-large-post-list-descriptionFont-style: normal;
        --post-pg-text-on-image-large-post-list-descriptionFont-variant: normal;
        --post-pg-text-on-image-large-post-list-descriptionFont-weight: normal;
        --post-pg-text-on-image-large-post-list-descriptionFont-size: 16px;
        --post-pg-text-on-image-large-post-list-descriptionFont-line-height: 20px;
        --post-pg-text-on-image-large-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-large-post-list-descriptionFont-text-decoration: none;
        --post-list-medium-post-list-descriptionFont: normal normal normal 14px/17px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-medium-post-list-descriptionFont-style: normal;
        --post-list-medium-post-list-descriptionFont-variant: normal;
        --post-list-medium-post-list-descriptionFont-weight: normal;
        --post-list-medium-post-list-descriptionFont-size: 14px;
        --post-list-medium-post-list-descriptionFont-line-height: 17px;
        --post-list-medium-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-medium-post-list-descriptionFont-text-decoration: none;
        --post-list-large-post-list-descriptionFont: normal normal normal 14px/17px
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-large-post-list-descriptionFont-style: normal;
        --post-list-large-post-list-descriptionFont-variant: normal;
        --post-list-large-post-list-descriptionFont-weight: normal;
        --post-list-large-post-list-descriptionFont-size: 14px;
        --post-list-large-post-list-descriptionFont-line-height: 17px;
        --post-list-large-post-list-descriptionFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-large-post-list-descriptionFont-text-decoration: none;
        --post-post-list-ratingFont-style: normal;
        --post-post-list-ratingFont-variant: normal;
        --post-post-list-ratingFont-weight: normal;
        --post-post-list-ratingFont-size: 14px;
        --post-post-list-ratingFont-line-height: 1.4em;
        --post-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-post-list-ratingFont-text-decoration: none;
        --post-list-post-list-ratingFont-style: normal;
        --post-list-post-list-ratingFont-variant: normal;
        --post-list-post-list-ratingFont-weight: normal;
        --post-list-post-list-ratingFont-size: 14px;
        --post-list-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-list-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-post-list-ratingFont-text-decoration: none;
        --post-pg-grid-post-list-ratingFont-style: normal;
        --post-pg-grid-post-list-ratingFont-variant: normal;
        --post-pg-grid-post-list-ratingFont-weight: normal;
        --post-pg-grid-post-list-ratingFont-size: 14px;
        --post-pg-grid-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-pg-grid-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-post-list-ratingFont-text-decoration: none;
        --post-pg-one-column-post-list-ratingFont-style: normal;
        --post-pg-one-column-post-list-ratingFont-variant: normal;
        --post-pg-one-column-post-list-ratingFont-weight: normal;
        --post-pg-one-column-post-list-ratingFont-size: 14px;
        --post-pg-one-column-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-pg-one-column-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-one-column-post-list-ratingFont-text-decoration: none;
        --post-pg-side-by-side-post-list-ratingFont-style: normal;
        --post-pg-side-by-side-post-list-ratingFont-variant: normal;
        --post-pg-side-by-side-post-list-ratingFont-weight: normal;
        --post-pg-side-by-side-post-list-ratingFont-size: 14px;
        --post-pg-side-by-side-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-pg-side-by-side-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-side-by-side-post-list-ratingFont-text-decoration: none;
        --post-pg-text-on-image-medium-post-list-ratingFont-style: normal;
        --post-pg-text-on-image-medium-post-list-ratingFont-variant: normal;
        --post-pg-text-on-image-medium-post-list-ratingFont-weight: normal;
        --post-pg-text-on-image-medium-post-list-ratingFont-size: 14px;
        --post-pg-text-on-image-medium-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-pg-text-on-image-medium-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-medium-post-list-ratingFont-text-decoration: none;
        --post-slider-post-list-ratingFont-style: normal;
        --post-slider-post-list-ratingFont-variant: normal;
        --post-slider-post-list-ratingFont-weight: normal;
        --post-slider-post-list-ratingFont-size: 14px;
        --post-slider-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-slider-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-slider-post-list-ratingFont-text-decoration: none;
        --post-list-medium-post-list-ratingFont-style: normal;
        --post-list-medium-post-list-ratingFont-variant: normal;
        --post-list-medium-post-list-ratingFont-weight: normal;
        --post-list-medium-post-list-ratingFont-size: 14px;
        --post-list-medium-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-list-medium-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-medium-post-list-ratingFont-text-decoration: none;
        --post-list-large-post-list-ratingFont-style: normal;
        --post-list-large-post-list-ratingFont-variant: normal;
        --post-list-large-post-list-ratingFont-weight: normal;
        --post-list-large-post-list-ratingFont-size: 14px;
        --post-list-large-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-list-large-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-list-large-post-list-ratingFont-text-decoration: none;
        --post-pg-grid-intermediate-post-list-ratingFont-style: normal;
        --post-pg-grid-intermediate-post-list-ratingFont-variant: normal;
        --post-pg-grid-intermediate-post-list-ratingFont-weight: normal;
        --post-pg-grid-intermediate-post-list-ratingFont-size: 14px;
        --post-pg-grid-intermediate-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-pg-grid-intermediate-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-intermediate-post-list-ratingFont-text-decoration: none;
        --post-pg-grid-large-post-list-ratingFont-style: normal;
        --post-pg-grid-large-post-list-ratingFont-variant: normal;
        --post-pg-grid-large-post-list-ratingFont-weight: normal;
        --post-pg-grid-large-post-list-ratingFont-size: 14px;
        --post-pg-grid-large-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-pg-grid-large-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-grid-large-post-list-ratingFont-text-decoration: none;
        --post-pg-medium-post-list-ratingFont-style: normal;
        --post-pg-medium-post-list-ratingFont-variant: normal;
        --post-pg-medium-post-list-ratingFont-weight: normal;
        --post-pg-medium-post-list-ratingFont-size: 14px;
        --post-pg-medium-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-pg-medium-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-medium-post-list-ratingFont-text-decoration: none;
        --post-pg-side-by-side-right-post-list-ratingFont-style: normal;
        --post-pg-side-by-side-right-post-list-ratingFont-variant: normal;
        --post-pg-side-by-side-right-post-list-ratingFont-weight: normal;
        --post-pg-side-by-side-right-post-list-ratingFont-size: 14px;
        --post-pg-side-by-side-right-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-pg-side-by-side-right-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-side-by-side-right-post-list-ratingFont-text-decoration: none;
        --post-pg-text-on-image-large-post-list-ratingFont-style: normal;
        --post-pg-text-on-image-large-post-list-ratingFont-variant: normal;
        --post-pg-text-on-image-large-post-list-ratingFont-weight: normal;
        --post-pg-text-on-image-large-post-list-ratingFont-size: 14px;
        --post-pg-text-on-image-large-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-pg-text-on-image-large-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-large-post-list-ratingFont-text-decoration: none;
        --post-pg-text-on-image-small-post-list-ratingFont-style: normal;
        --post-pg-text-on-image-small-post-list-ratingFont-variant: normal;
        --post-pg-text-on-image-small-post-list-ratingFont-weight: normal;
        --post-pg-text-on-image-small-post-list-ratingFont-size: 14px;
        --post-pg-text-on-image-small-post-list-ratingFont-line-height: 19.599999999999998px;
        --post-pg-text-on-image-small-post-list-ratingFont-family: avenir-lt-w01_35-light1475496,
          sans-serif;
        --post-pg-text-on-image-small-post-list-ratingFont-text-decoration: none;
        --wix-color-1: 255, 255, 255;
        --wix-color-2: 213, 213, 213;
        --wix-color-3: 170, 170, 170;
        --wix-color-4: 128, 128, 128;
        --wix-color-5: 85, 85, 85;
        --wix-color-6: 190, 196, 216;
        --wix-color-7: 149, 156, 178;
        --wix-color-8: 105, 113, 139;
        --wix-color-9: 52, 63, 100;
        --wix-color-10: 26, 32, 50;
        --wix-color-11: 182, 232, 227;
        --wix-color-12: 141, 209, 202;
        --wix-color-13: 65, 186, 174;
        --wix-color-14: 43, 124, 116;
        --wix-color-15: 22, 62, 58;
        --wix-color-16: 184, 242, 231;
        --wix-color-17: 147, 230, 213;
        --wix-color-18: 61, 217, 186;
        --wix-color-19: 41, 145, 124;
        --wix-color-20: 20, 72, 62;
        --wix-color-21: 243, 229, 209;
        --wix-color-22: 232, 204, 167;
        --wix-color-23: 174, 153, 125;
        --wix-color-24: 116, 102, 84;
        --wix-color-25: 58, 51, 42;
        --wix-color-26: 255, 255, 255;
        --wix-color-27: 85, 85, 85;
        --wix-color-28: 213, 213, 213;
        --wix-color-29: 170, 170, 170;
        --wix-color-30: 128, 128, 128;
        --wix-color-31: 105, 113, 139;
        --wix-color-32: 85, 85, 85;
        --wix-color-33: 170, 170, 170;
        --wix-color-34: 255, 255, 255;
        --wix-color-35: 85, 85, 85;
        --wix-color-36: 85, 85, 85;
        --wix-color-37: 213, 213, 213;
        --wix-color-38: 105, 113, 139;
        --wix-color-39: 105, 113, 139;
        --wix-color-40: 255, 255, 255;
        --wix-color-41: 255, 255, 255;
        --wix-color-42: 105, 113, 139;
        --wix-color-43: 105, 113, 139;
        --wix-color-44: 170, 170, 170;
        --wix-color-45: 170, 170, 170;
        --wix-color-46: 255, 255, 255;
        --wix-color-47: 255, 255, 255;
        --wix-color-48: 105, 113, 139;
        --wix-color-49: 255, 255, 255;
        --wix-color-50: 105, 113, 139;
        --wix-color-51: 105, 113, 139;
        --wix-color-52: 255, 255, 255;
        --wix-color-53: 255, 255, 255;
        --wix-color-54: 170, 170, 170;
        --wix-color-55: 170, 170, 170;
        --wix-font-Title: normal normal normal 14px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Title-style: normal;
        --wix-font-Title-variant: normal;
        --wix-font-Title-weight: normal;
        --wix-font-Title-size: 14px;
        --wix-font-Title-line-height: 1.4em;
        --wix-font-Title-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Title-text-decoration: none;
        --wix-font-Menu: normal normal normal 16px/1.4em din-next-w01-light,
          sans-serif;
        --wix-font-Menu-style: normal;
        --wix-font-Menu-variant: normal;
        --wix-font-Menu-weight: normal;
        --wix-font-Menu-size: 16px;
        --wix-font-Menu-line-height: 1.4em;
        --wix-font-Menu-family: din-next-w01-light, sans-serif;
        --wix-font-Menu-text-decoration: none;
        --wix-font-Page-title: normal normal normal 26px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Page-title-style: normal;
        --wix-font-Page-title-variant: normal;
        --wix-font-Page-title-weight: normal;
        --wix-font-Page-title-size: 26px;
        --wix-font-Page-title-line-height: 1.4em;
        --wix-font-Page-title-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Page-title-text-decoration: none;
        --wix-font-Heading-XL: normal normal normal 70px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Heading-XL-style: normal;
        --wix-font-Heading-XL-variant: normal;
        --wix-font-Heading-XL-weight: normal;
        --wix-font-Heading-XL-size: 70px;
        --wix-font-Heading-XL-line-height: 1.4em;
        --wix-font-Heading-XL-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-XL-text-decoration: none;
        --wix-font-Heading-L: normal normal bold 50px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Heading-L-style: normal;
        --wix-font-Heading-L-variant: normal;
        --wix-font-Heading-L-weight: bold;
        --wix-font-Heading-L-size: 50px;
        --wix-font-Heading-L-line-height: 1.4em;
        --wix-font-Heading-L-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-L-text-decoration: none;
        --wix-font-Heading-M: normal normal normal 24px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Heading-M-style: normal;
        --wix-font-Heading-M-variant: normal;
        --wix-font-Heading-M-weight: normal;
        --wix-font-Heading-M-size: 24px;
        --wix-font-Heading-M-line-height: 1.4em;
        --wix-font-Heading-M-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-M-text-decoration: none;
        --wix-font-Heading-S: normal normal normal 22px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Heading-S-style: normal;
        --wix-font-Heading-S-variant: normal;
        --wix-font-Heading-S-weight: normal;
        --wix-font-Heading-S-size: 22px;
        --wix-font-Heading-S-line-height: 1.4em;
        --wix-font-Heading-S-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Heading-S-text-decoration: none;
        --wix-font-Body-L: normal normal normal 16px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Body-L-style: normal;
        --wix-font-Body-L-variant: normal;
        --wix-font-Body-L-weight: normal;
        --wix-font-Body-L-size: 16px;
        --wix-font-Body-L-line-height: 1.4em;
        --wix-font-Body-L-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Body-L-text-decoration: none;
        --wix-font-Body-M: normal normal normal 14px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Body-M-style: normal;
        --wix-font-Body-M-variant: normal;
        --wix-font-Body-M-weight: normal;
        --wix-font-Body-M-size: 14px;
        --wix-font-Body-M-line-height: 1.4em;
        --wix-font-Body-M-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Body-M-text-decoration: none;
        --wix-font-Body-S: normal normal normal 12px/1.4em
            avenir-lt-w01_35-light1475496,
          sans-serif;
        --wix-font-Body-S-style: normal;
        --wix-font-Body-S-variant: normal;
        --wix-font-Body-S-weight: normal;
        --wix-font-Body-S-size: 12px;
        --wix-font-Body-S-line-height: 1.4em;
        --wix-font-Body-S-family: avenir-lt-w01_35-light1475496, sans-serif;
        --wix-font-Body-S-text-decoration: none;
        --wix-font-Body-XS: normal normal normal 12px/1.4em din-next-w01-light,
          sans-serif;
        --wix-font-Body-XS-style: normal;
        --wix-font-Body-XS-variant: normal;
        --wix-font-Body-XS-weight: normal;
        --wix-font-Body-XS-size: 12px;
        --wix-font-Body-XS-line-height: 1.4em;
        --wix-font-Body-XS-family: din-next-w01-light, sans-serif;
        --wix-font-Body-XS-text-decoration: none;
        --wix-font-LIGHT: normal normal normal 12px/1.4em
          HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-style: normal;
        --wix-font-LIGHT-variant: normal;
        --wix-font-LIGHT-weight: normal;
        --wix-font-LIGHT-size: 12px;
        --wix-font-LIGHT-line-height: 1.4em;
        --wix-font-LIGHT-family: HelveticaNeueW01-45Ligh;
        --wix-font-LIGHT-text-decoration: none;
        --wix-font-MEDIUM: normal normal normal 12px/1.4em
          HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-style: normal;
        --wix-font-MEDIUM-variant: normal;
        --wix-font-MEDIUM-weight: normal;
        --wix-font-MEDIUM-size: 12px;
        --wix-font-MEDIUM-line-height: 1.4em;
        --wix-font-MEDIUM-family: HelveticaNeueW01-55Roma;
        --wix-font-MEDIUM-text-decoration: none;
        --wix-font-STRONG: normal normal normal 12px/1.4em
          HelveticaNeueW01-65Medi;
        --wix-font-STRONG-style: normal;
        --wix-font-STRONG-variant: normal;
        --wix-font-STRONG-weight: normal;
        --wix-font-STRONG-size: 12px;
        --wix-font-STRONG-line-height: 1.4em;
        --wix-font-STRONG-family: HelveticaNeueW01-65Medi;
        --wix-font-STRONG-text-decoration: none;
      }

      #comp-lams11d3 {
        --shc-mutated-brightness: 9, 30, 51;
        --margin-start: 0px;
        --margin-end: 0px;
        --fnt: normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,
          sans-serif;
        direction: var(--wix-opt-in-direction, ltr);
        --label-align: center;
        --label-text-align: center;
      }
    </style>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"
      defer=""
    ></script>
    <script>
      window.addEventListener("DOMContentLoaded", function () {
        jQuery.event.special.touchstart = {
          setup: function (_, ns, handle) {
            this.addEventListener("touchstart", handle, {
              passive: !ns.includes("noPreventDefault"),
            });
          },
        };
        jQuery.event.special.touchmove = {
          setup: function (_, ns, handle) {
            this.addEventListener("touchmove", handle, {
              passive: !ns.includes("noPreventDefault"),
            });
          },
        };
        jQuery.event.special.wheel = {
          setup: function (_, ns, handle) {
            this.addEventListener("wheel", handle, { passive: true });
          },
        };
        jQuery.event.special.mousewheel = {
          setup: function (_, ns, handle) {
            this.addEventListener("mousewheel", handle, { passive: true });
          },
        };
      });
    </script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
      defer=""
    ></script>
    <script type="text/javascript" defer="">
      window.addEventListener("DOMContentLoaded", function () {
        var $jq = jQuery.noConflict();
        $jq(document).ready(function () {
          if ($jq(".slick-carousel").length) {
            $jq(".slick-carousel").slick({
              dots: true,
              infinite: true,
              speed: 300,
              slidesToShow: 2,
              responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                  },
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                  },
                },
              ],
            });
          }
        });
      });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"
      defer=""
    ></script>
    <script>
      window.addEventListener("DOMContentLoaded", function () {
        jQuery.event.special.touchstart = {
          setup: function (_, ns, handle) {
            this.addEventListener("touchstart", handle, {
              passive: !ns.includes("noPreventDefault"),
            });
          },
        };
        jQuery.event.special.touchmove = {
          setup: function (_, ns, handle) {
            this.addEventListener("touchmove", handle, {
              passive: !ns.includes("noPreventDefault"),
            });
          },
        };
        jQuery.event.special.wheel = {
          setup: function (_, ns, handle) {
            this.addEventListener("wheel", handle, { passive: true });
          },
        };
        jQuery.event.special.mousewheel = {
          setup: function (_, ns, handle) {
            this.addEventListener("mousewheel", handle, { passive: true });
          },
        };
      });
    </script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
      defer=""
    ></script>
    <style type="text/css">
      .slick-next {
        z-index: 100;
        right: 75px;
      }
      .slick-prev {
        z-index: 100;
        left: 75px;
      }
    </style>
    <meta name="title" content="Untitled" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta property="og:title" content="Untitled" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Untitled" />
    <title>Untitled</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
  </head>
  <body class="">
    <style>
      /* Sticky Footer */
      html, body {
        height: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
      body > main#PAGES_CONTAINER,
      body > #PAGES_CONTAINER {
        flex: 1 0 auto;
      }
      #SITE_FOOTER {
        flex-shrink: 0;
      }
    </style>
    <!--pageHtmlEmbeds.bodyStart start-->

    <!--pageHtmlEmbeds.bodyStart end-->

    <!-- domStoreHtml -->
    <svg data-dom-store="" style="display: none">
      <defs id="dom-store-defs"></defs>
    </svg>

    <div id="SITE_CONTAINER">
      <div id="main_MF" class="main_MF">
        <div
          id="SCROLL_TO_TOP"
          class="Vd6aQZ ignore-focus SCROLL_TO_TOP"
          role="region"
          tabindex="-1"
          aria-label="top of page"
        >
          <span class="mHZSwn">top of page</span>
        </div>
        <button
          id="SKIP_TO_CONTENT_BTN"
          class="SKIP_TO_CONTENT_BTN LHrbPP has-custom-focus"
          tabindex="0"
        >
          Passer au contenu principal
        </button>
        <div
          id="BACKGROUND_GROUP"
          class="backgroundGroup_iijbr BACKGROUND_GROUP"
        >
          <div id="BACKGROUND_GROUP_TRANSITION_GROUP">
            <div
              id="pageBackground_iijbr"
              data-media-height-override-type=""
              data-media-position-override="false"
              class="pageBackground_iijbr BmZ5pC"
            >
              <div
                id="bgLayers_pageBackground_iijbr"
                data-hook="bgLayers"
                data-motion-part="BG_LAYER pageBackground_iijbr"
                class="MW5IWV"
              >
                <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                <div
                  id="bgMedia_pageBackground_iijbr"
                  data-motion-part="BG_MEDIA pageBackground_iijbr"
                  class="VgO9Yg"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div id="site-root" class="site-root">
          <div id="masterPage" class="mesh-layout masterPage css-editing-scope">
          <x-navbar></x-navbar>
            <main
              id="PAGES_CONTAINER"
              class="PAGES_CONTAINER"
              tabindex="-1"
              data-main-content="true"
            >
              <div id="SITE_PAGES" class="JsJXaX SITE_PAGES">
                <div id="SITE_PAGES_TRANSITION_GROUP" class="AnQkDU">
                  <div id="iijbr" class="dBAkHi iijbr">
                    <div class="PFkO7r wixui-page" data-testid="page-bg"></div>
                    <div class="HT5ybB">
                      <!--$-->
                      <div id="Containeriijbr" class="Containeriijbr SPY_vo">
                        <div
                          data-mesh-id="ContaineriijbrinlineContent"
                          data-testid="inline-content"
                          class=""
                        >
                          <div
                            data-mesh-id="ContaineriijbrinlineContent-gridContainer"
                            data-testid="mesh-container-content"
                          >
                            <!--$-->






                            
                           <section id="comp-lc96quda" tabindex="-1" class="Oqnisf comp-lc96quda wixui-section" data-block-level-container="ClassicSection" aria-label="main content">
                             <div id="bgLayers_comp-lc96quda" data-hook="bgLayers" data-motion-part="BG_LAYER comp-lc96quda" class="MW5IWV">
                               <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                               <div id="bgMedia_comp-lc96quda" data-motion-part="BG_MEDIA comp-lc96quda" class="VgO9Yg"></div>
                             </div>
                             <div data-mesh-id="comp-lc96qudainlineContent" data-testid="inline-content" class="">
                               <div data-mesh-id="comp-lc96qudainlineContent-gridContainer" data-testid="mesh-container-content">
                                 <div id="comp-laryd934" class="custom-slider-container" style="position: relative; width: 100%; height: 609px; overflow: hidden;">
                                   <div class="custom-slider-wrapper" style="position: relative; width: 100%; height: 100%;">
                                     
                                     <!-- Slide 1 -->
                                     <div class="custom-slide active" data-slide="0" id="comp-laryd985" style="position: absolute; width: 100%; height: 100%; transform: translateX(0%); transition: transform 0.6s ease-in-out;">
                                       <div id="bgLayers_comp-laryd985" data-hook="bgLayers" data-motion-part="BG_LAYER comp-laryd985" class="MW5IWV eF_jBL">
                                         <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                         <div id="bgMedia_comp-laryd985" data-motion-part="BG_MEDIA comp-laryd985" class="VgO9Yg">
                                           <wow-image id="img_comp-laryd985" class="jhxvbR Kv1aVt dLPlxY mNGsUM bgImage" data-image-info="{&quot;containerId&quot;:&quot;comp-laryd985&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:1419,&quot;targetHeight&quot;:609,&quot;isLQIP&quot;:true,&quot;encoding&quot;:&quot;AVIF&quot;,&quot;imageData&quot;:{&quot;width&quot;:6000,&quot;height&quot;:1972,&quot;uri&quot;:&quot;0ba5583727e04a07a2b0920b3359f2c0.jpg&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-motion-part="BG_IMG comp-laryd985" data-bg-effect-name="" data-has-ssr-src="true">
                                             <img src="https://static.wixstatic.com/media/0ba5583727e04a07a2b0920b3359f2c0.jpg/v1/fill/w_1897,h_609,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/0ba5583727e04a07a2b0920b3359f2c0.jpg" alt="Consultation Web" width="1419" height="609" style="width: 1897px; height: 609px; object-fit: cover; object-position: 50% 50%;" data-ssr-src-done="true" fetchpriority="high">
                                           </wow-image>
                                         </div>
                                       </div>
                                       <div class="wfm0FO"></div>
                                       <div data-mesh-id="comp-laryd985inlineContent" data-testid="inline-content" class="">
                                         <div data-mesh-id="comp-laryd985inlineContent-gridContainer" data-testid="mesh-container-content">
                                           <!-- Slide 1 Title -->
                                           <div id="comp-lb3ibpd5" class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lb3ibpd5 wixui-rich-text" data-testid="richTextElement">
                                             <p class="font_0 wixui-rich-text__text" style="font-size:120px; line-height:0.8em;">
                                               <span class="color_11 wixui-rich-text__text">
                                                 <span style="font-family:avenir-lt-w01_85-heavy1475544,avenir-lt-w05_85-heavy,sans-serif;" class="wixui-rich-text__text">
                                                   <span style="font-size:120px;" class="wixui-rich-text__text">
                                                     <span style="font-weight:bold;" class="wixui-rich-text__text">
                                                       <span style="letter-spacing:-0.02em;" class="wixui-rich-text__text">SLS</span>
                                                     </span>
                                                   </span>
                                                 </span>
                                               </span>
                                             </p>
                                           </div>
                                           <!-- Slide 1 Subtitle -->
                                           <div id="comp-laryd988" class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-laryd988 wixui-rich-text" data-testid="richTextElement" data-motion-enter="done">
                                             <p class="font_0 wixui-rich-text__text" style="font-size:39px; line-height:normal;">
                                               <span style="font-size:39px;" class="wixui-rich-text__text">
                                                 <span class="color_11 wixui-rich-text__text">
                                                   <span style="font-family:avenir-lt-w01_85-heavy1475544,avenir-lt-w05_85-heavy,sans-serif;" class="wixui-rich-text__text">
                                                     <span style="font-weight:700; letter-spacing:-0.02em;" class="wixui-rich-text__text">Un acteur reconnue en conseil et formation</span>
                                                   </span>
                                                 </span>
                                               </span>
                                             </p>
                                           </div>
                                           <!-- Slide 1 Button -->
                                           <div id="comp-larzfavx" class="comp-larzfavx" data-semantic-classname="button" data-motion-enter="done" style="pointer-events: auto !important; z-index: 2000 !important; position: relative;">
                                             <a data-testid="linkElement" href="https://google.com" target="_self" class="StylableButton2545352419__root style-las8o0wn__root wixui-button StylableButton2545352419__link" aria-label="Nous connaitre" style="pointer-events: auto !important; z-index: 2000 !important; position: relative;">
                                               <span class="StylableButton2545352419__container">
                                                 <Button style="z-index: 2000 !important; position: relative;" class="StylableButton2545352419__label wixui-button__label" data-testid="stylablebutton-label">Nous connaitre</Button>
                                                 <span class="StylableButton2545352419__icon wixui-button__icon" aria-hidden="true" data-testid="stylablebutton-icon">
                                                   <span>
                                                     <svg data-bbox="16.5 53.141 167 93.72" viewBox="0 0 200 200" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
    <g>
        <path d="M166.471 56.5l-66.674 66.218-66.219-66.674c-3.826-3.852-10.323-3.874-14.175-.048s-3.874 10.322-.049 14.175l73.281 73.786c3.826 3.852 10.323 3.874 14.175.049l73.786-73.281c3.852-3.826 3.874-10.323.049-14.175s-10.027-3.876-14.174-.05z"></path>
    </g>
</svg>
                                                   </span>
                                                 </span>
                                               </span>
                                             </a>
                                           </div>
                                         </div>
                                       </div>
                                     </div>

                                     <!-- Slide 2 -->
                                     <div class="custom-slide" data-slide="1" id="comp-laryd985-slide2" style="position: absolute; width: 100%; height: 100%; transform: translateX(100%); transition: transform 0.6s ease-in-out;">
                                       <div id="bgLayers_comp-laryd985-slide2" data-hook="bgLayers" data-motion-part="BG_LAYER comp-laryd985-slide2" class="MW5IWV eF_jBL">
                                         <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                         <div id="bgMedia_comp-laryd985-slide2" data-motion-part="BG_MEDIA comp-laryd985-slide2" class="VgO9Yg">
                                           <wow-image id="img_comp-laryd985-slide2" class="jhxvbR Kv1aVt dLPlxY mNGsUM bgImage" data-image-info="{&quot;containerId&quot;:&quot;comp-laryd985-slide2&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:1419,&quot;targetHeight&quot;:609,&quot;isLQIP&quot;:true,&quot;encoding&quot;:&quot;AVIF&quot;,&quot;imageData&quot;:{&quot;width&quot;:6000,&quot;height&quot;:1972,&quot;uri&quot;:&quot;0ba5583727e04a07a2b0920b3359f2c0.jpg&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-motion-part="BG_IMG comp-laryd985-slide2" data-bg-effect-name="" data-has-ssr-src="true">
                                           <!-- TODO: Replace with your second slide image URL -->
                                           <img src="https://static.wixstatic.com/media/0ba5583727e04a07a2b0920b3359f2c0.jpg/v1/fill/w_1897,h_609,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/0ba5583727e04a07a2b0920b3359f2c0.jpg" alt="Slide 2" width="1419" height="609" style="width: 1897px; height: 609px; object-fit: cover; object-position: 50% 50%;" data-ssr-src-done="true" fetchpriority="high">
                                           </wow-image>
                                         </div>
                                       </div>
                                       <div class="wfm0FO"></div>
                                       <div data-mesh-id="comp-laryd985-slide2-inlineContent" data-testid="inline-content" class="">
                                         <div data-mesh-id="comp-laryd985-slide2-inlineContent-gridContainer" data-testid="mesh-container-content">
                                           <!-- Slide 2 Title -->
                                           <div id="comp-lb3ibpd5-slide2" class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lb3ibpd5 wixui-rich-text" data-testid="richTextElement">
                                             <p class="font_0 wixui-rich-text__text" style="font-size:120px; line-height:0.8em;">
                                               <span class="color_11 wixui-rich-text__text">
                                                 <span style="font-family:avenir-lt-w01_85-heavy1475544,avenir-lt-w05_85-heavy,sans-serif;" class="wixui-rich-text__text">
                                                   <span style="font-size:120px;" class="wixui-rich-text__text">
                                                     <span style="font-weight:bold;" class="wixui-rich-text__text">
                                                       <span style="letter-spacing:-0.02em;" class="wixui-rich-text__text">SLS</span>
                                                     </span>
                                                   </span>
                                                 </span>
                                               </span>
                                             </p>
                                           </div>
                                           <!-- Slide 2 Subtitle -->
                                           <div id="comp-laryd988-slide2" class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-laryd988 wixui-rich-text" data-testid="richTextElement" data-motion-enter="done">
                                             <p class="font_0 wixui-rich-text__text" style="font-size:39px; line-height:normal;">
                                               <span style="font-size:39px;" class="wixui-rich-text__text">
                                                 <span class="color_11 wixui-rich-text__text">
                                                   <span style="font-family:avenir-lt-w01_85-heavy1475544,avenir-lt-w05_85-heavy,sans-serif;" class="wixui-rich-text__text">
                                                     <span style="font-weight:700; letter-spacing:-0.02em;" class="wixui-rich-text__text">Un acteur reconnue en conseil et formation</span>
                                                   </span>
                                                 </span>
                                               </span>
                                             </p>
                                           </div>
                                           <!-- Slide 2 Button -->
                                           <div id="comp-larzfavx-slide2" class="comp-larzfavx" data-semantic-classname="button" data-motion-enter="done" style="pointer-events: auto !important; z-index: 2000 !important; position: relative;">
                                             <a data-testid="linkElement" href="https://google.com" target="_self" class="StylableButton2545352419__root style-las8o0wn__root wixui-button StylableButton2545352419__link" aria-label="Nous connaitre" style="pointer-events: auto !important; z-index: 2000 !important; position: relative;">
                                               <span class="StylableButton2545352419__container">
                                                 <Button style="z-index: 2000 !important; position: relative;" class="StylableButton2545352419__label wixui-button__label" data-testid="stylablebutton-label">Nous connaitre</Button>
                                                 <span class="StylableButton2545352419__icon wixui-button__icon" aria-hidden="true" data-testid="stylablebutton-icon">
                                                   <span>
                                                     <svg data-bbox="16.5 53.141 167 93.72" viewBox="0 0 200 200" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
                                                       <g>
                                                         <path d="M166.471 56.5l-66.674 66.218-66.219-66.674c-3.826-3.852-10.323-3.874-14.175-.048s-3.874 10.322-.049 14.175l73.281 73.786c3.826 3.852 10.323 3.874 14.175.049l73.786-73.281c3.852-3.826 3.874-10.323.049-14.175s-10.027-3.876-14.174-.05z"></path>
                                                       </g>
                                                     </svg>
                                                   </span>
                                                 </span>
                                               </span>
                                             </a>
                                           </div>
                                         </div>
                                       </div>
                                     </div>

                                     <!-- Slide 3 -->
                                     <div class="custom-slide" data-slide="2" id="comp-laryd985-slide3" style="position: absolute; width: 100%; height: 100%; transform: translateX(100%); transition: transform 0.6s ease-in-out;">
                                       <div id="bgLayers_comp-laryd985-slide3" data-hook="bgLayers" data-motion-part="BG_LAYER comp-laryd985-slide3" class="MW5IWV eF_jBL">
                                         <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                         <div id="bgMedia_comp-laryd985-slide3" data-motion-part="BG_MEDIA comp-laryd985-slide3" class="VgO9Yg">
                                           <wow-image id="img_comp-laryd985-slide3" class="jhxvbR Kv1aVt dLPlxY mNGsUM bgImage" data-image-info="{&quot;containerId&quot;:&quot;comp-laryd985-slide3&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:1419,&quot;targetHeight&quot;:609,&quot;isLQIP&quot;:true,&quot;encoding&quot;:&quot;AVIF&quot;,&quot;imageData&quot;:{&quot;width&quot;:6000,&quot;height&quot;:1972,&quot;uri&quot;:&quot;0ba5583727e04a07a2b0920b3359f2c0.jpg&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-motion-part="BG_IMG comp-laryd985-slide3" data-bg-effect-name="" data-has-ssr-src="true">
                                           <!-- TODO: Replace with your third slide image URL -->
                                           <img src="https://static.wixstatic.com/media/0ba5583727e04a07a2b0920b3359f2c0.jpg/v1/fill/w_1897,h_609,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/0ba5583727e04a07a2b0920b3359f2c0.jpg" alt="Slide 3" width="1419" height="609" style="width: 1897px; height: 609px; object-fit: cover; object-position: 50% 50%;" data-ssr-src-done="true" fetchpriority="high">
                                           </wow-image>
                                         </div>
                                       </div>
                                       <div class="wfm0FO"></div>
                                       <div data-mesh-id="comp-laryd985-slide3-inlineContent" data-testid="inline-content" class="">
                                         <div data-mesh-id="comp-laryd985-slide3-inlineContent-gridContainer" data-testid="mesh-container-content">
                                           <!-- Slide 3 Title -->
                                           <div id="comp-lb3ibpd5-slide3" class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lb3ibpd5 wixui-rich-text" data-testid="richTextElement">
                                             <p class="font_0 wixui-rich-text__text" style="font-size:120px; line-height:0.8em;">
                                               <span class="color_11 wixui-rich-text__text">
                                                 <span style="font-family:avenir-lt-w01_85-heavy1475544,avenir-lt-w05_85-heavy,sans-serif;" class="wixui-rich-text__text">
                                                   <span style="font-size:120px;" class="wixui-rich-text__text">
                                                     <span style="font-weight:bold;" class="wixui-rich-text__text">
                                                       <span style="letter-spacing:-0.02em;" class="wixui-rich-text__text">SLS</span>
                                                     </span>
                                                   </span>
                                                 </span>
                                               </span>
                                             </p>
                                           </div>
                                           <!-- Slide 3 Subtitle -->
                                           <div id="comp-laryd988-slide3" class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-laryd988 wixui-rich-text" data-testid="richTextElement" data-motion-enter="done">
                                             <p class="font_0 wixui-rich-text__text" style="font-size:39px; line-height:normal;">
                                               <span style="font-size:39px;" class="wixui-rich-text__text">
                                                 <span class="color_11 wixui-rich-text__text">
                                                   <span style="font-family:avenir-lt-w01_85-heavy1475544,avenir-lt-w05_85-heavy,sans-serif;" class="wixui-rich-text__text">
                                                     <span style="font-weight:700; letter-spacing:-0.02em;" class="wixui-rich-text__text">Un acteur reconnue en conseil et formation</span>
                                                   </span>
                                                 </span>
                                               </span>
                                             </p>
                                           </div>
                                           <!-- Slide 3 Button -->
                                           <div id="comp-larzfavx-slide3" class="comp-larzfavx" data-semantic-classname="button" data-motion-enter="done" style="pointer-events: auto !important; z-index: 2000 !important; position: relative;">
                                             <a data-testid="linkElement" href="https://google.com" target="_self" class="StylableButton2545352419__root style-las8o0wn__root wixui-button StylableButton2545352419__link" aria-label="Nous connaitre" style="pointer-events: auto !important; z-index: 2000 !important; position: relative;">
                                               <span class="StylableButton2545352419__container">
                                                 <Button style="z-index: 2000 !important; position: relative;" class="StylableButton2545352419__label wixui-button__label" data-testid="stylablebutton-label">Nous connaitre</Button>
                                                 <span class="StylableButton2545352419__icon wixui-button__icon" aria-hidden="true" data-testid="stylablebutton-icon">
                                                   <span>
                                                     <svg data-bbox="16.5 53.141 167 93.72" viewBox="0 0 200 200" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
                                                       <g>
                                                         <path d="M166.471 56.5l-66.674 66.218-66.219-66.674c-3.826-3.852-10.323-3.874-14.175-.048s-3.874 10.322-.049 14.175l73.281 73.786c3.826 3.852 10.323 3.874 14.175.049l73.786-73.281c3.852-3.826 3.874-10.323.049-14.175s-10.027-3.876-14.174-.05z"></path>
                                                       </g>
                                                     </svg>
                                                   </span>
                                                 </span>
                                               </span>
                                             </a>
                                           </div>
                                         </div>
                                       </div>
                                     </div>

                                   </div>
                                   
                                   <!-- Navigation Buttons -->
                                   <button class="slider-nav-btn slider-prev" aria-label="Previous slide" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); z-index: 1000; background: rgba(255, 255, 255, 0.7); border: none; width: 50px; height: 50px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: background 0.3s; pointer-events: auto;">
                                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                     </svg>
                                   </button>
                                   <button class="slider-nav-btn slider-next" aria-label="Next slide" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); z-index: 1000; background: rgba(255, 255, 255, 0.7); border: none; width: 50px; height: 50px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: background 0.3s; pointer-events: auto;">
                                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                     </svg>
                                   </button>
                                   
                                   <!-- Slide Indicators -->
                                   <div class="slider-indicators" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); z-index: 1000; display: flex; gap: 10px; pointer-events: auto;">
                                     <button class="slider-indicator active" data-slide="0" aria-label="Go to slide 1" style="width: 12px; height: 12px; border-radius: 50%; border: none; background: rgba(255, 255, 255, 0.7); cursor: pointer; transition: background 0.3s; pointer-events: auto;"></button>
                                     <button class="slider-indicator" data-slide="1" aria-label="Go to slide 2" style="width: 12px; height: 12px; border-radius: 50%; border: none; background: rgba(255, 255, 255, 0.4); cursor: pointer; transition: background 0.3s; pointer-events: auto;"></button>
                                     <button class="slider-indicator" data-slide="2" aria-label="Go to slide 3" style="width: 12px; height: 12px; border-radius: 50%; border: none; background: rgba(255, 255, 255, 0.4); cursor: pointer; transition: background 0.3s; pointer-events: auto;"></button>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </section>





















                            <!--/$--><!--$-->
                            <section
                              id="comp-lc96qudb"
                              tabindex="-1"
                              class="Oqnisf comp-lc96qudb wixui-section"
                              data-block-level-container="ClassicSection"
                            >
                              <div
                                id="bgLayers_comp-lc96qudb"
                                data-hook="bgLayers"
                                data-motion-part="BG_LAYER comp-lc96qudb"
                                class="MW5IWV"
                              >
                                <div
                                  data-testid="colorUnderlay"
                                  class="LWbAav Kv1aVt"
                                ></div>
                                <div
                                  id="bgMedia_comp-lc96qudb"
                                  data-motion-part="BG_MEDIA comp-lc96qudb"
                                  class="VgO9Yg"
                                ></div>
                              </div>
                              <div
                                data-mesh-id="comp-lc96qudbinlineContent"
                                data-testid="inline-content"
                                class=""
                              >
                                <div
                                  data-mesh-id="comp-lc96qudbinlineContent-gridContainer"
                                  data-testid="mesh-container-content"
                                >
                                  <!--$-->
                                  <section
                                    id="comp-lamqvuzb"
                                    class="comp-lamqvuzb CohWsy wixui-column-strip"
                                  >
                                    <div
                                      id="bgLayers_comp-lamqvuzb"
                                      data-hook="bgLayers"
                                      data-motion-part="BG_LAYER comp-lamqvuzb"
                                      class="if7Vw2"
                                    >
                                      <div
                                        data-testid="colorUnderlay"
                                        class="tcElKx i1tH8h"
                                      ></div>
                                      <div
                                        id="bgMedia_comp-lamqvuzb"
                                        data-motion-part="BG_MEDIA comp-lamqvuzb"
                                        class="wG8dni"
                                      ></div>
                                    </div>
                                    <div data-testid="columns" class="V5AUxf">
                                      <!--$-->
                                      <div
                                        id="comp-lamqvv0y"
                                        class="comp-lamqvv0y YzqVVZ wixui-column-strip__column"
                                      >
                                        <div
                                          id="bgLayers_comp-lamqvv0y"
                                          data-hook="bgLayers"
                                          data-motion-part="BG_LAYER comp-lamqvv0y"
                                          class="MW5IWV"
                                        >
                                          <div
                                            data-testid="colorUnderlay"
                                            class="LWbAav Kv1aVt"
                                          ></div>
                                          <div
                                            id="bgMedia_comp-lamqvv0y"
                                            data-motion-part="BG_MEDIA comp-lamqvv0y"
                                            class="VgO9Yg"
                                          ></div>
                                        </div>
                                        <div
                                          data-mesh-id="comp-lamqvv0yinlineContent"
                                          data-testid="inline-content"
                                          class=""
                                        >
                                          <div
                                            data-mesh-id="comp-lamqvv0yinlineContent-gridContainer"
                                            data-testid="mesh-container-content"
                                          >
                                            <!--$-->
                                            <div
                                              id="comp-lamry8wk"
                                              class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lamry8wk wixui-rich-text"
                                              data-testid="richTextElement"
                                            >
                                              <h2
                                                class="font_2 wixui-rich-text__text"
                                                style="
                                                  line-height: normal;
                                                  text-align: center;
                                                  font-size: 26px;
                                                "
                                              >
                                                <span
                                                  style="color: #113c66"
                                                  class="wixui-rich-text__text"
                                                  ><span
                                                    style="
                                                      font-family: avenir-lt-w01_85-heavy1475544,
                                                        avenir-lt-w05_85-heavy,
                                                        sans-serif;
                                                    "
                                                    class="wixui-rich-text__text"
                                                    ><span
                                                      style="font-weight: bold"
                                                      class="wixui-rich-text__text"
                                                      ><span
                                                        style="
                                                          letter-spacing: normal;
                                                        "
                                                        class="wixui-rich-text__text"
                                                        >Nos Services</span
                                                      ></span
                                                    ></span
                                                  ></span
                                                >
                                              </h2>
                                            </div>
                                            <!--/$--><!--$-->
                                            <div
                                              id="comp-lamqvxen"
                                              class="comp-lamqvxen wixui-repeater"
                                            >
                                              <div role="list" class="hRdzm4">
                                                <div class="cGWabE">
                                                  <div
                                                    role="listitem"
                                                    class="T7n0L6"
                                                  >
                                                    <!--$-->
                                                    <div
                                                      id="comp-lamqvxfv1__item1"
                                                      class="comp-lamqvxfv1 YzqVVZ wixui-repeater__item"
                                                    >
                                                      <div
                                                        id="bgLayers_comp-lamqvxfv1__item1"
                                                        data-hook="bgLayers"
                                                        data-motion-part="BG_LAYER comp-lamqvxfv1__item1"
                                                        class="MW5IWV"
                                                      >
                                                        <div
                                                          data-testid="colorUnderlay"
                                                          class="LWbAav Kv1aVt"
                                                        ></div>
                                                        <div
                                                          id="bgMedia_comp-lamqvxfv1__item1"
                                                          data-motion-part="BG_MEDIA comp-lamqvxfv1__item1"
                                                          class="VgO9Yg"
                                                        >
                                                          <wow-image
                                                            id="img_comp-lamqvxfv1__item1"
                                                            class="jhxvbR Kv1aVt dLPlxY mNGsUM bgImage"
                                                            data-image-info='{"containerId":"comp-lamqvxfv1__item1","alignType":"center","displayMode":"fill","targetWidth":277,"targetHeight":246,"encoding":"AVIF","imageData":{"width":3000,"height":2000,"uri":"8ad880_87096ffca61348ac891165532aae3c70~mv2.jpg","name":"","displayMode":"fill"}}'
                                                            data-motion-part="BG_IMG comp-lamqvxfv1__item1"
                                                            data-bg-effect-name=""
                                                            data-has-ssr-src=""
                                                            style="
                                                              --wix-img-max-width: max(
                                                                3000px,
                                                                100%
                                                              );
                                                            "
                                                            ><img
                                                              alt=""
                                                              style="
                                                                width: 277px;
                                                                height: 246px;
                                                                object-fit: cover;
                                                              "
                                                              width="277"
                                                              height="246"
                                                              data-ssr-src-done="true"
                                                              fetchpriority="high"
                                                              src="{{ asset('/images/8ad880_87096ffca61348ac891165532aae3c70~mv2.webp') }}"
                                                          /></wow-image>
                                                        </div>
                                                      </div>
                                                      <div
                                                        data-mesh-id="comp-lamqvxfv1__item1inlineContent"
                                                        data-testid="inline-content"
                                                        class=""
                                                      >
                                                        <div
                                                          data-mesh-id="comp-lamqvxfv1__item1inlineContent-gridContainer"
                                                          data-testid="mesh-container-content"
                                                        >
                                                          <!--$-->
                                                          <div
                                                            id="comp-lamqvxg32__item1"
                                                            class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lamqvxg32 wixui-rich-text"
                                                            data-testid="richTextElement"
                                                          >
                                                            <p
                                                              class="font_7 wixui-rich-text__text"
                                                              style="
                                                                font-size: 22px;
                                                                line-height: normal;
                                                                text-align: center;
                                                              "
                                                            >
                                                              <span
                                                                style="
                                                                  font-size: 22px;
                                                                "
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                  style="
                                                                    color: #ffffff;
                                                                  "
                                                                  class="wixui-rich-text__text"
                                                                  ><span
                                                                    style="
                                                                      font-weight: bold;
                                                                    "
                                                                    class="wixui-rich-text__text"
                                                                    ><span
                                                                      style="
                                                                        font-family: avenir-lt-w01_35-light1475496,
                                                                          avenir-lt-w05_35-light,
                                                                          sans-serif;
                                                                      "
                                                                      class="wixui-rich-text__text"
                                                                      ><span
                                                                        style="
                                                                          letter-spacing: normal;
                                                                        "
                                                                        class="wixui-rich-text__text"
                                                                        ><span
                                                                          style="
                                                                            background-color: #113c66;
                                                                          "
                                                                          class="wixui-rich-text__text"
                                                                          >&nbsp;
                                                                          Formation
                                                                          &nbsp;</span
                                                                        ></span
                                                                      ></span
                                                                    ></span
                                                                  ></span
                                                                ></span
                                                              >
                                                            </p>
                                                          </div>
                                                          <!--/$-->
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--/$-->
                                                  </div>
                                                  <div
                                                    role="listitem"
                                                    class="T7n0L6"
                                                  >
                                                    <!--$-->
                                                    <div
                                                      id="comp-lamqvxfv1__item2"
                                                      class="comp-lamqvxfv1 YzqVVZ wixui-repeater__item"
                                                    >
                                                      <div
                                                        id="bgLayers_comp-lamqvxfv1__item2"
                                                        data-hook="bgLayers"
                                                        data-motion-part="BG_LAYER comp-lamqvxfv1__item2"
                                                        class="MW5IWV"
                                                      >
                                                        <div
                                                          data-testid="colorUnderlay"
                                                          class="LWbAav Kv1aVt"
                                                        ></div>
                                                        <div
                                                          id="bgMedia_comp-lamqvxfv1__item2"
                                                          data-motion-part="BG_MEDIA comp-lamqvxfv1__item2"
                                                          class="VgO9Yg"
                                                        >
                                                          <wow-image
                                                            id="img_comp-lamqvxfv1__item2"
                                                            class="jhxvbR Kv1aVt dLPlxY mNGsUM bgImage"
                                                            data-image-info='{"containerId":"comp-lamqvxfv1__item2","alignType":"center","displayMode":"fill","targetWidth":277,"targetHeight":246,"encoding":"AVIF","imageData":{"width":3000,"height":2000,"uri":"8ad880_9c955e6809dd454391700975d68f91d5~mv2.jpg","name":"","displayMode":"fill"}}'
                                                            data-motion-part="BG_IMG comp-lamqvxfv1__item2"
                                                            data-bg-effect-name=""
                                                            data-has-ssr-src=""
                                                            style="
                                                              --wix-img-max-width: max(
                                                                3000px,
                                                                100%
                                                              );
                                                            "
                                                            ><img
                                                              alt=""
                                                              style="
                                                                width: 277px;
                                                                height: 246px;
                                                                object-fit: cover;
                                                              "
                                                              width="277"
                                                              height="246"
                                                              data-ssr-src-done="true"
                                                              fetchpriority="high"
                                                              src="{{ asset('/images/8ad880_9c955e6809dd454391700975d68f91d5~mv2.webp') }}"
                                                          /></wow-image>
                                                        </div>
                                                      </div>
                                                      <div
                                                        data-mesh-id="comp-lamqvxfv1__item2inlineContent"
                                                        data-testid="inline-content"
                                                        class=""
                                                      >
                                                        <div
                                                          data-mesh-id="comp-lamqvxfv1__item2inlineContent-gridContainer"
                                                          data-testid="mesh-container-content"
                                                        >
                                                          <!--$-->
                                                          <div
                                                            id="comp-lamqvxg32__item2"
                                                            class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lamqvxg32 wixui-rich-text"
                                                            data-testid="richTextElement"
                                                          >
                                                            <p
                                                              class="font_7 wixui-rich-text__text"
                                                              style="
                                                                font-size: 22px;
                                                                text-align: center;
                                                              "
                                                            >
                                                              <span
                                                                style="
                                                                  font-size: 22px;
                                                                "
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                  style="
                                                                    color: #ffffff;
                                                                  "
                                                                  class="wixui-rich-text__text"
                                                                  ><span
                                                                    style="
                                                                      font-weight: bold;
                                                                    "
                                                                    class="wixui-rich-text__text"
                                                                    ><span
                                                                      style="
                                                                        font-family: avenir-lt-w01_35-light1475496,
                                                                          avenir-lt-w05_35-light,
                                                                          sans-serif;
                                                                      "
                                                                      class="wixui-rich-text__text"
                                                                      ><span
                                                                        style="
                                                                          background-color: #113c66;
                                                                        "
                                                                        class="wixui-rich-text__text"
                                                                        >&nbsp;
                                                                        Coaching
                                                                        &nbsp;</span
                                                                      ></span
                                                                    ></span
                                                                  ></span
                                                                ></span
                                                              >
                                                            </p>
                                                          </div>
                                                          <!--/$-->
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--/$-->
                                                  </div>
                                                </div>
                                                <div class="cGWabE">
                                                  <div
                                                    role="listitem"
                                                    class="T7n0L6"
                                                  >
                                                    <!--$-->
                                                    <div
                                                      id="comp-lamqvxfv1__item-lamqwrmp"
                                                      class="comp-lamqvxfv1 YzqVVZ wixui-repeater__item"
                                                    >
                                                      <div
                                                        id="bgLayers_comp-lamqvxfv1__item-lamqwrmp"
                                                        data-hook="bgLayers"
                                                        data-motion-part="BG_LAYER comp-lamqvxfv1__item-lamqwrmp"
                                                        class="MW5IWV"
                                                      >
                                                        <div
                                                          data-testid="colorUnderlay"
                                                          class="LWbAav Kv1aVt"
                                                        ></div>
                                                        <div
                                                          id="bgMedia_comp-lamqvxfv1__item-lamqwrmp"
                                                          data-motion-part="BG_MEDIA comp-lamqvxfv1__item-lamqwrmp"
                                                          class="VgO9Yg"
                                                        >
                                                          <wow-image
                                                            id="img_comp-lamqvxfv1__item-lamqwrmp"
                                                            class="jhxvbR Kv1aVt dLPlxY mNGsUM bgImage"
                                                            data-image-info='{"containerId":"comp-lamqvxfv1__item-lamqwrmp","alignType":"center","displayMode":"fill","targetWidth":277,"targetHeight":246,"encoding":"AVIF","imageData":{"width":3000,"height":2000,"uri":"8ad880_09bfb4846808431499294111c9cb699f~mv2.jpg","name":"","displayMode":"fill"}}'
                                                            data-motion-part="BG_IMG comp-lamqvxfv1__item-lamqwrmp"
                                                            data-bg-effect-name=""
                                                            data-has-ssr-src=""
                                                            style="
                                                              --wix-img-max-width: max(
                                                                3000px,
                                                                100%
                                                              );
                                                            "
                                                            ><img
                                                              alt=""
                                                              style="
                                                                width: 277px;
                                                                height: 246px;
                                                                object-fit: cover;
                                                              "
                                                              width="277"
                                                              height="246"
                                                              data-ssr-src-done="true"
                                                              fetchpriority="high"
                                                              src="{{ asset('/images/8ad880_09bfb4846808431499294111c9cb699f~mv2.webp') }}"
                                                          /></wow-image>
                                                        </div>
                                                      </div>
                                                      <div
                                                        data-mesh-id="comp-lamqvxfv1__item-lamqwrmpinlineContent"
                                                        data-testid="inline-content"
                                                        class=""
                                                      >
                                                        <div
                                                          data-mesh-id="comp-lamqvxfv1__item-lamqwrmpinlineContent-gridContainer"
                                                          data-testid="mesh-container-content"
                                                        >
                                                          <!--$-->
                                                          <div
                                                            id="comp-lamqvxg32__item-lamqwrmp"
                                                            class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lamqvxg32 wixui-rich-text"
                                                            data-testid="richTextElement"
                                                          >
                                                            <p
                                                              class="font_7 wixui-rich-text__text"
                                                              style="
                                                                font-size: 22px;
                                                                line-height: normal;
                                                                text-align: center;
                                                              "
                                                            >
                                                              <span
                                                                style="
                                                                  font-size: 22px;
                                                                "
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                  style="
                                                                    color: #ffffff;
                                                                  "
                                                                  class="wixui-rich-text__text"
                                                                  ><span
                                                                    style="
                                                                      font-weight: bold;
                                                                    "
                                                                    class="wixui-rich-text__text"
                                                                    ><span
                                                                      style="
                                                                        font-family: avenir-lt-w01_35-light1475496,
                                                                          avenir-lt-w05_35-light,
                                                                          sans-serif;
                                                                      "
                                                                      class="wixui-rich-text__text"
                                                                      ><span
                                                                        style="
                                                                          letter-spacing: normal;
                                                                        "
                                                                        class="wixui-rich-text__text"
                                                                        ><span
                                                                          style="
                                                                            background-color: #113c66;
                                                                          "
                                                                          class="wixui-rich-text__text"
                                                                          >&nbsp;
                                                                          Consulting
                                                                          &nbsp;</span
                                                                        ></span
                                                                      ></span
                                                                    ></span
                                                                  ></span
                                                                ></span
                                                              >
                                                            </p>
                                                          </div>
                                                          <!--/$-->
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--/$-->
                                                  </div>
                                                  <div
                                                    role="listitem"
                                                    class="T7n0L6"
                                                  >
                                                    <!--$-->
                                                    <div
                                                      id="comp-lamqvxfv1__item3"
                                                      class="comp-lamqvxfv1 YzqVVZ wixui-repeater__item"
                                                    >
                                                      <div
                                                        id="bgLayers_comp-lamqvxfv1__item3"
                                                        data-hook="bgLayers"
                                                        data-motion-part="BG_LAYER comp-lamqvxfv1__item3"
                                                        class="MW5IWV"
                                                      >
                                                        <div
                                                          data-testid="colorUnderlay"
                                                          class="LWbAav Kv1aVt"
                                                        ></div>
                                                        <div
                                                          id="bgMedia_comp-lamqvxfv1__item3"
                                                          data-motion-part="BG_MEDIA comp-lamqvxfv1__item3"
                                                          class="VgO9Yg"
                                                        >
                                                          <wow-image
                                                            id="img_comp-lamqvxfv1__item3"
                                                            class="jhxvbR Kv1aVt dLPlxY mNGsUM bgImage"
                                                            data-image-info='{"containerId":"comp-lamqvxfv1__item3","alignType":"center","displayMode":"fill","targetWidth":277,"targetHeight":246,"encoding":"AVIF","imageData":{"width":3000,"height":2000,"uri":"8ad880_e6a9ae7ed4f54e1d9ca6e3b21fa4fbad~mv2.jpg","name":"","displayMode":"fill"}}'
                                                            data-motion-part="BG_IMG comp-lamqvxfv1__item3"
                                                            data-bg-effect-name=""
                                                            data-has-ssr-src=""
                                                            style="
                                                              --wix-img-max-width: max(
                                                                3000px,
                                                                100%
                                                              );
                                                            "
                                                            ><img
                                                              alt=""
                                                              style="
                                                                width: 277px;
                                                                height: 246px;
                                                                object-fit: cover;
                                                              "
                                                              width="277"
                                                              height="246"
                                                              data-ssr-src-done="true"
                                                              fetchpriority="high"
                                                              src="{{ asset('/images/8ad880_e6a9ae7ed4f54e1d9ca6e3b21fa4fbad~mv2.webp') }}"
                                                          /></wow-image>
                                                        </div>
                                                      </div>
                                                      <div
                                                        data-mesh-id="comp-lamqvxfv1__item3inlineContent"
                                                        data-testid="inline-content"
                                                        class=""
                                                      >
                                                        <div
                                                          data-mesh-id="comp-lamqvxfv1__item3inlineContent-gridContainer"
                                                          data-testid="mesh-container-content"
                                                        >
                                                          <!--$-->
                                                          <div
                                                            id="comp-lamqvxg32__item3"
                                                            class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lamqvxg32 wixui-rich-text"
                                                            data-testid="richTextElement"
                                                          >
                                                            <p
                                                              class="font_7 wixui-rich-text__text"
                                                              style="
                                                                font-size: 22px;
                                                                text-align: center;
                                                              "
                                                            >
                                                              <span
                                                                style="
                                                                  font-size: 22px;
                                                                "
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                  style="
                                                                    color: #ffffff;
                                                                  "
                                                                  class="wixui-rich-text__text"
                                                                  ><span
                                                                    style="
                                                                      font-weight: bold;
                                                                    "
                                                                    class="wixui-rich-text__text"
                                                                    ><span
                                                                      style="
                                                                        font-family: avenir-lt-w01_35-light1475496,
                                                                          avenir-lt-w05_35-light,
                                                                          sans-serif;
                                                                      "
                                                                      class="wixui-rich-text__text"
                                                                      ><span
                                                                        style="
                                                                          background-color: #113c66;
                                                                        "
                                                                        class="wixui-rich-text__text"
                                                                        >&nbsp;
                                                                        Recrutement
                                                                        &nbsp;</span
                                                                      ></span
                                                                    ></span
                                                                  ></span
                                                                ></span
                                                              >
                                                            </p>
                                                          </div>
                                                          <!--/$-->
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--/$-->
                                                  </div>
                                                </div>
                                                <div class="cGWabE">
                                                  <div
                                                    role="listitem"
                                                    class="T7n0L6"
                                                  >
                                                    <!--$-->
                                                    <div
                                                      id="comp-lamqvxfv1__item-lamrwad7"
                                                      class="comp-lamqvxfv1 YzqVVZ wixui-repeater__item"
                                                    >
                                                      <div
                                                        id="bgLayers_comp-lamqvxfv1__item-lamrwad7"
                                                        data-hook="bgLayers"
                                                        data-motion-part="BG_LAYER comp-lamqvxfv1__item-lamrwad7"
                                                        class="MW5IWV"
                                                      >
                                                        <div
                                                          data-testid="colorUnderlay"
                                                          class="LWbAav Kv1aVt"
                                                        ></div>
                                                        <div
                                                          id="bgMedia_comp-lamqvxfv1__item-lamrwad7"
                                                          data-motion-part="BG_MEDIA comp-lamqvxfv1__item-lamrwad7"
                                                          class="VgO9Yg"
                                                        >
                                                          <wow-image
                                                            id="img_comp-lamqvxfv1__item-lamrwad7"
                                                            class="jhxvbR Kv1aVt dLPlxY mNGsUM bgImage"
                                                            data-image-info='{"containerId":"comp-lamqvxfv1__item-lamrwad7","alignType":"center","displayMode":"fill","targetWidth":277,"targetHeight":246,"encoding":"AVIF","imageData":{"width":3000,"height":2000,"uri":"8ad880_4649047f26e349708582a447abe41463~mv2.jpg","name":"","displayMode":"fill"}}'
                                                            data-motion-part="BG_IMG comp-lamqvxfv1__item-lamrwad7"
                                                            data-bg-effect-name=""
                                                            data-has-ssr-src=""
                                                            style="
                                                              --wix-img-max-width: max(
                                                                3000px,
                                                                100%
                                                              );
                                                            "
                                                            ><img
                                                              alt=""
                                                              style="
                                                                width: 277px;
                                                                height: 246px;
                                                                object-fit: cover;
                                                              "
                                                              width="277"
                                                              height="246"
                                                              data-ssr-src-done="true"
                                                              fetchpriority="high"
                                                              src="{{ asset('/images/8ad880_4649047f26e349708582a447abe41463~mv2.webp') }}"
                                                          /></wow-image>
                                                        </div>
                                                      </div>
                                                      <div
                                                        data-mesh-id="comp-lamqvxfv1__item-lamrwad7inlineContent"
                                                        data-testid="inline-content"
                                                        class=""
                                                      >
                                                        <div
                                                          data-mesh-id="comp-lamqvxfv1__item-lamrwad7inlineContent-gridContainer"
                                                          data-testid="mesh-container-content"
                                                        >
                                                          <!--$-->
                                                          <div
                                                            id="comp-lamqvxg32__item-lamrwad7"
                                                            class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lamqvxg32 wixui-rich-text"
                                                            data-testid="richTextElement"
                                                          >
                                                            <p
                                                              class="font_7 wixui-rich-text__text"
                                                              style="
                                                                font-size: 22px;
                                                                line-height: normal;
                                                                text-align: center;
                                                              "
                                                            >
                                                              <span
                                                                style="
                                                                  font-size: 22px;
                                                                "
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                  style="
                                                                    color: #ffffff;
                                                                  "
                                                                  class="wixui-rich-text__text"
                                                                  ><span
                                                                    style="
                                                                      font-weight: bold;
                                                                    "
                                                                    class="wixui-rich-text__text"
                                                                    ><span
                                                                      style="
                                                                        font-family: avenir-lt-w01_35-light1475496,
                                                                          avenir-lt-w05_35-light,
                                                                          sans-serif;
                                                                      "
                                                                      class="wixui-rich-text__text"
                                                                      ><span
                                                                        style="
                                                                          letter-spacing: normal;
                                                                        "
                                                                        class="wixui-rich-text__text"
                                                                        ><span
                                                                          style="
                                                                            background-color: #113c66;
                                                                          "
                                                                          class="wixui-rich-text__text"
                                                                          >&nbsp;
                                                                          Accompagnement
                                                                          &nbsp;</span
                                                                        ></span
                                                                      ></span
                                                                    ></span
                                                                  ></span
                                                                ></span
                                                              >
                                                            </p>
                                                          </div>
                                                          <!--/$-->
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--/$-->
                                                  </div>
                                                  <div
                                                    role="listitem"
                                                    class="T7n0L6"
                                                  >
                                                    <!--$-->
                                                    <div
                                                      id="comp-lamqvxfv1__item-lamr08p5"
                                                      class="comp-lamqvxfv1 YzqVVZ wixui-repeater__item"
                                                    >
                                                      <div
                                                        id="bgLayers_comp-lamqvxfv1__item-lamr08p5"
                                                        data-hook="bgLayers"
                                                        data-motion-part="BG_LAYER comp-lamqvxfv1__item-lamr08p5"
                                                        class="MW5IWV"
                                                      >
                                                        <div
                                                          data-testid="colorUnderlay"
                                                          class="LWbAav Kv1aVt"
                                                        ></div>
                                                        <div
                                                          id="bgMedia_comp-lamqvxfv1__item-lamr08p5"
                                                          data-motion-part="BG_MEDIA comp-lamqvxfv1__item-lamr08p5"
                                                          class="VgO9Yg"
                                                        >
                                                          <wow-image
                                                            id="img_comp-lamqvxfv1__item-lamr08p5"
                                                            class="jhxvbR Kv1aVt dLPlxY mNGsUM bgImage"
                                                            data-image-info='{"containerId":"comp-lamqvxfv1__item-lamr08p5","alignType":"center","displayMode":"fill","targetWidth":277,"targetHeight":246,"encoding":"AVIF","imageData":{"width":2500,"height":1730,"uri":"8ad880_1597f7cd06964048af2ca3b45c4c04aa~mv2.jpg","name":"","displayMode":"fill"}}'
                                                            data-motion-part="BG_IMG comp-lamqvxfv1__item-lamr08p5"
                                                            data-bg-effect-name=""
                                                            data-has-ssr-src=""
                                                            style="
                                                              --wix-img-max-width: max(
                                                                2500px,
                                                                100%
                                                              );
                                                            "
                                                            ><img
                                                              alt=""
                                                              style="
                                                                width: 277px;
                                                                height: 246px;
                                                                object-fit: cover;
                                                              "
                                                              width="277"
                                                              height="246"
                                                              data-ssr-src-done="true"
                                                              fetchpriority="high"
                                                              src="{{ asset('/images/8ad880_1597f7cd06964048af2ca3b45c4c04aa~mv2.webp') }}"
                                                          /></wow-image>
                                                        </div>
                                                      </div>
                                                      <div
                                                        data-mesh-id="comp-lamqvxfv1__item-lamr08p5inlineContent"
                                                        data-testid="inline-content"
                                                        class=""
                                                      >
                                                        <div
                                                          data-mesh-id="comp-lamqvxfv1__item-lamr08p5inlineContent-gridContainer"
                                                          data-testid="mesh-container-content"
                                                        >
                                                          <!--$-->
                                                          <div
                                                            id="comp-lamqvxg32__item-lamr08p5"
                                                            class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lamqvxg32 wixui-rich-text"
                                                            data-testid="richTextElement"
                                                          >
                                                            <p
                                                              class="font_7 wixui-rich-text__text"
                                                              style="
                                                                font-size: 22px;
                                                                text-align: center;
                                                              "
                                                            >
                                                              <span
                                                                style="
                                                                  font-size: 22px;
                                                                "
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                  style="
                                                                    color: #ffffff;
                                                                  "
                                                                  class="wixui-rich-text__text"
                                                                  ><span
                                                                    style="
                                                                      font-weight: bold;
                                                                    "
                                                                    class="wixui-rich-text__text"
                                                                    ><span
                                                                      style="
                                                                        font-family: avenir-lt-w01_35-light1475496,
                                                                          avenir-lt-w05_35-light,
                                                                          sans-serif;
                                                                      "
                                                                      class="wixui-rich-text__text"
                                                                      ><span
                                                                        style="
                                                                          background-color: #113c66;
                                                                        "
                                                                        class="wixui-rich-text__text"
                                                                        >&nbsp;
                                                                        Comptabilité
                                                                        &nbsp;</span
                                                                      ></span
                                                                    ></span
                                                                  ></span
                                                                ></span
                                                              >
                                                            </p>
                                                          </div>
                                                          <!--/$-->
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--/$-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!--/$-->
                                          </div>
                                        </div>
                                      </div>
                                      <!--/$-->
                                    </div>
                                  </section>
                                  <!--/$-->
                                </div>
                              </div>
                            </section>
                            <!--/$--><!--$-->
                            <section
                              id="comp-lc96qudc"
                              tabindex="-1"
                              class="Oqnisf comp-lc96qudc wixui-section"
                              data-block-level-container="ClassicSection"
                            >
                              <div
                                id="bgLayers_comp-lc96qudc"
                                data-hook="bgLayers"
                                data-motion-part="BG_LAYER comp-lc96qudc"
                                class="MW5IWV"
                              >
                                <div
                                  data-testid="colorUnderlay"
                                  class="LWbAav Kv1aVt"
                                ></div>
                                <div
                                  id="bgMedia_comp-lc96qudc"
                                  data-motion-part="BG_MEDIA comp-lc96qudc"
                                  class="VgO9Yg"
                                ></div>
                              </div>
                              <div
                                data-mesh-id="comp-lc96qudcinlineContent"
                                data-testid="inline-content"
                                class=""
                              >
                                <div
                                  data-mesh-id="comp-lc96qudcinlineContent-gridContainer"
                                  data-testid="mesh-container-content"
                                >
                                  <!--$-->
                                  <section
                                    id="comp-lamrzcyn"
                                    class="comp-lamrzcyn CohWsy wixui-column-strip"
                                  >
                                    <div
                                      id="bgLayers_comp-lamrzcyn"
                                      data-hook="bgLayers"
                                      data-motion-part="BG_LAYER comp-lamrzcyn"
                                      class="if7Vw2"
                                    >
                                      <div
                                        data-testid="colorUnderlay"
                                        class="tcElKx i1tH8h"
                                      ></div>
                                      <div
                                        id="bgMedia_comp-lamrzcyn"
                                        data-motion-part="BG_MEDIA comp-lamrzcyn"
                                        class="wG8dni"
                                      ></div>
                                    </div>
                                    <div data-testid="columns" class="V5AUxf">
                                      <!--$-->
                                      <div
                                        id="comp-lamrzczo"
                                        class="comp-lamrzczo YzqVVZ wixui-column-strip__column"
                                      >
                                        <div
                                          id="bgLayers_comp-lamrzczo"
                                          data-hook="bgLayers"
                                          data-motion-part="BG_LAYER comp-lamrzczo"
                                          class="MW5IWV"
                                        >
                                          <div
                                            data-testid="colorUnderlay"
                                            class="LWbAav Kv1aVt"
                                          ></div>
                                          <div
                                            id="bgMedia_comp-lamrzczo"
                                            data-motion-part="BG_MEDIA comp-lamrzczo"
                                            class="VgO9Yg"
                                          ></div>
                                        </div>
                                        <div
                                          data-mesh-id="comp-lamrzczoinlineContent"
                                          data-testid="inline-content"
                                          class=""
                                        >
                                          <div
                                            data-mesh-id="comp-lamrzczoinlineContent-gridContainer"
                                            data-testid="mesh-container-content"
                                          >
                                            <!--$-->
                                            <div
                                              id="comp-lamrzn37"
                                              class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-lamrzn37 wixui-rich-text"
                                              data-testid="richTextElement"
                                            >
                                              <h2
                                                class="font_2 wixui-rich-text__text"
                                                style="
                                                  line-height: normal;
                                                  text-align: center;
                                                  font-size: 26px;
                                                "
                                              >
                                                <span
                                                  style="color: #113c66"
                                                  class="wixui-rich-text__text"
                                                  ><span
                                                    style="
                                                      font-family: avenir-lt-w01_85-heavy1475544,
                                                        avenir-lt-w05_85-heavy,
                                                        sans-serif;
                                                    "
                                                    class="wixui-rich-text__text"
                                                    ><span
                                                      style="font-weight: bold"
                                                      class="wixui-rich-text__text"
                                                      ><span
                                                        style="
                                                          letter-spacing: normal;
                                                        "
                                                        class="wixui-rich-text__text"
                                                        >Actualités</span
                                                      ></span
                                                    ></span
                                                  ></span
                                                >
                                              </h2>
                                            </div>
                                            <!--/$--><!--$-->
                                            <div
                                              id="comp-lamrzn46"
                                              class="TWFxr5"
                                              style="min-width: 0px"
                                            >
                                              <div style="
    position: relative;
    width: 292px !important;
    height: 292px !important;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
">
    <!-- Background Image -->
    <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 292px;
        height: 292px;
        background-image: url({{ asset('/images/11062b_2a2076836abe4624a8d0cf69c0c18a0fmv2.webp') }});
        background-size: cover;
        background-position: center;
    "></div>
    
    <!-- Overlay -->
    <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 292px;
        height: 292px;
        background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.6));
    "></div>
    
    <!-- Content -->
    <div style="
        position: absolute;
        bottom: 30px;
        left: 30px;
        color: white;
        font-family: 'Inter', Arial, sans-serif;
    ">
        <!-- Category -->
        <div class="wixui-rich-text__text" style="
            font-size: 13px;
            font-weight: 400;
            margin-bottom: 8px;
            opacity: 0.95;
            letter-spacing: 0.3px;
        ">Textile</div>
        
        <!-- Title -->
        <p
                                                              class="font_7 wixui-rich-text__text"
                                                              style="
                                                                font-size: 22px;
                                                                line-height: normal;
                                                                text-align: center;
                                                              "
                                                            >
                                                              <span
                                                                style="
                                                                  font-size: 22px;
                                                                "
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                  style="
                                                                    color: #ffffff;
                                                                  "
                                                                  class="wixui-rich-text__text"
                                                                  ><span
                                                                    style="
                                                                      font-weight: bold;
                                                                    "
                                                                    class="wixui-rich-text__text"
                                                                    ><span
                                                                      style="
                                                                        font-family: avenir-lt-w01_35-light1475496,
                                                                          avenir-lt-w05_35-light,
                                                                          sans-serif;
                                                                      "
                                                                      class="wixui-rich-text__text"
                                                                      ><span
                                                                        style="
                                                                          letter-spacing: normal;
                                                                        "
                                                                        class="wixui-rich-text__text"
                                                                        ><span
                                                                         
                                                                          class="wixui-rich-text__text"
                                                                          >
                                                                          Accompagnement
                                                                          &nbsp;</span
                                                                        ></span
                                                                      ></span
                                                                    ></span
                                                                  ></span
                                                                ></span
                                                              >
                                                            </p>
    </div>
</div>
                                            </div>
                                            <!--/$--><!--$-->
                                            <div
                                              class="comp-lams11d3 FubTgk"
                                              id="comp-lams11d3"
                                              aria-disabled="false"
                                            >
                                              <a
                                                data-testid="linkElement"
                                                href="/sls-formation/actualités"
                                                target="_self"
                                                class="uDW_Qe wixui-button PlZyDq"
                                                aria-disabled="false"
                                                aria-label="Découvrir nos actualités"
                                                ><span
                                                  class="l7_2fn wixui-button__label"
                                                  >Découvrir nos
                                                  actualités</span
                                                ></a
                                              >
                                            </div>
                                            <!--/$-->
                                          </div>
                                        </div>
                                      </div>
                                      <!--/$-->
                                    </div>
                                  </section>
                                  <!--/$-->
                                </div>
                              </div>
                            </section>
                            <!--/$-->
                          </div>
                        </div>
                      </div>
                      <!--/$-->
                    </div>
                  </div>
                </div>
              </div>
            </main>
            <!--$-->
            <div
              id="soapAfterPagesContainer"
              class="page-without-sosp soapAfterPagesContainer page-without-sosp"
            >
              <div
                data-mesh-id="soapAfterPagesContainerinlineContent"
                data-testid="inline-content"
                class=""
              >
                <div
                  data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer"
                  data-testid="mesh-container-content"
                >
                  <!--$-->
                  <div id="comp-jn4hmzm6" style="display: none"></div>
                  <!--/$--><!--$-->
                  <div
                    id="CONTROLLER_COMP_CUSTOM_ID"
                    style="display: none"
                  ></div>
                  <!--/$-->
                </div>
              </div>
            </div>
            <!--/$-->
            <div id="pinnedBottomRight" class="pinnedBottomRight">
              <!--$-->
              <div
                id="comp-kemk5dij-pinned-layer"
                class="comp-kemk5dij-pinned-layer big2ZD"
              >
                <!--$-->
                <div
                  id="comp-kemk5dij"
                  class="OQ8Tzd comp-kemk5dij"
                  style="width: 94px; height: 94px; content: attr(x)"
                >
                  <iframe
                    class="nKphmK"
                    title="Wix Chat"
                    aria-label="Wix Chat"
                    scrolling="no"
                    src="https://engage.wixapps.net/chat-widget-server/renderChatWidget/index?pageId=masterPage&amp;compId=comp-kemk5dij&amp;viewerCompId=comp-kemk5dij&amp;siteRevision=4&amp;viewMode=site&amp;deviceType=desktop&amp;locale=fr&amp;tz=Africa%2FCasablanca&amp;regionalLanguage=fr&amp;width=94&amp;height=94&amp;instance=LfbJdiyGEuqjtdJZK7xhEo6Rdnv3RYDv1TnRluYIEQk.eyJpbnN0YW5jZUlkIjoiZjA2OTk4MWItMmU3Zi00ODhiLTgyN2EtNjFiZWZjMTk2ZDU1IiwiYXBwRGVmSWQiOiIxNDUxN2UxYS0zZmYwLWFmOTgtNDA4ZS0yYmQ2OTUzYzM2YTIiLCJtZXRhU2l0ZUlkIjoiMjJjZDRiNTAtOTEwNy00ZTU2LTliODctMmJlZjVjNzE2MjhmIiwic2lnbkRhdGUiOiIyMDI1LTExLTAyVDAyOjU5OjAwLjk2NFoiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiIyYTA4NDZjMC1lYjBjLTQ5NDctODljYy0zMjc3NWY4NGIwNTQiLCJhaWQiOiI4MGJkZWUyNC0zYjNkLTRiZWEtYjJhNS1kZDEzNWI0ZTJlMDkiLCJiaVRva2VuIjoiZDJhNGQzNGItYmY3OC0wNmRkLTE5ZmQtNGE1MWEwNjgwZmRhIiwic2l0ZU93bmVySWQiOiI4YWQ4ODA1ZC1hM2VhLTQwMDgtODUyZi00NjgwNTA5MDg2ZjgiLCJicyI6ImpsTkk1TUtLTDQxZHZoY2dnWHJfWG1lU2x6TUQtUXRyQjhVMkZJak96ZU0iLCJzY2QiOiIyMDIxLTAzLTAyVDE0OjUzOjI2LjQ3MloifQ&amp;currency=MAD&amp;currentCurrency=MAD&amp;commonConfig=%7B%22brand%22%3A%22wix%22%2C%22host%22%3A%22VIEWER%22%2C%22bsi%22%3A%22b2734a14-57d7-4a0c-9212-54d41f09b247%7C1%22%2C%22siteRevision%22%3A%224%22%2C%22branchId%22%3A%22c3be78fc-757c-424a-bce3-a454c1754262%22%2C%22renderingFlow%22%3A%22NONE%22%2C%22language%22%3A%22fr%22%2C%22locale%22%3A%22fr-ma%22%2C%22BSI%22%3A%22b2734a14-57d7-4a0c-9212-54d41f09b247%7C1%22%7D&amp;currentRoute=.%2F&amp;vsi=4d849ec5-9bd3-4861-bbeb-e2ee184015fd"
                    allowfullscreen=""
                    allowtransparency="true"
                    allowvr="true"
                    frameborder="0"
                    allow="clipboard-write;autoplay;camera;microphone;geolocation;vr"
                  ></iframe>
                </div>
                <!--/$-->
              </div>
              <!--/$-->
            </div>
          <x-footer>  </x-footer>
          </div>
        </div>
        <div
          id="SCROLL_TO_BOTTOM"
          class="Vd6aQZ ignore-focus SCROLL_TO_BOTTOM"
          role="region"
          tabindex="-1"
          aria-label="bottom of page"
        >
          <span class="mHZSwn">bottom of page</span>
        </div>
      </div>
    </div>

    <!-- Polyfills check -->

    <!-- initCustomElements # 1-->

    <!-- preloading pre-scripts -->

    <!-- sentryOnLoad Setup Script -->

    <!-- Sentry Loader Script -->

    <!-- Sentry's makeMultiplexedTransport -->

    <!-- Sentry's moduleMetadataIntegration -->

    <!-- Add the rest of the ViewerModel -->

    <!-- renderIndicator -->

    <!-- versionIndicator -->

    <!-- used platform apis start -->

    <!-- used platform apis end -->

    <!-- Business Manager -->

    <!-- initCustomElements #2 -->

    <!-- initial scripts -->

    <!-- lodash script -->

    <!-- react -->

    <!-- react-dom -->

    <!-- scriptTagsToPreload -->

    <!-- Old Browsers Deprecation -->

    <!-- bi -->

    <!-- bi -->

    <!--pageHtmlEmbeds.bodyEnd start-->

    <!--pageHtmlEmbeds.bodyEnd end-->

    <!-- warmup data start -->

    <!-- warmup data end -->

    <!-- presets polyfill -->

    <script>
      window.addEventListener("DOMContentLoaded", function () {
        var $jq = jQuery.noConflict();
        $jq(document).ready(function () {
          if ($jq(".slick-carousel-slides").length) {
            $jq(".slick-carousel-slides").slick({
              dots: true,
              infinite: false,
              speed: 300,
              slidesToShow: 1,
              responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                  },
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                  },
                },
              ],
            });
          }
        });
      });
    </script>
    
    <!-- Custom Slider JavaScript -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.custom-slide');
        const prevBtn = document.querySelector('.slider-prev');
        const nextBtn = document.querySelector('.slider-next');
        const indicators = document.querySelectorAll('.slider-indicator');
        let currentSlide = 0;
        const totalSlides = slides.length;
        
        // Function to show a specific slide
        function showSlide(index) {
          const direction = index > currentSlide ? 1 : -1;
          
          // Remove active class from all slides and indicators
          slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === currentSlide) {
              // Current slide slides out to the left
              slide.style.transform = 'translateX(-100%)';
            } else if (i === index) {
              // New slide starts from the right
              slide.style.transform = 'translateX(100%)';
            } else {
              // Other slides stay hidden
              slide.style.transform = index > i ? 'translateX(-100%)' : 'translateX(100%)';
            }
          });
          
          indicators.forEach(indicator => {
            indicator.classList.remove('active');
            indicator.style.background = 'rgba(255, 255, 255, 0.4)';
          });
          
          // Trigger reflow to ensure transition works
          setTimeout(() => {
            // Add active class to current slide and indicator
            slides[index].classList.add('active');
            slides[index].style.transform = 'translateX(0%)';
            indicators[index].classList.add('active');
            indicators[index].style.background = 'rgba(255, 255, 255, 0.7)';
          }, 10);
          
          currentSlide = index;
        }
        
        // Auto-play functionality - switches every 3 seconds
        let autoPlayInterval;
        
        function startAutoPlay() {
          autoPlayInterval = setInterval(() => {
            const next = (currentSlide + 1) % totalSlides;
            showSlide(next);
          }, 3000);
        }
        
        function stopAutoPlay() {
          if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
          }
        }
        
        // Next slide function
        function nextSlide() {
          const next = (currentSlide + 1) % totalSlides;
          showSlide(next);
          stopAutoPlay();
          // Resume auto-play after 10 seconds
          setTimeout(startAutoPlay, 10000);
        }
        
        // Previous slide function
        function prevSlide() {
          const prev = (currentSlide - 1 + totalSlides) % totalSlides;
          showSlide(prev);
          stopAutoPlay();
          // Resume auto-play after 10 seconds
          setTimeout(startAutoPlay, 10000);
        }
        
        // Event listeners for navigation buttons
        if (nextBtn) {
          nextBtn.addEventListener('click', nextSlide);
        }
        if (prevBtn) {
          prevBtn.addEventListener('click', prevSlide);
        }
        
        // Event listeners for indicators
        indicators.forEach((indicator, index) => {
          indicator.addEventListener('click', () => {
            showSlide(index);
            stopAutoPlay();
            // Resume auto-play after 10 seconds
            setTimeout(startAutoPlay, 10000);
          });
        });
        
        // Pause on hover
        const sliderContainer = document.querySelector('.custom-slider-container');
        if (sliderContainer) {
          sliderContainer.addEventListener('mouseenter', () => {
            stopAutoPlay();
          });
          sliderContainer.addEventListener('mouseleave', () => {
            startAutoPlay();
          });
        }
        
        // Start auto-play
        startAutoPlay();
        
        // Initialize first slide
        showSlide(0);
      });
    </script>
    
    <!-- Custom Slider CSS -->
    <style>
      .slider-nav-btn {
        pointer-events: auto !important;
        z-index: 1000 !important;
      }
      
      .slider-nav-btn:hover {
        background: rgba(255, 255, 255, 0.9) !important;
      }
      
      .slider-indicator {
        pointer-events: auto !important;
        z-index: 1000 !important;
      }
      
      .slider-indicator:hover {
        background: rgba(255, 255, 255, 0.8) !important;
      }
      
      .slider-indicators {
        pointer-events: auto !important;
        z-index: 1000 !important;
      }
      
      .custom-slide {
        pointer-events: none;
        will-change: transform;
      }
      
      .custom-slide.active {
        pointer-events: auto;
      }
      
      /* Force all interactive elements in active slides to be clickable */
      .custom-slide.active * {
        pointer-events: auto;
      }
      
      /* But allow specific button elements to always be clickable */
      .custom-slide #comp-larzfavx,
      .custom-slide #comp-larzfavx-slide2,
      .custom-slide #comp-larzfavx-slide3 {
        pointer-events: auto !important;
      }
      
      /* Ensure buttons inside slides are always clickable - HIGHEST PRIORITY */
      #comp-larzfavx,
      #comp-larzfavx *,
      #comp-larzfavx-slide2,
      #comp-larzfavx-slide2 *,
      #comp-larzfavx-slide3,
      #comp-larzfavx-slide3 *,
      .comp-larzfavx,
      .comp-larzfavx * {
        pointer-events: auto !important;
        position: relative !important;
        z-index: 9999 !important;
        cursor: pointer !important;
      }
      
      /* Ensure button containers are also clickable */
      .StylableButton2545352419__root,
      .StylableButton2545352419__link,
      .StylableButton2545352419__container,
      .StylableButton2545352419__label {
        pointer-events: auto !important;
        z-index: 9999 !important;
        position: relative !important;
        cursor: pointer !important;
      }
      
      /* Override any background layers that might block clicks */
      .custom-slide .MW5IWV,
      .custom-slide .eF_jBL,
      .custom-slide .wfm0FO {
        pointer-events: none !important;
      }
      
      /* Ensure button wrapper divs don't block clicks */
      .custom-slide [data-mesh-id*="inlineContent"],
      .custom-slide [data-mesh-id*="gridContainer"] {
        pointer-events: auto !important;
      }
      
      .custom-slider-wrapper {
        overflow: hidden;
      }
      
      .custom-slider-container {
        position: relative;
      }
    </style>
  </body>
</html>

