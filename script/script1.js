function dispReg(){
    document.getElementById('reg_div').style.visibility="visible";
    document.getElementById('reg_div_outer').style.visibility="visible";
}
function remove_Reg(){
    document.getElementById('reg_div').style.visibility="hidden";
    document.getElementById('reg_div_outer').style.visibility="hidden";
}
function x_enter(){
    document.getElementById('X_a').style.backgroundColor="rgba(15,20,25, 0.1)";
    document.getElementById('X_a').style.borderRadius="15px";
}
function x_out(){
    document.getElementById('X_a').style.backgroundColor="rgba(0,0,0,0)";
    document.getElementById('X_a').style.borderRadius="0px";
}