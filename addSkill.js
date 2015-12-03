$(document).ready(function(){
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
});