$(function(){

	$("#mod").modal({backdrop:false, keyboard:false});

	$("#mod").modal("show");
	
	setTimeout(function(){
		$("#mod").modal("hide")
	},3000);

	$(".ttp").tooltip({
		animation:true,
		delay:{show:1000, hide: 2000},
		title:"titulo padrão",
		trigger: "click"
	});

	$(".ppv").popover({
		title : "titulo do popover",
		trigger: "hover focus"
	});

	$(".btnjs").button();

	$("#troca-estado").click(function(){
		var btn = $(this);
		btn.button("loading");

		setTimeout(function(){
			btn.button("reset");
		},3000);
	})
});