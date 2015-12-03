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



