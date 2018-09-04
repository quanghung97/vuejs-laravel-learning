<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <example-component></example-component>
            <my-component></my-component>
            <conditional-rendering></conditional-rendering>
            <conditional-rendering-v-else-if></conditional-rendering-v-else-if>
            <list-component></list-component>
            <conditional-rendering-v-for-if><conditional-rendering-v-for-if/>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
