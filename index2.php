<script>;
function score_points(p){
	if(!("score" in localStorage)){
		localStorage["score"] = 0;
	}
	localStorage["score"] = parseInt(localStorage["score"]) + p;
	alert("You have accumulated:" +p+" points, totaling:"+ localStorage["score"]+ " points");
}
if(confirm("Proceed to clean the email first?, this is the rational behaviour (20p)")){
	score_points(20);
	location.href = "https://www.gmail.com/";
}else{
	if(confirm("Trello tasks pending? (40p) ")){
		score_points(40);
		location.href = "http://www.trello.com/";
	}else{
		if(confirm("Looking for clients might be a good start then. (50p)")){
			score_points(50);
			location.href = "https://whoishiring.io/";
		}else{
			location.href = "https://habitica.com/#/tasks";
			alert("Extend");
		}
	}

}
</script>
