var menu_estado = false;
function menu(){
    let margen = "0px";
    if(menu_estado == true){
        $( "nav" ).animate({
            marginLeft: "-200px"
        }, 400);
        menu_estado = false;
    }else{
        $( "nav" ).animate({
            marginLeft: "0px"
        }, 400);
        menu_estado = true;
    }
    
}