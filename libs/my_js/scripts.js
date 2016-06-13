$(document).on("ready",function(){
		loadTeams();
});

//CARREGA O HISTORICO COM TODOS OS TIMES
var loadTeams = function(){
		$.ajax({
			type:"GET",
			url:"model/teams/select_all_teams.php",
			dataType: 'json'
		}).done(function(data){
			console.log(data);
      var lugar = 1;
			data.time.forEach(function(time){
				$('.tbl_geral').append('<tr><td>'+ lugar + 'º'+
                              '</td><td>'+ time.nome_time +
                              '</td><td>'+ time.total_pontos +
                              '</td></tr>');
        lugar ++;
			})
		});
	}
