const btn = document.getElementById('send');

btn.addEventListener('click', ()=>{
  btn.textContent = '送信しました' ;
  btn.setAttribute('disabled' , true);
});




const cp = document.getElementById('catchCopy').animate(
	
	[
		{ transform: 'translateY(0) scale(1)' },
		{ transform: 'translateY(-140px)' },
		{ transform: 'scale(1)' },
		{ transform: 'scale(1.3, 0.9)' },
		{ transform: 'translateY(0) scale(1)' }
	],
	{
		duration: 2000,
		iterations: Infinity
	}
);


	const kaiwa = document.getElementById('kaiwa01').animate(

	  [
			{ transform: 'translateY(0) scale(1)' },
			{ transform: 'translateY(-90px)' },
			{ transform: 'scale(1)' },
			{ transform: 'scale(1.0, 1.0)' },
			{ transform: 'translateY(0) scale(1)' }
		],
		{
			duration: 2000,
			// iterations: Infinity
		}
	);
