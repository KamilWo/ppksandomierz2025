<script>
    var images_data = [];

    for (var i = 1; i < l + 1; i++) {
        images_data.push({
            title: "Zdjecie " + i,
            url: "static/gallery/"
                + gallery_number
                + "/"
                + ('0' + i).slice(-2)
                + "_b.jpg",
            thumb: "static/gallery/"
                + gallery_number
                + "/"
                + ('0' + i).slice(-2)
                + "_t.jpg",
        });
    }
</script>
