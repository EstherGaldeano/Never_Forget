
    var t;
    
    // DOM Events
    window.onload = resetTimer;
    window.onload = resetTimer;
    window.onmousemove = resetTimer;
    window.onmousedown = resetTimer; 
    window.ontouchstart = resetTimer;
    window.onclick = resetTimer;    
    window.onscroll = resetTimer;  
    window.onkeydown = resetTimer;
    document.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onmousedown = resetTimer; 
    document.ontouchstart = resetTimer;
    document.onclick = resetTimer;    
    document.onscroll = resetTimer;  
    document.onkeydown = resetTimer;
    

    function logout() {
        $('#modalAlertLogout').modal();
    }

    function resetTimer() {
        clearTimeout(t);
        t = setTimeout(logout, 600000) //10min
        // 1000 milisec = 1 sec
    }
