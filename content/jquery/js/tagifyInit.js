$(function () {
    $("input[role='tagify']").each(function () {
        $this = $(this);
        tags = $this.data("tags").split(",");
        $this.tagify({
            whitelist: tags
        });
    });
})