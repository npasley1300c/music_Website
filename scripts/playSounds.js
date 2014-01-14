/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function playSound(soundfile){
         document.getElementById("dummy").innerHTML=
         "<embed src=\""+soundfile+"\" hidden=\"true\" \n\
         autostart=\"true\" loop=\"false\" />";
}
