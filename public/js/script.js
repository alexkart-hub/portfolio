$("#files").on({
    change: function() {
        frame = '<iframe src = "/public/doc/' + this.value + '" frameborder = "0" width = "700px" height = "400px" > < /iframe>';
        new_src = "/public/doc/" + this.value;
        $('iframe').attr('src', new_src);
        //console.log(this.value);
    }
});