
const app = new Vue({
    el: '#app',

    data: {
        results : []
    },
    methods: {
        getItems: function () {
            if (this.txtInput && this.mediaType) {
                axios.get("https://images-api.nasa.gov/search?q="+this.txtInput+"&media_type="+this.mediaType)
                    .then(response  => this.results = response.data);
                // this.mediaType = null;
            }
        }
    }

});
