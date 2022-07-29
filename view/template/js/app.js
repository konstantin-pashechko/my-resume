document.addEventListener('dblclick', function(e){

	if(e.ctrlKey === true){
		(function(){
			let data = {}
			let url = document.location.href + 'edit'
			fetch (url,{
				method: 'POST',
				body: JSON.stringify(data),
				headers: {
					'Content-Type': 'application/json'
				},
			})
			document.location.reload();
		})()
	}
})

