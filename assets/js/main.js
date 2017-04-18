main_text = document.getElementById("week_day");
selection = document.getElementById("my-selection")


week_day = window.location.href.split("=")[1];
console.log(week_day);
  
switch (week_day) 
{
    case "monday":
        $(selection.options[0]).attr('selected','selected');
        main_text.innerHTML = selection.options[0].text;
        break;
    case "tuesday":
        $(selection.options[1]).attr('selected','selected');
        main_text.innerHTML = selection.options[1].text;
        
        break;
    case "wednesday":
        $(selection.options[2]).attr('selected','selected');
        main_text.innerHTML = selection.options[2].text;
        
        break;
    case "thursday":
        $(selection.options[3]).attr('selected','selected');
        main_text.innerHTML = selection.options[3].text;
        
        break;
    case "friday":
        $(selection.options[4]).attr('selected','selected');
        main_text.innerHTML = selection.options[4].text;
        
        break;
    default:
        $(selection.options[0]).attr('selected','selected');
        main_text.innerHTML = selection.options[0].text;
        break;
}