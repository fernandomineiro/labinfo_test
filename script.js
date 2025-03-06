$(document).ready(function() {
    $('#taskForm').submit(function(e) {
        e.preventDefault();
        $.post('', { add_task: true, task: $('#taskInput').val() }, function() {
            location.reload();
        });
    });

    $('.complete').click(function() {
        $.post('', { complete_task: true, id: $(this).data('id') }, function() {
            location.reload();
        });
    });

    $('.delete').click(function() {
        $.post('', { delete_task: true, id: $(this).data('id') }, function() {
            location.reload();
        });
    });
});