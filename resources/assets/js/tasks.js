
var addDatePickerToNewTask = () => {
    $('#add-task-date-picker').datepicker({
        dateFormat: 'yy-mm-dd'
    });
};

$(document).ready(() => {
    addDatePickerToNewTask();
});
