$(function(){
    $(document).on('click.bs.tab.data-api', '[data-toggle="tab"], [data-toggle="tab"]', function (e) {
        e.preventDefault()
        $('ul.nav li a[href="' + $(this).attr('href') + '"]').tab('show');
    })
});