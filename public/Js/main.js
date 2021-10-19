const select = document.querySelector('#select');
const opciones = document.querySelector('#opciones');

const select2 = document.querySelector('#select2');
const opciones2 = document.querySelector('#opciones2');

const select3 = document.querySelector('#select3');
const opciones3 = document.querySelector('#opciones3');

const select4 = document.querySelector('#select4');
const opciones4 = document.querySelector('#opciones4');

const contenidoSelect = document.querySelector('#select .contenido-select');
const hiddenInput = document.querySelector('#inputSelect');

const contenidoSelect2 = document.querySelector('#select2 .contenido-select2');
const hiddenInput2 = document.querySelector('#inputSelect2');

const contenidoSelect3 = document.querySelector('#select3 .contenido-select3');
const hiddenInput3 = document.querySelector('#inputSelect3');

const contenidoSelect4 = document.querySelector('#select4 .contenido-select4');
const hiddenInput4 = document.querySelector('#inputSelect4');

/**Select-1**/
document.querySelectorAll('#opciones > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e) => {
		e.preventDefault();
		contenidoSelect.innerHTML = e.currentTarget.innerHTML;
		select.classList.toggle('active');
		opciones.classList.toggle('active');
		hiddenInput.value = e.currentTarget.querySelector('.titulo').innerText;
	});
});

select.addEventListener('click', () => {
	select.classList.toggle('active');
	opciones.classList.toggle('active');
});


/**Select-2**/

document.querySelectorAll('#opciones2 > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e) => {
		e.preventDefault();
		contenidoSelect2.innerHTML = e.currentTarget.innerHTML;
		select2.classList.toggle('active');
		opciones2.classList.toggle('active');
		hiddenInput2.value = e.currentTarget.querySelector('.titulo').innerText;
	});
});

select2.addEventListener('click', () => {
	select2.classList.toggle('active');
	opciones2.classList.toggle('active');
});

/**Select-3**/

document.querySelectorAll('#opciones3 > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e) => {
		e.preventDefault();
		contenidoSelect3.innerHTML = e.currentTarget.innerHTML;
		select3.classList.toggle('active');
		opciones3.classList.toggle('active');
		hiddenInput3.value = e.currentTarget.querySelector('.titulo').innerText;
	});
});

select3.addEventListener('click', () => {
	select3.classList.toggle('active');
	opciones3.classList.toggle('active');
});

/**Select-4**/

document.querySelectorAll('#opciones4 > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e) => {
		e.preventDefault();
		contenidoSelect4.innerHTML = e.currentTarget.innerHTML;
		select4.classList.toggle('active');
		opciones4.classList.toggle('active');
		hiddenInput4.value = e.currentTarget.querySelector('.titulo').innerText;
	});
});

select4.addEventListener('click', () => {
	select4.classList.toggle('active');
	opciones4.classList.toggle('active');
});
