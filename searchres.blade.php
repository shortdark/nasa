<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NASA API Explorer</title>

        <link rel="preload" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" as="style" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></noscript>

        <link rel="preload" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap-flex.min.css" as="style" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap-flex.min.css"></noscript>

        <style>
            html,body {
                height: 100%;
            }
            .flex-fill {
                flex:1 1 auto;
            }
        </style>

    </head>
    <body class="bg-light">

            <div class="container-fluid h-100">
                <div class="row h-100 align-top">
                    <h1 class="display-3 text-center">NASA API Explorer</h1>

                    <div id="app" class="d-block w-100">

                        <h2 class="display-3 text-center" v-if="this.txtInput">Search results for: @{{ this.txtInput }}</h2>

                        <div v-for="result in results">
                                <div v-for="item in result.items" class="col-3 d-inline-block">
                                    {{-- Use the collection.json (item.href) to get the large jpg url --}}
                                    <div v-for="(data, index) in item.data">
                                        <div>@{{ data.title }}</div>
                                        <div>
                                            <a v-bind:href="'/nasa/'+data.nasa_id+'/'" v-bind:alt="data.title">
                                                <img v-bind:src="item.links[index].href" v-bind:title="data.title" class="img-fluid img-thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="col-6 d-block mx-auto">


                            <div class="form-group">
                                <label for="txtName">Search</label>
                                <input id="txtName" v-on:keyup.enter="getItems" v-model="txtInput" type="text" class="form-control" aria-describedby="txtHelp" placeholder="type something here...">
                                <small id="txtHelp" class="form-text text-muted">Search the NASA API for something.</small>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="image" value="image" name="image" class="form-check-input" v-model="mediaType">
                                <label class="form-check-label" for="image">Search Images</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="audio" value="audio" name="audio" class="form-check-input" v-model="mediaType">
                                <label class="form-check-label" for="audio">Search Audio Files</label>
                            </div>
                            <button class="btn btn-primary" v-on:click="getItems">Search</button>

                        </div>

                    </div>
                </div>
            </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
        <script src="/js/app.js"></script>

    </body>
</html>
