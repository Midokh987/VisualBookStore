// const navLinks = document.querySelectorAll('nav a');
// navLinks.forEach(link => {
// 	link.addEventListener('click', e => {
// 		e.preventDefault();
// 		const category = link.getAttribute('data-category');
// 		const sections = document.querySelectorAll('section');
// 		sections.forEach(section => {
// 			if (section.getAttribute('data-category') === category) {
// 				section.classList.remove('hidden');
// 			} else {
// 				section.classList.add('hidden');
// 			}
// 		});
// 	});
// });





const searchForm = document.querySelector('.search form');

searchForm.addEventListener('submit', e => {
	e.preventDefault();
	const searchTerm = searchForm.querySelector('input[type="text"]').value.toLowerCase();
	constbookTitles
})







///search
const searchinput=document.getElementById("searchinput");
	
function search1(){
	const searchinput=document.getElementById("searchinput").value.toUpperCase();
	const allbooks=document.querySelector('allbooks');
	const bookname=document.querySelectorAll('h3');
	const li=document.querySelectorAll('li');

	for(let i=0;i<li.length;i++){
		if(bookname[i].innerHTML.toUpperCase().indexOf(searchinput)>=0){
li[i].style.display="block";
		}else{
			li[i].style.display="none";
		}
	}
}													

const bookname=document.querySelectorAll('h3');

//button to move cart 
function redirectme(url){
	window.location.href=url;
}


//plus cart
let a=0;
function cartplus(){
	a++;
	console.log(a);
		const cart_items=document.getElementById("items");
		cart_items.innerHTML=a;
}









