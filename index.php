<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="diskCard" v-for="(element,index) in arrayDischi">
                <figure>
    <img :src="element.poster" alt="">
                </figure>
                <div class="cardInfo">
                    <h2>{{element.title}}</h2>
                    <h3>{{element.author}}</h3>
                    <span>{{element.year}}</span>
                </div>
            </div>
        </div>

    </div>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>