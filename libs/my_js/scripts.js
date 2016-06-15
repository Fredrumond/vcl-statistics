$(document).on("ready",function(){
		loadTeams();
});

//CARREGA O HISTORICO COM TODOS OS TIMES
function loadTeams(){
		$.ajax({
			type:"GET",
			url:"model/teams/select_all_teams.php",
			dataType: 'json'
		}).done(function(data){
			console.log(data);
      var lugar = 1;
			data.time.forEach(function(time){
				 $(".container-teams").append(createElement(lugar++,time.escudo_time,time.nome_time,time.tecnico_time,time.total_pontos));
			})
		});
	}

	function createElement(lugar,escudo,nome,tecnico,pontos){
	    return '<div class="team">'+ '<h1>'+ pontos + 'pts</h1>'
																	+ verificaLugar(lugar)
																	+ '<img src="' + escudo + '" height="60" width="60">'
																	+ '<h3>'+ nome + '</h3>'
																	+ '<h5>'+ tecnico + '</h5>'
																	+'</div>';
	}

	function verificaLugar(lugar){
		if(lugar <= 4){
			return '<h2 class="melhores_times">'+ lugar + 'º</h2>';
		}else if (lugar > 10 && lugar <= 14) {
			return '<h2 class="piores_times">'+ lugar + 'º</h2>';
		}else {
			return '<h2>'+ lugar + 'º</h2>';
		}
	}
