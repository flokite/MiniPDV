<!DOCTYPE html>
<html lang="pt-br" data-theme="cyberpunk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <button class="btn btn-primary">Botão Primário</button>

    <button class="btn w-64 rounded-full">Button</button>

    <div class="collapse bg-base-200">
        <input type="radio" name="my-accordion-1" checked="checked" />
        <div class="collapse-title text-xl font-medium">Click to open this one and close others</div>
        <div class="collapse-content">
          <p>hello</p>
        </div>
      </div>
      <div class="collapse bg-base-200">
        <input type="radio" name="my-accordion-1" />
        <div class="collapse-title text-xl font-medium">Click to open this one and close others</div>
        <div class="collapse-content">
          <p>hello</p>
        </div>
      </div>
      <div class="collapse bg-base-200">
        <input type="radio" name="my-accordion-1" />
        <div class="collapse-title text-xl font-medium">Click to open this one and close others</div>
        <div class="collapse-content">
          <p>hello</p>
        </div>
      </div>
    
    @vite('resources/js/app.js')
</body>
</html>