$(document).ready(function(){
	$(".add_new").click(function(){	
		var skillname=$("#SkillName").val();
		var skillval=$("#SkillValue").val();
		if(skillname==""||skillval==""){
			alert("strings are empty");
			return;
		}
		//handle adding TR
		$.get("crud.php",{skillName:skillname,skillValue:skillval},function(data){
			if(data=="Success"){
				$(".last_row").append("<td>"+skillname+"</td><td>"+skillval+"</td>");
			}
		});
	});
$(".add_d_skill").click(function(){
	$(".dlast_row").append("<td><input type=\"text\" name=\"dSkillName\" id=\"dsn\"></td><td><input type=\"text\" name=\"dSkillValue\" id=\"dsv\"></td><td><a href=\"#\" class=\"save_d_skill\">Save</a>|<a href=\"#\" class=\"cancel_d_add\">Cancel</a></td>");
});
$(document).on("click","a.cancel_d_add",function(){
	$(this).parent().parent().empty();
});
$(document).on("click","a.save_d_skill",function(){
	var dsn=$("#dsn").val();
	var dsv=$("#dsv").val();
	if(dsn==""||dsv==""){
		alert("Nothing is typed");
		return;
	} else {
		$.get("dcrud.php",{action:"add",dskillname:dsn,dskillvalue:dsv},function(data){
			if(data=="Success"){
				$(".dlast_row").before("<tr><td>"+dsn+"</td><td>"+dsv+"</td></tr>");
				$(".dlast_row").empty();
			}
		});
		}
	});
$(".delete_dskill").click(function(){
	var index=($(this).attr("id")).substring(9);
	var table_row=$(this);
	$.get("dcrud.php",{action:"delete",id:index},function(data){
		if(data="Deleted"){
			$(table_row).parent().parent().remove();
		}
	});
});
$(".edit_dskill").click(function(){
	var index=$(this).attr("id").substring(7);
	var dsn=$("#dn"+index).text();
	var dsv=$("#dv"+index).text();
	$("#dn"+index).empty();
	$("#dv"+index).empty();
	$("#dn"+index).append("<input type=\"text\" name=\"dskillname\" value=\""+dsn+"\" id=\"dskillname"+index+"\">");
	$("#dv"+index).append("<input type=\"text\" name=\"dskillvalue\" value=\""+dsv+"\" id=\"dskillvalue"+index+"\"> <a href=\"#\" class=\"update_d_skill\" onclick=\"updatedskill(this)\" id=\"dsi"+index+"\">Save</a> <a href=\"#\" class=\"cancel_s_d_skill\">Cancel</a>");
});
$(document).on("click","a.cancel_s_d_skill",function(){
	var ind=$(".cancel_s_d_skill").parent().attr("id").substring(2);
	var dsn=$("#dskillname"+ind).val();
	var dsv=$("#dskillvalue"+ind).val();
	$("#dn"+ind).empty().append(dsn);
	$("#dv"+ind).empty().append(dsv);
	$("#dsi"+ind).remove();
	$(".cancel_s_d_skill").remove();
});
$(".add_skill").click(function(){
		$(".new_skill_container").css('display','initial')
	});
$(".cancel_add").click(function(){
		$(".new_skill_container").css('display','none');
	});
$(".edit_link").click(function(){
	var index=($(this).attr("id")).substring(5);
	var skillname=$("#n"+index).text();
	var skillvalue=$("#v"+index).text();
	$("#n"+index).empty();
	$("#v"+index).empty();
	$("#n"+index).append("<input type=\"text\" name=\"SkillName\" id=\"SkillName"+index+"\" value="+skillname+">");
	$("#v"+index).append("<input type=\"text\" name=\"SkillValue\" id=\"SkillValue"+index+"\"value="+skillvalue+">").append("<a href=\"#\" onclick=\"saveedit(this)\" class=\"save_edit\" id=\"se"+index+"\">Save</a>");
});
$(".delete_link").click(function(){
		var valuef = ($(this).attr("id")).substring(7);
		var table_row=$(this);
		$.get("delete.php",{id:valuef},
		function(data){
			if(data == 'GJx2'){
				$(table_row).parent().parent().remove();
			}
		});
	});
$("#searchBox").bind('input',function(){
	$("#suggest").empty();
	$(".suggestions").css('display','none');
	var text=$(this).val();
	$.get("search.php",{searched:text},function(data){
		if(data=="empty"||data=="Nothing transfered"){
			$("#suggest").append("<li><a href=\"#\">No matching words</a></li>");
			$(".suggestions").css('display','initial');
		}else{
			$(".suggestions").css('display','initial');
			var obj=$.parseJSON(data);
			for(var i=0;i<obj.length;i++){
				$("#suggest").append("<li><a href=\"#\" onclick=\"transfer(this)\">"+obj[i]+"</a></li>");
			}			
		}
	});
	});
	$("#searchButton").click(function(){
		$.get("search2.php",{"text":$("#searchBox").val()},function(data){
			if(data=="empty"){
				$(".result-table").css('display','initial');
				$("#results-row").append("<td colspan=\"2\">No results</td>");				
			}else {
				var res=$.parseJSON(data);
				for(var i=0;i<res.length;i++){
					$(".result-table").css('display','initial');
					$("#results-row").parent().append("<tr><td>"+res[i].SetName+"</td><td>"+res[i].SetValue+"</td></tr>");
				}
			}
		});
});
});
function updatedskill(elem){
	var ind=elem.id.substring(3);
	var dsn=document.getElementById("dskillname"+ind).value;
	var dsv=document.getElementById("dskillvalue"+ind).value;
	if(dsn==""||dsv==""){
		alert("Type some values");
	}else {
		$(document).ready(function(){
			$.get("dcrud.php",{action:"update",dskillname:dsn,dskillvalue:dsv,id:ind},function(data){
				if(data=="Updated"){
					$("#dn"+ind).empty().append(dsn);
					$("#dv"+ind).empty().append(dsv);
					$("#dsi"+ind).remove();
					$(".cancel_s_d_skill").remove();
				}
			});
		});
	}
}
function saveedit(elem){	
	var ind=elem.id.substring(2);
	var SN=document.getElementById("SkillName"+ind).value;
	var SV=document.getElementById("SkillValue"+ind).value;		
	$(document).ready(function(){
		$.get("editSkill.php",{index:ind,skillName:SN,skillValue:SV}, function(data){
			if(data=="Updated"){
				var td=$("#SkillName"+ind).parent();
				$("#SkillName"+ind).remove();
				td.append(SN);
				var td2=$("#SkillValue"+ind).parent();
				$("#SkillValue"+ind).remove();
				td2.append(SV);
				$(".save_edit").remove();
			}
		});
	});
};
function transfer(elem){
	var val=elem.text;
	document.getElementById("searchBox").value=val;
	$(".suggestions").css('display','none');
}