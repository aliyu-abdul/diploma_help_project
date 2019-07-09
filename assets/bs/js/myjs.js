/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var req;

function initReq(){
    if(window.ActiveXObject){
        req = new ActiveXObject("Microsoft.XMLHttp");
    }else if(window.XMLHttpRequest){
        req = new XMLHttpRequest();
    }
}

function serch(){
    initReq();
    req.onreadystatechange = process;
    var id = document.getElementById("srch-crim").value;
    var url = "crim1.java?id"+id;
    req.open("GET",url,true);
    req.send(null);
}

function process(){
    if(req.readyState === 4){
        if(req.status === 200){
            document.getElementById("ser").innerHTML = req.responseText;
        }
    }
}

function myF(){
	var input=document.myForm.fn.value;
	if(!input.match(/^[a-zA-Z]+$/))
	{
		document.getElementById('fnn').innerHTML="must have alphabet characters only";
                
		return false;
	}else{
		document.getElementById('fnn').innerHTML="";
		return true;
	}
	
}

function validate()
{
    
    var c = document.getElementById("fn").value;
    var valid = true;
    if(c.value.length<=0)
        {
            alert("Don't leave the field empty!");
            valid = false;
        }
        else{
            if(!isNaN(c)){
                alert("Enter a jina tu");
        valid = false;}
    }
    return valid;
};

function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});