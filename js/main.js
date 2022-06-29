
    function displayContent(el)
    {
        var els = document.getElementById(el);
        return els.style.display="block";
    }
    function HideContent(el)
    {
        return document.getElementById(el).style.display="none";
    }

    function printPage(el)
    {
        var els = document.getElementById(el).innerHTML;
        var restor = document.body.innerHTML;
       document.body.innerHTML = els;     
   window.print();     
   document.body.innerHTML = restor;
    }
    