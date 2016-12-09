var addDatePickerToNewTask = () => {
    $(".task-date-picker").pickmeup_twitter_bootstrap({
        format: 'Y-m-d',
        position: 'top',
        hide_on_select: true,
        first_day: 1,
        mode: 'single'
    });
};

var toggleMoreLess = () => {
    $('.toggle-more-less').on('click', function () {
        $(this).text($(this).text() === 'more' ? 'less' : 'more');
    });
};

var toggleSubtaskCompletion = () => {
    $('.checkbox-subtask').click( function () {
        if ($(this).prop('checked') == true) {
            $(this).parent().parent().addClass('subtask-completed');
        }
        else if($(this).prop("checked") == false){
            $(this).parent().parent().removeClass('subtask-completed');
        }
    });
};

$(document).ready(() => {
    addDatePickerToNewTask();
    toggleMoreLess();
    toggleSubtaskCompletion();
});
