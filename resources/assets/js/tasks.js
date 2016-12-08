var addDatePickerToNewTask = () => {
    $("#add-task-date-picker, .add-subtask-date-picker").pickmeup_twitter_bootstrap({
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

$(document).ready(() => {
    addDatePickerToNewTask();
    toggleMoreLess();
});
