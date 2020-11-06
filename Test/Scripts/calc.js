function myCalender(control)
{
    $(control).datepicker({
        dateFormat: 'yy/mm/dd',
        showOn: 'both',
        //buttonText: 'Calendar',
        changeMonth: true,
        changeYear: true,
        minDate: '-0M',
    });
}