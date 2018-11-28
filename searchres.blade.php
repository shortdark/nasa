<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NASA API Explorer</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div id="app">
                    <input id="txtName" v-on:keyup.enter="getItems" v-model="txtInput" type="text"><br>
                    <input type="radio" id="image" value="image" name="image" v-model="mediaType">
                    <label for="image">Image</label>
                    <br>
                    <input type="radio" id="audio" value="audio" name="audio" v-model="mediaType">
                    <label for="audio">Audio</label>
                    <div v-for="result in results">
                            <div v-for="item in result.items" style="display: inline-block; width: 300px; height: 300px; margin: 2px;">
                                {{-- Get the nasa_id to use in the url and use the collection.json (item.href) to get the large jpg url --}}
                                <div v-for="data in item.data">
                                    @{{ data.title }}<br>
                                </div>
                                <div v-for="link in item.links">
                                    <img v-bind:src="link.href" style="width: 300px; height: 200px;">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
        <script src="/js/app.js"></script>

    </body>
</html>
