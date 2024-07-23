// トップのパンダの動き
const panda = document.querySelector('.panda').animate(
	[
		{ transform: 'translateY(0) scale(1)' },
		{ transform: 'translateY(-70px)' },
		{ transform: 'scale(1)' },
		{ transform: 'translateY(0) scale(1)' }
	],
	{
		 duration: 4000,
		 iterations: Infinity
	}
);


// 送信ボタン
const btn = document.querySelector('.send');

btn.addEventListener('click', ()=>{
  btn.innerHTML = '送信しました' ;
  btn.setAttribute('disabled' , true);
});


// キャッチコピーのイラストの動き
const cp = document.querySelector('.people').animate(
	
	[
		{ transform: 'translateY(0) scale(1)' },
		{ transform: 'translateY(-140px)' },
		{ transform: 'scale(1)' },
		{ transform: 'scale(1.1, 0.9)' },
		{ transform: 'translateY(0) scale(1)' }
	],
	{
		 duration: 3000,
		 iterations: Infinity
	}
);


// お問い合わせのイラストの動き
const pan01 = document.querySelector('.pan0102').animate(
	[
		{
			offset: 0.00,
			transform: 'translate(0, 0)'
		},
		{
			offset: 0.05,
			transform: 'translate(-3%, 0)'
		},
		
		{
			offset: 0.10,
			transform: 'translate(3%, 0)'
		},
		{
			offset: 0.15,
			transform: 'translate(-3%, 0)'
		},
		{
			offset: 0.20,
			transform: 'translate(3%, 0)'
		},
		{
			offset: 0.25,
			transform: 'translate(-3%, 0)'
		},
		{
			offset: 0.30,
			transform: 'translate(0, 0)'
		},
		{
			offset: 1.00,
			transform: 'translate(0, 0)'
		}
	],

	{
		duration: 6000,
		iterations: Infinity
	}
);




	
