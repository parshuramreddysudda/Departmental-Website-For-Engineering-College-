function show(nr) {
    var i=0;
    for(i=1;i<9;i++)
        {
             document.getElementById("year"+i).style.display="none";
             document.getElementById("atten"+i).style.display="none";
        }
    
    document.getElementById("year"+nr).style.display="block";
    
    document.getElementById("atten"+nr).style.display="block";
    nr=nr+4;
    document.getElementById("year"+nr).style.display="block";
    document.getElementById("atten"+nr).style.display="block";

}
