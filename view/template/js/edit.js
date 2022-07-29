document.addEventListener('dblclick', function(e){

	const table = e.target.closest('[data-table]').dataset.table
	const id = e.target.closest('[data-row]').dataset.row
	const column = e.target.closest('[data-id]').dataset.id

	const content = prompt('Change?', e.target.textContent)

	const data = {
		url: document.location.href,
		el: e.target,
		table: table,
		id: id,
		column: column,
		textContent: content
	}

	async function update(data) {
		
		const response = await fetch(data.url+'edit/update',{
			method:'POST',
			body: JSON.stringify(data),
			headers: {'Content-Type': 'application/json'},
		})
		let text = await response.text()
		data.el.textContent = text
	}
	if (content !== null){
		update(data)
	}
})