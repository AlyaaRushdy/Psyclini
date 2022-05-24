$( document ).ready(function() {
    $('.appt_time').timepicker({
    timeFormat: 'h:i A',
    minTime: '10:00am',
    maxTime: '9:00pm',
    step: 60, 
    disableTimeRanges: [['3:00pm', '5:00pm']],
    disableTextInput: true,
    listWidth: 1,
    });
});